<?php
if (! defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', 'cc_theme_setup');
function cc_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'main_menu' => __('Menu Principal', 'criadoras-conteudo'),
    ));
}

add_action('wp_enqueue_scripts', 'cc_enqueue_assets');
function cc_enqueue_assets() {
    wp_enqueue_style('cc-style', get_stylesheet_uri(), array(), '1.0.0');
}

add_action('after_switch_theme', 'cc_create_custom_roles');
function cc_create_custom_roles() {
    if (!get_role('creator')) {
        add_role('creator', __('Criadora de Conteúdo', 'criadoras-conteudo'), array(
            'read' => true,
            'edit_posts' => true,
            'publish_posts' => true,
            'upload_files' => true,
            'access_creator_dashboard' => true,
        ));
    }

    if (!get_role('customer')) {
        add_role('customer', __('Cliente', 'criadoras-conteudo'), array(
            'read' => true,
        ));
    }
}

add_action('admin_init', 'cc_restrict_wp_admin_access');
function cc_restrict_wp_admin_access() {
    if (is_admin() && !current_user_can('manage_options') && !defined('DOING_AJAX')) {
        wp_safe_redirect(home_url('/minha-area/'));
        exit;
    }
}

add_action('template_redirect', 'cc_redirect_after_login');
function cc_redirect_after_login() {
    if (!is_user_logged_in() || !is_page('login')) {
        return;
    }

    if (current_user_can('access_creator_dashboard')) {
        wp_safe_redirect(home_url('/minha-area/'));
        exit;
    }

    if (current_user_can('customer')) {
        wp_safe_redirect(home_url('/area-cliente/'));
        exit;
    }
}

add_filter('show_admin_bar', 'cc_hide_admin_bar_for_non_admins');
function cc_hide_admin_bar_for_non_admins($show) {
    if (!current_user_can('manage_options')) {
        return false;
    }
    return $show;
}

add_shortcode('creator_dashboard', 'cc_creator_dashboard_shortcode');
function cc_creator_dashboard_shortcode() {
    if (!is_user_logged_in()) {
        return '<div class="card"><p>Você precisa estar logada para ver essa área.</p></div>';
    }

    if (!current_user_can('access_creator_dashboard')) {
        return '<div class="card"><p>Esta página é exclusiva para criadoras cadastradas.</p></div>';
    }

    $response = cc_handle_creator_submission();
    $content = '<div class="card"><h2>Meu Painel</h2>';
    $content .= '<p>Use este painel para criar posts e gerenciar seu conteúdo. Clientes terão acesso apenas depois da compra ou assinatura.</p>';

    if ($response) {
        $content .= '<div class="notice success">' . esc_html($response) . '</div>';
    }

    $content .= '<form method="post">';
    $content .= '<div class="form-row"><label for="content_title">Título do Conteúdo</label><input type="text" id="content_title" name="content_title" required></div>';
    $content .= '<div class="form-row"><label for="content_body">Descrição / Texto</label><textarea id="content_body" name="content_body" rows="8" required></textarea></div>';
    $content .= '<div class="form-row"><label for="content_price">Preço (R$)</label><input type="text" id="content_price" name="content_price" required></div>';
    $content .= '<div class="form-row"><label for="content_access">Tipo de acesso</label><select id="content_access" name="content_access"><option value="single">Conteúdo avulso</option><option value="subscriptions">Assinatura mensal</option></select></div>';
    $content .= '<input type="hidden" name="cc_creator_submit" value="1">';
    $content .= '<input type="submit" value="Publicar Conteúdo">';
    $content .= '</form></div>';

    $content .= cc_render_creator_posts();
    return $content;
}

function cc_handle_creator_submission() {
    if (!isset($_POST['cc_creator_submit']) || !current_user_can('access_creator_dashboard')) {
        return '';
    }

    $title = sanitize_text_field($_POST['content_title']);
    $body = wp_kses_post($_POST['content_body']);
    $price = sanitize_text_field($_POST['content_price']);
    $access = sanitize_text_field($_POST['content_access']);

    if (empty($title) || empty($body)) {
        return 'Preencha o título e a descrição do conteúdo.';
    }

    $post_id = wp_insert_post(array(
        'post_title' => $title,
        'post_content' => $body . '\n\n<strong>Preço:</strong> R$ ' . esc_html($price) . '\n\n<strong>Tipo de acesso:</strong> ' . esc_html($access),
        'post_status' => 'publish',
        'post_author' => get_current_user_id(),
        'post_type' => 'post',
    ));

    if (is_wp_error($post_id)) {
        return 'Houve um erro ao publicar. Tente novamente.';
    }

    update_post_meta($post_id, 'cc_content_price', $price);
    update_post_meta($post_id, 'cc_access_type', $access);
    return 'Conteúdo publicado com sucesso!';
}

function cc_render_creator_posts() {
    $user_id = get_current_user_id();
    $args = array(
        'author' => $user_id,
        'post_type' => 'post',
        'posts_per_page' => 10,
    );
    $query = new WP_Query($args);
    $output = '<div class="card"><h2>Meus conteúdos publicados</h2>';

    if ($query->have_posts()) {
        $output .= '<ul>';
        while ($query->have_posts()) {
            $query->the_post();
            $price = get_post_meta(get_the_ID(), 'cc_content_price', true);
            $access = get_post_meta(get_the_ID(), 'cc_access_type', true);
            $output .= '<li><strong>' . get_the_title() . '</strong> - R$ ' . esc_html($price) . ' - ' . esc_html($access) . ' <a href="' . get_permalink() . '">Ver</a></li>';
        }
        $output .= '</ul>';
    } else {
        $output .= '<p>Você ainda não publicou nenhum conteúdo.</p>';
    }
    wp_reset_postdata();
    $output .= '</div>';
    return $output;
}

function cc_custom_login_form() {
    if (is_user_logged_in()) {
        return '<p>Você já está logada.</p>';
    }

    ob_start();
    wp_login_form(array(
        'redirect' => home_url('/area-cliente/'),
        'label_username' => __('E-mail ou usuário', 'criadoras-conteudo'),
    ));
    $form = ob_get_clean();
    $social = cc_get_social_login_buttons();

    return '<div class="card"><p>Use seu login seguro ou autentique-se via login social se o plugin estiver ativo.</p>' . $form . $social . '</div>';
}

function cc_get_social_login_buttons() {
    if (function_exists('nextend_social_login_output')) {
        return '<div class="card"><h3>Login Social</h3>' . nextend_social_login_output() . '</div>';
    }

    if (function_exists('wordpress_social_login')) {
        return '<div class="card"><h3>Login Social</h3>' . wordpress_social_login() . '</div>';
    }

    return '<div class="card"><p>Para login social, instale um plugin como Nextend Social Login ou WooCommerce Social Login.</p></div>';
}

add_shortcode('creator_login', 'cc_custom_login_form');
add_shortcode('customer_area', 'cc_customer_area_shortcode');

function cc_customer_area_shortcode() {
    if (!is_user_logged_in()) {
        return '<div class="card"><p>Você precisa estar logado para acessar esta área.</p></div>';
    }

    if (!current_user_can('customer') && !current_user_can('access_creator_dashboard')) {
        return '<div class="card"><p>Esta área é exclusiva para clientes cadastrados.</p></div>';
    }

    $user = wp_get_current_user();
    $content = '<div class="card"><h2>Bem-vindo(a), ' . esc_html($user->display_name) . '</h2>';
    $content .= '<p>Confira seus planos, compras e conteúdos liberados.</p>';

    if (class_exists('WooCommerce')) {
        $content .= '<p>Acesse seus pedidos e assinaturas diretamente no painel do cliente.</p>';
    }

    $content .= '<p><a href="' . esc_url(home_url('/planos/')) . '">Ver planos e assinaturas</a></p>';
    $content .= '</div>';
    return $content;
}

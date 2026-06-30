<?php get_header(); ?>

<div class="card">
    <h2><?php the_title(); ?></h2>
    <p style="color: #6B7280; font-size: 16px;">
        <?php 
        echo get_the_date('j \d\e F \d\e Y');
        ?>
    </p>
</div>

<div class="card">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <article class="post-item" style="margin-bottom: 30px;">
                <?php 
                if (has_post_thumbnail()) {
                    echo '<div style="margin-bottom: 20px;">';
                    the_post_thumbnail('large', array('style' => 'max-width: 100%; height: auto; border-radius: 12px; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);'));
                    echo '</div>';
                }
                ?>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
                <div style="margin-top: 30px; padding-top: 20px; border-top: 2px solid var(--border); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
                    <span style="color: var(--text-light); font-size: 14px;">
                        📅 <?php echo get_the_date('j \d\e F'); ?> | 
                        ✍️ <?php echo get_the_author(); ?>
                    </span>
                    <a href="<?php the_permalink(); ?>" class="btn" style="display: inline-block; margin-top: 10px;">Ler mais →</a>
                </div>
            </article>
            <?php
        endwhile;
    else :
        ?>
        <div style="text-align: center; padding: 40px;">
            <h3 style="color: var(--text-light);">😔 Nenhum artigo encontrado</h3>
            <p style="color: var(--text-light);">Não há conteúdo disponível no momento. Volte em breve!</p>
        </div>
    <?php endif; ?>
</div>

<!-- Pagination -->
<div style="display: flex; justify-content: center; gap: 10px; margin-top: 40px; padding: 20px 0;">
    <?php
    the_posts_pagination(array(
        'prev_text' => '← Anterior',
        'next_text' => 'Próxima →',
        'type' => 'list',
    ));
    ?>
</div>

<?php get_footer(); ?>
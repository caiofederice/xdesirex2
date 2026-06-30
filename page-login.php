<?php
/*
Template Name: Página de Login
*/
get_header(); ?>

<div class="card hero-card" style="text-align: center; margin-bottom: 40px;">
    <h2 style="font-size: 32px;">🔑 Acesso Exclusivo para Criadoras</h2>
    <p>Conecte-se ao seu painel e gerencie seus conteúdos exclusivos</p>
</div>

<div style="max-width: 600px; margin: 0 auto;">
    <div class="card">
        <h2 style="background: linear-gradient(135deg, #7C3AED 0%, #FF6B35 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Login da Criadora</h2>
        <p style="color: #6B7280; font-size: 16px;">Acesse sua área privada usando suas credenciais. Apenas criadoras cadastradas têm permissão de entrada.</p>
        
        <div style="background: linear-gradient(135deg, rgba(124, 58, 237, 0.05) 0%, rgba(255, 107, 53, 0.05) 100%); padding: 30px; border-radius: 12px; margin: 30px 0; border: 2px solid var(--border);">
            <?php echo do_shortcode('[creator_login]'); ?>
        </div>
        
        <div style="margin-top: 30px; padding-top: 30px; border-top: 2px solid var(--border);">
            <p style="text-align: center; color: #6B7280;">Não tem uma conta ainda?</p>
            <div style="text-align: center;">
                <a href="<?php echo esc_url(home_url('/minha-area/')); ?>" class="btn" style="background: linear-gradient(135deg, #FF6B35 0%, #FF5722 100%);">Entre em contato conosco</a>
            </div>
        </div>
    </div>
</div>

<div class="card" style="margin-top: 40px; background: linear-gradient(135deg, rgba(16, 185, 129, 0.05) 0%, rgba(37, 99, 235, 0.05) 100%); border-top: 4px solid #10B981;">
    <h3 style="color: #10B981;">✨ Dicas para sua segurança:</h3>
    <ul style="color: #6B7280; line-height: 2;">
        <li>✅ Nunca compartilhe sua senha com ninguém</li>
        <li>✅ Use uma senha forte com números, letras e caracteres especiais</li>
        <li>✅ Faça logout ao usar computadores compartilhados</li>
        <li>✅ Entre em contato imediato se notar atividade suspeita</li>
    </ul>
</div>

<?php get_footer(); ?>
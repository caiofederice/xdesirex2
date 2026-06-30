</main>

<footer class="site-footer">
    <div class="main-content" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 30px; margin-bottom: 40px; max-width: 1200px; margin-left: auto; margin-right: auto; padding: 0;">
        
        <div>
            <h4 style="color: var(--text); font-size: 16px; font-weight: 700; margin-bottom: 16px; margin-top: 0;">💎 Para Comprador</h4>
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li style="margin-bottom: 10px;"><a href="<?php echo esc_url(home_url('/explore-creators/')); ?>" style="color: var(--text-light); font-size: 14px;">🔍 Explorar Criadoras</a></li>
                <li style="margin-bottom: 10px;"><a href="<?php echo esc_url(home_url('/dashboard-buyer/')); ?>" style="color: var(--text-light); font-size: 14px;">📊 Meu Dashboard</a></li>
                <li style="margin-bottom: 10px;"><a href="<?php echo esc_url(home_url('/messages/')); ?>" style="color: var(--text-light); font-size: 14px;">💬 Mensagens</a></li>
                <li style="margin-bottom: 10px;"><a href="<?php echo esc_url(home_url('/planos/')); ?>" style="color: var(--text-light); font-size: 14px;">💰 Planos</a></li>
            </ul>
        </div>
        
        <div>
            <h4 style="color: var(--text); font-size: 16px; font-weight: 700; margin-bottom: 16px; margin-top: 0;">🎨 Para Criadora</h4>
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li style="margin-bottom: 10px;"><a href="<?php echo esc_url(home_url('/dashboard-creator/')); ?>" style="color: var(--text-light); font-size: 14px;">📊 Meu Painel</a></li>
                <li style="margin-bottom: 10px;"><a href="<?php echo esc_url(home_url('/login/')); ?>" style="color: var(--text-light); font-size: 14px;">🔑 Login</a></li>
                <li style="margin-bottom: 10px;"><a href="<?php echo esc_url(home_url('/minha-area/')); ?>" style="color: var(--text-light); font-size: 14px;">👤 Minha Área</a></li>
                <li style="margin-bottom: 10px;"><a href="<?php echo esc_url(home_url('/')); ?>" style="color: var(--text-light); font-size: 14px;">📈 Crescer</a></li>
            </ul>
        </div>
        
        <div>
            <h4 style="color: var(--text); font-size: 16px; font-weight: 700; margin-bottom: 16px; margin-top: 0;">ℹ️ Informações</h4>
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li style="margin-bottom: 10px;"><a href="<?php echo esc_url(home_url('/')); ?>" style="color: var(--text-light); font-size: 14px;">Sobre Nós</a></li>
                <li style="margin-bottom: 10px;"><a href="<?php echo esc_url(home_url('/')); ?>" style="color: var(--text-light); font-size: 14px;">🔒 Privacidade</a></li>
                <li style="margin-bottom: 10px;"><a href="<?php echo esc_url(home_url('/')); ?>" style="color: var(--text-light); font-size: 14px;">📋 Termos</a></li>
                <li style="margin-bottom: 10px;"><a href="<?php echo esc_url(home_url('/')); ?>" style="color: var(--text-light); font-size: 14px;">📧 Contato</a></li>
            </ul>
        </div>
    </div>
    
    <div style="border-top: 1px solid var(--border); padding-top: 30px; text-align: center; max-width: 1200px; margin: 0 auto;">
        <p class="footer-copy" style="margin: 0; color: var(--text-light); font-size: 14px;">&copy; <?php echo date('Y'); ?> <strong><?php bloginfo('name'); ?></strong>. Todos os direitos reservados. | Feito com ❤️ para criadoras</p>
        <p style="margin: 10px 0 0; color: var(--text-muted); font-size: 12px;">🚀 Plataforma segura e confiável para criadores de conteúdo</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

<?php
/*
Template Name: Área do Cliente
*/
get_header(); ?>

<div class="card hero-card" style="text-align: center;">
    <h2 style="font-size: 32px;">🎉 Bem-vindo à sua Área VIP</h2>
    <p>Todos os seus conteúdos exclusivos em um só lugar</p>
</div>

<div class="card">
    <h2 style="background: linear-gradient(135deg, #7C3AED 0%, #FF6B35 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Sua Biblioteca Pessoal</h2>
    <p style="color: #6B7280; font-size: 16px;">Acesse todo o conteúdo que você adquiriu ou que está incluído em seu plano de assinatura.</p>
    
    <div style="background: linear-gradient(135deg, rgba(124, 58, 237, 0.05) 0%, rgba(255, 107, 53, 0.05) 100%); padding: 30px; border-radius: 12px; margin: 30px 0; border: 2px solid var(--border);">
        <?php echo do_shortcode('[customer_area]'); ?>
    </div>
</div>

<div class="card product-box" style="margin-top: 40px;">
    <div style="border-top-color: #7C3AED !important;">
        <h3 style="color: #7C3AED;">📚 Seu Conteúdo</h3>
        <p>✅ Acesse seus e-books</p>
        <p>✅ Assista vídeos exclusivos</p>
        <p>✅ Baixe recursos premium</p>
        <p>✅ Compartilhe em sua comunidade</p>
        <p>✅ Suporte técnico 24/7</p>
    </div>
    
    <div style="border-top-color: #10B981 !important;">
        <h3 style="color: #10B981;">🎁 Benefícios VIP</h3>
        <p>⭐ Acesso antecipado a novidades</p>
        <p>💬 Chat direto com criadoras</p>
        <p>🎯 Conteúdo personalizado</p>
        <p>🚀 Comunidade privada exclusiva</p>
        <p>🎊 Eventos especiais VIP</p>
    </div>
</div>

<div class="card" style="text-align: center; background: linear-gradient(135deg, rgba(37, 99, 235, 0.05) 0%, rgba(16, 185, 129, 0.05) 100%); border-top: 4px solid #2563EB;">
    <h3 style="color: #2563EB;">💡 Dica: Aproveite ao Máximo</h3>
    <p>Baixe seus arquivos enquanto sua assinatura está ativa. Crie uma pasta em seu computador para organizar melhor seus favoritos!</p>
</div>

<?php get_footer(); ?>
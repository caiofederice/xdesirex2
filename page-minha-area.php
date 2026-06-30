<?php
/*
Template Name: Minha Área
*/
get_header(); ?>

<div class="card hero-card" style="text-align: center;">
    <h2 style="font-size: 32px;">👤 Seu Painel de Controle</h2>
    <p>Gerencie suas vendas, conteúdos e assinantes em um único lugar</p>
</div>

<div class="card">
    <h2 style="background: linear-gradient(135deg, #7C3AED 0%, #FF6B35 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Bem-vinda ao seu Dashboard</h2>
    <p style="color: #6B7280; font-size: 16px;">Aqui você tem controle total sobre sua loja e interação com seus clientes.</p>
    
    <div style="background: linear-gradient(135deg, rgba(124, 58, 237, 0.05) 0%, rgba(255, 107, 53, 0.05) 100%); padding: 30px; border-radius: 12px; margin: 30px 0; border: 2px solid var(--border);">
        <?php echo do_shortcode('[creator_dashboard]'); ?>
    </div>
</div>

<div class="card product-box" style="margin-top: 40px;">
    <div style="border-top-color: #7C3AED !important;">
        <h3 style="color: #7C3AED;">📊 Seu Desempenho</h3>
        <p>💰 <strong>Total de Vendas:</strong> Veja quanto você ganhou</p>
        <p>📈 <strong>Crescimento:</strong> Acompanhe sua evolução mês a mês</p>
        <p>👥 <strong>Assinantes:</strong> Conheça melhor sua comunidade</p>
        <p>⭐ <strong>Avaliações:</strong> Veja o que seus clientes pensam</p>
    </div>
    
    <div style="border-top-color: #10B981 !important;">
        <h3 style="color: #10B981;">🎯 Ações Rápidas</h3>
        <p>✏️ Edite seus produtos e planos</p>
        <p>📸 Adicione novas mídias</p>
        <p>💬 Responda seus clientes</p>
        <p>🚀 Crie promoções especiais</p>
        <p>📧 Envie newsletters</p>
    </div>
</div>

<div class="card" style="text-align: center; background: linear-gradient(135deg, rgba(37, 99, 235, 0.05) 0%, rgba(16, 185, 129, 0.05) 100%); border-top: 4px solid #2563EB;">
    <h3 style="color: #2563EB;">💡 Dica Profissional</h3>
    <p>Mantenha seu conteúdo sempre atualizado para manter seus assinantes engajados. Poste pelo menos 2-3 vezes por semana para melhores resultados!</p>
</div>

<?php get_footer(); ?>
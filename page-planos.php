<?php
/*
Template Name: Planos e Conteúdos
*/
get_header(); ?>

<div class="card hero-card" style="text-align: center;">
    <h2 style="font-size: 36px;">💎 Escolha o Seu Plano Perfeito</h2>
    <p style="font-size: 18px;">Acesso ilimitado a conteúdos exclusivos com assinaturas flexíveis</p>
</div>

<div class="card">
    <h2>📦 Formas de Acessar Conteúdo</h2>
    <p>Escolha a opção que melhor se encaixa em suas necessidades:</p>
</div>

<div class="card author-box">
    <div style="border-top-color: #FF6B35 !important;">
        <h3 style="color: #FF6B35;">🛍️ Compras Avulsas</h3>
        <p><strong>Para quem quer experimentar:</strong></p>
        <ul style="color: #6B7280;">
            <li>Compre conteúdo individual</li>
            <li>Acesso permanente</li>
            <li>Sem compromisso de renovação</li>
            <li>Ideal para iniciantes</li>
        </ul>
        <p style="margin-top: 20px;"><a href="<?php echo esc_url(home_url('/planos/')); ?>" class="btn" style="background: linear-gradient(135deg, #FF6B35 0%, #FF5722 100%); display: inline-block;">Explorar Produtos →</a></p>
    </div>
    
    <div style="border-top-color: #7C3AED !important;">
        <h3 style="color: #7C3AED;">⭐ Assinatura Mensal</h3>
        <p><strong>Para superfãs:</strong></p>
        <ul style="color: #6B7280;">
            <li>Acesso COMPLETO a todo conteúdo</li>
            <li>Novos materiais toda semana</li>
            <li>Conteúdo exclusivo de membros</li>
            <li>Comunidade VIP private</li>
            <li>Suporte prioritário</li>
        </ul>
        <p style="margin-top: 20px;"><a href="<?php echo esc_url(home_url('/planos/')); ?>" class="btn" style="display: inline-block;">Ver Planos →</a></p>
    </div>
</div>

<div class="card product-box">
    <div style="border-top-color: #2563EB !important;">
        <h3 style="color: #2563EB;">🎁 O Que Você Ganha</h3>
        <ul style="color: #6B7280;">
            <li>📸 Acesso a fotos e vídeos HD</li>
            <li>📚 E-books e guias premium</li>
            <li>🎬 Tutoriais exclusivos</li>
            <li>💬 Comunidade privada</li>
            <li>🎯 Conteúdo personalizado</li>
            <li>🚀 Acesso antecipado a lançamentos</li>
        </ul>
    </div>
    
    <div style="border-top-color: #10B981 !important;">
        <h3 style="color: #10B981;">💳 Pagamento Seguro</h3>
        <ul style="color: #6B7280;">
            <li>✅ Transações 100% seguras</li>
            <li>💳 Múltiplas formas de pagamento</li>
            <li>🔒 Dados protegidos com encriptação</li>
            <li>📋 Recibos automáticos</li>
            <li>🔄 Cancelamento fácil a qualquer momento</li>
            <li>❌ Sem taxas ocultas</li>
        </ul>
    </div>
</div>

<div class="card" style="text-align: center; background: linear-gradient(135deg, rgba(124, 58, 237, 0.1) 0%, rgba(255, 107, 53, 0.1) 100%); border-top: none;">
    <h2>🎊 Pronto para começar?</h2>
    <p style="font-size: 18px;">Junte-se a nossa comunidade exclusiva</p>
    <a href="<?php echo esc_url(home_url('/planos/')); ?>" class="btn" style="margin-top: 20px;">Explorar Conteúdo Agora 🚀</a>
</div>

<?php get_footer(); ?>
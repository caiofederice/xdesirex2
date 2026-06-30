<?php
/*
Template Name: Dashboard Comprador
*/
get_header(); ?>

<div class="card hero-card" style="text-align: center; margin-bottom: 40px;">
    <h2>👋 Bem-vindo, Comprador!</h2>
    <p>Seu espaço para descobrir e aproveitar conteúdo exclusivo</p>
</div>

<!-- Tabs Navigation -->
<div class="tabs-container">
    <ul class="tabs-nav" style="list-style: none; padding: 0; display: flex; gap: 0; border-bottom: 2px solid var(--border);">
        <li><button class="tab-button active" data-tab="feed" style="padding: 16px 24px; background: transparent; border: none; color: var(--primary); border-bottom: 3px solid var(--primary); cursor: pointer; font-weight: 600;">📰 Feed</button></li>
        <li><button class="tab-button" data-tab="recomendacoes" style="padding: 16px 24px; background: transparent; border: none; color: var(--text-light); cursor: pointer; font-weight: 600;">⭐ Recomendações IA</button></li>
        <li><button class="tab-button" data-tab="compras" style="padding: 16px 24px; background: transparent; border: none; color: var(--text-light); cursor: pointer; font-weight: 600;">🛍️ Minhas Compras</button></li>
        <li><button class="tab-button" data-tab="mensagens" style="padding: 16px 24px; background: transparent; border: none; color: var(--text-light); cursor: pointer; font-weight: 600;">💬 Mensagens</button></li>
    </ul>
</div>

<!-- Feed Tab -->
<div id="feed" class="tab-content active" style="display: block;">
    <div class="card" style="margin-top: 0; margin-bottom: 20px;">
        <h3>📰 Feed de Conteúdo</h3>
        <p>Novos conteúdos dos criadores que você segue:</p>
    </div>

    <div style="display: grid; gap: 20px; margin-bottom: 40px;">
        <?php for ($i = 1; $i <= 5; $i++) { ?>
        <div class="card" style="margin-bottom: 0;">
            <div style="display: flex; gap: 16px; align-items: center; margin-bottom: 16px;">
                <img src="https://via.placeholder.com/60" alt="Avatar" style="width: 60px; height: 60px; border-radius: 50%; border: 2px solid var(--primary);">
                <div>
                    <h4 style="color: var(--primary); margin: 0;">Criadora <?php echo $i; ?></h4>
                    <p style="color: var(--text-light); margin: 4px 0; font-size: 12px;">Publicado há 2 horas</p>
                </div>
            </div>
            <p>Novo conteúdo exclusivo disponível! Confira os últimos vídeos, fotos e muito mais...</p>
            <button class="btn" style="width: auto; padding: 8px 16px;">Ver conteúdo →</button>
        </div>
        <?php } ?>
    </div>
</div>

<!-- Recomendações IA Tab -->
<div id="recomendacoes" class="tab-content" style="display: none;">
    <div class="card" style="margin-top: 0; margin-bottom: 20px;">
        <h3>⭐ Recomendações Personalizadas</h3>
        <p>Baseado no seu histórico e preferências:</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px;">
        <?php for ($i = 1; $i <= 6; $i++) { ?>
        <div class="profile-card">
            <div style="height: 100px; background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);"></div>
            <img src="https://via.placeholder.com/80" alt="Avatar" class="profile-avatar" style="margin-top: -40px; width: 80px; height: 80px;">
            <div style="padding: 16px;">
                <h3 class="profile-name">Criadora Recomendada</h3>
                <p style="color: var(--text-light); font-size: 12px; margin: 8px 0;">✨ Compatibilidade: 92%</p>
                <p style="color: var(--text-light); font-size: 12px;">Motivo: Baseado em criadores similares que você segue</p>
                <button class="btn" style="width: 100%; margin-top: 12px; padding: 8px;">Conhecer →</button>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<!-- Compras Tab -->
<div id="compras" class="tab-content" style="display: none;">
    <div class="card" style="margin-top: 0; margin-bottom: 20px;">
        <h3>🛍️ Histórico de Compras</h3>
        <p>Acesse seus conteúdos comprados:</p>
    </div>

    <div class="grid-2" style="display: grid;">
        <?php for ($i = 1; $i <= 6; $i++) { ?>
        <div class="card" style="margin-bottom: 0;">
            <div style="display: flex; justify-content: space-between; align-items: start;">
                <div style="flex: 1;">
                    <h4 style="margin-top: 0; margin-bottom: 8px;">Conteúdo Premium #<?php echo $i; ?></h4>
                    <p style="color: var(--text-light); font-size: 12px; margin: 4px 0;">Criadora <?php echo $i; ?></p>
                    <p style="color: var(--text-light); font-size: 12px; margin: 4px 0;">Comprado: 15/02/2026</p>
                </div>
                <p style="color: var(--primary); font-weight: 700; font-size: 18px; margin: 0;">R$ 29,90</p>
            </div>
            <button class="btn secondary" style="width: 100%; margin-top: 12px;">📥 Acessar Conteúdo</button>
        </div>
        <?php } ?>
    </div>
</div>

<!-- Mensagens Tab -->
<div id="mensagens" class="tab-content" style="display: none;">
    <div class="card" style="margin-top: 0;">
        <h3>💬 Mensagens Diretas</h3>
        <p>Chats com criadores que você segue:</p>

        <div style="display: grid; gap: 12px; margin-top: 20px;">
            <?php for ($i = 1; $i <= 5; $i++) { ?>
            <div style="display: flex; align-items: center; gap: 12px; padding: 12px; background: var(--bg-hover); border-radius: 8px; cursor: pointer; border: 1px solid var(--border); transition: all 0.3s;">
                <img src="https://via.placeholder.com/48" alt="Avatar" style="width: 48px; height: 48px; border-radius: 50%; border: 2px solid var(--primary);">
                <div style="flex: 1; min-width: 0;">
                    <h4 style="margin: 0; color: var(--primary);">Criadora <?php echo $i; ?></h4>
                    <p style="color: var(--text-light); font-size: 12px; margin: 4px 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Última mensagem foi há 2 horas...</p>
                </div>
                <span style="background: var(--primary); color: var(--text); padding: 4px 8px; border-radius: 12px; font-size: 12px; font-weight: 600;">2</span>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="grid-3" style="display: grid; gap: 20px; margin-top: 40px;">
    <div class="stat-card">
        <p class="stat-value">42</p>
        <p class="stat-label">Criadoras Seguidas</p>
    </div>
    <div class="stat-card">
        <p class="stat-value">18</p>
        <p class="stat-label">Compras Ativas</p>
    </div>
    <div class="stat-card">
        <p class="stat-value">R$ 1.234</p>
        <p class="stat-label">Gasto Total</p>
    </div>
</div>

<script>
document.querySelectorAll('.tab-button').forEach(button => {
    button.addEventListener('click', function() {
        const tabName = this.getAttribute('data-tab');
        
        // Hide all tabs
        document.querySelectorAll('.tab-content').forEach(tab => {
            tab.style.display = 'none';
            tab.classList.remove('active');
        });
        
        // Remove active from all buttons
        document.querySelectorAll('.tab-button').forEach(btn => {
            btn.style.color = 'var(--text-light)';
            btn.style.borderBottom = 'none';
        });
        
        // Show selected tab
        document.getElementById(tabName).style.display = 'block';
        document.getElementById(tabName).classList.add('active');
        
        // Mark button as active
        this.style.color = 'var(--primary)';
        this.style.borderBottom = '3px solid var(--primary)';
    });
});
</script>

<?php get_footer(); ?>

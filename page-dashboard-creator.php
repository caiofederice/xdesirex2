<?php
/*
Template Name: Dashboard Criadora
*/
get_header(); ?>

<div class="card hero-card" style="text-align: center; margin-bottom: 40px;">
    <h2>📊 Seu Painel de Controle</h2>
    <p>Gerencie suas vendas e conteúdos exclusivos</p>
</div>

<!-- Quick Stats -->
<div class="grid-4" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 40px;">
    <div class="stat-card">
        <p class="stat-value">$2.450</p>
        <p class="stat-label">Ganhos Este Mês</p>
    </div>
    <div class="stat-card">
        <p class="stat-value">156</p>
        <p class="stat-label">Assinantes Ativos</p>
    </div>
    <div class="stat-card">
        <p class="stat-value">428</p>
        <p class="stat-label">Total de Seguidores</p>
    </div>
    <div class="stat-card">
        <p class="stat-value">4.9⭐</p>
        <p class="stat-label">Avaliação Média</p>
    </div>
</div>

<!-- Tabs Navigation -->
<div class="tabs-container">
    <ul class="tabs-nav" style="list-style: none; padding: 0; display: flex; gap: 0; border-bottom: 2px solid var(--border); overflow-x: auto;">
        <li><button class="tab-button active" data-tab="visao-geral" style="padding: 16px 24px; background: transparent; border: none; color: var(--primary); border-bottom: 3px solid var(--primary); cursor: pointer; font-weight: 600; white-space: nowrap;">📈 Visão Geral</button></li>
        <li><button class="tab-button" data-tab="conteudos" style="padding: 16px 24px; background: transparent; border: none; color: var(--text-light); cursor: pointer; font-weight: 600; white-space: nowrap;">📁 Conteúdos</button></li>
        <li><button class="tab-button" data-tab="vendas" style="padding: 16px 24px; background: transparent; border: none; color: var(--text-light); cursor: pointer; font-weight: 600; white-space: nowrap;">💰 Vendas</button></li>
        <li><button class="tab-button" data-tab="assinantes" style="padding: 16px 24px; background: transparent; border: none; color: var(--text-light); cursor: pointer; font-weight: 600; white-space: nowrap;">👥 Assinantes</button></li>
        <li><button class="tab-button" data-tab="configuracoes" style="padding: 16px 24px; background: transparent; border: none; color: var(--text-light); cursor: pointer; font-weight: 600; white-space: nowrap;">⚙️ Configurações</button></li>
    </ul>
</div>

<!-- Visão Geral Tab -->
<div id="visao-geral" class="tab-content active" style="display: block;">
    <div class="grid-2" style="display: grid; gap: 20px; margin-top: 0;">
        <div class="card">
            <h3>📊 Ganhos - Últimos 7 dias</h3>
            <div style="height: 200px; background: var(--bg-hover); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: var(--text-light);">
                [Gráfico de ganhos aqui]
            </div>
        </div>
        <div class="card">
            <h3>📥 Inscrições - Últimos 7 dias</h3>
            <div style="height: 200px; background: var(--bg-hover); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: var(--text-light);">
                [Gráfico de inscrições aqui]
            </div>
        </div>
    </div>

    <div class="card" style="margin-top: 20px;">
        <h3>🎯 Ações Rápidas</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 12px;">
            <button class="btn" style="padding: 12px; font-size: 14px;">➕ Novo Conteúdo</button>
            <button class="btn" style="padding: 12px; font-size: 14px;">📢 Criar Promoção</button>
            <button class="btn secondary" style="padding: 12px; font-size: 14px;">📧 Newsletter</button>
            <button class="btn secondary" style="padding: 12px; font-size: 14px;">🎁 Oferta Especial</button>
        </div>
    </div>
</div>

<!-- Conteúdos Tab -->
<div id="conteudos" class="tab-content" style="display: none;">
    <div class="card" style="margin-top: 0; margin-bottom: 20px;">
        <h3>📁 Meus Conteúdos</h3>
        <button class="btn" style="width: auto;">➕ Adicionar Novo Conteúdo</button>
    </div>

    <div style="display: grid; gap: 12px;">
        <?php for ($i = 1; $i <= 5; $i++) { ?>
        <div class="card" style="margin-bottom: 0; display: flex; justify-content: space-between; align-items: center;">
            <div>
                <h4 style="margin: 0 0 8px 0;">Conteúdo Premium #<?php echo $i; ?></h4>
                <p style="color: var(--text-light); font-size: 12px; margin: 0;">Publicado: 20/02/2026 | 234 visualizações</p>
            </div>
            <div style="display: flex; gap: 8px;">
                <button style="padding: 8px 12px; background: var(--bg-hover); border: 1px solid var(--border); color: var(--text-light); border-radius: 6px; cursor: pointer;">✏️ Editar</button>
                <button style="padding: 8px 12px; background: var(--bg-hover); border: 1px solid var(--border); color: var(--text-light); border-radius: 6px; cursor: pointer;">🗑️ Remover</button>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<!-- Vendas Tab -->
<div id="vendas" class="tab-content" style="display: none;">
    <div class="card" style="margin-top: 0; margin-bottom: 20px;">
        <h3>💰 Histórico de Vendas</h3>
        <p style="color: var(--text-light);">Últimas transações:</p>
    </div>

    <div style="display: grid; gap: 12px;">
        <?php for ($i = 1; $i <= 8; $i++) { ?>
        <div class="card" style="margin-bottom: 0; display: flex; justify-content: space-between; align-items: center;">
            <div>
                <h4 style="margin: 0 0 4px 0;">Cliente <?php echo $i; ?> - Conteúdo Premium</h4>
                <p style="color: var(--text-light); font-size: 12px; margin: 0;">20/02/2026 • ID: #<?php echo 10000 + $i; ?></p>
            </div>
            <div style="text-align: right;">
                <p style="color: var(--success); font-weight: 700; margin: 0; font-size: 16px;">+R$ 29,90</p>
                <span style="background: rgba(0, 255, 136, 0.2); color: var(--success); padding: 4px 8px; border-radius: 4px; font-size: 12px;">✓ Pago</span>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<!-- Assinantes Tab -->
<div id="assinantes" class="tab-content" style="display: none;">
    <div class="card" style="margin-top: 0; margin-bottom: 20px;">
        <h3>👥 Meus Assinantes</h3>
        <p style="color: var(--text-light);">Total: 156 assinantes ativos</p>
    </div>

    <div style="display: grid; gap: 12px;">
        <?php for ($i = 1; $i <= 5; $i++) { ?>
        <div class="card" style="margin-bottom: 0; display: flex; align-items: center; justify-content: space-between; gap: 16px;">
            <div style="display: flex; align-items: center; gap: 12px;">
                <img src="https://via.placeholder.com/40" alt="Avatar" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid var(--primary);">
                <div>
                    <h4 style="margin: 0; color: var(--text);">Assinante <?php echo $i; ?></h4>
                    <p style="color: var(--text-light); font-size: 12px; margin: 0;">Desde: 01/01/2026</p>
                </div>
            </div>
            <div style="text-align: right;">
                <p style="color: var(--success); font-weight: 600; margin: 0;">Ativo ✓</p>
                <p style="color: var(--text-light); font-size: 12px; margin: 0;">Plano: Premium</p>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<!-- Configurações Tab -->
<div id="configuracoes" class="tab-content" style="display: none;">
    <div class="card" style="margin-top: 0;">
        <h3>⚙️ Configurações</h3>
        
        <div style="margin: 20px 0;">
            <label style="font-weight: 600; margin-bottom: 8px; display: block; color: var(--primary);">Descrição do Perfil</label>
            <textarea style="width: 100%; padding: 12px; background: var(--bg-hover); border: 1px solid var(--border); border-radius: 8px; color: var(--text); height: 100px; resize: vertical; font-family: inherit;">Escreva uma descrição sobre você e seu conteúdo...</textarea>
        </div>

        <div style="margin: 20px 0;">
            <label style="font-weight: 600; margin-bottom: 8px; display: block; color: var(--primary);">Preço do Plano Mensal (R$)</label>
            <input type="number" value="99.90" style="width: 100%; padding: 12px; background: var(--bg-hover); border: 1px solid var(--border); border-radius: 8px; color: var(--text);">
        </div>

        <div style="margin: 20px 0;">
            <label style="display: flex; align-items: center; gap: 12px; cursor: pointer;">
                <input type="checkbox" checked style="width: 20px; height: 20px; cursor: pointer;">
                <span style="color: var(--text);">Permitir mensagens de seguidores</span>
            </label>
        </div>

        <button class="btn" style="margin-top: 20px; width: auto;">💾 Salvar Configurações</button>
    </div>
</div>

<script>
document.querySelectorAll('.tab-button').forEach(button => {
    button.addEventListener('click', function() {
        const tabName = this.getAttribute('data-tab');
        
        document.querySelectorAll('.tab-content').forEach(tab => {
            tab.style.display = 'none';
        });
        
        document.querySelectorAll('.tab-button').forEach(btn => {
            btn.style.color = 'var(--text-light)';
            btn.style.borderBottom = 'none';
        });
        
        document.getElementById(tabName).style.display = 'block';
        this.style.color = 'var(--primary)';
        this.style.borderBottom = '3px solid var(--primary)';
    });
});
</script>

<?php get_footer(); ?>

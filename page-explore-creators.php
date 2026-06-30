<?php
/*
Template Name: Explorar Criadoras
*/
get_header(); ?>

<div class="card hero-card" style="text-align: center; margin-bottom: 40px;">
    <h2>🔍 Explore Nossas Criadoras</h2>
    <p>Descubra conteúdo exclusivo de criadores incríveis</p>
</div>

<div class="card" style="margin-bottom: 40px;">
    <h2>Filtros de Busca</h2>
    <div class="filter-container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px;">
        
        <div class="filter-group">
            <label style="font-weight: 600; margin-bottom: 8px; display: block; color: var(--primary);">Categoria</label>
            <select id="filter-category" style="width: 100%; padding: 10px; background: var(--bg-hover); border: 1px solid var(--border); border-radius: 6px; color: var(--text);">
                <option value="">Todas as categorias</option>
                <option value="fotos">📸 Fotos</option>
                <option value="videos">🎥 Vídeos</option>
                <option value="cursos">📚 Cursos</option>
                <option value="musica">🎵 Música</option>
                <option value="arte">🎨 Arte</option>
                <option value="fitness">💪 Fitness</option>
            </select>
        </div>

        <div class="filter-group">
            <label style="font-weight: 600; margin-bottom: 8px; display: block; color: var(--primary);">Preço</label>
            <select id="filter-price" style="width: 100%; padding: 10px; background: var(--bg-hover); border: 1px solid var(--border); border-radius: 6px; color: var(--text);">
                <option value="">Todos os preços</option>
                <option value="free">Grátis</option>
                <option value="0-50">R$ 0 - 50</option>
                <option value="50-100">R$ 50 - 100</option>
                <option value="100-500">R$ 100 - 500</option>
                <option value="500+">R$ 500+</option>
            </select>
        </div>

        <div class="filter-group">
            <label style="font-weight: 600; margin-bottom: 8px; display: block; color: var(--primary);">Ordenar por</label>
            <select id="filter-sort" style="width: 100%; padding: 10px; background: var(--bg-hover); border: 1px solid var(--border); border-radius: 6px; color: var(--text);">
                <option value="recent">Mais recentes</option>
                <option value="popular">Mais populares</option>
                <option value="price-asc">Menor preço</option>
                <option value="price-desc">Maior preço</option>
                <option value="rating">Melhor avaliação</option>
            </select>
        </div>

        <div class="filter-group">
            <label style="font-weight: 600; margin-bottom: 8px; display: block; color: var(--primary);">Status</label>
            <select id="filter-status" style="width: 100%; padding: 10px; background: var(--bg-hover); border: 1px solid var(--border); border-radius: 6px; color: var(--text);">
                <option value="">Todos</option>
                <option value="active">Ativas</option>
                <option value="verified">✓ Verificadas</option>
                <option value="new">🆕 Novas</option>
            </select>
        </div>
    </div>

    <button id="apply-filters" class="btn" style="margin-top: 20px; width: auto;">🔎 Aplicar Filtros</button>
    <button id="clear-filters" style="margin-top: 20px; margin-left: 10px; background: var(--bg-hover); border: 1px solid var(--border); color: var(--text-light); padding: 14px 32px; border-radius: 8px; cursor: pointer;">🔄 Limpar</button>
</div>

<div id="creators-grid" class="grid-3" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 24px;">
    
    <!-- Creators Cards serão inseridas aqui via JavaScript -->
    <?php
    // Placeholder para cards de criadores
    for ($i = 1; $i <= 9; $i++) {
        ?>
        <div class="profile-card creator-item" data-category="fotos" data-price="99" data-rating="4.8">
            <div style="height: 120px; background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);"></div>
            <img src="https://via.placeholder.com/100" alt="Avatar" class="profile-avatar" style="margin-top: -50px;">
            <div style="padding: 20px 16px; flex-grow: 1;">
                <h3 class="profile-name">Criadora <?php echo $i; ?></h3>
                <p class="profile-title">Conteúdo Exclusivo</p>
                <div style="margin: 16px 0;">
                    <span class="badge badge-primary" style="font-size: 11px;">📸 Fotos</span>
                </div>
                <p style="color: var(--text-light); font-size: 12px; margin: 8px 0;">⭐ 4.8 (234 reviews)</p>
                <div style="display: flex; gap: 8px; margin-top: 16px;">
                    <button class="btn" style="flex: 1; padding: 10px;">Ver</button>
                    <button class="btn secondary" style="flex: 1; padding: 10px;">💬</button>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

</div>

<div style="text-align: center; margin-top: 60px; padding: 40px;">
    <p style="color: var(--text-light); font-size: 16px;">Mostrando 9 de 1,234 criadoras</p>
    <button class="btn secondary" style="margin-top: 16px;">Carregar mais →</button>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtn = document.getElementById('apply-filters');
    const clearBtn = document.getElementById('clear-filters');

    filterBtn.addEventListener('click', function() {
        const category = document.getElementById('filter-category').value;
        const price = document.getElementById('filter-price').value;
        const sort = document.getElementById('filter-sort').value;
        
        console.log('Filtros aplicados:', { category, price, sort });
        alert('✅ Filtros aplicados! (Demo)');
    });

    clearBtn.addEventListener('click', function() {
        document.getElementById('filter-category').value = '';
        document.getElementById('filter-price').value = '';
        document.getElementById('filter-sort').value = 'recent';
        console.log('Filtros limpos');
    });
});
</script>

<?php get_footer(); ?>

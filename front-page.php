<?php get_header(); ?>

<div class="card hero-card">
    <h2>🚀 Bem-vinda ao Marketplace de Criadoras</h2>
    <p style="font-size: 18px; margin-bottom: 30px;">A plataforma moderna para criar, vender e compartilhar conteúdo exclusivo com sua comunidade</p>
    <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 1;">
        <a href="<?php echo esc_url(home_url('/login/')); ?>" class="btn" style="background: linear-gradient(135deg, #FF6B35 0%, #FF5722 100%); box-shadow: 0 4px 15px rgba(255, 107, 53, 0.3);">🔑 Entrar como Criadora</a>
        <a href="<?php echo esc_url(home_url('/planos/')); ?>" class="btn" style="background: rgba(255, 255, 255, 0.2); color: #fff; border: 2px solid #fff; box-shadow: none;">💎 Ver Planos e Produtos</a>
    </div>
</div>

<div class="card">
    <h2>✨ Por que escolher nossa plataforma?</h2>
    <p style="font-size: 16px; color: #6B7280;">Oferecemos uma experiência completa, segura e profissional para criadoras monetizarem seus conteúdos.</p>
</div>

<div class="card author-box">
    <div>
        <h3>👩‍💻 Para Criadoras</h3>
        <p>💰 Ganhe com seus conteúdos</p>
        <p>📊 Painel intuitivo de controle</p>
        <p>🔒 Área privada exclusiva</p>
        <p>📈 Relatórios de vendas em tempo real</p>
        <p>🎨 Customize seus produtos e planos</p>
        <p style="margin-top: 20px;"><a href="<?php echo esc_url(home_url('/login/')); ?>" style="display: inline-block; padding: 10px 20px; background: linear-gradient(135deg, #7C3AED 0%, #6D28D9 100%); color: #fff; border-radius: 6px; font-weight: 600;">Acessar Painel →</a></p>
    </div>
    <div>
        <h3>🎯 Para Clientes</h3>
        <p>🛍️ Compre conteúdo avulso</p>
        <p>🎁 Assine planos mensais ilimitados</p>
        <p>🔐 Acesso seguro e exclusivo</p>
        <p>⭐ Comunidade de qualidade</p>
        <p>💝 Suporte ao criador que você ama</p>
        <p style="margin-top: 20px;"><a href="<?php echo esc_url(home_url('/planos/')); ?>" style="display: inline-block; padding: 10px 20px; background: linear-gradient(135deg, #FF6B35 0%, #FF5722 100%); color: #fff; border-radius: 6px; font-weight: 600;">Explorar Conteúdo →</a></p>
    </div>
</div>

<div class="card product-box">
    <div>
        <h3>🎬 Conteúdos em Destaque</h3>
        <p>Explore uma curadoria especial de produtos exclusivos preparados para você.</p>
        <p>📸 Fotos e vídeos profissionais</p>
        <p>📚 Cursos e tutoriais</p>
        <p>🎵 Áudio e música</p>
        <p>📖 E-books e guias premium</p>
        <p style="margin-top: 20px;"><a href="<?php echo esc_url(home_url('/planos/')); ?>" style="font-weight: 700; color: #2563EB;">Conhecer produtos →</a></p>
    </div>
    <div>
        <h3>🔒 Segurança e Privacidade</h3>
        <p>Sua proteção é nossa prioridade máxima.</p>
        <p>🛡️ Transações 100% seguras</p>
        <p>🔐 Dados protegidos com encriptação</p>
        <p>👮 Controle de acesso por função</p>
        <p>✅ Conformidade LGPD</p>
        <p style="margin-top: 20px;"><a href="<?php echo esc_url(home_url('/planos/')); ?>" style="font-weight: 700; color: #10B981;">Saber mais →</a></p>
    </div>
</div>

<div class="card" style="text-align: center; background: linear-gradient(135deg, rgba(124, 58, 237, 0.1) 0%, rgba(255, 107, 53, 0.1) 100%); border-top: none;">
    <h2>🌟 Pronto para começar?</h2>
    <p>Junte-se a centenas de criadoras que já estão monetizando seu talento</p>
    <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; margin-top: 30px;">
        <a href="<?php echo esc_url(home_url('/login/')); ?>" class="btn">Sou Criadora</a>
        <a href="<?php echo esc_url(home_url('/planos/')); ?>" class="btn secondary">Sou Cliente</a>
    </div>
</div>

<?php get_footer(); ?>
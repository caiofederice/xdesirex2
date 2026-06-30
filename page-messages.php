<?php
/*
Template Name: Mensagens e Chat
*/
get_header(); ?>

<div class="card hero-card" style="text-align: center; margin-bottom: 40px;">
    <h2>💬 Suas Mensagens</h2>
    <p>Converse com seus criadores favoritos</p>
</div>

<div style="display: grid; grid-template-columns: 300px 1fr; gap: 24px; min-height: 600px;">
    
    <!-- Conversation List -->
    <div style="background: var(--bg-card); border: 1px solid var(--border); border-radius: 12px; display: flex; flex-direction: column; overflow: hidden;">
        <div style="padding: 16px; border-bottom: 1px solid var(--border);">
            <input type="text" placeholder="🔍 Procurar..." style="width: 100%; padding: 10px; background: var(--bg-hover); border: 1px solid var(--border); border-radius: 6px; color: var(--text);">
        </div>
        
        <div style="flex: 1; overflow-y: auto;">
            <?php for ($i = 1; $i <= 8; $i++) { ?>
            <div class="conversation-item" style="padding: 12px 16px; border-bottom: 1px solid var(--border); cursor: pointer; transition: all 0.3s; display: flex; gap: 12px; align-items: center;" onclick="selectConversation(this)">
                <img src="https://via.placeholder.com/40" alt="Avatar" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid var(--primary);">
                <div style="flex: 1; min-width: 0;">
                    <h4 style="margin: 0; color: var(--primary); font-size: 14px;">Criadora <?php echo $i; ?></h4>
                    <p style="color: var(--text-light); font-size: 12px; margin: 4px 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Última mensagem foi há 2 horas</p>
                </div>
                <span style="background: var(--primary); color: var(--text); padding: 2px 6px; border-radius: 10px; font-size: 11px; font-weight: 600;">3</span>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- Chat Area -->
    <div style="background: var(--bg-card); border: 1px solid var(--border); border-radius: 12px; display: flex; flex-direction: column;">
        
        <!-- Chat Header -->
        <div style="padding: 16px; border-bottom: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; align-items: center; gap: 12px;">
                <img src="https://via.placeholder.com/40" alt="Avatar" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid var(--primary);">
                <div>
                    <h3 style="margin: 0; color: var(--primary);">Criadora 1</h3>
                    <p style="color: var(--text-light); font-size: 12px; margin: 0;">🟢 Online agora</p>
                </div>
            </div>
            <div style="display: flex; gap: 8px;">
                <button style="padding: 8px 12px; background: var(--bg-hover); border: 1px solid var(--border); color: var(--accent); border-radius: 6px; cursor: pointer;">📞</button>
                <button style="padding: 8px 12px; background: var(--bg-hover); border: 1px solid var(--border); color: var(--accent); border-radius: 6px; cursor: pointer;">ℹ️</button>
            </div>
        </div>

        <!-- Messages -->
        <div style="flex: 1; overflow-y: auto; padding: 16px; display: flex; flex-direction: column; gap: 16px;">
            
            <!-- Message from other -->
            <div style="display: flex; gap: 12px; align-items: flex-end;">
                <img src="https://via.placeholder.com/32" alt="Avatar" style="width: 32px; height: 32px; border-radius: 50%; border: 1px solid var(--primary);">
                <div style="background: var(--bg-hover); padding: 12px 16px; border-radius: 8px; border-left: 3px solid var(--primary); max-width: 60%;">
                    <p style="margin: 0; color: var(--text);">Oi! Como você está?</p>
                </div>
                <p style="color: var(--text-muted); font-size: 12px; margin: 0;">10:30</p>
            </div>

            <!-- Message from me -->
            <div style="display: flex; gap: 12px; align-items: flex-end; justify-content: flex-end;">
                <p style="color: var(--text-muted); font-size: 12px; margin: 0;">10:35</p>
                <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%); padding: 12px 16px; border-radius: 8px; max-width: 60%; color: var(--text);">
                    <p style="margin: 0; color: var(--text);">Oi! Tudo bem! Gostei muito do seu novo conteúdo 🎉</p>
                </div>
            </div>

            <!-- Message from other -->
            <div style="display: flex; gap: 12px; align-items: flex-end;">
                <img src="https://via.placeholder.com/32" alt="Avatar" style="width: 32px; height: 32px; border-radius: 50%; border: 1px solid var(--primary);">
                <div style="background: var(--bg-hover); padding: 12px 16px; border-radius: 8px; border-left: 3px solid var(--primary); max-width: 60%;">
                    <p style="margin: 0; color: var(--text);">Obrigada! Estou preparando mais coisas legais em breve ✨</p>
                </div>
                <p style="color: var(--text-muted); font-size: 12px; margin: 0;">10:40</p>
            </div>

        </div>

        <!-- Message Input -->
        <div style="padding: 16px; border-top: 1px solid var(--border); display: flex; gap: 12px;">
            <input type="text" placeholder="Escreva sua mensagem..." style="flex: 1; padding: 12px; background: var(--bg-hover); border: 1px solid var(--border); border-radius: 8px; color: var(--text); font-family: inherit;">
            <button style="padding: 12px 16px; background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%); border: none; color: var(--text); border-radius: 8px; cursor: pointer; font-weight: 600;">📤</button>
        </div>
    </div>

</div>

<div class="alert alert-info" style="margin-top: 30px;">
    <strong>💡 Dica:</strong> Mantenha seus chats profissionais e respeitosos. Todas as conversas são monitoradas para sua segurança.
</div>

<script>
function selectConversation(element) {
    document.querySelectorAll('.conversation-item').forEach(item => {
        item.style.background = 'transparent';
        item.style.borderLeft = 'none';
    });
    element.style.background = 'var(--bg-hover)';
    element.style.borderLeft = '4px solid var(--primary)';
}

// Mark first as selected
document.querySelector('.conversation-item').click();
</script>

<?php get_footer(); ?>

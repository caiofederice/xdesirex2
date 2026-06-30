/**
 * XDesirEX Theme - Main JavaScript File
 * Dark Theme with Neon Effects
 */

// ===== THEME INITIALIZATION =====
document.addEventListener('DOMContentLoaded', function() {
    console.log('🚀 XDesirEX Theme Loaded');
    initializeTheme();
    initializeAnimations();
    initializeInteractivity();
});

// ===== DARK THEME & LOCAL STORAGE =====
function initializeTheme() {
    // Check for saved theme preference or default to dark
    const savedTheme = localStorage.getItem('xdesirex-theme') || 'dark';
    document.documentElement.setAttribute('data-theme', savedTheme);
}

function toggleTheme() {
    const currentTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('xdesirex-theme', newTheme);
}

// ===== ANIMATIONS =====
function initializeAnimations() {
    // Fade in elements on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.card, .stat-card, .profile-card').forEach(el => {
        observer.observe(el);
    });
}

// ===== INTERACTIVITY =====
function initializeInteractivity() {
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // Add pulse effect to interactive elements on hover
    document.querySelectorAll('button, .btn, a').forEach(el => {
        el.addEventListener('mouseenter', function() {
            this.style.transition = 'all 0.3s ease';
        });
    });

    // Mobile menu toggle
    initializeMobileMenu();
}

// ===== MOBILE MENU =====
function initializeMobileMenu() {
    const nav = document.querySelector('.site-navigation');
    const header = document.querySelector('.site-header');
    
    if (window.innerWidth <= 768) {
        // Add menu toggle button if needed
        if (!document.querySelector('.menu-toggle')) {
            const toggle = document.createElement('button');
            toggle.className = 'menu-toggle';
            toggle.innerHTML = '☰';
            toggle.style.cssText = `
                display: none;
                background: transparent;
                border: none;
                color: var(--primary);
                font-size: 24px;
                cursor: pointer;
                @media (max-width: 768px) { display: block; }
            `;
            header.appendChild(toggle);
        }
    }
}

// ===== FILTER FUNCTIONALITY =====
function filterItems(selector, filterAttr, filterValue) {
    const items = document.querySelectorAll(selector);
    items.forEach(item => {
        if (filterValue === '' || item.getAttribute(filterAttr) === filterValue) {
            item.style.display = '';
            item.classList.add('fade-in');
        } else {
            item.style.display = 'none';
        }
    });
}

// ===== NOTIFICATION SYSTEM =====
function showNotification(message, type = 'info', duration = 3000) {
    const notification = document.createElement('div');
    notification.className = `alert alert-${type}`;
    notification.innerHTML = message;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
        animation: slide-in-right 0.3s ease;
        max-width: 400px;
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.animation = 'fade-out 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    }, duration);
}

// ===== MODAL/DIALOG MANAGEMENT =====
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = 'flex';
        modal.style.position = 'fixed';
        modal.style.top = '50%';
        modal.style.left = '50%';
        modal.style.transform = 'translate(-50%, -50%)';
        modal.style.zIndex = '9999';
        modal.classList.add('fade-in');
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = 'none';
    }
}

// ===== FORM HANDLING =====
function initializeFormValidation() {
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function(e) {
            const inputs = this.querySelectorAll('input[required], textarea[required], select[required]');
            let isValid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    input.style.borderColor = 'var(--danger)';
                    isValid = false;
                } else {
                    input.style.borderColor = 'var(--border)';
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                showNotification('⚠️ Por favor, preencha todos os campos obrigatórios', 'warning');
            }
        });
    });
}

// ===== COPY TO CLIPBOARD =====
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        showNotification('✅ Copiado para a área de transferência!', 'success');
    }).catch(() => {
        showNotification('❌ Erro ao copiar', 'danger');
    });
}

// ===== SEARCH FUNCTIONALITY =====
function searchItems(searchInputSelector, itemsSelector, searchAttr) {
    const searchInput = document.querySelector(searchInputSelector);
    if (!searchInput) return;
    
    searchInput.addEventListener('input', function() {
        const searchValue = this.value.toLowerCase();
        const items = document.querySelectorAll(itemsSelector);
        
        items.forEach(item => {
            const text = item.getAttribute(searchAttr)?.toLowerCase() || '';
            if (text.includes(searchValue)) {
                item.style.display = '';
                item.classList.add('fade-in');
            } else {
                item.style.display = 'none';
            }
        });
    });
}

// ===== RATING SYSTEM =====
function initializeRatingStars(containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;
    
    const stars = container.querySelectorAll('.star');
    let currentRating = 0;
    
    stars.forEach((star, index) => {
        star.addEventListener('click', () => {
            currentRating = index + 1;
            stars.forEach((s, i) => {
                if (i < currentRating) {
                    s.classList.add('active');
                    s.style.color = 'var(--warning)';
                } else {
                    s.classList.remove('active');
                    s.style.color = 'var(--text-light)';
                }
            });
            showNotification(`⭐ Obrigado! Você avaliou com ${currentRating} estrelas`, 'success');
        });
        
        star.addEventListener('mouseenter', () => {
            stars.forEach((s, i) => {
                if (i < index + 1) {
                    s.style.color = 'var(--warning)';
                    s.style.transform = 'scale(1.2)';
                }
            });
        });
        
        star.addEventListener('mouseleave', () => {
            stars.forEach((s, i) => {
                if (i < currentRating) {
                    s.style.color = 'var(--warning)';
                } else {
                    s.style.color = 'var(--text-light)';
                }
                s.style.transform = 'scale(1)';
            });
        });
    });
}

// ===== LOCAL STORAGE UTILS =====
function saveToStorage(key, value) {
    try {
        localStorage.setItem(`xdesirex-${key}`, JSON.stringify(value));
    } catch (e) {
        console.warn('Storage error:', e);
    }
}

function getFromStorage(key, defaultValue = null) {
    try {
        const value = localStorage.getItem(`xdesirex-${key}`);
        return value ? JSON.parse(value) : defaultValue;
    } catch (e) {
        console.warn('Storage error:', e);
        return defaultValue;
    }
}

// ===== LOADING STATE =====
function setLoadingState(element, isLoading = true) {
    if (isLoading) {
        element.disabled = true;
        element.style.opacity = '0.5';
        element.innerHTML = '<span class="spinner"></span> Carregando...';
    } else {
        element.disabled = false;
        element.style.opacity = '1';
        element.innerHTML = element.getAttribute('data-original-text') || 'Enviar';
    }
}

// ===== DEBOUNCE FUNCTION =====
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// ===== LAZY LOADING IMAGES =====
function initializeLazyLoading() {
    const images = document.querySelectorAll('img[data-lazy]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.getAttribute('data-lazy');
                img.removeAttribute('data-lazy');
                img.classList.add('fade-in');
                observer.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// ===== API CALLS HELPER =====
async function apiCall(endpoint, options = {}) {
    try {
        const response = await fetch(endpoint, {
            headers: {
                'Content-Type': 'application/json',
                ...options.headers,
            },
            ...options,
        });
        
        if (!response.ok) {
            throw new Error(`API error: ${response.status}`);
        }
        
        return await response.json();
    } catch (error) {
        console.error('API error:', error);
        showNotification('❌ Erro ao conectar com o servidor', 'danger');
        throw error;
    }
}

// ===== EXPORT FUNCTIONS FOR USE =====
window.XDesirEX = {
    toggleTheme,
    showNotification,
    openModal,
    closeModal,
    copyToClipboard,
    searchItems,
    filterItems,
    initializeRatingStars,
    saveToStorage,
    getFromStorage,
    setLoadingState,
    debounce,
    initializeLazyLoading,
    apiCall,
    initializeFormValidation,
};

console.log('✅ XDesirEX utilities available at window.XDesirEX');

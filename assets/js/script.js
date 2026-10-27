document.addEventListener('DOMContentLoaded', () => {
    const btnAbrir = document.getElementById('btnAbrir');
    const btnCerrar = document.getElementById('btnCerrar');
    const cardIntro = document.getElementById('cardIntro');
    const letterWrapper = document.getElementById('letterWrapper');

    // Función para mostrar la carta
    btnAbrir.addEventListener('click', () => {
        cardIntro.style.opacity = '0';
        cardIntro.style.transform = 'scale(0.95)';
        
        setTimeout(() => {
            cardIntro.style.display = 'none';
            letterWrapper.classList.remove('hidden');
        }, 400);
    });

    // Función para ocultar la carta y volver al inicio
    btnCerrar.addEventListener('click', () => {
        letterWrapper.style.opacity = '0';
        
        setTimeout(() => {
            letterWrapper.classList.add('hidden');
            letterWrapper.style.opacity = '1';
            cardIntro.style.display = 'block';
            
            setTimeout(() => {
                cardIntro.style.opacity = '1';
                cardIntro.style.transform = 'scale(1)';
            }, 50);
        }, 400);
    });
});
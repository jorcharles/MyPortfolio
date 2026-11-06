document.addEventListener("DOMContentLoaded", () => {
    // =================================================================
    // 1. THEME TOGGLE LOGIC
    // =================================================================
    const themeToggleBtn = document.getElementById("themeToggle");
    const htmlElement = document.documentElement;

    // Check for saved user preference in localStorage
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme) {
        htmlElement.setAttribute("data-theme", savedTheme);
    }

    if (themeToggleBtn) {
        themeToggleBtn.addEventListener("click", () => {
            const currentTheme = htmlElement.getAttribute("data-theme");
            const newTheme = currentTheme === "light" ? "dark" : "light";

            htmlElement.setAttribute("data-theme", newTheme);
            localStorage.setItem("theme", newTheme);
        });
    }

    // =================================================================
    // 2. NAVBAR ACTIVE LINK & SCROLL OBSERVER LOGIC
    // =================================================================
    const navLinks = document.querySelectorAll('.nav-links a');
    const sections = document.querySelectorAll('section[id]');

    // Simple click handler for manual tab selection
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navLinks.forEach(item => item.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Scroll Observer to automatically switch active state as the user scrolls
    const observerOptions = {
        root: null,
        rootMargin: '-40% 0px -50% 0px', // Triggers when section is near the middle of the viewport
        threshold: 0
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                const targetLink = document.querySelector(`.nav-links a[href="#${id}"]`);
                
                if (targetLink) {
                    navLinks.forEach(item => item.classList.remove('active'));
                    targetLink.classList.add('active');
                }
            }
        });
    }, observerOptions);

    sections.forEach(section => observer.observe(section));


    // =================================================================
    // 3. FEATURED PROJECTS SLIDER LOGIC
    // =================================================================
    const sliderContainer = document.querySelector('.projects-slider-container');
    const sliderCards = document.querySelectorAll('.slider-card');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    if (sliderContainer && sliderCards.length > 0) {
        function updateActiveCard() {
            const containerCenter = sliderContainer.getBoundingClientRect().left + sliderContainer.offsetWidth / 2;

            let closestCard = sliderCards[0];
            let smallestDistance = Infinity;

            sliderCards.forEach(card => {
                const cardCenter = card.getBoundingClientRect().left + card.offsetWidth / 2;
                const distance = Math.abs(containerCenter - cardCenter);

                if (distance < smallestDistance) {
                    smallestDistance = distance;
                    closestCard = card;
                }
            });

            sliderCards.forEach(card => card.classList.remove('active'));
            closestCard.classList.add('active');
        }

        sliderContainer.addEventListener('scroll', updateActiveCard);

        if (nextBtn && prevBtn) {
            nextBtn.addEventListener('click', () => {
                sliderContainer.scrollBy({ left: 400, behavior: 'smooth' });
            });

            prevBtn.addEventListener('click', () => {
                sliderContainer.scrollBy({ left: -400, behavior: 'smooth' });
            });
        }

        window.addEventListener('load', () => {
            updateActiveCard();
        });
    }
});

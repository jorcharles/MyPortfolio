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


    // =================================================================
    // 4. IMAGE LIGHTBOX ZOOM POPUP FOR PROJECTS & ACHIEVEMENTS
    // =================================================================
    document.addEventListener('click', function(domClickEvent) {
        if (domClickEvent.target.tagName === 'IMG' && domClickEvent.target.closest('#projects, #achievements')) {
            var sourceImageUrl = domClickEvent.target.src;    
            var modalOverlayContainer = document.createElement('div');
            modalOverlayContainer.style.position = 'fixed';
            modalOverlayContainer.style.top = '0';
            modalOverlayContainer.style.left = '0';
            modalOverlayContainer.style.width = '100%';
            modalOverlayContainer.style.height = '100%';
            modalOverlayContainer.style.backgroundColor = 'rgba(0, 0, 0, 0.85)';
            modalOverlayContainer.style.display = 'flex';
            modalOverlayContainer.style.justifyContent = 'center';
            modalOverlayContainer.style.alignItems = 'center';
            modalOverlayContainer.style.zIndex = '9999';
            modalOverlayContainer.style.cursor = 'pointer';

            var fullSizeImageElement = document.createElement('img');
            fullSizeImageElement.src = sourceImageUrl;
            fullSizeImageElement.style.maxHeight = '90vh';
            fullSizeImageElement.style.maxWidth = '90vw';
            fullSizeImageElement.style.borderRadius = '8px';
            fullSizeImageElement.style.boxShadow = '0 5px 25px rgba(0,0,0,0.5)';

            modalOverlayContainer.appendChild(fullSizeImageElement);
            document.body.appendChild(modalOverlayContainer);

            modalOverlayContainer.addEventListener('click', function() {
                document.body.removeChild(modalOverlayContainer);
            });
        }
    });


    // =================================================================
    // 5. CONTACT DIALOG & FORMSPREE BACKGROUND SUBMISSION (WITH EMAIL CHECK)
    // =================================================================
    const openContactBtn = document.getElementById('openContact');
    const closeContactBtn = document.getElementById('closeContact');
    const contactDialog = document.getElementById('contactDialog');
    const contactForm = document.getElementById('contactForm');
    const formStatus = document.getElementById('formStatus');

    if (openContactBtn && contactDialog) {
        openContactBtn.addEventListener('click', function() {
            if (typeof contactDialog.showModal === 'function') {
                contactDialog.showModal();
            } else {
                contactDialog.setAttribute('open', true);
            }
        });
    }

    if (closeContactBtn && contactDialog) {
        closeContactBtn.addEventListener('click', function() {
            contactDialog.close();
            if (contactForm) contactForm.reset();
            if (formStatus) formStatus.textContent = '';
        });
    }

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Strict Email Validation Check
            const emailInput = contactForm.querySelector('input[name="email"]');
            const emailValue = emailInput ? emailInput.value.trim() : '';
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(emailValue)) {
                if (formStatus) {
                    formStatus.textContent = "Please enter a valid email address (e.g., name@gmail.com).";
                    formStatus.style.color = "#ff6b6b";
                }
                return;
            }

            const formData = new FormData(contactForm);
            const actionUrl = contactForm.action;

            fetch(actionUrl, {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            }).then(response => {
                if (response.ok) {
                    if (formStatus) {
                        formStatus.textContent = "Thank you! Your message was sent.";
                        formStatus.style.color = "";
                    }
                    contactForm.reset();
                    setTimeout(() => {
                        if (contactDialog) contactDialog.close();
                        if (formStatus) formStatus.textContent = '';
                    }, 2500);
                } else {
                    response.json().then(data => {
                        if (Object.hasOwn(data, 'errors')) {
                            if (formStatus) formStatus.textContent = data["errors"].map(error => error["message"]).join(", ");
                        } else {
                            if (formStatus) formStatus.textContent = "Oops! There was a problem submitting your form.";
                        }
                    });
                }
            }).catch(error => {
                if (formStatus) formStatus.textContent = "Oops! There was a problem submitting your form.";
            });
        });
    }

    if (contactDialog) {
        contactDialog.addEventListener('click', function(event) {
            const dialogRect = contactDialog.getBoundingClientRect();
            if (
                event.clientX < dialogRect.left ||
                event.clientX > dialogRect.right ||
                event.clientY < dialogRect.top ||
                event.clientY > dialogRect.bottom
            ) {
                contactDialog.close();
                if (contactForm) contactForm.reset();
                if (formStatus) formStatus.textContent = '';
            }
        });
    }
});

const carousel = document.querySelector('.carousel-container');
        const items = document.querySelectorAll('.carousel-item');
        let currentItem = 0;

        function nextItem() {
            currentItem = (currentItem + 1) % items.length;
            updateCarousel();
        }

        function updateCarousel() {
            const translateX = -currentItem * 100;
            carousel.style.transform = `translateX(${translateX}%)`;
        }

        setInterval(nextItem, 3000); 
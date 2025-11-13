document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".hero-modern-card");
    const nextBtn = document.querySelector(".next-btn");
    const prevBtn = document.querySelector(".prev-btn");
    const dotsContainer = document.querySelector(".carousel-dots");
    let current = 0;

    // === Generate dots ===
    cards.forEach((_, i) => {
        const dot = document.createElement("button");
        dot.dataset.index = i;
        if (i === 0) dot.classList.add("active");
        dotsContainer.appendChild(dot);
    });
    const dots = dotsContainer.querySelectorAll("button");

    // === Fungsi tampilkan card ===
    function showCard(index) {
        cards.forEach((card, i) => {
            card.classList.remove("active", "prev");
            if (i === index) card.classList.add("active");
            if (i === (index - 1 + cards.length) % cards.length) card.classList.add("prev");
        });

        dots.forEach(dot => dot.classList.remove("active"));
        dots[index].classList.add("active");
    }

    function nextCard() {
        current = (current + 1) % cards.length;
        showCard(current);
    }

    function prevCard() {
        current = (current - 1 + cards.length) % cards.length;
        showCard(current);
    }

    nextBtn.addEventListener("click", nextCard);
    prevBtn.addEventListener("click", prevCard);

    // === Klik dot ===
    dots.forEach(dot => {
        dot.addEventListener("click", () => {
            current = parseInt(dot.dataset.index);
            showCard(current);
        });
    });

    // === Auto slide ===
    showCard(current);
    setInterval(nextCard, 4000);
});

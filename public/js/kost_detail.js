// Fullscreen gambar
const mainImg = document.getElementById('mainPreview');
const modalImg = document.getElementById('modalImage');

mainImg.addEventListener('click', function() {
    modalImg.src = this.src;
});

// Thumbnail klik
document.querySelectorAll('.thumb').forEach(img => {
    img.addEventListener('click', function() {
        mainImg.src = this.src;
    });
});

// Update gambar modal
function openModal(src){
    document.querySelector('.carousel-item.active img').src = src;
}

// Handle bintang rating
const stars = document.querySelectorAll('.star');

stars.forEach((s, idx) => {
    s.addEventListener('click', () => {
        stars.forEach(st => st.classList.remove('selected'));
        for(let i=0; i<=idx; i++){
            stars[i].classList.add('selected');
        }
    });
});

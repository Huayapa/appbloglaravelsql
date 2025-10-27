// ========== FONDO DE ESTRELLAS ========== //
const canvas = document.getElementById('starsCanvas');
if (canvas) {
    const ctx = canvas.getContext('2d');
    const stars = [];
    const numStars = 100;

    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    window.addEventListener('resize', resizeCanvas);
    resizeCanvas();

    for (let i = 0; i < numStars; i++) {
        stars.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            size: Math.random() * 2,
            speed: 0.1 + Math.random() * 0.3
        });
    }

    function drawStars() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = '#fff';
        for (const s of stars) {
            ctx.beginPath();
            ctx.arc(s.x, s.y, s.size, 0, 2 * Math.PI);
            ctx.fill();
            s.y += s.speed;
            if (s.y > canvas.height) s.y = 0;
        }
        requestAnimationFrame(drawStars);
    }

    drawStars();
}

// ========== ELIMINAR POST ========== //
document.addEventListener('DOMContentLoaded', () => {
    const deleteForms = document.querySelectorAll('.delete-form');

    deleteForms.forEach(form => {
        form.addEventListener('submit', e => {
            const confirmDelete = confirm('¿Seguro que quieres eliminar este post?');
            if (!confirmDelete) {
                e.preventDefault();
            }
        });
    });
});

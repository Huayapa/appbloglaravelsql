// === Fondo animado de estrellas ===
const canvas = document.getElementById("starfield");
const ctx = canvas.getContext("2d");

let stars = [];
const numStars = 160;

function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}
window.addEventListener("resize", resizeCanvas);
resizeCanvas();

for (let i = 0; i < numStars; i++) {
    stars.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        z: Math.random() * canvas.width
    });
}

function animateStars() {
    ctx.fillStyle = "black";
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    for (let i = 0; i < numStars; i++) {
        let star = stars[i];
        star.z -= 1.5;
        if (star.z <= 0) star.z = canvas.width;

        let k = 128.0 / star.z;
        let px = star.x * k + canvas.width / 2;
        let py = star.y * k + canvas.height / 2;

        if (px >= 0 && px <= canvas.width && py >= 0 && py <= canvas.height) {
            let size = (1 - star.z / canvas.width) * 3;
            ctx.fillStyle = "white";
            ctx.beginPath();
            ctx.arc(px, py, size, 0, Math.PI * 2);
            ctx.fill();
        }
    }
    requestAnimationFrame(animateStars);
}

animateStars();

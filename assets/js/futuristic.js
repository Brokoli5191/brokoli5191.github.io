// JavaScript für animierte Partikel
document.addEventListener("DOMContentLoaded", function () {
  const canvas = document.getElementById("fancy-background");
  const ctx = canvas.getContext("2d");

  // Canvas-Größe an Fenster anpassen
  function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
  }

  // Array für die Partikel
  let particles = [];

  // Partikel erstellen
  function createParticles() {
    particles = [];
    const particleCount = Math.min(window.innerWidth / 10, 100);

    for (let i = 0; i < particleCount; i++) {
      particles.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        radius: Math.random() * 2 + 1,
        color: "rgba(255, 219, 112, " + (Math.random() * 0.2 + 0.1) + ")",
        speedX: Math.random() * 0.3 - 0.15,
        speedY: Math.random() * 0.3 - 0.15,
      });
    }
  }

  // Partikel animieren
  function animate() {
    requestAnimationFrame(animate);
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    particles.forEach((particle) => {
      // Partikel bewegen
      particle.x += particle.speedX;
      particle.y += particle.speedY;

      // Am Rand umkehren
      if (particle.x < 0 || particle.x > canvas.width) particle.speedX *= -1;
      if (particle.y < 0 || particle.y > canvas.height) particle.speedY *= -1;

      // Partikel zeichnen
      ctx.beginPath();
      ctx.arc(particle.x, particle.y, particle.radius, 0, Math.PI * 2);
      ctx.fillStyle = particle.color;
      ctx.fill();

      // Verbindungslinien zeichnen
      particles.forEach((otherParticle) => {
        const dx = particle.x - otherParticle.x;
        const dy = particle.y - otherParticle.y;
        const distance = Math.sqrt(dx * dx + dy * dy);

        if (distance < 100) {
          ctx.beginPath();
          ctx.strokeStyle = "rgba(255, 219, 112, " + (0.1 - distance / 1000) + ")";
          ctx.lineWidth = 0.5;
          ctx.moveTo(particle.x, particle.y);
          ctx.lineTo(otherParticle.x, otherParticle.y);
          ctx.stroke();
        }
      });
    });
  }

  // Initialisieren
  window.addEventListener("resize", function () {
    resizeCanvas();
    createParticles();
  });

  resizeCanvas();
  createParticles();
  animate();
});

// Ladeeffekt und gestaffeltes Einblenden
document.addEventListener("DOMContentLoaded", function () {
  const loader = document.querySelector(".loader-bar");
  const fadeElements = document.querySelectorAll(".service-item, .card-style, article");

  // Fortschrittsbalken simulieren
  loader.style.width = "60%";

  // Seite vollständig geladen
  window.addEventListener("load", function () {
    // Fortschrittsbalken abschließen
    loader.style.width = "100%";

    // Loader ausblenden nach Abschluss
    setTimeout(() => {
      loader.style.opacity = "0";

      // Elemente gestaffelt einblenden
      fadeElements.forEach((el, index) => {
        el.classList.add("content-fade");
        setTimeout(() => {
          el.classList.add("content-visible");
        }, 50 * index); // Kurze Verzögerung zwischen Elementen
      });
    }, 300);
  });

  // Fallback falls load-Event bereits ausgelöst wurde
  if (document.readyState === "complete") {
    loader.style.width = "100%";
    setTimeout(() => (loader.style.opacity = "0"), 300);
  }
});

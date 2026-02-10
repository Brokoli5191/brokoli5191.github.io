document.addEventListener('DOMContentLoaded', function() {
  const acceptBtn = document.getElementById('accept-map-btn');
  if (acceptBtn) {
    acceptBtn.addEventListener('click', function() {
      loadMapResources();
    });
  }

  const themeToggle = document.getElementById('theme-toggle');
  if (themeToggle) {
    themeToggle.addEventListener('change', function() {
      if (window.mapInitialized) {
        setTimeout(function() {
          refreshMapTheme();
        }, 100);
      }
    });
  }
});

function loadMapResources() {
  const banner = document.getElementById('map-consent-banner');
  const mapContainer = document.getElementById('map-container');

  if (banner) banner.style.display = 'none';
  if (mapContainer) mapContainer.style.display = 'block';

  if (!document.getElementById('leaflet-css')) {
    const leafletCSS = document.createElement('link');
    leafletCSS.id = 'leaflet-css';
    leafletCSS.rel = 'stylesheet';
    leafletCSS.href = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css';
    document.head.appendChild(leafletCSS);
  }

  if (!document.getElementById('leaflet-js')) {
    const leafletJS = document.createElement('script');
    leafletJS.id = 'leaflet-js';
    leafletJS.src = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js';

    leafletJS.onload = function() {
      initializeMap();
    };

    document.body.appendChild(leafletJS);
  } else {
    initializeMap();
  }
}

function initializeMap() {
  if (!window.L) return;

  window.map = L.map('map-container', {
    center: [48.219209, 16.367185],
    zoom: 17,
    zoomControl: true,
    attributionControl: true
  });

  window.tileLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(window.map);

  const marker = L.marker([48.219209, 16.367185]).addTo(window.map);
  marker.bindPopup("<b>Faculty of Mathematics</b><br>University of Vienna<br>Oskar-Morgenstern-Platz 1").openPopup();

  window.map.invalidateSize();
  window.mapInitialized = true;
}

function refreshMapTheme() {
  if (window.map) {
    window.map.invalidateSize();
  }
}

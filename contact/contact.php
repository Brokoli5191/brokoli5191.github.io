<?php
$pageTitle = "Contact";
$currentPage = "contact";
include('../includes/header.php');
?>

<article>
  <header>
    <h2 class="h2 article-title">Contact</h2>
  </header>

  <section class="timeline">
    <div class="title-wrapper">
      <div class="icon-box">
        <i class="ph ph-at"></i>
      </div>

      <h3 class="h3"></h3>
    </div>

    <ol class="timeline-list">
      <li class="timeline-item">
        <h4 class="h4 timeline-item-title">Mailing Address</h4>

        <span>Fakultät für Mathematik, Oskar-Morgenstern-Platz 1, 1090 Wien, Austria</span>
      </li>

      <li class="timeline-item">
        <h4 class="h4 timeline-item-title">Office</h4>

        <span>OMP1, Oskar-Morgenstern-Platz 1, Room 10.126</span>
      </li>

      <li class="timeline-item">
        <h4 class="h4 timeline-item-title">Office hours</h4>

        <span>by appointment</span>
      </li>

      <li class="timeline-item">
        <h4 class="h4 timeline-item-title">Phone</h4>

        <span>+43 1 4277-50682</span>
      </li>

      <li class="timeline-item">
        <h4 class="h4 timeline-item-title">Mobile</h4>

        <span>+43 660-8960667</span>
      </li>

      <li class="timeline-item">
        <h4 class="h4 timeline-item-title">E-Mail</h4>

        <span><a href="mailto:roland.steinbauer@univie.ac.at">roland.steinbauer@univie.ac.at</a></span>
      </li>

      <li class="timeline-item">
        <h4 class="h4 timeline-item-title">Website</h4>

        <span>
          <a href="../about/about.php">Personal page</a>,
          <a href="https://ufind.univie.ac.at/de/person.html?id=5458" target="_blank">official university page</a>
        </span>
      </li>
    </ol>
  </section>

  <section class="mapbox">
    <div id="map-consent-banner">
      <p>This map is powered by <a target="_blank" href="https://osmfoundation.org/wiki/Privacy_Policy">OpenStreetMap</a>. Click "Accept" to load the map.</p>
      <button id="accept-map-btn">Accept</button>
    </div>
    <div id="map-container" style="display: none;"></div>
  </section>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Setup map loading on consent
      document.getElementById('accept-map-btn').addEventListener('click', function() {
        loadMapResources();
      });
      
      // Handle theme toggle
      const themeToggle = document.getElementById('theme-toggle');
      if (themeToggle) {
        themeToggle.addEventListener('change', function() {
          // If map is already loaded, refresh it
          if (window.mapInitialized) {
            // Allow time for theme change to apply
            setTimeout(function() {
              refreshMapTheme();
            }, 100);
          }
        });
      }
    });

    function loadMapResources() {
      // Hide consent banner
      document.getElementById('map-consent-banner').style.display = 'none';
      
      // Show map container
      const mapContainer = document.getElementById('map-container');
      mapContainer.style.display = 'block';
      
      // Load Leaflet CSS if not already loaded
      if (!document.getElementById('leaflet-css')) {
        const leafletCSS = document.createElement('link');
        leafletCSS.id = 'leaflet-css';
        leafletCSS.rel = 'stylesheet';
        leafletCSS.href = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css';
        document.head.appendChild(leafletCSS);
      }
      
      // Load Leaflet JS if not already loaded
      if (!document.getElementById('leaflet-js')) {
        const leafletJS = document.createElement('script');
        leafletJS.id = 'leaflet-js';
        leafletJS.src = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js';
        
        leafletJS.onload = function() {
          initializeMap();
        };
        document.body.appendChild(leafletJS);
      } else {
        // If script was already loaded before
        initializeMap();
      }
    }
    
    function initializeMap() {
      // Create map instance
      window.map = L.map('map-container', {
        center: [48.219209, 16.367185],
        zoom: 17,
        zoomControl: true,
        attributionControl: true
      });
      
      // Add OSM tile layer
      window.tileLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(window.map);
      
      // Add marker
      const marker = L.marker([48.219209, 16.367185]).addTo(window.map);
      marker.bindPopup("<b>Faculty of Mathematics</b><br>University of Vienna<br>Oskar-Morgenstern-Platz 1").openPopup();
      
      // Fix map container size issue after initialization
      window.map.invalidateSize();
      
      // Flag that the map has been initialized
      window.mapInitialized = true;
    }
    
    function refreshMapTheme() {
      // Force map to redraw with new theme
      if (window.map) {
        window.map.invalidateSize();
      }
    }
  </script>
</article>

<?php
include('../includes/footer.php');
?>
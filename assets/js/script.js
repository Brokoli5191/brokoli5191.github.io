"use strict";

// Cookie-Hilfsfunktionen
function setCookie(name, value, days) {
  let expires = "";
  if (days) {
    const date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(";").shift();
}

// Theme management function
function initializeTheme() {
  const toggleSwitch = document.getElementById("theme-toggle");
  if (!toggleSwitch) return;

  // Funktion zum Aktualisieren des Themes
  function updateTheme(isDark) {
    if (isDark) {
      document.documentElement.classList.add("dark-mode");
      document.documentElement.classList.remove("light-mode");
      toggleSwitch.checked = true;
      setCookie("darkMode", "enabled", 365); // Cookie für 1 Jahr
    } else {
      document.documentElement.classList.add("light-mode");
      document.documentElement.classList.remove("dark-mode");
      toggleSwitch.checked = false;
      setCookie("darkMode", "disabled", 365); // Cookie für 1 Jahr
    }
  }

  // Initial theme setzen
  const savedTheme = getCookie("darkMode");
  updateTheme(savedTheme === "enabled");

  // Event Listener für Theme-Toggle
  toggleSwitch.addEventListener("change", () => {
    updateTheme(toggleSwitch.checked);
  });
}

// Beim Laden der Seite initialisieren
document.addEventListener("DOMContentLoaded", initializeTheme);

// Bei Navigation zwischen Seiten (für Single Page Applications)
if (window.navigation) {
  navigation.addEventListener("navigate", () => {
    initializeTheme();
  });
}

// element toggle function
const elementToggleFunc = function (elem) {
  elem.classList.toggle("active");
};

// sidebar variables
const sidebar = document.querySelector("[data-sidebar]");
const sidebarBtn = document.querySelector("[data-sidebar-btn]");

// sidebar toggle functionality for mobile
if (sidebarBtn) {
  sidebarBtn.addEventListener("click", function () {
    elementToggleFunc(sidebar);
  });
}

// custom select variables
const select = document.querySelector("[data-select]");
const selectItems = document.querySelectorAll("[data-select-item]");
const selectValue = document.querySelector("[data-selecct-value]");
const filterBtn = document.querySelectorAll("[data-filter-btn]");

if (select) {
  select.addEventListener("click", function () {
    elementToggleFunc(this);
  });
}

// Scroll-to-Top Button Funktionalität
function initScrollToTopButton() {
  // Nur initialisieren, wenn der Button noch nicht existiert
  if (document.getElementById('scroll-to-top')) return;

  // Button dynamisch erstellen
  const scrollToTopButton = document.createElement('button');
  scrollToTopButton.id = 'scroll-to-top';
  scrollToTopButton.className = 'scroll-to-top';
  scrollToTopButton.setAttribute('aria-label', 'Nach oben scrollen');
  
  // Pfeil-Icon hinzufügen mit phosphor-icon
  const icon = document.createElement('i');
  icon.className = 'ph ph-arrow-up';
  scrollToTopButton.appendChild(icon);
  
  // Button zum Body hinzufügen
  document.body.appendChild(scrollToTopButton);
  
  // Button anzeigen/verstecken basierend auf Scroll-Position
  function toggleScrollButton() {
    const scrollPosition = window.scrollY || document.documentElement.scrollTop;
    
    if (scrollPosition > 300) {
      if (!scrollToTopButton.classList.contains('visible')) {
        scrollToTopButton.classList.add('visible');
        
        // Pulse-Animation jedes Mal, wenn der Button sichtbar wird
        // Zuerst sicherstellen, dass keine alte Animation läuft
        scrollToTopButton.classList.remove('pulse');
        
        // Animation im nächsten Frame starten (für Reset-Effekt)
        requestAnimationFrame(() => {
          scrollToTopButton.classList.add('pulse');
        });
      }
    } else {
      scrollToTopButton.classList.remove('visible');
      scrollToTopButton.classList.remove('pulse');
    }
  }
  
  // Smooth Scroll nach oben bei Klick
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }
  
  // Event-Listener
  window.addEventListener('scroll', toggleScrollButton);
  scrollToTopButton.addEventListener('click', scrollToTop);
  
  // Initial prüfen
  toggleScrollButton();
}

function initModernMobileMenu() {
  // Only initialize on devices below 1024px
  if (window.innerWidth >= 1024) return;

  // Check if mobile menu already exists
  if (document.querySelector(".mobile-menu-toggle")) return;

  // Create mobile menu toggle button
  const toggleBtn = document.createElement("div");
  toggleBtn.className = "mobile-menu-toggle";
  toggleBtn.setAttribute("aria-label", "Open menu");
  document.body.appendChild(toggleBtn);

  // Add pulse animation after a small delay
  setTimeout(() => {
    toggleBtn.classList.add("pulse-once");
  }, 500);

  // Create overlay
  const overlay = document.createElement("div");
  overlay.className = "mobile-menu-overlay";
  document.body.appendChild(overlay);

  // Create mobile menu container
  const mobileMenu = document.createElement("div");
  mobileMenu.className = "mobile-menu";

  // Create close button
  const closeBtn = document.createElement("div");
  closeBtn.className = "mobile-menu-close";
  closeBtn.innerHTML = "×";
  closeBtn.setAttribute("aria-label", "Close menu");
  mobileMenu.appendChild(closeBtn);

  // Create header with avatar
  const menuHeader = document.createElement("div");
  menuHeader.className = "mobile-menu-header";

  // Pfad zum Avatar-Bild abhängig vom aktuellen Pfad bestimmen
  const isInRoot = !window.location.pathname.includes('/');
  const avatarPath = isInRoot ? "assets/images/rs.jpg" : "../assets/images/rs.jpg";
  
  const menuAvatar = document.createElement("img");
  menuAvatar.className = "mobile-menu-avatar";
  menuAvatar.src = avatarPath;
  menuAvatar.alt = "Roland Steinbauer";
  menuHeader.appendChild(menuAvatar);

  const menuTitle = document.createElement("div");
  menuTitle.className = "mobile-menu-title";
  menuTitle.textContent = "Roland Steinbauer";
  menuHeader.appendChild(menuTitle);

  mobileMenu.appendChild(menuHeader);

  // Create navigation
  const mobileNav = document.createElement("nav");
  mobileNav.className = "mobile-nav";

  // Get the current page path to mark active link
  const currentPath = window.location.pathname;

  // Create navigation list
  const navList = document.createElement("ul");
  navList.className = "mobile-nav-list";

  // Pfadprefix basierend auf aktuellem Pfad
  const prefix = isInRoot ? "" : "../";

  // Define navigation items with icons and submenus
  const navItems = [
    { name: "About", path: `${prefix}about/about.php`, icon: "person-outline" },
    { name: "Pinboard", path: `${prefix}pinboard/pinboard.php`, icon: "clipboard-outline" },
    {
      name: "Research",
      path: `${prefix}research/research.php`,
      icon: "flask-outline",
      submenu: [
        { name: "Research Interests", path: `${prefix}research/research-topics.php` },
        { name: "Publications", path: `${prefix}research/research-publications.php` },
        { name: "Projects", path: `${prefix}research/research-projects.php` },
        { name: "Talks", path: `${prefix}research/research-talks.php` },
      ],
    },
    {
      name: "Teaching",
      path: `${prefix}teaching/teaching.php`,
      icon: "school-outline",
      submenu: [
        { name: "Teaching activities", path: `${prefix}teaching/teaching.php` },
        { name: "Courses", path: `${prefix}teaching/teaching-courses.php` },
        { name: "Lecture Notes", path: `${prefix}teaching/teaching-lecturenotes.php` },
        { name: "Students", path: `${prefix}teaching/teaching-students.php` },
      ],
    },
    { name: "Vita", path: `${prefix}vita/vita.php`, icon: "document-text-outline" },
    { name: "Contact", path: `${prefix}contact/contact.php`, icon: "mail-outline" },
  ];

  // Create list items for the navigation menu
  navItems.forEach((item) => {
    const li = document.createElement("li");
    li.className = "mobile-nav-item";

    const a = document.createElement("a");
    a.className = "mobile-nav-link";
    if (item.submenu) {
      a.classList.add("has-submenu");
      // Make it a div instead of a link if it has submenu to prevent navigation
      a.href = "javascript:void(0)";
    } else {
      a.href = item.path;
    }

    // Add icon if available
    if (item.icon) {
      const iconSpan = document.createElement("span");
      iconSpan.className = "mobile-nav-icon";
      iconSpan.innerHTML = `<ion-icon name="${item.icon}"></ion-icon>`;
      a.appendChild(iconSpan);
    }

    const textSpan = document.createElement("span");
    textSpan.textContent = item.name;
    a.appendChild(textSpan);

    // Check if this is the active page (only for items without submenu)
    if (!item.submenu && currentPath.includes(item.path.split("/").pop())) {
      a.classList.add("mobile-nav-active");
    }

    li.appendChild(a);

    // Add submenu if it exists
    if (item.submenu) {
      const subUl = document.createElement("ul");
      subUl.className = "mobile-submenu";

      // Variable to track if any submenu item is active
      let hasActiveChild = false;

      item.submenu.forEach((subItem) => {
        const subLi = document.createElement("li");
        subLi.className = "mobile-nav-item";

        const subA = document.createElement("a");
        subA.className = "mobile-nav-link";
        subA.href = subItem.path;
        subA.textContent = subItem.name;

        // Check if this is the active page
        const isActive = currentPath.includes(subItem.path.split("/").pop());
        if (isActive) {
          subA.classList.add("mobile-nav-active");
          hasActiveChild = true;
        }

        subLi.appendChild(subA);
        subUl.appendChild(subLi);
      });

      // If any child is active, expand the submenu and mark parent as having active child
      if (hasActiveChild) {
        subUl.classList.add("expanded");
        a.classList.add("expanded");
        li.classList.add("has-active-child");
      }

      li.appendChild(subUl);

      // Add click event to toggle submenu
      a.addEventListener("click", (e) => {
        e.preventDefault();
        const submenu = a.nextElementSibling;
        const isExpanded = submenu.classList.contains("expanded");

        // Close all other submenus first
        document.querySelectorAll(".mobile-submenu.expanded").forEach((menu) => {
          if (menu !== submenu) {
            // Sanfte Animation beim Schließen
            menu.style.opacity = '0';
            menu.style.transform = 'translateY(-10px)';
            
            // Nach der Animation verstecken
            setTimeout(() => {
              menu.classList.remove("expanded");
              menu.previousElementSibling.classList.remove("expanded");
            }, 300);
          }
        });

        // Toggle current submenu
        if (isExpanded) {
          // Sanfte Animation beim Schließen
          submenu.style.opacity = '0';
          submenu.style.transform = 'translateY(-10px)';
          
          // Nach der Animation verstecken
          setTimeout(() => {
            submenu.classList.remove("expanded");
            a.classList.remove("expanded");
          }, 300);
        } else {
          // Sofort anzeigen und dann einblenden
          submenu.classList.add("expanded");
          a.classList.add("expanded");
          
          // Zurücksetzen der Stil-Eigenschaften für die Einblendanimation
          setTimeout(() => {
            submenu.style.opacity = '';
            submenu.style.transform = '';
          }, 10);
        }
      });
    }

    navList.appendChild(li);
  });

  // Add the navigation list to the menu
  mobileNav.appendChild(navList);
  mobileMenu.appendChild(mobileNav);

  // Add theme toggle switch to mobile menu if it exists in navbar
  const themeToggle = document.querySelector(".switch");
  if (themeToggle) {
    const themeContainer = document.createElement("div");
    themeContainer.className = "mobile-theme-toggle";

    const themeLabel = document.createElement("div");
    themeLabel.className = "mobile-theme-label";
    themeLabel.textContent = document.documentElement.classList.contains("light-mode") ? "Light Mode" : "Dark Mode";
    themeContainer.appendChild(themeLabel);

    const mobileThemeToggle = themeToggle.cloneNode(true);
    themeContainer.appendChild(mobileThemeToggle);
    mobileMenu.appendChild(themeContainer);

    // Sync the state with the original toggle
    const originalInput = themeToggle.querySelector("input");
    const mobileInput = mobileThemeToggle.querySelector("input");

    if (originalInput && mobileInput) {
      mobileInput.checked = originalInput.checked;

      // Keep toggles in sync and update label
      mobileInput.addEventListener("change", () => {
        originalInput.checked = mobileInput.checked;
        originalInput.dispatchEvent(new Event("change"));

        // Update label text based on mode
        setTimeout(() => {
          themeLabel.textContent = document.documentElement.classList.contains("light-mode") ? "Light Mode" : "Dark Mode";
        }, 50);
      });
    }

    // Listen for theme changes from the main toggle
    originalInput.addEventListener("change", () => {
      if (mobileInput) {
        mobileInput.checked = originalInput.checked;

        // Update label text based on mode
        setTimeout(() => {
          themeLabel.textContent = document.documentElement.classList.contains("light-mode") ? "Light Mode" : "Dark Mode";
        }, 50);
      }
    });
  }

  document.body.appendChild(mobileMenu);

  // Open menu when toggle button is clicked
  toggleBtn.addEventListener("click", () => {
    mobileMenu.classList.add("active");
    overlay.classList.add("active");
    document.body.classList.add("menu-open");
  });

  // Close menu when X button is clicked
  closeBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("active");
    overlay.classList.remove("active");
    document.body.classList.remove("menu-open");
  });

  // Close when clicking overlay
  overlay.addEventListener("click", () => {
    mobileMenu.classList.remove("active");
    overlay.classList.remove("active");
    document.body.classList.remove("menu-open");
  });

  // Handle ESC key to close menu
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && mobileMenu.classList.contains("active")) {
      mobileMenu.classList.remove("active");
      overlay.classList.remove("active");
      document.body.classList.remove("menu-open");
    }
  });
}

// Verbesserte Untermenu-Animation für das mobile Menü
function enhanceMobileMenu() {
  // Warte, bis das mobile Menü existiert
  const mobileMenu = document.querySelector('.mobile-menu');
  if (!mobileMenu) return;
  
  // Light Mode Text korrekt einrücken
  const themeLabel = document.querySelector('.mobile-theme-label');
  if (themeLabel) {
    themeLabel.style.paddingLeft = '44px';
  }
}

// Initialize on document load
document.addEventListener("DOMContentLoaded", function () {
  // Initialize modern mobile menu with a slight delay to ensure DOM is fully ready
  setTimeout(function () {
    initModernMobileMenu();
    initScrollToTopButton();
    enhanceMobileMenu();
  }, 200);

  // Initialize other functions if they exist
  if (typeof initializeTheme === "function") {
    initializeTheme();
  }

  if (typeof adjustFooterPadding === "function") {
    adjustFooterPadding();
  }
});

// Also check on window resize
window.addEventListener("resize", function () {
  // Remove existing mobile menu elements if we're on desktop (1024px or larger)
  if (window.innerWidth >= 1024) {
    const mobileToggle = document.querySelector(".mobile-menu-toggle");
    const mobileMenu = document.querySelector(".mobile-menu");
    const overlay = document.querySelector(".mobile-menu-overlay");

    if (mobileToggle) mobileToggle.remove();
    if (mobileMenu) mobileMenu.remove();
    if (overlay) overlay.remove();

    document.body.classList.remove("menu-open");
  } else {
    // Initialize on mobile (below 1024px) if not already present
    if (!document.querySelector(".mobile-menu-toggle")) {
      initModernMobileMenu();
      enhanceMobileMenu();
    }
  }
  
  // Immer den Scroll-Button initialisieren (wird nur angezeigt, wenn genug gescrollt wurde)
  setTimeout(initScrollToTopButton, 200);
});
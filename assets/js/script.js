"use strict";

/**
 * Universelles JavaScript für die Website
 * Einfache Version mit harten Pfaden
 */

// ============================
// PFADE - HART CODIERT
// ============================

// Prüfen, ob wir auf der Root-Seite sind
const isRootPage = window.location.pathname.endsWith('/index.php') || 
                   window.location.pathname === '/' || 
                   window.location.pathname.endsWith('/');

// Pfade entsprechend setzen
const avatarPath = isRootPage ? 'assets/images/rs.jpg' : '../assets/images/rs.jpg';
const aboutPath = isRootPage ? 'about/about.php' : '../about/about.php';
const pinboardPath = isRootPage ? 'pinboard/pinboard.php' : '../pinboard/pinboard.php';
const researchPath = isRootPage ? 'research/research-topics.php' : '../research/research-topics.php';
const teachingPath = isRootPage ? 'teaching/teaching.php' : '../teaching/teaching.php';
const vitaPath = isRootPage ? 'vita/vita.php' : '../vita/vita.php';
const contactPath = isRootPage ? 'contact/contact.php' : '../contact/contact.php';

// Untermenüs für Research
const researchTopicsPath = isRootPage ? 'research/research-topics.php' : '../research/research-topics.php';
const researchPublicationsPath = isRootPage ? 'research/research-publications.php' : '../research/research-publications.php';
const researchProjectsPath = isRootPage ? 'research/research-projects.php' : '../research/research-projects.php';
const researchTalksPath = isRootPage ? 'research/research-talks.php' : '../research/research-talks.php';

// Untermenüs für Teaching
const teachingActivitiesPath = isRootPage ? 'teaching/teaching.php' : '../teaching/teaching.php';
const teachingCoursesPath = isRootPage ? 'teaching/teaching-courses.php' : '../teaching/teaching-courses.php';
const teachingLecturenotesPath = isRootPage ? 'teaching/teaching-lecturenotes.php' : '../teaching/teaching-lecturenotes.php';
const teachingStudentsPath = isRootPage ? 'teaching/teaching-students.php' : '../teaching/teaching-students.php';

// ============================
// COOKIE-FUNKTIONEN
// ============================

/**
 * Setzt ein Cookie mit dem angegebenen Namen, Wert und Gültigkeitsdauer
 */
function setCookie(name, value, days) {
  let expires = "";
  if (days) {
    const date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + value + expires + "; path=/";
}

/**
 * Liest den Wert eines Cookies mit dem angegebenen Namen
 */
function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(";").shift();
}

// ============================
// THEME-MANAGEMENT
// ============================

/**
 * Initialisiert das Theme-Management (Dark/Light Mode)
 */
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

// ============================
// HELPER-FUNKTIONEN
// ============================

/**
 * Toggled die "active" Klasse eines Elements
 */
function elementToggleFunc(elem) {
  if (!elem) return;
  elem.classList.toggle("active");
}

// ============================
// SIDEBAR-FUNKTIONALITÄT
// ============================

/**
 * Initialisiert die Sidebar-Funktionalität
 */
function initSidebar() {
  const sidebar = document.querySelector("[data-sidebar]");
  const sidebarBtn = document.querySelector("[data-sidebar-btn]");

  if (sidebarBtn && sidebar) {
    sidebarBtn.addEventListener("click", function () {
      elementToggleFunc(sidebar);
    });
  }
}

// ============================
// SELEKT-FUNKTIONALITÄT
// ============================

/**
 * Initialisiert die Select-Funktionalität
 */
function initSelect() {
  const select = document.querySelector("[data-select]");
  
  if (select) {
    select.addEventListener("click", function () {
      elementToggleFunc(this);
    });
  }
}

// ============================
// SCROLL-TO-TOP BUTTON
// ============================

/**
 * Initialisiert den Scroll-to-Top Button
 */
function initScrollToTopButton() {
  // Nur initialisieren, wenn der Button noch nicht existiert
  if (document.getElementById('scroll-to-top')) return;

  // Button dynamisch erstellen
  const scrollToTopButton = document.createElement('button');
  scrollToTopButton.id = 'scroll-to-top';
  scrollToTopButton.className = 'scroll-to-top';
  scrollToTopButton.setAttribute('aria-label', 'Nach oben scrollen');
  
  // Pfeil-Icon hinzufügen
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

// ============================
// MOBILES MENÜ
// ============================

/**
 * Initialisiert das mobile Menü
 */
function initModernMobileMenu() {
  // Nur auf Geräten unter 1024px initialisieren
  if (window.innerWidth >= 1024) return;

  // Prüfen, ob das mobile Menü bereits existiert
  if (document.querySelector(".mobile-menu-toggle")) return;

  // Mobile Menu Toggle Button erstellen
  const toggleBtn = document.createElement("div");
  toggleBtn.className = "mobile-menu-toggle";
  toggleBtn.setAttribute("aria-label", "Open menu");
  document.body.appendChild(toggleBtn);

  // Pulse-Animation hinzufügen
  setTimeout(() => {
    toggleBtn.classList.add("pulse-once");
  }, 500);

  // Overlay erstellen
  const overlay = document.createElement("div");
  overlay.className = "mobile-menu-overlay";
  document.body.appendChild(overlay);

  // Mobile Menü Container erstellen
  const mobileMenu = document.createElement("div");
  mobileMenu.className = "mobile-menu";

  // Schließen-Button erstellen
  const closeBtn = document.createElement("div");
  closeBtn.className = "mobile-menu-close";
  closeBtn.innerHTML = "×";
  closeBtn.setAttribute("aria-label", "Close menu");
  mobileMenu.appendChild(closeBtn);

  // Header mit Avatar erstellen
  const menuHeader = document.createElement("div");
  menuHeader.className = "mobile-menu-header";

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

  // Navigation erstellen
  const mobileNav = document.createElement("nav");
  mobileNav.className = "mobile-nav";

  // Aktuellen Pfad für aktive Links ermitteln
  const currentPath = window.location.pathname;

  // Navigationsliste erstellen
  const navList = document.createElement("ul");
  navList.className = "mobile-nav-list";

  // Navigationselemente mit festen Pfaden definieren
  const navItems = [
    { name: "About", path: aboutPath, icon: "person-outline" },
    { name: "Pinboard", path: pinboardPath, icon: "clipboard-outline" },
    {
      name: "Research",
      path: researchPath,
      icon: "flask-outline",
      submenu: [
        { name: "Research Interests", path: researchTopicsPath },
        { name: "Publications", path: researchPublicationsPath },
        { name: "Projects", path: researchProjectsPath },
        { name: "Talks", path: researchTalksPath },
      ],
    },
    {
      name: "Teaching",
      path: teachingPath,
      icon: "school-outline",
      submenu: [
        { name: "Teaching activities", path: teachingActivitiesPath },
        { name: "Courses", path: teachingCoursesPath },
        { name: "Lecture Notes", path: teachingLecturenotesPath },
        { name: "Students", path: teachingStudentsPath },
      ],
    },
    { name: "Vita", path: vitaPath, icon: "document-text-outline" },
    { name: "Contact", path: contactPath, icon: "mail-outline" },
  ];

  // Listenelemente für das Menü erstellen
  navItems.forEach((item) => {
    const li = document.createElement("li");
    li.className = "mobile-nav-item";

    const a = document.createElement("a");
    a.className = "mobile-nav-link";
    if (item.submenu) {
      a.classList.add("has-submenu");
      // Verhindern, dass der Link navigiert, wenn er ein Untermenü hat
      a.href = "javascript:void(0)";
    } else {
      a.href = item.path;
    }

    // Icon hinzufügen, wenn verfügbar
    if (item.icon) {
      const iconSpan = document.createElement("span");
      iconSpan.className = "mobile-nav-icon";
      iconSpan.innerHTML = `<ion-icon name="${item.icon}"></ion-icon>`;
      a.appendChild(iconSpan);
    }

    const textSpan = document.createElement("span");
    textSpan.textContent = item.name;
    a.appendChild(textSpan);

    // Prüfen, ob dies die aktive Seite ist (nur für Elemente ohne Untermenü)
    if (!item.submenu && currentPath.includes(item.path.split("/").pop())) {
      a.classList.add("mobile-nav-active");
    }

    li.appendChild(a);

    // Untermenü hinzufügen, wenn vorhanden
    if (item.submenu) {
      const subUl = document.createElement("ul");
      subUl.className = "mobile-submenu";

      // Variable, um zu verfolgen, ob ein Unterelement aktiv ist
      let hasActiveChild = false;

      item.submenu.forEach((subItem) => {
        const subLi = document.createElement("li");
        subLi.className = "mobile-nav-item";

        const subA = document.createElement("a");
        subA.className = "mobile-nav-link";
        subA.href = subItem.path;
        subA.textContent = subItem.name;

        // Prüfen, ob dies die aktive Seite ist
        const isActive = currentPath.includes(subItem.path.split("/").pop());
        if (isActive) {
          subA.classList.add("mobile-nav-active");
          hasActiveChild = true;
        }

        subLi.appendChild(subA);
        subUl.appendChild(subLi);
      });

      // Wenn ein Kind aktiv ist, Untermenü expandieren und Elternelement als "hat aktives Kind" markieren
      if (hasActiveChild) {
        subUl.classList.add("expanded");
        a.classList.add("expanded");
        li.classList.add("has-active-child");
      }

      li.appendChild(subUl);

      // Klick-Event zum Umschalten des Untermenüs hinzufügen
      a.addEventListener("click", (e) => {
        e.preventDefault();
        const submenu = a.nextElementSibling;
        const isExpanded = submenu.classList.contains("expanded");

        // Zuerst alle anderen Untermenüs schließen
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

        // Aktuelles Untermenü umschalten
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
          
          // Stil-Eigenschaften für die Einblendanimation zurücksetzen
          setTimeout(() => {
            submenu.style.opacity = '';
            submenu.style.transform = '';
          }, 10);
        }
      });
    }

    navList.appendChild(li);
  });

  // Navigationsliste zum Menü hinzufügen
  mobileNav.appendChild(navList);
  mobileMenu.appendChild(mobileNav);

  // Theme-Toggle-Switch zum mobilen Menü hinzufügen, wenn er existiert
  const themeToggle = document.querySelector(".switch");
  if (themeToggle) {
    const themeContainer = document.createElement("div");
    themeContainer.className = "mobile-theme-toggle";

    const themeLabel = document.createElement("div");
    themeLabel.className = "mobile-theme-label";
    themeLabel.style.paddingLeft = '44px'; // Einrückung anpassen
    themeLabel.textContent = document.documentElement.classList.contains("light-mode") ? "Light Mode" : "Dark Mode";
    themeContainer.appendChild(themeLabel);

    const mobileThemeToggle = themeToggle.cloneNode(true);
    themeContainer.appendChild(mobileThemeToggle);
    mobileMenu.appendChild(themeContainer);

    // Status mit dem Original-Toggle synchronisieren
    const originalInput = themeToggle.querySelector("input");
    const mobileInput = mobileThemeToggle.querySelector("input");

    if (originalInput && mobileInput) {
      mobileInput.checked = originalInput.checked;

      // Toggles synchron halten und Label aktualisieren
      mobileInput.addEventListener("change", () => {
        originalInput.checked = mobileInput.checked;
        originalInput.dispatchEvent(new Event("change"));

        // Label-Text basierend auf Modus aktualisieren
        setTimeout(() => {
          themeLabel.textContent = document.documentElement.classList.contains("light-mode") ? "Light Mode" : "Dark Mode";
        }, 50);
      });
    }

    // Auf Theme-Änderungen vom Haupt-Toggle hören
    if (originalInput) {
      originalInput.addEventListener("change", () => {
        if (mobileInput) {
          mobileInput.checked = originalInput.checked;
  
          // Label-Text basierend auf Modus aktualisieren
          setTimeout(() => {
            themeLabel.textContent = document.documentElement.classList.contains("light-mode") ? "Light Mode" : "Dark Mode";
          }, 50);
        }
      });
    }
  }

  document.body.appendChild(mobileMenu);

  // Menü öffnen, wenn auf den Toggle-Button geklickt wird
  toggleBtn.addEventListener("click", () => {
    mobileMenu.classList.add("active");
    overlay.classList.add("active");
    document.body.classList.add("menu-open");
  });

  // Menü schließen, wenn auf den X-Button geklickt wird
  closeBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("active");
    overlay.classList.remove("active");
    document.body.classList.remove("menu-open");
  });

  // Schließen, wenn auf das Overlay geklickt wird
  overlay.addEventListener("click", () => {
    mobileMenu.classList.remove("active");
    overlay.classList.remove("active");
    document.body.classList.remove("menu-open");
  });

  // ESC-Taste behandeln, um das Menü zu schließen
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && mobileMenu.classList.contains("active")) {
      mobileMenu.classList.remove("active");
      overlay.classList.remove("active");
      document.body.classList.remove("menu-open");
    }
  });
}

// ============================
// INITIALISIERUNG
// ============================

// Beim Laden des Dokuments initialisieren
document.addEventListener("DOMContentLoaded", function () {
  // Theme initialisieren
  initializeTheme();
  
  // Sidebar initialisieren
  initSidebar();
  
  // Select initialisieren
  initSelect();
  
  // Modernes mobiles Menü mit einer kleinen Verzögerung initialisieren
  setTimeout(() => {
    initModernMobileMenu();
    initScrollToTopButton();
  }, 200);
});

// Bei Fenstergrößenänderung prüfen
window.addEventListener("resize", function () {
  // Mobile Menü-Elemente entfernen, wenn wir auf dem Desktop sind (1024px oder größer)
  if (window.innerWidth >= 1024) {
    const mobileToggle = document.querySelector(".mobile-menu-toggle");
    const mobileMenu = document.querySelector(".mobile-menu");
    const overlay = document.querySelector(".mobile-menu-overlay");

    if (mobileToggle) mobileToggle.remove();
    if (mobileMenu) mobileMenu.remove();
    if (overlay) overlay.remove();

    document.body.classList.remove("menu-open");
  } else {
    // Auf Mobilgeräten (unter 1024px) initialisieren, wenn noch nicht vorhanden
    if (!document.querySelector(".mobile-menu-toggle")) {
      initModernMobileMenu();
    }
  }
  
  // Immer den Scroll-Button initialisieren (wird nur angezeigt, wenn genug gescrollt wurde)
  setTimeout(initScrollToTopButton, 200);
});
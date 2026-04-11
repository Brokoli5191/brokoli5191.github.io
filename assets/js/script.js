"use strict";

/**
 * Universelles JavaScript für die Website
 */

// ============================
// PFADE - aus PHP meta-Tag
// ============================

// Root-Pfad wird von PHP via <meta name="root-path"> gesetzt (path-helper.php)
const rootPath = document.querySelector('meta[name="root-path"]')?.content ?? '';

// Pfade entsprechend setzen
const avatarPath = rootPath + 'assets/images/rs.jpg';
const aboutPath = rootPath + 'about/about.php';
const pinboardPath = rootPath + 'pinboard/pinboard.php';
const researchPath = rootPath + 'research/research-topics.php';
const teachingPath = rootPath + 'teaching/teaching.php';
const vitaPath = rootPath + 'vita/vita.php';
const contactPath = rootPath + 'contact/contact.php';

// Untermenüs für Research
const researchTopicsPath = rootPath + 'research/research-topics.php';
const researchPublicationsPath = rootPath + 'research/research-publications.php';
const researchProjectsPath = rootPath + 'research/research-projects.php';
const researchTalksPath = rootPath + 'research/research-talks.php';

// Untermenüs für Teaching
const teachingActivitiesPath = rootPath + 'teaching/teaching.php';
const teachingCoursesPath = rootPath + 'teaching/teaching-courses.php';
const teachingLecturenotesPath = rootPath + 'teaching/teaching-lecturenotes.php';
const teachingStudentsPath = rootPath + 'teaching/teaching-students.php';

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

  // Klassen werden bereits im <head> gesetzt (kein Flash).
  // Hier nur Checkbox-Zustand synchronisieren und Listener anhaengen.
  toggleSwitch.checked = getCookie("darkMode") === "enabled";

  toggleSwitch.addEventListener("change", () => {
    const isDark = toggleSwitch.checked;
    if (isDark) {
      document.documentElement.classList.add("dark-mode");
      document.documentElement.classList.remove("light-mode");
      setCookie("darkMode", "enabled", 365);
    } else {
      document.documentElement.classList.add("light-mode");
      document.documentElement.classList.remove("dark-mode");
      setCookie("darkMode", "disabled", 365);
    }
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

/** Navigationselemente mit Pfaden und Icons */
const NAV_ITEMS = [
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

/** Öffnet das mobile Menü */
function openMenu(mobileMenu, overlay) {
  mobileMenu.classList.add("active");
  overlay.classList.add("active");
  document.body.classList.add("menu-open");
}

/** Schließt das mobile Menü */
function closeMenu(mobileMenu, overlay) {
  mobileMenu.classList.remove("active");
  overlay.classList.remove("active");
  document.body.classList.remove("menu-open");
}

/** Blendet ein Untermenü aus (mit Animation) */
function collapseSubmenu(submenu, triggerLink) {
  submenu.style.opacity = '0';
  submenu.style.transform = 'translateY(-10px)';
  setTimeout(() => {
    submenu.classList.remove("expanded");
    triggerLink.classList.remove("expanded");
  }, 300);
}

/** Blendet ein Untermenü ein */
function expandSubmenu(submenu, triggerLink) {
  submenu.classList.add("expanded");
  triggerLink.classList.add("expanded");
  setTimeout(() => {
    submenu.style.opacity = '';
    submenu.style.transform = '';
  }, 10);
}

/** Erstellt einen einzelnen Nav-Listeneintrag (inkl. optionalem Untermenü) */
function buildNavItem(item, currentPath) {
  const li = document.createElement("li");
  li.className = "mobile-nav-item";

  const a = document.createElement("a");
  a.className = "mobile-nav-link";
  a.href = item.submenu ? "javascript:void(0)" : item.path;
  if (item.submenu) a.classList.add("has-submenu");

  if (item.icon) {
    const iconSpan = document.createElement("span");
    iconSpan.className = "mobile-nav-icon";
    iconSpan.innerHTML = `<ion-icon name="${item.icon}"></ion-icon>`;
    a.appendChild(iconSpan);
  }

  const textSpan = document.createElement("span");
  textSpan.textContent = item.name;
  a.appendChild(textSpan);

  if (!item.submenu && currentPath.includes(item.path.split("/").pop())) {
    a.classList.add("mobile-nav-active");
  }

  li.appendChild(a);

  if (item.submenu) {
    const subUl = document.createElement("ul");
    subUl.className = "mobile-submenu";
    let hasActiveChild = false;

    item.submenu.forEach((subItem) => {
      const subLi = document.createElement("li");
      subLi.className = "mobile-nav-item";

      const subA = document.createElement("a");
      subA.className = "mobile-nav-link";
      subA.href = subItem.path;
      subA.textContent = subItem.name;

      if (currentPath.includes(subItem.path.split("/").pop())) {
        subA.classList.add("mobile-nav-active");
        hasActiveChild = true;
      }

      subLi.appendChild(subA);
      subUl.appendChild(subLi);
    });

    if (hasActiveChild) {
      subUl.classList.add("expanded");
      a.classList.add("expanded");
      li.classList.add("has-active-child");
    }

    li.appendChild(subUl);

    a.addEventListener("click", (e) => {
      e.preventDefault();
      const submenu = a.nextElementSibling;
      const isExpanded = submenu.classList.contains("expanded");

      document.querySelectorAll(".mobile-submenu.expanded").forEach((menu) => {
        if (menu !== submenu) collapseSubmenu(menu, menu.previousElementSibling);
      });

      if (isExpanded) {
        collapseSubmenu(submenu, a);
      } else {
        expandSubmenu(submenu, a);
      }
    });
  }

  return li;
}

/** Erstellt die vollständige Nav-Liste */
function buildNavList(currentPath) {
  const navList = document.createElement("ul");
  navList.className = "mobile-nav-list";
  NAV_ITEMS.forEach((item) => navList.appendChild(buildNavItem(item, currentPath)));
  return navList;
}

/** Erstellt den Theme-Toggle-Bereich für das mobile Menü */
function buildMobileThemeToggle() {
  const themeToggle = document.querySelector(".switch");
  if (!themeToggle) return null;

  const themeContainer = document.createElement("div");
  themeContainer.className = "mobile-theme-toggle";

  const themeLabel = document.createElement("div");
  themeLabel.className = "mobile-theme-label";
  themeLabel.textContent = document.documentElement.classList.contains("light-mode") ? "Light Mode" : "Dark Mode";
  themeContainer.appendChild(themeLabel);

  const mobileThemeToggle = themeToggle.cloneNode(true);
  themeContainer.appendChild(mobileThemeToggle);

  const originalInput = themeToggle.querySelector("input");
  const mobileInput = mobileThemeToggle.querySelector("input");

  if (originalInput && mobileInput) {
    mobileInput.checked = originalInput.checked;

    mobileInput.addEventListener("change", () => {
      originalInput.checked = mobileInput.checked;
      originalInput.dispatchEvent(new Event("change"));
      setTimeout(() => {
        themeLabel.textContent = document.documentElement.classList.contains("light-mode") ? "Light Mode" : "Dark Mode";
      }, 50);
    });

    originalInput.addEventListener("change", () => {
      mobileInput.checked = originalInput.checked;
      setTimeout(() => {
        themeLabel.textContent = document.documentElement.classList.contains("light-mode") ? "Light Mode" : "Dark Mode";
      }, 50);
    });
  }

  return themeContainer;
}

/** Erstellt das komplette Menü-DOM und hängt es an body */
function createMenuMarkup() {
  const toggleBtn = document.createElement("div");
  toggleBtn.className = "mobile-menu-toggle";
  toggleBtn.setAttribute("aria-label", "Open menu");
  document.body.appendChild(toggleBtn);
  setTimeout(() => toggleBtn.classList.add("pulse-once"), 500);

  const overlay = document.createElement("div");
  overlay.className = "mobile-menu-overlay";
  document.body.appendChild(overlay);

  const mobileMenu = document.createElement("div");
  mobileMenu.className = "mobile-menu";

  const closeBtn = document.createElement("div");
  closeBtn.className = "mobile-menu-close";
  closeBtn.innerHTML = "×";
  closeBtn.setAttribute("aria-label", "Close menu");
  mobileMenu.appendChild(closeBtn);

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

  const mobileNav = document.createElement("nav");
  mobileNav.className = "mobile-nav";
  mobileNav.appendChild(buildNavList(window.location.pathname));
  mobileMenu.appendChild(mobileNav);

  const themeSection = buildMobileThemeToggle();
  if (themeSection) mobileMenu.appendChild(themeSection);

  document.body.appendChild(mobileMenu);

  return { toggleBtn, overlay, mobileMenu, closeBtn };
}

/** Bindet alle Menü-Events (öffnen, schließen, ESC) */
function bindMenuEvents(toggleBtn, closeBtn, overlay, mobileMenu) {
  toggleBtn.addEventListener("click", () => openMenu(mobileMenu, overlay));
  closeBtn.addEventListener("click", () => closeMenu(mobileMenu, overlay));
  overlay.addEventListener("click", () => closeMenu(mobileMenu, overlay));
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && mobileMenu.classList.contains("active")) {
      closeMenu(mobileMenu, overlay);
    }
  });
}

/** Initialisiert das mobile Menü (nur unter 1024px) */
function initModernMobileMenu() {
  if (window.innerWidth >= 1024) return;
  if (document.querySelector(".mobile-menu-toggle")) return;

  const { toggleBtn, overlay, mobileMenu, closeBtn } = createMenuMarkup();
  bindMenuEvents(toggleBtn, closeBtn, overlay, mobileMenu);
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
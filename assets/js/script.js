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

// testimonials variables
const testimonialsItem = document.querySelectorAll("[data-testimonials-item]");
const modalContainer = document.querySelector("[data-modal-container]");
const modalCloseBtn = document.querySelector("[data-modal-close-btn]");
const overlay = document.querySelector("[data-overlay]");

// modal variable
const modalImg = document.querySelector("[data-modal-img]");
const modalTitle = document.querySelector("[data-modal-title]");
const modalText = document.querySelector("[data-modal-text]");

// modal toggle function
const testimonialsModalFunc = function () {
  if (modalContainer && overlay) {
    modalContainer.classList.toggle("active");
    overlay.classList.toggle("active");
  }
};

// add click event to all modal items
for (let i = 0; i < testimonialsItem.length; i++) {
  testimonialsItem[i].addEventListener("click", function () {
    if (modalImg && modalTitle && modalText) {
      const avatar = this.querySelector("[data-testimonials-avatar]");
      if (avatar) {
        modalImg.src = avatar.src;
        modalImg.alt = avatar.alt;
      }
      const titleElem = this.querySelector("[data-testimonials-title]");
      if (titleElem) {
        modalTitle.innerHTML = titleElem.innerHTML;
      }
      const textElem = this.querySelector("[data-testimonials-text]");
      if (textElem) {
        modalText.innerHTML = textElem.innerHTML;
      }
      testimonialsModalFunc();
    }
  });
}

// add click event to modal close button
if (modalCloseBtn) {
  modalCloseBtn.addEventListener("click", testimonialsModalFunc);
}
if (overlay) {
  overlay.addEventListener("click", testimonialsModalFunc);
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

  const menuAvatar = document.createElement("img");
  menuAvatar.className = "mobile-menu-avatar";
  menuAvatar.src = "../assets/images/rs.jpg";
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

  // Define navigation items with icons and submenus
  const navItems = [
    { name: "About", path: "../about/about.html", icon: "person-outline" },
    { name: "Pinboard", path: "../pinboard/pinboard.html", icon: "clipboard-outline" },
    {
      name: "Research",
      path: "../research/research.html",
      icon: "flask-outline",
      submenu: [
        { name: "Research Interests", path: "../research/research.html" },
        { name: "Topics", path: "../research/research-topics.html" },
        { name: "Publications", path: "../research/research-publications.html" },
        { name: "Projects", path: "../research/research-projects.html" },
        { name: "Talks", path: "../research/research-talks.html" },
      ],
    },
    {
      name: "Teaching",
      path: "../teaching/teaching.html",
      icon: "school-outline",
      submenu: [
        { name: "Teaching activities", path: "../teaching/teaching.html" },
        { name: "Courses", path: "../teaching/teaching-courses.html" },
        { name: "Lecture Notes", path: "../teaching/teaching-lecturenotes.html" },
        { name: "Students", path: "../teaching/teaching-students.html" },
      ],
    },
    {
      name: "Vita",
      path: "../vita/vita.html",
      icon: "document-text-outline",
      submenu: [
        { name: "Personal Data", path: "../vita/vita.html" },
        { name: "Lecture Notes", path: "../vita/vita-education.html" },
        { name: "Scientific Career", path: "../vita/vita-scientificcareer.html" },
      ],
    },
    { name: "Contact", path: "../contact/contact.html", icon: "mail-outline" },
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
            menu.classList.remove("expanded");
            menu.previousElementSibling.classList.remove("expanded");
          }
        });

        // Toggle current submenu
        if (isExpanded) {
          submenu.classList.remove("expanded");
          a.classList.remove("expanded");
        } else {
          submenu.classList.add("expanded");
          a.classList.add("expanded");
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

// Initialize on document load
document.addEventListener("DOMContentLoaded", function () {
  // Initialize modern mobile menu with a slight delay to ensure DOM is fully ready
  setTimeout(function () {
    initModernMobileMenu();
  }, 100);

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
    }
  }
});

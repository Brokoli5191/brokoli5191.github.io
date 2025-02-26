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

function adjustFooterPadding() {
  const navbar = document.querySelector(".navbar");
  const footer = document.querySelector("footer");
  const windowWidth = window.innerWidth;

  if (navbar && footer) {
    // Only apply dynamic padding for screens smaller than 1024px
    if (windowWidth < 1024) {
      // Get the actual height of the navbar
      const navbarHeight = navbar.offsetHeight;
      // Add a bit of extra padding (e.g., 20px) for visual spacing
      const paddingBottom = navbarHeight + 20;
      // Apply the padding to the footer
      footer.style.paddingBottom = `${paddingBottom}px`;
    } else {
      // For desktop (≥1024px), reset to a smaller fixed padding
      footer.style.paddingBottom = "20px";
    }
  }
}

// Run once when the page loads
document.addEventListener("DOMContentLoaded", adjustFooterPadding);

// Also run when the window is resized
window.addEventListener("resize", adjustFooterPadding);

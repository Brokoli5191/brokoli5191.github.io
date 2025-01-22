'use strict';

// Cookie-Hilfsfunktionen
function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

// Theme management function
function initializeTheme() {
    const toggleSwitch = document.getElementById('theme-toggle');
    if (!toggleSwitch) return;
    
    // Funktion zum Aktualisieren des Themes
    function updateTheme(isDark) {
        if (isDark) {
            document.documentElement.classList.add('dark-mode');
            document.documentElement.classList.remove('light-mode');
            toggleSwitch.checked = true;
            setCookie('darkMode', 'enabled', 365); // Cookie für 1 Jahr
        } else {
            document.documentElement.classList.add('light-mode');
            document.documentElement.classList.remove('dark-mode');
            toggleSwitch.checked = false;
            setCookie('darkMode', 'disabled', 365); // Cookie für 1 Jahr
        }
    }

    // Initial theme setzen
    const savedTheme = getCookie('darkMode');
    updateTheme(savedTheme === 'enabled');

    // Event Listener für Theme-Toggle
    toggleSwitch.addEventListener('change', () => {
        updateTheme(toggleSwitch.checked);
    });
}

// Beim Laden der Seite initialisieren
document.addEventListener('DOMContentLoaded', initializeTheme);

// Bei Navigation zwischen Seiten (für Single Page Applications)
if (window.navigation) {
    navigation.addEventListener('navigate', () => {
        initializeTheme();
    });
}

// element toggle function
const elementToggleFunc = function (elem) { 
    elem.classList.toggle("active"); 
}

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
}

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

// add event in all select items
for (let i = 0; i < selectItems.length; i++) {
    selectItems[i].addEventListener("click", function () {
        if (selectValue) {
            let selectedValue = this.innerText.toLowerCase();
            selectValue.innerText = this.innerText;
            elementToggleFunc(select);
            filterFunc(selectedValue);
        }
    });
}

// filter variables
const filterItems = document.querySelectorAll("[data-filter-item]");

const filterFunc = function (selectedValue) {
    for (let i = 0; i < filterItems.length; i++) {
        if (selectedValue === "all") {
            filterItems[i].classList.add("active");
        } else if (selectedValue === filterItems[i].dataset.category) {
            filterItems[i].classList.add("active");
        } else {
            filterItems[i].classList.remove("active");
        }
    }
}

// add event in all filter button items for large screen
let lastClickedBtn = filterBtn[0];

for (let i = 0; i < filterBtn.length; i++) {
    filterBtn[i].addEventListener("click", function () {
        if (selectValue) {
            let selectedValue = this.innerText.toLowerCase();
            selectValue.innerText = this.innerText;
            filterFunc(selectedValue);

            if (lastClickedBtn) {
                lastClickedBtn.classList.remove("active");
            }
            this.classList.add("active");
            lastClickedBtn = this;
        }
    });
}

// contact form variables
const form = document.querySelector("[data-form]");
const formInputs = document.querySelectorAll("[data-form-input]");
const formBtn = document.querySelector("[data-form-btn]");

// add event to all form input field
if (form && formBtn) {
    for (let i = 0; i < formInputs.length; i++) {
        formInputs[i].addEventListener("input", function () {
            // check form validation
            if (form.checkValidity()) {
                formBtn.removeAttribute("disabled");
            } else {
                formBtn.setAttribute("disabled", "");
            }
        });
    }
}

// page navigation variables
const navigationLinks = document.querySelectorAll("[data-nav-link]");
const pages = document.querySelectorAll("[data-page]");

// add event to all nav link
for (let i = 0; i < navigationLinks.length; i++) {
    navigationLinks[i].addEventListener("click", function () {
        for (let j = 0; j < pages.length; j++) {
            if (this.innerHTML.toLowerCase() === pages[j].dataset.page) {
                pages[j].classList.add("active");
                navigationLinks[i].classList.add("active");
                window.scrollTo(0, 0);
            } else {
                pages[j].classList.remove("active");
                navigationLinks[j].classList.remove("active");
            }
        }
    });
}

// Alternative page navigation variables
const altNavLinks = document.querySelectorAll("[data-alt-nav-link]");
const altPages = document.querySelectorAll("[data-alt-page]");

// Add event to all alternative nav links
for (let i = 0; i < altNavLinks.length; i++) {
    altNavLinks[i].addEventListener("click", function () {
        for (let j = 0; j < altPages.length; j++) {
            if (this.innerHTML.toLowerCase() === altPages[j].dataset.altPage) {
                altPages[j].classList.add("active");
                altNavLinks[i].classList.add("active");
                window.scrollTo(0, 0);
            } else {
                altPages[j].classList.remove("active");
                altNavLinks[j].classList.remove("active");
            }
        }
    });
}
# Roland Steinbauer — Personal Academic Website

Personal website of [Roland Steinbauer](https://mat.univie.ac.at/~stein), mathematician and mathematical physicist at the University of Vienna.

## Tech stack

| Layer | Technology |
|-------|-----------|
| Backend | PHP (server-side rendering, no database) |
| Frontend | Vanilla JavaScript (ES6) |
| Styling | CSS3 with custom properties (dark/light theme) |
| Icons | Phosphor Icons (self-hosted) |
| Fonts | Poppins v22 (self-hosted WOFF2) |
| Maps | Leaflet.js 1.9.4 (lazy-loaded via CDN on consent) |
| Hosting | GitHub Pages + XAMPP (local dev) |

## Running locally

1. Install [XAMPP](https://www.apachefriends.org/).
2. Clone this repository into your XAMPP `htdocs` directory:
   ```
   git clone https://github.com/Brokoli5191/brokoli5191.github.io.git
   ```
3. Start the Apache server in the XAMPP Control Panel.
4. Open `http://localhost/brokoli5191.github.io/` in your browser.

> GitHub Pages serves the site at `https://brokoli5191.github.io/` directly (no PHP processing — static content only).

## Project structure

```
brokoli5191.github.io/
├── index.php                  → Redirects to about/about.php
├── includes/                  → Shared PHP templates
│   ├── path-helper.php        → Computes relative paths (see below)
│   ├── sidebar.php            → Full HTML head + sidebar markup
│   ├── header.php             → Alias: includes sidebar.php
│   ├── header-research.php    → Research sub-navigation bar
│   ├── header-teaching.php    → Teaching sub-navigation bar
│   ├── header-courses.php     → Course-level navigation
│   └── footer.php             → Copyright footer + script tag
├── about/                     → About page
├── contact/                   → Contact page (with map)
├── pinboard/                  → Recent activities timeline
├── research/                  → Research topics, publications, projects, talks
├── teaching/                  → Teaching activities, courses, lecture notes, students
│   └── courses/               → Per-semester course pages (SoSem01–26, WS0001–2526)
├── vita/                      → CV (PDF viewer)
└── assets/
    ├── css/style.css          → Main stylesheet (CSS custom properties for theming)
    ├── css/fonts.css          → @font-face declarations
    ├── js/script.js           → Theme toggle, sidebar, mobile menu, scroll-to-top
    ├── fonts/                 → Self-hosted Poppins WOFF2 files
    ├── icons/                 → Self-hosted Phosphor icon font
    └── images/                → Profile photos, project images
```

## How path-helper.php works

Every page includes `path-helper.php` (directly or via a header include). It inspects
`$_SERVER['SCRIPT_NAME']` to count how many directory levels deep the current page is,
then sets `$rootPath` to the appropriate number of `../` segments.

```
/ (root)          → $rootPath = ''
/about/           → $rootPath = '../'
/teaching/        → $rootPath = '../'
/teaching/courses/SoSem26/  → $rootPath = '../../../'
```

All other path variables (`$assetsPath`, `$researchPath`, etc.) are derived from `$rootPath`.

JavaScript reads the root path from a `<meta name="root-path">` tag rendered by PHP,
so client-side navigation paths always stay in sync with the server-side calculation.

## Theme system

- On page load, an inline `<script>` in `<head>` reads the `darkMode` cookie and immediately
  adds `dark-mode` or `light-mode` to `<html>` — preventing a flash of unstyled content.
- `initializeTheme()` in `script.js` then syncs the toggle checkbox and attaches the
  `change` listener for subsequent user interaction.
- Theme preference is stored in a cookie (1-year expiry).

## Adding content

- **New publication / talk:** Edit `research/research-publications.php` or `research/research-talks.php`.
- **New course semester:** Create a new folder under `teaching/courses/` following the naming
  convention (`SoSemYY` or `WSYYYY`), then add the semester to `teaching/teaching-courses.php`.
- **Pinboard update:** Edit `pinboard/pinboard.php` directly.

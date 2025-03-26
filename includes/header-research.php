<?php?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Roland Steinbauer - Mathematician at the University of Vienna. Research in mathematics, differential geometry, and more." />
    <meta name="keywords" content="Roland Steinbauer, Universität Wien, Mathematik, University of Vienna, Mathematics, Differential Geometry" />
    <meta name="author" content="Roland Steinbauer, Florian Hartmann, Joe Wang" />
    <title>Roland Steinbauer | <?php echo $pageTitle; ?></title>

    <script>
      function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(";").shift();
      }

      if (getCookie("darkMode") === "enabled") {
        document.documentElement.classList.add("dark-mode");
      } else {
        document.documentElement.classList.add("light-mode");
      }
    </script>

    <link rel="stylesheet" href="../assets/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="../assets/icons/style.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon" />
    <?php if (isset($customCss)): ?>
    <link rel="stylesheet" href="<?php echo $customCss; ?>" />
    <?php endif; ?>
  </head>
  <body>
    <main>
      <aside class="sidebar" data-sidebar>
        <div class="sidebar-info">
          <figure class="avatar-box">
            <img src="../assets/images/rs.jpg" alt="Roland Steinbauer" class="rounded-image" href="../about/about.php" />
          </figure>

          <div class="info-content">
            <h3 class="name" title="Roland Steinbauer"><a href="../about/about.php">Roland Steinbauer</a></h3>
          </div>

          <button class="info_more-btn" data-sidebar-btn>
            <span>Show Links</span>

            <i class="ph ph-caret-down"></i>
          </button>
        </div>

        <div class="sidebar-info_more">
          <hr class="section-divider" />

          <ul class="contacts-list">
            <li class="contact-item">
              <div class="icon-box">
                <i class="ph ph-planet"></i>
              </div>

              <div class="contact-info">
                <a target="_blank" href="https://ef-geometry.univie.ac.at/" class="contact-link">A New Geometry</a>
              </div>
            </li>

            <li class="contact-item">
              <div class="icon-box">
                <i class="ph ph-microscope"></i>
              </div>

              <div class="contact-info">
                <a target="_blank" href="https://www.mat.univie.ac.at/~berant14/diana/latest.html" class="contact-link">Research Seminar</a>
              </div>
            </li>
          </ul>

          <hr class="section-divider" />

          <ul class="contacts-list">
             <li class="contact-item">
              <div class="icon-box">
                <i class="ph ph-math-operations"></i>
              </div>

              <div class="contact-info">
                <a target="_blank" href="http://mathematik.univie.ac.at/" class="contact-link">Math Faculty</a>
              </div>
            </li>

            <li class="contact-item">
              <div class="icon-box">
                <i class="ph ph-student"></i>
              </div>

              <div class="contact-info">
                <a target="_blank" href="http://www.univie.ac.at/" class="contact-link">Vienna University</a>
              </div>
            </li>
	    <li class="contact-item">
             <div class="icon-box">
               <i class="ph ph-atom"></i>
             </div>

             <div class="contact-info">
               <a target="_blank" href=" https://gravity.univie.ac.at/" class="contact-link">Gravity @ U Vienna</a>
             </div>
            </li>

            <li class="contact-item">
              <div class="icon-box">
                <i class="ph ph-bank"></i>
              </div>

              <div class="contact-info">
                <a target="_blank" href="https://www.vsmath.at/" class="contact-link">VSM</a><a class="contact-link"> / </a><a target="_blank" href="https://mcmp.univie.ac.at/" class="contact-link">MCMP</a>
              </div>
            </li>
          </ul>

          <hr class="section-divider" />

          <ul class="contacts-list">
            <li class="contact-item">
              <div class="icon-box">
                <i class="ph ph-pi"></i>
              </div>

              <div class="contact-info">
                <a target="_blank" href="https://mathx.univie.ac.at/" class="contact-link">MaThx</a>
              </div>
            </li>

            <li class="contact-item">
              <div class="icon-box">
                <i class="ph ph-book"></i>
              </div>

              <div class="contact-info">
                <a target="_blank" href="https://www.springer.com/de/book/9783662568057" class="contact-link">Textbook</a>
              </div>
            </li>
          </ul>
        </div>
      </aside>

      <div class="main-content">
        <nav class="navbar">
          <ul class="navbar-list">
            <a href="../about/about.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'about') ? 'navbar-active' : 'navbar-link'; ?>">About</button>
            </a>

            <a href="../pinboard/pinboard.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'pinboard') ? 'navbar-active' : 'navbar-link'; ?>">Pinboard</button>
            </a>

            <a href="../research/research-topics.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'research') ? 'navbar-active' : 'navbar-link'; ?>">Research</button>
            </a>

            <a href="../teaching/teaching.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'teaching') ? 'navbar-active' : 'navbar-link'; ?>">Teaching</button>
            </a>

            <a href="../vita/vita.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'vita') ? 'navbar-active' : 'navbar-link'; ?>">Vita</button>
            </a>

            <a href="../contact/contact.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'contact') ? 'navbar-active' : 'navbar-link'; ?>">Contact</button>
            </a>

            <label class="switch">
              <input id="theme-toggle" type="checkbox" checked />
              <div class="slider round">
                <div class="sun-moon">
                  <svg viewBox="0 0 100 100" class="moon-dot" id="moon-dot-1">
                    <circle r="50" cy="50" cx="50"></circle>
                  </svg>
                  <svg viewBox="0 0 100 100" class="moon-dot" id="moon-dot-2">
                    <circle r="50" cy="50" cx="50"></circle>
                  </svg>
                  <svg viewBox="0 0 100 100" class="moon-dot" id="moon-dot-3">
                    <circle r="50" cy="50" cx="50"></circle>
                  </svg>
                  <svg viewBox="0 0 100 100" class="light-ray" id="light-ray-1">
                    <circle r="50" cy="50" cx="50"></circle>
                  </svg>
                  <svg viewBox="0 0 100 100" class="light-ray" id="light-ray-2">
                    <circle r="50" cy="50" cx="50"></circle>
                  </svg>
                  <svg viewBox="0 0 100 100" class="light-ray" id="light-ray-3">
                    <circle r="50" cy="50" cx="50"></circle>
                  </svg>

                  <svg viewBox="0 0 100 100" class="cloud-dark" id="cloud-1">
                    <circle r="50" cy="50" cx="50"></circle>
                  </svg>
                  <svg viewBox="0 0 100 100" class="cloud-dark" id="cloud-2">
                    <circle r="50" cy="50" cx="50"></circle>
                  </svg>
                  <svg viewBox="0 0 100 100" class="cloud-dark" id="cloud-3">
                    <circle r="50" cy="50" cx="50"></circle>
                  </svg>
                  <svg viewBox="0 0 100 100" class="cloud-light" id="cloud-4">
                    <circle r="50" cy="50" cx="50"></circle>
                  </svg>
                  <svg viewBox="0 0 100 100" class="cloud-light" id="cloud-5">
                    <circle r="50" cy="50" cx="50"></circle>
                  </svg>
                  <svg viewBox="0 0 100 100" class="cloud-light" id="cloud-6">
                    <circle r="50" cy="50" cx="50"></circle>
                  </svg>
                </div>
                <div class="stars">
                  <svg viewBox="0 0 20 20" class="star" id="star-1">
                    <path d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z"></path>
                  </svg>
                  <svg viewBox="0 0 20 20" class="star" id="star-2">
                    <path d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z"></path>
                  </svg>
                  <svg viewBox="0 0 20 20" class="star" id="star-3">
                    <path d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z"></path>
                  </svg>
                  <svg viewBox="0 0 20 20" class="star" id="star-4">
                    <path d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z"></path>
                  </svg>
                </div>
              </div>
            </label>
          </ul>
          <ul class="filter-list-research">
            <a href="research-topics.php" class="navbar-item">
              <button class="<?php echo ($currentSubPage === 'research-topics') ? 'navbar-active' : 'navbar-link'; ?>">Research Topics</button>
            </a>

            <div class="dropdown navbar-item">
              <button onclick="window.location.href='research-publications.php';" class="<?php echo ($currentSubPage === 'research-publications') ? 'navbar-active' : 'navbar-link'; ?>">Publications</button>
              <div class="dropdown-content">
                <a href="research-publications.php#Monographs">Research Monographs</a>
                <a href="research-publications.php#Textbook">Textbook</a>
                <a href="research-publications.php#Preprints">Preprints</a>
                <a href="research-publications.php#articles">Research Articles</a>
                <a href="research-publications.php#Misc">Miscellaneous</a>
                <a href="research-publications.php#Didactics">Mathematics Education Research</a>
                <a href="research-publications.php#Theses">Theses</a>
                <a href="research-publications.php#editor">Editorial Activities</a>
                <a href="research-publications.php#extern">ArXiv, MathSciNet & ZMAT</a>
              </div>
            </div>

            <a href="research-projects.php" class="navbar-item">
              <button class="<?php echo ($currentSubPage === 'research-projects') ? 'navbar-active' : 'navbar-link'; ?>">Projects</button>
            </a>

            <div class="dropdown navbar-item">
              <button onclick="window.location.href='research-talks.php';" class="<?php echo ($currentSubPage === 'research-talks') ? 'navbar-active' : 'navbar-link'; ?>">Talks</button>
              <div class="dropdown-content">
                <a href="research-talks.php">Mathematics</a>
                <a href="research-talks.php#me">Maths Education</a>
              </div>
            </div>
          </ul>
        </nav>
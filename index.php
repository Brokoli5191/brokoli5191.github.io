<?php
$pageTitle = "About";
$currentPage = "about";
?>
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

    <link rel="stylesheet" type="text/css" href="assets/icons/style.css" />

    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <?php if (isset($customCss)): ?>
    <link rel="stylesheet" href="<?php echo $customCss; ?>" />
    <?php endif; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=planet" />
  </head>
  <body>
    <main>
      <aside class="sidebar" data-sidebar>
        <div class="sidebar-info">
          <figure class="avatar-box">
            <img src="assets/images/rs.jpg" alt="Roland Steinbauer" class="rounded-image" href="about/about.php" />
          </figure>

          <div class="info-content">
            <h3 class="name" title="Roland Steinbauer" href="about/about.php">Roland Steinbauer</h3>
          </div>

          <button class="info_more-btn" data-sidebar-btn>
            <span>Show Links</span>

            <ion-icon name="chevron-down"></ion-icon>
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
            <a href="about/about.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'about') ? 'navbar-active' : 'navbar-link'; ?>">About</button>
            </a>

            <a href="pinboard/pinboard.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'pinboard') ? 'navbar-active' : 'navbar-link'; ?>">Pinboard</button>
            </a>

            <a href=research/research-topics.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'research') ? 'navbar-active' : 'navbar-link'; ?>">Research</button>
            </a>

            <a href="teaching/teaching.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'teaching') ? 'navbar-active' : 'navbar-link'; ?>">Teaching</button>
            </a>

            <a href="vita/vita.php" class="navbar-item">
              <button class="<?php echo ($currentPage === 'vita') ? 'navbar-active' : 'navbar-link'; ?>">Vita</button>
            </a>

            <a href="contact/contact.php" class="navbar-item">
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
        </nav>
        <article>
          <header>
            <h2 class="h2 article-title">About me</h2>
          </header>

          <section class="about-text">
            <section>
              <p>
                I am a mathematician and mathematical physicist and a researcher in mathematics education at the <a href="https://mathematik.univie.ac.at/en/" target="_blank">Faculty of
                Mathematics</a> of the <a href="https://www.univie.ac.at/en" target="_blank">University of Vienna</a>. Also I am the coordinator of the Austrian Science Fund's (FWF) Emerging Fields project
              </p>

              <div style="text-align: center">
                <h4><a href="https://ef-geometry.univie.ac.at/" target="_blank">A new geometry for Einstein's Theory of Relativity and Beyond</a></h4>
              </div>

              <br />
              <br />
            </section>

            <section class="service">
               <ul class="service-list">
                <li class="service-item">
                  <div class="service-icon-box">
                    <i class="ph ph-infinity ph-size"></i>
                  </div>

                  <div class="service-content-box">
                    <h4 class="h4 service-item-title">Research in Mathematics</h4>
                    <p class="service-item-text">
                      My main field of interest is <b>Mathematical General Relativity</b>, especially non-smooth spacetime geometries.
                      Over the years I have also done research in Functional Analysis, Applied Analysis and the Theory of PDE.
                    </p>
                  </div>
                </li>

                <li class="service-item">
                  <div class="service-icon-box">
                    <i class="ph ph-chalkboard-teacher ph-size"></i>
                  </div>
  
                  <div class="service-content-box">
                      <h4 class="h4 service-item-title">Mathematics Education Research</h4>
                      <p class="service-item-text">
                       In recent years I have collaborated with
                       colleagues from the <a href="https://mathematik.univie.ac.at/en/research/subject-specific-didactics-school-mathematics/" target="_blank">Didactis Group</a> at our Faculty especially investigating 
                       professional knowledge of teachers, and beliefs on teaching and learning mathematics.
                      </p>
                    </div>
                  </li>
                  
                  <li class="service-item">
                    <div class="service-icon-box">
                      <i class="ph ph-users ph-size"></i>
                    </div>
  
                    <div class="service-content-box">
                      <h4 class="h4 service-item-title">Teaching Portfolio</h4>
                      <p class="service-item-text">
                        I regularly teach a variety of courses in several areas of mathematics, from general first-year-courses to specialized courses and seminars in analysis, PDE and
                        geometry. I have recently redesigned the analysis courses (subject-matter and dicdactical) in our teacher training programme jointly with <a href="https://ufind.univie.ac.at/de/person.html?id=112596" target="_blank">Sonja Kramer</a> from the <a href="https://kphvie.ac.at/en/home.html" target="_blank">University College of teacher education</a>. For her contribution she received the <a href="https://ctl.univie.ac.at/angebote-fuer-lehrende/teaching-awards/lehre-inspiriert-2024/lehre-als-gemeinschaftsaufgabe/#c1163718" target="_blank">UNIVIE Teaching Award 2024</a>. I am also co-leading the Faculty's teaching project <a href="https://mathx.univie.ac.at/" target="_blank">MaThX</a> (Mathematik zwischen Theorie und Praxis).
                      </p>
                    </div>
                  </li>

                <li class="service-item">
                  <div class="service-icon-box">
                    <i class="ph ph-book ph-size"></i>
                  </div>

                  <div class="service-content-box">
                    <h4 class="h4 service-item-title">Textbook</h4>
                    <p class="service-item-text">
                      I have co-authored the general introductory textbook <a href="https://link.springer.com/book/10.1007/978-3-662-56806-4" target="_blank">Einführung in das Mathematische Arbeiten</a> (German, Introduction into mathematical methodology) with <a href="https://www.mat.univie.ac.at/~herman" target="_blank">Hermann Schichl</a>. Together we
                      are running a <a href="https://www.mat.univie.ac.at/~einfbuch/" target="_blank">service web page</a> accompanying the book which offers a number of <a href="http://www.mat.univie.ac.at/~einfbuch/Videos" target="_blank">explanatory videos</a> which we have produced for its 3rd edition. We have been awarded the <a href="https://ctl.univie.ac.at/angebote-fuer-lehrende/teaching-awards/archiv-univie-teaching-award/univie-teaching-award-2013/" target="_blank">UNIVIE Teaching Award 2013</a> of Vienna University 
                      and the <a href="https://gutelehre.at/neuigkeiten/detailseite/ars-docendi-2016-preisverleihung" target="_blank">ARS DOCENDI</a>, the Austrian National Award in University Teaching in 2016.
                    </p>
                  </div>
                </li>                            

                <li class="service-item">
                  <div class="service-icon-box">
                    <i class="ph ph-user-check ph-size"></i>
                  </div>

                  <div class="service-content-box">
                    <h4 class="h4 service-item-title">Supervisor in MCMP and VSM</h4>
                    <p class="service-item-text">
                      I am a PhD-supervisor in the <a href="https://www.vsmath.at/" target="_blank">Vienna School of Mathematics (VSM)</a> which is a new joint enterprise of U Vienna with the 
		                  <a href="https://www.tuwien.at/en" target="_blank">Technical University Vienna</a> and a supervisor in the 
		                  <a href="https://mcmp.univie.ac.at/" target="_blank">Vienna Master Class Mathematical Physics (MCMP)</a> which is run jointly by the Faculties of 
		                  <a href="https://mathematik.univie.ac.at/" target="_blank">Mathematics</a> and <a href="https://physik.univie.ac.at/en/" target="_blank">Physics</a> of U Vienna.
      	           </p>
                  </div>
                </li>

                <li class="service-item">
                  <div class="service-icon-box">
                    <i class="ph ph-user-list ph-size"></i>
                  </div>

                  <div class="service-content-box">
                    <h4 class="h4 service-item-title">Professional Memberships</h4>
                    <p class="service-item-text">
                      I am a lifetime-member of <a href="https://isaacmath.org/" target="_blank">ISAAC</a> (The International Society for Analysis, its Applications and Computation), a member and former treasurer of 
		                  the <a href="https://iagf.pmf.uns.ac.rs/" target="_blank">IAGF</a> (The International Association for Generalized Functions), and a member of the 
		                  <a href="https://didaktik-der-mathematik.de/" target="_blank">GDM</a> (The German Society of Didactics of Mathematics) and its
		                  <a href="https://mathematik.univie.ac.at/forschung/fachdidaktikschulmathematik/gdm-arbeitskreis-mathematikunterricht-und-mathematikdidaktik-in-oesterreich/" target="_blank">Austria working group</a>. 
		                </p>
                  </div>
                </li>
              </ul>
            </section>
           </article>
           </div>
      </main>
    <script src="assets/js/script-index.js"></script>
    <footer>&copy; 2025 Roland Steinbauer | Designed by Florian Hartmann & Joe Wang</footer>
  </body>
</html>
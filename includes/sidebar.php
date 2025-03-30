<?php
if (!isset($rootPath)) {
    include(__DIR__ . '/path-helper.php');
}
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

    <link rel="stylesheet" href="<?php echo $assetsPath; ?>css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $assetsPath; ?>icons/style.css" />
    <link rel="stylesheet" href="<?php echo $assetsPath; ?>css/style.css" />
    <link rel="shortcut icon" href="<?php echo $assetsPath; ?>images/logo.png" type="image/x-icon" />
    <?php if (isset($customCss)): ?>
    <link rel="stylesheet" href="<?php echo $rootPath . $customCss; ?>" />
    <?php endif; ?>
  </head>
  <body>
    <main>
      <aside class="sidebar" data-sidebar>
        <div class="sidebar-info">
          <figure class="avatar-box">
            <img src="<?php echo $assetsPath; ?>images/rs.jpg" alt="Roland Steinbauer" class="rounded-image" href="<?php echo $aboutPath; ?>about.php" />
          </figure>

          <div class="info-content">
            <h3 class="name" title="Roland Steinbauer"><a href="<?php echo $aboutPath; ?>about.php">Roland Steinbauer</a></h3>
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
                <i class="ph ph-student"></i>
              </div>

              <div class="contact-info">
                <a target="_blank" href="http://www.univie.ac.at/" class="contact-link">Vienna University</a>
              </div>
            </li>

             <li class="contact-item">
              <div class="icon-box">
                <i class="ph ph-math-operations"></i>
              </div>

              <div class="contact-info">
                <a target="_blank" href="http://mathematik.univie.ac.at/" class="contact-link">Math @ U Vienna</a>
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
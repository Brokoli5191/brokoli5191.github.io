<?php
include('sidebar.php');
?>
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
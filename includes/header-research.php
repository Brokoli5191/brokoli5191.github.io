<?php
if (!isset($rootPath)) {
    include(__DIR__ . '/path-helper.php');
}
include($includesPath . 'header.php');
?>
          <ul class="filter-list-research">
            <a href="<?php echo $researchPath; ?>research-topics.php" class="navbar-item">
              <button class="<?php echo ($currentSubPage === 'research-topics') ? 'navbar-active' : 'navbar-link'; ?>">Research Topics</button>
            </a>

            <div class="dropdown navbar-item">
              <button onclick="window.location.href='<?php echo $researchPath; ?>research-publications.php';" class="<?php echo ($currentSubPage === 'research-publications') ? 'navbar-active' : 'navbar-link'; ?>">Publications</button>
              <div class="dropdown-content">
                <a href="<?php echo $researchPath; ?>research-publications.php#Monographs">Research Monographs</a>
                <a href="<?php echo $researchPath; ?>research-publications.php#Textbook">Textbook</a>
                <a href="<?php echo $researchPath; ?>research-publications.php#Preprints">Preprints</a>
                <a href="<?php echo $researchPath; ?>research-publications.php#articles">Research Articles</a>
                <a href="<?php echo $researchPath; ?>research-publications.php#Misc">Miscellaneous</a>
                <a href="<?php echo $researchPath; ?>research-publications.php#Didactics">Mathematics Education Research</a>
                <a href="<?php echo $researchPath; ?>research-publications.php#Theses">Theses</a>
                <a href="<?php echo $researchPath; ?>research-publications.php#editor">Editorial Activities</a>
                <a href="<?php echo $researchPath; ?>research-publications.php#extern">ArXiv, MathSciNet & ZMAT</a>
              </div>
            </div>

            <a href="<?php echo $researchPath; ?>research-projects.php" class="navbar-item">
              <button class="<?php echo ($currentSubPage === 'research-projects') ? 'navbar-active' : 'navbar-link'; ?>">Projects</button>
            </a>

            <div class="dropdown navbar-item">
              <button onclick="window.location.href='<?php echo $researchPath; ?>research-talks.php';" class="<?php echo ($currentSubPage === 'research-talks') ? 'navbar-active' : 'navbar-link'; ?>">Talks</button>
              <div class="dropdown-content">
                <a href="<?php echo $researchPath; ?>research-talks.php">Mathematics</a>
                <a href="<?php echo $researchPath; ?>research-talks.php#me">Maths Education</a>
              </div>
            </div>
          </ul>
        </nav>

<?php
if (!isset($rootPath)) {
    include(__DIR__ . '/path-helper.php');
}
include($includesPath . 'header.php');
?>
          <ul class="filter-list-research">
            <a href="<?php echo $teachingPath; ?>teaching.php" class="navbar-item">
                <button class="<?php echo ($currentSubPage === 'teaching') ? 'navbar-active' : 'navbar-link'; ?>">Teaching Activities</button>
            </a>

            <div class="dropdown navbar-item">
              <button onclick="window.location.href='<?php echo $teachingPath; ?>teaching-courses.php';" class="<?php echo ($currentSubPage === 'teaching-courses') ? 'navbar-active' : 'navbar-link'; ?>">Courses</button>
              <div class="dropdown-content">
                <a href="<?php echo $teachingPath; ?>teaching-courses.php#lehruni">UniVie</a>
                <a href="<?php echo $teachingPath; ?>teaching-courses.php#lehruni_aktuell">Recent Courses</a>
                <a href="<?php echo $teachingPath; ?>teaching-courses.php#lehruni_alt">Past Courses</a>
                <a href="<?php echo $teachingPath; ?>teaching-courses.php#lehruni_geplant">Future Courses</a>
                <a href="<?php echo $teachingPath; ?>teaching-courses.php#extern">External</a>
              </div>
            </div>

            <a href="<?php echo $teachingPath; ?>teaching-lecturenotes.php" class="navbar-item">
                <button class="<?php echo ($currentSubPage === 'teaching-lecturenotes') ? 'navbar-active' : 'navbar-link'; ?>">Lecture Notes</button>
            </a>

            <a href="<?php echo $teachingPath; ?>teaching-students.php" class="navbar-item">
                <button class="<?php echo ($currentSubPage === 'teaching-students') ? 'navbar-active' : 'navbar-link'; ?>">Students</button>
            </a>
          </ul>
        </nav>

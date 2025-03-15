<?php
// Definiere die seitenspezifischen Variablen
$pageTitle = "Contact";
$currentPage = "contact";
include('../includes/header.php');
?>

<article>
  <header>
    <h2 class="h2 article-title">Contact</h2>
  </header>

  <section class="timeline">
    <div class="title-wrapper">
      <div class="icon-box">
        <ion-icon name="mail-outline"></ion-icon>
      </div>

      <h3 class="h3"></h3>
    </div>

    <ol class="timeline-list">
      <li class="timeline-item">
        <h4 class="h4 timeline-item-title">Mailing Address</h4>

        <span>Fakultät für Mathematik, Oskar-Morgenstern-Platz 1, 1090 Wien, Austria</span>
      </li>

      <li class="timeline-item">
        <h4 class="h4 timeline-item-title">Office</h4>

        <span>OMP1, Oskar-Morgenstern-Platz 1, Room 10.126</span>
      </li>

      <li class="timeline-item">
        <h4 class="h4 timeline-item-title">Office hours</h4>

        <span>by appointment</span>
      </li>

      <li class="timeline-item">
        <h4 class="h4 timeline-item-title">Phone</h4>

        <span>+43 1 4277-50682</span>
      </li>

      <li class="timeline-item">
        <h4 class="h4 timeline-item-title">Mobile</h4>

        <span>+43 660-8960667</span>
      </li>

      <li class="timeline-item">
        <h4 class="h4 timeline-item-title">E-Mail</h4>

        <span><a href="mailto:roland.steinbauer@univie.ac.at">roland.steinbauer@univie.ac.at</a></span>
      </li>

      <li class="timeline-item">
        <h4 class="h4 timeline-item-title">Website</h4>

        <span>
          <a href="about.php">Personal page</a>,
          <a href="https://ufind.univie.ac.at/de/person.html?id=5458" target="_blank">official university page</a>
        </span>
      </li>
    </ol>
  </section>

  <section class="mapbox">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d664.5865333208873!2d16.367184750223437!3d48.219209170628424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d07ca6f5b0e89%3A0x5f790bb2945495b!2sUniversit%C3%A4t%20Wien%20-%20Fakult%C3%A4t%20f%C3%BCr%20Wirtschaftswissenschaften%20und%20Fakult%C3%A4t%20f%C3%BCr%20Mathematik!5e0!3m2!1sde!2sat!4v1729714422035!5m2!1sde!2sat"
      width="600"
      height="450"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>
</article>

<?php
include('../includes/footer.php');
?>
<?php
$pageTitle = "Vita";
$currentPage = "vita";
include('../includes/header.php');

$pdf_path = "vita.pdf";
?>
        <article>
          <section class="about-text">
            <header>
              <h2 class="h2 article-title">Vita</h2>
            </header>
            
              <!-- PDF Einbettung -->
              <div class="pdf-container" style="width:100%; margin-bottom:20px;">
                <object data="<?php echo $pdf_path; ?>" type="application/pdf" width="100%" height="800px">
                  <p>Your browser can't display PDFs.
                  <a href="<?php echo $pdf_path; ?>">Click here to download the PDF.</a>.</p>
                </object>
              </div>
            
          </section>
        </article>
<?php
include('../includes/footer.php');
?>
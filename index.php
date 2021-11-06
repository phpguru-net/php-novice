<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css" />

    <!-- Bootstrap CSS -->
    <title>PHP Novice</title>
  </head>
  <body>
    <div id="page">
      <header id="header" class="d-flex flex-wrap justify-content-center border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          <span class="fs-4">Simple header <?= session_id(); ?> : <?= strlen(session_id()); ?></span>
        </a>

        <ul class="nav nav-pills">
          <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
      </header>
      <main id="main">
        <section id="content">
          <div class="container">
            <?php for($i=0;$i<20;$i++): ?>        
            <div class="row">
              <div class="col-4">
                <div class="card p-3">
                  <figure class="p-3 mb-0">
                    <blockquote class="blockquote">
                      <p><?= $i+1 ?>.A well-known quote, contained in a blockquote element.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer mb-0 text-muted">
                      Someone famous in <cite title="Source Title">Source Title</cite>
                    </figcaption>
                  </figure>
                </div>          
              </div>
            </div>
            <?php endfor; ?>
          </div>
        </section>
      </main>    
      <footer id="footer" class="footer py-3 bg-light">
        <div class="container">          
          <span class="text-muted"><?php echo date('j/m/Y') ?></span>
        </div>
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    <script src="jquery.min.js"></script>   
    <script type="text/javascript">
      // Shorthand for $( document ).ready()
      $(function() {
          console.log(`Jquery version ${$().jquery}`);
          let scrollContent = $( "#content" );
          scrollContent.scroll(function() {
            const positionY = scrollContent.scrollTop();
            console.error(positionY);
          });          
      });
    </script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thème gr2</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/normalize.css'; ?>" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'; ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
</head>

<body>
  <div id="entete" class="global">
    <header class="entete__header">
      <h1>Thème du groupe #2</h1>
      <h2>4W4 - Conception d'interface et <span>développement Web</span></h2>
      <h3>TIM - Collège de Maisonneuve</h3>
      <button class="entete__button">Événements</button>
    </header>
    <div class="vague">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill" style="fill: var(--couleur-arriere-accueil)"></path>
      </svg>
    </div>
  </div>
  <div id="accueil" class="global">
    <section class="accueil__section">
      <h2>Accueil (h2)</h2>
      <div class="section__cours">


        <!-- if (have_posts()) {
          while (have_posts()) {
            the_post();
            the_title('<p>', '</p>');
            $contenu = get_the_content();
            $contenu = wp_trim_words($contenu, 10);
            echo $contenu;
          }
        }   -->

        <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <div class="carte">
              <h4> <?php the_title(); ?></h4>
              <p> <?php echo wp_trim_words(get_the_content(), 10); ?></p>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

    </section>
  </div>
  <div id="galerie" class="global diagonal">
    <section class="galerie__section">
      <h2>Galerie (h2)</h2>
      <a href="#">Livre 1984</a>
      <blockquote>
        <p>
          “La liberté, c'est la liberté de dire que deux et deux font quatre.
          Lorsque cela est accordé, le reste suit.” “La guerre, c'est la paix,
          la liberté c'est l'esclavage,<span>
            l'ignorance c'est la force.</span>” “Les intellectuels sont portés au totalitarisme bien plus que les
          gens ordinaires.”
        </p>
        <p>par George Orwell</p>
      </blockquote>
    </section>
  </div>
  <div id="evenement" class="global">
    <section class="evenement__section">
      <h2>Événement</h2>
      <a href="#">Aventure</a>
      <blockquote>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum
        delectus est consectetur nobis accusantium nesciunt pariatur labore
        modi tempora perferendis, <span>necessitatibus a,</span> ex ratione
        neque fugit, repellendus id ab! Tenetur?
      </blockquote>
    </section>
    <div class="vague">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill" style="fill: var(--couleur-arriere-footer)"></path>
      </svg>
    </div>
  </div>
  <div id="footer" class="global">
    <footer class="footer__section">
      <form class="recherche" action="">
        <input class="recherche__input" type="search" name="" id="" placeholder="Recherche" />
        <button class="recherche__button">
          <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </form>
      <div class="sociaux">
        <a href="#"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg">
            <title>Google icon</title>
            <path d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z"></path>
          </svg>
        </a>
        <a href="#">
          <svg width="24" height="24" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000">
            <title>YouTube icon</title>
            <path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"></path>
          </svg>
        </a>
        <a href="#">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.818 15.136l5.318-3.272-5.318-3zM12 6.278c3.155 0 5.722 2.567 5.722 5.722S15.155 17.722 12 17.722 6.278 15.155 6.278 12 8.845 6.278 12 6.278m0-.55a6.272 6.272 0 100 12.545c3.465 0 6.273-2.808 6.273-6.273S15.465 5.727 12 5.727zM24 12a12 12 0 01-12 12A12 12 0 010 12 12 12 0 0112 0a12 12 0 0112 12"></path>
          </svg>
        </a>
        <a href="#">
          <svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg">
            <title>GitHub icon</title>
            <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
          </svg>
        </a>
        <a href="#">
          <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000">
            <path fill="none" d="M0 0h24v24H0z"></path>
            <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"></path>
          </svg>
        </a>
        <a href="#">
          <svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg">
            <title>Spotify icon</title>
            <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"></path>
          </svg>
        </a>
      </div>
    </footer>
  </div>
</body>

</html>
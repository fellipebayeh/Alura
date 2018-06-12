<?php get_header(); ?>

<main class="home-main"
    <div class="container">

      <h1>Bem Vindo</h1>

      <ul class="imoveis-listagem">
        <?php
        if( have_posts() ) {
          while( have_posts() ) {
                the_post();
        ?>
        <li class="imoveis-listagem-item">

          <?php the_post_thumbnail(); ?>
          <h2><?php the_title(); ?></h2>
          <div><?php the_content(); ?></div>

        </li>
        <?php
          }
        }
        ?>
      </ul>

    </div>

  </main>

<?php get_footer(); ?>

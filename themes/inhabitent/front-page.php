<?php
/**
 * The template for displaying the Home page
*/
get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header custom-hero">
          <div class ="container">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          </div>
        </header>

        
      </article>
    </main>
  </div>
<?php get_footer(); ?>
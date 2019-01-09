<?php
/**
 * The template for displaying the Home page
*/
get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header home-hero custom-hero">
          <img class="hero-logo" src="wp-content/themes/inhabitent/images/logos/inhabitent-logo-full.svg" alt="Inhabitent logo">
        </header>

        <section class="product-block flex-container">
          <h2>Shop Stuff</h2>
          <?php 

          $product_types = get_terms( array(
            'taxonomy' => 'product-type',
            'hide_empty' => false,
        ) );

        ?>
        </section>
        <section class="journal-block flex-container">
          <h2>Inhabitent Journal</h2>



        </section>
      </article>
    </main>
  </div>
<?php get_footer(); ?>
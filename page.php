<?php get_header(); ?>

  <main>
    <section>
        <?php while (have_posts()) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
          <p><?php the_category(" / "); ?></p>
          <p><?php the_tags( ); ?></p>
        <?php endwhile; ?>
    </section>
  </main>

<?php get_footer(); ?>
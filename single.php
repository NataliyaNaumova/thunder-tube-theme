<?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <!-- <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">page.php</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div> -->

    <?php get_header(); ?>

    <div class="container">
      [single.php]
      <div class="row">
        <div class="col-md-6">
          <!-- <h2>page.php</h2> -->
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <!-- tbs class for headers -->
          <div class="page-header">
            <!-- the_title() is WP function that shows the title of the post -->
            <h1><?php the_title(); ?></h1>
            [more code]
            <p><em>By <?php the_author(); ?>
              on <?php echo the_time('l, F jS, Y'); ?>
              in <?php the_category( ', ' ); ?>
              <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></em>
            </p>
            <hr>
            <?php comments_template(); ?>
[more code]
          </div>
          <!-- WP function that outputs post content -->
          <?php the_content(); ?>

        <?php endwhile; else: ?>
          <!-- we run this else if there is no content -->
         <div class="page-header">
           <h1>Wups!</h1>
         </div>

         <p>Looks like we have no content for this page?</p>

          <?php endif; ?>
        </div>
        <aside class="col-md-6">
          <?php get_sidebar(); ?>
        </aside>

  <?php get_footer(); ?>

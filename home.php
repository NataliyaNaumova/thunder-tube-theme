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
    [home.php]
      <div class="row">
        <div class="col-md-9">
          <div class="page-header">
             <!-- gives us the name of the page itself -->
              <h1><?php wp_title(''); ?></h1>
          </div>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="post">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <!-- date() only shows date for post on that day, time() function better here -->
    <!-- add name in users section of Dashboard to offer better name display -->
    <p><em>By <?php the_author(); ?>
       on <?php echo the_time('l, F jS, Y'); ?>
       in <?php the_category( ', ' ); ?>
       <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></em>
    </p>
    <?php the_excerpt(); ?>
    <hr>
  </article>

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

        <aside class="hidden-sm-down col-md-3">
          <?php get_sidebar('blog'); ?>
        </aside>


      </div><!-- END .row -->

  <?php get_footer(); ?>

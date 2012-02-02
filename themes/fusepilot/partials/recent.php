<section id="recent">
  
  <h3>Recent</h3>
  
  <ul>
    <?php query_posts( array(
     'showposts' => 8,
     'post_type' => array('post', 'project')
    )) ?>

    <?php while (have_posts()) : the_post(); ?>
      <li>
        <article>
          <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
          <p class="details"><span><?php echo get_post_type() ?></span> | <time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('M jS Y') ?></time></p>
        </article>
      </li>
    <?php endwhile;?>
    
    <?php wp_reset_query(); ?>
  </ul>
  
</section>
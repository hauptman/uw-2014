<?php the_date('F j, Y', '<p class="date">', '</p>'); ?>
<h1>
  <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a>
</h1>

<?php
  if ( ! is_home() && ! is_search() && ! is_archive() ) :
    uw_mobile_menu();
  endif;
?>

<?php the_excerpt(); ?>

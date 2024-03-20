<?php get_header(); ?>
<div class="container">
<div class="row">


<?php

while(have_posts()) {
 the_post(); ?>
<div class="col-md-4 col-sm-12">
<div class="card">
<h2><?php the_title(); ?></h2>
<img class="card-img-top" src="<?php the_field('card_image'); ?>" width="300" alt="">
<p class="card-text"><?php the_field('card_text_'); ?></p>
    </div>
    </div>
<?php }
?>

</div>
</div>
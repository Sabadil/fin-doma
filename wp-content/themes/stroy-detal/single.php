<?php
get_header();
?>

	
    <div class="container">
        <h1><?=get_the_title();?></h1>
        <img src="<?=get_the_post_thumbnail_url(get_the_ID(),'Фото 1024px');?>" alt="<?=get_the_title();?>">
        <p><?php the_content(); ?></p>
    </div>


<?php
get_footer();

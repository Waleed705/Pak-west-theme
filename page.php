<?php
get_header();
?>
<div class="pagetitle">
    <h1><?php the_title();?></h1>
</div>
<?php the_post_thumbnail(array(500,500)); ?>



<?php get_footer() ?>
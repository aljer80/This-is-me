<!-- Är för blogginlägg -->

<? get_header(); ?>

<? 
while(have_posts()){
    the_post(); ?>
        <h1>
            <?php the_title();?>
        </h1>

        <? the_post_thumbnail('large'); ?>
        
        <p>
        <? the_content();?>
        </p>
<?
} 
?>

<? get_footer(); ?>
<!-- 
    Samlingssidan för blogginlägg (kallas i wp för inläggssida). 
-->

<? get_header(); ?>
<body>

<?
while(have_posts()){
    the_post(); ?>
    <h1> 
        <?php the_title();?> 
    </h1>

    <? the_post_thumbnail('thumbnail') ?>

    <p> 
        <? the_excerpt();?> 
    </p>
    <br>
<?
}
?>

<? get_footer(); ?>

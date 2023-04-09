<!-- Den huvudsakliga mallen, måste finnas med i temat. "Sista utvägen" -->


<? get_header(); ?>
<body>
    
<section> 
    <? if (have_posts()): ?>
        <div class="articles">
            <? while(have_posts()): the_post(); 
                the_content(); ?>
                <article> <!-- valbara mallfiler/template tags --> </article>
                <? endwhile; ?>
        </div>
    <? else: ?>
        <p>Inga poster hittades</p>
    <? endif; ?>
</section>

<? get_footer(); ?>


<!-- 
else:
_e("Sorry, no posts matched your criteria.", "textdomain"); 
endif; 
-->
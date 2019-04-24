<?php
get_header();
?>

<h1>My first Custom Theme</h1>
<?php
if(have_posts()){
    while(have_posts()){
         the_post();
?>
    <article class="post">
        <h2><a href="<?php the_permalink()?>"><?php the_title() ?></a></h2>
        <p><?php the_content() ?></p>
    </article>
<?php
    }
} else {
    echo 'no content found';
}
get_footer();
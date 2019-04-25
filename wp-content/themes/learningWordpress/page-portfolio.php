<?php
get_header();
?>

<h1>My first Custom Theme</h1>
<?php
if(have_posts()){
    while(have_posts()){
         the_post();
?>
    <div class="column-container clearfix">
        <div class="title-column"><h2><?php the_title()?></h2></div>

        <div class="text-column">
            <?php the_content() ?>
        </div>
    </div>

    <article class="post page">
        <h2><<?php the_title() ?></h2>
    </article>
<?php
    }
} else {
    echo 'no content found';
}
get_footer();


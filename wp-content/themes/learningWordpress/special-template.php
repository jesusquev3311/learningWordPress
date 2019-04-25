<?php
/*
    Template Name: special Layout
*/
get_header();

if(have_posts()){
    while(have_posts()){
         the_post();
?>
    <article class="post page">
        <h2><<?php the_title() ?></h2>
        <div class="info-box">
            <h4>disclaimer title</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed libero rerum, consequuntur dolorum maxime esse eligendi at eos totam, corporis mollitia quas aut doloremque minima aspernatur iure est necessitatibus nobis?</p>
        </div>
        <p><?php the_content() ?></p>
    </article>
<?php
    }
} else {
    echo 'no content found';
}
get_footer();


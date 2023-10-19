</div>
<div class='main'>

    <hr class='divider'>
        <h1 class='titre'>Formation Wordpress: <?php wp_title('') ?></h1>
    <hr class='divider'>

    <?php
    $args = array('post_type' => 'post');

    $query = new WP_Query($args);

    if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>
        <div class='main-item'>
            <div><?php the_shortlink( the_title('','',false)); ?></div>
        </div>
        
    <?php endwhile;
    endif; ?>
</div>
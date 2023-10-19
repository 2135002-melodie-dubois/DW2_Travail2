<div class='header'>
    <div class='logo_icons'>
        <div class='page-logo'>
            <img src="https://apical.xyz/medias/fr/LogoApical-blanc.svg">
        </div> 
        <div class='icons'>
        <a href="<?php get_home_url( )?>" class='home icon'>
            <img src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil" title="Accueil">
        </a>   
        <a href="#" class='search icon'>
            <img src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Search" title="Search">
        </a> 
        <a href="#" class='login icon'>
                <img src="https://apical.xyz/medias/commun/LoginFait-MenuSecondaire.svg" alt="Login" title="Login">
            </a>
        </div> 
    </div>
    <ul class='page-list'>
        <?php
            $args = array('post_type' => 'page');

            $query = new WP_Query($args);

            if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ;
            $title = the_title('','',false);?>
                <li class='page-item'>
                    <?php the_shortlink($title); ?>
                </li>
            
        <?php endwhile;
        endif; ?>
    </ul>
</div>
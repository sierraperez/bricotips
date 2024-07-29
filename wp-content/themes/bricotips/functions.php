<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    // Chargement du /css/widgets/image-titre-widget.css pour notre widget image titre
    wp_enqueue_style('image-titre-widget', get_stylesheet_directory_uri() . '/css/widgets/image-titre-widget.css', array(), filemtime(get_stylesheet_directory() . '/css/widgets/image-titre-widget.css'));
     // Chargement du /css/widgets/bloc-lien-image-widget.css pour notre widget bloc lien image
     wp_enqueue_style('bloc-lien-image-widget', get_stylesheet_directory_uri() . '/css/widgets/bloc-lien-image-widget.css', array(), filemtime(get_stylesheet_directory() . '/css/widgets/bloc-lien-image-widget.css'));
   // Chargement du /css/shortcodes/banniere-titre.css pour notre shortcode banniere titre
   wp_enqueue_style('banniere-titre-shortcode', get_stylesheet_directory_uri() . '/css/shortcodes/banniere-titre.css', array(), filemtime(get_stylesheet_directory() . '/css/shortcodes/banniere-titre.css'));
}

//Creation du theme enfant 

/* CHARGEMENT DES WIDGETS */


// On créer une class Widget Image_Titre_Widget dans un fichier à part pour pas surcharger le functions.php
require_once(__DIR__ . '/widgets/ImageTitreWidget.php');
require_once(__DIR__ . '/widgets/BlocLienImageWidget.php');

function register_widgets()
{
    //On enregistre le widget avec la class Image_Titre_Widget
    register_widget('Image_Titre_Widget');
    register_widget('Bloc_Lien_Image_Widget');
}
//On demander à wordpress de charger des widget selon la fonction register_widgets()
add_action('widgets_init', 'register_widgets');



/* SHORTCODE */


// Je dis à wordpress que j'ajoute un shortcode 'banniere-titre'
add_shortcode('banniere-titre', 'banniere_titre_func');
// Je génère le html retourné par mon shortcode
function banniere_titre_func($atts)
{
    //Je récupère les attributs mis sur le shortcode
    $atts = shortcode_atts(array(
        'src' => '',
        'titre' => 'Titre'
    ), $atts, 'banniere-titre');

    //Je commence à récupéré le flux d'information
    ob_start();

    if ($atts['src'] != "") {
        ?>

        <div class="banniere-titre" style="background-image: url(<?= $atts['src'] ?>)">
            <h2 class="titre"><?= $atts['titre'] ?></h2>
        </div>

        <?php
    }

    //J'arrête de récupérer le flux d'information et le stock dans la fonction $output
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}

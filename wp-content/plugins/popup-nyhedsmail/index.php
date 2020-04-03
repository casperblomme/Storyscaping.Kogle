<?php
/*
* Plugin Name: WordPress Kogle nyhedsmail
* Plugin URI: http://nicolaipalmkvist.com/
* Description: Et popup plugin til KOGLE som skal f folk til at tilmelde sig deres nyhedsmail
* Version: 0.6.2
* Author: Thomas Gimm, Nicolai Palmkvist, Casper Blomme, Kasper Hansen
* Author: http://nicolaipalmkvist.com/
* License: GPL2
*/

function newsletter_form()
{

    $content = '';
    $content .= '<div class="slide-in-bottom">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<div class="login-face">';
    $content .= '<img src=" '.plugins_url("popup-nyhedsmail/img/billede_af_kolge_logo.png").' " ';
    $content .= 'alt="login-face"></div>';
    $content .= '<div class="animation">';
    $content .= '<img src=" '.plugins_url("popup-nyhedsmail/img/flueben.gif").' " ';
    $content .= 'alt="animation"></div>';
    $content .= '<div id="promotion-header">';
    $content .= '<h1 id="promotion-header-title">KOGLE<span> NYHEDSMAIL</span></h1></div>';
    $content .= '<section class="form">';
    $content .= '<form action="#">';
    $content .= '<div id="promotion-body">';
    $content .= '<p id="promotion-body-text">Skriv dig op til vores nyhedsmail, og vi vil holde dig up to date på, alt det der sker indenfor Kolges univers </p>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="text" id="username" placeholder="Peter Hansen" name="username" required><i class="fa fa-user fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="email" id="email" placeholder="Peterhansen@hotmail.com" name="email" required><i class="fa fa-envelope fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div id="submitForm">';
    $content .= '<input type="submit" id="submitBtn" name="submitBtn" value="Hold mig opdateret!">';
    $content .= '</div>';
    $content .= '<div id="promotion-footer">';
    $content .= '<p id="promotion-footer-text">Jeg ønsker at modtage nyhedsmail fra Kogle, som kan indeholde konkurrencer, nyheder, events samt andet form for markedsføring. Du kan framelde dig vores nyhedbrev hvornår det skal være, hvis dette ønskes</p>';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    
    return $content;
    
}
    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('vis_popup','newsletter_form');

    # Take action - activate it
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:300,400,800&display=swap');
        
        wp_enqueue_style('CustomFontRoboto','https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('popup-nyhedsmail/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('popup-nyhedsmail/js/script.js'), array('jquery'), null, true);
    }







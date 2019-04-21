<?php


function display_logo (){
    if ( get_field( 'display_logo', 'option' ) == 1 and get_field( 'ch_logo_type', 'option' ) == "text" ) {
        the_field( 'logo_text', 'option' );
    }
    if ( get_field( 'display_logo', 'option' ) == 1 and get_field( 'ch_logo_type', 'option' ) == "image" ) {
        echo '<img src="' , the_field( 'logo_image', 'option' ) , '" width = 30' , '>';
    }
}

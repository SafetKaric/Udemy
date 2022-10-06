<?php
function u_enqueue() {
    wp_register_style(
        "u_font_rubic_and_pacifico",
        "https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap",
        [],
        null
    );
    wp_register_style(
        "u_bootstrap_icons",
        get_template_directory_uri() ."/assets/bootstrap-icons/bootstrap-icons.css"
    );
    wp_register_style(
        "u_theme",
        get_template_directory_uri() . "/assets/public/index.css"
    );

    wp_enqueue_style("u_font_rubic_and_pacifico");
    wp_enqueue_style("u_bootstrap_icons");
    wp_enqueue_style("u_theme");
}

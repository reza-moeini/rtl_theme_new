<?php

    get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post(); // این خط برای راه‌اندازی حلقه ضروری است

        // عنوان پست
        echo '<h3>' . get_the_title() . '</h3>'; 

        // تصویر شاخص
        if (has_post_thumbnail()) {
            the_post_thumbnail('medium');
        } else { ?>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpy8L8fDXKjG8hkZIz4gtVRBXMOmdzv0pPdepXG3O65lD4LHEqWvM0QF8Aplkt8foyeos&usqp=CAU" alt="">
        <?php    
        }

        // محتوای پست
        the_content();
    }
}

    get_footer();
?>

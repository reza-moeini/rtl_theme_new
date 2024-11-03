
<h3>مقالات تستی</h3>
<?php
  $args = array(
    // 'post_type' => 'films',
    // 'tax_query' => array(
    //     'relation' => 'or',
    //     array(
    //         'taxonomy' => 'genre',
    //         'field' => 'slug',
    //         'terms' => 'comedy',
    //     ),
    //     array(             
    //         'taxonomy' => 'actor',
    //         'field' => 'slug',
    //         'terms' => 'actor-1',
    //     ),
    // ),
    'post_type' => 'POST',
    'orderby'=> 'rand',
    'post_per_page'=> '2'
);
$last_post = cache::get_cache('rtl_posts');
    if($last_post === false){
        $last_post = new WP_Query($args);
        cache::set_cache( 'rtl_posts', $last_post, HOUR_IN_SECONDS);
    }


    if ( $last_post->have_posts()) : 
        while ( $last_post->have_posts()) :  $last_post->the_post();
            ?>
            <div class="out_wrap">
                <div class="wrap">
                    <div class="container">
                        <?php 
                           if (has_post_thumbnail()) {
                               the_post_thumbnail('medium');
                           } else { ?>
                               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpy8L8fDXKjG8hkZIz4gtVRBXMOmdzv0pPdepXG3O65lD4LHEqWvM0QF8Aplkt8foyeos&usqp=CAU" alt="">
                           <?php    
                           }
                        ?>
                    </div>
                    <div class="title">
                    <span> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                        <p>
                            <?php 
                                $excerpt = get_the_excerpt();
                                $substr = substr($excerpt, 0, 160);
                                echo $substr;
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
            the_posts_pagination();
    endif;
?>
<style>  
/* استایل outer-wrapper برای تنظیم مرکزیت */
.outer-wrapper {
display: flex;
justify-content: center; /* تراز افقی */
align-items: center; /* تراز عمودی */
min-height: 100vh; /* حداقل ارتفاع صفحه */
}

.wrap {
text-align: center;
display: flex;
flex-direction: column;
justify-content: center; /* تراز عمودی در داخل wrap */
align-items: center; /* تراز افقی در داخل wrap */
background-color: white;
padding: 20px;
border-radius: 10px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.container {
border: 1px solid black;
border-bottom: 0px;
border-radius: 10px;
padding: 10px;
align-items: center;
justify-content: center;
}

.title {
font-size: 15px;
font-family: Arial, Helvetica, sans-serif;
border: 1px solid black;
border-radius: 10px;
padding: 10px;
margin-top: 10px;
width: 350px;
}

p {
margin-top: 10px;
}
</style>

<h3>لیست مقالات</h3>
<?php  
if(have_posts()) : 
while (have_posts()) : the_post();
?>
<div class="out_wrap">
<div class="wrap">

<div class="container">
<?php 
   if(has_post_thumbnail()){
       the_post_thumbnail('medium');
   }else{ ?>
       <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpy8L8fDXKjG8hkZIz4gtVRBXMOmdzv0pPdepXG3O65lD4LHEqWvM0QF8Aplkt8foyeos&usqp=CAU" alt="">
   <?php    
   }
?>
</div>
<div class="title">
<span><?php the_title(); ?></span>
<p>
    <?php 
        $substr = substr(0,160);
    the_excerpt($substr); ?>
</p>
</div>
</div>
</div>



<?php


endwhile;
endif;


?>


<style>  
/* استایل outer-wrapper برای تنظیم مرکزیت */
.outer-wrapper {
display: flex;
justify-content: center; /* تراز افقی */
align-items: center; /* تراز عمودی */
min-height: 100vh; /* حداقل ارتفاع صفحه */
}

.wrap {
text-align: center;
display: flex;
flex-direction: column;
justify-content: center; /* تراز عمودی در داخل wrap */
align-items: center; /* تراز افقی در داخل wrap */
background-color: white;
padding: 20px;
border-radius: 10px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.container {
border: 1px solid black;
border-bottom: 0px;
border-radius: 10px;
padding: 10px;
align-items: center;
justify-content: center;
}

.title {
font-size: 15px;
font-family: Arial, Helvetica, sans-serif;
border: 1px solid black;
border-radius: 10px;
padding: 10px;
margin-top: 10px;
width: 350px;
}

p {
margin-top: 10px;
}
</style>



<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کروسل مقالات</title>
    <style>
        .carousel-container {
            width: 100%;
            max-width: 600px;
            position: relative;
            overflow: hidden;
            margin: auto;
        }

        .carousel-slide {
            display: flex;
            transition: transform 0.5s ease;
            width: 100%;
        }

        .carousel-item {
            min-width: 100%;
            padding: 20px;
            box-sizing: border-box;
            background: #f4f4f9;
            border-radius: 10px;
            text-align: right;
        }

        .carousel-item h3 {
            margin: 0;
            font-size: 20px;
        }

        .carousel-item p {
            font-size: 16px;
            color: #666;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 24px;
            border-radius: 3px;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
        }

        .next {
            right: 0;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .dots {
            text-align: center;
            padding: 10px;
            background: #ddd;
        }

        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }
    </style>
</head>
<body>

<div class="carousel-container">
    <div class="carousel-slide" id="carouselSlide">
        <?php
        // Query to get the latest 5 posts
        $args = array(
            'post_type' => 'films',
            'posts_per_page' => 5,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
            <div class="carousel-item">
                <h3><?php the_title(); ?></h3>
                <?php the_post_thumbnail( 'medium'); ?>
                <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                <a href="<?php the_permalink(); ?>">مطالعه بیشتر</a>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>

    <!-- Navigation buttons -->
    <a class="prev" onclick="moveSlide(-1)">&#10094;</a>
    <a class="next" onclick="moveSlide(1)">&#10095;</a>
</div>

<div class="dots">
    <?php for ($i = 0; $i < $query->post_count; $i++): ?>
        <span class="dot" onclick="currentSlide(<?php echo $i; ?>)"></span>
    <?php endfor; ?>
</div>

<script>
    let slideIndex = 0;
    let slideCount = <?php echo $query->post_count; ?>;
    let dots = document.querySelectorAll(".dot");

    function showSlide(index) {
        if (index >= slideCount) slideIndex = 0;
        if (index < 0) slideIndex = slideCount - 1;

        document.getElementById("carouselSlide").style.transform = `translateX(-${slideIndex * 100}%)`;
        
        dots.forEach(dot => dot.classList.remove("active"));
        dots[slideIndex].classList.add("active");
    }

    function moveSlide(step) {
        slideIndex += step;
        showSlide(slideIndex);
    }

    function currentSlide(index) {
        slideIndex = index;
        showSlide(slideIndex);
    }

    setInterval(() => moveSlide(1), 5000); // Auto-move every 5 seconds
</script>

</body>
</html>





<h3> GET_POSTS لیست مقالات</h3>
<?php  
    $argss = [
         'post_type'   => 'films',
         'posts_per_page' => 1,
    ];
        $my_post = get_posts( $argss);
        if($my_post){
            foreach ( $my_post as $post ) : setup_postdata( $post );
      

?>
<div class="out_wrap">
<div class="wrap">

<div class="container">
<?php 
   if(has_post_thumbnail()){
       the_post_thumbnail('medium');
   }else{ ?>
       <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpy8L8fDXKjG8hkZIz4gtVRBXMOmdzv0pPdepXG3O65lD4LHEqWvM0QF8Aplkt8foyeos&usqp=CAU" alt="">
   <?php    
   }
?>
</div>
<div class="title">
<span><?php the_title(); ?></span>
<p>
    <?php 
        $substr = substr(0,160);
    the_excerpt($substr); ?>
</p>
</div>
</div>
</div>



<?php

    endforeach;
    }

?>


<style>  
/* استایل outer-wrapper برای تنظیم مرکزیت */
.outer-wrapper {
display: flex;
justify-content: center; /* تراز افقی */
align-items: center; /* تراز عمودی */
min-height: 100vh; /* حداقل ارتفاع صفحه */
}

.wrap {
text-align: center;
display: flex;
flex-direction: column;
justify-content: center; /* تراز عمودی در داخل wrap */
align-items: center; /* تراز افقی در داخل wrap */
background-color: white;
padding: 20px;
border-radius: 10px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.container {
border: 1px solid black;
border-bottom: 0px;
border-radius: 10px;
padding: 10px;
align-items: center;
justify-content: center;
}

.title {
font-size: 15px;
font-family: Arial, Helvetica, sans-serif;
border: 1px solid black;
border-radius: 10px;
padding: 10px;
margin-top: 10px;
width: 350px;
}

p {
margin-top: 10px;
}
</style>

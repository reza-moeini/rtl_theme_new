
   <h2> لیست نوشته های فیلتر شده </h2>
       <?php
       $argc = [''];
            $the_query = new WP_Query($argc);
if($the_query->have_posts()) {
    while($the_query->have_posts()) : $the_query->the_post(); 
    $excerpt = get_the_excerpt();
          $substr =  substr($excerpt , 0 , 180) . '....';
    ?>
         <div class="container">
        <div>
       <?php  if(has_post_thumbnail()){
                the_post_thumbnail('thumbnail' , [
                    'alt'=> get_the_title()
                ]); 
            }else{?>
                <img src="https://media.rtlcdn.com/2024/09/3773d947aacf90e27b51295872e1a8d90f39fb95438b59-337x171.jpg" alt="">
                <?php   
            }?>
        </div>
            <div>
                <span><?php the_title(); ?></span>
            </div>
                <div><?php echo $substr ?></div>
        </div>

    <?php

           
            
    endwhile;
}



            ?>
        <h2>لیست نوشته ها </h2>
            <?php
    if(have_posts()) {
        while(have_posts()) : the_post(); 
        $excerpt = get_the_excerpt();
              $substr =  substr($excerpt , 0 , 180) . '....';
        ?>
                <div class="wrap">

             <div class="container">
            <div>
           <?php  if(has_post_thumbnail()){
                    the_post_thumbnail('thumbnail' , [
                        'alt'=> get_the_title()
                    ]); 
                }else{?>
                    <img src="https://media.rtlcdn.com/2024/09/3773d947aacf90e27b51295872e1a8d90f39fb95438b59-337x171.jpg" alt="">
                    <?php   
                }?>
            </div>
                <div>
                    <span><?php the_title(); ?></span>
                </div>
                    <div><?php echo $substr ?></div>
            </div>
            </div>
        <?php

               
                
        endwhile;
    }
?>


<style>
.container {
            width: 200px;
            border: 1px solid black;
            padding: 5px;
            display: flex;
            flex-direction: column;
            align-items: flex-end; /* تراز کردن عناصر به سمت راست */
            justify-content: center;
            border-radius: 10px;
        }  
.wrap{
    display: flex;
    flex-direction: row;
}        

</style>


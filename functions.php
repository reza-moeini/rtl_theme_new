<?php 

include 'sanitize.php';
global $wpdb;


    $tickets_table = $wpdb->prefix . 'ah_tickets';
    // var_dump($tickets_table);
    //  $tickets =  $wpdb->get_row("SELECT * FROM {$tickets_table} where id = 2"); 
    //  var_dump($tickets->title);

// // foreach($users as $key => $user){ 
    
// //     echo $user['user_email']; 
// // }


// $tickets_table = $wpdb->prefix . 'ah_tickets';
//  $cunt = $tickets =  $wpdb->get_var("SELECT AVG(view) FROM {$tickets_table}"); 
//  var_dump($cunt);
// $id = 6;
// $name = 'ehsan';
// $title = 'تیکت چهارم';
// $body = 'متن تیکت چهارم';
// $view = '40';
// $data = ['name'=>$name , 'title'=> $title , 'body'=>$body , 'view'=>$view];
// $format = ['%s' , '%s' , '%s' , '%d'];
// // $wpdb -> query ($wpdb-> prepare ("INSERT INTO {$tickets_table} (name , title , body , view) VALUES (%s , %s , %s , %d)", $name , $title , $body , $view));

// $wpdb->insert($tickets_table , $data , $format);

// $wpdb->query($wpdb->prepare("update {$tickets_table} set name = %s , title = %s , body = %s , view = %d where id= %d" , $name , $title , $body , $view , $id));


// $id = 5;
// $where = ['id'=>$id];
// $where_format = ["%d"];

// //   $wpdb -> query ($wpdb -> prepare ("delete FROM $tickets_table where id =%d" , $id ));

//     $wpdb -> delete($tickets_table , $where , $where_format );
// $name = 'hassan';
// $title = 'تیکت پنجم';
// $body = 'متن تیکت پنجم';
// $view = '59';
// $id = 9;
// $where = ['id'=>$id];
// $where_format = ['%d'];
// $data = ['name'=> $name , 'title'=>$title , 'body'=> $body , 'view'=>$view];
// $format= ['%s' , '%s' , '%s' , '%d'];
//  $wpdb -> INSERT ($tickets_table , $data , $format);
// var_dump($form);

// $wpdb -> delete ($tickets_table , $where , $where_format);
// $name = 'Reza';
// $fname = 'Moeini';
// $value = ['name' => 'Reza' , 'fname' => 'Moeini'];
// var_dump($value);


// $name = '<p>reza@gmail.com</p>';
//     var_dump(sanitize_email(sanitize_text_field($name)));
// $name = 'shayan';
// $title = 'تیکت های پنجم';
// $body = 'متن تیکت های پنجم';
// $view = '129';
// $id = 12;
// $data = ['name' => $name , 'title'=> $title , 'body'=> $body , 'view'=> $view];
// $format = ['%s' , '%s' , '%s' , '%d'];
// $where = ['id'=>$id];
// $where_format['%s'];
// $wpdb -> delete ($tickets_table , $where , $where_format);
add_theme_support('post-thumbnails');


    function custom_taxo(){
$labels = array(
    'name'                  => ('ژانر'),
    'singular_name'         => ('ژانر'),
    'menu_name'             => ('ژانرها'),
    'name_admin_bar'        => ('ژانر'),
    'add_new'               => __( 'Add New', 'textdomain' ),
    'add_new_item'          => __( 'اضافه کردن ژانر جدید', 'textdomain' ),
    'new_item'              => __( 'New Book', 'textdomain' ),
    'edit_item'             => __( 'Edit Book', 'textdomain' ),
    'view_item'             => __( 'View Book', 'textdomain' ),
    'all_items'             => __( 'All Books', 'textdomain' ),
    'search_items'          => __( 'Search Books', 'textdomain' ),
    'parent_item_colon'     => __( 'Parent Books:', 'textdomain' ),
    'not_found'             => __( 'No books found.', 'textdomain' ),
    'not_found_in_trash'    => __( 'No books found in Trash.', 'textdomain' ),
    'featured_image'        => _x( 'Book Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
    'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
    'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
    'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
    'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
    'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
    'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
    'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
    'items_list_navigation' => _x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
    'items_list'            => _x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
);

$args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'film' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
);

        register_taxonomy( 'genre', 'films', $args );

        $labels = array(
            'name'                  => ('بازیگر'),
            'singular_name'         => ('بازیگر'),
            'menu_name'             => ('بازیگرها'),
            'name_admin_bar'        => ('ژانر'),
            'add_new'               => __( 'Add New', 'textdomain' ),
            'add_new_item'          => __( 'اضافه کردن ژانر جدید', 'textdomain' ),
            'new_item'              => __( 'New Book', 'textdomain' ),
            'edit_item'             => __( 'Edit Book', 'textdomain' ),
            'view_item'             => __( 'View Book', 'textdomain' ),
            'all_items'             => __( 'All Books', 'textdomain' ),
            'search_items'          => __( 'Search Books', 'textdomain' ),
            'parent_item_colon'     => __( 'Parent Books:', 'textdomain' ),
            'not_found'             => __( 'No books found.', 'textdomain' ),
            'not_found_in_trash'    => __( 'No books found in Trash.', 'textdomain' ),
            'featured_image'        => _x( 'Book Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
            'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
            'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
            'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
            'items_list_navigation' => _x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
            'items_list'            => _x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
        );
        
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'actor' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => true,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        );
        
                register_taxonomy( 'actor', 'films', $args );

                unset($args);
}

    add_action('init','custom_taxo');




    include 'class/cache.php';

    cache::set_cache('rtl_' , [1,2,3,4,5,6] , HOUR_IN_SECONDS);
   $cache = cache::get_cache('rtl_');
            cache::delete_cache('rtl_');

    function ticket(){
        global $wpdb;
        $table = $wpdb->prefix . 'tickets';
        $query = $wpdb->get_results("SELECT * from $table");
        return $query; 
    }

$get_cache = cache::get_cache('rtl_tickets');
    if($get_cache ===false){
        $get_cache = ticket();
        cache::set_cache('rtl_tickets' , $get_cache  , HOUR_IN_SECONDS);
    }


?>
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
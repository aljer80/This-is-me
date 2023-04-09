<!-- Denna fil används till allsköns funktionalitet knuten till temat. 
http://www.wpbeginner.com/wp-tutorials/ --> 

<? 
add_theme_support("menus");
add_theme_support('post-thumbnails');

add_action("after_setup_theme", "registrera_meny");

function registrera_meny(){
    register_nav_menu("huvudmeny", "Huvud meny");
    //register_nav_menu("socialmeny", "Social meny"); 
}


<!-- add_action("wp_head", "my_function"); -->
function my_function() {
    echo "Detta skrivs ut i headern med hjälp av add_action + wp_head";
}
?>


<!-- köa in --> 
<? add_action('wp_enque_scripts', 'mina_script'); ?>

<?
function mina_script() {
    wp_register_style('temastil', get_template_directory_uri().'/style.css');
    wp_register_style('main', $uri.'/css/main.css'); 
    //wp_register_script('jquery', get_template_directory_uri().'/scripts.js'); 
}
?>

<?
function add_theme_scripts() {
    wp_enqueue_style('temastil');
    wp_enqueue_style('main', get_template_directory_uri().'css/main.css');
    wp_enqueue_script('script', get_template_part_uri().'/front/js/script.js');
}
?>



<!--
$uri= get_theme_file_uri(); 
    wp_register_style('main', $uri.'/css/main.css'); 
-->
<!-- Theme support --> 
<? 
add_theme_support("menus");
add_theme_support('post-thumbnails');
?>

<?
add_action("after_setup_theme", "registrera_meny");
?>

<!-- Nav menu --> 
<?
function registrera_meny(){
    register_nav_menu("huvudmeny", "Huvud meny");
    //register_nav_menu("socialmeny", "Social meny"); 
}
?>

<!-- Enqueue scripts --> 
<? add_action('wp_enque_scripts', 'my_scripts'); ?>

<?
function my_scripts() {
    wp_register_style('temastil', get_template_directory_uri().'/style.css');
    wp_register_style('main', get_template_directory_uri().'/css/main.css'); 
}
?>

<?
function add_theme_scripts() {
    wp_enqueue_style('temastil');
    wp_enqueue_style('main', get_template_directory_uri().'css/main.css');
    wp_enqueue_script('script', get_template_part_uri().'/front/js/script.js');
}
?>


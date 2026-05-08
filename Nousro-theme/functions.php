<?php
function set_new_cookie() {
    $postID = url_to_postid($_SERVER['REQUEST_URI'], '_wpg_def_keyword', true); 
    setcookie("TestCookie11", $postID, time() + 3600);  /* expire in 1 hour */
    // echo $val; // Убедитесь, что переменная $val определена, прежде чем использовать ее
}

add_action( 'init', 'set_new_cookie');

function setCookies() {
    global $wp_query;
    if ($wp_query->have_posts()) {
       $post_id = $wp_query->current_post;
       setcookie('post_id', $post_id);
    }
    $wp_query->rewind_posts();
    return;
}
add_action( 'wp', 'setCookies', 10); 

// My SetUp
// ========================================
function true_apply_categories_for_pages(){
	add_meta_box( 'categorydiv', 'Категории', 'post_categories_meta_box', 'page', 'side', 'normal'); // добавляем метабокс категорий для страниц
	register_taxonomy_for_object_type('category', 'page'); // регистрируем рубрики для страниц
}
// обязательно вешаем на admin_init
add_action('admin_init','true_apply_categories_for_pages');
 
function true_expanded_request_category($q) {
	if (isset($q['category_name'])) // если в запросе присутствует параметр рубрики
		$q['post_type'] = array('post', 'page'); // то, помимо записей, выводим также и страницы
	return $q;
}
add_filter('request', 'true_expanded_request_category');
/**
 * Include CSS files
 */
function theme_enqueue_scripts() {
	// wp_enqueue_style( 'UIkit', get_template_directory_uri() . '/css/uikit.min.css' );
	wp_enqueue_style( 'Style', get_template_directory_uri() . '/styles.css' );
	wp_enqueue_style( 'Materials', get_template_directory_uri() . '/css/materialize.css' );
	// wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/js/index.js', array(), '1.0.0', true );
	// wp_enqueue_script( 'UIicons', get_template_directory_uri() . '/js/uikit-icons.min.js', array(), '1.0.0', true );
	wp_enqueue_script("jquery");
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


add_shortcode( 'top-card', 'topCard_func' );

function topCard_func() {
	ob_start();
	include(locate_template( 'components/top-card.php', FALSE, TRUE ));
	return ob_get_clean();
	// return locate_template( 'components/top-card.php', TRUE, TRUE );
}

add_shortcode( 'advantages-card', 'advantages_func' );

function advantages_func() {
	ob_start();
	include(locate_template( 'components/advantages-card.php', FALSE, FALSE ));
	return ob_get_clean();
	// return locate_template( 'components/advantages-card.php', TRUE, FALSE );;
}

add_shortcode( 'callback-card', 'callback_func' );

function callback_func() {
	ob_start();
	include(locate_template( 'components/callback.php', FALSE, FALSE ));
	return ob_get_clean();
	// return locate_template( 'components/callback.php', TRUE, FALSE );;
}



/**
 * Setup Theme
 */
function mdbtheme_setup() {
    // Add featured image support
	add_theme_support('post-thumbnails');
	add_theme_support( 'menus' );
	register_sidebar( array(
		'name'          => 'Left Sidebar',
		'id'            => 'custom-header-widget',
		'before_widget' => '<div class="chw-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="chw-title">',
		'after_title'   => '</h2>',
	) );
}
add_action('after_setup_theme', 'mdbtheme_setup');

/**
 * Check if post is in a menu
 *
 * @param $menu menu name, id, or slug
 * @param $object_id int post object id of page
 * @return bool true if object is in menu
 */
function cms_is_in_menu( $menu = null, $object_id = null ) {

    // get menu object
    $menu_object = wp_get_nav_menu_items( esc_attr( $menu ) );

    // stop if there isn't a menu
    if( ! $menu_object )
        return false;

    // get the object_id field out of the menu object
    $menu_items = wp_list_pluck( $menu_object, 'object_id' );

    // use the current post if object_id is not specified
    if( !$object_id ) {
        global $post;
        $object_id = get_queried_object_id();
    }

    // test if the specified page is in the menu or not. return true or false.
    return in_array( (int) $object_id, $menu_items );

}

// function remove_gutenberg_styles() {
// 	wp_dequeue_style( 'wp-block-library' );
// }

add_action( 'wp_enqueue_scripts', 'remove_gutenberg_styles', 100 );

function remove_gutenberg_styles() {
	wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_enqueue_scripts', 'remove_gutenberg_styles', 105 );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Основные настройки',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки шапки',
		'menu_title'	=> 'Шапка',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки подвала',
		'menu_title'	=> 'Подвал',
		'parent_slug'	=> 'theme-general-settings',
	));
		acf_add_options_sub_page(array(
		'page_title' 	=> 'XMLcreator',
		'menu_title'	=> 'XMLcreator',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );

function wps_deregister_styles() {
    wp_deregister_style( 'contact-form-7' );
}

#Делаем так, чтобы в worpdress уже загруженные изображения не линковались на само изображение
add_filter( 'the_content', 'del_image_link' );
function del_image_link( $content ) {
 $content =
 preg_replace(array('{<a[^>]*><img}','{/></a>}'), array('<img','/>'), $content);
 return $content;
}
## делает IMG тег анкором ссылки на картинку указанную в этом теге, чтобы её можно было увеличить и посмотреть.
add_filter( 'the_content', function( $content ){
	//$content .= 'qq';
	// пропускаем если в тексте нет картинок вообще...
	if( false === strpos( $content, '<img ') )
	  return $content;
  
	// if( ! is_main_query() || ! in_array( $GLOBALS['post']->post_type, ['post'] ) )
	//   return $content;
	$oo = null;
	$img_ex = '<img[^>]*src *= *["\']([^\'"]+)["\'][^>]*>';
	$content = preg_replace_callback( "~(?:<a[^>]+>\s*)$img_ex|($img_ex)~", function($mm){
	  // пропускаем, если картинка уже со ссылкой
	  if( empty($mm[2]) )
		return $mm[0];
		
			$align = '';
		if (strpos($mm[2], 'alignright') !== false) {
			$align = 'alignright';
		}elseif(strpos($mm[2], 'alignleft') !== false){
			$align = 'alignleft';
		}elseif(strpos($mm[2], 'aligncenter') !== false){
			$align = 'aligncenter';
		}
		$mm[2] = str_replace('<img class="', '<img class="materialboxed ', $mm[2]);
	  return '<span class="'.$align.'">'. $mm[2] .'</span>';
	  //'<div>' . $mm[0] . '<br>' . $mm[1] . '<br>' . $mm[2] . '<br>' . $mm[3] . '</div>';
	}, $content );
	// print_r($oo);
	
	return $content;
  }, 65 );

	// //   AJAX LoadPost
	// function true_load_posts(){
	
	// 	$args = unserialize( stripslashes( $_POST['query'] ) );
	// 	$args['paged'] = $_POST['page'] + 1; // следующая страница
	// 	$args['post_status'] = 'publish';
	
	// 	// обычно лучше использовать WP_Query, но не здесь
	// 	query_posts( $args );
	// 	// если посты есть
	// 	if( have_posts() ) :
	
	// 		// запускаем цикл
	// 		while( have_posts() ): the_post();
	
	// 			get_template_part( 'template-parts/post/content', get_post_format() );
	
	// 		endwhile;
	
	// 	endif;
	// 	die();
	// }
	
	
	// add_action('wp_ajax_loadmore', 'true_load_posts');
	// add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

// Колонка миниатюры в списке записей админки
add_filter('manage_pages_columns', 'pages_columns', 5);
add_action('manage_pages_custom_column', 'pages_custom_columns', 5, 2);
 
function pages_columns($defaults){
    $defaults['riv_post_thumbs'] = __('Миниатюра');
    return $defaults;
}
 
function pages_custom_columns($column_name, $id){
 if($column_name === 'riv_post_thumbs'){
        the_post_thumbnail( array(50, 50) );
    }
}

add_action( 'init', function(){

	if ( ! current_user_can( 'manage_options' ) ) {
		show_admin_bar( false );
	}

} );
// Колонка рейтинга //
// Добавление новой колонки "Rating" для типа записей "post"
function add_custom_rating_column($columns) {
    $columns['rating'] = __('Rating');
    return $columns;
}
add_filter('manage_post_posts_columns', 'add_custom_rating_column');

// Заполнение колонки "Rating" данными
function custom_rating_column_content($column_name, $post_id) {
    if ($column_name == 'rating') {
        // Получаем рейтинг поста из мета-поля
        $rating = get_post_meta($post_id, '_post_rating', true);
        echo esc_attr($rating);
    }
}
add_action('manage_post_posts_custom_column', 'custom_rating_column_content', 10, 2);

// Добавление мета-поля для рейтинга в форму редактирования поста
function add_rating_meta_box() {
    add_meta_box(
        'post_rating', // ID мета-бокса
        'Post Rating', // Название мета-бокса
        'display_rating_meta_box', // Функция для отображения мета-бокса
        'post', // Тип записи, к которому применяется мета-бокс
        'side', // Расположение мета-бокса
        'high' // Приоритет мета-бокса
    );
}
add_action('add_meta_boxes', 'add_rating_meta_box');

// Отображение поля рейтинга в мета-боксе
function display_rating_meta_box($post) {
    // Получаем текущее значение рейтинга из мета-поля
    $rating = get_post_meta($post->ID, '_post_rating', true);
    ?>
    <label for="post_rating"><?php _e('Rating'); ?></label>
    <input type="number" name="post_rating" value="<?php echo esc_attr($rating); ?>" min="0" step="1">
    <?php
}

// Сохранение значения рейтинга при сохранении поста
function save_post_rating($post_id) {
    // Проверяем, существует ли значение мета-поля и сохраняем его
    if (isset($_POST['post_rating'])) {
        update_post_meta($post_id, '_post_rating', sanitize_text_field($_POST['post_rating']));
    }
}
add_action('save_post', 'save_post_rating');

// Установка начального значения рейтинга 1000 для всех постов в категории с определенным ID
function set_initial_rating_for_category($category_id, $rating_value = 1000) {
    $args = array(
        'category' => $category_id, // Указываем ID категории
        'post_type' => 'post',
        'posts_per_page' => -1,
        'fields' => 'ids',
    );
    $posts = get_posts($args);
    foreach ($posts as $post_id) {
        // Проверяем, установлено ли значение рейтинга. Если нет, устанавливаем начальное значение
        if (get_post_meta($post_id, '_post_rating', true) === '') {
            update_post_meta($post_id, '_post_rating', $rating_value);
        }
    }
}
// Функция для проверки значения капчи
add_filter('wpcf7_validate_text*', 'custom_captcha_validation_filter', 10, 2);

function custom_captcha_validation_filter($result, $tag) {
    if ('custom_field' == $tag->name) {
        $expected_captcha = '55'; 
        $user_captcha = strtolower($_POST['custom_field']);

        if ($user_captcha !== $expected_captcha) {
            $result->invalidate($tag, "Пожалуйста, введите правильное значение капчи.");
        }
    }

    return $result;
}


function custom_seo_category_title($title) {
    if (is_category()) {
        // Получаем ACF поле 'cat-title' для текущей категории
        $cat_title = get_field('cat-title', get_queried_object());
        if ($cat_title) {
            return esc_html($cat_title);
        }
    }
    return $title;
}
add_filter('aioseo_title', 'custom_seo_category_title');
/* Дополнительные сортируемые колонки для страниц в админке
------------------------------------------------------------------------ */
// создаем новую колонку
add_filter('manage_page_posts_columns', 'add_views_column', 4);
function add_views_column($columns)
{
    // удаляем колонку Автор
    //unset($columns['author']);

    // вставляем в нужное место - 3 - 3-я колонка
    $out = array();
    $i = 0;
    foreach ($columns as $col => $name) {
        if (++$i == 6)
            $out['rtng'] = 'Рейтинг';
        $out[$col] = $name;
    }

    return $out;
}

// заполняем колонку данными
add_filter('manage_page_posts_custom_column', 'fill_views_column', 5, 2);
function fill_views_column($colname, $post_id)
{
    if ($colname === 'rtng') {
        echo get_post_meta($post_id, 'rtng', 1);
    }
}

// подправим ширину колонки через css
add_action('admin_head', 'add_views_column_css');
function add_views_column_css()
{
    if (get_current_screen()->post_type == 'page')
        echo '<style type="text/css">.column-rtng{width:9%;}.tags,.column-tags{width:5%!important}</style>';
}

// добавляем возможность сортировать колонку
add_filter('manage_edit-page_sortable_columns', 'add_views_sortable_column');
function add_views_sortable_column($sortable_columns)
{
    $sortable_columns['rtng'] = 'rtng_rtng';

    return $sortable_columns;
}

// изменяем запрос при сортировке колонки
add_filter('pre_get_posts', 'add_column_views_request');
function add_column_views_request($object)
{
    if ($object->get('orderby') != 'rtng_rtng')
        return;

    $object->set('meta_key', 'rtng');
    $object->set('orderby', 'meta_value_num');
}

add_theme_support( 'title-tag' );

function register_my_menus() {
    register_nav_menus(array(
        'medical-menu' => __('Medical Menu'),
    ));
}
add_action('init', 'register_my_menus');

function custom_menu_item_classes($classes, $item, $args) {
    if ($args->theme_location === 'medical-menu') {
        $classes[] = 'subnav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'custom_menu_item_classes', 10, 3);

function custom_submenu_classes($classes) {
    $classes[] = 'subnav-item__deeperLinks';
    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'custom_submenu_classes');

function custom_menu_link_attributes($atts, $item, $args) {
    if ($args->theme_location === 'medical-menu') {
        $atts['class'] = 'subnav-item__link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'custom_menu_link_attributes', 10, 3);


add_action('wp', function() {
    if (is_page()) {
        $post_id = get_the_ID();

        // Сохраняем просмотры в cookie
        $viewed = isset($_COOKIE['viewed_courses']) ? explode(',', $_COOKIE['viewed_courses']) : [];

        if (!in_array($post_id, $viewed)) {
            $viewed[] = $post_id;
            setcookie('viewed_courses', implode(',', $viewed), time() + 3600*24*30, '/'); // 30 дней
        }
    }
});



?>
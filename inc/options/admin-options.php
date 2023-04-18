<?php 
if  (!defined('ABSPATH')) {die('-1');}
if (class_exists('CSF')) {
    $prefix    = 'MJ';
    $img = '/wp-content/plugins/zibll_Add_ons/img/';
//开始构建
    CSF::createOptions($prefix, array(
        'menu_title'         => 'MJ美化插件',
        'menu_slug'          => 'MJ',
        'framework_title'    => 'MJ美化插件',
        'show_in_customizer' => true, 
        'footer_text'        => $footertext ,
        'footer_credit'      => '<i class="fa fa-fw fa-heart-o" aria-hidden="true"></i> ',
        'theme'              => 'light',
    ));
    include "menu/nav.php";//导航美化
    include "menu/all.php";//全局美化
    include "menu/side.php";//局部美化
    include "menu/article.php";//文章美化
    include "menu/func.php";//功能设置

}
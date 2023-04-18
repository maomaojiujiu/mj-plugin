<?php
CSF::createSection($prefix, array(
        'id'    => 'wenzhang',
        'title' => '文章美化',
        'icon'  => 'fa fa-pencil-square-o',
    ));
     CSF::createSection($prefix, array(
        'parent'      => 'wenzhang',
        'title'       => '文章页面',
        'icon'        => 'fa fa-newspaper-o',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
            array(
                'title'   => '文章随机彩色标签',
                'label'   => '开启后文章的标签将会变成随机彩色',
                'id'      => 'colorfultag',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '评论区背景图片',
                'desc'    => '<br><img src="'.$img.'comment_bg.gif "height="90px">',
                'label'   => '启用后，文章末尾评论区会有背景图片',
                'id'      => 'plbj',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '文章阴影边缘',
                'label'   => '启用后，文章页将会添加一个淡绿色柔光边缘',
                'id'      => 'zibll_Add_ons_article_box_shadow',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '文章内图片边框光效',
                'label'   => '开启后，当鼠标移向文章页面内的图片时，图片周围会有绿色柔光显示',
                'id'      => 'post_page_img_shadow',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '文章标题美化',
                'label'   => '文章H2、H3标题美化，不再有下划线',
                'desc'    => $shouquan_text,
                'id'      => 'biaoti',
                'default' => false,
                'type'    => 'switcher',
            ),
      ),));
    
         CSF::createSection($prefix, array(
        'parent'      => 'wenzhang',
        'title'       => '文章列表',
        'icon'        => 'fa fa-bars',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
                array(
                'title'   => '隐藏首页文章发布时间',
                'label'   => '开启后用户将不能在首页看到文章的发布时间,文章页面还是可以看到的',
                'id'      => 'zibll_post_public_date',
                'default' => false,
                'type'    => 'switcher',
            ),
                array(
                'title'   => '首页文章列表悬停上浮',
                'label'   => '开启后给网站首页文章赋予悬停上浮特效',
                'id'      => 'posts_item',
                'default' => false,
                'type'    => 'switcher',
            ),
              array(
                'title'   => '首页文章列表水波上浮',
                'label'   => '开启后给网站首页文章赋予悬停上浮特效',
                'desc'    => '注意，水波上浮与悬停上浮只能选择一个喔~',
                'id'      => 'posts_item2',
                'default' => false,
                'type'    => 'switcher',
            ),
                array(
                'title'   => '首页文章点击更多美化',
                'label'   => '启用后，美化文章的“点击更多”按钮',
                'id'      => 'dianjigengduo',
                'default' => false,
                'type'    => 'switcher',
            ),
      ),));
      
     CSF::createSection($prefix, array(
        'parent'      => 'wenzhang',
        'title'       => '用户头像',
        'icon'        => 'fa fa-user-circle',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
              array(
                'title'   => '用户头像美化',
                'label'   => '头像彩色呼吸光环+悬停放大',
                'id'      => 'avatar',
                'default' => false,
                'type'    => 'switcher',
            ),
      ),));
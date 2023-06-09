<?php
CSF::createSection($prefix, array(
        'id'    => 'mjall',
        'title' => '全局美化',
        'icon'  => 'fa fa-codepen',
    ));
     CSF::createSection($prefix, array(
        'parent'      => 'mjall',
        'title'       => '鼠标特效',
        'icon'        => 'fa fa-hand-pointer-o',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
              array(
                'title'   => '点击五彩斑斓爆炸特效',
                'label'   => '点击鼠标会出现五彩斑斓的爆炸特效',
                'id'      => 'zibll_Add_ons_baozha',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '点击搞笑文字特效特效',
                'label'   => '点击鼠标会出现文字显示特效',
                'id'      => 'zibll_Add_ons_baozha1',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '点击社会主义核心价值观',
                'label'   => '点击鼠标会随机出现社会主义价值观词语，彰显爱国情操！',
                'id'      => 'zibll_Add_ons_aiguo_shehuizhuyihexinjiazhiguan',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '点击彩色粒子特效',
                'label'   => '点击鼠标会出现彩色粒子溅落特效！',
                'id'      => 'zibll_Add_ons_aiguo_shehuizhuyihexinjiazhiguan1',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '鼠标跟随光圈（蓝色）',
                'label'   => '启用后，将会有一个蓝色的鼠标光圈实时跟随鼠标移动',
                'id'      => 'zibll_Add_ons_mouse_cursor',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '鼠标跟随光圈（绿色）',
                'label'   => '启用后，将会有一个绿色的鼠标光圈实时跟随鼠标移动',
                'id'      => 'zibll_Add_ons_mouse_cursor2',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '鼠标跟随光圈（粉色）',
                'label'   => '启用后，将会有一个粉色的鼠标光圈实时跟随鼠标移动',
                'id'      => 'zibll_Add_ons_mouse_cursor3',
                'default' => false,
                'type'    => 'switcher',
            ),
              array(
                'title'   => '鼠标右键菜单',
                'label'   => '启用后，将呈现个性化的右键菜单，请自定义菜单栏中最后一个的内容',
                'id'      => 'noft2',
                'default' => false,
                'type'    => 'switcher',
            ),
              array(
                'title'   => ' ',
                'dependency' => array('noft2', '!=', ''),
                'desc'   => '请填写鼠标右键菜单栏内容名称',
                'id'      => 'noft3',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'text',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('noft2', '!=', ''),
                'desc'   => '请填写鼠标右键菜单栏内容链接',
                'id'      => 'noft4',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'text',
            ),
      ),));
      CSF::createSection($prefix, array(
        'parent'      => 'mjall',
        'title'       => '鼠标皮肤',
        'icon'        => 'fa fa-hand-pointer-o',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
             array(
                'title'   => ' ',
                'desc'    => '<br><img src="'.$img.'shubiao1.png" class="shubiao"><img src="'.$img.'shubiao2.png" class="shubiao">',
                'label'   => '【蓝色精灵】',
                'id'      => 'shubiao',
                'type'    => 'switcher',
                'default' => false,
            ),
             array(
                'title'   => ' ',
                'label'   => '【寒雨剑锋】',
                'desc'    => '<br><img src="'.$img.'arr1.png" class="shubiao"><img src="'.$img.'arr2.png" class="shubiao">',
                'id'      => 'shubiao2',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'desc'    => '<br><img src="'.$img.'arr3.png" class="shubiao"><img src="'.$img.'arr4.png" class="shubiao">',
                'label'   => '【幽灵琥珀】',
                'id'      => 'shubiao3',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'desc'    => '<br><img src="'.$img.'arr5.png" class="shubiao"><img src="'.$img.'arr6.png" class="shubiao">',
                'label'   => '【红蓝对决】',
                'id'      => 'shubiao4',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'desc'    => '<br><img src="'.$img.'arr7.png" class="shubiao"><img src="'.$img.'arr8.png" class="shubiao">',
                'label'   => '【返璞风筝】',
                'id'      => 'shubiao5',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'desc'    => '<br><img src="'.$img.'arr9.png" class="shubiao"><img src="'.$img.'arr10.png" class="shubiao">',
                'label'   => '【翠色猫石】',
                'id'      => 'shubiao6',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'label'   => '【黑白无常】',
                'desc'    => '<br><img src="'.$img.'arr11.png" class="shubiao"><img src="'.$img.'arr12.png" class="shubiao">',
                'id'      => 'shubiao7',
                'default' => false,
                'type'    => 'switcher',
            ),
             
      ),));
      
      CSF::createSection($prefix, array(
        'parent'      => 'mjall',
        'title'       => '动态背景',
        'icon'        => 'fa fa-life-ring',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
            ),
             array(
                'title'   => ' ',
                'label'   => '【五彩斑斓】',
                'id'      => 'dongtai1',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'label'   => '【符号元素】',
                'id'      => 'dongtai3',
                'default' => false,
                'type'    => 'switcher',
            ), 
            array(
                'title'   => ' ',
                'label'   => '【粒子连线】',
                'id'      => 'zibll_Add_ons_Snowfall2',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'label'   => '【简约图形】',
                'id'      => 'zibll_Add_ons_Snowfall3',
                'default' => false,
                'type'    => 'switcher',
            ),
      ),));
      
        CSF::createSection($prefix, array(
        'parent'      => 'mjall',
        'title'       => '手机背景',
        'icon'        => 'fa fa-android',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
            array(
                'title'   => '【淡蓝遐想】',
                'label'   => '一个不错的日间手机背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu4',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '【熏衣彩云】',
                'label'   => '一个不错的日间手机背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu5',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '【遨游题海】',
                'label'   => '一个不错的日间手机背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu6',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '【末日审判】',
                'label'   => '一个不错的夜间手机背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu6d',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '自定义日间手机背景',
                'label'   => '开启后可自定义日间手机背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu66',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'desc'    =>'请上传自定义手机背景图片或填写图片地址',
                'dependency' => array('zibll_Add_ons_body_backgroundtu66', '!=', ''),
                'id'      => 'zibll_Add_ons_body_backgroundtu666',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
                'preview' => true,
                'library' => 'image', 
                'type' => 'upload',
            ),
            array(
                'title'   => '自定义夜间手机背景',
                'label'   => '开启后可自定义夜间手机背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu66d',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'desc'    =>'请上传自定义手机背景图片或填写图片地址',
                'dependency' => array('zibll_Add_ons_body_backgroundtu66d', '!=', ''),
                'id'      => 'zibll_Add_ons_body_backgroundtu666d',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'switcher',
                'preview' => true,
                'library' => 'image', 
                'type' => 'upload',
            ),
      ),));
      
      CSF::createSection($prefix, array(
        'parent'      => 'mjall',
        'title'       => '侧边背景',
        'icon'        => 'fa fa-picture-o',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
             array(
                'title'   => '【淡蓝遐想】',
                'label'   => '一个不错的侧边栏背景',
                'id'      => 'shoujicebianlan1',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '【熏衣彩云】',
                'label'   => '一个不错的侧边栏背景',
                'id'      => 'shoujicebianlan2',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '【遨游题海】',
                'label'   => '一个不错的侧边栏背景',
                'id'      => 'shoujicebianlan3',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '自定义侧边栏背景',
                'label'   => ' ',
                'id'      => 'shoujicebianlan33',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'dependency' => array('shoujicebianlan33', '!=', ''),
                'id'      => 'shoujicebianlan333',
                'desc'    => '请上传自定义手机侧边栏背景图片或填写图片地址',
                'preview' => true,
                'class'    =>'compact',
                'library' => 'image', 
                'type' => 'upload',
            ),
      ),));
      
       CSF::createSection($prefix, array(
        'parent'      => 'mjall',
        'title'       => '电脑背景',
        'icon'        => 'fa fa-television',
        'description' => '',
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
              array(
                'title'   => '【炫彩夜空】',
                'label'   => '一个不错的日间电脑端背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu1',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '【淡蓝遐想】',
                'label'   => '一个不错的日间电脑端背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu2',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '【遨游题海】',
                'label'   => '一个不错的日间电脑端背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu3',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '【末日审判】',
                'label'   => '一个不错的夜间电脑端背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu3d',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '自定义日间电脑端背景',
                'label'   => '开启后可自定义日间电脑端背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu33',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '自定义夜间电脑端背景',
                'label'   => '开启后可自定义夜间电脑端背景',
                'id'      => 'zibll_Add_ons_body_backgroundtu33d',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'dependency' => array('zibll_Add_ons_body_backgroundtu33', '!=', ''),
                'title'   => ' ',
                'id'      => 'zibll_Add_ons_body_backgroundtu333',
                'class'    =>'compact',
                'default'  =>false,
                'preview' => true,
                'library' => 'image', 
                'type' => 'upload',
                'desc'    =>'请上传自定义电脑背景图片或填写图片地址',
            ),
             array(
                'dependency' => array('zibll_Add_ons_body_backgroundtu33d', '!=', ''),
                'title'   => ' ',
                'id'      => 'zibll_Add_ons_body_backgroundtu333d',
                'class'    =>'compact',
                'default'  =>false,
                'preview' => true,
                'library' => 'image', 
                'type' => 'upload',
                'desc'    =>'请上传自定义电脑背景图片或填写图片地址',
            ),
      ),));
      
       CSF::createSection($prefix, array(
        'parent'      => 'mjall',
        'title'       => '飘落特效',
        'icon'        => 'fa fa-snowflake-o',
        'description' => '',
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
             array(
                'title'   => '浪漫樱花特效',
                'label'   => '启用后，网站全局显示浪漫的樱花飘落特效',
                'id'      => 'yinghua',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '枫叶飘落特效',
                'label'   => '启用后，网站全局显示枫叶飘落特效',
                'desc'    => '注意：枫叶飘落特效不能和樱花飘落特效一起用喔~',
                'id'      => 'fengye',
                'default' => false,
                'type'    => 'switcher',
            ),
              array(
                'title'   => '雪花飘落特效',
                'label'   => '启用后，网站全局将会显示雪花飘落的特效',
                'id'      => 'zibll_Add_ons_Snowfall1',
                'default' => false,
                'type'    => 'switcher',
            ),
               array(
                'title'   => '全局灰色主题',
                'label'   => '启用后，网站全局变灰,适合国家公祭日等纪念日使用',
                'id'      => 'site_gray',
                'default' => false,
                'type'    => 'switcher',
            ),
      ),));
       CSF::createSection($prefix, array(
        'parent'      => 'mjall',
        'title'       => '网站字体',
        'icon'        => 'fa fa-pencil',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
             array(
                'title'   => '网站字体1',
                'label'   => '一款不错的字体',
                'desc'    => '<br><img src="'.$img.'mjfont1.png" height="40px">',
                'id'      => 'ziti1',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '网站字体2',
                'label'   => '一款不错的字体',
                'desc'    => '<br><img src="'.$img.'mjfont2.png" height="40px">',
                'id'      => 'ziti2',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '网站字体3',
                'label'   => '一款不错的字体',
                'desc'    => '<br><img src="'.$img.'mjfont3.png" height="40px">',
                'id'      => 'ziti3',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '网站字体4',
                'label'   => '一款不错的字体',
                'desc'    => '<br><img src="'.$img.'mjfont4.png" height="40px">',
                'id'      => 'ziti4',
                'default' => false,
                'type'    => 'switcher',
            ), array(
                'title'   => '网站字体5',
                'label'   => '一款不错的字体',
                'desc'    =>'<br><img src="'.$img.'mjfont5.png" height="40px">',
                'id'      => 'ziti5',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '网站字体6',
                'label'   => '一款不错的字体',
                'desc'    => '<br><img src="'.$img.'mjfont6.png" height="40px">',
                'id'      => 'ziti6',
                'default' => false,
                'type'    => 'switcher',
            ), 
             array(
                'title'   => '自定义网站字体',
                'label'   => ' ',
                'id'      => 'ziti66',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => ' ',
                'desc'   => '请填写自定义的网站字体链接地址',
                'dependency' => array('ziti66', '!=', ''),
                'id'      => 'ziti666',
                'class'    =>'compact',
                'default' => false,
                'type'    => 'text',
            ),
      ),));
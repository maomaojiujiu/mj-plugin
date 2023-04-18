<?php
 CSF::createSection($prefix, array(
        'id'    => 'gongneng',
        'title' => '功能设置',
        'icon'  => 'fa fa-pie-chart',
    ));
     CSF::createSection($prefix, array(
        'parent'      => 'gongneng',
        'title'       => '弹窗提示',
        'icon'        => 'fa fa-crop',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
            array(
                'title'   => '日间、夜间切换提示',
                'label'   => '启用后，进行日间夜间模式切换时，谁有弹窗提示',
                'id'      => 'qiehuan',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '复制成功提示框1',
                'label'   => '启用后，当用户复制内容时会有弹窗提示',
                'id'      => 'fuzhitishi1',
                'default' => false,
                'type'    => 'switcher',
            ),
              array(
                'title'   => '复制成功提示框2',
                'label'   => '启用后，当用户复制内容时会有弹窗提示',
                'id'      => 'fuzhitishi2',
                'default' => false,
                'type'    => 'switcher',
            ),
               array(
                'title'   => '复制成功提示框3',
                'label'   => '启用后，当用户复制内容时会有弹窗提示',
                'id'      => 'fuzhitishi3',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '复制成功提示框4',
                'label'   => '启用后，当用户复制内容时会有弹窗提示',
                'id'      => 'fuzhitishi4',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '复制后保存原文地址',
                'label'   => '启用后，用户复制内容后同时会将原文地址复制到粘贴板上',
                'id'      => 'noft1',
                'default' => false,
                'type'    => 'switcher',
            ),
            
      ),));
      CSF::createSection($prefix, array(
        'parent'      => 'gongneng',
        'title'       => '音乐模块',
        'icon'        => 'fa fa-music',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
            array(
                'title'   => '添加音乐播放器',
                'label'   => '开启后可以给网站添加一个音乐播放器',
                'id'      => 'video',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '网站播放音乐',
                'label'   => '启用后，网站会无播放器式播放10首随机音乐',
                'id'      => 'plbj2',
                'default' => false,
                'type'    => 'switcher',
            ),
             
      ),));
    
    CSF::createSection($prefix, array(
        'parent'      => 'gongneng',
        'title'       => '禁用设置',
        'icon'        => 'fa fa-ban',
        'description' => '',
        'default'   =>true,
        'fields'      => array(
            array(
                'style'   => 'warning',
                'type'    => 'submessage',
            ), 
             array(
                'title'   => '禁用鼠标右键',
                'label'   => '启用后，用户将不能使用右键进行任何操作',
                'id'      => 'noyou',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '禁止图片拖放',
                'label'   => '启用后，用户将不能拖放网站中图片',
                'id'      => 'notuofang',
                'default' => false,
                'type'    => 'switcher',
            ),
             array(
                'title'   => '禁用F12键',
                'label'   => '启用后，用户将不能使用F12键查询您的网站源码',
                'id'      => 'noft',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => ' ',
                'desc'   => '请输入自定义F12提示语，如：小子！别想扒站！',
                'dependency' => array('noft', '!=', ''),
                'class'    =>'compact',
                'id'      => 'nofttext',
                'default' => '坏孩子',
                'type'    => 'text',
            ),
             array(
                'title'   => '禁止内容选中',
                'label'   => '启用后，用户将不能选中网站中任意内容',
                'desc'    => '注：对用户不友好，慎选！',
                'id'      => 'nofta',
                'default' => false,
                'type'    => 'switcher',
            ),
            array(
                'title'   => '禁止Ctrl+S保存网页',
                'label'   => '启用后，用户将不能Ctrl+S保存网页内容',
                'id'      => 'noftb',
                'default' => false,
                'type'    => 'switcher',
            ),
            
      ),));
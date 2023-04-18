<?php if (!defined('ABSPATH')) {die;} // Cannot access directly.
/*
 * @Author: Qinver
 * @Url: zibll.com
 * @Date: 2021-04-11 21:36:20
 * @LastEditTime: 2022-02-27 19:36:57
 * /
 * / 将jsdelivr-CDN调整为本地
 */
/**
 *
 * Field: code_editor
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if (!class_exists('CSF_Field_code_editor')) {
    class CSF_Field_code_editor extends CSF_Fields
    {

        public $version = '5.58.2';
        public $cdn_url = 'https://cdn.jsdelivr.net/npm/codemirror@';

        public function __construct($field, $value = '', $unique = '', $where = '', $parent = '')
        {
            parent::__construct($field, $value, $unique, $where, $parent);
        }

        public function render()
        {

            $default_settings = array(
                'tabSize'     => 2,
                'lineNumbers' => true,
                'theme'       => 'default',
                'mode'        => 'htmlmixed',
                'cdnURL'      => $this->cdn_url . $this->version,
            );

            $settings = (!empty($this->field['settings'])) ? $this->field['settings'] : array();
            $settings = wp_parse_args($settings, $default_settings);

            $settings['cdnURL'] = '';

            echo $this->field_before();
            echo '<textarea name="' . esc_attr($this->field_name()) . '"' . $this->field_attributes() . ' data-editor="' . esc_attr(json_encode($settings)) . '">' . $this->value . '</textarea>';
            echo $this->field_after();

        }

        public function enqueue()
        {

            $page = (!empty($_GET['page'])) ? sanitize_text_field(wp_unslash($_GET['page'])) : '';

            // Do not loads CodeMirror in revslider page.
            if (in_array($page, array('revslider'))) {return;}

            if (!wp_script_is('csf-codemirror')) {
                wp_enqueue_script('csf-codemirror', get_template_directory_uri() . '/inc/csf-framework/assets/js/codemirror.min.js', array('csf'), $this->version, true);
                wp_enqueue_script('csf-codemirror-loadmode', get_template_directory_uri() . '/inc/csf-framework/assets/js/loadmode.min.js', array('csf-codemirror'), $this->version, true);

                //   wp_enqueue_script('csf-codemirror', esc_url($this->cdn_url . $this->version . '/lib/codemirror.min.js'), array('csf'), $this->version, true);
                //   wp_enqueue_script('csf-codemirror-loadmode', esc_url($this->cdn_url . $this->version . '/addon/mode/loadmode.min.js'), array('csf-codemirror'), $this->version, true);
            }

            if (!wp_style_is('csf-codemirror')) {
                wp_enqueue_style('csf-codemirror', get_template_directory_uri() . '/inc/csf-framework/assets/css/codemirror.min.css', array(), $this->version);
                // wp_enqueue_style('csf-codemirror', esc_url($this->cdn_url . $this->version . '/lib/codemirror.min.css'), array(), $this->version);
            }

        }

    }
}

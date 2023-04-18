<?php if (!defined('ABSPATH')) {
    die;
}
/*
 * @Author        : Qinver
 * @Url           : zibll.com
 * @Date          : 2020-09-29 13:18:37
 * @LastEditTime: 2022-02-27 19:40:07
 * @Email         : 770349780@qq.com
 * @Project       : Zibll子比主题
 * @Description   : 一款极其优雅的Wordpress主题|使用ZCSF构建内容
 * @Read me       : 感谢您使用子比主题，主题源码有详细的注释，支持二次开发。
 * @Remind        : 使用盗版主题会存在各种未知风险。支持正版，从我做起！
 */

if (!class_exists('ZCSF')) {
    class ZCSF
    {
        // constans
        public $unique = '';
        public $args   = array(
            'class'  => '',
            'form'   => true,
            'nonce'  => true,
            'method' => '',
            'action' => '',
            'fields' => array(),
            'value'  => array(),
            'hidden' => array(),
        );

        public function __construct($key, $params)
        {
            $this->unique = $key;
            $this->args   = apply_filters("csf_{$this->unique}_args", wp_parse_args($params, $this->args), $this);
            $this->enqueue_scripts();
            $this->form($params);
        }
        // instance
        public static function instance($key, $params)
        {
            return new self($key, $params);
        }
        public function enqueue_scripts()
        {
            wp_enqueue_media();
            wp_enqueue_style('wp-color-picker');
            wp_enqueue_script('wp-color-picker');
            $min = '.min';

            // Font awesome 4 and 5 loader
            if (apply_filters('csf_fa4', false)) {
                wp_enqueue_style('csf-fa', ZIB_TEMPLATE_DIRECTORY_URI . '/css/font-awesome.min.css', array(), '4.7.0', 'all');
            } else {
                wp_enqueue_style('csf-fa5', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.1/css/all' . $min . '.css', array(), '5.14.0', 'all');
                wp_enqueue_style('csf-fa5-v4-shims', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.1/css/v4-shims' . $min . '.css', array(), '5.14.0', 'all');
            }

            // Main style
            wp_enqueue_style('csf', CSF::include_plugin_url('assets/css/style' . $min . '.css'), array(), CSF::$version, 'all');

            // Main RTL styles
            if (is_rtl()) {
                wp_enqueue_style('csf-rtl', CSF::include_plugin_url('assets/css/style-rtl' . $min . '.css'), array(), CSF::$version, 'all');
            }

            // Main scripts
            wp_enqueue_script('csf-plugins', CSF::include_plugin_url('assets/js/plugins' . $min . '.js'), array(), CSF::$version, true);
            wp_enqueue_script('csf', CSF::include_plugin_url('assets/js/main' . $min . '.js'), array('csf-plugins'), CSF::$version, true);

            // Main variables
            wp_localize_script('csf', 'csf_vars', array(
                'color_palette' => apply_filters('csf_color_palette', array()),
                'i18n'          => array(
                    'confirm'         => esc_html__('Are you sure?', 'csf'),
                    'typing_text'     => esc_html__('Please enter %s or more characters', 'csf'),
                    'searching_text'  => esc_html__('Searching...', 'csf'),
                    'no_results_text' => esc_html__('No results found.', 'csf'),
                ),
            ));

            if (!empty($this->args['fields'])) {
                foreach ($this->args['fields'] as $field) {
                    if (!empty($field['type'])) {
                        $classname = 'CSF_Field_' . $field['type'];
                        CSF::maybe_include_field($field['type']);
                        if (class_exists($classname) && method_exists($classname, 'enqueue')) {
                            $instance = new $classname($field);
                            if (method_exists($classname, 'enqueue')) {
                                $instance->enqueue();
                            }
                            unset($instance);
                        }
                    }
                }
            }
            do_action('csf_enqueue');
        }

        // Back-end widget form.
        public function form()
        {
            if (!empty($this->args['fields'])) {
                $class = ($this->args['class']) ? ' ' . $this->args['class'] : '';

                // echo esc_attr(json_encode($this->args['value']));
                if ($this->args['form']) {
                    $action = !empty($this->args['action']) ? ' action="' . $this->args['action'] . '"' : '';
                    $method = !empty($this->args['method']) ? ' method="' . $this->args['method'] . '"' : '';
                    echo '<form' . $action . $method . '>';
                }
                echo '<div class="csf zib-csf csf-onload' . esc_attr($class) . '">';
                if ($this->args['nonce']) {
                    wp_nonce_field('zcsf_nonce', 'zcsf_nonce');
                }
                foreach ($this->args['fields'] as $field) {
                    $field_unique = '';
                    if (!empty($field['id'])) {
                        $field_unique     = '';
                        $field['default'] = $this->get_default($field);
                    }
                    CSF::field($field, $this->get_value($field), $field_unique);
                }
                echo $this->hidden_input();
                echo '</div>';
                if ($this->args['form']) {
                    echo '</form>';
                }
            }
        }

        // get widget value
        public function hidden_input()
        {
            $hidden_input = isset($this->args['hidden']) ? $this->args['hidden'] : array();
            $html         = '';
            foreach ($hidden_input as $input) {
                $name  = isset($input['name']) ? $input['name'] : $input[0];
                $value = isset($input['value']) ? $input['value'] : $input[1];
                $html .= '<input type="hidden" name="' . $name . '" value="' . $value . '">';
            }
            return $html;
        }

        // get widget value
        public function get_value($field)
        {
            $id    = isset($field['id']) ? $field['id'] : '';
            $value = '';
            if ($id) {
                $default = $id ? $this->get_default($field) : '';
                $value   = isset($this->args['value'][$id]) ? $this->args['value'][$id] : $default;
            }
            return $value;
        }

        // get default value
        public function get_default($field)
        {
            $default = (isset($field['default'])) ? $field['default'] : '';
            return $default;
        }

        public function save($new_instance, $old_instance)
        {

            // auto sanitize
            foreach ($this->args['fields'] as $field) {
                if (!empty($field['id']) && (!isset($new_instance[$field['id']]) || is_null($new_instance[$field['id']]))) {
                    $new_instance[$field['id']] = '';
                }
            }

            $new_instance = apply_filters("csf_{$this->unique}_save", $new_instance, $this->args, $this);

            do_action("csf_{$this->unique}_save_before", $new_instance, $this->args, $this);

            return $new_instance;
        }
    }
}

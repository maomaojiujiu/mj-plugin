<?php if (!defined('ABSPATH')) {
    /*
 * @Author: Qinver
 * @Url: zibll.com
 * @Date: 2021-01-09 22:15:14
 * @LastEditTime: 2021-01-09 22:37:31
 */
    die;
} // Cannot access directly.
/**
 *
 * Field: dimensions
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if (!class_exists('CSF_Field_between_number')) {
    class CSF_Field_between_number extends CSF_Fields
    {

        public function __construct($field, $value = '', $unique = '', $where = '', $parent = '')
        {
            parent::__construct($field, $value, $unique, $where, $parent);
        }

        public function render()
        {

            $args = wp_parse_args($this->field, array(
                'min_icon'         => '最小',
                'max_icon'         => '最大',
                'min_placeholder'    => '',
                'max_placeholder'    => '',
                'min'                => true,
                'max'                => true,
                'unit'   => '',
            ));

            $default_values = array(
                'min'  => '',
                'max' => '',
            );

            $value   = wp_parse_args($this->value, $default_values);
            $is_unit = (!empty($args['unit'])) ? ' csf--is-unit' : '';

            echo $this->field_before();
            echo '<div class="csf-field-dimensions">';
            echo '<div class="csf--inputs">';
            if (!empty($args['min'])) {
                $placeholder = (!empty($args['min_placeholder'])) ? ' placeholder="' . esc_attr($args['min_placeholder']) . '"' : '';
                echo '<div class="csf--input">';
                echo (!empty($args['min_icon'])) ? '<span class="csf--label csf--icon">' . $args['min_icon'] . '</span>' : '';
                echo '<input type="number" name="' . esc_attr($this->field_name('[min]')) . '" value="' . esc_attr($value['min']) . '"' . $placeholder . ' class="csf-input-number' . esc_attr($is_unit) . '" step="any" />';
                echo (!empty($args['unit'])) ? '<span class="csf--label csf--unit">' . esc_attr($args['unit']) . '</span>' : '';
                echo '</div>';
            }

            if (!empty($args['max'])) {
                $placeholder = (!empty($args['max_placeholder'])) ? ' placeholder="' . esc_attr($args['max_placeholder']) . '"' : '';
                echo '<div class="csf--input">';
                echo (!empty($args['max_icon'])) ? '<span class="csf--label csf--icon">' . $args['max_icon'] . '</span>' : '';
                echo '<input type="number" name="' . esc_attr($this->field_name('[max]')) . '" value="' . esc_attr($value['max']) . '"' . $placeholder . ' class="csf-input-number' . esc_attr($is_unit) . '" step="any" />';
                echo (!empty($args['unit'])) ? '<span class="csf--label csf--unit">' . esc_attr($args['unit']) . '</span>' : '';
                echo '</div>';
            }

            echo '</div>';
            echo '</div>';

            echo $this->field_after();
        }

        public function output()
        {

            $output    = '';
            $element   = (is_array($this->field['output'])) ? join(',', $this->field['output']) : $this->field['output'];
            $prefix    = (!empty($this->field['output_prefix'])) ? $this->field['output_prefix'] . '-' : '';
            $important = (!empty($this->field['output_important'])) ? '!important' : '';
            $unit      = (!empty($this->value['unit'])) ? $this->value['unit'] : 'px';
            $width     = (isset($this->value['min']) && $this->value['min'] !== '') ? $prefix . 'width:' . $this->value['min'] . $unit . $important . ';' : '';
            $height    = (isset($this->value['max']) && $this->value['max'] !== '') ? $prefix . 'height:' . $this->value['max'] . $unit . $important . ';' : '';

            if ($width !== '' || $height !== '') {
                $output = $element . '{' . $width . $height . '}';
            }

            $this->parent->output_css .= $output;

            return $output;
        }
    }
}

<?php if (!defined('ABSPATH')) {
    die;
} // Cannot access directly.

if (!class_exists('CSF_Field_upload')) {
    class CSF_Field_upload extends CSF_Fields
    {

        public function __construct($field, $value = '', $unique = '', $where = '', $parent = '')
        {
            parent::__construct($field, $value, $unique, $where, $parent);
        }

        public function render()
        {

            $args = wp_parse_args($this->field, array(
                'library'      => array(),
                'button_title' => esc_html__('Upload', 'csf'),
                'remove_title' => esc_html__('Remove', 'csf'),
            ));

            echo $this->field_before();

            $hidden  = (empty($this->value)) ? ' hidden' : '';

            $hidden_auto = (empty($this->value)) ? ' hidden' : '';

            echo '<div class="csf--preview' . esc_attr($hidden_auto) . '">';
            echo '<div class="csf-image-preview"><a href="#" class="csf--remove fas fa-times"></a><img src="' . esc_url($this->value) . '" class="csf--src" /></div>';
            echo '</div>';


            echo '<div class="csf--wrap">';
            echo '<input type="text" name="' . esc_attr($this->field_name()) . '" value="' . esc_attr($this->value) . '"' . $this->field_attributes() . '/>';
            echo '<a href="#" class="button button-primary csf--button" data-library="image">' . $args['button_title'] . '</a>';
            echo '<a href="#" class="button button-secondary csf-warning-primary csf--remove' . esc_attr($hidden) . '">' . $args['remove_title'] . '</a>';
            echo '</div>';

            echo $this->field_after();
        }
    }
}

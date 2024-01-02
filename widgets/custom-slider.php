<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
class Custom_Elementor_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'custom_slider_widget';
    }

    public function get_title() {
        return __( 'Custom Slider Widget', 'text-domain' );
    }

    public function get_icon() {
        return 'eicon-slideshow';
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'gallery_section',
            [
                'label' => __( 'Media Gallery', 'text-domain' ),
            ]
        );

        $this->add_control(
            'gallery_images',
            [
                'label'   => __( 'Gallery Images', 'text-domain' ),
                'type'    => \Elementor\Controls_Manager::GALLERY,
                'default' => [],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings();

        $gallery_images = $settings['gallery_images'];

        ?>
        <div class="quality-image-nav-slider-init">
            <div class="quality-image-nav-slider">
                <?php foreach ( $gallery_images as $image ) : ?>
                    <div>
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="Title" />
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="quality-image-nav-slidernav">
                <?php foreach ( $gallery_images as $image ) : ?>
                    <div>
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="Image" />
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <?php
    }
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Custom_Elementor_Widget() );
<?php

namespace Elementor;

if (!defined('ABSPATH'))
    exit;      // Exit if accessed directly

class Listing_Card_Elementor_Widget extends Widget_Base {

    //Function for get the slug of the element name.
    public function get_name() {
        return 'listing-card-elementor-widget';
    }

    //Function for get the name of the element.
    public function get_title() {
        return __('Listing Card', CEE_DOMAIN);
    }

    //Function for get the icon of the element.
    public function get_icon() {
        return 'eicon-bullet-list';
    }

    //Function for include element into the category.
    public function get_categories() {
        return ['card-elements'];
    }

    /*
     * Adding the controls fields for the listing card
     */

    protected function _register_controls() {

        /*
         * Start listing card controls fields
         */
        $this->start_controls_section(
                'section_items_data', array(
            'label' => esc_html__('Listing Card Items', CEE_DOMAIN),
                )
        );


        $this->add_control(
                'listing_card_style', [
            'label' => __('Listing Card Style', CEE_DOMAIN),
            'type' => Controls_Manager::SELECT,
            'options' => [
                'listing-card-style-1' => esc_html__('Card Style 1', CEE_DOMAIN),
				'listing-card-style-2' => esc_html__('Card Style 2', CEE_DOMAIN),
				'listing-card-style-3' => esc_html__('Card Style 3', CEE_DOMAIN),
				'listing-card-style-4' => esc_html__('Card Style 4', CEE_DOMAIN),
            ],
            'default' => 'listing-card-style-1',
                ]
        );

		$this->add_control(
                'select_image', [
            'label' => __('Image', CEE_DOMAIN),
            'type' => Controls_Manager::MEDIA,
            'dynamic' => [
                'active' => true,
            ],
            'default' => [
                'url' => Utils::get_placeholder_image_src(),
            ],
                ]
        );
		
        $this->add_control(
                'name', [
            'label' => __('Name', CEE_DOMAIN),
            'type' => Controls_Manager::TEXT,
            'default' => __('Name', CEE_DOMAIN),
            'placeholder' => __('Enter name', CEE_DOMAIN),
                ]
        );
		
		$this->add_control(
                'display_listing_description', [
            'label' => __('Display Description', CEE_DOMAIN),
            'type' => Controls_Manager::SWITCHER,
            'default' => 'yes',
            'label_on' => __('Show', CEE_DOMAIN),
            'label_off' => __('Hide', CEE_DOMAIN),
                ]
        );
		
		$this->add_control(
                'listing_description', array(
            'label' => esc_html__('Description', CEE_DOMAIN),
            'type' => Controls_Manager::TEXTAREA,
            'condition' => [
                'display_listing_description' => 'yes',
            ],
            'default' => __('Lorem ipsum dolor sit amet, consectetur adipisci ng elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', CEE_DOMAIN),
                )
        );
		
		$this->add_control(
                'listing_price', array(
            'label' => esc_html__('Price', CEE_DOMAIN),
			'default' => __('10$', CEE_DOMAIN),
            'type' => Controls_Manager::TEXT,
                )
        );
		
		$this->add_control(
                'button_text', [
            'label' => __('Button Text', CEE_DOMAIN),
            'type' => Controls_Manager::TEXT,
			'condition' => [
                'listing_card_style' => ['listing-card-style-1'],
            ],
            'default' => __('View more', CEE_DOMAIN),
            'placeholder' => __('Button text', CEE_DOMAIN),
                ]
        );
		
		$this->add_control(
                'button_link', [
            'label' => __('Link', CEE_DOMAIN),
            'type' => Controls_Manager::TEXT,
            'default' => __('', CEE_DOMAIN),
            'placeholder' => __('Enter Link', CEE_DOMAIN),
                ]
        );

        $this->end_controls_section();
		/*
         * End testimonial card controls fields
         */
        $this->start_controls_section(
                'section_rating', [
            'label' => __('Rating', CEE_DOMAIN),
			'condition' => [
                'listing_card_style' => ['listing-card-style-1' , 'listing-card-style-2' , 'listing-card-style-3' , 'listing-card-style-4'],
            ],
            ]
        );
		
        $this->add_control(
                'rating_scale', [
            'label' => __('Rating Scale', CEE_DOMAIN),
            'type' => Controls_Manager::SELECT,
            'options' => [
                '5' => '0-5',
                '10' => '0-10',
            ],
            'default' => '5',
                ]
        );

        $this->add_control(
                'rating', [
            'label' => __('Rating', CEE_DOMAIN),
            'type' => Controls_Manager::NUMBER,
            'min' => 0,
            'max' => 10,
            'step' => 0.1,
            'default' => 5,
                ]
        );
		
        $this->add_control(
                'star_style', [
            'label' => __('Icon', CEE_DOMAIN),
            'type' => Controls_Manager::SELECT,
            'options' => [
                'star_fontawesome' => 'Font Awesome',
                'star_unicode' => 'Unicode',
            ],
            'default' => 'star_unicode',
            'render_type' => 'template',
            'prefix_class' => 'elementor--star-style-',
            'separator' => 'before',
                ]
        );

        $this->add_control(
                'unmarked_star_style', [
            'label' => __('Unmarked Style', CEE_DOMAIN),
            'type' => Controls_Manager::CHOOSE,
            'label_block' => false,
            'options' => [
                'solid' => [
                    'title' => __('Solid', CEE_DOMAIN),
                    'icon' => 'fab fa-star',
                ],
                'outline' => [
                    'title' => __('Outline', CEE_DOMAIN),
                    'icon' => 'fab fa-star-o',
                ],
            ],
            'default' => 'solid',
                ]
        );
		$this->end_controls_section();
        /*
         * End listing card controls fields
         */

        /*
         * Start control style tab for listing card
         * Start name control style
         */
        $this->start_controls_section(
                'section_listing_name', [
            'label' => __('Name', CEE_DOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_responsive_control(
                'name_text_align', [
            'label' => __('Alignment', CEE_DOMAIN),
            'type' => Controls_Manager::CHOOSE,
			'condition' => [
                'listing_card_style' => ['listing-card-style-1' , 'listing-card-style-4'],
            ],
            'options' => [
                'left' => [
                    'title' => __('Left', CEE_DOMAIN),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', CEE_DOMAIN),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', CEE_DOMAIN),
                    'icon' => 'fa fa-align-right',
                ],
                'justify' => [
                    'title' => __('Justified', CEE_DOMAIN),
                    'icon' => 'fa fa-align-justify',
                ],
            ],
            'selectors' => [
				 '{{WRAPPER}} .elementor-listing-name-wrapper' => 'text-align: {{VALUE}};',
            ],
                ]
        );

        $this->add_control(
                'name_color', [
            'label' => __('Text Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .elementor-listing-name-wrapper' => 'color: {{VALUE}};',
            ],
                ]
        );
		
		$this->add_control(
                'name_bg_color', [
            'label' => __('Background Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
			'condition' => [
                'listing_card_style' => ['listing-card-style-2' , 'listing-card-style-3'],
            ],
            'selectors' => [
                '{{WRAPPER}} .wrapper-name,
				 {{WRAPPER}} .bg-color-name' => 'background-color: {{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'typography_name',
            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .elementor-listing-name-wrapper',
                ]
        );

        $this->end_controls_section();

        /*
         * Start position control style
         */
        $this->start_controls_section(
                'section_listing_price', [
            'label' => __('Price', CEE_DOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_responsive_control(
                'price_text_align', [
            'label' => __('Alignment', CEE_DOMAIN),
            'type' => Controls_Manager::CHOOSE,
			'condition' => [
                'listing_card_style' => ['listing-card-style-1' , 'listing-card-style-4'],
            ],
            'options' => [
                'left' => [
                    'title' => __('Left', CEE_DOMAIN),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', CEE_DOMAIN),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', CEE_DOMAIN),
                    'icon' => 'fa fa-align-right',
                ],
                'justify' => [
                    'title' => __('Justified', CEE_DOMAIN),
                    'icon' => 'fa fa-align-justify',
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .elementor-listing-price-wrapper' => 'text-align: {{VALUE}};',
            ],
                ]
        );

        $this->add_control(
                'price_color', [
            'label' => __('Text Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .elementor-listing-price-wrapper' => 'color: {{VALUE}};',
            ],
                ]
        );
		
		$this->add_control(
                'price_background_color', [
            'label' => __('Background Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
			'condition' => [
                'listing_card_style' => ['listing-card-style-2' , 'listing-card-style-3' , 'listing-card-style-4'],
            ],
            'selectors' => [
                '{{WRAPPER}} .wrapper-price , 
                 {{WRAPPER}} .actions , 
				 {{WRAPPER}} .bg-color' => 'background-color: {{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'typography_position',
            'scheme' => Scheme_Typography::TYPOGRAPHY_2,
            'selector' => '{{WRAPPER}} .elementor-listing-price-wrapper',
                ]
        );
		$this->add_responsive_control(
                'price_space', [
            'label' => __('Spacing', CEE_DOMAIN),
            'type' => Controls_Manager::SLIDER,
			'condition' => [
                'listing_card_style' => ['listing-card-style-2'],
            ],
            'range' => [
                '%' => [
                    'min' => 0,
                    'max' => 50,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .wrapper-price' => 'top: {{SIZE}}{{UNIT}}',
            ],
                ]
        );

        $this->end_controls_section();
		
        /*
         * Start desription control style
         */
        $this->start_controls_section(
                'section_listing_description', [
            'label' => __('Description', CEE_DOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_responsive_control(
                'description_text_align', [
            'label' => __('Alignment', CEE_DOMAIN),
            'type' => Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => __('Left', CEE_DOMAIN),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', CEE_DOMAIN),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', CEE_DOMAIN),
                    'icon' => 'fa fa-align-right',
                ],
                'justify' => [
                    'title' => __('Justified', CEE_DOMAIN),
                    'icon' => 'fa fa-align-justify',
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .elementor-listing-description-wrapper' => 'text-align: {{VALUE}};',
            ],
                ]
        );

        $this->add_control(
                'description_color', [
            'label' => __('Text Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .elementor-listing-description-wrapper' => 'color: {{VALUE}};',
            ],
                ]
        );
		
		$this->add_control(
                'description_background_color', [
            'label' => __('Background Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
			'condition' => [
                'listing_card_style' => ['listing-card-style-2'],
            ],
            'selectors' => [
                '{{WRAPPER}} .description' => 'background-color: {{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'typography_description',
            'scheme' => Scheme_Typography::TYPOGRAPHY_3,
            'selector' => '{{WRAPPER}} .elementor-listing-description-wrapper',
                ]
        );

        $this->end_controls_section();
		/*
         * Start Stars control style
         */
		$this->start_controls_section(
                'section_stars_style', [
            'label' => __('Stars', CEE_DOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
			'condition' => [
                'listing_card_style' => ['listing-card-style-1' , 'listing-card-style-2' , 'listing-card-style-3' , 'listing-card-style-4'],
            ],
            ]
        );

		$this->add_responsive_control(
                'star_align', [
            'label' => __('Alignment', CEE_DOMAIN),
            'type' => Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => __('Left', CEE_DOMAIN),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', CEE_DOMAIN),
                    'icon' => 'fa fa-align-center',
                ],
                'flex-end' => [
                    'title' => __('Right', CEE_DOMAIN),
                    'icon' => 'fa fa-align-right',
                ],
            ],
            'selectors' => [
				 '{{WRAPPER}} .elementor-star-rating__wrapper' => 'justify-content: {{VALUE}};',
            ],
                ]
        );
		
        $this->add_responsive_control(
                'icon_size', [
            'label' => __('Size', CEE_DOMAIN),
            'type' => Controls_Manager::SLIDER,
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .elementor-star-rating' => 'font-size: {{SIZE}}{{UNIT}}',
            ],
                ]
        );

        $this->add_responsive_control(
                'icon_space', [
            'label' => __('Spacing', CEE_DOMAIN),
            'type' => Controls_Manager::SLIDER,
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 50,
                ],
            ],
            'selectors' => [
                'body:not(.rtl) {{WRAPPER}} .elementor-star-rating i:not(:last-of-type)' => 'margin-right: {{SIZE}}{{UNIT}}',
                'body.rtl {{WRAPPER}} .elementor-star-rating i:not(:last-of-type)' => 'margin-left: {{SIZE}}{{UNIT}}',
            ],
                ]
        );

        $this->add_control(
                'stars_color', [
            'label' => __('Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .elementor-star-rating i:before' => 'color: {{VALUE}}',
            ],
            'separator' => 'before',
                ]
        );

        $this->add_control(
                'stars_unmarked_color', [
            'label' => __('Unmarked Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .elementor-star-rating i' => 'color: {{VALUE}}',
            ],
                ]
        );
		
		$this->add_control(
                'star_background_color', [
            'label' => __('Background Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
			'condition' => [
                'listing_card_style' => ['listing-card-style-2'],
            ],
            'selectors' => [
                '{{WRAPPER}} .star' => 'background-color: {{VALUE}};',
            ],
                ]
        );
		
        $this->end_controls_section();
		/*
         * Start triangle control style
         */
		$this->start_controls_section(
                'section_triangle_style', [
            'label' => __('Triangle', CEE_DOMAIN),
			'condition' => [
                'listing_card_style' => ['listing-card-style-2'],
            ],
            'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
		
		$this->add_control(
                'triangle_background_color', [
            'label' => __('Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
			'condition' => [
                'listing_card_style' => ['listing-card-style-2'],
            ],
            'selectors' => [
                '{{WRAPPER}} .triangle-div' => 'border-top: solid 30px {{VALUE}}; border-left: solid 30px {{VALUE}};',
            ],
                ]
        );
		
        $this->end_controls_section();
		/*
         * Start control style tab for listing card
         * Start button control style
         */
        $this->start_controls_section(
                'section_listing_button', [
            'label' => __('Button', CEE_DOMAIN),
			'condition' => [
                'listing_card_style' => ['listing-card-style-1'],
            ],
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_responsive_control(
                'button_text_align', [
            'label' => __('Alignment', CEE_DOMAIN),
            'type' => Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                    'title' => __('Left', CEE_DOMAIN),
                    'icon' => 'fa fa-align-left',
                ],
                'center' => [
                    'title' => __('Center', CEE_DOMAIN),
                    'icon' => 'fa fa-align-center',
                ],
                'right' => [
                    'title' => __('Right', CEE_DOMAIN),
                    'icon' => 'fa fa-align-right',
                ],
                'justify' => [
                    'title' => __('Justified', CEE_DOMAIN),
                    'icon' => 'fa fa-align-justify',
                ],
            ],
            'selectors' => [
				 '{{WRAPPER}} .listing-button' => 'text-align: {{VALUE}};',
            ],
                ]
        );

        $this->add_control(
                'button_text_color', [
            'label' => __('Text Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .listing-button a' => 'color: {{VALUE}};',
            ], 
                ]
        );

		$this->add_control(
                'button_text_hover_color', [
            'label' => __('Text Hover Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .listing-button a:hover' => 'color: {{VALUE}};',
            ], 
                ]
        );
		
		$this->add_control(
                'button_background_color', [
            'label' => __('Background Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .listing-button a' => 'background-color: {{VALUE}};',
            ],
                ]
        );
		
		$this->add_control(
                'button_background_hover_color', [
            'label' => __('Background Hover Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .listing-button a:hover' => 'background-color: {{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'typography_button_text',
            'scheme' => Scheme_Typography::TYPOGRAPHY_4,
            'selector' => '{{WRAPPER}} .listing-button a',
                ]
        );

        $this->end_controls_section();
		
		$this->start_controls_section(
                'section_listing_contentbox', [
            'label' => __('Box', CEE_DOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );
		
		$this->add_responsive_control(
                'box_padding', [
            'label' => __('Padding', CEE_DOMAIN),
            'type' => Controls_Manager::DIMENSIONS,
			'condition' => [
                'listing_card_style' => ['listing-card-style-1', 'listing-card-style-3' , 'listing-card-style-4'],
            ],
            'size_units' => ['px', '%'],
			'devices' => [ 'desktop', 'tablet', 'mobile' ],
            'selectors' => [
                '{{WRAPPER}} .listing-card-style-1 .listing-content,
                 {{WRAPPER}} .listing-card-style-2,
                 {{WRAPPER}} .listing-card-style-3 .listing-content,
                 {{WRAPPER}} .listing-card-style-4 .listing-main-container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
		
		$this->add_control(
                'button_box_background_color', [
            'label' => __('Background Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
			'condition' => [
                'listing_card_style' => ['listing-card-style-1', 'listing-card-style-3' , 'listing-card-style-4'],
            ],
            'selectors' => [
                '{{WRAPPER}} .listing-card-style-1 .listing-main-container,
				 {{WRAPPER}} .listing-card-style-2,
				 {{WRAPPER}} .listing-card-style-3 .listing-main-container,
				 {{WRAPPER}} .listing-card-style-4' => 'background-color: {{VALUE}};',
            ],
                ]
        );
		
		$this->add_group_control(
                Group_Control_Border::get_type(), [
            'name' => 'image_border',
				'selector' => '{{WRAPPER}} .listing-card-style-1,
							   {{WRAPPER}} .listing-card-style-2,
							   {{WRAPPER}} .listing-card-style-3,
							   {{WRAPPER}} .listing-card-style-4',
            'separator' => 'before',
                ]
        );

        $this->add_responsive_control(
                'border_radius', [
            'label' => __('Border Radius', CEE_DOMAIN),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%'],
			'devices' => [ 'desktop', 'tablet', 'mobile' ],
            'selectors' => [
                '{{WRAPPER}} .listing-card-style-1,
                 {{WRAPPER}} .listing-card-style-2,
                 {{WRAPPER}} .listing-card-style-3,
                 {{WRAPPER}} .listing-card-style-4' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );
		
		$this->add_group_control(
                Group_Control_Box_Shadow::get_type(), [
            'name' => 'box_shadow',
				'selector' => '{{WRAPPER}} .listing-card-style-1,
							   {{WRAPPER}} .listing-card-style-2,
							   {{WRAPPER}} .listing-card-style-3,
							   {{WRAPPER}} .listing-card-style-4',
                ]
        );
		$this->end_controls_section();

        /*
         * End control style tab for listing card
         */
    }
	
	/**
     * @since 1.0.0
     * @access protected
     */
    protected function get_rating() {
        $settings = $this->get_settings_for_display();
        $rating_scale = (int) $settings['rating_scale'];
        $rating = (float) $settings['rating'] > $rating_scale ? $rating_scale : $settings['rating'];

        return [$rating, $rating_scale];
    }

    /**
     * @since 1.0.0
     * @access protected
     */
    protected function render_stars($icon) {
        $rating_data = $this->get_rating();
        $rating = $rating_data[0];
        $floored_rating = (int) $rating;
        $stars_html = '';

        for ($stars = 1; $stars <= $rating_data[1]; $stars++) {
            if ($stars <= $floored_rating) {
                $stars_html .= '<i class="elementor-star-full">' . $icon . '</i>';
            } elseif ($floored_rating + 1 === $stars && $rating !== $floored_rating) {
                $stars_html .= '<i class="elementor-star-' . ( $rating - $floored_rating ) * 10 . '">' . $icon . '</i>';
            } else {
                $stars_html .= '<i class="elementor-star-empty">' . $icon . '</i>';
            }
        }

        return $stars_html;
    }

    /**
     * Render testimonial card widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @access protected
     */
    protected function render() {

        $settings = $this->get_settings_for_display();


        $rating_data = $this->get_rating();
        $textual_rating = $rating_data[0] . '/' . $rating_data[1];
        $icon = '&#61445;';

        if ('star_fontawesome' === $settings['star_style']) {
            if ('outline' === $settings['unmarked_star_style']) {
                $icon = '&#61446;';
            }
        } elseif ('star_unicode' === $settings['star_style']) {
            $icon = '&#9733;';

            if ('outline' === $settings['unmarked_star_style']) {
                $icon = '&#9734;';
            }
        }

        $this->add_render_attribute('icon_wrapper', [
            'class' => 'elementor-star-rating',
            'title' => $textual_rating,
            'itemtype' => 'http://schema.org/Rating',
            'itemscope' => '',
            'itemprop' => 'reviewRating',
        ]);

        $schema_rating = '<span itemprop="ratingValue" class="elementor-screen-only">' . $textual_rating . '</span>';
        $stars_element = '<div ' . $this->get_render_attribute_string('icon_wrapper') . '>' . $this->render_stars($icon) . ' ' . $schema_rating . '</div>';

        switch ($settings['listing_card_style']) {
            case 'listing-card-style-1':
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/listing-card/elementor-listing-card-1.php';  // Card Style 1
                break;
			case 'listing-card-style-2':
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/listing-card/elementor-listing-card-2.php';  // Card Style 2
                break;
			case 'listing-card-style-3':
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/listing-card/elementor-listing-card-3.php';  // Card Style 3
                break;
			case 'listing-card-style-4':
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/listing-card/elementor-listing-card-4.php';  // Card Style 4
                break;
            default:
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/listing-card/elementor-listing-card-1.php';  // Default Card Style 1
                break;
        }
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new Listing_Card_Elementor_Widget());

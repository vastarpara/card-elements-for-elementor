<?php

namespace Elementor;

if (!defined('ABSPATH'))
    exit;      // Exit if accessed directly

class Tour_Card_Elementor_Widget extends Widget_Base {

    //Function for get the slug of the element name.
    public function get_name() {
        return 'tour-card-elementor-widget';
    }

    //Function for get the name of the element.
    public function get_title() {
        return __('Tour Card', CEE_DOMAIN);
    }

    //Function for get the icon of the element.
    public function get_icon() {
        return 'eicon-tour';
    }

    //Function for include element into the category.
    public function get_categories() {
        return ['card-elements'];
    }

    /*
     * Adding the controls fields for the tour card
     */

    protected function _register_controls() {

        /*
         * Start tour card controls fields
         */
        $this->start_controls_section(
                'section_items_data', array(
            'label' => esc_html__('Tour Card Items', CEE_DOMAIN),
                )
        );


        $this->add_control(
                'tour_card_style', [
            'label' => __('Tour Card Style', CEE_DOMAIN),
            'type' => Controls_Manager::SELECT,
            'options' => [
                'tour-card-style-1' => esc_html__('Card Style 1', CEE_DOMAIN),
                'tour-card-style-2' => esc_html__('Card Style 2', CEE_DOMAIN),
				'tour-card-style-3' => esc_html__('Card Style 3', CEE_DOMAIN),
				'tour-card-style-4' => esc_html__('Card Style 4', CEE_DOMAIN),
				'tour-card-style-5' => esc_html__('Card Style 5', CEE_DOMAIN),
				'tour-card-style-6' => esc_html__('Card Style 6', CEE_DOMAIN),
            ],
            'default' => 'tour-card-style-1',
                ]
        );

        $this->add_control(
                'place_name', [
            'label' => __('Place Name', CEE_DOMAIN),
            'type' => Controls_Manager::TEXT,
            'default' => __('Name', CEE_DOMAIN),
            'placeholder' => __('Enter place name', CEE_DOMAIN),
                ]
        );
		
		$this->add_control(
                'place_image', [
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
                'tour_price', array(
            'label' => esc_html__('Cost', CEE_DOMAIN),
            'type' => Controls_Manager::TEXT,
                )
        );
		
		$this->add_control(
                'tour_days', array(
            'label' => esc_html__('Days', CEE_DOMAIN),
            'type' => Controls_Manager::NUMBER,
			'condition' => [
                'tour_card_style' => ['tour-card-style-1' , 'tour-card-style-2' , 'tour-card-style-5' , 'tour-card-style-6'],
            ],
                )
        );
		
		$this->add_control(
                'tour_person', array(
            'label' => esc_html__('Persons', CEE_DOMAIN),
            'type' => Controls_Manager::NUMBER,
			'condition' => [
                'tour_card_style' => ['tour-card-style-1' , 'tour-card-style-2' , 'tour-card-style-5' , 'tour-card-style-6'],
            ],
                )
        );
		
		$this->add_control(
                'tour_guides', array(
            'label' => esc_html__('Guides', CEE_DOMAIN),
            'type' => Controls_Manager::NUMBER,
			'condition' => [
                'tour_card_style' => ['tour-card-style-1' , 'tour-card-style-2' , 'tour-card-style-5' , 'tour-card-style-6'],
            ],
                )
        );
		
		$this->add_control(
                'display_tour_description', [
            'label' => __('Display Description', CEE_DOMAIN),
            'type' => Controls_Manager::SWITCHER,
            'default' => 'yes',
            'label_on' => __('Show', CEE_DOMAIN),
            'label_off' => __('Hide', CEE_DOMAIN),
                ]
        );
		
		$this->add_control(
                'tour_description', array(
            'label' => esc_html__('Description', CEE_DOMAIN),
            'type' => Controls_Manager::TEXTAREA,
            'condition' => [
                'display_tour_description' => 'yes',
            ],
            'default' => __('Lorem ipsum dolor sit amet, consectetur adipisci ng elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', CEE_DOMAIN),
                )
        );
		
		$this->add_control(
                'button_text', [
            'label' => __('Button Text', CEE_DOMAIN),
            'type' => Controls_Manager::TEXT,
			'condition' => [
                'tour_card_style' => ['tour-card-style-1' , 'tour-card-style-2'],
            ],
            'default' => __('Book now', CEE_DOMAIN),
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
         * End tour card controls fields
         */

        /*
         * Start control style tab for tour card
         * Start name control style
         */
        $this->start_controls_section(
                'section_tour_name', [
            'label' => __('Name', CEE_DOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_responsive_control(
                'name_text_align', [
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
				 '{{WRAPPER}} .elementor-tour-name-wrapper' => 'text-align: {{VALUE}};',
            ],
                ]
        );

        $this->add_control(
                'name_color', [
            'label' => __('Text Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .elementor-tour-name-wrapper' => 'color: {{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'typography_name',
            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .elementor-tour-name-wrapper',
                ]
        );

        $this->end_controls_section();

        /*
         * Start position control style
         */
        $this->start_controls_section(
                'section_tour_cost', [
            'label' => __('Cost', CEE_DOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_responsive_control(
                'type_text_align', [
            'label' => __('Alignment', CEE_DOMAIN),
            'type' => Controls_Manager::CHOOSE,
			'condition' => [
                'tour_card_style' => ['tour-card-style-1' , 'tour-card-style-2' , 'tour-card-style-6'],
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
                '{{WRAPPER}} .elementor-tour-price-wrapper' => 'text-align: {{VALUE}};',
            ],
                ]
        );

        $this->add_control(
                'position_color', [
            'label' => __('Text Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .elementor-tour-price-wrapper' => 'color: {{VALUE}};',
            ],
                ]
        );
		
		$this->add_control(
                'position_background_color', [
            'label' => __('Background Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
			'condition' => [
                'tour_card_style' => ['tour-card-style-3'],
            ],
            'selectors' => [
                '{{WRAPPER}} .tour-content-price' => 'background-color: {{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'typography_position',
            'scheme' => Scheme_Typography::TYPOGRAPHY_2,
            'selector' => '{{WRAPPER}} .elementor-tour-price-wrapper',
                ]
        );

        $this->end_controls_section();
		
		/*
         * Start details control style
         */
		 $this->start_controls_section(
                'section_tour_details', [
            'label' => __('Details', CEE_DOMAIN),
			'condition' => [
                'tour_card_style' => ['tour-card-style-1' , 'tour-card-style-2' , 'tour-card-style-5' , 'tour-card-style-6'],
            ],
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );
		
		$this->add_control(
                'icon_color', [
            'label' => __('Icon Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .tour-detail-icon' => 'color: {{VALUE}};',
            ],
                ]
        );
		
		$this->add_control(
                'details_text_color', [
            'label' => __('Text Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .tour-detail-text' => 'color: {{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'typography_detais_text',
            'selector' => '{{WRAPPER}} .tour-detail-text',
                ]
        );
		
		$this->add_control(
                'details_background_color', [
            'label' => __('Background Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
			'condition' => [
                'tour_card_style' => ['tour-card-style-1'],
            ],
            'selectors' => [
                '{{WRAPPER}} .tour-detail-ul' => 'background-color: {{VALUE}};',
            ],
                ]
        );

		$this->end_controls_section();

        /*
         * Start desription control style
         */
        $this->start_controls_section(
                'section_tour_description', [
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
                '{{WRAPPER}} .elementor-tour-description-wrapper' => 'text-align: {{VALUE}};',
            ],
                ]
        );

        $this->add_control(
                'descriptsion_color', [
            'label' => __('Text Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .elementor-tour-description-wrapper' => 'color: {{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'typography_description',
            'scheme' => Scheme_Typography::TYPOGRAPHY_3,
            'selector' => '{{WRAPPER}} .elementor-tour-description-wrapper',
                ]
        );

        $this->end_controls_section();
		
		/*
         * Start control style tab for tour card
         * Start name control style
         */
        $this->start_controls_section(
                'section_tour_button', [
            'label' => __('Button', CEE_DOMAIN),
			'condition' => [
                'tour_card_style' => ['tour-card-style-1' , 'tour-card-style-2'],
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
				 '{{WRAPPER}} .tour-button' => 'text-align: {{VALUE}};',
            ],
                ]
        );

        $this->add_control(
                'button_text_color', [
            'label' => __('Text Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .tour-button a' => 'color: {{VALUE}};',
            ], 
                ]
        );
		
		$this->add_control(
                'button_background_color', [
            'label' => __('Background Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .tour-button a' => 'background-color: {{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'typography_button_text',
            'scheme' => Scheme_Typography::TYPOGRAPHY_4,
            'selector' => '{{WRAPPER}} .tour-button a',
                ]
        );

        $this->end_controls_section();
		
		$this->start_controls_section(
                'section_tour_contentbox', [
            'label' => __('Box', CEE_DOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );
		
		$this->add_control(
                'button_box_background_color', [
            'label' => __('Background Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .tour-card-style-1 .container,
				 {{WRAPPER}} .tour-card-style-2 .container,
				 {{WRAPPER}} .tour-card-style-3 .container,
				 {{WRAPPER}} .tour-card-style-6 .container,
				 {{WRAPPER}} .tour-card-style-4 .container-inner,
				 {{WRAPPER}} .tour-card-style-5 .content-price-top,
				 {{WRAPPER}} .tour-card-style-5 .container-inner' => 'background-color: {{VALUE}};',
            ],
                ]
        );
		
		$this->end_controls_section();

        /*
         * End control style tab for tour card
         */
    }

    /**
     * Render tour card widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @access protected
     */
    protected function render() {

        $settings = $this->get_settings_for_display();

        switch ($settings['tour_card_style']) {
            case 'tour-card-style-1':
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/tour-card/elementor-tour-card-1.php';  // Card Style 1
                break;
			case 'tour-card-style-2':
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/tour-card/elementor-tour-card-2.php';  // Card Style 2
                break;
			case 'tour-card-style-3':
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/tour-card/elementor-tour-card-3.php';  // Card Style 3
                break;
			case 'tour-card-style-4':
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/tour-card/elementor-tour-card-4.php';  // Card Style 4
                break;
			case 'tour-card-style-5':
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/tour-card/elementor-tour-card-5.php';  // Card Style 5
                break;
			case 'tour-card-style-6':
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/tour-card/elementor-tour-card-6.php';  // Card Style 6
                break;
            default:
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/tour-card/elementor-tour-card-1.php';  // Default Card Style 1
                break;
        }
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new Tour_Card_Elementor_Widget());

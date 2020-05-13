<?php

namespace Elementor;

if (!defined('ABSPATH'))
    exit;      // Exit if accessed directly

class Recipe_Card_Elementor_Widget extends Widget_Base {

    //Function for get the slug of the element name.
    public function get_name() {
        return 'recipe-card-elementor-widget';
    }

    //Function for get the name of the element.
    public function get_title() {
        return __('Recipe Card', CEE_DOMAIN);
    }

    //Function for get the icon of the element.
    public function get_icon() {
        return 'eicon-recipe';
    }

    //Function for include element into the category.
    public function get_categories() {
        return ['card-elements'];
    }

    /*
     * Adding the controls fields for the recipe card
     */

    protected function _register_controls() {

        /*
         * Start recipe card controls fields
         */
        $this->start_controls_section(
                'section_items_data', array(
            'label' => esc_html__('Recipe Card Items', CEE_DOMAIN),
                )
        );


        $this->add_control(
                'recipe_card_style', [
            'label' => __('Recipe Card Style', CEE_DOMAIN),
            'type' => Controls_Manager::SELECT,
            'options' => [
                'recipe-card-style-1' => esc_html__('Card Style 1', CEE_DOMAIN),
                'recipe-card-style-2' => esc_html__('Card Style 2', CEE_DOMAIN),
				'recipe-card-style-3' => esc_html__('Card Style 3', CEE_DOMAIN),
				'recipe-card-style-4' => esc_html__('Card Style 4', CEE_DOMAIN),
				'recipe-card-style-5' => esc_html__('Card Style 5', CEE_DOMAIN),
            ],
            'default' => 'recipe-card-style-1',
                ]
        );

        $this->add_control(
                'dish_name', [
            'label' => __('Dish Name', CEE_DOMAIN),
            'type' => Controls_Manager::TEXT,
            'default' => __('Name', CEE_DOMAIN),
            'placeholder' => __('Enter dish name', CEE_DOMAIN),
                ]
        );
		
		$this->add_control(
                'dish_type', [
            'label' => __('Dish Type', CEE_DOMAIN),
            'type' => Controls_Manager::TEXT,
            'default' => __('Type', CEE_DOMAIN),
            'placeholder' => __('Dessert,Salad,etc...', CEE_DOMAIN),
                ]
        );
		
		$this->add_control(
                'dish_image', [
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
                'recipe_minutes', array(
            'label' => esc_html__('Minutes', CEE_DOMAIN),
            'type' => Controls_Manager::NUMBER,
			'condition' => [
                'recipe_card_style' => ['recipe-card-style-1' , 'recipe-card-style-2', 'recipe-card-style-3', 'recipe-card-style-4'],
            ],
                )
        );
		
		$this->add_control(
                'recipe_servings', array(
            'label' => esc_html__('Servings', CEE_DOMAIN),
            'type' => Controls_Manager::NUMBER,
			'condition' => [
                'recipe_card_style' => ['recipe-card-style-1' , 'recipe-card-style-2', 'recipe-card-style-3', 'recipe-card-style-4'],
            ],
                )
        );
		
		$this->add_control(
                'recipe_ingredients', array(
            'label' => esc_html__('Ingredients', CEE_DOMAIN),
            'type' => Controls_Manager::NUMBER,
			'condition' => [
                'recipe_card_style' => ['recipe-card-style-1' , 'recipe-card-style-2', 'recipe-card-style-3', 'recipe-card-style-4'],
            ],
                )
        );
		
		$this->add_control(
                'display_recipe_description', [
            'label' => __('Display Recipe Description', CEE_DOMAIN),
            'type' => Controls_Manager::SWITCHER,
            'default' => 'yes',
            'label_on' => __('Show', CEE_DOMAIN),
            'label_off' => __('Hide', CEE_DOMAIN),
                ]
        );
		
		$this->add_control(
                'recipe_description', array(
            'label' => esc_html__('Description', CEE_DOMAIN),
            'type' => Controls_Manager::TEXTAREA,
            'condition' => [
                'display_recipe_description' => 'yes',
            ],
            'default' => __('Lorem ipsum dolor sit amet, consectetur adipisci ng elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', CEE_DOMAIN),
                )
        );
		
		$this->add_control(
                'button_text', [
            'label' => __('Button Text', CEE_DOMAIN),
            'type' => Controls_Manager::TEXT,
			'condition' => [
                'recipe_card_style' => ['recipe-card-style-1' , 'recipe-card-style-2'],
            ],
            'default' => __('View Recipe', CEE_DOMAIN),
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
         * End recipe card controls fields
         */

        /*
         * Start control style tab for recipe card
         * Start name control style
         */
        $this->start_controls_section(
                'section_recipe_name', [
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
				 '{{WRAPPER}} .elementor-recipe-name-wrapper' => 'text-align: {{VALUE}};',
            ],
                ]
        );

        $this->add_control(
                'name_color', [
            'label' => __('Text Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .elementor-recipe-name-wrapper' => 'color: {{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'typography_name',
            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .elementor-recipe-name-wrapper',
                ]
        );

        $this->end_controls_section();

        /*
         * Start position control style
         */
        $this->start_controls_section(
                'section_recipe_type', [
            'label' => __('Type', CEE_DOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_responsive_control(
                'type_text_align', [
            'label' => __('Alignment', CEE_DOMAIN),
            'type' => Controls_Manager::CHOOSE,
			'condition' => [
                'recipe_card_style' => ['recipe-card-style-1' , 'recipe-card-style-2', 'recipe-card-style-3'],
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
                '{{WRAPPER}} .elementor-recipe-type-wrapper' => 'text-align: {{VALUE}};',
            ],
                ]
        );

        $this->add_control(
                'position_color', [
            'label' => __('Text Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .elementor-recipe-type-wrapper' => 'color: {{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'typography_position',
            'scheme' => Scheme_Typography::TYPOGRAPHY_2,
            'selector' => '{{WRAPPER}} .elementor-recipe-type-wrapper',
                ]
        );

        $this->end_controls_section();
		
		/*
         * Start details control style
         */
		 $this->start_controls_section(
                'section_recipe_details', [
            'label' => __('Details', CEE_DOMAIN),
			'condition' => [
                'recipe_card_style' => ['recipe-card-style-1' , 'recipe-card-style-2', 'recipe-card-style-3', 'recipe-card-style-4'],
            ],
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );
		
		$this->add_control(
                'qty_color', [
            'label' => __('Qty Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .recipe-detail-no' => 'color: {{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'typography_Qty',
            'selector' => '{{WRAPPER}} .recipe-detail-no',
                ]
        );
		
		$this->add_control(
                'details_text_color', [
            'label' => __('Text Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .recipe-detail-text' => 'color: {{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'typography_detais_text',
            'selector' => '{{WRAPPER}} .recipe-detail-text',
                ]
        );
		
		$this->add_control(
                'details_background_color', [
            'label' => __('Background Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
			'condition' => [
                'recipe_card_style' => ['recipe-card-style-4'],
            ],
            'selectors' => [
                '{{WRAPPER}} .bg-color' => 'background: {{VALUE}};',
            ],
                ]
        );

		$this->end_controls_section();

        /*
         * Start desription control style
         */
        $this->start_controls_section(
                'section_recipe_description', [
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
                '{{WRAPPER}} .elementor-recipe-description-wrapper' => 'text-align: {{VALUE}};',
            ],
                ]
        );

        $this->add_control(
                'description_color', [
            'label' => __('Text Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .elementor-recipe-description-wrapper' => 'color: {{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'typography_description',
            'scheme' => Scheme_Typography::TYPOGRAPHY_3,
            'selector' => '{{WRAPPER}} .elementor-recipe-description-wrapper',
                ]
        );

        $this->end_controls_section();
		
		/*
         * Start control style tab for recipe card
         * Start name control style
         */
        $this->start_controls_section(
                'section_recipe_button', [
            'label' => __('Button', CEE_DOMAIN),
			'condition' => [
                'recipe_card_style' => ['recipe-card-style-1' , 'recipe-card-style-2'],
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
				 '{{WRAPPER}} .recipe-button' => 'text-align: {{VALUE}};',
            ],
                ]
        );

        $this->add_control(
                'button_text_color', [
            'label' => __('Text Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .recipe-button a' => 'color: {{VALUE}};',
            ], 
                ]
        );
		
		$this->add_control(
                'button_background_color', [
            'label' => __('Background Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .recipe-button a' => 'background-color: {{VALUE}};',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'typography_button_text',
            'scheme' => Scheme_Typography::TYPOGRAPHY_4,
            'selector' => '{{WRAPPER}} .recipe-button a',
                ]
        );

        $this->end_controls_section();
		
		$this->start_controls_section(
                'section_recipe_contentbox', [
            'label' => __('Box', CEE_DOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );
		
		$this->add_control(
                'button_box_background_color', [
            'label' => __('Background Color', CEE_DOMAIN),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .recipe-card-style-1 .container,
				 {{WRAPPER}} .recipe-card-style-2 .container,
				 {{WRAPPER}} .recipe-card-style-3 .container,
				 {{WRAPPER}} .recipe-card-style-4 .container,
				 {{WRAPPER}} .recipe-card-style-5 .dish-description' => 'background-color: {{VALUE}};',
            ],
                ]
        );
		
		$this->end_controls_section();

        /*
         * End control style tab for recipe card
         */
    }

    /**
     * Render recipe card widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @access protected
     */
    protected function render() {

        $settings = $this->get_settings_for_display();

        switch ($settings['recipe_card_style']) {
            case 'recipe-card-style-1':
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/recipe-card/elementor-recipe-card-1.php';  // Card Style 1
                break;
            case 'recipe-card-style-2':
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/recipe-card/elementor-recipe-card-2.php';  // Card Style 2
                break;
			case 'recipe-card-style-3':
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/recipe-card/elementor-recipe-card-3.php';  // Card Style 3
                break;
			case 'recipe-card-style-4':
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/recipe-card/elementor-recipe-card-4.php';  // Card Style 4
                break;
			case 'recipe-card-style-5':
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/recipe-card/elementor-recipe-card-5.php';  // Card Style 5
                break;
            default:
                include CARD_ELEMENTS_ELEMENTOR_PATH . 'include/recipe-card/elementor-recipe-card-1.php';  // Default Card Style 1
                break;
        }
    }

}

Plugin::instance()->widgets_manager->register_widget_type(new Recipe_Card_Elementor_Widget());

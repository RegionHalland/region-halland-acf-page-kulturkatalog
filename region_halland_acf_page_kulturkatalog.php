<?php

	/**
	 * @package Region Halland ACF Page Kulturkatalog
	 */
	/*
	Plugin Name: Region Halland ACF Page Kulturkatalog
	Description: ACF-fält för extra fält nederst på en kultur-sida
	Version: 1.2.0
	Author: Roland Hydén
	License: MIT
	Text Domain: regionhalland
	*/

	// vid 'init', anropa funktionen region_halland_register_utbildning()
	add_action( 'init', 'region_halland_register_kulturkatalog' );

	// Denna funktion registrerar en ny post_type och gör den synlig i wp-admin
	function region_halland_register_kulturkatalog() {
		
		// Vilka labels denna post_type ska ha
		$labels = array(
		        'name'                  => _x( 'Kulturkatalog', 'Post type general name', 'textdomain' ),
		        'singular_name'         => _x( 'Kulturkatalog', 'Post type singular name', 'textdomain' ),
		        'menu_name'             => _x( 'Kulturkatalog', 'Admin Menu text', 'textdomain' ),
		        'add_new'               => __( 'Lägg till ny', 'textdomain' ),
        		'add_new_item'          => __( 'Lägg till ny', 'textdomain' ),
        		'edit_item'          	=> __( 'Editera', 'textdomain' )
		    );
		
		// Inställningar för denna post_type 
	    $args = array(
	        'labels' => $labels,
	        'rewrite' => array('slug' => 'kulturkatalog'),
			'show_ui' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'public' => true,
			'query_var' => false,
			'menu_icon' => 'dashicons-megaphone',
	        'supports' => array( 'title', 'editor', 'author', 'thumbnail')
	    );

	    // Registrera post_type
	    register_post_type('kulturkatalog', $args);
	    
	}

	// Anropa function om ACF är installerad
	add_action('acf/init', 'my_acf_add_page_kultutkatalog_field_groups');

	// Function för att lägga till "field groups"
	function my_acf_add_page_kultutkatalog_field_groups() {

		// Om funktionen existerar
		if (function_exists('acf_add_local_field_group')):

			// Skapa formlärfält
			acf_add_local_field_group(array(
			    
			    'key' => 'group_1000029',
			    'title' => 'Kultutkatalog',
			    'fields' => array(
			        0 => array(
			        	'key' => 'field_1000030',
			            'label' => __('Programtyp', 'regionhalland'),
			            'name' => 'name_1000031',
			            'type' => 'select',
			            'instructions' => __('Välj en programtyp.', 'regionhalland'),
			            'required' => 1,
			            'conditional_logic' => array(
			                0 => array(
			                    0 => array(
			                        'field' => 'field_1000032',
			                        'operator' => '!=',
			                        'value' => '1',
			                    ),
			                ),
			            ),
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'choices' => array(
			                1 => __('Dans', 'regionhalland'),
			                2 => __('Film', 'regionhalland'),
			                3 => __('Konst', 'regionhalland'),
			                4 => __('Kulturarv', 'regionhalland'),
			                5 => __('Musik', 'regionhalland'),
			                6 => __('Slöjd', 'regionhalland'),
			                7 => __('Teater', 'regionhalland'),
			            ),
			            'default_value' => array(
			            ),
			            'allow_null' => 0,
			            'multiple' => 1,
			            'ui' => 0,
			            'ajax' => 0,
			            'return_format' => 'array',
			            'placeholder' => '',
			        ),
			        1 => array(
			        	'key' => 'field_1000033',
			            'label' => __('Målgrupp', 'regionhalland'),
			            'name' => 'name_1000034',
			            'type' => 'textarea',
			            'instructions' => __('Beskriv målgrupp. Max 200 tecken.', 'regionhalland'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => __('', 'regionhalland'),
			            'maxlength' => 200,
			            'rows' => 2,
			            'new_lines' => '',
			        ),
			        2 => array(
			        	'key' => 'field_1000035',
			            'label' => __('Publik', 'regionhalland'),
			            'name' => 'name_1000036',
			            'type' => 'textarea',
			            'instructions' => __('Beskriv publik. Max 200 tecken.', 'regionhalland'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => __('', 'regionhalland'),
			            'maxlength' => 200,
			            'rows' => 2,
			            'new_lines' => '',
			        ),
			        3 => array(
			        	'key' => 'field_1000037',
			            'label' => __('Speltid', 'regionhalland'),
			            'name' => 'name_1000038',
			            'type' => 'textarea',
			            'instructions' => __('Beskriv speltid. Max 200 tecken.', 'regionhalland'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => __('', 'regionhalland'),
			            'maxlength' => 200,
			            'rows' => 2,
			            'new_lines' => '',
			        ),
			        4 => array(
			        	'key' => 'field_1000039',
			            'label' => __('Lokal', 'regionhalland'),
			            'name' => 'name_1000040',
			            'type' => 'textarea',
			            'instructions' => __('Beskriv lokal. Max 200 tecken.', 'regionhalland'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => __('', 'regionhalland'),
			            'maxlength' => 200,
			            'rows' => 2,
			            'new_lines' => '',
			        ),
			        5 => array(
			        	'key' => 'field_1000041',
			            'label' => __('Turnéperiod', 'regionhalland'),
			            'name' => 'name_1000042',
			            'type' => 'textarea',
			            'instructions' => __('Beskriv turnéperiod. Max 200 tecken.', 'regionhalland'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => __('', 'regionhalland'),
			            'maxlength' => 200,
			            'rows' => 2,
			            'new_lines' => '',
			        ),
			        6 => array(
			        	'key' => 'field_1000043',
			            'label' => __('Pris', 'regionhalland'),
			            'name' => 'name_1000044',
			            'type' => 'textarea',
			            'instructions' => __('Beskriv pris. Max 200 tecken.', 'regionhalland'),
			            'required' => 0,
			            'conditional_logic' => 0,
			            'wrapper' => array(
			                'width' => '',
			                'class' => '',
			                'id' => '',
			            ),
			            'default_value' => '',
			            'placeholder' => __('', 'regionhalland'),
			            'maxlength' => 200,
			            'rows' => 2,
			            'new_lines' => '',
			        ),
			    ),
			    'location' => array(
			        0 => array(
			            0 => array(
			                'param' => 'post_type',
			                'operator' => '==',
			                'value' => 'kulturkatalog',
			            ),
			        )
			    ),
			    'menu_order' => 0,
			    'position' => 'normal',
			    'style' => 'default',
			    'label_placement' => 'top',
			    'instruction_placement' => 'label',
			    'hide_on_screen' => '',
			    'active' => 1,
			    'description' => '',
			));

		endif;

	}

	// Returnera namnen på vald(a) typ
	function get_region_halland_acf_page_kulturkatalog_type_labels() {
		$field_object = get_field_object('field_1000030');;
		$field_values = $field_object['value'];
		$myFieldLabels = array();
		foreach ($field_values as $value) {
			array_push($myFieldLabels, array(
	           'label'   => $value['label']
	        ));
		}
		return $myFieldLabels;
	}

	// Returnera målgrupp
	function get_region_halland_acf_page_kulturkatalog_malgrupp() {
		return get_field('name_1000034');
	}

	// Returnera publik
	function get_region_halland_acf_page_kulturkatalog_publik() {
		return get_field('name_1000036');
	}
	
	// Returnera speltid
	function get_region_halland_acf_page_kulturkatalog_speltid() {
		return get_field('name_1000038');
	}

	// Returnera lokal
	function get_region_halland_acf_page_kulturkatalog_lokal() {
		return get_field('name_1000040');
	}

	// Returnera turnéperiod
	function get_region_halland_acf_page_kulturkatalog_turne_period() {
		return get_field('name_1000042');
	}

	// Returnera pris
	function get_region_halland_acf_page_kulturkatalog_pris() {
		return get_field('name_1000044');
	}

	function get_region_halland_acf_page_kulturkatalog_items($myAntal = 3) {
		
		// Preparerar array för att hämta ut nyheter
		$args = array( 
			'post_type' => 'kulturkatalog',
			'posts_per_page' => $myAntal,
		);

		// Hämta valda nyheter
		$myPages = get_posts($args);
		
		foreach ($myPages as $page) {

			// Lägg till sidans url 	
			$page->url = get_permalink($page->ID);

			// Bild
			$page->image = get_the_post_thumbnail($page->ID);
			$page->image_url = get_the_post_thumbnail_url($page->ID);
			
			// Publicerad datum
			$page->date = get_the_date('Y-m-d', $page->ID);

			// Typ, dvs labels
			$field_object = get_field_object('field_1000030', $page->ID);;
			$field_values = $field_object['value'];
			$myFieldLabels = array();
			foreach ($field_values as $value) {
				array_push($myFieldLabels, array(
		           'label'   => $value['label']
		        ));
			}
			$page->labels = $myFieldLabels;

			// Målgrupp
			$page->malgrupp = get_field('name_1000034', $page->ID);

			// Publik
			$page->publik = get_field('name_1000036', $page->ID);

			// Speltid
			$page->speltid = get_field('name_1000038', $page->ID);
	        
	        // Lokal
	        $page->lokal = get_field('name_1000040', $page->ID);

	        // Period
	        $page->period = get_field('name_1000042', $page->ID);

	        // Pris
	        $page->pris = get_field('name_1000044', $page->ID);
		
		}
		
		// Returnera array med alla poster
		return $myPages;

	}
	
	// Metod som anropas när pluginen aktiveras
	function region_halland_acf_page_kulturkatalog_activate() {
		
		// Vi aktivering, registrera post_type "utbildning"
		region_halland_register_kulturkatalog();

		// Tala om för wordpress att denna post_type finns
		// Detta gör att permalink fungerar
	    flush_rewrite_rules();
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_acf_page_kulturkatalog_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_acf_page_kulturkatalog_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_acf_page_kulturkatalog_deactivate');

?>
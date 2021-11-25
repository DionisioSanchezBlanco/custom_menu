function hide_menu(){
 global $current_user;
 $user_id = get_current_user_id();
 // echo "user:".$user_id;   // Use this to find your user id quickly

    if(is_admin() && ($user_id == '14' || $user_id == '18')){

        // To remove the whole Appearance admin menu you would use;

        remove_menu_page( 'themes.php' );

        // To remove the theme editor and theme options submenus from
        // the Appearance admin menu, as well as the main 'Themes'
        // submenu you would use 

        remove_menu_page( 'index.php' );
        remove_submenu_page( 'index.php', 'update-core.php' );

        remove_submenu_page( 'themes.php', 'themes.php' );
        remove_submenu_page( 'themes.php', 'theme-editor.php' );
        remove_submenu_page( 'themes.php', 'theme_options' );

        remove_menu_page( 'users.php' );
        remove_submenu_page( 'users.php', 'user-new.php' );
        remove_submenu_page( 'users.php', 'profile.php' );

		//Snippets
		remove_menu_page( 'snippets' );
		
		//Swatches
		remove_menu_page( 'woo-variation-swatches-settings' );
		
		//Templates
		remove_menu_page( 'edit.php?post_type=elementor_library' );
		
		//GPDR
		remove_menu_page( 'edit.php?post_type=cookielawinfo' );
		
		//Woolentor
		remove_menu_page( 'woolentor_page' );
		
		//Stripe Gateway
		remove_menu_page( 'wc_stripe' );
		
		//Pimwick Plugins
		remove_menu_page( 'pimwick' );
		
		//WP Mail SMTP
        remove_menu_page( 'wp-mail-smtp' );
		
		//Elementor
		remove_menu_page( 'elementor' );
		
		//Elements
		remove_menu_page( 'envato-elements' );

		//Sucuri
		remove_menu_page( 'sucuriscan' );
		
		//Comments
		remove_menu_page( 'edit-comments.php' );
		
		//Instagram feed
		remove_menu_page( 'sb-instagram-feed' );
		
		//Cookie Law Info
		remove_menu_page( 'cookie-law-info' );

		//Custom product tabs
        remove_menu_page( 'yikes-woo-settings' );
		
		//Hidden admin menu
		remove_menu_page( 'hide-admin-menu' );
		
		//Yoast SEO
		remove_menu_page( 'wpseo_dashboard' );

        //// Remove LMS Menu
        remove_menu_page( 'admin.php?page=parent' );

        remove_menu_page( 'tools.php' );                  //Tools
        remove_menu_page( 'options-general.php' );        //Settings

         remove_menu_page( 'plugins.php' );        //Plugins

          // remove_menu_page( 'edit.php?post_type=product' );

//This line displays the values for each menu item   
//echo '<pre>' . print_r( $GLOBALS[ 'menu' ], TRUE) . '</pre>';

    }
}

add_action('admin_init', 'hide_menu');


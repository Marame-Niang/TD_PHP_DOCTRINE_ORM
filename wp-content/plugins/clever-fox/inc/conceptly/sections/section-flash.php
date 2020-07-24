<?php
		if ( ! function_exists( 'conceptly_lite_info' ) ) :
		function conceptly_lite_info() {
		$hide_show_info			= get_theme_mod('hide_show_info','1');
		$info_title				= get_theme_mod('info_title','10/45 Beer Street Heaven');
		$info_description		= get_theme_mod('info_description','California Floor, USA 1208');
		$info_title2			= get_theme_mod('info_title2','+001-2156-2459');
		$info_description2		= get_theme_mod('info_description2','example@mail.com');	
		$info_title3			= get_theme_mod('info_title3','Free Delivery');
		$info_description3		= get_theme_mod('info_description3','On order over $57.00'); 
		$infos_first_icon_setting= get_theme_mod('infos_first_icon_setting','fa-pencil'); 
		$infos_second_icon_setting= get_theme_mod('infos_second_icon_setting','fa-refresh'); 
		$infos_third_icon_setting= get_theme_mod('infos_third_icon_setting','fa-home'); 
?>			
<!-- Start: Contact
    ============================= -->
<?php if($hide_show_info == '1') { ?>
    <section id="contact">
        <div class="container contact-wrapper text-center text-lg-left">
            <div class="">
                <div class="row">
                    <div class="col-md-4 col-sm-6 single-contact info-first">
						<i class="fa <?php echo esc_attr($infos_first_icon_setting);?>"></i>
                        <p><b><?php echo esc_attr( $info_title ); ?></b><br> <span class="info-first-desc"><?php echo esc_attr( $info_description );?></span> </p>
                    </div>
					
                    <div class="col-md-4 col-sm-6 single-contact info-second">
						<i class="fa <?php echo esc_html($infos_second_icon_setting);?>"></i>
                        <p><b><?php echo esc_attr( $info_title2 ); ?></b><br><span class="info-second-desc"><?php echo esc_attr( $info_description2 ); ?></span></p>
                    </div>
					
                    <div class="col-md-4 col-sm-6 single-contact info-third">
						<i class="fa <?php echo esc_html($infos_third_icon_setting);?>"></i>
                        <p><b><?php echo esc_attr( $info_title3 ); ?></b><br><span class="info-third-desc"><?php echo esc_attr( $info_description3 ); ?></span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
	}
} endif; ?>
	<?php
	if ( function_exists( 'conceptly_lite_info' ) ) {
		$section_priority = apply_filters( 'conceptly_section_priority', 12, 'conceptly_lite_info' );
		add_action( 'conceptly_sections', 'conceptly_lite_info', absint( $section_priority ) );
	}
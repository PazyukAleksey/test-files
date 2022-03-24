<?php
/*
Template Name: Success Cases
 */

get_header();
?>
<section class="first-screen">
	<div class="container">
		<div class="first-screen__wrapper">
			<div class="first-screen__content-item">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
                }
                ?>
				 <h1><?php echo get_post_meta( get_the_ID(), 'success_cases_main-title', true ) ?></h1>
				<div class="first-screen__content-description"><?php echo get_post_meta( get_the_ID(), 'success_cases_main-title-description', true ) ?></div>
				<div class="first-screen__content-btn-wrapper">
					<a href="<?php echo get_post_meta( get_the_ID(), 'success_cases_first-screen-btn-url', true ) ?>" class="first-screen__content-btn btn"><?php echo get_post_meta( get_the_ID(), 'success_cases_first-screen-btn-text', true ) ?></a>
				</div>
			</div>
			<div class="first-screen__content-item first-screen__content-img-wrapper">
				<img src="<?php echo get_post_meta( get_the_ID(), 'success_cases_first-screen-img-url', true ) ?>" alt="First screen image" class="first-screen__content-img" width="677" height="491">
			</div>
		</div>
    </div>
		<div class="first-screen__slider-wrapper swiper">
			<ul class="first-screen__slider-list swiper-wrapper">
                <?php
                    $sections = carbon_get_the_post_meta( 'slider' );
                    foreach ($sections as $key => $value){
                ?>
				<li class="first-screen__slider-item swiper-slide">
					<div class="first-screen__slider-img-wrapper">
						<img src="<?php echo wp_get_original_image_url( $value['slider_main_image'] ); ?>" alt="<?php echo $value['slider_title']; ?>" class="first-screen__slider-img" width="1219" height="450">
					</div>
					<div class="first-screen__slider-content-wrapper">
						<div class="first-screen__slider-logo-wrapper">
                            <?php echo $value['slider_svg']; ?>
						</div>
						<p class="first-screen__slider-title"><?php echo $value['slider_title']; ?></p>
						<p class="first-screen__slider-description">
                            <?php echo $value['slider_description']; ?>
						</p>
						<p class="first-screen__slider-author">
							<span class="first-screen__slider-name"><?php echo $value['slider_author']; ?></span> | <span class="first-screen__slider-profession"><?php echo $value['slider_position']; ?></span>
						</p>
					</div>
				</li>
                <?php
                    }
                ?>
			</ul>
            <div class="first-screen__dots-wrapper swiper">
                <ul class="first-screen__dots-list swiper-wrapper">
                    <?php
                    $sections = carbon_get_the_post_meta( 'slider' );
                    foreach ($sections as $key => $value){
                        ?>
                    <li class="first-screen__dots-item swiper-slide">
                        <div class="first-screen__dots-img-wrapper">
                            <img src="<?php echo wp_get_original_image_url($value['slider_small_image']); ?>" alt="Dots item" height="115" width="162">
                        </div>
                        <p class="first-screen__dots-description"><?php echo $value['slider_small_title']; ?></p>
                    </li>

                    <?php } ?>
                </ul>
            </div>
            <div class="swiper-button-next">
            </div>
            <div class="swiper-button-prev">
            </div>
		</div>
</section>
<section class="testimonials">
    <div class="container">
        <h2><?php echo get_post_meta( get_the_ID(), 'success_cases_testimonials-title', true ) ?></h2>
        <div class="testimonials-list__wrapper">
            <div class="testimonials-item__wrapper">
                <div class="testimonials-item">
                    <h3>MetaMinder is clearly a pioneer in imagining a mobile LMS</h3>
                    <p class="testimonials-description">
                        While its end-users are typically corporations, the platform and its APIs turned out to be so flexible that we, as a corporate training provider, were able to use EdApp as our primary publishing platform.
                    </p>
                    <div class="testimonials-author__wrapper">
                        <img src="/images/success-cases/avatar-men.webp"  alt="avatar-men"  class="testimonials-author__avatar" width="65" height="78">
                        <div class="testimonials-author__info">
                            <p class="testimonials-author__info-name">Martin Olds</p>
                            <div class="testimonials-author__info-profession-wrapper">
                                <a href="https://www.linkedin.com/" rel="nofollow"  class="testimonials-author__info-linked-in">
                                    <img src="/images/success-cases/linkedin-icon.webp" alt="avatar" class="testimonials-author__info-linked-in-img" width="20" height="22">
                                </a>
                                <p class="testimonials-author__info-profession">
                                    Chief Information Officer | Bookstime
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials-item__wrapper">
                <div class="testimonials-item">
                    <h3>MetaMinder’s mobile-first platform is just what our workforce needs.</h3>
                    <p class="testimonials-description">During this uncertain period COVID-19, the MetaMinder platform has supported Campari to maintain and even grow its world-class education through invaluable storytelling, product knowledge, and soft skills.
                        I was able to easily pick up the platform to author courseware and get it out to our Camparistas in a matter of days. Having mobile-accessible content allows for Campari Academy Online’s success to continue, despite the obvious challenges that COVID-19 has brought on.</p>
                    <div class="testimonials-author__wrapper">
                        <img src="/images/success-cases/avatar-girl.webp" alt="avatar girl" class="testimonials-author__avatar" width="65" height="78">
                        <div class="testimonials-author__info">
                            <p class="testimonials-author__info-name">Ana Shelton-Agar</p>
                            <div class="testimonials-author__info-profession-wrapper">
                                <a href="https://www.linkedin.com/" rel="nofollow" class="testimonials-author__info-linked-in">
                                    <img src="/images/success-cases/linkedin-icon.webp" alt="avatar" class="testimonials-author__info-linked-in-img" width="20" height="22">
                                </a>
                                <p class="testimonials-author__info-profession">General Manager | Eco Sober Houses</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials-item__wrapper">
                <div class="testimonials-item">
                    <h3>Interactive lessons that staff love taking</h3>
                    <p class="testimonials-description">In no time at all, we put together a program for our staff and they were able to complete their MetaMinder courses. That was a great process and we got training out there very, very quickly.</p>
                    <div class="testimonials-author__wrapper">
                        <img src="/images/success-cases/avatar-women.webp" alt="avatar women" class="testimonials-author__avatar" width="65" height="78">
                        <div class="testimonials-author__info">
                            <p class="testimonials-author__info-name">Laura Higgins</p>
                            <div class="testimonials-author__info-profession-wrapper">
                                <a href="https://www.linkedin.com/" rel="nofollow" class="testimonials-author__info-linked-in">
                                    <img src="/images/success-cases/linkedin-icon.webp" alt="avatar" class="testimonials-author__info-linked-in-img" width="20" height="22">
                                </a>
                                <p class="testimonials-author__info-profession">Performance Advisor | DevEducation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials-item__wrapper">
                <div class="testimonials-item">
                    <h3>MetaMinder is clearly a pioneer in imagining a mobile LMS</h3>
                    <p class="testimonials-description">
                        While its end-users are typically corporations, the platform and its APIs turned out to be so flexible that we, as a corporate training provider, were able to use EdApp as our primary publishing platform.
                    </p>
                    <div class="testimonials-author__wrapper">
                        <img src="/images/success-cases/avatar-men.webp" alt="avatar men" class="testimonials-author__avatar" width="65" height="78">
                        <div class="testimonials-author__info">
                            <p class="testimonials-author__info-name">Martin Olds</p>
                            <div class="testimonials-author__info-profession-wrapper">
                                <a href="https://www.linkedin.com/" rel="nofollow" class="testimonials-author__info-linked-in">
                                    <img src="/images/success-cases/linkedin-icon.webp" alt="avatar" class="testimonials-author__info-linked-in-img" width="20" height="22">
                                </a>
                                <p class="testimonials-author__info-profession">
                                    Chief Information Officer | Bookstime
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials-item__wrapper">
                <div class="testimonials-item">
                    <h3>MetaMinder’s mobile-first platform is just what our workforce needs.</h3>
                    <p class="testimonials-description">During this uncertain period COVID-19, the MetaMinder platform has supported Campari to maintain and even grow its world-class education through invaluable storytelling, product knowledge, and soft skills.
                        I was able to easily pick up the platform to author courseware and get it out to our Camparistas in a matter of days. Having mobile-accessible content allows for Campari Academy Online’s success to continue, despite the obvious challenges that COVID-19 has brought on.</p>
                    <div class="testimonials-author__wrapper">
                        <img src="/images/success-cases/avatar-girl.webp" alt=" avatar girl" class="testimonials-author__avatar" width="65" height="78">
                        <div class="testimonials-author__info">
                            <p class="testimonials-author__info-name">Ana Shelton-Agar</p>
                            <div class="testimonials-author__info-profession-wrapper">
                                <a href="https://www.linkedin.com/" rel="nofollow" class="testimonials-author__info-linked-in">
                                    <img src="/images/success-cases/linkedin-icon.webp" alt="avatar" class="testimonials-author__info-linked-in-img" width="20" height="22">
                                </a>
                                <p class="testimonials-author__info-profession">General Manager | Eco Sober Houses</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials-item__wrapper">
                <div class="testimonials-item">
                    <h3>Interactive lessons that staff love taking</h3>
                    <p class="testimonials-description">In no time at all, we put together a program for our staff and they were able to complete their MetaMinder courses. That was a great process and we got training out there very, very quickly.</p>
                    <div class="testimonials-author__wrapper">
                        <img src="/images/success-cases/avatar-women.webp" alt="avatar women" class="testimonials-author__avatar" width="65" height="78">
                        <div class="testimonials-author__info">
                            <p class="testimonials-author__info-name">Laura Higgins</p>
                            <div class="testimonials-author__info-profession-wrapper">
                                <a href="https://www.linkedin.com/" rel="nofollow" class="testimonials-author__info-linked-in">
                                    <img src="/images/success-cases/linkedin-icon.webp" alt="avatar" class="testimonials-author__info-linked-in-img" width="20" height="22">
                                </a>
                                <p class="testimonials-author__info-profession">Performance Advisor | DevEducation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    $test_drive_args = [
    'test_drive_header' =>  get_post_meta( get_the_ID(), 'success_cases_test-drive-title', true ),
    'test_drive_description' => get_post_meta( get_the_ID(), 'success_cases_test-drive-description', true )
    ];
    get_template_part('template-parts/page-home/section-test-drive', null, $test_drive_args);
    ?>
<?php
get_footer();

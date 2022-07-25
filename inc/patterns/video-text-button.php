<?php
/**
 * Video Text & Button Pattern
 *
 * @since TailwindFSE 1.0
 * @package TailwindFSE
 */

return array(
	'title'      => __( 'Video with text & button', 'tailwindfse' ),
	'categories' => array( 'responsive_fse_theme' ),
	'keywords'   => array( 'video', 'text', 'button' ),
	'content'    => '<!-- wp:cover {"overlayColor":"whisper","style":{"spacing":{"padding":{"top":"70px","bottom":"70px","right":"0px","left":"0px"}}}} -->
    <div class="wp-block-cover has-whisper-background-color has-background-dim"
        style="padding-top:70px;padding-right:0px;padding-bottom:70px;padding-left:0px">
        <div class="wp-block-cover__inner-container">
            <!-- wp:columns {"verticalAlignment":"top"} -->
            <div class="wp-block-columns are-vertically-aligned-top">
                <!-- wp:column {"verticalAlignment":"top"} -->
                <div class="wp-block-column is-vertically-aligned-top">
                    <!-- wp:embed {"url":"https://youtu.be/Gs-h74Qnrlw","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
                    <figure
                        class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
                        <div class="wp-block-embed__wrapper">
                            https://youtu.be/Gs-h74Qnrlw
                        </div>
                    </figure>
                    <!-- /wp:embed -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"top"} -->
                <div class="wp-block-column is-vertically-aligned-top">
                    <!-- wp:heading {"style":{"typography":{"fontSize":"32px","fontWeight":"700","lineHeight":"1"},"color":{"text":"#111111"}}} -->
                    <h2 class="has-text-color" style="color:#111111;font-size:32px;font-weight:700;line-height:1">Meet Our
                        Experts</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"color":{"text":"#333333"}},"fontSize":"normal"} -->
                    <p class="has-text-color has-normal-font-size" style="color:#333333;line-height:1.6">Lorem ipsum dolor
                        sit amet, consectetur adipiscing elit, empor incididunt ut labore et dolore magna aliqua.Lorem ipsum
                        dolor sit amet, consectet.incididunt ut labore et dolore magnaincididunt ut labore et dolore magna
                        aliqua.Lorem ipsum dolor sit amet, consectet.incididunt ut labore et dolore magna aliqua.Lorem ipsum
                        dolor sit amet, consectet. incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
                        consectet. Lorem ipsum dolor sit amet, consectetur adipiscing elit, empor incididunt ut labore et
                        Lorem ipsum dolor sit amet,</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"style":{"color":{"background":"#3c63ae"},"border":{"radius":"5px"},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"30px","right":"30px"}},"typography":{"fontSize":"18px"}}} -->
                        <div class="wp-block-button has-custom-font-size" style="font-size:18px"><a
                                class="wp-block-button__link has-background"
                                style="border-radius:5px;background-color:#3c63ae;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px">Learn
                                More</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
    </div>
    <!-- /wp:cover -->',
);

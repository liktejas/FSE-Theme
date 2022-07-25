<?php
/**
 * Service Pattern
 *
 * @since TailwindFSE 1.0
 * @package TailwindFSE
 */

return array(
	'title'      => __( 'Our Services', 'tailwindfse' ),
	'categories' => array( 'responsive_fse_theme' ),
	'keywords'   => array( 'services' ),
	'content'    => '<!-- wp:cover {"overlayColor":"whisper","style":{"spacing":{"padding":{"top":"70px","bottom":"70px","right":"0px","left":"0px"}}}} -->
										<div class="wp-block-cover has-whisper-background-color has-background-dim"
											style="padding-top:70px;padding-right:0px;padding-bottom:70px;padding-left:0px">
											<div class="wp-block-cover__inner-container">
												<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#f9636b"},"typography":{"lineHeight":"1.6"}},"fontSize":"normal"} -->
												<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#f9636b;line-height:1.6">Our Services</p>
												<!-- /wp:paragraph -->

												<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"50px","fontWeight":"600","lineHeight":"1"}},"textColor":"dark"} -->
												<h2 class="has-text-align-center has-dark-color has-text-color"
													style="font-size:50px;font-weight:600;line-height:1">What We Do</h2>
												<!-- /wp:heading -->

												<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6"},"color":{"text":"#000000"}},"fontSize":"normal"} -->
												<p class="has-text-align-center has-text-color has-normal-font-size" style="color:#000000;line-height:1.6">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
												<!-- /wp:paragraph -->

												<!-- wp:spacer {"height":20} -->
												<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
												<!-- /wp:spacer -->

												<!-- wp:columns -->
												<div class="wp-block-columns">
													<!-- wp:column {"style":{"spacing":{"padding":{"top":"29px","right":"20px","bottom":"0px","left":"20px"}}},"backgroundColor":"white"} -->
													<div class="wp-block-column has-white-background-color has-background"
														style="padding-top:29px;padding-right:20px;padding-bottom:0px;padding-left:20px">
														<!-- wp:media-text {"mediaId":18,"mediaLink":"' . esc_url( get_theme_file_uri( 'images/corpicon2.png' ) ) . '","mediaType":"image","mediaWidth":23,"verticalAlignment":"center"} -->
														<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center"
															style="grid-template-columns:23% auto">
															<figure class="wp-block-media-text__media"><img
																	src="' . esc_url( get_theme_file_uri( 'images/corpicon2.png' ) ) . '" alt=""
																	class="wp-image-18 size-full" /></figure>
															<div class="wp-block-media-text__content">
																<!-- wp:heading {"style":{"typography":{"lineHeight":"1","fontWeight":"700"}},"textColor":"dark","fontSize":"medium"} -->
																<h2 class="has-dark-color has-text-color has-medium-font-size"
																	style="font-weight:700;line-height:1">Brand Strategy</h2>
																<!-- /wp:heading -->

																<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"textColor":"dark","fontSize":"normal"} -->
																<p class="has-dark-color has-text-color has-normal-font-size" style="line-height:1.6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
																<!-- /wp:paragraph -->
															</div>
														</div>
														<!-- /wp:media-text -->
													</div>
													<!-- /wp:column -->

													<!-- wp:column {"style":{"spacing":{"padding":{"top":"29px","right":"20px","bottom":"0px","left":"20px"}}},"backgroundColor":"white"} -->
													<div class="wp-block-column has-white-background-color has-background"
														style="padding-top:29px;padding-right:20px;padding-bottom:0px;padding-left:20px">
														<!-- wp:media-text {"mediaId":36,"mediaLink":"' . esc_url( get_theme_file_uri( 'images/corpicon3.png' ) ) . '","mediaType":"image","mediaWidth":23,"verticalAlignment":"center"} -->
														<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center"
															style="grid-template-columns:23% auto">
															<figure class="wp-block-media-text__media"><img
																	src="' . esc_url( get_theme_file_uri( 'images/corpicon3.png' ) ) . '" alt=""
																	class="wp-image-36 size-full" /></figure>
															<div class="wp-block-media-text__content">
																<!-- wp:heading {"style":{"typography":{"lineHeight":"1","fontWeight":"700"}},"textColor":"dark","fontSize":"medium"} -->
																<h2 class="has-dark-color has-text-color has-medium-font-size"
																	style="font-weight:700;line-height:1">Modern Design</h2>
																<!-- /wp:heading -->

																<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"textColor":"dark","fontSize":"normal"} -->
																<p class="has-dark-color has-text-color has-normal-font-size" style="line-height:1.6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
																<!-- /wp:paragraph -->
															</div>
														</div>
														<!-- /wp:media-text -->
													</div>
													<!-- /wp:column -->
												</div>
												<!-- /wp:columns -->

												<!-- wp:columns -->
												<div class="wp-block-columns">
													<!-- wp:column {"style":{"spacing":{"padding":{"top":"29px","right":"20px","bottom":"0px","left":"20px"}}},"backgroundColor":"white"} -->
													<div class="wp-block-column has-white-background-color has-background"
														style="padding-top:29px;padding-right:20px;padding-bottom:0px;padding-left:20px">
														<!-- wp:media-text {"mediaId":37,"mediaLink":"' . esc_url( get_theme_file_uri( 'images/corpicon4.png' ) ) . '","mediaType":"image","mediaWidth":23,"verticalAlignment":"center"} -->
														<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center"
															style="grid-template-columns:23% auto">
															<figure class="wp-block-media-text__media"><img
																	src="' . esc_url( get_theme_file_uri( 'images/corpicon4.png' ) ) . '" alt=""
																	class="wp-image-37 size-full" /></figure>
															<div class="wp-block-media-text__content">
																<!-- wp:heading {"style":{"typography":{"lineHeight":"1","fontWeight":"700"}},"textColor":"dark","fontSize":"medium"} -->
																<h2 class="has-dark-color has-text-color has-medium-font-size"
																	style="font-weight:700;line-height:1">Security Data</h2>
																<!-- /wp:heading -->

																<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"textColor":"dark","fontSize":"normal"} -->
																<p class="has-dark-color has-text-color has-normal-font-size" style="line-height:1.6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
																<!-- /wp:paragraph -->
															</div>
														</div>
														<!-- /wp:media-text -->
													</div>
													<!-- /wp:column -->

													<!-- wp:column {"style":{"spacing":{"padding":{"top":"29px","right":"20px","bottom":"0px","left":"20px"}}},"backgroundColor":"white"} -->
													<div class="wp-block-column has-white-background-color has-background"
														style="padding-top:29px;padding-right:20px;padding-bottom:0px;padding-left:20px">
														<!-- wp:media-text {"mediaId":38,"mediaLink":"' . esc_url( get_theme_file_uri( 'images/corpicon6.png' ) ) . '","mediaType":"image","mediaWidth":23,"verticalAlignment":"center"} -->
														<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center"
															style="grid-template-columns:23% auto">
															<figure class="wp-block-media-text__media"><img
																	src="' . esc_url( get_theme_file_uri( 'images/corpicon6.png' ) ) . '" alt=""
																	class="wp-image-38 size-full" /></figure>
															<div class="wp-block-media-text__content">
																<!-- wp:heading {"style":{"typography":{"lineHeight":"1","fontWeight":"700"}},"textColor":"dark","fontSize":"medium"} -->
																<h2 class="has-dark-color has-text-color has-medium-font-size"
																	style="font-weight:700;line-height:1">Data Analysis</h2>
																<!-- /wp:heading -->

																<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"textColor":"dark","fontSize":"normal"} -->
																<p class="has-dark-color has-text-color has-normal-font-size" style="line-height:1.6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
																<!-- /wp:paragraph -->
															</div>
														</div>
														<!-- /wp:media-text -->
													</div>
													<!-- /wp:column -->
												</div>
												<!-- /wp:columns -->

												<!-- wp:columns -->
												<div class="wp-block-columns">
													<!-- wp:column {"style":{"spacing":{"padding":{"top":"29px","right":"20px","bottom":"0px","left":"20px"}}},"backgroundColor":"white"} -->
													<div class="wp-block-column has-white-background-color has-background"
														style="padding-top:29px;padding-right:20px;padding-bottom:0px;padding-left:20px">
														<!-- wp:media-text {"mediaId":39,"mediaLink":"' . esc_url( get_theme_file_uri( 'images/corpicon5.png' ) ) . '","mediaType":"image","mediaWidth":23,"verticalAlignment":"center"} -->
														<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center"
															style="grid-template-columns:23% auto">
															<figure class="wp-block-media-text__media"><img
																	src="' . esc_url( get_theme_file_uri( 'images/corpicon5.png' ) ) . '" alt=""
																	class="wp-image-39 size-full" /></figure>
															<div class="wp-block-media-text__content">
																<!-- wp:heading {"style":{"typography":{"lineHeight":"1","fontWeight":"700"}},"textColor":"dark","fontSize":"medium"} -->
																<h2 class="has-dark-color has-text-color has-medium-font-size"
																	style="font-weight:700;line-height:1">SEO Optimization</h2>
																<!-- /wp:heading -->

																<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"textColor":"dark","fontSize":"normal"} -->
																<p class="has-dark-color has-text-color has-normal-font-size" style="line-height:1.6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
																<!-- /wp:paragraph -->
															</div>
														</div>
														<!-- /wp:media-text -->
													</div>
													<!-- /wp:column -->

													<!-- wp:column {"style":{"spacing":{"padding":{"top":"29px","right":"20px","bottom":"0px","left":"20px"}}},"backgroundColor":"white"} -->
													<div class="wp-block-column has-white-background-color has-background"
														style="padding-top:29px;padding-right:20px;padding-bottom:0px;padding-left:20px">
														<!-- wp:media-text {"mediaId":40,"mediaLink":"' . esc_url( get_theme_file_uri( 'images/corpicon1.png' ) ) . '","mediaType":"image","mediaWidth":23,"verticalAlignment":"center"} -->
														<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center"
															style="grid-template-columns:23% auto">
															<figure class="wp-block-media-text__media"><img
																	src="' . esc_url( get_theme_file_uri( 'images/corpicon1.png' ) ) . '" alt=""
																	class="wp-image-40 size-full" /></figure>
															<div class="wp-block-media-text__content">
																<!-- wp:heading {"style":{"typography":{"lineHeight":"1","fontWeight":"700"}},"textColor":"dark","fontSize":"medium"} -->
																<h2 class="has-dark-color has-text-color has-medium-font-size"
																	style="font-weight:700;line-height:1">Best Marketing</h2>
																<!-- /wp:heading -->

																<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.6}},"textColor":"dark","fontSize":"normal"} -->
																<p class="has-dark-color has-text-color has-normal-font-size" style="line-height:1.6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
																<!-- /wp:paragraph -->
															</div>
														</div>
														<!-- /wp:media-text -->
													</div>
													<!-- /wp:column -->
												</div>
												<!-- /wp:columns -->
											</div>
										</div>
										<!-- /wp:cover -->',
);

const { __ } = wp.i18n;

/* Allow switching back to the default header. */
wp.blocks.registerBlockVariation( 'core/template-part', {
	name: 'template-part',
	title: 'Default Header',
	description: __( responsive_fse_translate.default_style, 'responsive-fse' ),
	scope: [ 'transform' ],
	attributes: {
		className: 'responsive-fse-default-header'
	},
});

/* Create a sticky variation of the header. */
wp.blocks.registerBlockVariation( 'core/template-part', {
	name: 'sticky-header',
	title: 'Sticky Header',
	description: __( responsive_fse_translate.sticky_header, 'responsive-fse' ),
	scope: [ 'transform' ],
	attributes: {
		className: 'responsive-fse-sticky-header'
	},
});
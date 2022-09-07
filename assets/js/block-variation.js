const { __ } = wp.i18n;

/* Create a sticky variation of the header. */
wp.blocks.registerBlockVariation( 'core/template-part', {
	name: 'sticky-header',
	title: 'Sticky Header',
	description: __( 'Sticky header.' ),
	scope: [ 'transform' ],
	attributes: {
		className: 'responsive-fse-sticky-header'
	},
});

/* Allow switching back to the default header. */
wp.blocks.registerBlockVariation( 'core/template-part', {
	name: 'template-part',
	title: 'Default Header',
	description: __( 'Default style' ),
	scope: [ 'transform' ],
	attributes: {
		className: 'responsive-fse-default-header'
	},
});
if ( !jQuery('#responsive-fse-pagination').children().length > 0 ) {
    jQuery('#responsive-fse-pagination').hide()
}
if ( !jQuery('#responsive-fse-search-pagination').children().length > 0 ) {
    jQuery('#responsive-fse-search-pagination').hide()
}
if ( !jQuery('.single.single-post #responsive-fse-single-post-comments .wp-block-comments-query-loop').children().length > 0 ) {
    jQuery('#responsive-fse-single-post-comments').hide()
    jQuery('#responsive-fse-single-post-content').css('margin-bottom', '20px')
}
if ( !jQuery('.single.single-post #responsive-fse-single-post-pagination .wp-block-post-navigation-link').children().length > 0 ) {
    jQuery('#responsive-fse-single-post-pagination').hide()
    jQuery('#responsive-fse-page-content').css('margin-bottom', '40px')
}
if ( !jQuery('.page .wp-block-comments-query-loop').children().length > 0 ) {
    jQuery('#responsive-fse-page-comments').hide()
    jQuery('#responsive-fse-page-content').css('margin-bottom', '40px')
}
if ( !jQuery('#responsive-fse-category-pagination').children().length > 0 ) {
    jQuery('#responsive-fse-category-pagination').hide()
}
if ( !jQuery('#responsive-fse-archive-pagination').children().length > 0 ) {
    jQuery('#responsive-fse-archive-pagination').hide()
}
if ( !jQuery('#responsive-fse-search-pagination').children().length > 0 ) {
    jQuery('#responsive-fse-search-pagination').hide()
}
if ( !jQuery('#responsive-fse-single-post-comments-query-loop').children().length > 0 ) {
    jQuery('#responsive-fse-single-post-comments').hide()
    jQuery('#responsive-fse-single-post-content').css('margin-bottom', '20px')
}
if ( !jQuery('#responsive-fse-page-comments-query-loop').children().length > 0 ) {
    jQuery('#responsive-fse-page-comments').hide()
    jQuery('#responsive-fse-page-content').css('margin-bottom', '40px')
}
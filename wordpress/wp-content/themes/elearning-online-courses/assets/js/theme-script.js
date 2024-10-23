
jQuery('.header-search-wrapper .search-main').click(function(){
    jQuery('.search-form-main').toggleClass('active-search');
    jQuery('.search-form-main .search-field').focus();
});

jQuery(document).ready(function() {
window.addEventListener('load', (event) => {
    jQuery(".loading").delay(2000).fadeOut("slow");
  });
});
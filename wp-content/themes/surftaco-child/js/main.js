jQuery(document).ready(function(){
var originalContent = jQuery('.fleg_icon').html();
jQuery('.fleg_nav_footer .menu').append(originalContent); 
 jQuery('.footer__menu__language__link').on('click', function(event) {
        event.preventDefault();
        jQuery('.footer__menu__language').toggleClass('footer__menu__language--open');
    }) 

});
jQuery(document).ready(function(){
var testimonial_author= jQuery('.easy_testimonial .testimonial_author').html();
jQuery('.easy_t_single_testimonial .easy_testimonial_title').append(testimonial_author); 
});

var menu_heade_menu= jQuery('.header-static-menu').html();
jQuery('#menu-heade_menu').prepend(menu_heade_menu);



 var menu_item_69= jQuery('#menu-item-742 .sub-menu').html();
jQuery('.li-Jquay').append(menu_item_69); 
jQuery('#menu-item-742').hide();
jQuery( ".menu-item-73" ).after( "<li><h6>Partnership Programs</h6></li>" );


jQuery(document).ready(function(){

	// store the image link inside a variable from 'src' attribute
var getImageSrc =jQuery('.bg-home-icon>img').attr('src');

jQuery('.bg-home-icon').each(function(){
	
	var url = jQuery(this).find('img').attr('src');
	//console.log(url)
	//console.log(this)
	jQuery(this).css('background-image', 'url(' + url + ')');
	var url = jQuery(this).find('img').remove()

})


// add div background image using the variable above
//jQuery('.bg-home-icon').css('background-image', 'url(' + getImageSrc + ')');
//jQuery('#menu-item-742').remove();

jQuery('.pti_header .site-header-main .site-header-menu ul.primary-menu>li:last-child a').append('<span> Response in 24 Hrs </span>'); 
 

});



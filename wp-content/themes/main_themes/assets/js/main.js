jQuery(document).ready(function() {

// BACKGROUND HOME PAGE

function csaHead(){

	if(i > (imgHead.length-1)){
		jQuery('.home-photo_block').animate({'opacity':'0'},400,function(){
			i=1;
			jQuery('.home-photo_block').css({'background':'url('+imgHead[0]+')', 'background-repeat': 'no-repeat', 'background-position': '50% 50%', 'background-size': 'cover'});
		});
		jQuery('.home-photo_block').animate({'opacity':'1'},400);
	}else{
		jQuery('.home-photo_block').animate({'opacity':'0'},400,function(){
			jQuery('.home-photo_block').css({'background':'url('+imgHead[i]+')', 'background-repeat': 'no-repeat', 'background-position': '50% 50%', 'background-size': 'cover'});
			i++;
		});
		jQuery('.home-photo_block').animate({'opacity':'1'},400);
	}

}
var intervalCsaHead = setInterval(csaHead,8000);


// MENU ICON
	var menuBtn = jQuery('.nav-icon')
	var menu = jQuery('.nav')

	menuBtn.on ('click', function(event) {
		event.preventDefault();
		menu.slideToggle();
	});

// FADE Scroll

	jQuery('.fade').addClass("hidden").viewportChecker({
	classToAdd: 'visible animated fadeIn',
	offset: 200
	});
// Scrol to TOP

	jQuery('.to_top').on('click','a', function(event) {
		event.preventDefault();
		var id = jQuery(this).attr('href'),
			top = jQuery(id).offset().top;
		jQuery('body,html').animate({scrollTop: top}, 600);
	});

	var btn = document.querySelector('.to_top');

	  window.onscroll = magic;

	  function magic() {
	      if (window.pageYOffset > 200) {
	      btn.style.display = 'block';
	    } else { btn.style.display = 'none'; }
	}

	$('.ngg-galleryoverview').masonry({
	  columnWidth: 200,
	  itemSelector: '.ngg-gallery-thumbnail-box'
	});
}); // document.ready_END

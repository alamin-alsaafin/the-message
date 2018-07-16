(function(){

	$(window).scroll(function(){
		var $item = $('.top'),
			$itemTop = $item.position().top;
		if ($(window).scrollTop() > $itemTop) {         
		
			$('.logo').addClass('fixed-logo');
			// $('.top').addClass('top-logo')
		}
		else {
		
			$('.logo').removeClass('fixed-logo');
			// $('.top').removeClass('top-logo')
		}

	});
/*header-fixed*/
	
	$('#nav-trigger').on('click',function(){
		$('body').addClass('bodyActive')
	})


	var init = function(button, menu) {
		
		var body = document.body,
			button = document.querySelector( button ),
			menu = document.querySelector( menu ),
	    	supportClipPath = (function() {
				var s = document.createElement('span'), ss = s.style, circle = 'circle(1px at 1px 1px)', support;
				ss.position = "fixed";
				ss.top = ss.left = "-20px";
				body.appendChild(s);
				support = ["webkitClipPath","clipPath"].some(function(p) { return (( ss[p] = circle ) && ( getComputedStyle(s)[p] === circle )); });
				body.removeChild(s);
				return support;
			})(),
			buildRect = function(box) { return 'rect('+box.top+'px,'+box.right+'px,'+box.bottom+'px,'+box.left+'px)'; };
		
		var bodyClip = buildRect(body.getBoundingClientRect()), 
        buttonClip = buildRect(button.getBoundingClientRect());
    
    if ( !supportClipPath ) {      
			menu.style.clip = buttonClip; 
		}

		button.addEventListener("click", function(evt) {
			evt.preventDefault();
			menu.classList.toggle('nav-active');
			if ( !supportClipPath ) {
	        	menu.style.clip = menu.classList.contains('nav-active') ? bodyClip : buttonClip;
			}
		}, false);
	}
	
	init('[nav-reveal-button]', '[nav-reveal-menu]');
	
	window.navCircleReveal = init;	
	/*nav*/





	$('.right-menu li:has(> ul)').addClass("haschaid");
    $( ".right-menu .dropbtn" ).on( "click", function() {
        $(".right-menu .dropdown").toggleClass("Hoverd")
	});
	

	AOS.init({
        duration: 1200,
        offset: 100,
        startEvent: 'DOMContentLoaded'
    });


	
})();


$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
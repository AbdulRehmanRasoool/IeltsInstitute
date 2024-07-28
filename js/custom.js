$(window).load(function() {
    /* Loading Script */
    "use strict";
   $('.page-loader-wrapper').fadeOut('slow');
    if($('#gallery-content-center').length>0){
$('#gallery-content-center').isotope({itemSelector : 'li'});
	$('.project-filter-links').click(function() {
		$('.project-filter-links').removeClass('current');
		$(this).addClass('current');
		$('#gallery-content-center').isotope({ filter: '.'+$(this).attr('id') }); 
	});
	}
})

$(document).ready(function(){
	if($("#sync1").length>0){
 var sync1 = $("#sync1");
      var sync2 = $("#sync2");     
      sync1.owlCarousel({
        singleItem : true,
        slideSpeed : 1000,
        navigation: false,
        pagination:false,
        afterAction : syncPosition,
        responsiveRefreshRate : 200,
		 autoHeight : true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			},
			1800:{
				items:1
			},
			2100:{
				items:1
			}						
		}
      });     
      sync2.owlCarousel({
        items : 5,
        itemsDesktop      : [1199,5],
        itemsDesktopSmall     : [979,5],
        itemsTablet       : [768,6],
        itemsMobile       : [479,5],
        navigation: false,
        pagination:false,
        responsiveRefreshRate : 100,
        afterInit : function(el){
          el.find(".owl-item").eq(2).addClass("synced active");
        }
      });     
      function syncPosition(el){
        var current = this.currentItem;
        $("#sync2")
          .find(".owl-item")
          .removeClass("synced active")
          .eq(current)
          .addClass("synced active")
        if($("#sync2").data("owlCarousel") !== undefined){
          center(current)
        }
      }
      $("#sync2").on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo",number);
      });
     
      function center(number){
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for(var i in sync2visible){
          if(num === sync2visible[i]){
            var found = true;
          }
        }     
        if(found===false){
          if(num>sync2visible[sync2visible.length-1]){
            sync2.trigger("owl.goTo", num - sync2visible.length+2)
          }else{
            if(num - 1 === -1){
              num = 0;
            }
            sync2.trigger("owl.goTo", num);
          }
        } else if(num === sync2visible[sync2visible.length-1]){
          sync2.trigger("owl.goTo", sync2visible[1])
        } else if(num === sync2visible[0]){
          sync2.trigger("owl.goTo", num-1)
        }
        
      }
	}
				// delegate calls to data-toggle="lightbox"
				$(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						onShown: function() {
							if (window.console) {
								return console.log('onShown event fired');
							}
						},
						onContentLoaded: function() {
							if (window.console) {
								return console.log('onContentLoaded event fired');
							}
						},
						onNavigate: function(direction, itemIndex) {
							if (window.console) {
								return console.log('Navigating '+direction+'. Current item: '+itemIndex);
							}
						}
					});
				});

				//Programatically call
				$('#open-image').click(function (e) {
					e.preventDefault();
					$(this).ekkoLightbox();
				});
				$('#open-youtube').click(function (e) {
					e.preventDefault();
					$(this).ekkoLightbox();
				});

				$(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						onShown: function() {
							var lb = this;
							$(lb.modal_content).on('click', '.modal-footer a#jumpit', function(e) {
								e.preventDefault();
								lb.navigateTo(2);
							});
							$(lb.modal_content).on('click', '.modal-footer a#closeit', function(e) {
								e.preventDefault();
								lb.close();
							});
						}
					});
				});

			
if($("#map").length>0){
// Google Map
	/*var locations = [
		['<div class="infobox"><h3 class="title"><a href="#contact">OUR USA OFFICE</a></h3><span>NEW YORK CITY 2045 / 65</span><br>+90 555 666 77 88</p></div></div></div>', -37.801578, 145.060508, 2]
		];*/
 
// The latitude and longitude of your business / place
var position = [27.1959739, 78.02423269999997];
 
function showGoogleMaps() {
 
    var latLng = new google.maps.LatLng(position[0], position[1]);
 
    var mapOptions = {
        zoom: 16, // initialize zoom level - the max value is 21
        streetViewControl: false, // hide the yellow Street View pegman
        scaleControl: true, // allow users to zoom the Google Map
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: latLng
    };
 
    map = new google.maps.Map(document.getElementById('map'),
        mapOptions);
 
    // Show the default red marker at the location
    marker = new google.maps.Marker({
        position: latLng,
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP
    });
}
 
google.maps.event.addDomListener(window, 'load', showGoogleMaps);

}
if($("#contact-map").length>0){

var position = [27.1959739, 78.02423269999997];
 
function showGoogleMaps() {
 
    var latLng = new google.maps.LatLng(position[0], position[1]);
 
    var mapOptions = {
        zoom: 16, // initialize zoom level - the max value is 21
        streetViewControl: false, // hide the yellow Street View pegman
        scaleControl: true, // allow users to zoom the Google Map
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: latLng
    };
 
    map = new google.maps.Map(document.getElementById('contact-map'),
        mapOptions);
 
    // Show the default red marker at the location
    marker = new google.maps.Marker({
        position: latLng,
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP
    });
}
 
google.maps.event.addDomListener(window, 'load', showGoogleMaps);
}
function count($this) {
		  //Counter
        var current = parseInt($this.html(), 10);
        current = current + 1; /* Where 50 is increment */

        $this.html(++current);
        if (current > $this.data('count')) {
            $this.html($this.data('count'));
        } else {
            setTimeout(function() {
                count($this)
            }, 50);
        }
    }
$(".stat-count").each(function() {
	$(this).data('count', parseInt($(this).html(), 10));
	$(this).html('0');
	count($(this));
});

    // Accordion Toggle
    var iconOpen = 'fa-minus',
        iconClose = 'fa-plus';

    $(document).on('show.bs.collapse hide.bs.collapse', '.accordion', function(e) {
        var $target = $(e.target)
        $target.siblings('.accordion-heading')
            .find('i').toggleClass(iconOpen + ' ' + iconClose);
        if (e.type == 'show')
            $target.prev('.accordion-heading').find('.accordion-toggle').addClass('active');
        if (e.type == 'hide')
            $(this).find('.accordion-toggle').not($target).removeClass('active');
    });
// Chart Effects;
if($('.chart').length>0){
$('.chart').easyPieChart({
	easing: 'easeOutBounce',
	size : 200,
	animate : 2000,
	lineWidth : 10,
	lineCap : 'square',
	lineWidth : 19,
	barColor : '#c13c3c',
	trackColor : '#f3f3f3',
	scaleColor : false,
	onStep: function(from, to, percent) {
	$(this.el).find('.percent').text(Math.round(percent)+'%');
	}
});
}
    // tooltip demo
	/*$('a').click(function(e) {
        e.preventDefault();
    });*/
    $("[data-toggle=tooltip]").tooltip();

    // popover demo
    $("[data-toggle=popover]").popover();
//Back to top
});
$("#back-top").hide();
	jQuery(window).scroll(function () {
		if ($(this).scrollTop() > 400) {
			$('#back-top').fadeIn();
		} else {
			$('#back-top').fadeOut();
		}
	});
   $('#back-top a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
//Progress Bars

$(window).load(function(){
			$('.progress .bar').each(function(index) {
				var me = $(this);
				var perc = me.attr("data-percentage");
				var current_perc = 0;
				var progress = setInterval(function() {
					if (current_perc>=perc) {
						clearInterval(progress);						
					} else {
						current_perc +=1;
					   me.css('width', (current_perc)+'%');
					}
					//console.log(index+' '+$('span#value'+index).siblings('div.progress-bar').attr("data-percentage"));
					$('span.value#value'+index).text((current_perc)+'%');
			
				}, 120);
			
			});
});	
function jqUpdateSize(){
    // Fixed height
    var height = $('#gallery-content2 ul li figure img').height();
    $('.project-infobox').css('height',height);
};
jqUpdateSize()
$(window).resize(function(e) {
    jqUpdateSize()
}); 

	
	
	
	
	
	
	
	
	
	
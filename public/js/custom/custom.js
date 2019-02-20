$(document).ready(function() {


	// SideNav Button Initialization
	$(".button-collapse").sideNav();
	// SideNav Scrollbar Initialization
	var sideNavScrollbar = document.querySelector('.custom-scrollbar');
	Ps.initialize(sideNavScrollbar);

	parallax();

	if(document.URL.match(/index/)) {
		if($.urlParam('error') == 'propnotfound') {
			toastr.error('We are sorry but that property was not found. It might have been withdrawn from the market', 'Not Found', { closeButton: true, positionClass: "toast-top-center"});
		}
	}

	if(document.URL.match(/careers/)) {
		$('.other-testimonials p:odd').addClass('wow bounceInLeft');
		$('.other-testimonials p:even').addClass('wow bounceInRight');
	}




	if(Cookies.get('search') != '') {
		$('#search').val(Cookies.get('search'));
		$('label[for="search"]').addClass('active');
		$('#beds').val(Cookies.get('beds'));
		$('#baths').val(Cookies.get('baths'));
		$('#min_price option[value="'+Cookies.get('lowprice')+'"]').attr('selected','selected');
		$('#max_price option[value="'+Cookies.get('highprice')+'"]').attr('selected','selected');
		$('[name="buyrent"][value="'+Cookies.get('buyrent')+'"]').prop('checked', true);
		price_change();
		beds_baths_change();
	}

	price_change();
	$('#min_price, #max_price').change(price_change);
	beds_baths_change();
	$('#beds, #baths').change(beds_baths_change);

	$('[name="phone"], .phone').bind('keypress change blur', function() {
        format_phone(this);
    }).attr('maxlength', '14');

	even_cards();

	var ajaxReq = 'ToCancelPrevReq';
	$( "#search" ).bind('keyup focus mousedown', function() {

		$('html, body').animate({
			scrollTop: 100
		}, 1000);

	    var val = $( "#search" ).val();
	    if(val != '') {

		    ajaxReq = $.ajax({
		        url: '/ajax/search/search.php',
		        type: 'POST',
		        data: { val: val },
		        beforeSend : function() {
	                if(ajaxReq != 'ToCancelPrevReq' && ajaxReq.readyState < 4) {
	                    ajaxReq.abort();
	                }
		        },
		        success: function(response) {
	                $('.search-results-div').fadeIn().html(response).highlight(val);
					$('.results-row').click(search);
					$(document).mouseup(function(e) {
						var container = $('.search-results-div');
					    if (!container.is(e.target) && container.has(e.target).length === 0) {
					        container.hide();
					    }
					});

		        }
		    });
		} else {
			$('.search-results-div').hide();
		}
	});
	$('#search_link').click(function() {
		search_link();
	});

	$('.mdb-select').material_select();

	if(document.URL.match(/index/) || document.URL.match(/taylorproperties.co\/$/i)) {
		if($(window).width() > 767){
			get_featured();
		} else {
			get_featured_mobile();
		}

		$(window).resize(function() {
			if($(window).width() > 767){
				get_featured();
			} else {
				get_featured_mobile();
			}
		});
	}

	if(document.URL.match(/our-agents/)) {
		$(window).scroll(function() {
		    if($(window).scrollTop() + $(window).height() > $(document).height() - 300) {
				loadmore();
		  	}
	    });
		$('#agent_search').focus(function() {
			if($(this).val() == '') {
				load_search();
			}
		});
		$('#agent_search').keyup(search_agents);

		$('.email-agent').click(set_agent_details);
	}

	$('#email_agent').click(function() {

	});

	$('#agent_contact_form').submit(function(e){
        e.preventDefault();
		submit_agent_contact_form();
    });

	$('#general_contact_form').submit(function(e){
        e.preventDefault();
		submit_general_contact_form();
    });


	new WOW().init();








});

function submit_general_contact_form() {
	var from_name = $('#from_name').val();
	var from_email = $('#from_email').val();
	var from_phone = $('#from_phone').val();
	var message = $('#message').val();

	$.ajax({
	    type: 'POST',
	    url: '/ajax/email/email-general.php',
	    data: { from_name: from_name, from_email: from_email, from_phone: from_phone, message: message },
	    success: function() {
			$('#general_contact_success').modal();
			$('#general_contact_form').find('input').val('');
			$('#general_contact_form').find('textarea').val('');
			$('.md-form').find('label').removeClass('active');
	    }
	});
}

function submit_agent_contact_form() {
	var agent_id = $('#agent_id').val();
	var from_name = $('#from_name').val();
	var from_email = $('#from_email').val();
	var from_phone = $('#from_phone').val();
	var message = $('#message').val();

	$.ajax({
	    type: 'POST',
	    url: '/ajax/email/email-agent.php',
	    data: { agent_id: agent_id, from_name: from_name, from_email: from_email, from_phone: from_phone, message: message },
	    success: function() {
			$('#agent_contact_success').modal();
			$('#contact_form').modal('hide');
	    }
	});
}

function set_agent_details() {
	$('#agent_id').val($(this).data('agentid'));
	$('#agent_first').text($(this).data('agentfirst'));
}

function search_agents() {
	var v = $('#agent_search').val();
	$('.agent-col').each(function() {
		var reg = new RegExp(v, "i");
		if($(this).data('agentfirst').match(reg) || $(this).data('agentlast').match(reg) || $(this).data('agentfull').match(reg)) {
			$(this).show();
		} else {
			$(this).hide();
		}
	});
	$('.bg-color1-light').removeClass('bg-color1-light').addClass('bg-color1');
}

function load_search() {
	$.ajax({
		type: 'post',
		url: '/ajax/our-agents/our-agents-all.php',
		success: function (response) {
			var r = $($.parseHTML(response));
			$('.agent-div').html(r.filter('#agents')).find('#agents').children().unwrap();
			$('#start').val(r.filter('#total'));
			$('.email-agent').click(set_agent_details);
		}
	});
}

function loadmore() {
	var start = $('#start').val();
	if(start != 'loading') {
		$('#start').val('loading');
		$.ajax({
			type: 'post',
			url: '/ajax/our-agents/our-agents.php',
			data: { start: start },
			success: function (response) {
				$('.agent-div').append(response);
				$('#start').val(parseInt(start) + 24);
				$('.email-agent').click(set_agent_details);
			}
		});
	}
}

function get_featured() {
	$.ajax({
	    type: 'POST',
	    url: '/ajax/featured-listings/featured-listings.php',
	    success: function(response) {
			$('#featured_props_div').html(response);
			even_cards();
	    }
	});
}
function get_featured_mobile() {
	$.ajax({
	    type: 'POST',
	    url: '/ajax/featured-listings/featured-listings-mobile.php',
	    success: function(response) {
			$('#featured_props_div_mobile').html(response);
	    }
	});
}


$.urlParam = function(name){
	if(window.location.href.match(/\?/)) {
		var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
		return results[1] || 0;
	}
}

function price_change() {
	var min = 'No Min';
	var max = 'No Max';
	if($('#min_price').val() != '') {
		min = $('#min_price option:selected').text();
	}
	if($('#max_price').val() != '') {
		max = $('#max_price option:selected').text();
	}
	$('#price_dropdown').html(min+' - '+max);
	if($(window).width() < 768) {
		$('#price_dropdown').css({ 'font-size': '11px', 'padding': '12px 3px 11px 3px' });
	}
}

function beds_baths_change() {
	var beds = 'Any';
	var baths = 'Any';
	if($('#beds').val() != '') {
		beds = $('#beds option:selected').text();
	}
	if($('#baths').val() != '') {
		baths = $('#baths option:selected').text();
	}
	$('#beds_baths_dropdown').html(beds+' BR / '+baths+' BA');
}

function search_link() {

	// change seardh icon to loading

	if($('#min_price').val() != null && $('#min_price').val() != '') {
		var lowprice = $('#min_price').val();
	} else {
		var lowprice = '0';
	}

	if($('#max_price').val() != null && $('#max_price').val() != '') {
		var highprice = $('#max_price').val();
	} else {
		var highprice = '0';
	}
	if($('#beds').val() != null && $('#beds').val() != '') {
		var beds = $('#beds').val();
	} else {
		var beds = '0';
	}
	if($('#baths').val() != null && $('#baths').val() != '') {
		var baths = $('#baths').val();
	} else {
		var baths = '0';
	}

	var buyrent = $('input[name=buyrent]:checked').val();
	if(buyrent == 'buy') {
		var prop_type = 'SFR,CND';
	} else if(buyrent == 'rent') {
		var prop_type = 'RNT';
	}

	var search = $('#search').val();
	Cookies.set('search', search);
	Cookies.set('beds', beds);
	Cookies.set('baths', baths);
	Cookies.set('lowprice', lowprice);
	Cookies.set('highprice', highprice);
	Cookies.set('buyrent', buyrent);

	$.ajax({
	    type: 'POST',
	    url: '/ajax/search/search-link.php',
	    data: { search: search, beds: beds, baths: baths, lowprice, lowprice, highprice, highprice, prop_type: prop_type },
	    success: function(response) {
			if(response != '') {
				window.location = response;
			} else {
				toastr.error('We are sorry there are no matching Addresses, Cities, MLS Numbers or Zip Codes for your search.', 'No Results', { closeButton: true, positionClass: "toast-top-center"});
			}
	    }
	});

}


function search() {
	if($('#min_price').val() != null && $('#min_price').val() != '') {
		var lowprice = $('#min_price').val();
	} else {
		var lowprice = '0';
	}

	if($('#max_price').val() != null && $('#max_price').val() != '') {
		var highprice = $('#max_price').val();
	} else {
		var highprice = '0';
	}
	if($('#beds').val() != null && $('#beds').val() != '') {
		var beds = $('#beds').val();
	} else {
		var beds = '0';
	}
	if($('#baths').val() != null && $('#baths').val() != '') {
		var baths = $('#baths').val();
	} else {
		var baths = '0';
	}

	var buyrent = $('input[name=buyrent]:checked').val();
	if(buyrent == 'buy') {
		var prop_type = 'SFR,CND';
	} else if(buyrent == 'rent') {
		var prop_type = 'RNT';
	}

	var t = $(this).data('type');

	if(t == 'mls') {

		var mls = $(this).data('mls');
		var address = $(this).data('address');

		address = address.replace(/ /g, "-").replace(/[',]/g, "");
		var link = 'http://homesearch.taylorproperties.co/homes/113643/530/'+address+'/'+mls;
		Cookies.set('search', mls);

	} else if(t == 'zip') {

		var zip = $(this).data('zip');
		var link = 'http://homesearch.taylorproperties.co/listing/results/113643?zip='+zip+'&location=&propertyType='+prop_type+'&status=active&minListPrice='+lowprice+'&maxListPrice='+highprice+'&squareFeet=&bedrooms='+beds+'&bathCount='+baths+'&_openHomesOnlyYn=on&_dateRange=on';
		Cookies.set('search', zip);

	} else if(t == 'city') {

		var id = $(this).data('cityid');
		var city = $(this).data('cityname');
		var link = 'http://homesearch.taylorproperties.co/listing/results/113643?cityId='+id+'&location=&propertyType='+prop_type+'&status=active&minListPrice='+lowprice+'&maxListPrice='+highprice+'&squareFeet=&bedrooms='+beds+'&bathCount='+baths+'&_openHomesOnlyYn=on&_dateRange=on';
		Cookies.set('search', city);
	}


	Cookies.set('beds', beds);
	Cookies.set('baths', baths);
	Cookies.set('lowprice', lowprice);
	Cookies.set('highprice', highprice);
	Cookies.set('buyrent', buyrent);

	$(this).prop('href', link);
	jQuery.isClickEventRequestingNewTab = function(clickEvent) {
	    return clickEvent.metaKey || clickEvent.ctrlKey || clickEvent.which === 2;
	};
	if(isClickEventRequestingNewTab) {
		//window.open(link);
	} else {
		//window.location = link;
	}

}



function parallax() {

  // create variables
  var $fwindow = $(window);
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  // on window scroll event
  $fwindow.on('scroll resize', function() {
	scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  });

  // for each of content parallax element
  $('[data-type="content"]').each(function (index, e) {
	var $contentObj = $(this);
	var fgOffset = parseInt($contentObj.offset().top);
	var yPos;
	var speed = ($contentObj.data('speed') || 1 );

	$fwindow.on('scroll resize', function (){
	  yPos = fgOffset - scrollTop / speed;

	  $contentObj.css('top', yPos);
	});
  });

  // for each of background parallax element
  $('[data-type="background"]').each(function(){
	var $backgroundObj = $(this);
	var bgOffset = parseInt($backgroundObj.offset().top);
	var yPos;
	var coords;
	var speed = ($backgroundObj.data('speed') || 0 );

	$fwindow.on('scroll resize', function() {
	  yPos = - ((scrollTop - bgOffset) / speed);
	  coords = '40% '+ yPos + 'px';

	  $backgroundObj.css({ backgroundPosition: coords });
	});
  });

  // triggers winodw scroll for refresh
  $fwindow.trigger('scroll');
};



function even_cards() {
    if($(window).width() > 767){
        var maxHeight = 0;
        $('.card-body').not('.agent-card-body').each(function () {
            if ($(this).height() > maxHeight) {
                maxHeight = $(this).height();
            }
        });
        $('.card-body').not('.agent-card-body').height(maxHeight);
    }
}

/* Format Phone */
function format_phone(obj) {
	var numbers = obj.value.replace(/\D/g, ''),
		char = {0:'(',3:') ',6:'-'};
	obj.value = '';
	for (var i = 0; i < numbers.length; i++) {
		if(i>13) {
			return false;
		}
		obj.value += (char[i]||'') + numbers[i];

	}
}

if(document.URL.match(/mortgage/)) {
	$('.show-quote').click(function() {
		$('#tcWidgetPopup').fadeIn();
	});

	!function(){function e(){var a=c.createElement("script");a.type="text/javascript",a.async=!0,a.src="https://www.titlecapture.com/tcw/tc-widget.php",a.id="tc_widget_js";var b=c.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)}var a=window,c=(a.tclp_Option,document),d=function(){d.c(arguments)};d.q={companyId:605},a.tclp_Option=d,a.attachEvent?a.attachEvent("onload",e):a.addEventListener("load",e,!1)}();
}
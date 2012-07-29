(function ($) {
	$(".no-touch .parallax").length > 0 && $.getScript("/js/parallax.js");

	$("#contact-link").find('a').click(function(e){
		e.preventDefault();
		var contact_pos=$("#contact").offset().top;
		if($(window).scrollTop() + $(window).height() < contact_pos) {
			$('html,body').animate({ scrollTop: contact_pos},2000);
		}
		return false;
	});
	
	var $email_input=$('#mce-EMAIL'),
		$email_submit=$('#mc-embedded-subscribe'),
		timer;

	var change_color=function(){
		if($email_input.val()!=""){
			$email_submit.css("background-color","#ee462b").attr("disabled",false);
		}
		else{
			$email_submit.css("background-color","").attr("disabled","disabled");
		}
	}
	
	$email_input.focus(function(){
		timer=setInterval(change_color,333);
	}).blur(function(){
		clearInterval(timer);
		change_color();
	})

	$('#byline').find('a').tooltip({placement: 'top'});
	$('#email').find('a').tooltip({placement: 'top', delay: {show: 0, hide: 1000} })

})(jQuery);




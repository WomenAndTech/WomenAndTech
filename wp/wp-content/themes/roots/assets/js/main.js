
(function($){

  $(document)

  /* -- Scrolling to the subscribe area -- */
  .on('click', 'a[href=#subscribe]', function(e){
    e.preventDefault();


    var $subscribe = $('#subscribe')
    , subscribe_pos=$subscribe.offset().top

    //Callback for when we're done scrolling    
    , flash_color = function(){
                      $subscribe.css({backgroundColor: '#FF3818'})
                        .animate({backgroundColor: '#dedddd'}, 250)
                        .closest('.span4')
                          .css({backgroundColor:'#F68A77'})
                          .animate({backgroundColor:'#f3f3f3'}, 850)
                        .end()
                        .find('input.email')
                          .focus();
                    };
    //If we're not at the bottom of the page,
    //Scroll there and fire the callback

    if($(window).scrollTop() + $(window).height() < subscribe_pos) {
      $('html,body').stop().animate({ scrollTop: subscribe_pos},500, flash_color);
    }
    //Otherwise just fire the callback
    else{
      flash_color()
    }
    return false;
  })

  /* -- Remove mock cursor in the subscribe email field -- */
  .on('focus', 'input.email', function(){  
    $(this).css('border-left', '0px');
  })

  /* -- Add back in mock cursor when other not typing anymore -- */
  .on('blur', 'input.email', function(){
    $(this).css('border-left', '');
  })

  .ready(function(){

    var $email_input=$('#mce-EMAIL'),
      $email_submit=$('#mc-embedded-subscribe'),
      timer;

    var change_color=function(){
      if($email_input.val()!=""){
        //$email_submit.css("background-color","#FF3818").attr("disabled",false);
        $email_submit.animate({backgroundColor: '#FF3818'}, 50).attr("disabled",false);
      }
      else{
        $email_submit.css("background-color","").attr("disabled","disabled");
      }
    }
    
    $email_input.focus(function(){
      timer=setInterval(change_color,100);
    }).blur(function(){
      clearInterval(timer);
      change_color();
    })

  });

  // MARK: Commenting this bit out; it's not working //
  /*.ready(function() {

  var logo = new swiffy.Stage(document.getElementById('womenandtech-logo'), womenandtech);
	logo.start();

	$(window).scroll(function () {
		topper = $(window).scrollTop();
		var gap = 115;
		var headerY = $("header.navbar").position();
		var headerH = $("header.navbar").height();
		var photoY = $("#opening").position();
		var photoH = $("#opening").height();
	
		if(topper > (headerY.top - gap) && topper < ((headerY.top + headerH))) {
			logo.setFlashVars('Active=false');
		} else {
			logo.setFlashVars('Active=true');
		}
	
		if(topper > (headerY.top - gap) && topper < ((headerY.top + headerH)) || topper > (photoY.top-gap) && topper < ((photoY.top-gap) + photoH +gap))
		{
			fillValue = "rgba(255,255,255,1)";
			TweenLite.to($("#womenandtech-logo path"), .6, {css:{fill:fillValue, ease:Expo.easeOut}});
		}
		
		else
		{
			fillValue = "rgba(48,48,47,1)";
			TweenLite.to($("#womenandtech-logo path"), .6, {css:{fill:fillValue, ease:Expo.easeOut}});
		}		
	});

	
  });*/

  
  
})(jQuery);





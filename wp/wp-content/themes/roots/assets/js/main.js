
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

    var $share_buttons=$('#share_buttons');

    if ($share_buttons.length > 0) init_share_buttons($share_buttons);

  });

  var init_share_buttons = function ($share_buttons){
    $share_buttons.sharrre({
      share: {
        twitter: true,
        facebook: true,
        googlePlus: true
      },
      template: '<div class="box"><div class="left">Share</div><div class="middle"><a href="#" class="facebook">f</a><a href="#" class="twitter">t</a><a href="#" class="googleplus">+1</a></div><div class="right">{total}</div></div>',
      enableHover: false,
      enableTracking: true,
      render: function(api, options){
      $(api.element).on('click', '.twitter', function() {
        api.openPopup('twitter');
      });
      $(api.element).on('click', '.facebook', function() {
        api.openPopup('facebook');
      });
      $(api.element).on('click', '.googleplus', function() {
        api.openPopup('googlePlus');
      });
    }
    });
  }

})(jQuery);





(function($){

  $(document).on('click', 'a[href=#subscribe]', function(e){

    /* Scrolling to the subscribe area */
    e.preventDefault();
    var $subscribe = $('#subscribe')
    , subscribe_pos=$subscribe.offset().top
    //Callback for when we're done scrolling    
    , flash_color = function(){
                      $subscribe.css({backgroundColor: '#ee462b'})
                        .animate({backgroundColor: '#dedddd'}, 250)
                        .closest('.span4')
                          .css({backgroundColor:'#F68A77'})
                          .animate({backgroundColor:'#f3f3f3'}, 850)
                        .end()
                        .find('input.email')
                          .focus();
                    };
  
    if($(window).scrollTop() + $(window).height() < subscribe_pos) {
      $('html,body').stop().animate({ scrollTop: subscribe_pos},500, flash_color);
    }
    else{
      flash_color()
    }
    return false;
  })
  .on('focus', 'input.email', function(){
    /* Remove mock cursor in the subscribe email field */
    $(this).css('border-left', '0px');
  })
  .on('blur', 'input.email', function(){
    /* Add back in mock cursor when other not typing anymore */
    $(this).css('border-left', '');
  })

})(jQuery)





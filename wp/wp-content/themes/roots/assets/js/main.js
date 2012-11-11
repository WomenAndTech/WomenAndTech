(function($){

  $(document).on('click', 'a[href=#subscribe]', function(e){

    /* Scrolling to the subscribe area */
    e.preventDefault();
    var $subscribe = $('#subscribe')
    , subscribe_pos=$subscribe.offset().top
    //Callback for when we're done scrolling    
    , flash_color = function(){
                        $subscribe.css('background', '#ee462b').closest('.span4').css('background', '#F68A77').end().find('input.email').focus().end();

                          setTimeout(function(){
                            $subscribe.css('background', '#dedddd').closest('.span4').css('background', '#f3f3f3');
                          },250);
                        }
  
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





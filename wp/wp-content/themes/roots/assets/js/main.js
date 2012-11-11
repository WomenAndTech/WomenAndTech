/* Author:

*/

(function($){

  $(document).on('click', 'a[href=#subscribe]', function(){
    $flash = $('#subscribe').css('background', '#ee462b').closest('.span4').css('background', '#F68A77').end().find('input.email').focus().end();
    setTimeout(function(){
      $flash.css('background', '#dedddd').closest('.span4').css('background', '#f3f3f3');
    },250)
  })
  .on('focus', 'input.email', function(){
    $(this).css('border-left', '0px');
  })
  .on('blur', 'input.email', function(){
    $(this).css('border-left', '');
  })

})(jQuery)





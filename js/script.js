/* Author:
Brett Bergmann
*/

$(function(){

	var $email_input=$('#mce-EMAIL'),
	$email_submit=$('#mc-embedded-subscribe'),
	timer=null,
	change_color=function(){
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




});








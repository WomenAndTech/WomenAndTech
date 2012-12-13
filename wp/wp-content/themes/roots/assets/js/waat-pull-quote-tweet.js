jQuery(document).ready(function($){
	pullQuote = $('.pull-quote aside.quote');
	
	address = parent.location ;

	pullQuote.each(function(index){
		text = $(this).find('h2').text();	
		$(this).find('h2').append('<p><a href="https://twitter.com/share" class="twitter-share-button" data-url="' + address + '" data-text="tweet this" data-via="WomenAndTech" >Tweet</a></p>');
	});

	!function(d,s,id){
		var js,fjs = d.getElementsByTagName(s)[0];
		if(!d.getElementById(id)){
			js=d.createElement(s);
			js.id=id;
			js.src="//platform.twitter.com/widgets.js";
			fjs.parentNode.insertBefore(js,fjs);
		}
	}(document,"script","twitter-wjs");

});
jQuery(document).ready(function($){
	pullQuote = $('.pull-quote aside.quote');
	
	address = window.location.toString();
	interviewee = $('header > div > h1').text();
	
	pullQuote.each(function(index){
		via = "WomenAndTech";
		var quote = $(this).find('h2').text();

		combinedText = interviewee + ": " + quote + " " + address + " via @" + via;

		if (combinedText.length > 135) {
			diff = Math.abs(combinedText.length - 135);
			diff = Math.abs(quote.length - diff);
			quote = quote.substr(0, diff);
			quote = '&quot;' + quote + '...&quot;';
		}

		quote = interviewee + ": " + quote;

		$(this).find('h2').append('<p><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://WomenAndTech.com" data-text="'+ quote + '" data-via="' + via + '" >Tweet</a></p>');
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
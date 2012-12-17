jQuery(document).ready(function($){

	var pullQuotes = $('.pull-quote aside.quote');
	var pageURL = window.location.toString();
	var intervieweeName = $('header > div > h1').text();
	
	pullQuotes.each(function(index){
		var viaHandle = "WomenAndTech";
		var quoteText = $(this).find('h2').text();
		var combinedText = intervieweeName + ": " + quoteText + " " + pageURL + " via @" + viaHandle;

		if (combinedText.length > 135) {
			var diff = Math.abs(combinedText.length - 135);
			diff = Math.abs(quoteText.length - diff);
			quoteText = quoteText.substr(0, diff);
			quoteText = '&quot;' + quoteText + '...&quot;';
		}

		quoteText = intervieweeName + ": " + quoteText;

		$(this).find('h2').append('<p><a href="https://twitter.com/share" class="twitter-share-button" data-url="' + pageURL + '" data-text="'+ quoteText + '" data-via="' + viaHandle + '" >Tweet</a></p>');
	});

	// unmodifed standard twitter tweet button
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
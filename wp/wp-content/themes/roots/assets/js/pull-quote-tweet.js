jQuery(document).ready(function($){

	var pullQuotes = $('.pull-quote aside.quote')
		, permalink = $('body').data('permalink')
		, urlEncodedPermalink = $('body').data('url-encoded-permalink')
		, intervieweeName = $('article header h1').text()
		, viaHandle = "WomenAndTech"
		, maxLength = 117
		;
	
	pullQuotes.each(function(index){
		var quoteText = $(this).find('h2').text()
			, combinedText = intervieweeName + ": " + quoteText + " via @" + viaHandle
			, tweetURL = "https://twitter.com/intent/tweet?"
			;

		if (combinedText.length > maxLength) {
			var diff = Math.abs(combinedText.length - maxLength);
			diff = Math.abs(quoteText.length - diff);
			quoteText = quoteText.substr(0, diff) + '...' ;
		}

		quoteText = intervieweeName + ": " + quoteText;
		tweetURL += 'text=' + quoteText;
		tweetURL += '&';
		tweetURL += 'url=' + urlEncodedPermalink;
		tweetURL += '&';
		tweetURL += 'via=' + viaHandle;
		
		

		$(this).find('h2').append('<p><a href="'+tweetURL+'"><img src="https://si0.twimg.com/images/dev/cms/intents/icons/retweet.png"></a></p>');
	});


});
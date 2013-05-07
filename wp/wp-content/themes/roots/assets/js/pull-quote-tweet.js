jQuery(document).ready(function($){

	var pullQuotes = $('.pull-quote aside.quote')
		, permalink = $('body').data('permalink')
		, urlEncodedPermalink = $('body').data('url-encoded-permalink')
		, intervieweeName = $('body').data('interviewee') || $('article header h1').text().replace(/^\s+/,"")
		, viaHandle = "WomenAndTech"
		, maxLength = 117
		;
	
	pullQuotes.each(function(index){
		var quoteText 
			, combinedText
			, tweetURL = "https://twitter.com/intent/tweet?"
			, quoteText = $(this).data('tweet') || $(this).find('h2').text().replace(/^\s+/,"")
			, combinedText = intervieweeName + ": " + quoteText + " via @" + viaHandle
			;

		if (combinedText.length > maxLength) {
			var diff = Math.abs(combinedText.length - maxLength);
			diff = Math.abs(quoteText.length - diff);
			quoteText = quoteText.substr(0, diff) + '...' ;
		}

		quoteText = intervieweeName + ": " + quoteText;
		tweetURL += 'text=' + encodeURIComponent(quoteText);
		tweetURL += '&';
		tweetURL += 'url=' + urlEncodedPermalink;
		tweetURL += '&';
		tweetURL += 'via=' + viaHandle;

		$(this).find('h2').append('<a href="'+tweetURL+'" style="padding-left: 0.5em; border:none"><img src="https://dev.twitter.com/sites/default/files/images_documentation/bird_blue_16_1.png"></a>');
	});


});
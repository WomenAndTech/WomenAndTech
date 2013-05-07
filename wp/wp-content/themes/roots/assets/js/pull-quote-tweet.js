jQuery(document).ready(function($){

	var pullQuotes = $('.pull-quote aside.quote')
		, permalink = $('body').data('permalink')
		, urlEncodedPermalink = $('body').data('url-encoded-permalink')
		, twitterHandle = $('#twitter-handle').data('twitter-handle') ? "." + $('#twitter-handle').data('twitter-handle') : null
		, intervieweeName = twitterHandle || $('body').data('interviewee') || $('article header h1').text().replace(/^\s+/,"")
		, viaHandle = "WomenAndTech"
		, maxLength = 110
		, buttonDiv
		;
	
	pullQuotes.each(function(index){
		var quoteText 
			, combinedText
			, tweetURL = "https://twitter.com/intent/tweet?"
			, quoteText = $(this).data('tweet') || $(this).find('h2').text().replace(/^\s+/,"")
			, combinedText = intervieweeName + ": " + quoteText + " via @" + viaHandle
			;

		// if (combinedText.length > maxLength) {
		// 	var diff = Math.abs(combinedText.length - maxLength);
		// 	diff = Math.abs(quoteText.length - diff);
		// 	quoteText = quoteText.substr(0, diff) + '...' ;
		// }

		quoteText = intervieweeName + ": " + quoteText;
		tweetURL += 'text=' + encodeURIComponent(quoteText);
		tweetURL += '&';
		tweetURL += 'url=' + urlEncodedPermalink;
		tweetURL += '&';
		tweetURL += 'via=' + viaHandle;
		// <a href="'+tweetURL+'" class="tweet-button"><img src="'+$('body').data('tweet-button')+'"></a>
		buttonDiv = $('<div/>')
							.addClass('tweet-button')
							.append('<a/>')
							.find('a')
							.attr('href', tweetURL)
							.attr('title', 'Tweet this quote')
							.append('<img/>')
							.find('img')
							.attr('src', $('body').data('tweet-button'))
							.attr('title', 'Tweet this quote')
							.attr('alt', 'Tweet this quote')
							.end()
							.end()
		$(this).prepend(buttonDiv);
	});


});
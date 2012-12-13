jQuery(document).ready(function($){
	pullQuote = $('.pull-quote aside.quote');
	text = pullQuote.find('h2').each(function(index){
		alert($(this).text());
	});
	
	// pullQuote.append('<p><a href="https://twitter.com/share" class="twitter-share-button" data-text="hello jello" data-via="WomenAndTech">Tweet</a></p>');

});

// <a href="https://twitter.com/share" class="twitter-share-button" data-text="hello jello" data-via="WomenAndTech">Tweet</a>

// <script>

// !function(d,s,id){
// 	var js,fjs = d.getElementsByTagName(s)[0];
// 	if(!d.getElementById(id)){
// 		js=d.createElement(s);
// 		js.id=id;
// 		js.src="//platform.twitter.com/widgets.js";
// 		fjs.parentNode.insertBefore(js,fjs);
// 	}
// }(document,"script","twitter-wjs");


// </script>
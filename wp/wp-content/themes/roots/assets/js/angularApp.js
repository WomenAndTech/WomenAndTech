var LOCALPATH = "http://localhost:8888";

angular.module('womenAndTech', [])
	.directive('pullQuote', function() {
		return {
			transclude: true,
			template: "<div class='span11 pull-quote'>"+
							"<aside class='quote'>"+
							  "<h2 ng-transclude></h2>"+
							"</aside>"+
						"<div class='quote-mark'><img src='"+LOCALPATH+"/WomenAndTech/wp/assets/img/quote-mark.png' /></div>"+
					   "</div>"
		};
	})
	.directive('calloutWithLargeImage', function() {
		return {
			restrict: 'E',
			transclude: true,
			scope: {
				image: '@',
				alternativeTextForImage: '@'
			},
			template: " <div class='span4 photo-callout notable-person'>"+
				            "<figure class='first-row'>"+
				              "<div class='arrow'></div>"+
				              "<img ng-src='"+LOCALPATH+"/WomenAndTech/wp/assets/img/{{image}}' alt='{{alternativeTextForImage}}'/>"+
				              "<figcaption class='clear'>"+
				                "<p ng-transclude></p>"+
				              "</figcaption>"+
				              "<div style='clear:both'></div>"+
				            "</figure>"+
				        "</div>"
		}
	})
	.directive('fullScreenCurtain', function() {
		return {
			transclude: true,
			scope: {
				image: '@',
			    title: '@',
			    caption: '@',
				photoCredit: '@'
			},
			template: "<div class='fullscreen'>"+
					      "<div class='parallax'>"+
					        "<div class='container'>"+
					          "<div class='info-panel'>"+
					            "<aside>"+
					              "<div class='arrow left'></div>"+
					              "<h3>{{title}}</h3>"+
					              "<p class='last'>{{caption}}</p>"+
					            "</aside>"+
					          "</div>"+
					        "</div>"+
					        "<img ng-src='"+LOCALPATH+"/WomenAndTech/wp/assets/img/{{image}}'/>"+
					        "<div class='photo-credit light'>"+
					          "Photo credit:{{photoCredit}}"+
					        "</div>"+
					      "</div>"+
					    "</div>"
		}
	}).directive('question', function() {
		return {
			transclude: true,
			template: "<div class='span7 offset4 interview-panel'>"+
         				"<h3 ng-transclude></h3>"+
         			"</div>"
		}
	}).directive('answer', function() {
		return {
			transclude: true,
			template: "<div class='span7 offset4 interview-panel' ng-transclude>"+
         			"</div>"
		}
	})
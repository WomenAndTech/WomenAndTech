var LOCALPATH = "http://localhost:8888/WomenAndTech/wp";
var DEVPATH = "http://dev.womenandtech.com";
var PRODPATH = "http://womenandtech.com";

var PATH = PRODPATH;

angular.module('womenAndTech', [])
	.directive('pullQuote', function() {
		return {
			transclude: true,
			template: "<div class='span11 pull-quote'>"+
							"<aside class='quote'>"+
							  "<h2 ng-transclude></h2>"+
							"</aside>"+
						"<div class='quote-mark'><img src='"+PATH+"/assets/img/quote-mark.png' /></div>"+
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
				              "<img ng-src='"+PATH+"/assets/img/{{image}}' alt='{{alternativeTextForImage}}'/>"+
				              "<figcaption class='clear'>"+
				                "<p ng-transclude></p>"+
				              "</figcaption>"+
				              "<div style='clear:both'></div>"+
				            "</figure>"+
				        "</div>"
		}
	})
	.directive('calloutWithoutImage', function() {
		return {
			restrict: 'E',
			transclude: true,
			scope: {
				title: '@'
			},
			template: " <div class='span4 info-panel'>"+
				            "<aside class='first-row'>"+
				              "<div class='arrow'></div>"+
				              "<h3 ng-if='title.length !== 0'>{{title}}</h3>"+
				                "<p class='last' ng-transclude></p>"+
				              "<div style='clear:both'></div>"+
				            "</aside>"+
				        "</div>"
		}
	})
	.directive('calloutWithVideo', function() {
		return {
			restrict: 'E',
			transclude: true,
			scope: {
				video: '@',
				caption: '@'
			},
			template: "<div class='span4'>"+
          				"<div class='photo-callout notable-person'>"+
				            "<figure class='first-row'>"+
				              "<div class='arrow'></div>"+
				              "<iframe src='{{video}}'' width='278' height='156' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>"+
				              "<figcaption class='clear'>"+
				                "<p>{{caption}}</p>"+
				              "</figcaption>"+
				              "<div style='clear:both'></div>"+
				            "</figure>"+
				          "</div>"+
				        "</div>"
		}
	})
	.directive('notablePerson', function() {
		return {
			restrict: 'E',
			transclude: true,
			scope: {
				image: '@',
				linkOnImage: '@',
				alternativeTextForImage: '@'
			},
			template: " <div class='span4 notable-person'>"+
				            "<figure class='first-row'>"+
				              "<div class='arrow'></div>"+
				              "<h3>Notable Person</h3>"+
				              "<a ng-href='{{linkOnImage}}' target='_blank'><img ng-src='"+PATH+"/assets/img/{{image}}' alt='{{alternativeTextForImage}}'/></a>"+
				              "<figcaption class='clear' ng-transclude>"+
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
				photoCredit: '@',
				id:'@'
			},
			template: "<div class='fullscreen'>"+
					      "<div class='parallax'>"+
					        "<div class='container'>"+
					          "<div class='info-panel' id={{id}} ng-show='title.length !== 0'>"+
					            "<aside>"+
					              "<div class='arrow right'></div>"+
					              "<h3>{{title}}</h3>"+
					              "<p class='last'>{{caption}}</p>"+
					            "</aside>"+
					          "</div>"+
					        "</div>"+
					        "<img ng-src='"+PATH+"/assets/img/{{image}}'/>"+
					        "<div class='photo-credit light'>"+
					          "Photo credit: {{photoCredit}}"+
					        "</div>"+
					      "</div>"+
					    "</div>"
		}
	})
	.directive('question', function() {
		return {
			transclude: true,
			template: "<div class='span7 offset4 interview-panel'>"+
         				"<h3 ng-transclude></h3>"+
         			"</div>"
		}
	})
    .directive('answer', function() {
		return {
			transclude: true,
			template: "<div class='span7 offset4 interview-panel' ng-transclude>"+
         			"</div>"
		}
	})
    .directive('firstQuestion', function() {
		return {
			transclude: true,
			template: "<div class='span7 interview-panel'>"+
         				"<h3 ng-transclude></h3>"+
         			"</div>"
		}
	})
	.directive('firstAnswer', function() {
		return {
			transclude: true,
			template: "<div class='span7 interview-panel' ng-transclude>"+
         			"</div>"
		}
	})
	.directive('questionForNextInterviewee', function() {
		return {
			transclude: true,
			scope: {
				image: '@',
			    firstnameOfNextInterviewee: '@'
			},
			template: "<div class='span8 offset3'>"+
			            "<div class='row-fluid callout-question'>"+
			              "<div class='span12' id='question-prompt'>"+
			                "<h3 id='without-knowing-who-they-are-please-pose-a-question-for-our-next-interviewee'>Without knowing who they are, please pose a question for our next interviewee.</h3>"+
			              "</div>"+
			              "<div id='question-details'>"+
			                "<div id='profile-image'>"+
			                  "<img ng-src='"+PATH+"/assets/img/{{image}}'/>"+
			                "</div>"+
			                "<h4 ng-transclude></h4>"+
			                "<div id='quote-mark'>"+
			                  "<img ng-src='"+PATH+"/assets/img/quote-mark-small.png' />"+
			                "</div>"+
			              "</div>"+
			            "</div>"+
			            "<div class='row-fluid'>"+
			              "<div class='span12' id='call-to-action'>"+
			                "<p>"+
			                  "Be sure to check back next time (or <a href='#subscribe' title='Subscribe form' target='_blank'>subscribe below</a>) for {{firstnameOfNextInterviewee}}'s answer to this question."+
			                "</p>"+
			              "</div>"+
			            "</div>"+
			          "</div>"
		}
	});
//Page Loader
$(window).load(function() { // makes sure the whole site is loaded
	$('#status').fadeOut(); // will first fade out the loading animation
	$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
	$('body').delay(350).css({
		'overflow': 'visible'
	});
})
//Full Page Div
/*$(function() {
	$('.feature').css({
		'height': (($(window).height())) + 'px'
	});
});*/
//Append Meta Tags
/*
var desc = $('#meta-desc').text();
$('head').append('<meta property="og:description" content="' + desc + '"> <meta name="description" content="' + desc + '">');
var img = $('#meta-img').attr('src');
$('head').append('<meta property="og:image" content="http://' + window.location.host + img + '">');
*/
//alert(author);
// Enable FitVids
$(".fitvid").fitVids();
//Stream Scroll Fix
if ($(window).width() > 800) {
	$(window).on("load resize", function(e) {
		var s = $(".stream");
		var pos = s.position();
		$(window).scroll(function() {
			var windowpos = $(window).scrollTop();
			//s.html("Distance from top:" + pos.top + "<br />Scroll position: " + windowpos);
			if (windowpos >= pos.top) {
				s.addClass("fix");
			} else {
				s.removeClass("fix");
			}
		});
	});
}
// Social Sharing
String.prototype.ReplaceAll = function(stringToFind, stringToReplace) {
	var temp = this;
	var index = temp.indexOf(stringToFind);
	while (index != -1) {
		temp = temp.replace(stringToFind, stringToReplace);
		index = temp.indexOf(stringToFind);
	}
	return temp;
};
var tweet = $("#meta-title").text();
tweet = tweet.ReplaceAll(" ", "+");
tweet = encodeURI(tweet);
var longUrl = window.location.href;
$("#twitter-share-link").attr("href", "https://twitter.com/intent/tweet?url=" + longUrl + "&via=RudimentaryRec&text=" + tweet);



var facebook = "&p[url]=" + longUrl + "&p[images][0]=" + $("#meta-img").text() + "&p[title]=" + $("#meta-title").text() + "&p[summary]=" + $("#meta-desc").text();
facebook = facebook.ReplaceAll(" ", "+");
facebook = encodeURI(facebook);
var longUrl = window.location.href;
$("#facebook-share-link").attr("href", "http://www.facebook.com/sharer/sharer.php?s=100" + facebook);


var googleplus = "?url=" + longUrl;
googleplus = googleplus.ReplaceAll(" ", "+");
googleplus = encodeURI(googleplus);
var longUrl = window.location.href;
$("#googleplus-share-link").attr("href", "https://plus.google.com/share" + googleplus);


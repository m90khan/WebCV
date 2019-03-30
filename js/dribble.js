// //Image width 800x600 (Animated)
// val.images.hidpi
// //Image width 400x300
// val.images.normal
// //Image width 200x150
// val.images.teaser
// //Title
// val.title
// //Description
// val.description
// //URL
// val.html_url
// Set the Access Token
var accessToken = 'c13890a8dfcdae4ae38405b74721253242350dd2a460f081be3264498f19330b';

// Call Dribble v2 API
$.ajax({
    url: 'https://api.dribbble.com/v2/user/shots?access_token='+accessToken,
    dataType: 'json',
    type: 'GET',
    success: function(data) {
      if (data.length > 0) {
        $.each(data.reverse(), function(i, val) {
          $('.shotme').prepend(
            '<a class="shot" target="_blank" href="'+ val.html_url +'" title="' + val.title + '"><div class="title">' + val.title + '</div><img src="'+ val.images.hidpi +'"/></a>'
            )
        })
      }
      else {
        $('.shotme').append('<p>No shots yet!</p>');
      }
    }
});

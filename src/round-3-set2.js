$(document).ready(function(){
  var $banner = $('.ucareb');
  $banner.each(function(){
    var $thisBanner = $(this);
    var $textDelay = $thisBanner.data('textDelay');
    var $logoDelay = $thisBanner.data('logoDelay');

    //logo text reveal
    var $logoText = $thisBanner.find('.logo-text');
    var $logoHide = $logoText.find('.logo-hide');
    var $hideDuration = $logoHide.data('logoReveal');
    setTimeout(function() {
      $logoHide.toggleClass('active');
    }, $hideDuration);

    //text
    var $frames = $thisBanner.find('.frames');
    var $final = $thisBanner.find('.final-frame');
    var $tagline = $thisBanner.find('.tagline');
    var $button = $thisBanner.find('.button');

    //reveal the text and button
    setTimeout(function() {
      $tagline.toggleClass('inactive');
      $button.toggleClass('inactive');
    }, $textDelay);

    $frames.each(function(){
      var $frame = $(this).find('span');
      $frame.each(function(){
        var $this = $(this);
        var $timeline = $this.data('timeline');
        setTimeout(function() {
          $this.addClass('active');
        }, $timeline);
      });
    });//frames each

    $final.each(function(){
      var $this = $(this);
      var $timeline = $this.data('timeline');
      setTimeout(function() {
        $this.addClass('active');
      }, $timeline);
    });//final

    //logo spark spin-in
    setTimeout(function() {
      $spark = $thisBanner.find('.logo-spark');
      $spark.toggleClass('inactive');
    }, $logoDelay);

  });//banner each
});

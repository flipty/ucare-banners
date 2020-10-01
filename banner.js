$(document).ready(function(){
  var $banner = $('.ucareb');
  $banner.each(function(){
    var $thisBanner = $(this);
    var $textDelay = $thisBanner.data('textDelay');
    var $sparkDelay = $thisBanner.data('sparkDelay');
    //logo text reveal
    var $logoText = $thisBanner.find('.logo-text');
    var $logoHide = $logoText.find('.logo-hide');
    var $hideDuration = $logoHide.data('duration');
    var $hideSpeed = $logoHide.data('reveal');
    setTimeout(function() {
      $logoHide.toggleClass('active');
    }, $hideDuration);
    //text
    var $textJumper = $thisBanner.find('.text-jumper');
    var $button = $thisBanner.find('.button');
    //reveal the text and button
    setTimeout(function() {
      $textJumper.toggleClass('inactive');
      $button.toggleClass('inactive');
    }, $textDelay);
    $textJumper.each(function(){
      var $word = $(this).find('span');
      $word.each(function(){
        var $this = $(this);
        var $timeline = $this.data('timeline');
        var $duration = $timeline + 500;
        setTimeout(function() {
          $this.toggleClass('active');
        }, $timeline);
        setTimeout(function() {
          $this.toggleClass('active');
        }, $duration);
      });
    });//tj each
    //logo spark spin-in
    setTimeout(function() {
      $spark = $thisBanner.find('.logo-spark');
      $spark.toggleClass('inactive');
    }, $sparkDelay);
  });//banner each
});

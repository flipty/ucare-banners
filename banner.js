$(document).ready(function(){

  var $banner = $('.ucareb');
  $banner.each(function(){
    var $this = $(this);
    var $textJumper = $this.find('.text-jumper');

    $textJumper.each(function(){
      var $word = $(this).find('span');
      $word.each(function(index){
        var $duration = $(this).data('duration');
        console.log(index + ' ' + $(this).text() + $duration + 'ms' );
      });
    });

  });

});

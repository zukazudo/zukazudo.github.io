window.players = function($elem) {
    var top = parseInt($elem.css("top"));
    var temp = -1 * $('.players > li').height();
    if(top < temp) {
        top = $('.players').height()
        $elem.css("top", top);
    }
    $elem.animate({ top: (parseInt(top)-60) }, 600, function () {
      window.players($(this))
    });
}
$(document).ready(function() {
    var i = 0;
    $(".players > li").each(function () {
          $(this).css("top", i);
          i += 60;
          window.players($(this));
    });
});
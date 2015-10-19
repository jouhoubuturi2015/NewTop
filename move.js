/*----------------------------------ページ内自動スクロール（jquery使用）-----------------*/
$(function(){
        $('a[href^=#]').click(function(){
            var speed = 800;
            var href= $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top;
            $("html, body").animate({scrollTop:position}, speed, "swing");
            return false;
        });
    });


/*----------------------------------ドロップダウンメニュー（jquery使用）-----------------*/
$(function () {
    $('button').click(function(){
        $("#menu ul").slideToggle();
        
    });
    
    $(window).scroll(function() {
        $("#menu ul").hide();
    });
    
});
  















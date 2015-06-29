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


/*----------------------------------マウスオーバープロフィール画面（jquery使用）-----------------*/
$(function(){
    $('#misawa').hover(
        function(){ //マウスオーバー処理
            $('#default').css("display","none");
            $('#misawa_profile').css("display","inline");
        },
        function(){ //マウスアウト処理
            $('#misawa_profile').css("display","none");
            $('#default').css("display","inline");
        }
    );
});



/*
$(function(){
    var memberlist = ["matsubara", "misawa", "nishi", "nizato", "okada", "sone", "toyota"];
    for(var i=0 ; i<memberlist.length; i++){
        console.log(memberlist[i]);
        $('#' + memberlist[i]).hover(
            function(){ //マウスオーバー処理
                console.log(memberlist[i]);
                $('#default').css("display","none");
                $('#'+memberlist[i]+'_profile').css("display","inline");
            },
            function(){ //マウスアウト処理
                $('#'+memberlist[i]+'_profile').css("display","none");
                $('#default').css("display","inline");
            }
        );
    }
});
*/

























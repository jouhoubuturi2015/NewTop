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
    $('#matsubara').hover(
        function(){ //マウスオーバー処理
            $('#default').css("display","none");
            $('#matsubara_profile').css("display","inline");
        },
        function(){ //マウスアウト処理
            $('#matsubara_profile').css("display","none");
            $('#default').css("display","inline");
        }
    );
});


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


$(function(){
    $('#nishi').hover(
        function(){ //マウスオーバー処理
            $('#default').css("display","none");
            $('#nishi_profile').css("display","inline");
        },
        function(){ //マウスアウト処理
            $('#nishi_profile').css("display","none");
            $('#default').css("display","inline");
        }
    );
});


$(function(){
    $('#nizato').hover(
        function(){ //マウスオーバー処理
            $('#default').css("display","none");
            $('#nizato_profile').css("display","inline");
        },
        function(){ //マウスアウト処理
            $('#nizato_profile').css("display","none");
            $('#default').css("display","inline");
        }
    );
});


$(function(){
    $('#okada').hover(
        function(){ //マウスオーバー処理
            $('#default').css("display","none");
            $('#okada_profile').css("display","inline");
        },
        function(){ //マウスアウト処理
            $('#okada_profile').css("display","none");
            $('#default').css("display","inline");
        }
    );
});


$(function(){
    $('#sone').hover(
        function(){ //マウスオーバー処理
            $('#default').css("display","none");
            $('#sone_profile').css("display","inline");
        },
        function(){ //マウスアウト処理
            $('#sone_profile').css("display","none");
            $('#default').css("display","inline");
        }
    );
});


$(function(){
    $('#toyota').hover(
        function(){ //マウスオーバー処理
            $('#default').css("display","none");
            $('#toyota_profile').css("display","inline");
        },
        function(){ //マウスアウト処理
            $('#toyota_profile').css("display","none");
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

/*
var memberlist = ["matsubara", "misawa", "nishi", "nizato", "okada", "sone", "toyota"];
    for(var i=0 ; i<memberlist.length; i++){

        var name = memberlist[i];
        $(function memberpro(name));
    }

$(function memberpro(name){
    $('#'+name).hover(
        function mover(name){ //マウスオーバー処理
            $('#default').css("display","none");
            $('#'+name+'_profile').css("display","inline");
        },
        function mout(name){ //マウスアウト処理
            $('#'+name+'_profile').css("display","none");
            $('#default').css("display","inline");
        }
    );
});
*/






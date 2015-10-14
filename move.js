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


/*----------------------------------マウスオーバープロフィール画面（jquery使用）-----------------*//*
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





/*----------------------------------スクロール値取得（jquery使用）-----------------*//*
$(window).on('scroll', function() {
    // 現在のスクロール位置
    var scrollPos = $(this).scrollTop();
    
    $('article#page_body>section').css("background-color","rgba("+change+","+change+","+change+",0.5)");
    //$('#posy').html('スクロール値: ' + scrollPos + 'px');
});
*/






$(function(){
    $( '.member_list' ).click(function(){
        $('#fp').css("padding-top","0");
        $('#menu').css("padding-top","0");
        $('#member_pic').css("bottom","0");
        $('#profile_area').css("display","block");
    });
    
     $( '#matsubara' ).click(function(){
        $('.profile').css("display","none");
        $('#matsubara_profile').css("display","inline");
    });
    $( '#misawa' ).click(function(){
        $('.profile').css("display","none");
        $('#misawa_profile').css("display","inline");
    });
    $( '#nishi' ).click(function(){
        $('.profile').css("display","none");
        $('#nishi_profile').css("display","inline");
    });
    $( '#nizato' ).click(function(){
        $('.profile').css("display","none");
        $('#nizato_profile').css("display","inline");
    });
    $( '#okada' ).click(function(){
        $('.profile').css("display","none");
        $('#okada_profile').css("display","inline");
    });
    $( '#sone' ).click(function(){
        $('.profile').css("display","none");
        $('#sone_profile').css("display","inline");
    });
    $( '#toyota' ).click(function(){
        $('.profile').css("display","none");
        $('#toyota_profile').css("display","inline");
    });
});






$(function(){
    $("#matsubara").on({
        "click":function(){
            $(".member_list").removeClass("animated fadeOutUp");
            $(this).addClass("animated fadeOutUp");
        }
    });
    $("#misawa").on({
        "click":function(){
            $(".member_list").removeClass("animated fadeOutUp");
            $(this).addClass("animated fadeOutUp");
        }
    });
    $("#nishi").on({
        "click":function(){
            $(".member_list").removeClass("animated fadeOutUp");
            $(this).addClass("animated fadeOutUp");
        }
    });
    $("#nizato").on({
        "click":function(){
            $(".member_list").removeClass("animated fadeOutUp");
            $(this).addClass("animated fadeOutUp");
        }
    });
    $("#okada").on({
        "click":function(){
            $(".member_list").removeClass("animated fadeOutUp");
            $(this).addClass("animated fadeOutUp");
        }
    });
    $("#sone").on({
        "click":function(){
            $(".member_list").removeClass("animated fadeOutUp");
            $(this).addClass("animated fadeOutUp");
        }
    });
    $("#toyota").on({
        "click":function(){
            $(".member_list").removeClass("animated fadeOutUp");
            $(this).addClass("animated fadeOutUp");
        }
    });
});





/*----------------------------------マウスオーバープロフィール画像（jquery使用）-----------------*/
$(function(){
    $('.profile .member_list').hover(
        function(){ //マウスオーバー処理
            $('.profile .member_list a').css("display","block");
            $('.profile .member_list a').css("background-color","block");
            //$('#matsubara_profile').css("display","inline");
        },
        function(){ //マウスアウト処理
            $('.profile .member_list a').css("display","none");
            //$('#default').css("display","inline");
        }
    );
});













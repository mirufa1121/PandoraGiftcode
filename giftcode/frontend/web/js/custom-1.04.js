jQuery(document).ready(function () {

    //carousel
    function _carousel(){
        $('.jcarousel').jcarouselAutoscroll({
            autostart: true
        });
    }

    //move block
    function move_block() {
    	var w_body = $('body').width();
    	if(w_body <= 767){
            $('.detail-wrap .game-info .rside').remove().insertBefore('.detail-wrap .game-info .lside .gm-info');
            $('.detail-wrap .dt-title-block').remove().insertBefore('.detail-wrap .game-info');
            $('.detail-wrap .game-info .rside .conditions-block').remove().insertBefore('.detail-wrap .game-info .rside .rs-block1 .kind-code');
            //$('.detail-wrap .share-block').remove().insertAfter('.detail-wrap .dt-title-block .dt-title');
            $('.detail-wrap .member-list').remove().insertBefore('.detail-wrap .game-info .rside .gift-tabs');
        }
        else if(w_body >= 768){
        	$('.detail-wrap .game-info .rside').remove().insertAfter('.detail-wrap .game-info .lside');
            $('.detail-wrap .dt-title-block').remove().insertBefore('.detail-wrap .game-info .rs-block1');
            $('.detail-wrap .game-info .rside .conditions-block').remove().insertAfter('.detail-wrap .game-info .rside .rs-block1');
            //$('.detail-wrap .share-block').remove().insertBefore('.detail-wrap .game-info .lside .gm-info');
            $('.detail-wrap .member-list').remove().insertBefore('.detail-wrap .game-info .lside .gm-info');
        }
    }

    //tooltip btn close
    function tooltip_btn_close() {
        $(this).parent().css("display","none");
    }

    //scroll to top
    function scrolltotop(){
        $("#back-top").hide();
        //--------------------------
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        $('.scrolltotop').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    }

    //hide and show sticky
    function sticky_box(){
        $(window).scroll(function () {
            var h_scroll = $(document).height() - $(window).height() - $('.footer').height() - 50;
            if ($(this).scrollTop() < h_scroll) {
                $('.sticky-rb').fadeIn();
            } else {
                $('.sticky-rb').fadeOut();
            }
        });
    }

    //add sticky
    function add_sticky(){
        $(window).scroll(function () {
            var h_add = $('.header .tophead').height();
            if ($(this).scrollTop() > h_add) {
                $('.header .mainhead').addClass('add-sticky');
                $('.breadcrumb').addClass('add-sticky');
            } else {
                $('.header .mainhead').removeClass('add-sticky');
                $('.breadcrumb').removeClass('add-sticky');
            }
        });
    }


    //gift-tabs
    function tab_content_detail(){
        $(".tab-content-detail").each(function (index) {
            var h_ct = $(this).children(".tc-detail").height();
            if ( h_ct > 204) {
                $(this).children(".tc_btn").css("display","block");
            }
        });

        var gm_txt = $(".gm-txt-container .gm-txt").height();
        if ( gm_txt > 99) {
            $(".gm-txt-container .seemore").css("display","block");
        }
    }
    function tab_content_seemore() {
        $(this).parent().prev().css("max-height","none");
        $(this).css("display","none");
    }
    function gm_txt_seemore() {
        $(this).prev().css("max-height","none");
        $(this).css("display","none");
    }

    //Load
    _carousel();
    move_block();
    $('.tooltip .tt-close-btn').click(tooltip_btn_close);
    scrolltotop();
    //sticky_box();
    add_sticky();

    //load last
    $(window).load(function() {
        tab_content_detail();
        $('.tab-content-detail .tc_btn .seemore').click(tab_content_seemore);
        $('.gm-txt-container .seemore').click(gm_txt_seemore);
    });

    //Body is resized
    $(window).resize(function () {
        move_block();
    });
});

var QR = QR || {};

QR.main = {};

(function (window, document, $, undefined) {
    'use strict';
    var $searchIcon =  $('.fa-search'),
        $menuIcon= $('.hamburger'),
        $searchContent = $('.search-content'),
        $field = $('.search-field'),
        $menu = $('.menu'),
        $item = $('.menu .item'),
        $bars = $('.fa-bars'),
        $times = $('.fa-times');


    function closeSearch(){
        console.log('closeSearch');
        $searchContent.slideUp('fast');
        $searchIcon.removeClass('open');
    }

    function closeMenu(){
        console.log('closeMenu');
        $menu.slideUp('fast');
        $menuIcon.removeClass('open');
        $times.fadeOut(100, function(){
            $bars.fadeIn(50);
        });
    }

    function reset(){
       $menu.removeAttr('style');
       $bars.removeAttr('style');
       $times.removeAttr('style');
       
    }

    function initMobile(){
        console.log('initMobile');
        reset();
        $('.fa-search').on('click', function(e){
            var $this = $(this);

            if($('.menu').is(':visible')){
               closeMenu();
            }

            if(!$searchContent.is(':visible')){
                $this.addClass('open');
                $searchContent.slideDown('fast', function(){
                    $field.focus();
                })
            }else{
                closeSearch();
                
            }
        });

        $('.hamburger').on('click', function(e){
            var $this = $(this);

            if($('.search-content').is(':visible')){
                closeSearch();
            }
            if(!$menu.is(':visible')){
                $menu.slideDown('fast');
                $this.addClass('open');
                $bars.fadeOut(100, function(){
                    $times.fadeIn(50);
                });
            }else{
                closeMenu();
            }
        });

        $('.item').on('click', function(){
            var $this = $(this),
                $icon = $this.find('.fa'),
                $subMenu = $this.find('.sub-menu'),
                $categories = $this.find('.categories'),
                $subItems = $this.find('.sub-items');

            if(!$subMenu.is(':visible')){
                $item.removeClass('current');
                $('.menu .sub-menu').hide();
                $('.menu .fa').addClass('fa-angle-down').removeClass('fa-angle-up');
                $subMenu.slideDown('fast');
                $this.addClass('current');
                $icon.addClass('fa-angle-up').removeClass('fa-angle-down');
            }else{
                $subMenu.slideUp('fast', function(){
                    $this.removeClass('current');
                    $icon.addClass('fa-angle-down').removeClass('fa-angle-up');
                });
            }
        });
    }

    function initDesktop(){
        console.log('initDesktop');
        reset();

        $('.item').on('click', function(){
            var $this = $(this),
                $icon = $this.find('.fa'),
                $subMenu = $this.find('.sub-menu'),
                $categories = $this.find('.categories'),
                $subItems = $this.find('.sub-items');

            if(!$subMenu.is(':visible')){
                $item.removeClass('current');
                $('.menu .sub-menu').hide();
                $('.menu .fa').addClass('fa-angle-down').removeClass('fa-angle-up');
                $subMenu.slideDown('fast');
                $this.addClass('current');
                $icon.addClass('fa-angle-up').removeClass('fa-angle-down');
            }else{
                $subMenu.slideUp('fast', function(){
                    $this.removeClass('current');
                    $icon.addClass('fa-angle-down').removeClass('fa-angle-up');
                });
            }


        });
    }

    function init(){
        console.log('init');
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && window.innerWidth < 1024) {
            initMobile();
        }else{
            initDesktop();
        }
    }

    $(window).resize(function() {
        if(this.resizeTO){
            clearTimeout(this.resizeTO);    
        } 
        this.resizeTO = setTimeout(function() {
            console.log('resize');
            init();
            
        }, 500);
    });

    // Externaliza
    QR.main.init = init;
    QR.main.desktop = initDesktop;
    QR.main.mobile = initMobile;
    init();
}(this, document, jQuery));
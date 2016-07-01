function include(url){document.write('<script type="text/javascript" src="'+url+'"></script>')}

//------ base included scripts -------//
include('themes/blog_mainpage/js/jquery.easing.js');
include('themes/blog_mainpage/js/jquery.mousewheel.min.js');
include('themes/blog_mainpage/js/jquery-ui-1.10.3.custom.min.js');
include('themes/blog_mainpage/js/jquery.ui.touch-punch.js');
include('themes/blog_mainpage/js/jquery.touchSwipe.min.js');
include("themes/blog_mainpage/js/jquery-migrate-1.1.1.js");
include('themes/blog_mainpage/js/camera.js');
include('themes/blog_mainpage/js/jquery.equalheights.js');
include('themes/blog_mainpage/js/sForm.js');
  <!--[if (gt IE 9)|!(IE)]><!-->
     include('themes/blog_mainpage/js/jquery.mobile.customized.min.js');
     <!--<![endif]-->

//include('themes/blog_mainpage/js/jquery.equalheights.js');

if(!FJSCore.mobile && !FJSCore.tablet){
    include('themes/blog_mainpage/js/jquery.superscrollorama.js');
}

if(!FJSCore.mobile){
    include('themes/blog_mainpage/js/spin.min.js');
    include('themes/blog_mainpage/js/hoverIntent.js');
    include('themes/blog_mainpage/js/superfish.js');
    include('themes/blog_mainpage/js/greensock/TweenMax.min.js');    
    include("themes/blog_mainpage/js/jquery.ui.totop.js");
} else{
        
}
//------------------------------------//
var win = $(window),
    doc = $(document),
    previousState = currentState = '',
    defLocation,
    msie = (navigator.appVersion.indexOf("MSIE")!==-1);
    currIndex = 0; 



function spinnerInit(){    
    var opts = {
        lines: 11,
        length: 10,
        width: 5,
        radius: 14, 
        corners: 1,
        color: '#fff',
        speed: 1.3,
        trail: 5
    },
    spinner = new Spinner(opts).spin($('#webSiteLoader')[0]);
}

function initPlugins(){
    (!FJSCore.mobile && previousState && (FJSCore.state != previousState))&&($('.historyBack').attr('href','./'+previousState));

    if(!FJSCore.mobile){
      $().UItoTop({ easingType: 'easeOutQuart'});
  }



   
    
    setTimeout(function () { win.trigger('resize'); }, 500);
    if(!FJSCore.mobile){
    spinnerInit();
    }
    //},300)
    
    // photoswipe
    // var phSwipe = $(".gall > div > a")
    // phSwipe.length && phSwipe.photoSwipe();

    // height_handler();

}

function scrolloramaInit(){
    if(!FJSCore.mobile && !FJSCore.tablet){
    var controller = $.superscrollorama();

    controller
        // page 1
        //.addTween('h1', TweenMax.from( $('h1'), 0.8, {delay: 0.4, css:{opacity: 0, scale: 0.2, rotation: 270, marginTop: -200}, ease: Expo.easeOut}))
        //.addTween('#page2 h4', TweenMax.from( $('#page2 h4'), 1.7, {delay: 1.3, css:{left: '-50%', opacity: 0}, ease: Cubic.easeOut}),0 , -100)
        .addTween('h1', TweenMax.from( $('h1'), 0.8, {delay: 1.2, css:{opacity: 0}, ease: Expo.easeOut}))
        .addTween('header', TweenMax.from( $('header'), .5, {delay: 0.8, css:{top: -100}, ease: Cubic.easeOut}))

        // page 2
       .addTween('#page2_item1', TweenMax.from( $('#page2_item1'), 1.0, {delay: 1.4, css:{left: -1000, opacity: 0, rotation:  0}, ease: Cubic.easeOut}), 0 ,-150)
        .addTween('#page2_item2', TweenMax.from( $('#page2_item2'), 1.0, {delay: 1.2, css:{left: -1000, opacity: 0, rotation:  0}, ease: Cubic.easeOut}), 0 ,-150)
        .addTween('#page2_item3', TweenMax.from( $('#page2_item3'), 1.0, {delay: 1.2, css:{left: 1000, opacity: 0, rotation:  0}, ease: Cubic.easeOut}), 0 ,-150)
        .addTween('#page2_item4', TweenMax.from( $('#page2_item4'), 1.0, {delay: 1.4, css:{left: 1000, opacity: 0, rotation:  0}, ease: Cubic.easeOut}), 0 ,-150)
        .addTween('#page2 h2', TweenMax.from( $('#page2 h2'), 1.7, {delay: 0.2, css:{left: -1000, opacity: 0}, ease: Cubic.easeOut}),0)

        .addTween('#page2_p', TweenMax.from( $('#page2_p'), 1.7, {delay: 1.0, css:{left: 1000, opacity: 0}, ease: Cubic.easeOut}),0 , 0)
        
        // page 3
        .addTween('#page3 .p3', TweenMax.from( $('#page3 .p3'), .7, {delay: 1.0, css:{left: '-50%', opacity: 0}, ease: Cubic.easeOut}), -160)
        .addTween('#page3 .t1', TweenMax.from( $('#page3 .t1'), .8, {delay: 1.2, css:{left: '-50%', opacity: 0}, ease: Cubic.easeOut}), -160)
         .addTween('#page3 .p2', TweenMax.from( $('#page3 .p2'), .8, {delay: 1.3, css:{left: '-50%', opacity: 0}, ease: Cubic.easeOut}), -160)
        .addTween('#page3 .p3_item1', TweenMax.from( $('#page3 .p3_item1'), .7, {delay: 1.4, css:{left: '-100%', opacity: 0}, ease: Cubic.easeOut}),0 ,-160)
        .addTween('#page3 .p3_item2', TweenMax.from( $('#page3 .p3_item2'), .7, {delay: 1.2, css:{left: '-100%', opacity: 0}, ease: Cubic.easeOut}),0 ,-160)
        .addTween('#page3 .p3_item3', TweenMax.from( $('#page3 .p3_item3'), .7, {delay: 1.2, css:{right: '-100%', opacity: 0}, ease: Cubic.easeOut}),0 ,-200)
        .addTween('#page3 .p3_item4', TweenMax.from( $('#page3 .p3_item4'), .7, {delay: 1.4, css:{right: '-100%', opacity: 0}, ease: Cubic.easeOut}),0 ,-250)
        
        // page 4
        .addTween('#page4 h2', TweenMax.from( $('#page4 h2'), .7, {delay: 1.0, css:{left: '-50%', opacity: 0}, ease: Cubic.easeOut}), -160)
        .addTween('#page4_item1', TweenMax.from( $('#page4_item1'), .7, {delay: 1.4, css:{left: '-100%', opacity: 0}, ease: Cubic.easeOut}),0 ,-160)
        .addTween('#page4_item2', TweenMax.from( $('#page4_item2'), .7, {delay: 1.2, css:{left: '-100%', opacity: 0}, ease: Cubic.easeOut}),0 ,-160)
        .addTween('#page4_item3', TweenMax.from( $('#page4_item3'), .7, {delay: 1.2, css:{right: '-100%', opacity: 0}, ease: Cubic.easeOut}),0 ,-200)
        .addTween('#page4_item4', TweenMax.from( $('#page4_item4'), .7, {delay: 1.4, css:{right: '-100%', opacity: 0}, ease: Cubic.easeOut}),0 ,-250)

        // page 5
        .addTween('#page5 h2', TweenMax.from( $('#page5 h2'), .7, {delay: 0.6, css:{left: '-50%', opacity: 0}, ease: Cubic.easeOut}),0 , -170)
        .addTween('#page5 p', TweenMax.from( $('#page5 p'), .7, {delay: 0.6, css:{left: '-50%', opacity: 0}, ease: Cubic.easeOut}),0 , -150)
        .addTween('#page5 #form1', TweenMax.from( $('#page5 #form1'), .7, {delay: 0.6, css:{right: '-50%', opacity: 0}, ease: Cubic.easeOut}),0 , -150)
       
}}


$(document).on('changeLocation',function (e){
    previousState = currentState;
    currentState = history.state;
})

$(function(){
    $("#year").text((new Date).getFullYear());
    $("#year1").text((new Date).getFullYear());

    previousState = currentState = history.state;

    /*var doMenuHide = false;*/

    $('#mainNav>ul>li>a').each(function(){
        var $this = $(this),
            txt = $this.text();
        $this.html('<div><span>'+ txt +'</span></div><div><span>'+ txt +'</span><em></em></div>');
    })
    // hide menu on events
    /*
    .parents('#mainNav')
        .on('mouseenter', function(){
            doMenuHide = false;
        })
        .on('mouseleave', function(){
            doMenuHide = true;
            setTimeout(function(){ 
                if (doMenuHide) {
                    $('#menuToggler').trigger('click', 'hide');
                }
            }, 3000)
        })
    */

    /*
    $('#menuToggler').click(function(e, d){
        var $nav  = $('#mainNav');

        function showMenu(){
            // show menu
            $(this).addClass('pressed');
            $nav
                .css({"zIndex": 10})
                .removeClass('hideMenu')
                .off('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd')
                .on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function(e) {
                    $(this).css({"zIndex": 50}) 
                })
        }

        function hideMenu(){
            // hide menu
            $(this).removeClass('pressed');
            $nav
                .addClass('hideMenu')
                .css({"zIndex": 10})
        }

        if (d) {
            switch (d){
                case 'show':
                    showMenu();
                break;
                case 'hide':
                    hideMenu();
                break;
            }
        } else{
            (!$nav.hasClass('hideMenu')) ? hideMenu() : showMenu();
        }
        return false;
    });
*/
    
    // camera
    $('#camera_wrap').camera({
        loader: true,
        pagination: false,
        thumbnails: false,
        height: '57.52136752136752%',
        caption: true,
        navigation: true,
        fx: 'simpleFade',
        autoAdvance: true
    });

    $(".navigCamera .next_b").click(function(){
            $(".camera_next").click();
            }
        );
    $(".navigCamera .prev_b").click(function(){
            $(".camera_prev").click();
            }
        );
    // end camera

    initPlugins();
    
    if(FJSCore.mobile){
        $('body').css({'min-width':'inherit'});   

       // $('#mobile-navigation > option').eq(2).remove();

        $(document)
        .on('show','#mobile-content>*', function(e,d){    
            initPlugins(); 
            $(".folioList > li").click( function(){
            var instance = Code.photoSwipe('.photoSwipe1 a', this);
            Code.PhotoSwipe.Current.show(0);                   
                    }
                )              
        })      
        .on('hide','#mobile-content>*',function(e,d){
        })
    } else {
        $('#mainNav').superfish({
            animation:     {height:'show'},
            animationOut:  {height:'hide'},
            delay: 500
        });

        spinnerInit();
        scrolloramaInit();
    }
    
    var otherPageContainer = $('#other_pages'),
        $selector = !msie ? $('body'): $('html');
    otherPageContainer
        .on('show','>*',function(e,d){
            $.when(d.elements)
                .then(function(){

                    $('.galleryHolder', d.curr)
                        .trigger('showGallery')
                        .trigger('goTo', [currIndex.toString(), 'quick'])
                        // .trigger('goTo', currIndex.toString());
                    
                    // d.curr.find('.inner a').eq(currIndex-1).click();

                    $('#category_pages .closeBtn').addClass('fa fa-times');

                    if(!d.curr.hasClass('_active')){
                        d.curr                      
                            .stop()
                            .css({
                                display:'block'
                            ,   opacity:0
                            })
                            .animate({
                                opacity:1
                            },{
                                duration:200
                                ,complete:function(){
                                    d.curr.addClass('_active');
                                    win.trigger('resize');
                                }
                            })
                    }

                    initPlugins();

                     $('body').addClass('show-sub-pages');

                    d.curr
                        .addClass('activeSubPage')             
                        .stop(true, true)
                        .css({display:'block', top:-$(window).outerHeight()})
                        .animate({
                            top:40
                        },{
                            duration:800,
                            ease: 'easeOutExpo',
                            complete:function(){
                                FJSCore.modules.longScroller.blockScrollCalc = true;
                                $selector
                                    .css({'overflow':'hidden','-webkit-overflow-scrolling':'none'});
                                $('body')
                                    .trigger('resizeContent');                            
                            }
                        })
                })          
        })
        .on('hide','>*',function(e,d){
            FJSCore.modules.longScroller.blockScrollCalc = false;
            $(this)
                .removeClass('activeSubPage')
                .stop(true, true)
                .animate({
                    top: -$(window).outerHeight()
                },{
                    duration:800,
                    ease: 'easeInExpo',
                    complete:function(){
                        $(this).css({display:'none'});
                        $selector
                            .css({'overflow':'visible', '-webkit-overflow-scrolling':'touch'});
                        $('body').removeClass('show-sub-pages');
                        $('body')
                            .trigger('resizeContent');           
                    }
                })
        })	

   
})
/*---------------------- end ready -------------------------------*/

win
// .on('resize', onResize)
// .on('orientationchange', onResize)
.load(function(){  
    $("#webSiteLoader").fadeOut(500, 0, function(){
        $(this).remove();
        win
            .trigger('resize')
            .trigger('scroll')
            .trigger('afterload');

        $('body').trigger('resizeContent');       
    }); 

    FJSCore.modules.responsiveContainer({
        elementsSelector: '#other_pages>div',
        affectSelectors: '',
        type: 'inner',
        defStates: ',about,contacts,members'
    });

    win
        .trigger('resize');
    
    if(FJSCore.mobile){
        //----- mobile scripts ------//
        $('#mobile-header>*').wrapAll('<div class="container"></div>');
        $('#mobile-footer>*').wrapAll('<div class="container"></div>');
    }
});

/*
 * Adipoli jQuery Image Hover Plugin
 * http://jobyj.in/adipoli
 *
 * Copyright 2012, Joby Joseph
 * Free to use under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 */
 var primeravez = 1;
(function($) {
    $.fn.adipoli = function(options) {
        // Create some defaults, extending them with any options that were provided
        //hovereffect: normal,sliceDown,sliceDownLeft,sliceUp,sliceUpLeft
        var settings = $.extend( {
            'startEffect'   : 'transparent',
            'hoverEffect'   : 'normal',
            'imageOpacity'  : 0.5,
            'animSpeed'     : 300,
            'fillColor'     : '#000',
            'textColor'     : '#fff',
            'overlayText'   : '',
            'slices'        : 20,
            'boxCols'       : 5,
            'boxRows'       : 3,
            'popOutMargin'  : 10,
            'popOutShadow'  : 10
        }, options);
        //wrap it with div
        //$(this).one('load',function(){
        $(this).one('load', function() {
            // do stuff

            $(this).wrap(function(){
                return '<div class="adipoli-wrapper '+$(this).attr('class')+'" style="width:'+$(this).width()+'px; height:'+$(this).height()+'px;"/>';
            });
            $(this).parent().append('<div class="adipoli-before '+$(this).attr('class')+'" style="display:none;width:'+$(this).width()+'px; height:'+$(this).height()+'px;"><img src="'+$(this).attr('src')+'"/></div>');
            $(this).parent().append('<div class="adipoli-after '+$(this).attr('class')+'" style="display:none;width:'+$(this).width()+'px; height:'+$(this).height()+'px;"></div>');
            //set start effect
            if(settings.startEffect=="overlay")
            {
                element=$(this);
                element.hide();
                $(this).siblings('.adipoli-before').html(settings.overlayText).css({
                    '-ms-filter': '"progid:DXImageTransform.Microsoft.Alpha(Opacity='+settings.imageOpacity*100+')"',
                    'filter': 'alpha(opacity='+settings.imageOpacity*100+')',
                    '-moz-opacity': settings.imageOpacity,
                    '-khtml-opacity': settings.imageOpacity,
                    'opacity': settings.imageOpacity,
                    'background':settings.fillColor,
                    'color':settings.textColor
                }).fadeIn();
                element.show();
            }
            //binding events for mouseover
            $(this).parent().bind('click',function(){
                if((settings.hoverEffect == 'fold'||settings.hoverEffect == 'foldLeft') && (primeravez == 1)){
                    $(this).children('.adipoli-after').show();
                    element=$(this);
                    createSlices(element,settings);
                    timeBuff = 0;
                    i = 0;
                    slices=$('.adipoli-slice', element);
                    if(settings.hoverEffect == 'foldLeft') slices = $('.adipoli-slice', $(this))._reverse();
                    slices.each(function(){
                        var slice = $(this);
                        var origWidth = slice.width();
                        slice.css({
                            top:'0px',
                            height:'100%',
                            width:'0px'
                        });
                        if(i == settings.slices-1){
                            setTimeout(function(){
                                slice.animate({
                                    width:origWidth,
                                    opacity:'1.0'
                                }, settings.animSpeed, '', function(){
                                    //trigger when animation finish
                                    });
                            }, (100 + timeBuff));
                        } else {
                            setTimeout(function(){
                                slice.animate({
                                    width:origWidth,
                                    opacity:'1.0'
                                }, settings.animSpeed);
                            }, (100 + timeBuff));
                        }
                        timeBuff += 50;
                        i++;
                    });
                    primeravez++;
                }
            });
            //binding events for mouseleave
            /*$(this).parent().bind('mouseleave',function(){
                $(this).children('.adipoli-after').html('').hide();
            });*/

        }).each(function() {
            if(this.complete) $(this).load();
        });
        //});
        return $(this);

        // Add slices for slice animations
        function createSlices(element, settings){
            for(var i = 0; i < settings.slices; i++){
                var sliceWidth = Math.round(element.width()/settings.slices);
                if(i == settings.slices-1){
                    element.children('.adipoli-after').append(
                        $('<div class="adipoli-slice"></div>').css({
                            left:(sliceWidth*i)+'px',
                            width:(element.width()-(sliceWidth*i))+'px',
                            height:'0px',
                            opacity:'0',
                            background: 'url("'+ element.children('img').attr('src') +'") no-repeat -'+ ((sliceWidth + (i * sliceWidth)) - sliceWidth) +'px 0%'
                        })
                        );
                } else {
                    element.children('.adipoli-after').append(
                        $('<div class="adipoli-slice"></div>').css({
                            left:(sliceWidth*i)+'px',
                            width:sliceWidth+'px',
                            height:'0px',
                            opacity:'0',
                            background: 'url("'+ element.children('img').attr('src') +'") no-repeat -'+ ((sliceWidth + (i * sliceWidth)) - sliceWidth) +'px 0%'
                        })
                        );
                }
            }
        }
    };
    $.fn._reverse = [].reverse;
})(jQuery);


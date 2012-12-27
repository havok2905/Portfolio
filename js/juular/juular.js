/** Juular jQuery Lightbox Plugin
* @author Christopher McLean
* @version 1.0
*/
(function($)
{
    var methods = {
        init : function(options)
        {
            var settings = $.extend({
                "class"      : "default",
                "content"    : "404.php",
                "width"      : 600,
                "exitButton" : true, 
                "moveable"   : false,
                "params"     : {}
            }, options);
           
            //construct lightbox structure
            var container_class = "lightbox_container." + settings.class;

            $("body").prepend('<div class="lightbox_container ' + settings.class +'"></div>');

            if(settings.exitButton == true)
            {
                $("." + container_class).append('<div class="exit_button"><a href="#" class="exit_anchor">x</a></div>');
            }
            
            $("." + container_class).append('<div class="lightbox_content"></div>');

            //set lightbox dimmensions and position it accordingly
            $("." + container_class).css({"width":settings.width + "%"});
           
            var padding = $("." + container_class).css("padding");
            padding = padding.slice(0, padding.length - 2);
            
            $("." + container_class).css({"margin-left":((100-settings.width)/2) + "%"});
            
            //insert content into lightbox
            $.post(settings.content, settings.params, function(data)
            {
                $("." + container_class + " .lightbox_content").html(data);
            });

            //hide lightbox
            $("." + container_class).css({"display":"none"});

            return this.each(function()
            {
                $(this).bind('click.juular', show);
            });
        }
    }

    /** Manage method calls for plugin
    * @author jQuery
    * @version 1.0
    * @param    string name for a specific method
    * @return   applied function from the list in the methods object
    */
    $.fn.juular = function(method)
    {    
        if(methods[method])
        {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        }
        else if(typeof method === 'object' || !method)
        {
            return methods.init.apply(this, arguments);
        }
        else
        {
            $.error("Method " + method + "does not exist in Juular");
        }
    }

})( jQuery );

/** Construct lightbox structure and binds event listeners
* @author Christopher McLean
* @version 2.0
*/
function show(event)
{
    event.preventDefault();

    var container_class = "lightbox_container." + $(this).attr("href");
    
    //build overlay
    if($(".overlay").length == 0)
    {
        $("body").prepend('<div class="overlay"></div>');
    }

    //reveal lightbox
    $("." + container_class).css({"display":"block"});

    //remove the ability to scroll through the page
    $("body").css({"overflow-y":"hidden"});

    //bind destruction click events
    $(".overlay, .exit_anchor").bind('click.juular', function()
    {
        $("body").css({"overflow-y":"visible"});
        $("." + container_class).css({"display":"none"});
        $(".overlay").remove();
        tab();
    });

    //readjust position of lightbox and overlay to match screen position
    var y = $("body").scrollTop();
    $(".overlay").css({"top":y});
    $("." + container_class).css({"margin-top":y+50});
    untab(container_class);
}

/** Makes all elements outside lightbox untabbable
* @author Christopher McLean
* @version 1.0
*/ 
function tab()
{
    $("a, form *").attr("tabindex", 1);
}

 /** Makes all elements outside lightbox tabbable
* @author Christopher McLean
* @version 1.0
*/ 
function untab(container_class)
{
    $("a, form *").not("." + container_class + " a").attr("tabindex", -1);
}
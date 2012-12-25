$(document).ready(function()
{
	var dev = {
      	"class"      : "development_lightbox",
            "content"    : "js/juular/404.php",
            "width"      : 500,
            "height"     : 200,
            "exitButton" : true, 
            "moveable"   : false,
            "params"	 : {name:"Test"}
	};

      var mob = {
            "class"      : "mobile_lightbox",
            "content"    : "js/juular/404.php",
            "width"      : 500,
            "height"     : 200,
            "exitButton" : true, 
            "moveable"   : false,
            "params"     : {name:"Test"}
      };

      var des = {
            "class"      : "design_lightbox",
            "content"    : "js/juular/404.php",
            "width"      : 500,
            "height"     : 200,
            "exitButton" : true, 
            "moveable"   : false,
            "params"     : {name:"Test"}
      };

      var ity = {
            "class"      : "interactivity_lightbox",
            "content"    : "js/juular/404.php",
            "width"      : 500,
            "height"     : 200,
            "exitButton" : true, 
            "moveable"   : false,
            "params"     : {name:"Test"}
      };




      $(".development_lightbox").juular(dev);
      $(".mobile_lightbox").juular(mob);
      $(".design_lightbox").juular(des);
      $(".interactivity_lightbox").juular(ity);
});
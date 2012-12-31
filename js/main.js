console.log("test2");
$(window).ready(function()
{
      console.log("test");
	var dev = {
      	"class"      : "development_lightbox",
            "content"    : "js/juular/404.php",
            "width"      : 80,
            "exitButton" : true
	};

      var mob = {
            "class"      : "mobile_lightbox",
            "content"    : "js/juular/404.php",
            "width"      : 80,
            "exitButton" : true
      };

      var des = {
            "class"      : "design_lightbox",
            "content"    : "js/juular/404.php",
            "width"      : 80,
            "exitButton" : true
      };

      var ity = {
            "class"      : "interactivity_lightbox",
            "content"    : "js/juular/404.php",
            "width"      : 80,
            "exitButton" : true
      };

      $(".development_lightbox").juular(dev);
      $(".mobile_lightbox").juular(mob);
      $(".design_lightbox").juular(des);
      $(".interactivity_lightbox").juular(ity);
});
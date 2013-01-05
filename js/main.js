$(window).ready(function()
{
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

      addEvents();
});

function addEvents()
{
      $(window).scroll(function()
      {     
            if($(this).scrollTop() > 0)
            {
                 $(".header").css("box-shadow","#666 0px 1px 5px"); 
            }
            else
            {
                  $(".header").css("box-shadow","none"); 
            }
      });

      $("#submitcomment").click(function(event)
      {
            event.preventDefault();

            var text = $("#comment").val();
            var name = $("#comment_name").val();

            $.post("includes/blogcontroller.php", {comment:text, comment_name:name}, function(data)
            {
                  console.log(data);
                  $("#comment_container").prepend("<p><strong><span>" + name + " says: </span></strong>" + text + "</p>");
            });
      });

      $("#google").hover(function()
      {
            $("#google").attr("src", "img/googlethumbbw.png");
      }, function()
      {
            $("#google").attr("src", "img/googlethumb.png");
      });

      $("#github").hover(function()
      {
            $("#github").attr("src", "img/gitthumbbw.png");
      }, function()
      {
             $("#github").attr("src", "img/gitthumb.png");
      });

      $("#linkedin").hover(function()
      {
            $("#linkedin").attr("src", "img/linkedthumbbw.png");
      }, function()
      {
            $("#linkedin").attr("src", "img/linkedthumb.png");
      });
}
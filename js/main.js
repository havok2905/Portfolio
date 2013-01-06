$(document).ready(function()
{
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

      var data = {request:"made"};
      $("#submitcomment").click(function(event)
      {
            event.preventDefault();

            var text = $("#comment").val();
            var name = $("#comment_name").val();

            $.post("includes/blogcontroller.php", {comment:text, comment_name:name}, function(data)
            {
                  var html_string = "<div class='comment_subcontainer'><p><strong>" + name + "</strong> " + data.datetime + " </p><p>" + text + "</p></div>";
                  $(html_string).prependTo("#comment_container").hide().fadeIn("slow");
                  $("#comment").val="";
            }, "json");
      });

      $(".servicelink").click(function(event)
      {
            event.preventDefault();
            var id = $(this).attr("id");
            switch(id)
            {
                  case "developmentlink":
                        $("#developmentpar").slideToggle("slow");
                        break;
                  case "mobilelink":
                        $("#mobilepar").slideToggle("slow");
                        break;
                  case "designlink":
                        $("#designpar").slideToggle("slow");
                        break;
                  case "interactivitylink":
                        $("#interactivitypar").slideToggle("slow");
                        break;
            }
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
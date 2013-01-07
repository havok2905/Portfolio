$(document).ready(function()
{
      addEvents();
});

function addEvents()
{
      // HEADER SHADOW TOGGLE WITH SCROLL BAR
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


      // BLOG ANIMATIONS AND AJAX REQUEST TO A SUBMISSION SCRIPT
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
            }, "json");
      });

      var data = {request:"made"};
      $("#send").click(function(event)
      {
            event.preventDefault();

            var name = $("#name").val();
            var email = $("#email").val();
            var subject = $("#subject").val();
            var message = $("#message").val();
            var send = "send";
            console.log(name + email + subject + message);
            $.post("includes/emailcontroller.php", {send:send, name:name, email:email, subject:subject, message:message}, function(data)
            {
                  $("#sentheader").remove();
                  $("<h2 id='sentheader'>Your message has been sent!</h2>").prependTo("#emailform").hide().fadeIn("slow");
            }, "json");
      });

      // SERVICE TEXT TOGGLE CONTROLS
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

      // SOCIAL MEDIA ICONS
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
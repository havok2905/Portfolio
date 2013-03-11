$(document).ready(function()
{
	handleSound();
	handleSlider();
	handleEmail();
});

function handleSound()
{
	$(".nav-link").hover(
		function()
		{
			$("audio").get(0).load();
			$("audio").get(0).play();
		},
		function()
		{
			$("audio").get(0).pause();
		}
	);
}

function handleEmail()
{
	$("#name,#subject,#email,#message").blur(function()
	{
		var input_string = $(this).val();
		switch($(this).attr("id"))
		{
			case "email":
				if(validateEmail(input_string))
				{
					$(this).prev().css("color","green");
				}
				else
				{
					$(this).prev().css("color","red");
				}
				break;
			default:
				if(validateLength(input_string))
				{
					$(this).prev().css("color","green");
				}
				else
				{
					$(this).prev().css("color","red");
				}
				break;
		}
	});

	$("#name,#subject,#email,#message").keyup(function()
	{
		var input_string = $(this).val();
		switch($(this).attr("id"))
		{
			case "email":
				if(validateEmail(input_string))
				{
					$(this).prev().css("color","green");
				}
				else
				{
					$(this).prev().css("color","red");
				}
				break;
			default:
				if(validateLength(input_string))
				{
					$(this).prev().css("color","green");
				}
				else
				{
					$(this).prev().css("color","red");
				}
				break;
		}
	});
}

function validateLength(input_string)
{	
	if(input_string.length > 0)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function validateEmail(input_string)
{
	var regex = new RegExp("^[a-zA-Z0-9_.-]+@{1}[a-zA-Z0-9_\.-]+[\.]{1}[a-zA-Z0-9_.-]+$");
	return regex.test(input_string);
}

function handleSlider()
{
	var total_width = 0; 
	var count = 5;

	$.post("/Portfolio/controllers/projectcontroller.php", function(data)
	{
		response = data;
	});

	$("#stage-images li a#img0").css("left", "0px");
	$("#stage-images li a#img1").css("left", "-1024px");
	$("#stage-images li a#img2").css("left", "-2048px");
	$("#stage-images li a#img3").css("left", "-3072px");
	$("#stage-images li a#img4").css("left", "-4096px");

	var count = 5;
	
	setInterval(function()
	{	
		$("#stage-images li a").animate({left:'+=1024px'}, 1000, function()
		{	
			switch(count % 5)
			{
				case 1: 
					$("#stage-images li a#img0").css("left", "-4096px");
					$("#stage-header h2").html("<a href='/Portfolio/work/" + response[1].id + "'>" + response[1].title + "</a>");
					break;
				case 2: 
					$("#stage-images li a#img1").css("left", "-4096px");
					$("#stage-header h2").html("<a href='/Portfolio/work/" + response[2].id + "'>" + response[2].title + "</a>");
					break;
				case 3: 
					$("#stage-images li a#img2").css("left", "-4096px");
					$("#stage-header h2").html("<a href='/Portfolio/work/" + response[3].id + "'>" + response[3].title + "</a>");
					break;
				case 4: 
					$("#stage-images li a#img3").css("left", "-4096px");
					$("#stage-header h2").html("<a href='/Portfolio/work/" + response[4].id + "'>" + response[4].title + "</a>");
					break;
				case 0: 
					$("#stage-images li a#img4").css("left", "-4096px");
					$("#stage-header h2").html("<a href='/Portfolio/work/" + response[0].id + "'>" + response[0].title + "</a>");
					break;
			}
		});

		count++
	}, 5000);

}
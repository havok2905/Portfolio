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
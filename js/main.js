$(window).ready(function()
{
	handleSound();
	handleSlider();
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

function handleSlider()
{
	var total_width = 0; 
	var count = 5;

	$("#stage-images li img").bind("load", function()
	{
		$("#stage-images li img#0").css("left", "0px");
		$("#stage-images li img#1").css("left", "-1024px");
		$("#stage-images li img#2").css("left", "-2048px");
		$("#stage-images li img#3").css("left", "-3072px");
		$("#stage-images li img#4").css("left", "-4096px");
		
	});

	var count = 5;
	
	setInterval(function()
	{	
		$("#stage-images li img").animate({left:'+=1024px'}, 1000, function()
		{	
			switch(count % 5)
			{
				case 1: 
					$("#stage-images li img#0").css("left", "-4096px");
					break;
				case 2: 
					$("#stage-images li img#1").css("left", "-4096px");
					break;
				case 3: 
					$("#stage-images li img#2").css("left", "-4096px");
					break;
				case 4: 
					$("#stage-images li img#3").css("left", "-4096px");
					break;
				case 0: 
					$("#stage-images li img#4").css("left", "-4096px");
					break;
			}


		});

		count++
	}, 5000);

}
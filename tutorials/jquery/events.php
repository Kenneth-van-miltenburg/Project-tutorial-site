<h4> Jquery Events</h4>
<img id="imgAnimal" src="./img/k.png" alt="Leuke hond" >
<p>Wat is dit voor een dier?</p>
<button id="btn_show">Laat zien!</button>
<button id="btn_hide">Verberg!</button>
<button id="btn_toggle">Tokkel Aan/Uit</button>
<button id="btnNextAnimal">Volgende dier</button>

<script>
	$("document").ready(function(){
		//alert("Hallo!!");
		$("#imgAnimal").css({"width" : "300px",
							 "display" : "block"});
		
        
		$("button[id^='btn_']").css({"padding" : "1em 1.5em",
									 "width" : "200px",
									 "margin-bottom" : "0.5em",
									 "font-size" : "1.3em",
									 "color" : "rgba(0, 0, 0, 0.6)"});
        
        
									 
		$("#btn_hide").click(function(){
			$("#imgAnimal").hide(1500, function(){
				alert("Hij is verdwenen!");
			});		
		});
		
        
		$("#btn_show").click(function(){
			$("#imgAnimal").show("fast");		
		});
		
		var loadingTime = 1000;
		$("#btn_toggle").click(function(){			
			$("#imgAnimal").toggle(loadingTime, function(){
				if ($("#btn_toggle").text() == "Kom terug!")
				{
					$("#btn_toggle").text("Verdwijn!");
					loadingTime = 5000;
				}
				else
				{
					$("#btn_toggle").text("Kom terug!");
					loadingTime = 2;
				}
			});
		});
		
		$("img").mouseenter(function(){
			$(this).css("border", "2px solid black");
			var nameAnimal = $(this).attr("alt");
			$("p").text("Dit is een " + nameAnimal);
		});
		
		$("img").mouseleave(function(){
			$(this).css("border", "0px solid black");
			$("p").text("Wat is dit voor dier?");
		});
		
		var buttonSkin = {"padding" : "0.3em",
						  "font-size" : "3em",
						  "color" : "rgba(0, 0, 0, 0.5)",
						  "width" : "700"};
						  
		
		$("#btnNextAnimal").css(buttonSkin).click(function(){
			$("#imgAnimal").attr("src", "./img/k2.png")
						   .attr("alt", "Ook een hond");
		});
		
		
	});
</script>
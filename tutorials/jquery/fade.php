<h4>JQuery Fade</h4>
<button id="btn_fade_in">FadeIn</button> 
<button id="btn_fade_out">FadeOut</button> 
<button id="btn_fade_toggle">FadeToggleOut</button>
<button id="btn_fade_to20">To20%</button>
<button id="btn_fade_to100">To100%</button> 

<div id='fade_demo'>
	Fade Demo
</div>



<script>
	$("document").ready(function(){
		var btnCSS = { padding : "0.5em",
					   fontSize: "2em",
					   borderRadius: "0.3em"};
					   
		var divCSS = { border : "10px solid orange",
					   backgroundColor : "rgba(0, 0, 220, 0.3)",
					   "font-size" : "2em",
					   padding : "2em",
					   width : "200px",
					   height : "200px",
					   marginTop : "1em"};
	
		$("button[id^='btn_fade_']").css(btnCSS);
		$("[id='fade_demo']").css(divCSS);
		
		$("[id$='out']").click(function(){
			$("#fade_demo").fadeOut(2000, function(){
				//alert("Hallo ik ben weg!!");
				console.log($(this).text());
				//$(this).css("visibility", "hidden").css("display", "block");
				if ( $("[id$='toggle']").text() == "FadeToggleIn")
				{
					$("[id$='toggle']").text("FadeToggleOut")
				}
				else
				{
					$("[id$='toggle']").text("FadeToggleIn")
				}
			});
		});
		
		$("[id$='in']").click(function(){
			$("#fade_demo").fadeIn(2000, function(){
				if ( $("[id$='toggle']").text() == "FadeToggleIn")
				{
					$("[id$='toggle']").text("FadeToggleOut")
				}
				else
				{
					$("[id$='toggle']").text("FadeToggleIn")
				}
			});			
		});
		
		$("[id$='toggle']").click(function(){
			$("#fade_demo").fadeToggle(2000, function(){
				if ( $("[id$='toggle']").text() == "FadeToggleOut")
				{
					$("[id$='toggle']").text("FadeToggleIn")
				}
				else
				{
					$("[id$='toggle']").text("FadeToggleOut")
				}
			});			
		});
		
		$("[id$='to20']").click(function(){
			$("#fade_demo").fadeTo(2000, 0.2);
		});
		
		$("[id$='to100']").click(function(){
			$("#fade_demo").fadeTo(2000, 1);
		});
	});
</script>
<h4>CSS met JQuery RunTime toevoegen</h4>
<p id="par_css" class="parCSSClass">We gaan de CSS veranderen van deze paragraaf</p>
<p id="units"></p>

<button id="btn_veranderCSS" class="button">Verander CSS</button>
<button id="btn_veranderCSSJSObject" class="button">Verander CSS met JS-object</button>

<script>
	$("document").ready(function(){
		$("#btn_veranderCSS").click(function(){
			var widthTest = parseFloat($("#par_css").css("width"));
			console.log(widthTest);
			if ( widthTest > 400)
			{
				widthTest -= 20;
				$("#par_css").css("width", widthTest);
				console.log(widthTest);
			}
			else
			{
				$(this).text("Stop maar, Kleiner kan niet!");
			}			
		});
		
		$("#btn_veranderCSSJSObject").click(function(){
			var jsObjectCSS = { width : "200px",
								backgroundColor : "10px solid orange",
								color: "yellow",
								padding: "50px",
								fontSize: "2em",
								border: "10px dashed green",
								margin: "50px"};
			
			$("#par_css").css(jsObjectCSS);
			
			var width = $("#par_css").width();
			var innerWidth = $("#par_css").innerWidth();
			var outerWidth = $("#par_css").outerWidth();
			var outerWidthTrue = $("#par_css").outerWidth(true);
			
			$("#units").text("width: " + width + " innerWidth: " + innerWidth + " outerWidth:                " + outerWidth + " outerWidth-true: " + outerWidthTrue);
			
		});
	});
	
</script>   
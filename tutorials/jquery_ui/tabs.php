<h4>jQueryUI Tabs</h4>

<div id="tabbladen">
	<ul>
		<li><a href="#tab-01">Olifant</a></li>
		<li><a href="#tab-02">Dwerghamster</a></li>
		<li><a href="#tab-03">Snowleopard</a></li>		
		<li><a href="#tab-04">Giraffe</a></li>		
		<li><a href="#tab-05">Buffel</a></li>		
	</ul>
	<div id="tab-01">
		<img src="./images/olifant.jpg" alt="olifant" />
	</div>
	<div id="tab-02">
		<img src="./images/dwerghamster.jpg" alt="dwerghamster" />
	</div>
	<div id="tab-03">
		<img src="./images/snowleopard.jpg" alt="snowleopard" />
	</div>
	<div id="tab-04">
		<img src="./images/giraffe.jpg" alt="giraffe" />
	</div>
	<div id="tab-05">
		<img src="./images/buffel.jpg" alt="buffel" />
	</div>
</div>

<button id="tab" class="button">Disable</button>

<script>
	$("document").ready(function(){
		$("#tabbladen").on("tabsactivate", function(event, ui){
							alert("Hallo");});
		
		
		$("#tabbladen").tabs();
		
		// Disable button
		$("#tab").click(function(){
			$("#tabbladen").tabs("option", "disabled", [2, 3]);
		});
	});
	
</script>
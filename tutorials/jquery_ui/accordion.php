<h4>jQuery Accordion</h4>

<div id="accordion">
	<h3>jQuery</h3>
		<div>
			jQuery is een javascript library
		</div>
	<h3>PHP</h3>
		<div>
			PHP is een serversided scripttaal
		</div>
	<h3>JavaScript</h3>
		<div>
			Javascript is een clientsided scripttaal
		</div>
	<h3>CSS</h3>
		<div>
			Met CSS kun je de HTML properties wijzigen.
		</div>
	<h3>jQuery UI</h3>
		<div>
			jQuery UI is een uitbreiding van de jQuery Library
		</div>
</div>

<script>
	$("document").ready(function(){
		var accordionProperties = { };
		$("#accordion").accordion();
	});
</script>
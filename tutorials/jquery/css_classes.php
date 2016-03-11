<table id="table">
	<tr>
		<th>id</th>
		<th>voornaam</th>
		<th>tussenvoegsel</th>
		<th>achternaam</th>	
	</tr>
	<tr>
		<td>1</td>
		<td>Kenneth</td>
		<td>van</td>
		<td>Miltenburg</td>
		
	</tr>
	<tr>
		<td>2</td>
		<td>Lisanne</td>
		<td>van</td>
		<td>Lier</td>
	</tr>
	<tr>
		<td>3</td>
		<td>Johnny</td>
		<td>van</td>
		<td>Leersum</td>
	</tr>
	<tr>
		<td>4</td>
		<td>Bert</td>
		<td>van</td>
		<td>Leeghwater</td>
	</tr>
</table>

<button id="opmaak">Opmaak even rijen</button>
<button id="toggleOpmaak">Toggle opmaak header AAN</button>


<script>
	$("document").ready(function(){
		$("button").addClass("button");
		
		
		$("#opmaak").click(function(){
			$("tr:even:not(tr:first)").addClass("even");
			$("tr:odd").addClass("odd");
			$("tr:first").addClass("tblHeader");
			
			$("tr:not(tr:first)").hover(function(){
			$(this).addClass("trHover");
			},
			function(){
				$(this).removeClass("trHover");
			});
		});
		$("#toggleOpmaak").click(function(){
			$("tr:first").toggleClass("trToggle");
			
			if ( $(this).text() == "Toggle opmaak header AAN")
			{
				$(this).text("Toggle opmaak header UIT");
			}
			else
			{
				$(this).text("Toggle opmaak header AAN");
			}
		});
	});
</script>
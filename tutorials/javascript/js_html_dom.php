<h4>Voorbeeld van de HTML DOM (Document Object Model)</h4>

<button id="btn_1" onclick="buttonClick();">Klik op mij, dikke rand!<button>
<button id="btn_2" ondblclick="buttondblClick()">Klik op mij! dunne rand<button>



<p id="par_1" style="color:red;" onmouseover="disappear();">Dit is wat tekst die verandert gaat worden</p>


<script>
	
	// alert("Hallo dit is een javascript!");
	var borderThickness = 10;
	
	function disappear()
	{
		document.getElementById("par_1").style.display = "none";
	}
	
	function buttonClick()
	{
		borderThickness += 10;
		document.getElementById("par_1").innerHTML = "Ik heb de tekst verandert dankzij de DOM en JavaScript";
		document.getElementById("btn_1").innerHTML = "Er is op mij geklikt";
		document.getElementById("par_1").style.color = "green";
		document.getElementById("par_1").style.backgroundColor = "yellow";
		document.getElementById("par_1").style.border = borderThickness + "px solid orange";
	}
	
	function buttondblClick()
	{
		borderThickness -= 5;
		document.getElementById("par_1").style.border = borderThickness + "px solid purple";
	}
	
</script>
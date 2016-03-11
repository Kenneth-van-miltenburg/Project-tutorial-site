<p><h4>Mijn eerste JSON string</h4></p>

<p id="nameFromJSON">Hier komt mijn naam te staan en wat persoonlijke gegevens</p>

<button id="btn_JSON" class="button">Geef volledige naam weer</button>

<script>
/* 1) JSON is een string
 * 2) Een JSON string heeft <naam> : <waarde> paren gescheiden door een dubbele punt.
 * 3) De <naam> moet door dubbele quotes omgeven worden. De <waarde> hoeft dat niet.
 * 4) Je mag in de JSON string geen enter opnemen. */
 
document.getElementById("btn_JSON").onclick = function(){
	
	 var xmlhttp = new XMLHttpRequest();
 
	 xmlhttp.onreadystatechange = function(){
		 if ( xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
             //alert(xmlhttp.responseText);
			 var jsObject = JSON.parse(xmlhttp.responseText);
		     var txtName = "Mijn naam is: " + jsObject.firstname + " " + jsObject.infix +  " " + jsObject.lastname + "<br>" +
						   "Mijn leeftijd is: " + jsObject.leeftijd + "<br>";
			 txtName += "Mijn favoriete kleuren zijn:<br>" 
			 for ( var i = 0; i < jsObject.favorieteKleuren.length; i++)
			 {
				txtName += jsObject.favorieteKleuren[i] + "<br>";
			 }
			 txtName += "Mijn leerlingnummer is: " + jsObject.opleiding.llnr + "<br>";
			 txtName += "De naam van mijn opleiding is: " + jsObject.opleiding.naamOpleiding;
			 document.getElementById("nameFromJSON").innerHTML = txtName;			 
		 }	 
	 }
	 xmlhttp.open("POST", "http://localhost/2015-2016/inlogregistratie-tutorialsite/tutorials/json/json_data.php", true);
	 xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	 xmlhttp.send("id=71");
	 
};
</script>
<p><h4>Toepassing JSON string voor select tag</h4></p>

<!-- Wanneer er op het select tag geclickt wordt, haalt het xmlhttp object alle voornamen asychroon
	 dus zonder de pagina te verversen binnen. Deze voornamen zijn te lezen in de select lijst. -->

	<select id="ajax_select" style="width:200px;">
		<option>--kies een user--</option>
	</select>
	
	<p id="showSelection"></p>
	<button id='btn_update' >Opslaan wijziging</button>
	<button id='btn_delete' >Delete record</button>

	
<script>
	document.getElementById('btn_update').style.visibility = 'hidden';
	document.getElementById('btn_delete').style.visibility = 'hidden';
	
	var xmlhttp = new XMLHttpRequest();
	document.getElementById("ajax_select").onmouseover = function(){	 
 
	 xmlhttp.onreadystatechange = function(){
		 //alert(xmlhttp.readyState + " | " + xmlhttp.status);
		 if ( xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			 //alert(xmlhttp.responseText);
			 var jsObject = JSON.parse(xmlhttp.responseText);
			 
			 var output = "<option>--kies een user--</option>";
			 for ( var i = 0; i < jsObject.firstname.length; i++)
			 {
				output += "<option value=" + jsObject.id[i] + ">" + jsObject.firstname[i] + 
								 " " + jsObject.infix[i] +
								 " " + jsObject.lastname[i] +"</option>";
			 }		 
			 
			 //document.write(output);
			 
			 document.getElementById("ajax_select").innerHTML = output;
			 
			 
		 }	 
	 }
		 xmlhttp.open("post", "http://localhost/2015-2016/inlogregistratie-tutorialsite/tutorials/json/json_data_select.php", true);
		 xmlhttp.send();
	};
    
	document.getElementById("ajax_select").onchange = function(){
		
		 var selectTag = document.getElementById("ajax_select");
		 var obj = selectTag.options[selectTag.selectedIndex];
		 
		 document.getElementById("showSelection").innerHTML = 
				"<input type='text' value='" + obj.text + "' />";
			//alert("dfg");
       
		xmlhttp.onreadystatechange = function(){
			 if ( xmlhttp.readyState == 4 && xmlhttp.status == 200)
			 {
				 //alert(xmlhttp.responseText);
                 // alert(xmlhttp.readyState + " | " + xmlhttp.status);
				 // Vul de select lijst met alle namen.
				 var jsObject = JSON.parse(xmlhttp.responseText);
				 document.getElementById("showSelection").innerHTML = 				 
				 "<input type='hidden' id='id' value='" + jsObject.id + "'>voornaam: <input type='text' id='firstname' value='" + jsObject.firstname + "'><br>tussenvoegsel: <input type='text' id='infix' value='" + jsObject.infix + "'><br>achternaam: <input type='text' id='lastname' value='" + jsObject.lastname + "'><br>emailadres: <input type='text' id='email' value='" + jsObject.email + "'><br>gebruikersrol: " + 
				 
				 "<select id='userrole'>" + 
				 "<option>" + jsObject.userrole + "</option>" + 
				 "<option>administrator</option>" +
				 "<option>developer</option>" +
				 "<option>customer</option>" +
				 "<option>root</option>" +
				 "</select><br>" + 
				 "geactiveerd: <input type='text' id='activated' value='" + jsObject.activation + "'>";
				 document.getElementById('btn_update').style.visibility = 'visible';
				 document.getElementById('btn_delete').style.visibility = 'visible';
				 
				 // Maak het option tage --maak een keuze-- weer actief
				 var selectTag = document.getElementById("ajax_select");
				 selectTag.options[0].selected = true;
			 }	 
		}				
		xmlhttp.open("post", "http://localhost/2015-2016/inlogregistratie-tutorialsite/tutorials/json/json_data_update.php", true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("id=" + obj.value + "&action=select");
		};
	 
	  document.getElementById('btn_update').onclick = function()
	 {
			 var id = document.getElementById('id').value;
			 var firstname = document.getElementById('firstname').value;
			 var infix = document.getElementById('infix').value;
			 var lastname = document.getElementById('lastname').value;
			 var email = document.getElementById('email').value;
			 var userrole = document.getElementById('userrole').value;
			 var activated = document.getElementById('activated').value;
			 			//alert("Hoi"); 
			 xmlhttp.onreadystatechange = function(){
			 
			 if ( xmlhttp.readyState == 4 && xmlhttp.status == 200)
			 {
				
				
			 }	 
		}				
		xmlhttp.open("post", "http://localhost/2015-2016/inlogregistratie-tutorialsite/tutorials/json/json_data_update.php", true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("id=" + id + 
					 "&firstname=" + firstname + 
					 "&infix=" + infix + 
					 "&lastname=" + lastname + 
					 "&email=" + email + 
					 "&userrole=" + userrole + 
					 "&activated=" + activated +
					 "&action=update");
		
	 }
	 
	 document.getElementById('btn_delete').onclick = function()
	 {
			 var id = document.getElementById('id').value;
			 
			 xmlhttp.onreadystatechange = function(){
			 
			 if ( xmlhttp.readyState == 4 && xmlhttp.status == 200)
			 {
				
				
			 }	 
		}				
		xmlhttp.open("post", "http://localhost/2015-2016/inlogregistratie-tutorialsite/tutorials/json/json_data_update.php", true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("id=" + id + "&action=delete");
		
	 }
	
</script>
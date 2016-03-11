<h4>jQuery UI datepicker</h4>
<br>
Kalender element: <input type="text" id="datepicker" />
<br>

<button id="changeDatepicker" class="button">Verander datepicker</button>

<script>
	$(document).ready(function(){
		/*****************************************
		 * Vraag de datum op met JavaScript
		 *
		 *****************************************/
		var datepickerDate = new Date();
		var day = datepickerDate.getDate();
		var month = datepickerDate.getMonth();
		month += 1;
		var year = datepickerDate.getFullYear();
		var date = day + "-" + month + "-" + year;
		
		/*****************************************
		 * Maak een javascript object met options
		 * de datepicker widget.
		 *****************************************/
		
		var datepickerProperties = { dateFormat : "dd-mm-yy",
									 dayNamesMin : [ "zo", "ma", "di", "wo", "do", "vr", "za"],
									 changeYear	: true,
									 yearRange	: "1900:2030"};
		
		/*****************************************
		 * Pas de instellingen toe
		 *
		 *****************************************/
		$("#datepicker").datepicker(datepickerProperties);
		
		/*****************************************
		 * Zet de datum van vandaag in het tekstvak
		 * van de datepicker
		 *****************************************/
		$("#datepicker").datepicker("setDate", date);
		
		/*****************************************
		 * Verander door het klikken op de button  
		 * instellingen van de datepicker
		 *****************************************/
		$("#changeDatepicker").click(function(){
			var changeOptions = { firstDay		: 1,
								  changeMonth	: true,
								  monthNamesShort: ["jan", "feb", "maa", "apr", "mei", "jun", "jul", "aug", "sep", "okt", "nov", "dec"]};
								  
			$("#datepicker").datepicker("option", changeOptions);
			
		});
	
	});
</script>
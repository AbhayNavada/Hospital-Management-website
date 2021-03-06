<html>
	<head>
		<title>Add a New Patient</title>
		<link rel = "stylesheet" href = "css/addpatient.css" />
		<script language="Javascript" type="text/javascript">
			function onlyNumbers(e, t) {
           		 	try {
               				if (document.event) {
               				     var charCode = document.event.keyCode;
               				 }
               			 	else if (e) {
                   					 var charCode = e.which;
                				}
               				 	else { return true; }
                			if ((charCode > 47 && charCode < 58)
                   				 return true;
                			else
                   				 return false;
            				}
            			catch (err) {
                		alert(err.Description);
            			}
        		}
        		function onlyAlphanumeric(e, t) {
           		 	try {
               				if (document.event) {
               				     var charCode = document.event.keyCode;
               				 }
               			 	else if (e) {
                   					 var charCode = e.which;
                				}
               				 	else { return true; }
                			if ((charCode > 47 && charCode < 58) || (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32) || (charCode == 44) || (charCode == 46))
                   				 return true;
                			else
                   				 return false;
            				}
            			catch (err) {
                		alert(err.Description);
            			}
        		}
        		function onlyUserandPass(e, t) {
           		 	try {
               				if (document.event) {
               				     var charCode = document.event.keyCode;
               				 }
               			 	else if (e) {
                   					 var charCode = e.which;
                				}
               				 	else { return true; }
                			if ((charCode > 47 && charCode < 58) || (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                   				 return true;
                			else
                   				 return false;
            				}
            			catch (err) {
                		alert(err.Description);
            			}
        		}
        		
    			function changeFields() {
    							var el = document.getElementById("patient_type1");
    							if(el.checked)
      								document.getElementById("room_id").disabled = false;
   							else
    								document.getElementById("room_id").disabled = true;
    							var el = document.getElementById("patient_type2");
    							if(el.checked)
      								document.getElementById("room_id").disabled = true;
   							else
    								document.getElementById("room_id").disabled = false;
    			}
        	</script>
	</head>
	<body>
		<div id = "patient1">
			<header>
				<img src = "img/logo.png" alt = "Logo" />
   				<h1>NMIT HOSPITALS</h1>
				<h2>A One-Stop Solution To Keep You Healthy</h2>
			</header>
		</div>
		<div id = "patient2">
			<br />
			<form action = "addpatientprocessing.php" method = "post">
				<h2>Enter Patient Information:</h2>
				<label for = "appointmentid">Appointment ID:</label>
    				<input type = "text" id = "appointmentid" name = "appointmentid" maxlength = "5" pattern = "[0-9]{1,5}" required autocomplete = "off" onkeypress = "return onlyNumbers(event,this);" placeholder = "(Mandatory)" />
    				<br />
				
				<label for = "room_id">Room ID:</label>
    				<input type = "text" id = "room_id" name = "room_id" maxlength = "3" pattern = "[0-9]{1,3}" autocomplete = "off" onkeypress = "return onlyNumbers(event,this);" placeholder = "(Mandatory in case of an Inpatient)" />
    				<br />
    				<label for = "doctorid">Employee ID of the Doctor to be assigned:</label>
    				<input type = "text" id = "doctorid" name = "doctorid" maxlength = "5" pattern = "[0-9]{1,5}" required autocomplete = "off" onkeypress = "return onlyNumbers(event,this);" placeholder = "(Mandatory)" />
    				<br />
    				<label for = "username">Enter new Username:</label>
    				<input type = "text" id = "username" name = "username" maxlength = "20" pattern = "[A-Za-z0-9]{1,20}" required autocomplete = "off" onkeypress = "return onlyUserandPass(event,this);" placeholder = "(Mandatory)" />
    				<br />
    				<label for = "password">Enter new Password:</label>
    				<input type = "text" id = "password" name = "password" maxlength = "20" pattern = "[A-Za-z0-9]{1,20}" required autocomplete = "off" onkeypress = "return onlyUserandPass(event,this);" placeholder = "(Mandatory)"/>
    				<br />
    				<input type = "submit" name = "submit" value= "Add Patient" />
			</form>
		</div>
		<div id = "patient3">
			<footer>
				<ul>
					<li>Contact number: 080-23450917, 080-23450918, 080-23450919, 080-23334565</li>
					<li>&copy; NMIT Foundation for Medical Education and Research (NMITMER). All rights reserved.</li>
				</ul>
			</footer>
		</div>
	</body>
</html>

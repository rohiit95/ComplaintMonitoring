<?php 
?> 
<html> 
<head> 
	<title> Police Station </title>
	<style>
		#stations {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#stations td, #stations th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#stations tr:nth-child(even){background-color: #f2f2f2;}

		#stations tr:hover {background-color: #ddd;}

		#stations th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #4CAF50;
			color: white;
		}
		img {
			margin-left: 35%;
		}
		#header {
			background-color: black;
			color: white;
			padding: 10px;
			text-align: center;
			font-family: algerian;
			font-size: 25px;
			width: 100%;
		}
		#strap1 {
			background-color: black;
			color: white;
			position: absolute;
			top: 10%;
			left: 5%;
			width: 150px;
			height: 100px;
			font-family: arial;
			font-size: 20px;
			text-align: center;
		}
		#strap2 {
			background-color: black;
			color: white;
			position: absolute;
			top: 10%;
			right: 5%;
			width: 150px;
			height: 100px;
			font-family: arial;
			font-size: 20px;
			text-align: center;
		}
		#complaints {
			font-size: 40px;
			font-weight: bold;
		}
	</style>
</head> 
<body> 
	<div id="header"> Behala Police Station </div> 
	<img src="img/maps/behala.png" height="400" width="400" alt="Behala">
	<div id="strap1"> COMPLAINTS REGISTERED <div id="complaints"> 18 </div> </div>
	<div id="strap2"> COMPLAINTS PENDING  <div id="complaints"> 12 </div> </div>
	<table id="stations"> 
		<tr> 
			<td colspan="2"> Police Station Details </td> 
			<td> <a href="img/maps/behala.png"> View Full Map </a> </td>			
		</tr>
		<tr> 
			<td colspan="2"> Address </td> 
			<td> 12, MG Road, Behala, Kolkata - 700106 </td> 
		<tr>
		<tr> 
			<td colspan="2"> Division </td> 
			<td> South East Division </td> 
		<tr>
		<tr> 
			<td colspan="2"> Officer In Charge </td> 
			<td> Shri A B Chattopadhyay </td> 
		<tr>
		<tr> 
			<td colspan="2"> Phone No </td> 
			<td> 2428-7513 </td> 
		<tr>
		<tr> 
			<td colspan="2"> No. of Complaints registered </td> 
			<td> 18 </td> 
		<tr>
		<tr> 
			<td colspan="2"> No. of Complaints pending </td> 
			<td> 12 </td> 
		<tr>
	</table> 
</body> 
</html> 
<!DOCTYPE HTML>
<html lang = "en">
  <head>
    <title>WeCareWorkerLanding.html</title>
    <meta charset = "UTF-8" />
	<style>
		html, body{position:relative; height: 100%}
		div{ height: 100%}
		#names{border: 1px solid black}
		th, td {padding: 10px}
		span{ color:red}
		#topPage{ height: 25%}
		#bottomPage{height:75%}
		
		#pastReports {
		display: block;	font-size: 1.1em; font-weight: bold; padding: 10px 15px;
		margin: 20px auto; margin-bottom: 2cm; width: 150px; background-color: #555;
		color: #ccc; background: -webkit-linear-gradient(#888, #555); background: linear-gradient(#888, #555);
		text-shadow: 0 -1px 0 #000;	box-shadow: 0 1px 0 #666, 0 5px 0 #444, 0 6px 6px rgba(0,0,0,0.6);
		cursor: pointer;
		}
		#sendReports {
		display: block;	font-size: 1.1em; font-weight: bold; padding: 10px 15px;
		margin: 20px auto; margin-bottom: 2cm; width: 100px; background-color: #555;
		color: #ccc; background: -webkit-linear-gradient(#888, #555); background: linear-gradient(#888, #555);
		text-shadow: 0 -1px 0 #000;	box-shadow: 0 1px 0 #666, 0 5px 0 #444, 0 6px 6px rgba(0,0,0,0.6);
		cursor: pointer;
		}
		#edit {
		display: block;	font-size: 1.1em; font-weight: bold; padding: 10px 15px;
		margin: 20px auto; margin-bottom: 2cm; width: 100px; background-color: #555;
		color: #ccc; background: -webkit-linear-gradient(#888, #555); background: linear-gradient(#888, #555);
		text-shadow: 0 -1px 0 #000;	box-shadow: 0 1px 0 #666, 0 5px 0 #444, 0 6px 6px rgba(0,0,0,0.6);
		cursor: pointer; position: absolute; bottom: -90px; left: 40px; 
}
		}
		
		}
	
	#pastBtn{float: left; width: 150px } 

} 
	</style>
  </head>
  <body>
    <h1><span>We</span>Care</h1>
	<div id="names" style="width: 200px;background-color: #FFFFCC; float: left;">
		<table rules="rows" width="200px">
			<tr>
				<th><center>Name</center></th>
				
			</tr>
			<tr>
				<td><center>Jill Smith</center></td>
				
			</tr>
			<tr>
				<td><center>Eve Jackson</center></td>
				
			</tr>
		</table>
		<form>
		<a id="edit" style="float: bottomPage;" href="AddNewChild.php">Edit</a>
		
		</form>
	</div>

<div id="topPage" style="margin-left: 200px; background-color: #CCFFFF" valign="top">


 <!-- columns divs, float left, no margin so there is no space between column, width=1/3 -->
    <div id="column1"style="float:left; margin:0; width:33%;  border-bottom: 1px solid black; border-top: 1px solid black;">
	<Center><b>Child Information</b></center>
	&nbsp;
    <p align="center">Jill Smith</p>
	&nbsp;
	 <p align="center"> 2/16/2012 </p>
	 &nbsp;
	 
	 <p align="center"> Allergic to tree nuts </p>
    </div>

    <div id="column2" style="float:left; margin:0;width:33%; border-bottom: 1px solid black; border-top: 1px solid black;">
     <Center><b>Parent Information</b></center>
	 &nbsp;
	 <p align="center"> Parental Contact Name </p>
	 &nbsp;
	 <p align="center"> Parental Contact E-Mail </p>
	 &nbsp;
	 <p align="center"> Parental Contact Number </p>
    </div>

    <div id="column3" style="float:left; margin:0;width:33%; border-bottom: 1px solid black; border-top: 1px solid black; border-right: 1px solid black;">
     <Center><b>Additional Information</b></center>
	 &nbsp;
	  <p align="center"> Address </p>
	 &nbsp;
	 <p align="center"> Additional Instructions </p>
    </div>
</div>

<div id="bottomPage" style="margin-left: 200px; background-color: #FFFFCC" valign="bottom" >
<form>
	<table width="80%" height="80%" cellspacing="35">
		
		<tr>
			<td><form><a id="pastReports" style="float: left" href="PastReports.php">View Past Reports</a></form></td>
			<td> </td>
		</tr>
		<tr>
			<td><center>Nap Time</center></td>
			<td> Major Milestones</td>		
		</tr>
		<tr>
			<td><center>Food Eaten</center></td>
			<td> Photos</td>		
		</tr>
		<tr>
			<td><center>Exercise</center></td>
			<td> Comments</td>		
		</tr>
		<tr>
			<td><center>Progressions</center></td>
			<td> </td>		
		</tr>
		<tr>
			<td></td>
			<td> </td>		
		</tr>
		<tr>
			<td><form><a id="sendReports" style="float: right" href="#">Save</a><a id="sendReports" style="float: left" href="Report.php">Send Report</a></form> </td>
		</tr>	
			
	</table>
			

	
	</form>
	

	
</div>
    
		

      
        
        
     
    
  </body>
</html>
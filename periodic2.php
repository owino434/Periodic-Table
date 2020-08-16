<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
<title>Periodic Table</title>
<style>
body{

background-color:black;




}
table{
	color:black;
	text-decoration:bold;
	cellpadding:2px;
	width:50px;
	border:1;
	
	
}


.alkali {
	
  position: relative;
  background-color: #FFDF00;
  border: none;
  font-size: 14px;
  color: #FFFFFF;
  padding: 10px;
  padding-bottom:25px;
   width: 60px;
   font-weight:bold;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  
}
.alkaline {
  position: relative;
  background-color: #FF4500;
 border: none;
  font-size: 14px;
  color: #FFFFFF;
  padding: 10px;
  padding-bottom:25px;
   width: 60px;
   font-weight:bold;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  
}
.transition {
  position: relative;
  background-color: #228B22;
  border: none;
  font-size: 14px;
  color: #FFFFFF;
  padding: 10px;
  padding-bottom:25px;
   width: 60px;
   font-weight:bold;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  
}
.inert{
  position: relative;
  background-color: #800080;
  border: none;
  font-size: 14px;
  color: #FFFFFF;
  padding: 10px;
  padding-bottom:25px;
   width: 60px;
   font-weight:bold;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  
}
.halogens{
  position: relative;
  background-color: #483d8b;
  border: none;
  font-size: 14px;
  color: #FFFFFF;
  padding: 10px;
  padding-bottom:25px;
   width: 60px;
   font-weight:bold;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  
}
.lanthanides{
  position: relative;
  background-color: #e6005c;
 border: none;
  font-size: 14px;
  color: #FFFFFF;
  padding: 10px;
  padding-bottom:25px;
   width: 60px;
   font-weight:bold;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  
}
.actinides{
  position: relative;
  background-color: #99ff99;
  border: none;
  font-size: 14px;
  color: #FFFFFF;
  padding: 10px;
  padding-bottom:25px;
   width: 60px;
   font-weight:bold;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  
}

h1{
  text-transform:uppercase;
  text-decoration:underline;
  text-align:center;
  font-family:san serif;
  color:white;



}



#silver{

position: relative;
  background-color: #6b6b47;
 border: none;
  font-size: 14px;
  color: #FFFFFF;
  padding: 10px;
  padding-bottom:25px;
   width: 60px;
   font-weight:bold;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */





}
#yellow{

position: relative;
  background-color:#FFFF01;
 border: none;
  font-size: 14px;
  color: #FFFFFF;
  padding: 10px;
  padding-bottom:25px;
   width: 60px;
   font-weight:bold;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */



}
#blue{


position: relative;
  background-color: #000080;
  border: none;
  font-size: 14px;
  color: #FFFFFF;
  padding: 10px;
  padding-bottom:25px;
   width: 60px;
   font-weight:bold;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */

}
button{
border-radius:7px;
text-align:center;

}


</style>
</head>
<body>
<h1>periodic table of elements</h1>


<div class="rows">
  <div class="col-sm-9">
 <table >
<!--ROW 1-->
<tr>

<td class="alkali"><?php include'Alkali/Hydrogen.php'?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="inert"><?php include'others/2.php'?></td>

</tr>
<!--ROW 1-->

<!--ROW 2-->
<tr>

<td class="alkali"><?php include'Alkali/Lithium.php'?></td>
<td class="alkaline"><?php include'Alkaline/be.php'?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="grp3" id="silver"><?php include'others/5.php'?></td>
<td class="grp4"id="yellow"><?php include'others/6.php'?></td>
<td class="grp5"id="yellow"><?php include'others/7.php'?></td>
<td class="grp6"id="yellow"><?php include'others/8.php'?></td>
<td class="halogens"><?php include'others/9.php'?></td>
<td class="inert"><?php include'others/10.php'?></td>

</tr>
<!--ROW 2-->

<!--ROW 3-->
<tr>

<td class="alkali"><?php include'Alkali/Sodium.php'?> </td>
<td class="alkaline"><?php include'Alkaline/mg.php'?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="grp3"id="blue"><?php include'others/13.php'?></td>
<td class="grp4"id="silver"><?php include'others/14.php'?></td>
<td class="grp5"id="yellow"><?php include'others/15.php'?></td>
<td class="grp6"id="yellow"><?php include'others/16.php'?></td>
<td class="halogens"><?php include'others/17.php'?></td>
<td class="inert"><?php include'others/18.php'?></td>

</tr>
<!--ROW 3-->

<!--ROW 4-->
<tr>

<td class="alkali"><?php include'Alkali/Potassium.php'?></td>
<td class="alkaline"><?php include'Alkaline/ca.php'?></td>
<td class="transition"><?php include'others/21.php'?></td>
<td class="transition"><?php include'others/22.php'?></td>
<td class="transition"><?php include'others/23.php'?></td>
<td class="transition"><?php include'others/24.php'?></td>
<td class="transition"><?php include'others/25.php'?></td>
<td class="transition"><?php include'others/26.php'?></td>
<td class="transition"><?php include'others/27.php'?></td>
<td class="transition"><?php include'others/28.php'?></td>
<td class="transition"><?php include'others/29.php'?></td>
<td class="transition"><?php include'others/30.php'?></td>
<td class="grp3"id="blue"><?php include'others/31.php'?></td>
<td class="grp4"id="silver"><?php include'others/32.php'?></td>
<td class="grp5"id="silver"><?php include'others/33.php'?></td>
<td class="grp6"id="yellow"><?php include'others/34.php'?></td>
<td class="halogens"><?php include'others/35.php'?></td>
<td class="inert"><?php include'others/36.php'?></td>

</tr>
<!--ROW 4-->



<!--ROW 5-->
<tr>

<td class="alkali"><?php include'Alkali/Rubidium.php'?></td>
<td class="alkaline"><?php include'Alkaline/sr.php'?></td>
<td class="transition"><?php include'others/39.php'?></td>
<td class="transition"><?php include'others/40.php'?></td>
<td class="transition"><?php include'others/41.php'?></td>
<td class="transition"><?php include'others/42.php'?></td>
<td class="transition"><?php include'others/43.php'?></td>
<td class="transition"><?php include'others/44.php'?></td>
<td class="transition"><?php include'others/45.php'?></td>
<td class="transition"><?php include'others/46.php'?></td>
<td class="transition"><?php include'others/47.php'?></td>
<td class="transition"><?php include'others/48.php'?></td>
<td class="grp3"id="blue"><?php include'others/49.php'?></td>
<td class="grp4"id="blue"><?php include'others/50.php'?></td>
<td class="grp5"id="silver"><?php include'others/51.php'?></td>
<td class="grp6"id="silver"><?php include'others/52.php'?></td>
<td class="halogens"><?php include'others/53.php'?></td>
<td class="inert"><?php include'others/54.php'?></td>

</tr>
<!--ROW 5-->



<!--ROW 6-->
<tr>

<td class="alkali"><?php include'Alkali/Caesium.php'?></td>
<td class="alkaline"><?php include'Alkaline/ba.php'?></td>
<td class="lanthanides">LANTHANIDES</td>
<td class="transition"><?php include'others/72.php'?></td>
<td class="transition"><?php include'others/73.php'?></td>
<td class="transition"><?php include'others/74.php'?></td>
<td class="transition"><?php include'others/75.php'?></td>
<td class="transition"><?php include'others/76.php'?></td>
<td class="transition"><?php include'others/77.php'?></td>
<td class="transition"><?php include'others/78.php'?></td>
<td class="transition"><?php include'others/79.php'?></td>
<td class="transition"><?php include'others/80.php'?></td>
<td class="grp3"id="blue"><?php include'others/81.php'?></td>
<td class="grp4"id="blue"><?php include'others/82.php'?></td>
<td class="grp5"id="blue"><?php include'others/83.php'?></td>
<td class="grp6"id="silver"><?php include'others/84.php'?></td>
<td class="halogens"><?php include'others/85.php'?></td>
<td class="inert"><?php include'others/86.php'?></td>

</tr>
<!--ROW 6-->



<!--ROW 7-->
<tr>

<td class="alkali"><?php include'Alkali/Francium.php'?></td>
<td class="alkaline"><?php include'Alkaline/ra.php'?></td>
<td class="actinides">ACTINIDES</td>
<td class="transition"><?php include'others/104.php'?></td>
<td class="transition"><?php include'others/105.php'?></td>
<td class="transition"><?php include'others/106.php'?></td>
<td class="transition"><?php include'others/107.php'?></td>
<td class="transition"><?php include'others/108.php'?></td>
<td class="transition"><?php include'others/109.php'?></td>
<td class="transition"><?php include'others/110.php'?></td>
<td class="transition"><?php include'others/111.php'?></td>
<td class="transition"><?php include'others/112.php'?></td>
<td class="grp3"id="blue"><?php include'others/113.php'?></td>
<td class="grp4"id="blue"><?php include'others/114.php'?></td>
<td class="grp5"id="blue"><?php include'others/115.php'?></td>
<td class="grp6"id="blue"><?php include'others/116.php'?></td>
<td class="halogens"><?php include'others/117.php'?></td>
<td class="inert"><?php include'others/118.php'?></td>

</tr>
<!--ROW 7-->
</table>
  
  </div>
     <div class="col-sm-3">
  
  
      </div>
  
</div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
</body>
</html>
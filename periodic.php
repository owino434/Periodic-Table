<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Periodic Table</title>
<style>
body{

background-color:black;




}


.alkali {
	
  position: relative;
  background-color: #FFDF00;
  border: none;
  font-size: 11px;
  color: #FFFFFF;
  padding: 20px;
  padding-right:50px;
  width: 80px;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  
}
.alkaline {
  position: relative;
  background-color: #FF4500;
  border: none;
  font-size: 17px;
  color: #FFFFFF;
  padding: 20px;
  width: 70px;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  
}
.transition {
  position: relative;
  background-color: #228B22;
  border: none;
  font-size: 17px;
  color: #FFFFFF;
  padding: 20px;
  width: 70px;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  
}
.inert{
  position: relative;
  background-color: #800080;
  border: none;
  font-size: 17px;
  color: #FFFFFF;
  padding: 20px;
  width: 70px;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  
}
.halogens{
  position: relative;
  background-color: #483d8b;
  border: none;
  font-size: 17px;
  color: #FFFFFF;
  padding: 20px;
  width: 70px;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  
}
.lanthanides{
  position: relative;
  background-color: #e6005c;
  border: none;
  font-size: 17px;
  color: #FFFFFF;
  padding: 20px;
  width: 70px;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  
}
.actinides{
  position: relative;
  background-color: #99ff99;
  border: none;
  font-size: 17px;
  color: #FFFFFF;
  padding: 20px;
  width: 70px;
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
  font-size: 17px;
  color: #FFFFFF;
  padding: 20px;
  width: 70px;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */





}
#yellow{

position: relative;
  background-color:#FFFF01;
  border: none;
  font-size: 17px;
  color: #FFFFFF;
  padding: 20px;
  width: 70px;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */



}
#blue{


position: relative;
  background-color: #000080;
  border: none;
  font-size: 17px;
  color: #FFFFFF;
  padding: 20px;
  width: 70px;
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
<table >
<!--ROW 1-->
<tr>

<td><button class="alkali">1</button></td>
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
<td><button class="inert">2</button></td>

</tr>
<!--ROW 1-->

<!--ROW 2-->
<tr>

<td><button class="alkali">3</button></td>
<td><button class="alkaline">4</button></td>
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
<td><button class="grp3" id="silver">5</button></td>
<td><button class="grp4"id="yellow">Click Me</button></td>
<td><button class="grp5"id="yellow">Click Me</button></td>
<td><button class="grp6"id="yellow">Click Me</button></td>
<td><button class="halogens">Click Me</button></td>
<td><button class="inert">Click Me</button></td>

</tr>
<!--ROW 2-->

<!--ROW 3-->
<tr>

<td class="alkali"> <?php include'getelement.php'?> </button></td>
<td><button class="alkaline">Click Me</button></td>
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
<td><button class="grp3"id="blue">Click Me</button></td>
<td><button class="grp4"id="silver">Click Me</button></td>
<td><button class="grp5"id="yellow">Click Me</button></td>
<td><button class="grp6"id="yellow">Click Me</button></td>
<td><button class="halogens">Click Me</button></td>
<td><button class="inert">Click Me</button></td>

</tr>
<!--ROW 3-->

<!--ROW 4-->
<tr>

<td><button class="alkali">Click Me</button></td>
<td><button class="alkaline">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="grp3"id="blue">Click Me</button></td>
<td><button class="grp4"id="silver">Click Me</button></td>
<td><button class="grp5"id="silver">Click Me</button></td>
<td><button class="grp6"id="yellow">Click Me</button></td>
<td><button class="halogens">Click Me</button></td>
<td><button class="inert">Click Me</button></td>

</tr>
<!--ROW 4-->



<!--ROW 5-->
<tr>

<td><button class="alkali">Click Me</button></td>
<td><button class="alkaline">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="grp3"id="blue">Click Me</button></td>
<td><button class="grp4"id="blue">Click Me</button></td>
<td><button class="grp5"id="silver">Click Me</button></td>
<td><button class="grp6"id="silver">Click Me</button></td>
<td><button class="halogens">Click Me</button></td>
<td><button class="inert">Click Me</button></td>

</tr>
<!--ROW 5-->



<!--ROW 6-->
<tr>

<td><button class="alkali">Click Me</button></td>
<td><button class="alkaline">Click Me</button></td>
<td><button class="lanthanides">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="grp3"id="blue">Click Me</button></td>
<td><button class="grp4"id="blue">Click Me</button></td>
<td><button class="grp5"id="blue">Click Me</button></td>
<td><button class="grp6"id="silver">Click Me</button></td>
<td><button class="halogens">Click Me</button></td>
<td><button class="inert">Click Me</button></td>

</tr>
<!--ROW 6-->



<!--ROW 7-->
<tr>

<td><button class="alkali">Click Me</button></td>
<td><button class="alkaline">Click Me</button></td>
<td><button class="actinides">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="transition">Click Me</button></td>
<td><button class="grp3"id="blue">Click Me</button></td>
<td><button class="grp4"id="blue">Click Me</button></td>
<td><button class="grp5"id="blue">Click Me</button></td>
<td><button class="grp6"id="blue">Click Me</button></td>
<td><button class="halogens">Click Me</button></td>
<td><button class="inert">Click Me</button></td>

</tr>
<!--ROW 7-->
</table>

</body>
</html>
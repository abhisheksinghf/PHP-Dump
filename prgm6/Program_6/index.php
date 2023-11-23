<html>
<body>
<?php
$cname=$_POST["name"];
$items=$_POST["items"];
$payment=$_POST["payment"];
$itemnames[0]="Four 100 watt light bulbs for Rs.20";
$itemnames[1]="Eight 100 watt light bulbs for Rs.40";
$itemnames[2]="Four 100 watt long life light bulbs for Rs.30";
$itemnames[3]="Eight 100 watt long life light bulbs for Rs.70";
$i=0;
$item1=" ";
$item2=" ";
$item3=" ";
$item4=" ";
$totalSum=0; 
foreach($items as $item)
{
if($item=="one")
{
$item1=$itemnames[0];
$totalSum+=20;
}
if($item=="two")
{
$item2=$itemnames[1];
$totalSum+=40;
}
if($item=="three")
{
$item3=$itemnames[2];
$totalSum+=30;
}
if($item=="four")
{
$item4=$itemnames[3];
$totalSum+=70;
}
}
print"<br/><h1>The items are ordered by $cname and the bill details including vat 13.5 is shown 
below:</h1><br/>";
if($item1!=" ")
{
print"$item1 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp =20Rs<br/>";
}
if($item2!=" ")
{
print"$item2 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp =40Rs<br/>";
}
if($item3!=" ")
{
print"$item3 &nbsp =30Rs<br/>";
}
if($item4!=" ")
{
print"$item4 &nbsp =70Rs<br/>";
}
print"<br/><b>Total amount=$totalSum</b>";
$vatTotal=($totalSum*0.135)+$totalSum; print"<br/><b>After adding vat=$vatTotal</b>"; 
print"<br/><b> Payment made in $payment<b>";
?>
</body>
</html>
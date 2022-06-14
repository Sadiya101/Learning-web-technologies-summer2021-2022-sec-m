<?php
//*******************1********************
echo "<br> <b><h3> Sol-1 </h5></b>";
	$length ="10";
	$width ="20";
	$area = $length * $width;
	$perimeter = 2*($length + $width);

	echo "Area = $area" ;
	echo "<br>";
	echo "Perimeter = $perimeter";



	//*******************2********************
echo "<br> <b><h3> Sol-2 </h5></b>";
$Given_amount = 1150;
$vat = 0.15;
$calculated_vat = 1150 *0.15;
echo "<br>";
echo " Calculated_vat = ". $calculated_vat;
//print($calculated_vat) ;


//*******************3********************
echo "<br> <b><h3> Sol-3 </h5></b>";
$x= 10;
echo "<br>";
if ($x %2 == 0 )

 {
 	echo "Even number";

}
else
 {
 	echo "Odd number";

 }


 //*******************4********************
echo "<br> <b><h3> Sol-4 </h5></b>";
$num1=30;
$num2=150;
$num3=29;
echo "<br>";

if ($num1 > $num2 && $num1 > $num3) 
{
	echo "$num1 is the largest number ". "<br";
}

elseif ($num2 > $num1 && $num2 > $num3) 
{
	echo "$num2 is the largest number ". "<br" ;
}

elseif ($num3 > $num1 && $num3 > $num1)
 {
 	echo "$num3 is the largest number ". "<br";
	
 }


//*******************5********************

echo "<br> <b><h3> Sol-5 </h5></b>";
for ($i=10; $i <100 ; $i++) 
{
	echo "  ";
	if (($i%2)!=0)
 	{
 		echo "$i";
 		
 	}
	
}

//*******************6********************
echo "<br> <b><h3> Sol-6 </h5></b>";
$p=5;
$arr= [1,5,62,10,20];
$search=20;
$counter= 0;
for ($i=0; $i <$p; $i++)
 { 
	if($arr[$i]==$search)
	{
		$counter= 1;
		echo "<br>"."$arr[$i] found at index $i";
	}

}
if ($counter= 0) 
{
	echo "<br>"."$arr[$i] not found";
}


//*******************7********************
echo "<br> <b><h3> Sol-7 </h5></b>";

for($p=0; $p<3; $p++)
{
    $x="*";
    for($q=0; $q<=$p; $q++){
        echo $x++." ";
    }
    echo "<br/>";
}

for($p=3; $p>0; $p--)
{
    $y=1;
    for($q=$p; $q>0; $q--){
        echo $y++." ";
    }
    echo "<br/>";
}

for($p=1; $p>3; $p++)
{
    $z="A";
    for($q=$p; $q<=$p; $q++){
        echo $z++." ";
    }
    echo "<br/>";
}














































?>

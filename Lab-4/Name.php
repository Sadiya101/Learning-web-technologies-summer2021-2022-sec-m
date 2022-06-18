<?php
$name = $_POST['name'];
for($i=0;$i<100;$i++)
{
	if($name == null || $name[0]== range(0,9))
	{
		echo "Invalid name";
		break;
	}

	elseif($name[0]==range("a","z")||$name[0]==range("A","Z") && str_contains($name,' ')||str_contains($name,'-')||str_contains($name,'.'))
	{
		echo "Valid name";
		break;
	}
	else
	{
		echo "Invalid name";
		break;

	}
}
	
?>
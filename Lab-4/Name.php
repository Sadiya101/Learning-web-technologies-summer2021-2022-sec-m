<?php
$name = $_POST['name'];
for($i=0;$i<100;$i++)
{
	if($name == null || is_numeric($name[0]) || str_contains($name[0],'$') || str_contains($name,'$') || str_contains($name,'*') )
	{
		echo "Invalid name";
		break;
	}

	elseif( ctype_alpha($name[0])||str_contains($name,'-')||str_contains($name,'.') && str_contains($name,' '))
	{
		echo "Valid name";
		break;
	}
	
	else
	{
		break;

	}
}
	
?>
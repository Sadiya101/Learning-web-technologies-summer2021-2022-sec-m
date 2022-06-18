<?php
$email = $_POST['Email'];

for($i=0;$i<100;$i++)
{
	if($email==null || str_contains($email,' '))
	{
		echo "Invalid email";
		break;
    }
    elseif(str_contains($email,'@')||str_contains($email,'+') || str_contains($email,'_')||str_contains($email,'.')|| $email[$i]== range("a", "z") ||$email[$i]== range("A", "Z") ||$email[$i]== range(0,9))
    {
		echo "Valid email";
		break;
	}
	else
	{
		echo "Invalid email";
		break;
	}
}
?>
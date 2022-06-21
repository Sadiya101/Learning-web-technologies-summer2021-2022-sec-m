<?php
$id = $_POST['Id'];
$name = $_POST['Name'];
$pass = $_POST['Password'];
$Cpass = $_POST['CPassword'];
$userType=$_POST['UserType'];
$submit = $_POST['SignUp'];

if($name == null || $pass == null || $Cpass == null  || $id == null )
{
	print_r($name);
	// echo "Error! Empty field!!!";

}

else
{
	//Name
	for($i=0;$i<80;$i++)
	{
		if($name == null || is_numeric($name[0]) || str_contains($name[0],' ') || str_contains($name[0],'$') || str_contains($name,'$') || str_contains($name,'*') )
		{
			echo "Invalid name";
			break;
		}

		elseif(ctype_alpha($name[0])||str_contains($name,'-')||str_contains($name,'.'))
		{
			echo "Valid name";
			break;
		}
		
		else
		{
			break;
		}
	}	
	

	if(isset($userType))
	{
		echo "Success";
	}
	else
	{
		echo "Empty field!!!";
	}

    //Passward
	for($i=0;$i<30;$i++)
	{
		if ( str_contains($pass,'@')&& strlen($pass)>=8 ||str_contains($pass,'+') || str_contains($pass,'_')||str_contains($pass,'.')|| ctype_alpha($pass[$i])|| is_numeric($pass[$i])) 
		{
			echo "Strong password";
			break;
		}
		else 
		{
			echo " Password field can not be empty";
			break;
		}
    }

    //Confirm Password
    if($pass == $CPass)
    {
    	echo"Password matched";
    }

    //id

    
    	if(is_numeric($id))
    	{
    		echo "Valid id";
    		$user = $name."|".$pass."|".$id."|".$userType."\r\n";
    $file=fopen('UserList.txt', 'a');
    fwrite($file, $user);
    header('location:Login.html');
    	}
    	else
    	{
    		echo "Invalid id";

    	}    
}

?>
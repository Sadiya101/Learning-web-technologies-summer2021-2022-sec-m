<?php
$id = $_POST['Id'];
$name = $_POST['Name'];
$pass = $_POST['Password'];
$Cpass = $_POST['CPassword'];
$userType=$_POST['UserType'];
$submit = $_POST['SignUp'];
$counter =0;

if($name == null || $pass == null || $Cpass == null  || $id == null )
{
	print_r($name);
	// echo "Error! Empty field!!!";

}

else
{
	//Name


	if($name == null || is_numeric($name[0]) || str_contains($name[0],'$') || str_contains($name,'$') || str_contains($name,'*') )
	{
		$counter++;
		print("Invalid name") ;
		
	}

	elseif( ctype_alpha($name[0])||str_contains($name,'-')||str_contains($name,'.') && str_contains($name,' '))
	{
		echo "Valid name";
		
	}
	
	else
	{
		$counter++;
		

	}
	/*for($i=0;$i<80;$i++)
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
	}*/	
	

	if(isset($userType))
	{
		echo "Success";
	}
	else
	{
		$counter++;
		echo "Empty field!!!";
	}

    //Passward
	
		if ( str_contains($pass,'@')&& strlen($pass)>=8 ||str_contains($pass,'+') || str_contains($pass,'_')||str_contains($pass,'.')|| ctype_alpha($pass)|| is_numeric($pass)) 
		{
			echo "Strong password";
			
		}
		else 
		{
			$counter++;
			echo " Password field can not be empty";
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
    	}
    	else
    	{
    		$counter++;	
    		echo "Invalid id";

    	} 
    if($counter==0)
    {
    	$user = $name."|".$pass."|".$id."|".$userType."\r\n";
	    $file=fopen('UserList.txt', 'a');
	    fwrite($file, $user);
	    header('location:Login.html');

    }   
    	
}

?>
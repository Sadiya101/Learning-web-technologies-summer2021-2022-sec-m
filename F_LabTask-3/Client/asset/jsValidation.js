function validateSignupForm()
{
	let n=document.getElementById('name').value;
	if(n=="")
	{
		alert("Name field can't be empty");
		return false;
	}


}
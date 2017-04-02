function validate()
{
	var x=document.forms["logIn"]["id"].value;
	var y=document.forms["logIn"]["password"].value;
	if (x=="") 
	{
		alert("name must be filled");
		document.forms["logIn"]["id"].focus() ;
		return false;
	}
	else
	{
		if (y=="")
		 {
		 	alert("password must be filled");
		 	return false;
		 }
		
	}
}
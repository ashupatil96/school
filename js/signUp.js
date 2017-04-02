function validate()
{
	var a=document.forms["signUp"]["name"].value;
	var b=document.forms["signUp"]["password"].value;
	var c=document.forms["signUp"]["emailid"].value;
	var d=document.forms["signUp"]["number"].value;
	var e=document.forms["signUp"]["selectClass"].value;
	var f=document.forms["signUp"]["select"].value;

	if (a=="" || b=="" || c=="" || d=="" || e=="" || f=="") 
	{
		alert("please fill complete ");
		return false;
	}
}
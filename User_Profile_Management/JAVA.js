 


/* ***********************************************************************************************/


function checkpassword( )
{
	if( document.getElementById("psw").value != document.getElementById("reenterpsw").value )
	{
		alert("password mis match!!!!");
		return false;
	}
	else
	{
		alert("sucess your password is match");
		return true;
	}
}


function enablebutten()
{
	if (   document.getElementById("checkbox").checked    )
	{
		document.getElementById("submit").disabled = false;
	}
	else
	{
		document.getElementById("submit").disabled = true;
	}
}

/* ***********************************************************************************************/
















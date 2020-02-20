function login()
{
	$('#loginForm').submit(function()
	{
		$.ajax(
		{
			type: "POST",
			url: './folder/login.php',
			data: $(this).serialize(),
			success: function(data)
			{ 		
			    if(data=='loading...')
			    {
	            	$("#loginForm").trigger("reset");			    
	            	window.location='index.php';   			
   	   		        $("#result").html(data);
			    }
			    if(data=='Invalid Email or Password !!!')
			    {
   	   		        $("#result").html(data);
	           	}
	        },
		    error:function() 
		    {
		    }
		});
    	return false;
	});
}

$(document).ready(function()
{
	
		/*var data;
			 $("#Go").click(function(){
			 //	$("#e").fadeToggle(); 
			    	
			    	$.ajax({url:"tt.php",success:function(result)
					{
						data=result;
						$("#e").html(data)
					}
				});
					
    });*/
			

	
		$("#add").click(function(){
		    	
		  // $("#ed").fadeToggle(); 
			    	
			    	$.ajax({type:'GET',url:"addstudent.php",success:function(result1)
					{
						
						$("#e").html(result1)
					}
					
					});
		     
   

		   });

		 


 });

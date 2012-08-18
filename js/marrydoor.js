	
		function add(select1,select2)
		{
			$('#'+select1+' option:selected').appendTo('#'+select2);
			return false;
		}		
		$(document).ready(function(){
   		//toggle the request dropdown 
   		
   		$("#requestIcon").click(function(){
   			$("#notificationDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#communicateContainer").css("display","none");
   			$("#profileContainer").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#requestDropdown").slideToggle();
   		});
   		
   		//toggle the notification dropdown 
   		
   		$("#notificationIcon").click(function(){
   			$("#requestDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#communicateContainer").css("display","none");
   			$("#profileContainer").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#myaccountContainer").css("display","none");
   			$("#notificationDropdown").slideToggle();
   			
   		});
   		
   		
   		//toggle the message dropdown 
   		
   		$("#messageIcon").click(function(){
   			$("#requestDropdown").css("display","none");
   			$("#notificationDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#communicateContainer").css("display","none");
   			$("#profileContainer").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#myaccountContainer").css("display","none");
   			$("#messageDropdown").slideToggle();
   			
   		});
   		
   		// toggle interest dropdown
   		
   		$("#interestIcon").click(function(){
   			$("#notificationDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#requestDropdown").css("display","none");
   			$("#communicateContainer").css("display","none");
   			$("#profileContainer").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#myaccountContainer").css("display","none");
   			$("#interestDropdown").slideToggle();
   		});
   		
   		//toggle the myaccount dropdown 
   		
   		$("#myaccount").click(function(){
   			$("#communicateContainer").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#requestDropdown").css("display","none");
   			$("#notificationDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#profileContainer").css("display","none");
   			$("#myaccountContainer").slideToggle();
   			
   		});
   		
   		
   		//toggle the myprofile dropdown 
   		
   		$("#myprofile").click(function(){
   			$("#communicateContainer").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#myaccountContainer").css("display","none");
   			$("#requestDropdown").css("display","none");
   			$("#notificationDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#profileContainer").slideToggle();
   			
   		});
   		
   		//toggle the communicate dropdown
   		
   		$("#mycommunicate").click(function(){
   			$("#profileContainer").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#myaccountContainer").css("display","none");
   			$("#requestDropdown").css("display","none");
   			$("#notificationDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#communicateContainer").slideToggle();
   			
   		});
   		
   		
   		//toggle the search dropdown
   		
   		$("#search").click(function(){
   			$("#communicateContainer").css("display","none");
   			$("#profileContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#myaccountContainer").css("display","none");
   			$("#requestDropdown").css("display","none");
   			$("#notificationDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#searchContainer").slideToggle();
   			
   		});
   		
   		//toggle the search dropdown
   		
   		$("#contactus").click(function(){
   			$("#communicateContainer").css("display","none");
   			$("#profileContainer").css("display","none");
   			$("#requestDropdown").css("display","none");
   			$("#notificationDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#paymentOptionsContainer").css("display","none");
   			$("#myaccountContainer").css("display","none");
   			$("#contactusContainer").slideToggle();
   			
   		});
   		
   		//toggle the paymentoptions dropdown
   		
   		$("#paymentoptions").click(function(){
   			$("#communicateContainer").css("display","none");
   			$("#profileContainer").css("display","none");
   			$("#requestDropdown").css("display","none");
   			$("#notificationDropdown").css("display","none");
   			$("#messageDropdown").css("display","none");
   			$("#interestDropdown").css("display","none");
   			$("#searchContainer").css("display","none");
   			$("#contactusContainer").css("display","none");
   			$("#myaccountContainer").css("display","none");
   			$("#paymentOptionsContainer").slideToggle();
   			
   		});
   		
   		
   		
   		// detect the mouse click on the document
   		
   		/*$(document).click(function(e) { 
   			
   			if ($(e.target).parents("#requestDropdown").length == 0) { 
   				alert('correct');
   				$("#requestDropdown").css("display","");
   				
   			}else{
   				alert('incorrect');
   				//$("#requestDropdown").css("display","none");
   			}
   			
   			});*/
	})
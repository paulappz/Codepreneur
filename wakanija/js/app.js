$(document).ready(function() {

            $('input.location').typeahead({
                            name: 'location',
                            remote: 'mysql.php?query=%QUERY'

                        });


            $('input.destination').typeahead({
                name: 'destination',
                remote: 'mysql.php?query=%QUERY'

            });

        });


<!-- 
//Browser Support Code
 function ajaxFunction(){
 var ajaxRequest;  // The variable that makes Ajax possible!

 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 } }
        
        $("#search").click(function(e) {
            e.preventDefault();
            var locate = $("#location").val();
            var destiny = $("#destination").val();   
            
            var mydata={
                    "done":1,
                   "locat":locate,
                   "desti":destiny
            }; 
            
            $.ajax({
                url:"server.php",
                type:"post",
                data:mydata,
                
                success: function(data,status,xhr){
                    displayData(data);
                }
               
                
            });
            
        });
        
        function displayData(data) {
             $("#display").html(data);            
        }
        
       
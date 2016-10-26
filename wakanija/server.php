 
  
  
  
  <style type="text/css">
  

#wrapper{
   
   margin-right: auto;
   margin-left: auto;
   width: 600px;
   height: auto;
 
    
}
        
      .details {
          width: 100%;
         padding: 10px;
          background-color: white;
           margin-bottom: 10px;
          
      }  
     #details #logo{
         
         display:block;
    margin:auto;
     }
      
      img {
          border-radius: 5px 5px 5px 5px;
          margin: 2px 2px 2px 2px;
      }
      
          
      
      #locate{
          padding:5px;
         
          background-color: papayawhip;
          width: 290px;
          margin-right: 5px;
           float:left;
          
          line-height: 30px;
           height: 200px;
           margin-bottom: 10px;
            opacity: 0.9;
      }
      
      #destinate{
          padding:5px;
         
          background-color: papayawhip;
          width: 290px;
          margin-left: 5px;
          float:right;
           line-height: 30px;
            height: 200px;
             margin-bottom: 10px;
              opacity: 0.9;
      }
      
      
      
      
    
      #description{
         
          background-color: lightgoldenrodyellow;
        
          padding: 10px;
          clear: both;
         opacity: 0.9;
           
           
          
      }
      

@media (max-width: 749px) {
    #wrapper {
        width: 300px;
    }
     #locate{
      
         
        
          width: 295px;
         
          margin-right:0px;
          line-height: 10px;
           height: 180px;
           margin-bottom: 10px;
          font-size:10px;
      }
      
      #destinate{
           width: 295px;
         
          margin-left:0px;
          
          line-height: 10px;
           height: 180px;
           margin-bottom: 10px;
          font-size:10px;
          
      }
      
      
      
      
    
      #description{
         
          background-color: lightgoldenrodyellow;
        
          padding: 10px;
          clear: both;
         opacity: 0.9;
           
           
          
      }
}


  </style>
<?php



/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'wakaondo'; 

/* End config */



$con = mysqli_connect($db_host,$db_user,$db_pass,$db_database);

if (mysqli_connect_errno()){
die("Database connection failed: ". 
mysqli_connect_error()."(".mysqli_connect_errno().")"
);
}
 
 
  if (isset($_POST['done'])){
$location = $_POST['locat'];

$destination= $_POST['desti'];

 #if (isset($_POST['result'])){

 $query = "SELECT * FROM Area WHERE place = '$location'";

			$result = mysqli_query($con, $query);
            
            
            while($row = mysqli_fetch_assoc($result)){
                
               
                
                  $query1 = "SELECT * FROM Area WHERE place = '$destination' ";

			$result1 = mysqli_query($con, $query1); 
            
                while($row1 = mysqli_fetch_assoc($result1)){
                    
                    
                     echo $row["PLACE"] . "</br>";
                    
                    echo $row1["PLACE"];
                    
                    
                    
            }
       
            }       
                
			  ?>  
              <section>
         <div id="wrapper" class="wrapper2">
          <div id="details" class="details"> 
            <!-- <img src="http://placehold.it/40x40" > Oluyege Paul --> <img id="logo" src="images/wakaondo.png" width="200" height="50">
              
          </div>
          
          
              <div id="locate">
                <div id="loca">  <img src="locat.png">   Location</br></div>
              
                   <div id="area"><label><img src="images/area.png"> Area :</label>Futa South-Gate <a href="#"><img src="http://placehold.it/30x30" style=" cursor: -webkit-zoom-in; cursor: -moz-zoom-in"></br></a></div>
                     <div id="street"><label><img src="images/street.png"> Street :</label>Futa South-Gate <a href="#"><img src="http://placehold.it/30x30" ></br></a></div>
                   <div id="road"><label><img src="images/road.png"> Road :</label>Futa South-Gate <a href="#"><img src="http://placehold.it/30x30" ></br></a></div>
             <div id="imgviews">
              <label> <img src="eye.png"> side views</label>
              <img src="http://placehold.it/30x30"> 
              <img src="http://placehold.it/30x30">
              <img src="http://placehold.it/30x30">
              <img src="http://placehold.it/30x30">
              
             </div>
             </div>
             
             <div id="destinate">
               <div id="loca">  <img src="target.png">   Destination</br></div>
              
                  <div id="area"><label><img src="images/area.png"> Area :</label>Futa South-Gate <a href="#"><img src="http://placehold.it/30x30" ></br></a></div>
                    <div id="street"><label><img src="images/street.png"> Street :</label>Futa South-Gate <a href="#"><img src="http://placehold.it/30x30" ></br></a></div>
                   <div id="road"><label><img src="images/road.png"> Road :</label>Futa South-Gate <a href="#"><img src="http://placehold.it/30x30" ></br></a></div>
             <div id="imgviews1">
              <label> <img src="eye.png"> side views</label>
              <img src="http://placehold.it/30x30"> 
              <img src="http://placehold.it/30x30">
              <img src="http://placehold.it/30x30">
              <img src="http://placehold.it/30x30">
             </div>
          </div>
    
         <div id="description">
     Route:</br>
     Time :</br>
     Transport Fee:
     
      
     <hr>
     
        <div id="des1"> From <strong> location </strong>, waive to a <strong> Taxi cab</strong><img src="images/taxi.png"></br></div> 
         <div id="des2">Tell the taxi driver your heading for <strong> Destination </strong> <img src="images/call-taxi.png"><img src="taxi-driver.png"></br></div>
          
         haven <strong>boarded</strong> the taxi cab,</br>
          be on a lookout to comfirm the following site views along <strong>Olusegun obasanjo way</strong> 
         
         
         
     
         
         </div>
   </div> 
             </section> 
   
   <!-- <h3>Hello Mr, welcome to WakaNija, We are your road companion</h3></br>
                  We realised you're journeying between  <?php //echo $location; ?>
                  and <?php //echo $row["destination"]; ?> We promise you a hitch free journey
                  
                  Okay, Lets ride.
                  
                  The fastest route to <?php //echo $row["destination"]; ?> from  <?php //echo $location; ?>
                  is Olusegun Obasanjo link Oba Adeside Road, The journey shouldnt cost you more that 
                   <?php //echo $row["t_time"]; ?> minutes.</br>
                   Take a  <?php //echo $row["t_means"]; ?> from your location, you will navigate through
                    Olusegun Obasanjo way and Oba Adeside Road, The journey should cost more that <?php //echo $row["t_fair"]; ?> Naira
              
               </div> -->
              <?php
              
              
              
 
     
#}
            
         }
?>
<html>
    <head>
        <title>UserName</title>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
            <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
    <!-- CSS -->
	       <link rel="stylesheet" href="css/main.css">
         <link rel="stylesheet" href="css/custom.css">
          
        
        
        <link rel="stylesheet" href="style/addAccordion.css">
        <link rel="stylesheet" href="style/profile.css" type="text/css">
         

        <script src="js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/addAccordion.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
    </head>
    <body>
        <?php
require("header-logged.php");
?>
            

            
            
        <div id="main">
            <div id="prof1">
                <img src="">
                <div id="detailsprofile">
                <br><h2> </h2>
                <br> address : <h4></h4>.
                <br> adhar :<p style="font-weight:700"></p>
                contact :<p  style="font-weight:700"></p>
                 </div>
            </div>
            <div id="prof2">
            
                
                  
               
                
                
                          
                
                
             <div  class="accordi" data-addui='accordion' data-change="click" >
                
                
               
                  <div role='header' class="complain">
                        <div class="left">Theft Complaint</div>
                        <div class="right">Complaint No :<span class="id"> HSADU_587 </span><br />Date :<span class="date">25/01/2017</span></div>
                  </div>
                  <div role='content' class="content">
                        <span style="font-weight:bold">Location :   </span><span class="location">Lala Lajpat Chowk</span>
                        <br /><br />
                        <h5 style="font-weight:bold; font-size:1.2em;   ">Description : </h5>
                        <p class="describe">I lost my Sansung Galaxy Note 3. The EMEI no was EDJEF565HJ.  </p>
                        <div class="connect"><button class="chat" value="">Chat with Officer</button><button class="call">Video-Call Officer</button></div> 
                  </div>
                  
                  
                </div>     
                
            </div>
            <div id="video">
                <button id="X" onClick=""> X</button>
                <iframe src="https://appear.in/vishaltahlan" width=700" height="600" frameborder="0"></iframe>
            </div>
            <div id="chatbox"> 
                  <?php
                    require("chat1.php");
                  ?>
            </div>
           </div>

        
        <?php require("footer.php") ?>
        	            <!-- Javascripts -->
     <script src="js/jquery-1.9.1.min.js"></script>
     <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
     <script src="js/bootstrap.min.js"></script>
	 <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>	
		<!-- my jquery file -->
	 <script src="js\my.js"></script>	
           <script src="js\chat.js"></script>
<script > 
        $(document).ready(function(){
            $(".call").click(function(){
                $("#video").slideToggle("fast");
            }); 
            $(".chat").click(function(){
                $("#chatbox").slideToggle("fast");
            }); 
             $("#X").click(function(){
                $("#video").slideToggle("fast");
            });    
            $("#Xx").click(function(){
                $("#chatbox").slideToggle("fast");
            });     
        });</script>
    </body>
</html>
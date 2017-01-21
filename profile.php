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
      <script src="js/chat.js"></script>
        <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/addAccordion.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
    </head>
    <body>
        <?php
require("header-logged.php");
?>
            

            
            
        <div id="main">
            <div id="prof1">
                <img src="images/profilepic.jpg">
                <div id="details">
                <br><h3> Rohit Agarwal </h3>
                <br> Address Line 1.
                <br>Adress Line 2.
                </div>
            </div>
            <div id="prof2">

                <div data-addui='accordion' data-change="hover">
                  <div role='header'>
                        <div class="left">Rape Complaint</div>
                        <div class="right"><b>Complaint No-</b> #gs4548reg4 <br><b>Date-</b>25/01/2017</div>
                  </div>
                  <div role='content'>
                        <p>Name- fjenkfw<br> Location- rggrnjnr<br>gwgugafuw<br>.ehfgejb<br></p>
                        <div class="connect"><button class="chat" value="">Chat with Officer</button><button class="call">Video-Call Officer</button></div> 
                  </div>
                  <div role='header'>
                        <div class="left">Rape Complaint</div>
                        <div class="right"><b>Complaint No-</b> #gs4548reg4 <br><b>Date-</b>25/01/2017</div>
                  </div>
                  <div role='content'>
                        <p>Name- fjenkfw<br> Location- rggrnjnr<br>gwgugafuw<br>.ehfgejb<br></p>
                        <div class="connect"><button class="chat">Chat with Officer</button><button class="call">Video-Call Officer</button></div> 
                  </div>
                  <div role='header'>
                        <div class="left">Rape Complaint</div>
                        <div class="right"><b>Complaint No-</b> #gs4548reg4 <br><b>Date-</b>25/01/2017</div>
                  </div>
                  <div role='content'>
                        <p>Name- fjenkfw<br> Location- rggrnjnr<br>gwgugafuw<br>.ehfgejb<br></p>
                        <div class="connect"><button class="chat">Chat with Officer</button><button class="call">Video-Call Officer</button></div> 
                  </div>
                </div>
            </div>
            <div id="video">
                <button id="X" onClick=""> X</button>
                <iframe src="https://appear.in/vishaltahlan" width=700" height="600" frameborder="0"></iframe>
            </div>
            <div id="chatbox"> 
                  <?php
                    require("chat.php");
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
	 <script src="js/my.js"></script>	
           <script src="chat.js"></script>

    </body>
</html>
<html>
    <head>
        <title>UserName</title>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="style/addAccordion.css">
        <link rel="stylesheet" href="style/profile.css" type="text/css">
        <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/addAccordion.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script > 
        $(document).ready(function(){
            $(".call").click(function(){
                $("#video").slideToggle("fast");
            }); 
             $("#X").click(function(){
                $("#video").slideToggle("fast");
            });     
        });</script>
    </head>
    <body>
        
            
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
                        <div class="connect"><button value="">Chat with Officer</button><button class="call">Video-Call Officer</button></div> 
                  </div>
                  <div role='header'>
                        <div class="left">Rape Complaint</div>
                        <div class="right"><b>Complaint No-</b> #gs4548reg4 <br><b>Date-</b>25/01/2017</div>
                  </div>
                  <div role='content'>
                        <p>Name- fjenkfw<br> Location- rggrnjnr<br>gwgugafuw<br>.ehfgejb<br></p>
                        <div class="connect"><button value="">Chat with Officer</button><button class="call">Video-Call Officer</button></div> 
                  </div>
                  <div role='header'>
                        <div class="left">Rape Complaint</div>
                        <div class="right"><b>Complaint No-</b> #gs4548reg4 <br><b>Date-</b>25/01/2017</div>
                  </div>
                  <div role='content'>
                        <p>Name- fjenkfw<br> Location- rggrnjnr<br>gwgugafuw<br>.ehfgejb<br></p>
                        <div class="connect"><button value="">Chat with Officer</button><button class="call">Video-Call Officer</button></div> 
                  </div>
                </div>
            </div>
            <div id="video">
                <button id="X" onclick=""> X</button>
                <iframe src="https://appear.in/vishaltahlan" width=700" height="600" frameborder="0"></iframe>
            </div>
           </div>

        
    </body>
</html>
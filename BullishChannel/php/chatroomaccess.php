<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/chatroom.css" type="text/css">
        <meta name="description" content="Learn How To Start and Grow as a Trader">
        <meta name="keywords" content="stocks, day, swing, trade, learn, candles">
        <meta name="author" content="Zheng">
        <!--<meta http-equiv="refresh" content="600">-->
        <!--Putting the script in the header load when an action is perfromed -->
        <script type= "text/javascript" language = "JavaScript" src="js/chatroom.js" ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}
/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}
/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>

    </head>

    

<body>
    <header>
        <div id="top-header"> 
            <div id="logo"> 
                <h1> <a href="index-waccess.php">The Bullish Channel</a>
            </h1> 
            </div>   

            <nav> 
                <ul> 
                
                    <li><a href="education-waccess.html">Education</a></li> 
                    <li><a href="trading-terms-waccess.html">Trading-terms</a></li> 
                    <li><a href="chatroom-waccess.php">Community</a></li> 
                    <li><a href="about-us-waccess.html">About Us</a></li> 
                    <div class = "dropdown">
                    <li><button class= "dropbtn"><a href="account-waccess.php">Account</a></button></li>
                    <div class = "dropdown-content">
                    <a href= "logout.php">Sign out</a>
                    </div>
                </div>
                </ul> 
            </nav> 
        </div>   
        
    </header>
    <br>
        <h1>Trading Community</h1>
        <h2 style: bold> Success comes with hard work!</h2>
        
        <div class = 'chatContainer'>

            <div class= 'chatHeader' >
                <h3> Trading Community</h3>
            </div>

            <div class='chatMessages' id="chatbox">
                
                <script>setInterval(function() {
                getMessages();
            }, 500);</script>
            </div>

            <div class='chatbottom'>  
                <form onsubmit= "postMessage(); clearForm(); return false;" id='chatForm'>
                    <input type='text' name='msg' id='message' value="" placeholder= "Type your message" required/>
                    <input type='submit' name='submit' value='Send' />
                </form>
            </div>

        </div>
    </body>
</html>
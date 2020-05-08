<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <script type='text/javascript' src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
        <link rel="stylesheet" href="css/chatroom.css" type="text/css">
        <meta name="description" content="Learn How To Start and Grow as a Trader">
        <meta name="keywords" content="stocks, day, swing, trade, learn, candles">
        <meta name="author" content="Zheng">
        <meta http-equiv="refresh" content="60">
    </head>

    <header>
            <div> 
                <h1 style="font-family: Optima; color: #465d2c; padding-top: 15px; padding-left: 15px;" class="title is-1">The Bullish Channel</h1> 
            </div>  
        
            <div style="border-bottom:1px solid #CCC; float:left; width:100%; padding-bottom:3px; padding-left: 11px;" class="navbar-menu">
                <div style="font-family: DejaVu Sans Mono;" class="navbar-start">
                            <a class="navbar-item" href="index.html">Main Page</a>
                            <a class="navbar-item" href="education.html">Basic Information</a>
                            <a class="navbar-item" href="trading-terms.html">Trading Terms</a>
                            <a class="navbar-item" href="patterns.html">Patterns</a>
                            <a class="navbar-item" href="technicals.html">Technical Analysis</a>
    
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">Community</a>
                                <div class="navbar-dropdown">
                                        <a class="navbar-item" href="chatroom.html">Chatroom</a>
                                        <a class="navbar-item" href="technicals.html">Stock Screener</a>
                                </div>
                            </div> 
                </div> 
    
                <div class="navbar-end">
                        <div class="navbar-item">
                          <div class="buttons">
                            <a style="font-family: DejaVu Sans Mono; border-color:#465d2c" class="button is-small is-focused">Sign up</a>
                            <a style="font-family: DejaVu Sans Mono; border-color:#465d2c" class="button is-small is-focused">Log in</a>
                          </div>
                        </div>
                </div>
            </div>
        </header>
<body>
        <p>Hello <?php echo $_SESSION['username'] ?>
        <br>
        Status: <?php echo $_SESSION['status'] ?>
        <img src="images/_stockpic.jpg" alt="Avatar" class="avatar">
        </p>
        
</body>
</html>
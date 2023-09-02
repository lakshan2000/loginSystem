<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>wellcome back our store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="main">
       
            
                <div class="hbutton">
                    <div style="display: flex;justify-content: left;width: 100vw;">
                        <h1 style="margin: 0px;"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname'] ?></h1>
                    </div>
                    
    
                    <button class ="headbutton">Help Center</button>
                    <button class ="headbutton">Contact</button>
                    <button class ="headbutton">About</button>
                    <button class ="headbutton" onclick="location.href='home.php'">Logout</button>
                    <button class ="headbutton_pic" title="Cart" name="cart_btn"><img id="cart_pic" src="pic/cart.PNG"></button>
                </div>

        
    </header>

    <div class="background-container">  
        <div class="index_main_container"></div>

        </div>
    </div>


    <footer>
        The end of the page.<br>
        specify leagal condition etc...
    </footer>
</body>
</html>
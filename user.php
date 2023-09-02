<?php

    session_start();
    include_once "dbconect.php";
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
                        <h1 id="header_name" style="margin: 0px;">Wellcome Back , <?php echo $_SESSION['username']; ?> </h1>
                    </div>
                
                    
                    <button class ="headbutton">Help Center</button>
                    <button class ="headbutton">Contact</button>
                    <button class ="headbutton">About</button>
                    
                    <form method="POST">
                        <button class ="headbutton_pic" title="Cart" name="cart_btn"><img id="cart_pic" src="pic/cart.PNG"></button>
                    </form>
                    <form method="POST">
                        <button class ="headbutton_pic" title="profile" name="profile_btn"><img  id="user_pic" src="pic/Capture.JPG"></button>
                    </form>     
                    
                    <?php 
                        if(isset($_POST['profile_btn'])){
                            header("Location: profile.php");
                            echo $_SESSION['firstname'] +" " + $_SESSION['lastname'] ;
                        }
                        if(isset($_POST['cart_btn'])){
                            header("Location: cart.php");

                        }
                    ?>
                </div>

        
    </header>

    
    <div class="background-container">  
        <div class="index_main_container">
            
            <div class="searchbar">
                <form >
                    <input class="lp_input"  id="search" type="text" name="search" placeholder="Search...">
                    <input class="lp_input" id="lp_submit" type="submit" value="Search">
                </form>
            </div>

            <div class="lp_container">
            <?php
                $sql = "SELECT * FROM products ORDER BY id;"; 
                $result = mysqli_query($connect, $sql);
                $check = mysqli_num_rows($result);

                    
                if($check > 0){
                    $count = 0;

                    echo "<div class='itemrow'>";

                    while($row = mysqli_fetch_array($result)){
                        if($count ==4 ){
                            echo "</div>"; 
                            echo "<div class='itemrow'>";
                            $count=0; } ?>
                    
                           
                                <div class="imgbox">
                                    <img src=<?php echo $row['Image']; ?>  alt="item1">
                                    <div class="price_box">
                                        <div class="box">
                                            <del>Rs.<?php echo $row['Price'] ?>.00</del>
                                        </div>
                                        <div class="box">
                                            <ins>Rs.<?php echo $row['sellPrice'] ?>.00</ins>
                                        </div>
                                    </div>
                                    <P><?php echo $row['Title'] ?> </P>
                                    <button class="lp_button" onclick="addCart()">Add cart</button><button class="lp_button" id="buyBtn"style="float: right;">Buy</button>
                                </div>
                                
                                
                           
                            <?php  $count++; 
                    }
                }?>
            <div id="popup">
                
            </div>
             
 
            </div>
        </div>            

        </div>
    </div>
         
    


    <footer>
        The end of the page.<br>
        specify leagal condition etc...
    </footer>

    <script src="script.js"></script>
</body>
</html>
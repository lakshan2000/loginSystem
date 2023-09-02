<?php
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
                        <h1 style="margin: 0px;">Wellcome Back Our Store </h1>
                    </div>
                    
    
                    <button class ="headbutton">Help Center</button>
                    <button class ="headbutton">Contact</button>
                    <button class ="headbutton">About</button>
                    <button class ="headbutton" onclick="location.href='login.html'">Login</button>
                    <button class ="headbutton" onclick="location.href='register.html'">Register</button>
                </div>

        
    </header>

<div class="background-container">  
    <div class="lp_main-conatainer">

        <div class="main_img">
            <!-- <form >
                <input class="lp_input"  id="search" type="text" name="search" placeholder="Search...">
                <input class="lp_input" id="lp_submit" type="submit" value="Search">
            </form> -->
            <img  src="pic/background1.jpg" alt="mainpic">
        </div>

        <h2>NEW Deals...</h2>


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
                                    <button class="lp_button">Add cart</button><button class="lp_button" style="float: right;">Buy</button>
                                </div>                   
                           
                            <?php  $count++; 
                    }
                }?>
 
        </div>

        <div class="banner_container">
            <div class="banner">
                <img src=pic/banner1.jpg alt="banner1">
            </div>
            <div class="banner">
                <img src=pic/banner2.jpg  alt="banner2">
            </div>
        </div>

        <div class="brands">
            <img src=pic/footer.png alt="foter"> 
            <img src=pic/foter1.jpg alt="foter1"> 
            <img src=pic/foter2.png alt="foter2"> 
            <img src=pic/foter4.png alt="foter3"> 
        </div>


    </div>
</div>


    
        






    <footer>
        The end of the page.<br>
        specify leagal condition etc...
    </footer>

    <script src="script.js"></script
</body>
</html>
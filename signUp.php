<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up - aqua_cart</title>

        <link rel="stylesheet" type= "text/css" href="styles/signIn.css">
    </head>
    <body style="background-color: rgb(141, 162, 200);">
        <div class="hcontent">
            <?php include_once("includes/header.php"); ?>
        </div>
        <div class="container">
            
            <div class="c1">
            <h3>The Best Deals of Water Bottles</h3>
            <h1>Register Now</h1>
            </div>
            <div class="c2">
                <input type="text" placeholder="Name" name="name" id="name" required="true"></br>
                <input type="text" placeholder="Email" name="email" id="email" required="true"></br>
                <input type="number" placeholder="contact" name="contact" id="contact" required="true"></br>
                <input type="text" placeholder="Password" name="pwd" id="pwd" required="true"></br>
                <a  href="signIn.php" target="_blank">Already have an account? Sign In</a></br>
                <button>Submit</button>
                
                </div>
            
        </div>
        <?php include_once("includes/footer.php"); ?>
    </body>
</html>
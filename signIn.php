<!DOCTYPE html>
<html>
    <head>
        <title>Log In - aqua_cart</title>

        <link rel="stylesheet" type= "text/css" href="styles/signIn.css">
    </head>
    <body style="background-color: rgb(141, 162, 200);">
        <div class="hcontent">
            <?php include_once("includes/header.php"); ?>
        </div>
        <div class="container">
            
            <div class="c1">
            <h3>The Best Deals of Water Bottles</h3>
            <h1>Login to Your Account!</h1>
            </div>
            <div class="c2">
                <input type="text" placeholder="Email/Phone Number" name="econtact" id="econtact" required="true"></br>
                <input type="text" placeholder="Password" name="pwd" id="pwd" required="true"></br>
                <a  href="forgetpwd.php" target="_blank">Forgot Password?</a><br>
                <a  href="signUp.php" target="_blank">Don't have an account? Sign Up</a></br>
                <button>Submit</button>
                
                </div>
            
        </div>
        <?php include_once("includes/footer.php"); ?>
    </body>
</html>
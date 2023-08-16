<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Login-Page</title>
    <link rel="website icon"  type="png" href="images/logo.png" width="50">
    <link rel="stylesheet" href="style.scss">
</head>
<body>
    <div class="container">
        <div class="login-left">
            <div class="login-header">
                <h1>Welcome to Our Application</h1>
                <p>Please login to use the platform</p>
            </div>
            <form class="login-form" action="index.php" method="get">
                <div class="login-form-content">
                    <div class="form-item">
                        <label for="email">Enter Email</label>
                        <input type="text" id="email">
                    </div>
                    <div class="form-item">
                        <label for="password">Enter Password</label>
                        <input type="password" id="password">
                    </div>
                    <div class="form-item">
                        <div class="checkbox">
                            <input type="checkbox" id="rememberMeCheckbox"> 
                            <label for="rememberMeCheckbox" class="checkboxlabel">Remember Me</label>
                        </div>
                    </div>
                    <button type="submit">Sing In</button>
                </div>
            </form>
        </div>
        <div class="login-right">
            <img src="images/png.png" width="950px">
        </div>
    </div>
</body>
</html>
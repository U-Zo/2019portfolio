<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/wpos_login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div class="login-wrapper">
    <div class="login">
        <div class="login-header">
            Your WPoS
        </div>
        <div class="login-body">
            <p>If you want to start your business</p>
            <p>Press login button</p>
            <form class="login-form" method="post" action="login_ok.php">
                <input type="text" name="user_id" id="user_id" placeholder="admin">
                <input type="password" name="password" id="password" placeholder="admin">
                <button type="submit" name="submit" id="submit">LOGIN</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
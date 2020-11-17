<html>
<head>
<title>Login</title>

<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 110vh;
                margin: 5;
            }

            .full-height {
                height: 70vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }
            .position-abs {
                position: absolute;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 20px;
            }
            .bottom {
                bottom: 60px;
            }
            .left {
                left: 60px;
            }
            .content{
                font-size: 28px;
                text-align: center;
            }


            .title{
                text-align: center;
                font-size: 75px;
            }
            .warning {
                text-align: center;
                font-size: 25px;
                top: 100px;
                color: #AA0000;
            }

            .success {
                text-align: center;
                font-size: 25px;
                top: 100px;
                color: #003377;
            }

            .home > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 19px;
                font-weight: 600;
                letter-spacing: .125rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 19px;
                font-weight: 600;
                letter-spacing: .125rem;
                text-decoration: none;
            }
            .note{
                background-color: #003377;
                color: #003377;
                font-size: 25px;
                font-weight: 500;
                letter-spacing: .125rem;
                line-height: 60px;
                text-decoration: none;
                height: 0vh;
                text-align: left;
                left: 260px;
                right: 500px;
                top: 200px;
                position: absolute;
                margin: 10;
                margin-right：50px;

            }

            .m-b-md {
                margin-bottom: 40px;
            }
        </style>

</head>
<body>
     <div class="flex-center position-ref full-height">
                <div class="top-right home">
                        <a href="view.php?name="$_GET['name']"">View</a>
                        <a href="index.php">Login</a>
                        <a href="signup.php">Register</a>
                </div>
      <div class="content">
                <div class="m-b-md">
                    <form name="login" action="index.php" method="post">
                        <p>Username : <input type=text name="name"></p>
                        <p>Password : <input type=password name="password"></p>
                        <p><input type="submit" name="submit" value="Log in">
                    <style>
                        input {padding:5px 15px; background:#ccc; border:0 none;
                        cursor:pointer;
                        -webkit-border-radius: 5px;
                        border-radius: 5px; }
                    </style>
                        <input type="reset" name="Reset" value="Reset">
                    <style>
                        input {
                            padding:5px 15px;
                            background:#FFCCCC;
                            border:0 none;f
                            cursor:pointer;
                            -webkit-border-radius: 5px;
                            border-radius: 5px;
                            font-family: 'Nunito', sans-serif;
                            font-size: 19px;
                        }
                    </style>
                    </form>
                </div>

</body>
</html>
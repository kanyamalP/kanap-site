<!DOCTYPE html>
<html>
<head>
    <title>kanap-site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo"><a href="index.html">kanap-site</a></div>
        <ul class="nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="generic.html">Generic</a></li>
        </ul>
    </header>

    <div class="send-mail">
        <?php
        $to = 'kanyamal.yy@gmail.com';
        $name = '';
        $email = '';
        $message = '';
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        if (mb_send_mail($to, $name, $email, $message)) {
            echo "メールを送信しました";
        } else {
            echo "メールの送信に失敗しました";
        };
        ?>
        <br />
        <a href="index.html">HOMEへ戻る</a>
    </div>

    <!-- Footer -->
    <div id="footer">
        <div class="frame frame-form">
            <header>
                <h2>GET IN TOUCH</h2>
            </header>
            <form method="post" action="./confirm.php">
                <div class="form-data">
                    <div class="form-content">
                        <div class="form-text">NAME</div>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div class="form-content">
                        <div class="form-text">E-MAIL</div>
                        <input type="email" name="email" id="email" />
                    </div>
                </div>
                <div class="message-form">
                    <div class="form-text">MESSAGE</div>
                    <textarea name="message" id="message" rows="6"></textarea>
                </div>

                <ul class="actions bg-white">
                    <li><input type="submit" value="Send Message" class="alt button form-submit bg-white" /></li>
                </ul>
            </form>
            <p class="copyright">
                Copyright 2020 kanap All Rights Reserved.
            </p>
        </div>
    </div>
</body>
</html>
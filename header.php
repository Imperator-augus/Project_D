<?php
    session_start();
    $nm = "";
    if(isset($_SESSION["login_user"]))
    {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <header>
        <div class="header-box">
            <div class="nav">
                <ul>
                    <li><a href="recipe.php">Recipe</a></li>
                    <li><a href="qna.php">QnA</a></li>
                </ul>
            </div>
            <div class="logo">
                <h1><a href="#">LOGO</a></h1>
            </div>
            <div class="join">
            <?php if(isset($_SESSION["login_user"])) { ?>
                <a href="profile.php">
                    <?php
                            $session_img = $_SESSION["login_user"]["profile_img"];
                            $profile_img = $session_img == null ? "ico_user.png" : $_SESSION["login_user"]["user_no"] . "/" .$session_img; 
                            ?>
                         <div class="circular__img wh40">
                             <img src="/project/img/<?=$profile_img?>">
                            </div>
                        </a>
                        <?=$nm?>
                        <a href='logout.php'><button>로그아웃</button></a>
                <?php } else { ?>
                <span><a href="login.php">로그인</a></span>
                <span><a href="join.php">회원가입</a></span>
                <?php } ?>
            </div>
        </div>
    </header>
</body>
</html>
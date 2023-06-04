<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Brand Name</title>
  <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
  <link href="https://unpkg.com/ress/dist/ress.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
  <link href="css/layout.css" rel="stylesheet">
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/slick.css" rel="stylesheet">
  <link href="css/slick-theme.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
</head>
<body>
    <header>
        <div id="wrapper">
            <nav id="global-navi">
            <p class="btn-gnavi">
                <span></span>
                <span></span>
                <span></span>
            </p>
            <ul class="menu">
                <li><a href="index_.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="look.html">LOOK</a></li>
                <li><a href="">SHOP</a></li>
                <li><a href="contact.php">contact</a></li>
            </ul>
            </nav>
        </div>
    </header>
    <main>
    </main>
    <footer></footer>
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/humberger.js"></script>
    <script src="js/index.js"></script>
</body>

<link href="css/contact.css" rel="stylesheet">

<?php
    if(isset($_POST["name1"])){
        $name1 = $_POST["name1"];
        $name2 = $_POST["name2"];
        $gender = $_POST["gender"];
        $tell = $_POST["tell"];
        $email = $_POST["email"];
        $genre = $_POST["genre"];
        $content = $_POST["content"];
    } else {
        $name1 = "";
        $name2 = "";
        $gender = "";
        $tell = "";
        $email = "";
        $genre = "";
        $content = "";
    }
?>

<h2>お問合せフォーム</h2>
<form action="contact2.php" method="post">
    <span>お名前</span>
    <input type="text" name="name1" required placeholder="テスト　太郎" value="<?php echo $name1;?>">
    <br>
    <span>ふりがな</span>
    <input type="text" name="name2" required placeholder="てすと　たろう" value="<?php echo $name2;?>">
    <br>

    <span>性別</span>
    <label><input type="radio" name="gender" value="男性">男性</label>
    <label><input type="radio" name="gender" value="女性">女性</label>
    <label><input type="radio" name="gender" value="その他" checked>その他</label>
    <br>

    <span>電話番号</span>
    <input type="tel" name="tell" pattern="\d{2,4}-?\d{2,4}-?\d{3,4}" required placeholder="090XXXXZZZZ" value="<?php echo $tell;?>">
    <br>
    <span>Eメール</span>
    <input type="email" name="email" required placeholder="○○○@○○○" value="<?php echo $email;?>">
    <br>

    <span>種類</span>
    <select name="genre">
        <option value="相談">相談</option>
        <option value="質問" selected>質問</option>
        <option value="その他">その他</option>
    </select>
    <br>
    
    <div class="txtarea">
        <span>内容</span>
        <!-- <input type="text" name="content"> -->
        <textarea name="content"><?php echo $content; ?></textarea>
    </div>
    <br>

    <input type="submit" value="送信">

</form>


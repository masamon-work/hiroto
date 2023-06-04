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

<link href="contact.css" rel="stylesheet">

<h2>入力内容のご確認</h2>

<?php
    $name1 = $_POST["name1"];
    $name2 = $_POST["name2"];
    $gender = $_POST["gender"];
    $tell = $_POST["tell"];
    $email = $_POST["email"];
    $genre = $_POST["genre"];
    $content = $_POST["content"];

    echo "お名前：".$name1."<br>";
    echo "ふりがな：".$name2."<br>";
    echo "性別：".$gender."<br>";
    echo "電話番号：".$tell."<br>";
    echo "Eメール：".$email."<br>";
    echo "種類：".$genre."<br>";
    echo "内容：".$content."<br>";

?>

<form method="POST" action="contact1.php">
    <input type="hidden" name="name1" value="<?php echo $name1; ?>">
    <input type="hidden" name="name2" value="<?php echo $name2; ?>">
    <input type="hidden" name="gender" value="<?php echo $gender; ?>">
    <input type="hidden" name="tell" value="<?php echo $tell; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="genre" value="<?php echo $genre; ?>">
    <input type="hidden" name="content" value="<?php echo $content; ?>">
    <input type="submit" value="修正する">
</form>

<p>上記の内容で宜しいでしょうか？</p>
<a href="contact1.php">戻る</a>
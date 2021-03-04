

<header >
    <title>
       3 آموزشگاه زبان کاوش
    </title>
</header>
<?php
if(isset($_COOKIE["name"])){
?>
<h1>
    <?php
    echo $_COOKIE["name"]. " عزیز خوش آمدی!!"
    ?>
</h1>
<?php }
else {
    ?>

    <body>
    <form action="answer.php" method="post">
        <table>
            <tr>
                <td> نام:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td> فامیلی:</td>
                <td><input type="text" name="family"></td>
            </tr>
            <tr>
                <td> نام کاربری:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td> رمز:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="send" value="ارسال"></td>
                <td><button  type="button" name="to_main" value="رفتن به صفحه اصلی" onclick="location.href='answer.php'"> رفتن به صفحه اصلی</td>
            </tr>
            <tr>
                <td></td>

        </table>
    </form>
    </body>
    <?php
    if(isset($_REQUEST["name"]))
    setcookie("name",$_REQUEST["name"],time()+60,"/");
}
?>




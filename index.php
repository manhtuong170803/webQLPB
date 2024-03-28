<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <style type="text/css">
        .a{
            background: #F0FFFF;
        }
    </style>
</head>
<frameset rows="20%,*,10%">
    <frame noresize="noresize" scrolling="no" frameborder ="0" name="Frame_1" src="./frame1.php">
    <frameset cols="20%,*,20%">
        <frame  noresize="noresize" scrolling="no" frameborder ="0" name="Frame_2" src="./frame2.php" />
        <frame class="a" noresize="noresize" frameborder ="0" name="Frame_3" src="./frame3.php" />
        <frame  noresize="noresize" scrolling="no" frameborder ="0" name="Frame_4" src="./frame4.php" />
    </frameset>
    <frame scrolling="no" noresize="noresize"  frameborder ="0" name="Frame_5" src="./frame5.php" />
</frameset>
</html>
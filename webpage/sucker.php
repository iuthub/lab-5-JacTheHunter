<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css"
          type="text/css" rel="stylesheet"/>
</head>

<body>
<?php
if (empty($_POST["StudentName"]) or empty($_POST["sections"]) or empty($_POST["credit_card"]) or empty($_POST["card"])) {
    ?>
    <h1>Sorry</h1>
    <p>You didn't fill out the form completely. <a href="buyagrade.php">Try again?</a></p>
<?php } else { ?>
    <?php
    $caption = $_REQUEST["StudentName"] . ';' . $_REQUEST["sections"] . ';' . $_REQUEST["credit_card"] . ';' . $_REQUEST["card"] . PHP_EOL;
    file_put_contents("suckers.txt", $caption, FILE_APPEND);
    ?>
    <h1>Thanks, sucker!</h1>

    <p>Your information has been recorded.</p>

    <dl>
        <dt>Name</dt>
        <dd><?= $_REQUEST["StudentName"] ?></dd>

        <dt>Section</dt>
        <dd><?= $_REQUEST["sections"] ?>
        </dd>

        <dt>Credit Card</dt>
        <dd><?= $_REQUEST["credit_card"] . '(' . $_REQUEST["card"] . ')' ?></dd>
    </dl>
    <pre><?= file_get_contents('suckers.txt') ?></pre>
<?php } ?>
</body>
</html>

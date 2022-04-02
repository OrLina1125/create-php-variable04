<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
</head>
<body>
<form method="GET">
<input type ="text" name="person">
    <button>SUBMIT</button>
</form>

    <?php
        $name = $_GET['person'];
        echo $name."is a handsame fellow!";
    ?>

</body>
</html>
<?php
session_start();
if (!isset($_SESSION["notes"])) {
    $_SESSION["notes"] = array();
}
if ($_POST["note"] != "") {
    $_SESSION["notes"][] = $_POST["note"];
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>ex3</title>
</head>

<body>
<form action="" method="post">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="row"></div>
                <ul><?php
                    foreach ($_SESSION["notes"] as $element) { ?>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text"><?= $element ?></p>
                            </div>
                        </div>
                        <br>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-2">
                <label for="note">Note :</label>
                <input class="form-control" type="text" name="note" id="note"/>
                <br/>
                <br/>
                <input class="btn btn-primary" name="submit" type="submit" value="Add Note">
            </div>
        </div>
    </div>
</form>
</body>
<?php
$_POST['note']="";

?>
</html>
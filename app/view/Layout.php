<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="MedCon" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->getTitle(); ?></title>
    <meta name="description" content="<?php echo $this->getDescription(); ?>">
    <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">

    <link rel="stylesheet" href="<?php echo DIRCSS . "volt.css"; ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo DIRCSS . "bootstrap.css"; ?>" rel="stylesheet">
    <script src="<?php echo DIRJS . "popper.min.js"; ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo DIRCSS . "style.css"; ?>">
    <?php echo $this->addHead(); ?>
</head>

<body>

    <div class="Header">
        <?php echo $this->addHeader(); ?>
        <div style="margin-top: 56px;">
            <?php
            $n = new Src\classes\ClassBreadCrumbs();
            $n->addBreadCrumb(); ?>
        </div>

    </div>
    <div class="Main">
        <?php echo $this->addMain(); ?>
    </div>
    <div class="Footer">
        <?php echo $this->addFooter(); ?>
    </div>



    <script src="<?php echo DIRJS . "jquery.js"; ?>"></script>

    <script src="<?php echo DIRJS . "func.js"; ?>"></script>

</body>

</html>
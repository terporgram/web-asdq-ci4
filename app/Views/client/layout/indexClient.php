<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php' ?>
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <!-- header -->
            <?php include 'header.php' ?>

            <!-- isi -->
            <?= $this->renderSection('content') ?>

            <!-- footer -->
            <?php include 'footer.php' ?>
        </div>
    </div>

    <?php include 'javascript.php' ?>
</body>

</html>
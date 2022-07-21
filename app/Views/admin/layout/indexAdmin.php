<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php' ?>
</head>

<body>
    <div id="app">
        <!-- sidebar -->
        <?php include 'sidebar.php' ?>
        <!-- akhir sidebar -->

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <!-- content -->
            <?= $this->renderSection('content') ?>
            <!-- akhir Content -->

            <!-- footer -->
            <?php include 'footer.php' ?>
            <!-- akhir footer -->
        </div>
    </div>
    <?php include 'javascrip.php' ?>
</body>

</html>
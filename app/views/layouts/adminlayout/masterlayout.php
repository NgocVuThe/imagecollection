<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Trang Quản Trị</title>
</head>
<body>
    <div class="container-fluid">
    <!-- Ảnh banner -->
        <div class="container">
            <?php include_once 'header.php'?>
        </div>
    <!-- End banner     -->
    <!-- Menu -->
        <div class="container">
            <?php include_once 'navbar.php'?>
        </div>
    <!-- End Menu  -->
    <!-- Content -->
        <div class="container" style="margin-top:30px">
            <div class="row">
                <!-- LeftSide -->
                <div class="col-sm-4">
                    <?php include_once 'leftside.php'?>
                </div>
                <!-- End LeftSide -->
                <!-- RightSide -->
                <div class="col-sm-8">
                    <?php include_once ?>
                </div>
                <!-- End RightSide -->
            </div>
        </div>
    <!-- End Content -->
    <!-- Footer -->
        <div class="container">
            <?php include_once 'footer.php'?>
        </div>
    <!-- End Footer -->
    </div>
</body>
</html>
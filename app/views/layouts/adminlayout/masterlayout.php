<?php include_once 'header.php'?>
<body>
    <div class="container-fluid">
    <!-- Ảnh banner -->
        <div class="container">
            <?php include_once 'banner.php'?>
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
                <div class="col-sm-2 ">
                    <?php include_once 'leftside.php'?>
                </div>
                <!-- End LeftSide -->
                <!-- MiddleSide -->
                <div class="col-sm-8 ">
                    <?php include_once $views?>
                </div>
                <!-- End MiddleSide -->
                <!-- RightSide -->
                <div class="col-sm-2">
                <?php include_once 'rightside.php'?>
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
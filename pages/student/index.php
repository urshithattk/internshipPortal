<?php
$title = "Dashboard";
$style = "./styles/global.css";
$favicon = "../../assets/favicon.ico";
include_once("../../components/head.php");
//include("../../Google Login/welcome.php");
?>




<body>
    <?php
    include_once("../../components/navbar/index.php");
    include("../../Google Login/welcome.php");
    ?>
    <div class="container my-2 greet">
        <p> Welcome <?=$userinfo[full_name] ?> </p>
    </div>
    <div class="container text-center">
        <div class="row mx-auto">
            <div class="col mt-3">
                <a href="./new.php" class="btn btn-primary btn-lg col-md-12 p-sm-4" role="button">New
                    Application</a>
            </div>
            <div class="col my-3">
                <a href="./previous.php" class="btn btn-warning btn-lg col-md-12 p-sm-4" role="button">Previous
                    Applications</a>
            </div>
        </div>
    </div>

    <?php
    include_once("../../components/announcement/index.php");
    ?>

</body>

</html>
<?php
$title = "Dashboard";
$style = "./styles/global.css";
$favicon = "../../assets/favicon.ico";
include_once("../../components/head.php");
?>

<body>
    <?php
    include_once("../../components/navbar/index.php");
    ?>
    <div class="container my-2 greet">
        <p>Rejected Applications</p>
        <!-- Search Button -->
        <form class="row g-3">
            <div class="col-auto">
                <input class="form-control" id="search" placeholder="ID or Company Name">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Search</button>
            </div>
        </form>
    </div>
    <div class="container mt-2 table-responsive-sm">
        <table class="table table-bordered table-dark table-sm">
            <thead class="thead-light text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Company</th>
                    <th scope="col">Applied On</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Class</th>
                    <th scope="col">Rejected On</th>
                    <th scope="col">Comment</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-light">
                    <th class="pt-3 text-center" scope="row">
                        14
                    </th>
                    <td class="pt-3">
                        Mark Industries pvt. ltd
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        WFH
                    </td>
                    <td class="pt-3 text-center">
                        SE-ECS
                    </td>
                    <td class="pt-3 text-center ">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center ">
                        Working Date comes during examination
                    </td>

                </tr>
                <tr class="table-light">
                    <th class="pt-3 text-center" scope="row">
                        14
                    </th>
                    <td class="pt-3">
                        Mark Industries pvt. ltd
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center">
                        WFH
                    </td>
                    <td class="pt-3 text-center">
                        SE-ECS
                    </td>
                    <td class="pt-3 text-center ">
                        18/10/2022
                    </td>
                    <td class="pt-3 text-center ">
                        Working Date comes during examination
                    </td>

                </tr>

            </tbody>
        </table>
    </div>
</body>

</body>
    <head>
        <title>pagination</title>
        <style type="text/css">
            .firstpaging{
                border: 1px solid black;
                padding: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
         }
         a{
                text-decoration: none ;
                background-color: white;
                padding: 10px;
                color: black;
         }
            a.sec:hover{
                background-color: #0d6efd;
                color: white;


            }
        </style>


    </head>
    <body>
        <?php
            include_once("../../components/navbar/index.php");
        ?>

        <div class="firstpaging">
        <a href=""class="sec"><< Previous</a>
        <a href="" class="sec">1</a>
        <a href="" class="sec">2</a>
        <a href="" class="sec">3</a>
        <a href="" class="sec">4</a>
        <a href="" class="sec">5</a>
        <a href=""class="sec">Next >></a>
        </div>    
    </body>

</html>
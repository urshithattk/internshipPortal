<?php
$title = "Dashboard";
$style = "./styles/global.css";
$favicon = "../../assets/favicon.ico";
include_once("../../components/head.php");
?>

<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>
    <?php
    include_once("../../components/navbar/index.php");
    ?>

    <div class="container my-2 greet">
        <div class="row">
            <div class="col greet">
                <p>Previous Applications</p>
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

            <div class="container mt-5 table-responsive-sm">
                <table class="table table-bordered table-dark table-sm">
                    <thead class="thead-light text-center">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Company</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Certificate/LOR</th>
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
                                Approved
                            </td>
                            <td class="py-3 text-center col-3">
                                Please collect the approval letter from office and upload the certificate after completion of internship


                            </td>
                            <td class="py-3 text-center col-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger mb-3" data-toggle="modal" data-target="#exampleModalCenter">Upload</button>
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
                                Rejected
                            </td>
                            <td class="py-3 text-center">
                                Rejected as internship falls during examination period
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
                                Pending
                            </td>
                            <td class="py-3 text-center">
                                Under Review
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Upload LOR/Certificate</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="file" accept="application/pdf" class="form-control" spellcheck="false" required autocomplete="off" name="resume" id="resume">
                            <br>
                            <div class="col d-flex align-items-center justify-content-center">
                                <a href="../student/apply.php" class="btn btn-primary btn-sm col-4 d-flex align-items-center justify-content-evenly" role="button" aria-disabled="true">
                                    <div>
                                        View
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                </div>
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
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
        <p>New Application</p>
    </div>
    <div class="container my-3" id="content">
        <div class="bg-light p-5 rounded">
            <form class="row g-3" action=connect_student.php method="post">

                <div class="col-12">

                    <strong for="CompanyName" class="form-label">Company Name</strong>
                    <input type="text" class="form-control" spellcheck="false" required autocomplete="off"
                        name="na_companyname" id="CompanyName" placeholder="e.g. ABC pvt. ltd.">
                </div>
                <div class="col-12">
                    <strong for="CompanyAddress" class="form-label">Company Address</strong>
                    <input type="text" class="form-control" spellcheck="false" required autocomplete="off"
                        name="na_companyadd" id="CompanyAddress"
                        placeholder="e.g. Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016">
                </div>
                <div class="col-12">
                    <strong for="CompanyLocation" class="form-label">Company Location</strong>
                    <input type="text" class="form-control" spellcheck="false" required autocomplete="off"
                        name="na_companylocation" id="CompanyLocation" placeholder="e.g. Bangalore">
                </div>

                <div class="col-12">
                    <strong for="inputHeight" class="form-label">Start Date</strong>
                    <input id="startDate" class="form-control" type="date" name="na_startdate" />

                </div>
                <div class="col-12">
                    <strong for="inputHeight" class="form-label">End Date</strong>
                    <input id="endDate" class="form-control" type="date" name="na_enddate"/>
                </div>

                <div class="col-12">
                    <strong for="Branch" class="form-label">Branch</strong>
                    <select class="form-select" aria-label="Default select example" name="na_branch">
                        <option selected value="ECS">ECS</option>
                        <option selected value="EXTC">EXTC</option>
                        <option value="CS">CS</option>
                        <option value="IT">IT</option>
                        <option value="MECH">MECH</option>
                        <option value="AUTO">AUTO</option>
                    </select>
                </div>

                <div class="col-12">
                    <strong for="Semester" class="form-label">Current Semester :</strong>
                    <select class="form-select" aria-label="Default select example" name="na_currentsem">
                        <option selected value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                        <option value="VI">VI</option>
                        <option value="VII">VII</option>
                        <option value="VIII">VIII</option>
                    </select>
                </div>

                <div class="form-group">
                    <label><strong>Work type :</strong></label>
                    <br>

                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="na_stipend" value="Paid" />
                        <span class="form-check-label"> Paid </span>
                    </label>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="na_stipend" value="UnPaid" />
                        <span class="form-check-label"> Unpaid </span>
                    </label>
                </div>
                <div class="form-group">
                    <label><strong>Work Location :</strong></label>
                    <br>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="na_worklocation" value="WFH" />
                        <span class="form-check-label"> Work From Home</span>
                    </label>
                    <br>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="na_worklocation" value="Hybrid" />
                        <span class="form-check-label"> Hybrid </span>
                    </label>
                    <br>
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="na_worklocation" value="OnSite" />
                        <span class="form-check-label"> On-site </span>
                    </label>
                </div>

                <div class="container text-center">
                    <div class="row mx-auto">
                        <div class="col mt-3">
                            <button class="btn btn-primary btn-lg col-md-12"  role="button">Submit</button>
                        </div>

                    </div>
                </div>



            </form>
        </div>
    </div>





</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>sanjeevni.com/admin_blood_donor</title>
    <link rel="icon" href="../images/logoimg.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap cdn-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--css file link-->
    <link rel="stylesheet" href="../style/admin_appointment.css">
</head>

<body>
    <!--**********************************************nav bar*******************************************************-->
    <nav class="navbar navbar-toggleable-md navbar-light  bg-dark">
        <button class="navbar-toggler navbar-toggler-right dropdown" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img class="img-fluid logoimg" src="../image/logoimg.jpg">
            <h7 class="brand-name"><b>Sanjeevni</b></h7>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item item1 active"><a class="navlinks" href="admin_home.php">
                    <b>Home</b></a>
                </li>
                <li class="nav-item item1 active"><a class="navlinks" href="admin_hospital.php">
                    <b>Hospital</b></a>
                </li>
                <li class="nav-item item1 active"><a class="navlinks" href="admin_blood_bank.php">
                    <b>Blood_Bank</b></a>
                </li>
                <li class="nav-item item1 active"><a class="navlinks" href="admin_blood_donor.php">
                    <b>Blood_Donor</b></a>
                </li>
                <li class="nav-item item1 active"><a class="navlinks" href="logout_script.php">
                    <b>Logout</b></a>
                </li>
            </ul>
        </div>
    </nav>
            <div class="fluid-container c1">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col1">
                            <?php
                                            include("../includes/connection.php");
                                            if(isset($_GET['id'])){
                                                $id=$_GET['id'];
                                                echo "<h1 class='aname'>appointment name</h1>";
                                            $users="SELECT * FROM `app` WHERE `user_id`='$id'";
                                            $run_user=mysqli_query($con,$users);
                                            while($row_user=mysqli_fetch_array($run_user)){
                                                $p_name=$row_user['pateint_name'];
                                                echo"<h1 class='pname'>$p_name</h1><hr>";
                                            }}
                                            ?>
                        </div>
                    </div>
                </div>
            </div>
    <footer>
        <div class="fluid-container fixed-bottom f1">
            <div class="container-fluid ">
                <div class="row ourservicesrow">
                    <div class="col-sm-2 ourservices">
                    </div>
                    <div class="col-sm-10 aboutmeparagraph">
                    </div>
                </div>
                <pre class="copyrightline"><i class="fa fa-copyright" aria-hidden="true"></i>copyright to sanjeevni.com,all rights reserved.</pre>
            </div>
        </div>
    </footer>
</body>

</html>

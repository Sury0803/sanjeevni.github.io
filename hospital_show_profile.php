<!DOCTYPE html>
<?php
include("includes/connection.php");
if(isset($_GET['id'])){
    global $con;
    $User_Id=$_GET['id'];
    $select="SELECT * FROM `user` WHERE `id`='$User_Id'";
    $run=mysqli_query($con,$select);
    $row=mysqli_fetch_array($run);
    
$id=$row['id'];
$Hospital_Name=$row['hospital_name'];
$Hospital_Type=$row['type_of_hospital'];
$Address=$row['hospital_address'];
$District=$row['district'];
$Hospital_Phone_No=$row['h_phone_no'];
$Emergency=$row['emergency'];
$bed=$row['bed'];
$ICU=$row['icu'];
$Ventilator=$row['ventilator'];
$Oxygen=$row['oxygen'];
$Ambulance_Availability=$row['ambulance_availability'];
$Ambulance_Phone_No=$row['amubulance_phone_no'];
$Male_Doctor=$row['male_doctor'];
$Female_Doctor=$row['female_doctor'];
$Image=$row['image'];
}
?>
<html>

<head>
    <title>sanjeevni.com/hospital_profile</title>
    <link rel="icon" href="image/logoimg.jpg">
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
    <link rel="stylesheet" href="style/hospital_show_profile_stylesheet.css">
</head>

<body>
    <!--nav bar-->
    <nav class="navbar navbar-toggleable-md navbar-light  bg-dark">
        <button class="navbar-toggler navbar-toggler-right dropdown" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img class="img-fluid logoimg" src="image/logoimg.jpg">
            <h7 class="brand-name"><b>Sanjeevni</b></h7>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item item1 active"><a href="district_list.php">
                        <button class="contactbtn btn-outline-success my-2 my-sm-0" type="submit"><b>District Page</b></button></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="c1">
        <div class="fluid-container">
            <div class="row">
                <?php echo"<img class='img-fluid introimg' style='border: 5px solid white; box-shadow: 0 0 16px 7px rgba(0,150,255,0.91) ;' src='users/$Image'>"; ?>
            </div>
            <h1 class="introline"><?php echo"$Hospital_Name"; ?></h1>
        </div>
    </div>
    <div class="c2">
        <div class="fluid-container details">
            <div class="row">
                <div class="col-sm-4">
                    <div class="col1">
                        <p class="title">Hospital Type:</p>
                        <p class="info"><?php echo"$Hospital_Type"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col2">
                        <p class="title">Address:</p>
                        <p class="info"><?php echo"$Address"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col3">
                        <p class="title">District:</p>
                        <p class="info"><?php echo"$District"; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="col1">
                        <p class="title">Hospital Phone No.:</p>
                        <p class="info"><?php echo"$Hospital_Phone_No"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col2">
                        <p class="title">Emergency:</p>
                        <p class="info"><?php echo"$Emergency"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col3">
                        <p class="title">Available Bed's:</p>
                        <p class="info"><?php echo"$bed"; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="col1">
                        <p class="title">Available ICU's:</p>
                        <p class="info"><?php echo"$ICU"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col2">
                        <pre class="title">Available Ventilator's:</pre>
                        <p class="info"><?php echo"$Ventilator"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col3">
                        <p class="title">Oxygen Availability:</p>
                        <p class="info"><?php echo"$Oxygen"; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="col1">
                        <pre class="title">Ambulance Availability:</pre>
                        <p class="info"><?php echo"$Ambulance_Availability"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col2">
                        <pre class="title">Ambulance Phone NO.:</pre>
                        <p class="info"><?php echo"$Ambulance_Phone_No"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col3">
                        <pre class="title">Male Dr. Availability:</pre>
                        <p class="info"><?php echo"$Male_Doctor"; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="col1">
                        <pre class="title">Female Dr. Availability:</pre>
                        <p class="info"><?php echo"$Female_Doctor"; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col2">
                       <div class="row">
                        <button class="appointment" type="submit" name="submit" >Take Appointment</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="fluid-container f1">
            <div class="container-fluid ">
                <div class="row ourservicesrow">
                    <div class="col-sm-2 ourservices">
                    </div>
                    <div class="col-sm-10 aboutmeparagraph">
                    </div>
                </div>
                <pre class="copyrightline"><i class="fa fa-copyright" aria-hidden="true"></i>copyright to sanjeevni.com<br>all rights reserved.</pre>
            </div>
        </div>
    </footer>
</body>

</html>
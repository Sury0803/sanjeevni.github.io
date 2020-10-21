<!DOCTYPE html>
<?php include("doctor_list_script.php"); ?>
<html>
<head>
    <title>sanjeevni.com/edit_doctor_list</title>
    <link rel="icon" href="image/logoimg.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap cdn-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--css file link-->
    <link rel="stylesheet" href="style/doctor_list_stylesheet.css">
    
    <script>
        $('document').ready(function(){
            $('#btn').click(function(e){
                e.preventDefault();
                $('.aspection').append('<input type="text" name="name[]" class="form-control" placeholder="Doctor Name"><input type="text" name="spe[]" class="form-control" placeholder="Doctor Specializatio"><input type="text" name="time[]" class="form-control" placeholder="Doctor Time">')
            })
           
        });
    </script>
</head>

<body>
    <!--nav bar-->
    <nav class="navbar navbar-toggleable-md navbar-light  bg-dark">
        <a class="navbar-brand" href="#"><img class="img-fluid logoimg" src="image/logoimg.jpg">
            <h7 class="brand-name"><b>Sanjeevni</b></h7>
        </a>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="doctor_list.php" method="post">
                  <div class="aspection">
                   <input type="text" name="name[]" class="form-control" placeholder="Doctor Name">
                   <input type="text" name="spe[]" class="form-control" placeholder="Doctor Specializatio">
                   <input type="text" name="time[]" class="form-control" placeholder="Doctor Time">
                   </div><br>
                    <button name="doctor" class="btn btn-info">Submit</button>
                    <button id="btn" class="btn btn-warning">Add More</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

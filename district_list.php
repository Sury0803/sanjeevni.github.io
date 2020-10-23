<!DOCTYPE html>
<html>

<head>
    <title>sanjeevni.com/district_page/</title>
    <link rel="icon" href="images/logoimg.jpg">
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
    <link rel="stylesheet" href="style/district_list_stylesheet.css">
</head>

<body style="background-color: aliceblue;">
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
                <li class="nav-item item1 active"><a href="index.php">
                        <button class="contactbtn btn-outline-success my-2 my-sm-0" type="submit"><b>Home</b></button></a>
                </li>
                <li class="nav-item item2 active">
                    <a href="#"> <button class="loginbtn btn-outline-success my-2 my-sm-0" type="submit"><b>Chatbot</b></button></a>
                </li>
                <li class="nav-item item3 active"><a href="sign_up.php">
                        <button class="signbtn btn-outline-success my-2 my-sm-0" type="submit"><b>Sign In/up</b></button></a>
                </li>
            </ul>
        </div>
    </nav>
    <!--serach bar-->

    <div class="text-center">
        <div class="dropdown listdropdown">
            <button onclick="myFunction()" class="dropbtn">search your district here</button>
            <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                <a href="agra.php">Agra</a>
                <a href="aligarh.php">Aligarh</a>
                <a href="allahabad.php">Allahabad</a>
                <a href="ambedkar_nagar.php">Ambedkar Nagar</a>
                <a href="amethi.php">Amethi</a>
                <a href="amroha.php">Amroha</a>
                <a href="auraiya.php">Auraiya</a>
                <a href="azamgarh.php">Azamgarh</a>
                <a href="baghpat.php">Baghpat</a>
                <a href="bahraich.php">Bahraich</a>
                <a href="ballia.php">Ballia</a>
                <a href="balrampur.php">Balrampur</a>
                <a href="banda.php">Banda</a>
                <a href="barabanki.php">Barabanki</a>
                <a href="bareily.php">Bareilly</a>
                <a href="basti.php">Basti</a>
                <a href="bhadohi.php">Bhadohi</a>
                <a href="bijnor.php">Bijnor</a>
                <a href="budaun.php">Budaun</a>
                <a href="bulandshahar.php">Bulandshahr</a>
                <a href="chandouli.php">Chandauli</a>
                <a href="chitrakoot.php">Chitrakoot</a>
                <a href="deoria.php">Deoria</a>
                <a href="etah.php">Etah</a>
                <a href="etawa.php">Etawah</a>
                <a href="faizabad.php">Faizabad</a>
                <a href="farrukkhabad.php">Farrukhabad</a>
                <a href="fatehpur.php">Fatehpur</a>
                <a href="firozabad.php">Firozabad</a>
                <a href="GB_nagar.php">Gautam Buddha Nagar</a>
                <a href="ghaziabad.php">Ghaziabad</a>
                <a href="ghazipur.php">Ghazipur</a>
                <a href="gonda.php">Gonda</a>
                <a href="gorakhpur.php">Gorakhpur</a>
                <a href="hamirpur.php">Hamirpur</a>
                <a href="hapur.php">Hapur</a>
                <a href="hardoi.php">Hardoi</a>
                <a href="hathras.php">Hathras</a>
                <a href="jalaun.php">Jalaun</a>
                <a href="jaunpur.php">Jaunpur</a>
                <a href="jhansi.php">Jhansi</a>
                <a href="kannauj.php">Kannauj</a>
                <a href="kanpur_dehat.php">Kanpur Dehat</a>
                <a href="kanpur_nagar.php">Kanpur Nagar</a>
                <a href="kasganj.php">Kashganj</a>
                <a href="kaushambi.php">Kaushambi</a>
                <a href="kushinagar.php">Kushinagar</a>
                <a href="lakhimpur.php">Lakhimpur</a>
                <a href="lalitput.php">Lalitpur</a>
                <a href="lucknow.php">Lucknow</a>
                <a href="maharajganj.php">Maharajganj</a>
                <a href="mahoba.php">Mahoba</a>
                <a href="mainpuri.php">Mainpuri</a>
                <a href="mathura.php">Mathura</a>
                <a href="mau.php">Mau</a>
                <a href="meerut.php">Meerut</a>
                <a href="mirzapur.php">Mirzapur</a>
                <a href="moradabad.php">Moradabad</a>
                <a href="muzaffarnagr.php">Muzaffarnagar</a>
                <a href="pilibhit.php">Pilibhit</a>
                <a href="pratapgarh.php">Pratapgarh</a>
                <a href="raebarely.php">RaeBareli</a>
                <a href="rampur.php">Rampur</a>
                <a href="shaharanpur.php">Saharanpur</a>
                <a href="sambhal.php">Sambhal</a>
                <a href="sant_kabir_nagar.php">Sant Kabir Nagar</a>
                <a href="shahajanpur.php">Shahjahanpur</a>
                <a href="shamli.php">Shamali</a>
                <a href="shravasti.php">Shravasti</a>
                <a href="siddharth_nagar.php">Siddharth Nagar</a>
                <a href="sitapur.php">Sitapur</a>
                <a href="sonbhadra.php">Sonbhadra</a>
                <a href="sultanpur.php">Sultanpur</a>
                <a href="unnao.php">Unnao</a>
                <a href="varansi.php">Varanasi</a>

            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
    </script>



    <!--flex box-->
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="agra.php">
                        <div class="card-first">
                            <img class="card-img-top img" src="image/agra-taj.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Agra</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="aligarh.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/aligarh.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Aligarh</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="allahabad.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/allahabad.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Allahabad</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="ambedkar_nagar.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/ambedkar_nagar.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n1">ambedkar nagar</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="amethi.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Amethi.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">amethi</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="amroha.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Amroha.JPG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">amroha</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="auraiya.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/auraiya.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">auraiya</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="azamgarh.php">
                        <div class="card">
                            <img class="card-img-top" src="image/azamgarh.png" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">azamgarh</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="baghpat.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/baghpat.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">baghpat</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="bahraich.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/bahraich.JPG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">bahraich</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="ballia.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/balia.JPG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">ballia</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="balrampur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/balrampur.JPG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">balrampur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="banda.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/banda.JPG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">banda</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="barabanki.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Barabanki.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Barabanki</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="bareily.php">
                        <div class="card">
                            <img class="card-img-top" src="image/Bareilly.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Bareilly</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="basti.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Basti.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Basti</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="bhadohi.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Bhadohi.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Bhadohi</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="bijnor.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Bijnor.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Bijnor</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="budaun.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Budaun.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Budaun</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="bulandshahar.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Bulandshahr.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n11">Bulandshahr</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="chandouli.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/chandouli_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Chandauli</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="chitrakoot.php">
                        <div class="card">
                            <img class="card-img-top" src="image/chitrakoot_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Chitrakoot</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="deoria.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/deoria_img.webp" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Deoria</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="etah.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/etah_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Etah</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="etawa.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/etawa_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Etawah</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="faizabad.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/etawa_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Faizabad</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="farrukkhabad.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/farrukkhabad_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n12">Farrukhabad</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="fatehpur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/fatehpur_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Fatehpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="firozabad.php">
                        <div class="card">
                            <img class="card-img-top" src="image/firozabad_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Firozabad</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="GB_nagar.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/gb%20nagar_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n2">Gautam Buddha<br>Nagar</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="ghaziabad.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/gaziabad_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Ghaziabad</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="ghazipur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/gazipur_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Ghazipur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="gonda.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/gonda_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Gonda</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="gorakhpur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Gorakhpur_img.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Gorakhpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="hamirpur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Hamirpur.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Hamirpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="hapur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Hapur.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Hapur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="hardoi.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Hardoi.png" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Hardoi</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="hathras.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Hathras.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Hathras</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="jalaun.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Jalaun.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Jalaun</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="jaunpur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Jaunpur.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Jaunpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="jhansi.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Jhansi.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Jhansi</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="kannauj.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Kannaunj.png" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Kannauj</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="kanpur_dehat.php">
                        <div class="card">
                            <img class="card-img-top" src="image/Kanpur%20Dehat.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n3">Kanpur Dehat</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="kanpur_nagar.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Kanpur%20Nagar.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n4">Kanpur Nagar</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="kasganj.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Kasganj.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Kasganj</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid-container lastitemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="kaushambi.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Kaushambhi.png" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Kaushambi</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="kushinagar.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Khusinagar.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Kushinagar</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="lakhimpur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Lakhimpur%20Kheri.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Lakhimpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="lalitput.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/Lalitpur.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Lalitpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="lucknow.php">
                        <div class="card">
                            <img class="card-img-top" src="image/Lucknow.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Lucknow</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">
                <div class="card-deck">
                    <a href="maharajganj.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/mahrajganj.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n5">Maharajganj</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="mahoba.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/mahoba.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Mahoba</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="mainpuri.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/mainpuri1.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Mainpuri</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="mathura.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/mathura.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Mathura</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="mau.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/mau1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Mau</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">

                <div class="card-deck">
                    <a href="meerut.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/meerut.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Meerut</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="mirzapur.php">
                        <div class="card">
                            <img class="card-img-top" src="image/mirzapur1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Mirzapur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="moradabad.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/moradabad1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Moradabad</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="muzaffarnagr.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/muzaffarnagar1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n6">Muzaffarnagar</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="pilibhit.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/pilibhit1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Pilibhit</h2>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>


    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">

                <div class="card-deck">
                    <a href="pratapgarh.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/pratapgarh.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Pratapgarh</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="raebarely.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/raebarele1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">RaeBareli</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="rampur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/rampur.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Rampur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="shaharanpur.php">
                        <div class="card">
                            <img class="card-img-top" src="image/sharanpur1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n7">Saharanpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="sambhal.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/sambhal1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Sambhal</h2>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="fluid-container itemscontainer">
        <div class="col-sm-12">
            <div class="row">


                <div class="card-deck">
                    <a href="sant_kabir_nagar.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/sant%20kabir.PNG" alt="Card image cap">
                            <div class="card-block ">
                                <h2 class="card-title n8">Sant Kabir Nagar</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="shahajanpur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/shajhanpur.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n9">Shahjahanpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="shamli.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/shamli1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Shamali</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="shravasti.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/shravasti.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Shravasti</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="siddharth_nagar.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/siddarthngr.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title n10">Siddharth Nagar</h2>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="fluid-container lastitemscontainer">
        <div class="col-sm-12">
            <div class="row">

                <div class="card-deck">
                    <a href="sitapur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/sitapur1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Sitapur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="sonbhadra.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/sonbhadra.JPG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Sonbhadra</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="sultanpur.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/sultanpur1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Sultanpur</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="unnao.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/unnao1.PNG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Unnao</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-deck">
                    <a href="varansi.php">
                        <div class="card-first">
                            <img class="card-img-top" src="image/varanasi1.JPG" alt="Card image cap">
                            <div class="card-block">
                                <h2 class="card-title">Varanasi</h2>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>


    <footer>
        <div class="fluid-container f1">
            <div class="container-fluid ">
                <h1 class="infomationtag"><u>information</u></h1>
                <div class="row ourservicesrow">
                    <div class="col-sm-2 ourservices">
                        <h1 class="ourservicesheader"><b>our services :</b></h1>
                    </div>
                    <div class="col-sm-10 aboutmeparagraph">
                        <p class="ourservicesparagraph">Our website aims to provide the best and easy way of finding available beds in hospitals in your location. Also , doctor details , location of hospitals and extra details will be provided via sanjeevni website. By this website we make sure we provide you the details which are legal , eligible and important for our users. Via this website all important and required details can be accessed in one tap .Our services are reliable and trustworthy.</p>
                    </div>
                </div>
                <pre class="copyrightline"><i class="fa fa-copyright" aria-hidden="true"></i>copyright to sanjeevni.com,all rights reserved.</pre>
            </div>
        </div>
    </footer>
</body>

</html>
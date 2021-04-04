<!DOCTYPE html>
<html lang="en" style="position: relative;min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>News</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Footer-Clean.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/Header-Blue.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/ClientCSS/styles.css') }}>
</head>

<body style="margin: 0 0 169px;">
    <header class="header-blue" style="padding-bottom: 0px;">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container-fluid"><a class="navbar-brand" href="/barangay/home" style="font-size: 45px;font-family: bodoni mt;"><img src="{{Storage::url(session("layout.image"))  }}" style="resize: both;width: 80px;margin-right: 30px;">University of Rizal System</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group mb-0"><label for="search-field"></label></div>
                    </form>
                    <p class="navbar-text" style="margin-top: 15px;margin-right: 11px;color: white;font-size: 20px;"><i class="fa fa-user" style="margin-right: 5px;"></i>{{session("resident.firstname")}}</p><span class="navbar-text"> </span>
                    <div class="dropdown" style="font-size: 20px;"><a class="dropdown-toggle" aria-expanded="false" data-toggle="dropdown" href="#" style="color: white;"><i class="fa fa-cog" style="margin-right: 5px;"></i>Settings</a>
                        <div class="dropdown-menu dropleft" style="resize: both;width: 80px;padding: 0px;"><a class="dropdown-item" href="/barangay/accountsetting" style="resize: both;width: 80px;padding: 5px;font-size: 75%;">Account Settings</a>
                            <a class="dropdown-item" href="/barangay/logout" style="resize: both;width: 80px;padding: 5px;font-size: 75%;">Log-out</a>
                        </div>
                    </div>
                    <div class="dropdown-menu dropleft" style="resize: both;width: 80px;padding: 0px;"><a class="dropdown-item" href="#" style="resize: both;width: 80px;padding: 5px;font-size: 75%;">Account Settingt</a></div>
                </div>
                </div>
            </div>
        </nav>
    </header>
    <ul class="nav nav-tabs" style="margin-left: 20px;">
        <li class="nav-item"><a class="nav-link" href="/barangay/home"><i class="fa fa-home" style="margin-right: 5px;"></i>Home</a></li>
        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link " aria-expanded="false" data-toggle="dropdown" href="#"><i class="fa fa-server" style="margin-right: 5px;"></i>Services</a>
            <div class="dropdown-menu"><a class="dropdown-item" href="/barangay/schedule">Schedule</a><a class="dropdown-item" href="/barangay/blotter/{{ session("resident.id") }}">Blotter</a><a class="dropdown-item" href="/barangay/certificate">Certificates</a></div>
        </li>
        <li class="nav-item"><a class="nav-link active" href="/barangay/news">News</a></li>
        <li class="nav-item"><a class="nav-link" href="/barangay/info">Info</a></li>
    </ul>
    <div>
        <div class="jumbotron" style="background-color: rgba(255,255,255,0);padding-top: 30px;padding-bottom: 10px;">
            <div class="container" style="padding-bottom: 20px;background-color: #bcbec1;">
                <div class="row" style="background-color: rgba(255,255,255,0);">
                    <div class="col-md-6" style="background-color: rgba(255,255,255,0);padding: 20px;"><img src="{{ URL::to('images/Tempclipboard-image.png') }}" style="resize: both;width: 500px;height: 400px;"></div>
                    <div class="col-md-6" style="background-color: rgba(255,255,255,0);">
                        <h4>This is a title</h4>
                        <p style="margin: 42px;"><br>&nbsp; &nbsp; &nbsp; &nbsp; According to a TTS /AAS statement, its team members who have been “operating under the shadows of top-secrecy for decades” believe that “there is sufficient credible evidence of UAP that proves exotic technologies exist that could revolutionize the human experience.”&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This could represent the beginning of a trend towards a new openness on the part of the U.S. government. These people know more than any of us, and they will be releasing important data on UAP in the future. As an investgative reporter with a long standing interest in this subject, who has worked with a few Academy team members in the past, I was shown some of this data at a meeting with them on Oct 4.<br><br></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="jumbotron" style="background-color: rgba(255,255,255,0);">
            <div class="container" style="padding-bottom: 20px;background-color: #bcbec1;">
                <div class="row" style="background-color: rgba(255,255,255,0);">
                    <div class="col-md-6" style="background-color: rgba(255,255,255,0);">
                        <h4>Ravens Accused Of Stealing Groceries From Alaska Costco Customers<br></h4>
                        <p style="margin: 42px;"><br>&nbsp; &nbsp; &nbsp; &nbsp; According to a TTS /AAS statement, its team members who have been “operating under the shadows of top-secrecy for decades” believe that “there is sufficient credible evidence of UAP that proves exotic technologies exist that could revolutionize the human experience.”&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; This could represent the beginning of a trend towards a new openness on the part of the U.S. government. These people know more than any of us, and they will be releasing important data on UAP in the future. As an investgative reporter with a long standing interest in this subject, who has worked with a few Academy team members in the past, I was shown some of this data at a meeting with them on Oct 4.<br><br></p>
                    </div>
                    <div class="col-md-6" style="background-color: rgba(255,255,255,0);padding: 20px;"><img src="{{ URL::to('images/Tempclipboard-image-1.png') }}" style="resize: both;width: 500px;height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-clean" style="background-color: gray;position: absolute;left: 0;bottom: 0;height: 174px;width: 100%;overflow: hidden;margin-top: 30px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Legacy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>Careers</h3>
                    <ul>
                        <li><a href="#">Job openings</a></li>
                        <li><a href="#">Employee success</a></li>
                        <li><a href="#">Benefits</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                    <p class="copyright">Company Name © 2017</p>
                </div>
            </div>
        </div>
        <div style="margin: 30px;margin-bottom: 80px;">
            <div class="jumbotron" style="margin-bottom: 175px;">
                <div class="container bg-dark" style="margin: 0 auto;color: white;padding: 15px;border-radius: 25px;margin-bottom: 10px;">
                    <div class="row justify-content-center">
                        <div class="col col-5">
                            <div>
                                <div class="row">
                                    <div class="col col-5">
                                        <h4 style="text-align: right;font-family: times new roman;">Name:</h4>
                                    </div>
                                    <div class="col">
                                        <h4 style="text-align: left;font-family: times new roman;">Salen, Arch Angel A.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-5">
                            <div>
                                <div class="row">
                                    <div class="col col-2">
                                        <h4 style="text-align: right;font-family: times new roman;">Price:</h4>
                                    </div>
                                    <div class="col col-5">
                                        <h4 style="text-align: left;font-family: times new roman;">Php 50</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col col-5">
                            <div>
                                <div class="row">
                                    <div class="col col-5">
                                        <h4 style="text-align: right;font-family: times new roman;">CertificateType:</h4>
                                    </div>
                                    <div class="col">
                                        <h4 style="text-align: left;font-family: times new roman;">Barangay Clearance</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-5">
                            <div>
                                <div class="row">
                                    <div class="col col-2">
                                        <h4 style="text-align: right;font-family: times new roman;">Paid:</h4>
                                    </div>
                                    <div class="col col-5">
                                        <h4 style="text-align: left;font-family: times new roman;">no</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>

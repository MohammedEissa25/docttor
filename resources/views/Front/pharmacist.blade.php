<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor Tec</title>
    <!-- Favicon -->
    <link href="{{asset('assets/img/favicon.ico')}}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,300&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/lib/twentytwenty/twentytwenty.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/fontAssume.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- AOS Libraiy -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <!-- Doctor Css -->
    <link rel="stylesheet" href="{{asset('assets/css/doctor.css')}}" />
    <!--chat Css  -->
    <link rel="stylesheet" href="{{asset('assets/css/chat.css')}}">
</head>

<body>
    <!-- Start message-box -->
    <div class="message-box">
        <div class="toggle-message">
            <span class="navication"></span>
            <i class="fa-solid fa-envelope message fa-bounce"></i>
        </div>
        <div class="message-container">
            <div class="option-box">
                <button class="active" class="messBtn" data-bs-toggle="modal" data-bs-target="#chatModel" id="messBtn">
                    <div class="img">
                        <img src="{{asset('assets/img/team-1.jpg')}}" alt="">
                        <span class="nonRead">2</span>
                    </div>
                    <span class="name">دكتور احمد</span>
                </button>
            </div>
            <div class="option-box">
                <button class="active" class="messBtn" data-bs-toggle="modal" data-bs-target="#chatModel" id="messBtn1">
                    <div class="img">
                        <img src="{{asset('assets/img/team-1.jpg')}}" alt="">
                    </div>
                    <span class="name">دكتور احمد</span>
                </button>
            </div>
            <div class="option-box">
                <button class="active" class="messBtn" data-bs-toggle="modal" data-bs-target="#chatModel" id="messBtn2">
                    <div class="img">
                        <img src="{{asset('assets/img/team-1.jpg')}}" alt="">
                    </div>
                    <span class="name">دكتور احمد</span>
                </button>
            </div>
        </div>
    </div>
    <!-- End message-box -->

    <!--Start Chat   -->
    <div class="modal" id="chatModel">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-body">
                  <div class="chat">
                    <div class="container">
                        <div class="message-header">
                            <div class="message-header-img">
                                <img src="{{asset('assets/img/team-3.jpg')}}" alt="">
                            </div>
                            <div class="active">
                                <h4>دكتور احمد </h4>
                            </div>
                        </div>
                        <div class="chat-page">
                            <div class="message-inbox">
                                <div class="chats">
                                    <div class="message-page" id="messagePage">
                                        <div class="received-chats">
                                            <div class="received-chats-img">
                                                <img src="{{asset('assets/img/team-3.jpg')}}" alt="">
                                            </div>
                                            <div class="resceived-message">
                                                <div class="resceived-message-inbox">
                                                    <p>السلام عليكم , هذه الرسالة من د / أحمد</p>
                                                    <span class="time">11:1 PM </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="outgoing-chats">
                                            <div class="outgoing-chat-message">
                                                <p> وعليكم السلام , اهلا بحضرتك </p>
                                                <span class="time">11:3 PM </span>
                                            </div>
                                            <div class="outgoing-chats-img">
                                                <img src="{{asset('assets/img/team-2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="received-chats">
                                            <div class="received-chats-img">
                                                <img src="{{asset('assets/img/team-3.jpg')}}" alt="">
                                            </div>
                                            <div class="resceived-message">
                                                <div class="resceived-message-inbox">
                                                    <p>ما افضل علاج للصداع الحاد ؟ </p>
                                                    <span class="time">11:4 PM </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="outgoing-chats">
                                            <div class="outgoing-chat-message">
                                                <p> panadol extra </p>
                                                <span class="time">11:5 PM </span>
                                            </div>
                                            <div class="outgoing-chats-img">
                                                <img src="{{asset('assets/img/team-2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="received-chats">
                                            <div class="received-chats-img">
                                                <img src="{{asset('assets/img/team-3.jpg')}}" alt="">
                                            </div>
                                            <div class="resceived-message">
                                                <div class="resceived-message-inbox">
                                                    <p> شكرا لك يا دكتور</p>
                                                    <span class="time">11:6 PM </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="outgoing-chats">
                                            <div class="outgoing-chat-message">
                                                <p> العفو يا دكتور أحمد </p>
                                                <span class="time">11:7 PM </span>
                                            </div>
                                            <div class="outgoing-chats-img">
                                                <img src="{{asset('assets/img/team-2.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="message-bottom">
                            <div class="input-group">
                                <input type="text" id="input" class="form-control" placeholder=" اكتب رسالة... ">
                                <div class="input-group-append">
                                    <span id="send" class="input-group-text"><i class="fa fa-paper-plane"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Chat -->
    
    <!-- Start Header -->
    <header>
        <div class="container">
            <img class="logo" src="{{asset('assets/img/logo.jpg')}}" alt="">
        </div>
    </header>
    <!-- End Header -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center pt-5">
                    <h1 class="display-3 text-white " data-aos="zoom-in">
                        صيدلى
                    </h1>
                    <a href="../index.html" class="h4 text-white" data-aos="zoom-in-right">الرئسية</a>
                    <i class="far fa-circle text-white px-2" data-aos="zoom-in-down"></i>
                    <a href="#card-container" class="h4 text-white" data-aos="zoom-in-right">صيدلى</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Start Doctor Section -->
    <div class="container-fluid py-5  p-relative  ">
        <div class="container">
            <div class="row g-5 p-relative">
                <div class="section-title mb-4">
                    <h2 class="position-relative d-inline-block text-primary text-uppercase">
                        صيدلى :
                    </h2>
                    <h1 class="display-5 mb-0"> بيانات الصيدلى</h1>
                </div>
                <div class="col-lg-12" id="card-container" data-aos="zoom-out-down">
                    <div class="card box ">
                        <img class="img-doc" src="{{asset('storage/' .(Auth::guard('pharmacist')->user()->image))}}"  alt="Card image cap">
                        <div class="info">
                            <span class="name">دكتور /</span>
                            <span> {{Auth::guard('pharmacist')->user()->name}}</span>
                            <br>
                            <span class="name">تاريخ الميلاد /</span>
                            <span> {{Auth::guard('pharmacist')->user()->birthDate}} </span>
                            <br>
                            <span class="name"> رقم الموبايل /</span>
                            <span> {{Auth::guard('pharmacist')->user()->mobileNumber}} </span>
                            <br>
                            <span class="name"> البريد الالكتروني /</span>
                            <span> {{Auth::guard('pharmacist')->user()->email}} </span>
                            <br>
                        </div>
                    </div>
                </div>

                


            </div>
        </div>

        <footer class="footer-page " style="margin-top: 120px; margin-bottom: -500px;">
            <div class="row  " id="footer">
                <div class="col-md-12 text-center">
                    <p class="copyright-text">
                        جميع الحقوق محفوظة &copy; دكتور تك ٢٠٢٤
                    </p>
                </div>
            </div>
        </footer>




        <!-- End Pharmacist Section -->


        <!-- To Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/lib/wow/wow.min.j')}}s"></script>
        <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
        <script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
        <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <script src="{{asset('assets/lib/twentytwenty/jquery.event.move.js')}}"></script>
        <script src="{{asset('assets/lib/twentytwenty/jquery.twentytwenty.js')}}"></script>
        <!-- AOS JavaScript -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- Template Javascript -->
        <script src="{{asset('assets/js/main.js')}}"></script>

        <!-- Script Chat Js -->
        <script src="{{asset('assets/js/chat.js')}}"></script>
        <!-- Script Of Pharamacist Page -->
        <script>
            //--------------------------------------------------------------------
         
            //----------------------AOS-----------------------
            AOS.init({ duration: 1500 });
        </script>

</body>

</html>
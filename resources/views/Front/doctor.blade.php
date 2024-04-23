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
    <!--    Chat Css -->
    <link rel="stylesheet" href="{{asset('assets/css/chat.css')}}">
    <!-- Doctor Css -->
    <link rel="stylesheet" href="{{asset('assets/css/doctor.css')}}" />
</head>

<body>
    <!-- Start Sitting-box -->
    <div class="sittings-box">
        <div class="toggle-settings">
            <span class="navication"></span>
            <i class="fa-solid fa-bell ters fa-shake"></i>
        </div>
        @forelse ($patients as $value)
        <div class="sittings-container">
            <div class="option-box">
                <h4>موعد {{ $loop->iteration }}</h4>
                <div class="d-flex align-center align-items-center justify-content-between active">
                    <span class="name"> {{ $value->name }}</span>
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modal" id="btn">دخول</button>
                </div>
            </div>
        </div>
            @empty
                <h2>لا يوجد بيانات لعرضها</h2>
             @endforelse
    </div>
    <!-- End Sitting-box -->

    <!-- Start Model code Patent -->
    <div class="modal" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-2">
                    <h4 class="modal-title">كود المريض</h4>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="mb-5 passwordDiv">
                            <label class="form-label" for="password" style="font-size: 18px; color: #091e3e;"> كود
                                المريض
                                <span class="text-danger">*</span></label>
                            <div class="d-flex align-center justify-content-between align-content-center p-relative">
                                <input class="form-control" type="password" name="userpass" id="password" required />
                                <i class="fa-solid fa-eye icon" id="eye"></i>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <button class="btn btn-primary text-white" type="submit" id="submit">دخول</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Model Code Patent -->

       <!-- Start message-box -->
    {{-- <div class="message-box">
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
                    <span class="name"> وليد الطرشوبى</span>
                </button>
            </div>
            <div class="option-box">
                <button class="active" class="messBtn" data-bs-toggle="modal" data-bs-target="#chatModel" id="messBtn1">
                    <div class="img">
                        <img src="{{asset('assets/img/team-1.jpg')}}" alt="">
                    </div>
                    <span class="name">وليد الطرشوبى</span>
                </button>
            </div>
            <div class="option-box">
                <button class="active" class="messBtn" data-bs-toggle="modal" data-bs-target="#chatModel" id="messBtn2">
                    <div class="img">
                        <img src="{{asset('assets/img/team-1.jpg')}}" alt="">
                    </div>
                    <span class="name">وليد الطرشوبى</span>
                </button>
            </div>
        </div>
    </div> --}}
    <!-- End message-box -->

    <!--Start Chat   -->
    {{-- <div class="modal" id="chatModel">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                  <div class="chat">
                    <div class="container">
                        <div class="message-header">
                            <div class="message-header-img">
                                <img src="{{asset('assets/img/team-1.jpg')}}" alt="">
                            </div>
                            <div class="active">
                                <h4>وليد الطرشوبى </h4>
                            </div>
                        </div>
                        <div class="chat-page">
                            <div class="message-inbox">
                                <div class="chats">
                                    <div class="message-page" id="messagePage">
                                        <div class="outgoing-chats">
                                            <div class="outgoing-chat-message">
                                                <p>السلام عليكم , هذه الرسالة من د / أحمد</p>
                                                <span class="time">11:1 PM </span>
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
                                                    <p> وعليكم السلام , اهلا بحضرتك </p>
                                                    <span class="time">11:3 PM </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="outgoing-chats">
                                            <div class="outgoing-chat-message">
                                                <p>ما افضل علاج للصداع الحاد ؟ </p>
                                                <span class="time">11:4 PM </span>
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
                                                    <p> panadol extra </p>
                                                    <span class="time">11:5 PM </span>
                                                </div>
                                            </div>
                                        </div>

                                           <div class="outgoing-chats">
                                            <div class="outgoing-chat-message">
                                                <p> شكرا لك يا دكتور</p>
                                                <span class="time">11:6 PM </span>
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
                                                    <p> العفو يا دكتور أحمد </p>
                                                    <span class="time">11:7 PM </span>
                                                </div>
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
    </div> --}}
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
                        دكتور
                    </h1>
                    <a href="../index.html" class="h4 text-white" data-aos="zoom-in-right">الرئسية</a>
                    <i class="far fa-circle text-white px-2" data-aos="zoom-in-down"></i>
                    <a href="#card-container" class="h4 text-white" data-aos="zoom-in-right">دكتور</a>
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
                    <h2 class="position-relative d-inline-block text-primary text-uppercase" >
                        دكتور :
                    </h2>
                    <h1 class="display-5 mb-0" > بيانات الدكتور</h1>
                </div>
                <div class="col-lg-12" id="card-container" >
                    <div class="box wow zoomIn card text-white bg-info mb-3 text-center">
                    <div class="card" >
                        <div class="card-body bg-info" style="width: 20rem;">
                            <span class="name">دكتور /</span>
                            <span> {{Auth::guard('doctor')->user()->name}}</span>
                            <br>
                            <span class="name">تاريخ الميلاد /</span>
                            <span> {{Auth::guard('doctor')->user()->birthDate}} </span>
                            <br>
                            <span class="name"> رقم الموبايل /</span>
                            <span> {{Auth::guard('doctor')->user()->mobileNumber}} </span>
                            <br>
                            <span class="name"> البريد الالكتروني /</span>
                            <span> {{Auth::guard('doctor')->user()->email}} </span>
                            <br>
                        </div>
                    </div>
                </div>
            </div>


                {{-- <div class="col-lg-12" id="card-container" data-aos="zoom-out-down">
                    <div class=" text-white bg-info mb-3 text-center">
                        <div class="card" >
                        <div class="card-body" style="width: 20rem;">
                            <span class="name">دكتور /</span>
                            <span> {{Auth::guard('doctor')->user()->name}}</span>
                            <br>
                            <span class="name">تاريخ الميلاد /</span>
                            <span> {{Auth::guard('doctor')->user()->birthDate}} </span>
                            <br>
                            <span class="name"> رقم الموبايل /</span>
                            <span> {{Auth::guard('doctor')->user()->mobileNumber}} </span>
                            <br>
                            <span class="name"> البريد الالكتروني /</span>
                            <span> {{Auth::guard('doctor')->user()->email}} </span>
                            <br>
                        </div>
                    </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <footer class="footer-page">
        <div class="row  " id="footer">
            <div class="col-md-12 text-center">
                <p class="copyright-text">
                    جميع الحقوق محفوظة &copy; دكتور تك ٢٠٢٤
                </p>
            </div>
        </div>
    </footer>



    <!-- End Doctor Section -->


    <!-- To Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script>
        //--------------------------------------------------------------------
        //Card Doctor
        let carddoctor = document.getElementById("card-container");

        fetch("  http://localhost:3000/doctor?id=1")
            .then((res) => res.json())
            .then((json) => {
                json.map((data) => {
                    console.log(data.id);
                    carddoctor.append(
                        card_fun(
                            data.id,
                            data.name,
                            data.info,
                            data.title,
                            data.profile,
                            data.phone,
                            data.email,
                            data.DateOfBirth
                        )
                    );
                });
            });
        function card_fun(
            id,
            name,
            info,
            title,
            profile,
            phone,
            email,
            DateOfBirth
        ) {
            let card = document.createElement("div");
            card.innerHTML = `
        <div class="card box " >
                        <img class="img-doc" src="${profile}"" alt="Card image cap">
                      <div class="info">
                        <span class="name" >دكتور /</span>
                        <span > ${name} </span>
                        <br>
                         <span class="name">التخصص / </span>
                        <span > ${info} </span>
                        <br>
                        <span class="name" >تاريخ الميلاد /</span>
                        <span > ${DateOfBirth} </span>
                        <br>
                        <span class="name" > رقم الموبايل /</span>
                        <span > ${phone} </span>
                        <br>
                        <span class="name" > البريد الالكتروني /</span>
                        <span > ${email} </span>
                        <br>
                       </div>
    `;
            return card;
        }
        //----------------------------------------------------------------------------
        //Toggle Spin On Icon
        document.querySelector(".toggle-settings .ters").onclick =
            function () {
                //Toggle Class fa-spin For Rotation On Self
                this.classList.toggle("fa-shake");
                //  Toggle Class Open On Main Setting-box
                document
                    .querySelector(".sittings-box")
                    .classList.toggle("open");
                //Toggle Naication
                document
                    .querySelector(".navication")
                    .classList.toggle("hide");
            };
        //-----------------------------------------------------------------------
        // Toggle PassWord
        let inputPassWord = document.getElementById("password");
        let icon = document.getElementById("eye");
        icon.onclick = function () {
            if (inputPassWord.type == "password") {
                inputPassWord.type = "text";
                icon.className = "fa-solid fa-eye-slash icon";
            } else {
                inputPassWord.type = "password";
                icon.className = "fa-solid fa-eye icon";
            }
        };
        //--------------------------------------------------------------------------
        //Popup Alert Box
        let popup = document.getElementById("popup");
        //Open Popup Function
        function openPopup() {
            popup.classList.add("opon-popup");
        }
        //Close Popup Function
        function closePopup() {
            popup.classList.remove("opon-popup");
        }
        //---------------------------------------------------------------------------

        //----------------------------------------------------------------------------
        //Check Modal Code And Open Popup Message
        let submit = document.getElementById("submit");
        submit.onclick = function () {
            if (inputPassWord.value !== "") {
                window.location.href = "/Profile/profile.html";
            } else {
                openPopup();
            }
        };
        //------------------------------------------------------------------------------
        //On Click IN Button Close SettingBox
        document.getElementById("btn").onclick = function () {
            //Toggle Class fa-spin For Rotation On Self
            document.querySelector(".toggle-settings .ters").classList.toggle("fa-shake");
            //  Toggle Class Open On Main Setting-box
            document.querySelector(".sittings-box").classList.toggle("open");
            //Toggle Naication
            document.querySelector(".navication").classList.toggle("hide");
        }
        document.getElementById("btntwo").onclick = function () {
            //Toggle Class fa-spin For Rotation On Self
            document.querySelector(".toggle-settings .ters").classList.toggle("fa-shake");
            //  Toggle Class Open On Main Setting-box
            document.querySelector(".sittings-box").classList.toggle("open");
            //Toggle Naication
            document.querySelector(".navication").classList.toggle("hide");
        }
        document.getElementById("btnthree").onclick = function () {
            //Toggle Class fa-spin For Rotation On Self
            document.querySelector(".toggle-settings .ters").classList.toggle("fa-shake");
            //  Toggle Class Open On Main Setting-box
            document.querySelector(".sittings-box").classList.toggle("open");
            //Toggle Naication
            document.querySelector(".navication").classList.toggle("hide");
        }
        document.getElementById("btnfour").onclick = function () {
            //Toggle Class fa-spin For Rotation On Self
            document.querySelector(".toggle-settings .ters").classList.toggle("fa-shake");
            //  Toggle Class Open On Main Setting-box
            document.querySelector(".sittings-box").classList.toggle("open");
            //Toggle Naication
            document.querySelector(".navication").classList.toggle("hide");
        }

        //----------------------AOS-----------------------
        AOS.init({ duration: 1500 });
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
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
    <!-- Chat Js -->
    <script src="{{asset('assets/js/chat.js')}}"></script>
    <!-- Script Of Doctor Page -->


</body>

</html>

@extends('Front.layouts')
@section('content')


    <!-- Start Header -->
    {{-- <header>
        <div class="container">
            <img class="logo" src="{{asset('assets/img/logo.jpg')}}" alt="">
        </div>
    </header> --}}
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
                <div class="col-lg-12" id="card-container" data-aos="zoom-out-down">
                    <div class="box wow zoomIn card text-white bg-info mb-3 text-center">
                    <div class="card" >
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body" style="width: 20rem;">
                          <h5 class="card-title">الاسم: {{ $doctor->name }}</h5>
                          <h6 class="card-title"> الرقم: {{ $doctor->mobileNumber }}</h6>
                          <h6 class="card-title"> السن: {{ $doctor->age }}</h6>
                          <h6 class="card-title"> :المدينة {{ $doctor->city }}</h6>
                          <h6 class="card-title"> المقاطعة: {{ $doctor->province }}</h6>
                          <h6 class="card-title"> التخصص: {{ $doctor->specialization }}</h6>

                          @if (auth()->user())
                          <a href="{{ route('doctor.booking',['doctor'=>$doctor->id]) }}" class="btn btn-primary m-1">احجز الان</a>
                            @else
                            <a href="{{route('login')}}" class="register"  target="_blank"><i class="fa-solid fa-caret-left"></i> تسجيل دخول </a>
                          @endif
                        </div>
                      </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Start Footer  -->
    <footer class="footer-page w-100">
        <div class="row" id="footer">
            <div class="col-md-12 text-center">
                <p class="copyright-text pb-3 text-white">
                    جميع الحقوق محفوظة &copy; دكتور تك ٢٠٢٤
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->
     <!-- To Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- Script Of Doctor Page -->
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

@stop

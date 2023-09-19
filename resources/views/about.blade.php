@extends("components.header")
@section("new")
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">

            <h2>About Us</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
    <br> <br>
    <div class="row">
        <div class="col-12">
            <div class="section-heading style-2">

                <h2>Problem Statement</h2>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-lg-9">
            <div class="ablums-text mb-70">
                <p>  Music and Video's are the most common source of entertainment today. <br>

                    SOUND Group wants to host a WEBSITE for Entertainment. Company is looking on hosting new and old Video's and Songs in both REGIONAL and ENGLISH language. <br>

                    WEBSITE should have proper menu structure and Music and Video should be arranged as per ALBUM, ARTIST, YEAR, GENRE, LANGUAGE etc. <br>

                    Users should have option of reviewing and rating the Music and Video's available. <br>

                    Home Page should have information about the site and a section for latest music and video with 5-5 listing in each. <br>

                   <b>Customer Specifications:</b>   <br>

                    Website will host information about songs and videos with images and description and “New” image/icon should flash along with the new additions to Music and Video's. <br>

                    The website will have three users/roles: <br>
                    1)	Administrator <br>
                    2)	USER <br> <br>

                    The Administrator should be able to do the following: <br>

                    a)	Add Music files with information.<br>
                    b)	Add Video files with information.<br>
                    c)	Create Categories viz. YEAR, ARTIST, ALBUM etc.<br>
                    d)	Delete Music files<br>
                    e)	Delete Video files.<br>
                    f)	Create/Manage Users/Logins<br>
                    g)	Manage information/details on the WEBSITE<br>

                    The USER should be able to do the following:<br>

                    a)	Register/Create Account [USERID should be unique].<br>
                    b)	Search for MUSIC/Video based on Name, ARTIST, YEAR, ALBUM etc.<br>
                    c)	ADD/Modify Reviews<br>
                    d)	ADD/Modify Ratings</p>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="section-heading style-2">

                <h2>Our Team</h2>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-12 ">



                <!-- Single Album -->
                <div class="single-album ">
                    {{-- <img src="img/artist/bilal saeed 9.jpg" alt=""> --}}
                    <div class="album-info">

                            <h5>Ariba Junejo</h5>

                    </div>
                </div>

                <!-- Single Album -->
                <div class="single-album">
                    {{-- <img src="img/artist/Asim Azhar 2.webp" alt=""> --}}
                    <div class="album-info">

                            <h5>Anusha Ladhani</h5>

                    </div>
                </div>

                <!-- Single Album -->
                <div class="single-album">
                    {{-- <img src="img/artist/falak shabir 2.jpg" alt=""> --}}
                    <div class="album-info">

                            <h5>Mohammed Aresh</h5>

                    </div>
                </div>

                <!-- Single Album -->
                <div class="single-album">
                    {{-- <img src="img/artist/Rahat Fateh Ali Khan 1.jpg" alt=""> --}}
                    <div class="album-info">

                            <h5>Ammad</h5>


                    </div>
                </div>

        </div>
    </div>







@endsection

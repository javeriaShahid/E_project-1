@extends("components.header")
@section("new")
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img-3 bg-overlay">
        <div class="bradcumbContent">
            <p>Songs</p>
            <h2>Rahat Fateh Ali Khan</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

<br><br>
     <!-- ##### Song Area Start ##### -->
     <div class="one-music-songs-area mb-70">
        <div class="container">
            <div class="row">

                <!-- Single Song Area -->
                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="public/img/artist/Rahat Fateh Ali Khan 8.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>Ehd-e-Wafa</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="public/audio/Ehd-e-Wafa OST  Rahat Fateh Ali Khan  (ISPR Official Song).mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <!-- Single Song Area -->
                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/artist/Asim Azhar 8.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>Dard Rukhta Nahi</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="public/audio/Dard Rukta Nahi OST _ Rahat Fateh Ali Khan _ Rock Version _ Official 4K Video.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <!-- Single Song Area -->
                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/artist/Asim Azhar 5.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>Koi Chand Rakh</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="public/audio/Koi Chand Rakh OST - Singer Rahat Fateh Ali Khan - Ayeza Khan - Pakistani Dramas OST.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <!-- Single Song Area -->
                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/artist/Asim Azhar 5.webp" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>Habibi</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio\Asim Azhar - Habibi (Official Video) _ New Song 2022.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Song Area End ##### -->
    @endsection

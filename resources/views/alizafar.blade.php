@extends("components.header")
@section("new")
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img-3 bg-overlay">
        <div class="bradcumbContent">
            <p>Songs</p>
            <h2>Ali Zafar</h2>
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
                            <img src="img/artist/Asim Azhar 7.webp" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>Ehd-e-Wafa</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio\Ehd-e-Wafa OST  Ali Zafar, Asim Azhar, Sahir Ali Bagga & Aima Baig - (ISPR Official Song).mp3">
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
                                <p>Chand Mahiya</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio\Asim Azhar - Chand Mahiya (Official Music Video).mp3">
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
                                <p>Dard</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio\Asim Azhar - Dard (Official Video) Durefishan Saleem _ Kunaal Vermaa.mp3">
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

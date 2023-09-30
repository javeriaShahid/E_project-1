@extends("components.header")
@section("new")
 <!-- ##### Breadcumb Area Start ##### -->
 <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
    <div class="bradcumbContent">
        <p>Year</p>
        <h2>2014</h2>
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
                            <img src="img/artist/Ali Zafar 2.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>Nakhriley</p>
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

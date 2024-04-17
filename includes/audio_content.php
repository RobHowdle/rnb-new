<section class="home-grid-section">
    <div class="res--140">
        <div class="inner-wrapper--1680">
            <div class="audio-container">
                <h1 class="blue-ds pb-1 text-center">Audio</h1>
                <p class="text-center">In the mood for some music? Try our custom music player!</p>
                <div class="audio-grid mt-2">
                    <div class="player">
                        <div class="controls">
                            <div class="buttons">
                                <img src="media/img/stop.png">
                                <img src="media/img/prev.png">
                                <img src="media/img/next.png">
                                <img src="media/img/play.png">
                            </div>
                        </div>
                        <div class="record-player">
                            <img src="media/img/record-player.png">
                        </div>
                    </div>

                    <div class="slider swiper audio-track-slider" style="margin-left: 0!important; margin-right: 0!important;">
                        <div class=" swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="media/img/album.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="media/img/album.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="media/img/album.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="media/img/album.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="media/img/album.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img src="media/img/album.jpg">
                            </div>
                        </div>
                        <div class="slider-buttons-wrapper">
                            <div class="swiper-button-prev">
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="swiper-button-next">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const audioSlider = new Swiper(".audio-track-slider", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        breakpoints: {
            576: {
                slidesPerView: 2,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            disableOnInteraction: true,
            pauseOnMouseHover: true,
        },
    });
</script>
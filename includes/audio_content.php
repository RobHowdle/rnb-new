<section class="home-grid-section">
    <div class="res--140">
        <div class="inner-wrapper--1680">
            <div class="audio-container">
                <h1 class="blue-ds pb-1 text-center">Audio</h1>
                <p class="text-center">In the mood for some music? Try our custom music player!</p>
                <div class="audio-grid mt-2">
                    <div class="player">
                        <div class="controls autoplay">
                            <div class="buttons">
                                <img src="media/img/stop.png" id="stopBtn">
                                <img src="media/img/prev.png" id="prevBtn">
                                <img src="media/img/next.png" id="nextBtn">
                                <img src="media/img/play.png" id="playBtn">
                            </div>
                        </div>
                        <audio id="audioPlayer"></audio>
                        <div class="record-player">
                            <img src="media/img/record-player.png">
                            <div class="overlay">
                                <img src="media/img/record.png">
                                <div class="viswrapper">
                                    <canvas id="visualiser"></canvas>
                                </div>
                            </div>
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

    // Audio Player
    const audioPlayer = document.getElementById("audioPlayer");
    const prevButton = document.getElementById("prevBtn");
    const playButton = document.getElementById("playBtn");
    const stopButton = document.getElementById("stopBtn");
    const nextButton = document.getElementById("nextBtn");

    const playlist = [
        'media/audio/All My Life.mp3',
        'media/audio/Back for More.mp3',
        'media/audio/Beware.mp3',
        'media/audio/Blues With A Feeling.mp3',
        'media/audio/Boogie Man.mp3',
        'media/audio/Break it Down.mp3',
        'media/audio/Bring It On Home To Me.mp3',
        'media/audio/Divin Duck.mp3',
        'media/audio/No Time for Jive.mp3',
        'media/audio/Resting In The Blues.mp3',
        'media/audio/Roxette.mp3',
        'media/audio/Shake Your Hips.mp3',
        'media/audio/Stop Breakin Down.mp3',
        'media/audio/Sugar Man.mp3',
        'media/audio/Sugar Ruh.mp3',
        'media/audio/Travellin Light.mp3',
        'media/audio/You Gave Me The Blues.mp3'
    ];

    let currentTrackIndex = 0;

    function playTrack() {
        audioPlayer.src = playlist[currentTrackIndex];
        audioPlayer.play();
        // updateTrackDisplay();
    }

    function updateTrackDisplay() {
        trackDisplay.textContent = playlist[currentTrackIndex];
    }

    playButton.addEventListener('click', () => {
        if (audioPlayer.paused) {
            playTrack();
        } else {
            audioPlayer.pause();
        }
    });

    nextButton.addEventListener('click', () => {
        currentTrackIndex = (currentTrackIndex + 1) % playlist.length;
        playTrack();
    });

    prevButton.addEventListener('click', () => {
        currentTrackIndex = (currentTrackIndex - 1) % playlist.length;
        playTrack();
    });

    stopButton.addEventListener('click', () => {
        audioPlayer.pause();
        audioPlayer.currentTime = 0;
    });
</script>
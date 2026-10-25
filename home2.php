<?php
$carouselSoundFiles = glob(__DIR__ . DIRECTORY_SEPARATOR . '10secsong' . DIRECTORY_SEPARATOR . '*.mp3');
if ($carouselSoundFiles === false) {
    throw new RuntimeException('Unable to read carousel audio files from the 10secsong folder.');
}
$carouselSoundSources = array_map(static function ($file) {
    return '10secsong/' . rawurlencode(basename($file));
}, $carouselSoundFiles);

ob_start();
?>

<main>
    <section class="mb-5" aria-label="StrumForge welcome carousel">
        <div id="homeCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="10000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Welcome"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Product management"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Order management"></button>
            </div>
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <div class="home-carousel-slide bg-primary text-white p-5">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-7">
                                <p class="text-uppercase fw-bold">Your music store workspace</p>
                                <h1 class="display-5 fw-bold">Welcome to StrumForge.</h1>
                                <p class="lead">A great store runs like a great band. Keep your products, people, and orders in harmony.</p>
                                <a href="products.php" class="btn btn-light btn-lg me-2 mb-2">Explore products <i class="bi bi-arrow-right ms-2"></i></a>
                                <a href="orders.php" class="btn btn-outline-light btn-lg mb-2">View orders</a>
                            </div>
                            <div class="col-lg-5 text-center">
                                <img src="StrumForge_logo.jpeg" class="img-fluid rounded" width="245" alt="StrumForge guitar logo">
                                <p class="mt-2 mb-0 fw-bold">MAKE SOME NOISE.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="home-carousel-slide bg-success text-white p-5">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-8">
                                <p class="text-uppercase fw-bold"><i class="bi bi-box-seam me-2"></i>Find your next favorite</p>
                                <h2 class="display-5 fw-bold">Keep your collection in tune.</h2>
                                <p class="lead">Stay on top of the instruments and gear that keep every performance going.</p>
                                <a href="products.php" class="btn btn-light btn-lg me-2 mb-2">Go to products <i class="bi bi-arrow-right ms-2"></i></a>
                                <button id="homeCarouselSoundToggle" type="button" class="btn btn-outline-light btn-lg mb-2" aria-pressed="true">
                                    <i class="bi bi-volume-up me-2" aria-hidden="true"></i><span>Mute sound</span>
                                </button>
                            </div>
                            <div class="col-lg-4 text-center">
                                <i class="bi bi-music-note-list display-1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="home-carousel-slide bg-dark text-white p-5">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-8">
                                <p class="text-uppercase fw-bold"><i class="bi bi-receipt me-2"></i>From first note to final sale</p>
                                <h2 class="display-5 fw-bold">Make every order a hit.</h2>
                                <p class="lead">Bring customer orders and invoice details together in one easy-to-reach place.</p>
                                <a href="orders.php" class="btn btn-light btn-lg">Manage orders <i class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                            <div class="col-lg-4 text-center">
                                <i class="bi bi-bag-heart display-1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev w-auto px-2" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev" aria-label="Previous slide">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next w-auto px-2" type="button" data-bs-target="#homeCarousel" data-bs-slide="next" aria-label="Next slide">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </section>
    <audio id="homeCarouselAudio" preload="none"></audio>

    <section aria-labelledby="workspace-heading">
        <div class="d-flex flex-wrap justify-content-between align-items-end gap-2 mb-3">
            <div>
                <p class="text-muted small fw-bold mb-1">PICK UP WHERE YOU LEFT OFF</p>
                <h2 id="workspace-heading" class="h3 fw-bold mb-0">Your workspace</h2>
            </div>
            <span class="text-muted small">Everything you need, one click away</span>
        </div>
        <div class="row g-3">
            <div class="col-sm-6 col-xl-3">
                <a href="products.php" class="card card-body h-100 text-decoration-none text-dark">
                    <span class="fs-3 text-primary"><i class="bi bi-music-note-beamed"></i></span>
                    <strong>Products</strong>
                    <span class="text-muted">Browse and manage your gear</span>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a href="orders.php" class="card card-body h-100 text-decoration-none text-dark">
                    <span class="fs-3 text-warning"><i class="bi bi-bag"></i></span>
                    <strong>Orders</strong>
                    <span class="text-muted">Keep sales moving smoothly</span>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a href="customers.php" class="card card-body h-100 text-decoration-none text-dark">
                    <span class="fs-3 text-success"><i class="bi bi-people"></i></span>
                    <strong>Customers</strong>
                    <span class="text-muted">Get to know your community</span>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a href="staffs.php" class="card card-body h-100 text-decoration-none text-dark">
                    <span class="fs-3 text-info"><i class="bi bi-person-badge"></i></span>
                    <strong>Staff</strong>
                    <span class="text-muted">Meet the team behind the sound</span>
                </a>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carousel = document.getElementById('homeCarousel');
        const audio = document.getElementById('homeCarouselAudio');
        const soundToggle = document.getElementById('homeCarouselSoundToggle');
        const soundSources = <?= json_encode($carouselSoundSources, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT) ?>;
        let soundEnabled = true;
        let stopTimer;
        let playbackId = 0;
        let previousSoundSource;

        function updateSoundToggle() {
            soundToggle.setAttribute('aria-pressed', String(soundEnabled));
            soundToggle.querySelector('i').className = soundEnabled
                ? 'bi bi-volume-up me-2'
                : 'bi bi-volume-mute me-2';
            soundToggle.querySelector('span').textContent = soundEnabled
                ? 'Mute sound'
                : 'Enable sound';
        }

        function stopSound() {
            playbackId++;
            window.clearTimeout(stopTimer);
            audio.pause();
            if (audio.currentSrc) {
                audio.currentTime = 0;
            }
        }

        function playRandomSound() {
            if (!soundEnabled) {
                return;
            }
            if (soundSources.length === 0) {
                console.error('No MP3 files were found in the 10secsong folder.');
                return;
            }

            stopSound();
            const currentPlaybackId = playbackId;
            const availableSources = soundSources.length > 1
                ? soundSources.filter(function (source) {
                    return source !== previousSoundSource;
                })
                : soundSources;
            const selectedSource = availableSources[Math.floor(Math.random() * availableSources.length)];
            previousSoundSource = selectedSource;
            audio.src = selectedSource;

            const playback = audio.play();
            if (playback) {
                playback.then(function () {
                    if (currentPlaybackId !== playbackId) {
                        audio.pause();
                        return;
                    }
                    stopTimer = window.setTimeout(stopSound, 10000);
                }).catch(function (error) {
                    if (error.name === 'NotAllowedError') {
                        soundEnabled = false;
                        updateSoundToggle();
                    } else {
                        console.error('Unable to play the carousel sound.', error);
                    }
                });
            }
        }

        carousel.addEventListener('slide.bs.carousel', stopSound);
        carousel.addEventListener('slid.bs.carousel', function (event) {
            if (event.relatedTarget.querySelector('#homeCarouselSoundToggle')) {
                playRandomSound();
            }
        });

        soundToggle.addEventListener('click', function () {
            soundEnabled = !soundEnabled;
            updateSoundToggle();
            if (soundEnabled) {
                playRandomSound();
            } else {
                stopSound();
            }
        });
    });
</script>

<style>
    .home-carousel-slide {
        display: flex;
        min-height: 25rem;
        align-items: center;
    }

    .home-carousel-slide .row {
        width: 100%;
    }

    @media (max-width: 991.98px) {
        .home-carousel-slide {
            min-height: 50rem;
        }
    }
</style>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
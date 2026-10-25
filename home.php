<?php
ob_start();
?>

<main class="home-page">
    <section class="home-hero mb-5" aria-label="StrumForge welcome carousel">
        <div id="homeCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6500">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Welcome"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Product management"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Order management"></button>
            </div>
            <div class="carousel-inner rounded-4">
                <div class="carousel-item active">
                    <div class="home-hero-panel home-hero-panel--welcome">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-7">
                                <span class="home-eyebrow"><i class="bi bi-soundwave me-2"></i>Your music store workspace</span>
                                <h1 class="display-5 fw-bold mt-3 mb-3">Welcome to <span>StrumForge.</span></h1>
                                <p class="lead mb-4">A great store runs like a great band. Keep your products, people, and orders in harmony.</p>
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="products.php" class="btn btn-light btn-lg fw-semibold">Explore products <i class="bi bi-arrow-right ms-2"></i></a>
                                    <a href="orders.php" class="btn btn-outline-light btn-lg">View orders</a>
                                </div>
                            </div>
                            <div class="col-lg-5 text-center">
                                <div class="home-logo-wrap">
                                    <img src="StrumForge_logo.jpeg" class="home-logo" alt="StrumForge guitar logo">
                                    <span class="home-logo-caption">MAKE SOME NOISE.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="home-hero-panel home-hero-panel--products">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-8">
                                <span class="home-eyebrow"><i class="bi bi-box-seam me-2"></i>Find your next favorite</span>
                                <h2 class="display-5 fw-bold mt-3 mb-3">Keep your collection in tune.</h2>
                                <p class="lead mb-4">Stay on top of the instruments and gear that keep every performance going.</p>
                                <a href="products.php" class="btn btn-light btn-lg fw-semibold">Go to products <i class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="home-feature-icon"><i class="bi bi-music-note-list"></i></div>
                                <div class="home-soundwave" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="home-hero-panel home-hero-panel--orders">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-8">
                                <span class="home-eyebrow"><i class="bi bi-receipt me-2"></i>From first note to final sale</span>
                                <h2 class="display-5 fw-bold mt-3 mb-3">Make every order a hit.</h2>
                                <p class="lead mb-4">Bring customer orders and invoice details together in one easy-to-reach place.</p>
                                <a href="orders.php" class="btn btn-light btn-lg fw-semibold">Manage orders <i class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div class="home-feature-icon"><i class="bi bi-bag-heart"></i></div>
                                <div class="home-orbit home-orbit--one" aria-hidden="true"></div>
                                <div class="home-orbit home-orbit--two" aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev" aria-label="Previous slide">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next" aria-label="Next slide">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </section>

    <section aria-labelledby="workspace-heading">
        <div class="d-flex flex-wrap justify-content-between align-items-end gap-2 mb-3">
            <div>
                <p class="home-section-label mb-1">PICK UP WHERE YOU LEFT OFF</p>
                <h2 id="workspace-heading" class="h3 fw-bold mb-0">Your workspace</h2>
            </div>
            <span class="text-muted small">Everything you need, one click away</span>
        </div>
        <div class="row g-3">
            <div class="col-sm-6 col-xl-3">
                <a href="products.php" class="home-shortcut">
                    <span class="home-shortcut-icon home-shortcut-icon--blue"><i class="bi bi-music-note-beamed"></i></span>
                    <span class="home-shortcut-copy"><strong>Products</strong><small>Browse and manage your gear</small></span>
                    <i class="bi bi-arrow-up-right home-shortcut-arrow"></i>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a href="orders.php" class="home-shortcut">
                    <span class="home-shortcut-icon home-shortcut-icon--orange"><i class="bi bi-bag"></i></span>
                    <span class="home-shortcut-copy"><strong>Orders</strong><small>Keep sales moving smoothly</small></span>
                    <i class="bi bi-arrow-up-right home-shortcut-arrow"></i>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a href="customers.php" class="home-shortcut">
                    <span class="home-shortcut-icon home-shortcut-icon--green"><i class="bi bi-people"></i></span>
                    <span class="home-shortcut-copy"><strong>Customers</strong><small>Get to know your community</small></span>
                    <i class="bi bi-arrow-up-right home-shortcut-arrow"></i>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a href="staffs.php" class="home-shortcut">
                    <span class="home-shortcut-icon home-shortcut-icon--purple"><i class="bi bi-person-badge"></i></span>
                    <span class="home-shortcut-copy"><strong>Staff</strong><small>Meet the team behind the sound</small></span>
                    <i class="bi bi-arrow-up-right home-shortcut-arrow"></i>
                </a>
            </div>
        </div>
    </section>
</main>

<style>
    .home-page {
        --home-ink: #18243a;
        --home-muted: #667085;
        color: var(--home-ink);
    }

    .home-hero-panel {
        position: relative;
        min-height: 390px;
        overflow: hidden;
        padding: clamp(2rem, 5vw, 4rem);
        color: #fff;
        background: #17223b;
    }

    .home-hero-panel::before,
    .home-hero-panel::after {
        position: absolute;
        content: "";
        border: 1px solid rgba(255, 255, 255, .12);
        border-radius: 50%;
        pointer-events: none;
    }

    .home-hero-panel::before {
        width: 410px;
        height: 410px;
        top: -230px;
        right: -85px;
    }

    .home-hero-panel::after {
        width: 310px;
        height: 310px;
        right: 9%;
        bottom: -235px;
    }

    .home-hero-panel--welcome { background: linear-gradient(120deg, #17223b 0%, #293f68 58%, #4c537e 100%); }
    .home-hero-panel--products { background: linear-gradient(120deg, #163c45 0%, #176b68 58%, #3a8c82 100%); }
    .home-hero-panel--orders { background: linear-gradient(120deg, #40284c 0%, #703d64 58%, #a15163 100%); }

    .home-hero-panel .row,
    .home-hero-panel .home-eyebrow,
    .home-hero-panel h1,
    .home-hero-panel h2,
    .home-hero-panel p,
    .home-hero-panel a,
    .home-hero-panel .home-logo-wrap,
    .home-hero-panel .home-feature-icon,
    .home-hero-panel .home-soundwave,
    .home-hero-panel .home-orbit {
        position: relative;
        z-index: 1;
    }

    .home-eyebrow {
        display: inline-flex;
        align-items: center;
        padding: .5rem .85rem;
        border: 1px solid rgba(255, 255, 255, .25);
        border-radius: 50rem;
        background: rgba(255, 255, 255, .1);
        color: rgba(255, 255, 255, .9);
        font-size: .78rem;
        font-weight: 700;
        letter-spacing: .09em;
        text-transform: uppercase;
    }

    .home-hero-panel h1 span { color: #ffca80; }
    .home-hero-panel .lead { max-width: 620px; color: rgba(255, 255, 255, .78); }

    .home-logo-wrap {
        display: inline-flex;
        width: min(100%, 245px);
        flex-direction: column;
        align-items: center;
        padding: 1rem 1rem .8rem;
        border-radius: 1.5rem;
        background: #fff;
        box-shadow: 0 24px 60px rgba(0, 0, 0, .25);
        transform: rotate(3deg);
    }

    .home-logo {
        display: block;
        width: 100%;
        aspect-ratio: 1;
        object-fit: contain;
        border-radius: 1rem;
    }

    .home-logo-caption {
        padding-top: .35rem;
        color: #26324a;
        font-size: .65rem;
        font-weight: 800;
        letter-spacing: .22em;
    }

    .home-feature-icon {
        display: grid;
        width: 180px;
        height: 180px;
        margin: 0 auto;
        place-items: center;
        border: 1px solid rgba(255, 255, 255, .25);
        border-radius: 50%;
        background: rgba(255, 255, 255, .12);
        box-shadow: 0 0 0 20px rgba(255, 255, 255, .04), 0 0 0 42px rgba(255, 255, 255, .03);
        color: #fff;
        font-size: 5rem;
    }

    .home-soundwave {
        display: flex;
        height: 42px;
        align-items: center;
        justify-content: center;
        gap: 6px;
        margin-top: 1.5rem;
    }

    .home-soundwave span {
        width: 5px;
        height: 15px;
        border-radius: 5px;
        background: rgba(255, 255, 255, .8);
        animation: home-wave 1s ease-in-out infinite alternate;
    }

    .home-soundwave span:nth-child(2n) { animation-delay: .2s; }
    .home-soundwave span:nth-child(3n) { animation-delay: .4s; }
    .home-soundwave span:nth-child(4n) { animation-delay: .6s; }

    .home-orbit {
        position: absolute !important;
        top: 50%;
        left: 50%;
        width: 255px;
        height: 255px;
        border: 1px solid rgba(255, 255, 255, .25);
        border-radius: 50%;
        transform: translate(-50%, -50%) rotate(-25deg);
    }

    .home-orbit--two {
        width: 310px;
        height: 310px;
        transform: translate(-50%, -50%) rotate(35deg);
    }

    .home-section-label {
        color: #6b7280;
        font-size: .72rem;
        font-weight: 800;
        letter-spacing: .12em;
    }

    .home-shortcut {
        display: flex;
        min-height: 104px;
        align-items: center;
        gap: .9rem;
        padding: 1rem;
        border: 1px solid #e8ebf0;
        border-radius: 1rem;
        background: #fff;
        color: var(--home-ink);
        text-decoration: none;
        transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
    }

    .home-shortcut:hover,
    .home-shortcut:focus-visible {
        transform: translateY(-3px);
        border-color: #cdd6e5;
        box-shadow: 0 12px 28px rgba(24, 36, 58, .08);
        color: var(--home-ink);
    }

    .home-shortcut-icon {
        display: grid;
        width: 48px;
        height: 48px;
        flex: 0 0 48px;
        place-items: center;
        border-radius: .9rem;
        font-size: 1.35rem;
    }

    .home-shortcut-icon--blue { background: #e9f0ff; color: #315fc2; }
    .home-shortcut-icon--orange { background: #fff0e5; color: #c56a25; }
    .home-shortcut-icon--green { background: #e5f5ed; color: #27845a; }
    .home-shortcut-icon--purple { background: #f0eafd; color: #7553b6; }

    .home-shortcut-copy {
        display: flex;
        min-width: 0;
        flex-direction: column;
        gap: .2rem;
    }

    .home-shortcut-copy strong { font-size: .95rem; }
    .home-shortcut-copy small { color: var(--home-muted); line-height: 1.35; }
    .home-shortcut-arrow { margin-left: auto; color: #98a2b3; }

    @keyframes home-wave {
        from { height: 10px; }
        to { height: 36px; }
    }

    @media (max-width: 575.98px) {
        .home-hero-panel { min-height: 500px; padding: 2rem 1.5rem 3.5rem; }
        .home-hero-panel .display-5 { font-size: 2.2rem; }
        .home-logo-wrap { width: 165px; }
        .home-hero-panel--products .home-feature-icon,
        .home-hero-panel--orders .home-feature-icon {
            width: 120px;
            height: 120px;
            font-size: 3.5rem;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .home-soundwave span { animation: none; }
        .home-shortcut { transition: none; }
    }
</style>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
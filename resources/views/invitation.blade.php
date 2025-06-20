<!DOCTYPE html>
<html lang="id" class="notranslate" translate="no">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="color-scheme" content="light only">
    <meta name="format-detection" content="telephone=no">
    <meta name="google" content="notranslate" />
    <title>Wedding - Forever Journey</title>
    <meta name="title" content="Wedding  - Forever Journey">
    <meta name="description"
        content="tema undangan warna pink flowers motion - Undangan Online: Undangan digital modern untuk pernikahan dan acara spesial lainnya. Gratis coba dulu, bayar belakangan!">
    <meta itemprop="image" content="https://satumomen.com/themes/forever-journey/forever-journey.webp">
    <meta property="og:type" content="website">
    <meta property="og:url" content="forever-journey.html">
    <meta property="og:title" content="Wedding  - Forever Journey">
    <meta property="og:description"
        content="tema undangan warna pink flowers motion - Undangan Online: Undangan digital modern untuk pernikahan dan acara spesial lainnya. Gratis coba dulu, bayar belakangan!">
    <meta property="og:image" content="https://satumomen.com/themes/forever-journey/forever-journey.webp">

    <link rel="preconnect" href="https:/fonts.googleapis.com/">
    <link rel="preconnect" href="https:/fonts.gstatic.com/" crossorigin>



    <link rel="stylesheet" href="{{ asset('plugins/animate.css@4.1.1/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/fill/style.css" />

    <link rel="preload" as="style" href="{{ asset('assets/build/assets/bootstrap-vCaDZZbr.css') }}" />
    <link rel="preload" as="style" href="{{ asset('assets/build/assets/themesv2-DZZF_N8v.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/build/assets/bootstrap-vCaDZZbr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/build/assets/themesv2-DZZF_N8v.css') }}">
    <script src="https://www.gstatic.com/firebasejs/9.6.10/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.6.10/firebase-database-compat.js"></script>
    <style>
        @import url('https:/fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('{{ asset('fonts/brigesta/fonts.css') }}');
        @import url('{{ asset('fonts/hoppipola/fonts.css') }}');

        :root {
            --inv-bg: #fdf8f0;
            --inv-base: #B83143;
            --inv-accent: #B83143;
            --inv-border: #BC9C6A;
            --menu-bg: rgb(253 246 237 / 90%);
            --menu-inactive: #B83143;
            --menu-active: #B83143;
            --btn-color: #fffaf2;
            --font-base: "Work Sans", sans-serif;
            --font-accent: "Brigesta", serif;
            --font-latin: "Hoppipola", cursive;
        }

        @keyframes wave-1 {
            0% {
                transform: rotate(-2deg);
            }

            100% {
                transform: rotate(2deg);
            }
        }

        @keyframes wave-2 {
            0% {
                transform: rotate(-3deg);
            }

            100% {
                transform: rotate(3deg);
            }
        }

        .ornament-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
        }

        .flowers-1 img {
            transform-origin: 100% 50%;
            animation: wave-1 4s ease-in-out infinite alternate;
        }

        .flowers-2 img {
            transform-origin: 50% 100%;
            animation: wave-1 4s ease-in-out infinite alternate;
        }

        .flowers-3 img {
            transform-origin: 50% 100%;
            animation: wave-2 3s ease-in-out infinite alternate;
        }

        .flowers-4 img {
            transform-origin: 100% 50%;
            animation: wave-2 3s ease-in-out infinite alternate;
        }
        #rsvp-display .card {
        background-color: #f9f9f9;
    }
    </style>

    <style>
        .frame {
            display: none
        }

        @keyframes wave-1 {
            0% {
                transform: rotate(-2deg);
            }

            100% {
                transform: rotate(2deg);
            }
        }

        @keyframes wave-2 {
            0% {
                transform: rotate(-3deg);
            }

            100% {
                transform: rotate(3deg);
            }
        }

        .ornament-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
        }

        .flowers-1 img {
            transform-origin: 100% 50%;
            animation: wave-1 4s ease-in-out infinite alternate;
        }

        .flowers-2 img {
            transform-origin: 50% 100%;
            animation: wave-1 4s ease-in-out infinite alternate;
        }

        .flowers-3 img {
            transform-origin: 50% 100%;
            animation: wave-2 3s ease-in-out infinite alternate;
        }

        .flowers-4 img {
            transform-origin: 100% 50%;
            animation: wave-2 3s ease-in-out infinite alternate;
        }
    </style>

    <style>
        @import url('{{ asset('fonts/brittany_signature/BrittanySignature.css')}}');
        @import url('{{ asset('fonts/photograph_signature/fonts.css') }}');
        @import url('{{ asset('fonts/heatwood/Heatwood.css')}}');

        .font-brittany-signature {
            font-family: 'Brittany Signature';
            line-height: 1.6 !important;
        }

        .font-photograph-signature {
            font-family: 'Photograph Signature';
            line-height: 1.6 !important;
        }

        .font-heatwood {
            font-family: 'Heatwood';
            line-height: 3 !important;
        }
    </style>
</head>

<body>
    <main id="app">
        <div id="modalOverlay" class="modal-backdrop fade" style="display: none;"></div>
        <div id="loader" class="loader-wrapper"><span class="loader"><span class="loader-inner"></span></span></div>
        <audio id="music" loop autoplay>
            <source
                src="{{ url('music.mp3') }}">
        </audio>
        <div id="workspace-container" class="position-fixed h-100 w-100" style="overflow: hidden">
            <div id="panZoom" class="position-fixed h-100 w-100"
                style="top: 0; right:0; bottom:0; left:0; transform-origin: 50% 50%;">
                <div class="h-100 w-100 d-flex align-items-center justify-content-center">
                    <div class="canvas not-open  ">
                        <div id="satuMomen" data-guest="{{ $guest->display_name }}" data-group="VIP">
                            <div class="satumomen_track">
                                <ul class="satumomen_list">
                                    <li class="satumomen_slide satumomen_cover">
                                        <div class="container-mobile cover"
                                            style="background-image: url(https://satumomen.com/themes/forever-journey/bg.webp); ;">

                                            <div class="ornament-wrapper">
                                                <div class="flowers-1"
                                                    style="position:absolute;right:0;top:0;width:120%;transform:translate(34%, -22%);">
                                                    <div
                                                        class="animate__animated animate__fadeInTopRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-1.webp"
                                                            alt="flowers-1.webp" class="w-100" />
                                                    </div>
                                                </div>
                                                <div class="flowers-2"
                                                    style="position:absolute;left:0;bottom:0;width:110%;transform:translate(-17%, 17%);">
                                                    <div
                                                        class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-2.webp"
                                                            alt="flowers-1.webp" class="w-100" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="position-relative h-100 w-100 d-flex flex-column justify-content-center align-items-center"
                                                style="z-index:1;">

                                                <div class="w-100">


                                                    <div class="mb-4 mx-auto mw-100 animate__animated animate__zoomIn animate__slower"
                                                        style="width:250px;height:380px;border:4px solid var(--inv-border);padding:2rem;border-radius:20rem;background-color:var(--inv-bg);">
                                                        <img src="{{ asset('assets/images/galleries/369331-gallery-AFHBHQGVVF.png') }}"
                                                            alt="no-image.jpg" class="h-100 w-100"
                                                            style="object-fit: contain;" />
                                                    </div>
                                                    <div class="text-center mx-auto" style="max-width:300px;">
                                                        <div
                                                            class="text-center mb-3 p-2 animate__animated animate__zoomIn animate__slower">
                                                            <div class="editable mb-1 animate__animated animate__fadeInUp animate__slower"
                                                                style="font-size:14px;">Kepada
                                                                Yth;<br />Bapak/Ibu/Saudara/i</div>
                                                            <div id="guestNameSlot"
                                                                class="editable color-accent h5 font-weight-bold mb-1 animate__animated animate__fadeInUp animate__slower"
                                                                style="font-size:16px;">{{ $guest->display_name }}</div>

                                                        </div><button
                                                            class="btn-open-invitation btn btn-primary mb-4 animate__animated animate__fadeInUp animate__slow rounded-pill"
                                                            style="font-size:14px;">Open Invitation</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile"
                                            style="background-image: url(https://satumomen.com/themes/forever-journey/bg.webp); ;">

                                            <div class="ornament-wrapper">
                                                <div class="flowers-1"
                                                    style="position:absolute;right:0;top:0;width:100%;transform:translate(34%, -22%);">
                                                    <div
                                                        class="animate__animated animate__fadeInTopRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-1.webp"
                                                            alt="flowers-1.webp" class="w-100" />
                                                    </div>
                                                </div>
                                                <div class="flowers-2"
                                                    style="position:absolute;left:0;bottom:0;width:90%;transform:translate(-17%, 17%);">
                                                    <div
                                                        class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-2.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="position-relative h-100 d-flex justify-content-center align-items-center">
                                                <div class="w-100">

                                                    <div class="mb-2 mx-auto mw-100 animate__animated animate__zoomIn animate__slower"
                                                        style="width:80px;height:80px;"><img
                                                            src="{{ asset('assets/images/galleries/369331-gallery-PBq8eLFGY8.png') }}"
                                                            alt="no-image.jpg" class="h-100 w-100"
                                                            style="object-fit: contain;" /></div>

                                                    <div class="text-center animate__animated animate__fadeInUp animate__slower mb-4"
                                                        style="line-height:1.2;">
                                                        <div class="editable" style="font-size:14.4px;">The wedding of
                                                        </div>
                                                        <div class="editable quotes font-weight-bold"
                                                            style="font-size:32px;">{{ $settings->groom_name_short }} &amp; {{ $settings->bride_name_short }}</div>
                                                    </div>
                                                    <div class="mx-auto mb-2 image-editable animate__animated animate__zoomIn animate__slower"
                                                        style="width:80%;">
                                                        <div class="light w-100" style="overflow:hidden;height:120px;">
                                                            <img src="{{ asset('storage/' . $photo->gallery_journey_1) }}"
                                                                class="lightbox"
                                                                style="width: 100%; height: 100%; object-fit: cover;"
                                                                alt="no-image.jpg" />
                                                        </div>
                                                    </div>
                                                    <div class="mx-auto mb-2 image-editable animate__animated animate__zoomIn animate__slower"
                                                        style="width:80%;">
                                                        <div class="light w-100" style="overflow:hidden;height:120px;">
                                                            <img src="{{ asset('storage/' . $photo->gallery_journey_2) }}"
                                                                class="lightbox"
                                                                style="width: 100%; height: 100%; object-fit: cover;"
                                                                alt="no-image.jpg" />
                                                        </div>
                                                    </div>
                                                    <div class="image-editable mb-2 mx-auto w-100 h-auto animate__animated animate__zoomIn animate__slower"
                                                        style="margin-top:-35px;"><img
                                                            src="{{ asset('assets/images/galleries/369331-gallery-acPUt5fgBA.png') }}"
                                                            alt="no-image.jpg" class="h-100 w-100"
                                                            style="object-fit: contain;" /></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile "
                                            style="background-image: url(https://satumomen.com/themes/forever-journey/bg.webp); ;">

                                            <div class="ornament-wrapper">
                                                <div class="flowers-1"
                                                    style="position:absolute;right:0;top:0;width:100%;transform:translate(34%, -22%);">
                                                    <div
                                                        class="animate__animated animate__fadeInTopRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-1.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-2"
                                                    style="position:absolute;left:0;bottom:0;width:90%;transform:translate(-17%, 17%);">
                                                    <div
                                                        class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-2.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-3"
                                                    style="position:absolute;left:0;top:0;width:35%;transform:translate(-40%, 48%);">
                                                    <div class="animate__animated animate__fadeInLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-3.webp"
                                                            alt="flowers-3.webp" class="w-100" />
                                                    </div>
                                                </div>
                                                <div class="flowers-4"
                                                    style="position:absolute;right:0;bottom:0;width:35%;transform:translate(66%, -15%);">
                                                    <div class="animate__animated animate__fadeInRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-4.webp"
                                                            alt="flowers-4.webp" class="w-100" />
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="position-relative h-100 d-flex flex-column justify-content-center align-items-center"
                                                style="z-index:1;">
                                                <div style="background-color: rgba(255, 255, 255, 0.45); border-radius: 10px; padding:15px; margin: -20px;"
     class="animate__animated animate__zoomIn animate__slower">



                                                    <div class="text-center">
                                                        <div class="editable quotes mb-3 animate__animated animate__fadeIn animate__slower font-accent"
                                                            style="font-size:24px;line-height:1.5;animation-delay:800ms;">
                                                            So they are no longer two, but one flesh. Therefore what God
                                                            has joined together, let no one separate.</div>
                                                        <div class="editable font-italic animate__animated animate__fadeIn animate__slower"
                                                            style="font-size:14.4px;animation-delay:1500ms;">Matthew
                                                            19:6</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile "
                                            style="background-image: url(https://satumomen.com/themes/forever-journey/bg.webp); ;">

                                            <div class="ornament-wrapper">
                                                <div class="flowers-1"
                                                    style="position:absolute;right:0;top:0;width:100%;transform:translate(34%, -22%);">
                                                    <div
                                                        class="animate__animated animate__fadeInTopRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-1.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-2"
                                                    style="position:absolute;left:0;bottom:0;width:90%;transform:translate(-17%, 17%);">
                                                    <div
                                                        class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-2.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-3"
                                                    style="position:absolute;left:0;top:0;width:35%;transform:translate(-40%, 48%);">
                                                    <div class="animate__animated animate__fadeInLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-3.webp"
                                                            alt="flowers-3.webp" class="w-100" />
                                                    </div>
                                                </div>
                                                <div class="flowers-4"
                                                    style="position:absolute;right:0;bottom:0;width:35%;transform:translate(66%, -15%);">
                                                    <div class="animate__animated animate__fadeInRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-4.webp"
                                                            alt="flowers-4.webp" class="w-100" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="h-100 d-flex justify-content-center align-items-center">
                                                <div class="w-100">
                                                    <div class="form-row mt-2">
                                                        <div class="col-6">
                                                            <div class="mb-2 image-editable animate__animated animate__zoomIn animate__slower"
                                                                style="width:100%;overflow:hidden;">
                                                                <div class="light"
                                                                    style="overflow:hidden;width:100%;height:180px;">
                                                                    <img src="{{ asset('storage/' . $photo->gallery_kolom_1) }}"
                                                                        class="lightbox"
                                                                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 10%;"
                                                                        alt="no-image.jpg" />
                                                                </div>
                                                            </div>
                                                            <div class="image-editable animate__animated animate__zoomIn animate__slower"
                                                                style="width:100%;overflow:hidden;">
                                                                <div class="light"
                                                                    style="overflow:hidden;width:100%;height:150px;">
                                                                    <img src="{{ asset('storage/' . $photo->gallery_kolom_2) }}"
                                                                        class="lightbox"
                                                                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 10%;"
                                                                        alt="no-image.jpg" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="mb-2 image-editable animate__animated animate__zoomIn animate__slower"
                                                                style="width:100%;overflow:hidden;">
                                                                <div class="light"
                                                                    style="overflow:hidden;width:100%;height:150px;">
                                                                    <img src="{{ asset('storage/' . $photo->gallery_kolom_3) }}"
                                                                        class="lightbox"
                                                                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 10%;"
                                                                        alt="no-image.jpg" />
                                                                </div>
                                                            </div>
                                                            <div class="image-editable animate__animated animate__zoomIn animate__slower"
                                                                style="width:100%;overflow:hidden;">
                                                                <div class="light"
                                                                    style="overflow:hidden;width:100%;height:180px;">
                                                                    <img src="{{ asset('storage/' . $photo->gallery_kolom_4) }}"
                                                                        class="lightbox"
                                                                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 10%;"
                                                                        alt="no-image.jpg" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile "
                                            style="background-image: url(https://satumomen.com/themes/forever-journey/bg.webp); ;">

                                            <div class="ornament-wrapper">
                                                <div class="flowers-1"
                                                    style="position:absolute;right:0;top:0;width:100%;transform:translate(34%, -22%);">
                                                    <div
                                                        class="animate__animated animate__fadeInTopRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-1.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-2"
                                                    style="position:absolute;left:0;bottom:0;width:90%;transform:translate(-17%, 17%);">
                                                    <div
                                                        class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-2.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-3"
                                                    style="position:absolute;left:0;top:0;width:35%;transform:translate(-40%, 48%);">
                                                    <div class="animate__animated animate__fadeInLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-3.webp"
                                                            alt="flowers-3.webp" class="w-100" />
                                                    </div>
                                                </div>
                                                <div class="flowers-4"
                                                    style="position:absolute;right:0;bottom:0;width:35%;transform:translate(66%, -15%);">
                                                    <div class="animate__animated animate__fadeInRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-4.webp"
                                                            alt="flowers-4.webp" class="w-100" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="position-relative h-100 d-flex flex-column justify-content-center align-items-center"
                                                style="z-index:1;">
                                                <div>


                                                    <div
                                                        class="text-center animate__animated animate__fadeInUp animate__slower">
                                                        <div class="editable quotes mb-3"
                                                            style="font-size:18px;line-height:1.5;">By the wonderful
                                                            Grace of God,<br />we are delighted to invite you to
                                                            the<br />Wedding of</div>
                                                        <div class="editable font-weight-bold font-accent"
                                                            style="font-size:48px;">{{ $settings->groom_name_short }} &amp; {{ $settings->bride_name_short }}</div>
                                                    </div>
                                                    <div class="mt-2 mx-auto mw-100 animate__animated animate__zoomIn animate__slower"
                                                        style="width:150px;height:150px;"><img
                                                            src="{{ asset('assets/images/galleries/369331-gallery-AFHBHQGVVF.png') }}"
                                                            alt="no-image.jpg" class="h-100 w-100"
                                                            style="object-fit: contain;" /></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile "
                                            style="background-image: url(https://satumomen.com/themes/forever-journey/bg.webp); ;">

                                            <div class="ornament-wrapper">

                                                <div class="flowers-1"
                                                    style="position:absolute;right:0;top:0;width:120%;transform:translate(34%, -22%);">
                                                    <div
                                                        class="animate__animated animate__fadeInTopRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-1.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-2"
                                                    style="position:absolute;left:0;bottom:0;width:110%;transform:translate(-17%, 17%);">
                                                    <div
                                                        class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-2.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-3"
                                                    style="position:absolute;left:0;bottom:0;width:35%;transform:translate(-65%, -74%);z-index:2;">
                                                    <div class="animate__animated animate__fadeInLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-3.webp"
                                                            alt="flowers-3.webp" class="w-100" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="position-relative d-flex flex-row justify-content-center align-items-center"
                                                style="z-index:1;margin:-30px;width:calc(100% + 60px);height:calc(100% + 60px);bottom:0;">
                                                <div class="col-6 p-0 mt-auto">
                                                    <div class="animate__animated animate__slideInLeft animate__slow">
                                                        <img src="{{ asset('storage/' . $photo->groom_photo) }}"
                                                            alt="no-image.jpg" class="h-100 w-100"
                                                            style="object-fit: contain;" />
                                                    </div>
                                                </div>
                                                <div class="col-6 pl-0">
                                                    <div class="animate__animated animate__slideInRight animate__slower editable btn btn-primary rounded-pill mb-3"
                                                        style="font-size:14px;">THE GROOM</div>
                                                    <div
                                                        class="animate__animated animate__slideInRight animate__slower">
                                                        <div class="editable font-weight-bold font-accent"
                                                            style="font-size:50px;line-height:1;">{{ $settings->groom_name_short }}</div>

                                                        <div class="editable font-weight-bold" style="font-size:20px;">
                                                            {{ $settings->groom_name_full }}</div>
                                                        <div class="editable font-weight-bold" style="font-size:40px;">
                                                            林美花</div>
                                                        <div class="editable font-italic"
                                                            style="font-size:16px;line-height:1;">The son of<br />{{ $settings->groom_father }}<br />{{ $settings->groom_mother }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile "
                                            style="background-image: url(https://satumomen.com/themes/forever-journey/bg.webp); ;">

                                            <div class="ornament-wrapper">
                                                <div class="flowers-1"
                                                    style="position:absolute;right:0;top:0;width:120%;transform:translate(34%, -22%);">
                                                    <div
                                                        class="animate__animated animate__fadeInTopRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-1.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-2"
                                                    style="position:absolute;left:0;bottom:0;width:110%;transform:translate(-17%, 17%);">
                                                    <div
                                                        class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-2.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-4"
                                                    style="position:absolute;left:0;bottom:0;width:35%;transform:translate(-52%, -73%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-4.webp"
                                                            alt="flowers-4.webp" class="w-100" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="position-relative d-flex flex-row justify-content-center align-items-center"
                                                style="z-index:1;margin:-30px;width:calc(100% + 60px);height:calc(100% + 60px);bottom:0;">
                                                <div class="col-6 pr-0 text-right">
                                                    <div class="animate__animated animate__slideInLeft animate__slower editable btn btn-primary rounded-pill mb-3"
                                                        style="font-size:14px;">THE BRIDE</div>
                                                    <div class="animate__animated animate__slideInLeft animate__slower">
                                                        <div class="editable font-weight-bold font-accent"
                                                            style="font-size:50px;line-height:1;">{{ $settings->bride_name_short }}</div>

                                                        <div class="editable font-weight-bold" style="font-size:20px;">
                                                            {{ $settings->bride_name_full }}</div>
                                                        <div class="editable font-weight-bold" style="font-size:40px;">
                                                            林美花</div>
                                                        <div class="editable font-italic"
                                                            style="font-size:16px;line-height:1;">The daughter
                                                            of<br />The late {{ $settings->bride_father }}<br />&amp; {{ $settings->bride_mother }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-6 p-0 mt-auto">
                                                    <div class="animate__animated animate__slideInRight animate__slow">
                                                        <img src="{{ asset('storage/' . $photo->bride_photo) }}"
                                                            alt="no-image.jpg" class="h-100 w-100"
                                                            style="object-fit: contain;" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile "
                                            style="background-image: url(https://satumomen.com/themes/forever-journey/bg.webp); ;">

                                            <div class="ornament-wrapper">
                                                <div class="flowers-1" style="position:absolute;right:0;top:0;width:100%;transform:translate(34%, -22%);">
                                                    <div class="animate__animated animate__fadeInTopRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-1.webp" alt="flowers-1.webp" class="w-100"
                                                            style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-2" style="position:absolute;left:0;bottom:0;width:90%;transform:translate(-17%, 17%);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-2.webp" alt="flowers-1.webp" class="w-100"
                                                            style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-3" style="position:absolute;left:0;top:0;width:35%;transform:translate(-40%, 48%);">
                                                    <div class="animate__animated animate__fadeInLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-3.webp" alt="flowers-3.webp" class="w-100" />
                                                    </div>
                                                </div>
                                                <div class="flowers-4" style="position:absolute;right:0;bottom:0;width:35%;transform:translate(66%, -15%);">
                                                    <div class="animate__animated animate__fadeInRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-4.webp" class="w-100" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="position-relative h-100 d-flex justify-content-center align-items-center">
                                                <div class="w-100" style="max-width:250px;">
                                                    <div class="mb-2 image-editable animate__animated animate__zoomIn animate__slower"
                                                        style="width:100%;overflow:hidden;">
                                                        <div class="light"
                                                            style="overflow:hidden;width:100%;height:280px;"><img
                                                                src="{{ asset('storage/' . $photo->gallery_potrait_1) }}"
                                                                class="lightbox"
                                                                style="width: 100%; height: 100%; object-fit: cover; border-radius: 8%;"
                                                                alt="no-image.jpg" /></div>
                                                    </div>
                                                    <div class="mb-2 image-editable animate__animated animate__zoomIn animate__slower"
                                                        style="width:100%;overflow:hidden;">
                                                        <div class="light"
                                                            style="overflow:hidden;width:100%;height:280px;"><img
                                                                src="{{ asset('storage/' . $photo->gallery_potrait_2) }}"
                                                                class="lightbox"
                                                                style="width: 100%; height: 100%; object-fit: cover; border-radius: 8%;"
                                                                alt="no-image.jpg" /></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile "
                                            style="background-image: url(https://satumomen.com/themes/forever-journey/bg.webp); ;">

                                            <div class="ornament-wrapper">
                                                <div class="flowers-1"
                                                    style="position:absolute;right:0;top:0;width:100%;transform:translate(34%, -22%);">
                                                    <div
                                                        class="animate__animated animate__fadeInTopRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-1.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-2"
                                                    style="position:absolute;left:0;bottom:0;width:90%;transform:translate(-17%, 17%);">
                                                    <div
                                                        class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-2.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-3"
                                                    style="position:absolute;left:0;top:0;width:35%;transform:translate(-40%, 48%);">
                                                    <div class="animate__animated animate__fadeInLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-3.webp"
                                                            alt="flowers-3.webp" class="w-100" />
                                                    </div>
                                                </div>
                                                <div class="flowers-4"
                                                    style="position:absolute;right:0;bottom:0;width:35%;transform:translate(66%, -15%);">
                                                    <div class="animate__animated animate__fadeInRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-4.webp"
                                                            alt="flowers-4.webp" class="w-100" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="position-relative h-100 d-flex justify-content-center align-items-center">
                                                <div class="w-100">
                                                    <div class="editable font-weight-bold animate__animated animate__slideInRight animate__slower"
                                                        style="font-size:32px;line-height:1;">A forever<br />journey
                                                        with<br />you</div>
                                                    <div class="form-row mt-2">
                                                        <div class="col-6">
                                                            <div class="mb-2 image-editable animate__animated animate__zoomIn animate__slower"
                                                                style="width:100%;overflow:hidden;">
                                                                <div class="light"
                                                                    style="overflow:hidden;width:100%;height:152px;">
                                                                    <img src="{{ asset('storage/' . $photo->gallery_journey_1) }}"
                                                                        class="lightbox"
                                                                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 10%;"
                                                                        alt="no-image.jpg" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-2 image-editable animate__animated animate__zoomIn animate__slower"
                                                                style="width:100%;overflow:hidden;">
                                                                <div class="light"
                                                                    style="overflow:hidden;width:100%;height:152px;">
                                                                    <img src="{{ asset('storage/' . $photo->gallery_journey_2) }}"
                                                                        class="lightbox"
                                                                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 10%;"
                                                                        alt="no-image.jpg" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-2 image-editable animate__animated animate__zoomIn animate__slower"
                                                                style="width:100%;overflow:hidden;">
                                                                <div class="light"
                                                                    style="overflow:hidden;width:100%;height:152px;">
                                                                    <img src="{{ asset('storage/' . $photo->gallery_journey_3) }}"
                                                                        class="lightbox"
                                                                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 10%;"
                                                                        alt="no-image.jpg" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="mb-2 image-editable animate__animated animate__zoomIn animate__slower"
                                                                style="width:100%;overflow:hidden;">
                                                                <div class="light"
                                                                    style="overflow:hidden;width:100%;height:152px;">
                                                                    <img src="{{ asset('storage/' . $photo->gallery_journey_4) }}"
                                                                        class="lightbox"
                                                                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 10%;"
                                                                        alt="no-image.jpg" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-2 image-editable animate__animated animate__zoomIn animate__slower"
                                                                style="width:100%;overflow:hidden;">
                                                                <div class="light"
                                                                    style="overflow:hidden;width:100%;height:152px;">
                                                                    <img src="{{ asset('storage/' . $photo->gallery_journey_5) }}"
                                                                        class="lightbox"
                                                                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 10%;"
                                                                        alt="no-image.jpg" />
                                                                </div>
                                                            </div>
                                                            <div class="mb-2 image-editable animate__animated animate__zoomIn animate__slower"
                                                                style="width:100%;overflow:hidden;">
                                                                <div class="light"
                                                                    style="overflow:hidden;width:100%;height:152px;">
                                                                    <img src="{{ asset('storage/' . $photo->gallery_journey_6) }}"
                                                                        class="lightbox"
                                                                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 10%;"
                                                                        alt="no-image.jpg" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile "
                                            style="background-image: url(https://satumomen.com/themes/forever-journey/bg.webp); ;">

                                            <div class="ornament-wrapper">
                                                <div class="flowers-1"
                                                    style="position:absolute;right:0;top:0;width:100%;transform:translate(34%, -22%);">
                                                    <div
                                                        class="animate__animated animate__fadeInTopRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-1.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-2"
                                                    style="position:absolute;left:0;bottom:0;width:90%;transform:translate(-17%, 17%);">
                                                    <div
                                                        class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-2.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-3"
                                                    style="position:absolute;left:0;top:0;width:35%;transform:translate(-40%, 48%);">
                                                    <div class="animate__animated animate__fadeInLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-3.webp"
                                                            alt="flowers-3.webp" class="w-100" />
                                                    </div>
                                                </div>
                                                <div class="flowers-4"
                                                    style="position:absolute;right:0;bottom:0;width:35%;transform:translate(66%, -15%);">
                                                    <div class="animate__animated animate__fadeInRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-4.webp"
                                                            alt="flowers-4.webp" class="w-100" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="position-relative h-100 d-flex justify-content-center align-items-center">
                                                <div class="w-100">

                                                    <div class="mb-2 mx-auto mw-100 animate__animated animate__zoomIn animate__slower"
                                                        style="width:200px;height:150px;"><img
                                                            src="{{ asset('assets/images/galleries/369331-gallery-0dThaBEMyP.png') }}"
                                                            alt="no-image.jpg" class="h-100 w-100"
                                                            style="object-fit: contain;" /></div>

                                                    <div class="text-center animate__animated animate__fadeInUp animate__slower mb-4"
                                                        style="line-height:1.2;animation-delay:500ms;">
                                                        <div class="d-flex align-items-center justify-content-center mb-2 color-accent"
                                                            style="gap:8px;">
                                                            <div class="editable p-2 d-flex align-items-center justify-content-center text-center font-weight-bold"
                                                                style="width:80px;height:80px;background-color:rgb(252, 196, 206);border-radius:1rem;font-size:42px;">
                                                                07</div>
                                                            <div class="editable p-2 d-flex align-items-center justify-content-center text-center font-weight-bold"
                                                                style="width:80px;height:80px;background-color:rgb(252, 196, 206);border-radius:1rem;font-size:42px;">
                                                                12</div>
                                                            <div class="editable p-2 d-flex align-items-center justify-content-center text-center font-weight-bold"
                                                                style="width:80px;height:80px;background-color:rgb(252, 196, 206);border-radius:1rem;font-size:42px;">
                                                                24</div>
                                                        </div>
                                                        <div class="editable font-weight-bold" style="font-size:16px;">
                                                            <p class="text-white">{{ \Carbon\Carbon::parse($settings->reception_datetime)->translatedFormat('l, d F Y') }}</p></div>

                                                    </div>
                                                    <div class="text-center">
                                                        <div class="editable animate__animated animate__fadeInUp animate__slower" style="font-size:24px;text-decoration:underline;animation-delay:1000ms;">
                                                            Venue :
                                                        </div>
                                                        <div class="color-accent editable font-weight-bold animate__animated animate__fadeInUp animate__slower font-accent" style="font-size:32px;line-height:1.2;animation-delay:1500ms;">
                                                            {{ $settings->ceremony_venue }}
                                                        </div>
                                                        <div class="editable animate__animated animate__fadeInUp animate__slower" style="font-size:18px;animation-delay:2000ms;">
                                                            {{ $settings->ceremony_address }}
                                                        </div>
                                                        <iframe src="{{ $settings->ceremony_map_url }}" width="100%" height="80" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile "
                                            style="background-image: url(https://satumomen.com/themes/forever-journey/bg.webp); ;">

                                            <div class="ornament-wrapper">
                                                <div class="flowers-1"
                                                    style="position:absolute;right:0;top:0;width:100%;transform:translate(34%, -22%);">
                                                    <div
                                                        class="animate__animated animate__fadeInTopRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-1.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-2"
                                                    style="position:absolute;left:0;bottom:0;width:90%;transform:translate(-17%, 17%);">
                                                    <div
                                                        class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-2.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-3"
                                                    style="position:absolute;left:0;top:0;width:35%;transform:translate(-40%, 48%);">
                                                    <div class="animate__animated animate__fadeInLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-3.webp"
                                                            alt="flowers-3.webp" class="w-100" />
                                                    </div>
                                                </div>
                                                <div class="flowers-4"
                                                    style="position:absolute;right:0;bottom:0;width:35%;transform:translate(66%, -15%);">
                                                    <div class="animate__animated animate__fadeInRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-4.webp"
                                                            alt="flowers-4.webp" class="w-100" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div
                                                class="position-relative h-100 d-flex flex-column justify-content-center align-items-center">
                                                <div class="w-100">

                                                    <div class="mb-2 mx-auto mw-100 animate__animated animate__zoomIn animate__slower"
                                                        style="width:200px;height:150px;"><img
                                                            src="{{ asset('assets/images/galleries/369331-gallery-0dThaBEMyP.png') }}"
                                                            alt="no-image.jpg" class="h-100 w-100"
                                                            style="object-fit: contain; " /></div>

                                                    <div class="text-center color-accent h4 mb-4 editable animate__animated animate__fadeInDown animate__slow font-weight-bold"
                                                        style="font-size:32px;">Count Down</div>

                                                    <div class="countdown-wrapper mx-auto mb-4 d-flex flex-column animate__animated animate__fadeInUp animate__slower"
                                                        data-datetime="2025-06-15T13:00"
                                                        style="max-width:280px;min-width:280px;">
                                                        <div class="countdown text-center">
                                                            <div class="countdown-item day bg-white"
                                                                style="color:var(--inv-accent);border:1px solid var(--inv-accent);">
                                                                <div class="number">00</div>
                                                                <div class="text editable">Hari</div>
                                                            </div>
                                                            <div class="countdown-item hour bg-white"
                                                                style="color:var(--inv-accent);border:1px solid var(--inv-accent);">
                                                                <div class="number">00</div>
                                                                <div class="text editable">Jam</div>
                                                            </div>
                                                            <div class="countdown-item minute bg-white"
                                                                style="color:var(--inv-accent);border:1px solid var(--inv-accent);">
                                                                <div class="number">00</div>
                                                                <div class="text editable">Menit</div>
                                                            </div>
                                                            <div class="countdown-item second bg-white"
                                                                style="color:var(--inv-accent);border:1px solid var(--inv-accent);">
                                                                <div class="number">00</div>
                                                                <div class="text editable">Detik</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="text-center">
                                                            <div class="editable mb-4 animate__animated animate__fadeInUp animate__slower"
                                                                style="font-size:14.4px;">Send greetings to the bride
                                                                and groom<br />and confirm attendance</div>

                                                            <button
                                                                class="btn-rsvp btn btn-primary mx-auto mb-4 animate__animated animate__fadeInUp animate__slow rounded-pill"
                                                                style="font-size:18px;">Kirim Ucapan RSVP</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile "
                                            style="background-image: url(https://satumomen.com/themes/forever-journey/bg.webp); ;">

                                            <div class="ornament-wrapper">
                                                <div class="flowers-1"
                                                    style="position:absolute;right:0;top:0;width:100%;transform:translate(34%, -22%);">
                                                    <div
                                                        class="animate__animated animate__fadeInTopRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-1.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-2"
                                                    style="position:absolute;left:0;bottom:0;width:90%;transform:translate(-17%, 17%);">
                                                    <div
                                                        class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-2.webp"
                                                            alt="flowers-1.webp" class="w-100" style="opacity: 0.3;" />
                                                    </div>
                                                </div>
                                                <div class="flowers-3"
                                                    style="position:absolute;left:0;top:0;width:35%;transform:translate(-40%, 48%);">
                                                    <div class="animate__animated animate__fadeInLeft animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-3.webp"
                                                            alt="flowers-3.webp" class="w-100" />
                                                    </div>
                                                </div>
                                                <div class="flowers-4"
                                                    style="position:absolute;right:0;bottom:0;width:35%;transform:translate(66%, -15%);">
                                                    <div class="animate__animated animate__fadeInRight animate__slower">
                                                        <img src="https://satumomen.com/themes/forever-journey/flowers-4.webp"
                                                            alt="flowers-4.webp" class="w-100" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center"
                                                style="height:100%;">
                                                <div style="width:100%;" class="text-center">
                                                    <div class="color-accent h4 mb-2 editable animate__animated animate__fadeInDown animate__slower font-italic"
                                                        style="font-size:28.8px;">Tanda Kasih</div>
                                                    <div class="editable mb-4 animate__animated animate__fadeInDown animate__slower"
                                                        style="font-size:14.4px;">Terima kasih telah menambah semangat
                                                        kegembiraan pernikahan kami
                                                        dengan kehadiran dan hadiah indah Anda.</div>
                                                    <div style="display:flex;gap:8px;">
                                                    </div>

                                                        <div class="d-flex">
                                                            <div class="mx-auto">

                                                                <div class="d-flex align-items-center mb-5 animate__animated animate__zoomIn animate__slow">


                                                                    <div style="width:80px;overflow:hidden;"
                                                                        class="image-editable">
                                                                        <img src="{{ asset('assets/img/logo-bca-biru-1687975058.png') }}"
                                                                            style="width: 100%;height: 100%;object-fit: contain;"
                                                                            alt="logo-bca-biru-1687975058.png" />
                                                                    </div>
                                                                    <div class="text-left pl-2">
                                                                        <div class="editable account-number font-weight-bold h5 mb-0"
                                                                            style="font-size:18px;">8955105865
                                                                        </div>
                                                                        <div class="editable" style="font-size:14.4px;">
                                                                            KELVIN</div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center animate__animated animate__zoomIn animate__slow">
                                                                    <div style="width:80px;overflow:hidden;"
                                                                        class="image-editable">
                                                                        <img src="{{ asset('assets/img/logo-bca-biru-1687975058.png') }}"
                                                                            style="width: 100%;height: 100%;object-fit: contain;"
                                                                            alt="logo-bca-biru-1687975058.png" />
                                                                    </div>
                                                                    <div class="text-left pl-2">
                                                                        <div class="editable account-number font-weight-bold h5 mb-0"
                                                                            style="font-size:18px;">5125360294
                                                                        </div>
                                                                        <div class="editable" style="font-size:14.4px;">
                                                                            MELSI</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile "
                                            style="background-image: url({{ asset('assets/images/invitation/bg-section-42207681725942580.jpg') }}); background-size: cover;">

                                            <div
                                                class="watermark h-100 w-100 d-flex flex-column align-items-center justify-content-center">
                                                <div class="w-100 mb-auto">
                                                    <div
                                                        class="image-editable mb-2 mx-auto w-100 animate__animated animate__fadeInDown animate__slower">
                                                        <img src="{{ asset('assets/images/galleries/369331-gallery-UcxOWyEHOS.png') }}"
                                                            alt="no-image.jpg" class="h-100 w-100"
                                                            style="object-fit: contain;" />
                                                    </div>

                                                    <div class="image-editable mb-2 mx-auto mw-100 animate__animated animate__zoomIn animate__slower"
                                                        style="width:180px;height:180px;"><img
                                                            src="{{ asset('assets/images/galleries/369331-gallery-dyLFu9GpvL.png') }}"
                                                            alt="no-image.jpg" class="h-100 w-100"
                                                            style="object-fit: contain;" /></div>
                                                </div>
                                                <div class="watermark-placeholder text-center pb-5"></div>
                                            </div>
                                        </div>
                                    </li>
                                    </ul>
                            </div>
                        </div>
                        <div id="smMenu" class="satumomen_menu">
                            <ul class="satumomen_menu_list">
                                <li class="satumomen_menu_item">
                                    <i class="icon ph-fill ph-house" style="color:currentColor;"></i>
                                    <span>Opening</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="icon ph-fill ph-calendar-check" style="color:currentColor;"></i>
                                    <span>Save</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="icon ph-fill ph-synagogue" style="color:currentColor;"></i>
                                    <span>Quotes</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="icon ph-fill ph-image" style="color:currentColor;"></i>
                                    <span>Gallery</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="icon ph-fill ph-flower" style="color:currentColor;"></i>
                                    <span>Greetings</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="icon ph-fill ph-heart" style="color:currentColor;"></i>
                                    <span>Groom</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="icon ph-fill ph-heart" style="color:currentColor;"></i>
                                    <span>Bride</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="icon ph-fill ph-image" style="color:currentColor;"></i>
                                    <span>Gallery</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="icon ph-fill ph-image" style="color:currentColor;"></i>
                                    <span>Gallery</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="icon ph-fill ph-calendar-check" style="color:currentColor;"></i>
                                    <span>Event</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="icon ph-fill ph-chat-circle-text" style="color:currentColor;"></i>
                                    <span>RSVP</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        class="bi bi-box2-heart" viewBox="0 0 16 16">
                                        <path
                                            d="M8 7.982C9.664 6.309 13.825 9.236 8 13 2.175 9.236 6.336 6.31 8 7.982" />
                                        <path
                                            d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4zm0 1H7.5v3h-6zM8.5 4V1h3.75l2.25 3zM15 5v10H1V5z" />
                                    </svg>
                                    <span>Gift</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="icon ph-fill ph-confetti" style="color:currentColor;"></i>
                                    <span>Thanks</span>
                                </li>
                                </ul>
                        </div>
                        <div class="floating-action d-flex align-items-end flex-column">
                            <button id="btnMusic" onclick="if (!window.__cfRLUnblockHandlers) return false; playMusic()"
                                class="btn btn-float " data-cf-modified-1b1c99168cd35df5525a85b3-="">
                                <svg class="play" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                    fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M184,152V104a8,8,0,0,1,16,0v48a8,8,0,0,1-16,0Zm40-72a8,8,0,0,0-8,8v80a8,8,0,0,0,16,0V88A8,8,0,0,0,224,80ZM53.92,34.62A8,8,0,1,0,42.08,45.38L73.55,80H32A16,16,0,0,0,16,96v64a16,16,0,0,0,16,16H77.25l69.84,54.31A8,8,0,0,0,160,224V175.09l42.08,46.29a8,8,0,1,0,11.84-10.76Zm92.16,77.59A8,8,0,0,0,160,106.83V32a8,8,0,0,0-12.91-6.31l-39.85,31a8,8,0,0,0-1,11.7Z">
                                    </path>
                                </svg>
                                <svg class="pause" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                    fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M160,32V224a8,8,0,0,1-12.91,6.31L77.25,176H32a16,16,0,0,1-16-16V96A16,16,0,0,1,32,80H77.25l69.84-54.31A8,8,0,0,1,160,32Zm32,64a8,8,0,0,0-8,8v48a8,8,0,0,0,16,0V104A8,8,0,0,0,192,96Zm32-16a8,8,0,0,0-8,8v80a8,8,0,0,0,16,0V88A8,8,0,0,0,224,80Z">
                                    </path>
                                </svg>
                            </button>
                            <button id="btnAutoplay" class="btn btn-float ">
                                <svg class="play" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                    fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M128,24A104,104,0,1,0,232,128,104.13,104.13,0,0,0,128,24Zm36.44,110.66-48,32A8.05,8.05,0,0,1,112,168a8,8,0,0,1-8-8V96a8,8,0,0,1,12.44-6.66l48,32a8,8,0,0,1,0,13.32Z">
                                    </path>
                                </svg>
                                <svg class="pause" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                    fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M128,24A104,104,0,1,0,232,128,104.13,104.13,0,0,0,128,24ZM112,160a8,8,0,0,1-16,0V96a8,8,0,0,1,16,0Zm48,0a8,8,0,0,1-16,0V96a8,8,0,0,1,16,0Z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="lightboxWrapper" class="lightbox-wrapper">
            <div class="lightbox-list"></div>
            <a href="#" id="lightboxCloseBtn" class="btn-lightbox">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 0 1 1.414 0L10 8.586l4.293-4.293a1 1 0 1 1 1.414 1.414L11.414 10l4.293 4.293a1 1 0 0 1-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 0 1-1.414-1.414L8.586 10 4.293 5.707a1 1 0 0 1 0-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <div class="lightbox-navigation">
                <a href="#" id="lightboxPrevBtn" class="lightbox-arrow" data-index="0">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7" />
                    </svg>
                </a>
                <a href="#" id="lightboxNextBtn" class="lightbox-arrow" data-index="0">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="modal fade" id="rsvpModal" tabindex="-1" role="dialog" aria-labelledby="rsvpModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-4" style="height:100%">

                    <div class="text-center mb-4">
                        <h4 class="editable font-weight-bold" style="font-size:24px;">Konfirmasi Kehadiran</h4>
                        <p class="editable" style="font-size:14.4px;">Mohon isi formulir di bawah ini untuk mengonfirmasi kehadiran Anda.</p>
                    </div>

                    @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @elseif($hasRsvpd)
                <div class="alert alert-info">Anda sudah melakukan konfirmasi. Terima kasih.</div>
            @else
                <form id="form-rsvp" class="rsvp-form" method="POST" action="{{ route('rsvp.store') }}">
                    @csrf
                    <input type="hidden" name="guest_id" value="{{ $guest->id }}">

                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Nama Anda</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $guest->display_name }}" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Kehadiran?</label>
                        <select class="form-select" id="attendance" name="attendance" required>
                            <option value="" disabled selected>Pilih Kehadiran</option>
                            <option value="Hadir">Hadir</option>
                            <option value="Tidak Hadir">Tidak Hadir</option>
                        </select>
                    </div>

                        <input type="number" class="form-control" id="guest_count" name="guest_count" value="1" min="1" max="10" hidden>


                    <div class="form-group mb-4">
                        <label for="message" class="form-label">Kirim Ucapan & Doa</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tuliskan ucapan dan doa terbaik Anda..."></textarea>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="d-flex justify-content-center">
    <button type="submit" id="btn-rsvp" class="btn btn-primary rounded-pill">Kirim</button>
</div>

                </form>
            @endif
                    <div id="rsvp-list" class="mt-5">
            @foreach($rsvps as $rsvp)
                <div class="card-body border-bottom">
                    <p class="fs-6 mb-0 text-dark">{{ $rsvp->guest->display_name }}</p>
                    @if($rsvp->attendance == 'Hadir')
                        <span class="badge rounded-pill text-bg-success"><i class="bi bi-check-circle-fill"></i> Hadir</span>
                    @else
                        <span class="badge rounded-pill text-bg-danger"><i class="bi bi-x-circle-fill"></i> Tidak Hadir</span>
                    @endif
                    <p class="fs-6 fst-italic mt-2">"{{ $rsvp->message }}"</p>
                </div>
            @endforeach
    </div>


                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; closeModal(rsvpModal)"
                        type="button" class="btn btn-close" data-cf-modified-1b1c99168cd35df5525a85b3-=""><svg
                            xmlns="http://www.w3.org/2000/svg" height="42px" width="42px" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18 18 6M6 6l12 12" />
                        </svg></button>
                </div>
            </div>
        </div>
        <div id="waterMark" class="mt-5" style="display: none">
            <div class="wm-music mt-3 text-center animate__animated animate__fadeInUp animate__slower animate__delay-1s"
                style="font-size: 60%">
                <div style="opacity: 0.5"><strong>Music:</strong></div>
                <div style="opacity: 0.5">Kingdom Hearts Dearly Beloved (Original Version)</div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="notSupport" tabindex="-1" role="dialog" aria-labelledby="notSupport" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: .8rem;">
                <div class="modal-body text-center justify-content-center align-items-center">
                    <h2>Pemberitahuan</h2>
                    <p>Browser yang kamu gunakan mungkin kurang kompatibel. Beberapa fungsi undangan ini mungkin tidak
                        dapat berjalan dengan baik. Kami merekomendasikan Chrome. Klik tombol dibawah ini untuk
                        mendownload.</p>
                    <div class="d-flex justify-content-center">
                        <a href="https://apps.apple.com/id/app/google-chrome/id535886823" class="btn p-1"
                            target="_BLANK">
                            <img src="images/btn_app_store.png" alt="AppStore" height="40px">
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.android.chrome&amp;hl=in&amp;gl=US"
                            class="btn p-1" target="_BLANK">
                            <img src="images/btn_play_store.png" alt="PlayStore" height="40px">
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary btn-block rounded-pill"
                        onclick="if (!window.__cfRLUnblockHandlers) return false; closeModal(notSupport)"
                        data-cf-modified-1b1c99168cd35df5525a85b3-="">Tetap Akses</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambahkan di head HTML -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vuejs-noty/dist/vuejs-noty.css">
<script src="https://cdn.jsdelivr.net/npm/vuejs-noty/dist/vuejs-noty.min.js"></script>



    <script src="{{ asset('themes/themesv27888.js') }}" type="1b1c99168cd35df5525a85b3-text/javascript"></script>

    <script type="1b1c99168cd35df5525a85b3-text/javascript">
        var notSupport = document.getElementById('notSupport');
        function checkBrowser() {
            if(navigator.userAgent.indexOf("UCBrowser") != -1 || navigator.userAgent.indexOf("MiuiBrowser") != -1 || navigator.userAgent.indexOf("OppoBrowser") != -1) {
                showModal(notSupport);
                if (loader) {
                    loader.style.display = "none";
                }
            }
        }
        checkBrowser()
    </script>
    <script type="1b1c99168cd35df5525a85b3-text/javascript">

    </script>
    <script>
    // --- 1. Konfigurasi Firebase ---
    // Gunakan konfigurasi dari proyek Firebase Anda
    const firebaseConfig = {
      apiKey: "AIzaSyBottjsmkycO31Ab4osZOO5VbYkEdqJ0vc",
      authDomain: "wedding-397d6.firebaseapp.com",
      // Tambahkan databaseURL dari pengaturan proyek Firebase Anda
      databaseURL: "https://wedding-397d6-default-rtdb.asia-southeast1.firebasedatabase.app",
      projectId: "wedding-397d6",
      storageBucket: "wedding-397d6.appspot.com",
      messagingSenderId: "1027841022841",
      appId: "1:1027841022841:web:fa8a8ee256fe617277eda8",
      measurementId: "G-677PLFR65Y"
    };

    // Inisialisasi Firebase
    firebase.initializeApp(firebaseConfig);
    const db = firebase.database();
    const rsvpRef = db.ref("rsvp");

    // Fungsi untuk menampilkan data RSVP secara real-time
    function showRSVP() {
        rsvpRef.orderByChild("timestamp").on('value', (snapshot) => {
            const container = document.getElementById('rsvp-display');
            container.innerHTML = ""; // Kosongkan kontainer

            const rsvpData = [];
            // Data dari RTDB adalah objek, kita ubah menjadi array
            snapshot.forEach(childSnapshot => {
                rsvpData.push(childSnapshot.val());
            });

            // Balik urutan array agar data terbaru di atas
            rsvpData.reverse();

            // Tampilkan setiap entri RSVP
            rsvpData.forEach((item, index) => {
                const card = document.createElement('div');
                card.className = "card mb-2 p-3 border rounded";
                card.style.backgroundColor = '#fdf8f0';
                card.style.borderColor = 'var(--inv-border)';

                card.innerHTML = `
                    <strong>${index + 1}. ${item.name}</strong><br>
                    <small>Relasi: ${item.relation || '-'}</small><br>
                    <small>Kehadiran: ${item.hadir}</small><br>
                    <small>Jumlah Hadir: ${item.jumlah}</small><br>
                    <p class="mt-2 mb-0">"${item.ucapan || '-'}"</p>
                `;
                container.appendChild(card);
            });
        }, (error) => {
            console.error('Gagal mengambil data RSVP:', error);
            alert('Gagal memuat data ucapan. Silakan coba lagi.');
        });
    }

    // Event listener untuk form submission
    document.getElementById('form-rsvp').addEventListener('submit', function() {
            var submitButton = document.getElementById('btn-rsvp');
            submitButton.disabled = true;
            submitButton.innerText = 'Mengirim...';
        });

    // Panggil showRSVP() saat halaman pertama kali dimuat
    document.addEventListener('DOMContentLoaded', showRSVP);
</script>

    <script src="{{ asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="1b1c99168cd35df5525a85b3-|49" defer></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"94c210e4d910a039","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.5.0","token":"bb94421b81454f668eb9cf5cf8e9f0cb"}'
        crossorigin="anonymous"></script>
</body>


</html>

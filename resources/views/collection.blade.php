<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The UITERs - Home </title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Logo_UIT_updated.svg/1200px-Logo_UIT_updated.svg.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-white-100{background-color: #F7FAFC;}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/icon/fontawesome-free-6.4.2-web/css/regular.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/collection.css') }}">
</head>

<body>
<div class="cartier">
    <!-- header start -->
    <div class="header">
        <div class="header-notice">
            <p>Enjoy wrap-gift standard shipping. <span class=""><a class="has-link return-link">Click here to learn
                        more about returns and exchanges.</a></span></p>
        </div>

        <div class="main-header">
            <ul class="nav-left">
                <li class="nav-left--item"><a href="" class="has-link nav-hover">Home</a></li>
                <li class="nav-left--item"><a href="" class="has-link nav-hover">Contact Us</a></li>
                <li class="nav-left--item"><a href="" class="has-link nav-hover">Merchant</a></li>
            </ul>

            <div class="logo">
                <a href="/"><img class="logo-img" src="{{ asset('/img/Screenshot_2023-10-16_121457-removebg.png')}}" alt=""></a>
            </div>

            <div class="nav-right">
                <div class="nav-right--item"><i class="fa fa-heart"></i></div>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/profile') }}" style="margin: 0"><div class="nav-right--item"><i class="fa fa-user"></i></div></a>
                        <a href="{{Route('cart.index')}}" style="margin: 0"><div class="nav-right--item"><i class="fa fa-cart-plus"></i></div></a>
                    @else
                        <a href="{{ url('/login') }}" style="margin: 0"><div class="nav-right--item"><i class="fa fa-user"></i></div></a>
                        <a href="{{ url('/login') }}" style="margin: 0"><div class="nav-right--item"><i class="fa fa-cart-plus"></i></div></a>
                    @endauth
                @endif
            </div>
        </div>
    </div>
    <!-- header end -->
</div>

   <div class="sub-navbar">
      <div class="dropdown">
        <button class="dropbtn">FESTIVE SEASON</button>
        <div class="dropdown-content">
          <a href="#">WINTERK</a>
          <a href="#">SUMMER</a>
          <a href="#">AKALUNA</a>
        </div>
      </div>

      <div class="dropdown">
        <button class="dropbtn">WATCHES</button>
        <div class="dropdown-content">
          <a href="#">LALAKA</a>
          <a href="#">LOREAL</a>
          <a href="#">MARIDA</a>
        </div>
      </div>

      <div class="dropdown">
        <button class="dropbtn">HIGH JWELRY</button>
        <div class="dropdown-content">
          <a href="#">K'SANTE</a>
          <a href="#">DELTA</a>
          <a href="#">MAMAPARA</a>
        </div>
      </div>

      <div class="dropdown">
        <button class="dropbtn">FRAGRANCES</button>
        <div class="dropdown-content">
          <a href="#">DECLARATION</a>
          <a href="#">DE PAUL</a>
          <a href="#">PUSHI KAR</a>
          <a href="#">OSHIMEN</a>
        </div>
      </div>

      <div class="dropdown">
        <button class="dropbtn">LAMAISON</button>
        <div class="dropdown-content">
          <a href="#">TANK</a>
          <a href="#">SANTOS</a>
          <a href="#">PATHERE</a>
          <a href="#">LOVE</a>
        </div>
      </div>
    </div> 
        <!-- header end -->
        <!-- banner start -->
        <div class="banner">
            <div class="banner-img">

                <img class="banner-img-link" src="{{ asset('/img/w1920.webp')}}"alt="">

            </div>
            <div class="banner-introduction">
                <div class="intro-text">
                    <h3 class="banner-introduction-h3"><strong>LOVE COLLECTION</strong></h3>
                    <br>
                    <p class="intro">A love child of '70s New York, the LOVE collection is a symbol of free-spirited love. Its binding closure and screw motif give it true permanence, while diverse interpretations allow for a unique expression of feelings. Lock in your love, forever.
                </div>
            </div>
        </div>
        <!-- banner end -->
        <!-- main start -->
        <div class="main-content">
            <div class="filter-sort">
                <h4 class="soft-heading">Sort By</h4>
                <div class="radio-check-container">
                    <label class="check-label check-soft-price" for="price">
                        <input class="ratio-btn" type="radio" value="low-to-high" name="price" id="">PRICE LOW TO HIGH
                    </label>
                    <label class="check-label check-soft-price" for="price">
                        <input class="ratio-btn" type="radio" value="high-to-low" name="price" id="">PRICE HIGH TO LOW
                    </label>
                </div>
            </div>
            <!-- item-container -->
            <div class="products">
                <div class="choose-page-container">
                    <div class="counter">
                        <p>*Count item here</p>
                    </div>
                    <div class="flex justify-center align-middle w-200">
                        <button id="grid" style="margin-right: 10px;">
                            <p class="mr-10px">
                                Grid <i class="fa fa-windows mr-10"></i>
                            </p>
                        </button>
                        <button id="feed" class="">
                           <p>
                             Feed <i class="fa fa-window-restore"></i>
                           </p>
                        </button>
                    </div>
                    
                </div>
                <div class="products-container">
                    <!-- item -->
                    <a href="/watch/1" style="text-decoration:underline">
                        <div class="product-object">
                            <img class="object-img" src="{{ asset('/img/h2.webp') }}" alt="">
                            <div class="object-section">
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info  info-name"> Ronde Must de Cartier watch</a>
                                </div>
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info">45mm, automatic movement, rose gold,
                                        leather</a>
                                    <h3 class="item-price">$7,199,00</h3>
                                </div>
                            </div>
                            <div class="buy-btn">
                                <a href="" class="discover has-link">Discover</a>
                            </div>
                        </div>
                    </a>
                    
                    <!-- item -->
                    <a href="/watch/1" style="text-decoration:underline">
                        <div class="product-object">
                            <img class="object-img" src="{{ asset('/img/h2.webp') }}" alt="">
                            <div class="object-section">
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info  info-name"> Ronde Must de Cartier watch</a>
                                </div>
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info">45mm, automatic movement, rose gold,
                                        leather</a>
                                    <h3 class="item-price">$199,00</h3>
                                </div>
                            </div>
                            <div class="buy-btn">
                                <a href="" class="discover has-link">Discover</a>
                            </div>
                        </div>
                    </a>
                    <a href="/watch/1" style="text-decoration:underline">
                        <div class="product-object">
                            <img class="object-img" src="{{ asset('/img/h2.webp') }}" alt="">
                            <div class="object-section">
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info  info-name"> Ronde Must de Cartier watch</a>
                                </div>
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info">45mm, automatic movement, rose gold,
                                        leather</a>
                                    <h3 class="item-price">$5,199,00</h3>
                                </div>
                            </div>
                            <div class="buy-btn">
                                <a href="" class="discover has-link">Discover</a>
                            </div>
                        </div>
                    </a>
                    <a href="/watch/1" style="text-decoration:underline">
                        <div class="product-object">
                            <img class="object-img" src="{{ asset('/img/h2.webp') }}" alt="">
                            <div class="object-section">
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info  info-name"> Ronde Must de Cartier watch</a>
                                </div>
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info">45mm, automatic movement, rose gold,
                                        leather</a>
                                    <h3 class="item-price">$1,199,00</h3>
                                </div>
                            </div>
                            <div class="buy-btn">
                                <a href="" class="discover has-link">Discover</a>
                            </div>
                        </div>
                    </a>
                    <a href="/watch/1" style="text-decoration:underline">
                        <div class="product-object">
                            <img class="object-img" src="{{ asset('/img/h2.webp') }}" alt="">
                            <div class="object-section">
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info  info-name"> Ronde Must de Cartier watch</a>
                                </div>
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info">45mm, automatic movement, rose gold,
                                        leather</a>
                                    <h3 class="item-price">$3,199,00</h3>
                                </div>
                            </div>
                            <div class="buy-btn">
                                <a href="" class="discover has-link">Discover</a>
                            </div>
                        </div>
                    </a>
                    <a href="/watch/1" style="text-decoration:underline">
                        <div class="product-object">
                            <img class="object-img" src="{{ asset('/img/h2.webp') }}" alt="">
                            <div class="object-section">
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info  info-name"> Ronde Must de Cartier watch</a>
                                </div>
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info">45mm, automatic movement, rose gold,
                                        leather</a>
                                    <h3 class="item-price">$1,199,00</h3>
                                </div>
                            </div>
                            <div class="buy-btn">
                                <a href="" class="discover has-link">Discover</a>
                            </div>
                        </div>
                    </a>
                    <a href="/watch/1" style="text-decoration:underline">
                        <div class="product-object">
                            <img class="object-img" src="{{ asset('/img/h2.webp') }}" alt="">
                            <div class="object-section">
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info  info-name"> Ronde Must de Cartier watch</a>
                                </div>
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info">45mm, automatic movement, rose gold,
                                        leather</a>
                                    <h3 class="item-price">$199,00</h3>
                                </div>
                            </div>
                            <div class="buy-btn">
                                <a href="" class="discover has-link">Discover</a>
                            </div>
                        </div>
                    </a>
                    <a href="/watch/1" style="text-decoration:underline">
                        <div class="product-object">
                            <img class="object-img" src="{{ asset('/img/h2.webp') }}" alt="">
                            <div class="object-section">
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info  info-name"> Ronde Must de Cartier watch</a>
                                </div>
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info">45mm, automatic movement, rose gold,
                                        leather</a>
                                    <h3 class="item-price">$299,00</h3>
                                </div>
                            </div>
                            <div class="buy-btn">
                                <a href="" class="discover has-link">Discover</a>
                            </div>
                        </div>
                    </a>
                    <a href="/watch/1" style="text-decoration:underline">
                        <div class="product-object">
                            <img class="object-img" src="{{ asset('/img/h2.webp') }}" alt="">
                            <div class="object-section">
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info  info-name"> Ronde Must de Cartier watch</a>
                                </div>
                                <div class="object-section-info">
                                    <a href="" class=" has-link object-info">45mm, automatic movement, rose gold,
                                        leather</a>
                                    <h3 class="item-price">$9,00</h3>
                                </div>
                            </div>
                            <div class="buy-btn">
                                <a href="" class="discover has-link">Discover</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="pagination-image">
            <img class="pagination-img" src="{{ asset('/img/leather.png')}}" alt="">
        </div>
        <!-- pagination start -->
        <ul class="pagination">
        </ul>
        <!-- pagination end -->

        <!-- main end -->
        <div class="space"></div>
        <!-- extra infomation start -->
        <div class="extra-information">
            <div class="complimentary cursor-pointer" onclick="toggleModal()">
                <div class="flex justify-center">
                    <img class="complimentary-img " src="{{ asset('/img/Screenshot_2023-10-16_211957-removebg-preview.png') }}" alt="">
                </div>
                <a href="" class="has-link complimentary-text">COMPLIMENTARY DELIVERY</a>
            </div>
            <div class="complimentary cursor-pointer"  onclick="toggleModal()">
                <div class="flex justify-center">
                    <img class="complimentary-img " src="{{ asset('/img/return.png')}}" alt="">
                </div>
                <a href="" class="has-link complimentary-text">EASY RETURN OR EXCHANGE</a>
            </div>
            <div class="complimentary cursor-pointer"  onclick="toggleModal()">
                <div class="flex justify-center">
                    <img class="complimentary-img " src="{{ asset('/img/wrap.png') }}" alt="">
                </div>
                <a href="" class="has-link complimentary-text">FREE GIFT WRAPPING</a>
            </div>
        </div>
        <!-- extra infomation start -->
        <!-- The Modal - COMPLIMENTARY DELIVERY -->
        <div id="cd_modal" tabindex="-1" aria-hidden="true" class="hidden fixed flex items-center top-0 right-0 left-0 bottom-0  align-middle justify-center" style="z-index: 0;">
            <div class="relative w-full max-w-2xl max-h-full">
                <div class="relative opacity-100 w-600 h-fit bg-white " style="z-index:2">
                    <div class="h-1.5 bg-red-600 m-0"></div>

                    <div class="modal-header text-center relative">
                        <h3 class=" font-bold text-2xl tracking-widest py-5">COMPLIMENTARY DELIVERY</h3>
                        <div class="absolute right-6 top-0" onclick="toggleModal()">
                                <button class="">close</button>
                        </div>
                    </div>
                    <div class="flex mx-2 align-middle h-0.5 bg-slate-700"></div>
                    <div class="modal-body flex flex-col justify-center px-20 py-10">
                        <h1 class="font-bold text-lg">RETURN & EXCHANGE POLICY</h1>
                        <p class="w-90 py-5">You can request a return or exchange of your items within 30 days by contacting Cartier Client Relations Centre.</p>
                        <p>For more information please visit the section <u>Delivery & Returns Exchange Policy</u>.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->
        <div class="space"></div>
        <!-- footer start -->
        <div class="footer">
            <ul class="footer-list">
                <li class="footer-list--item">
                    <h3>CUSTOMER CARE</h3>
                </li>
                <li class="footer-list--item">Contact Us</li>
                <li class="footer-list--item">Call Now : 800 227 8437</li>
                <li class="footer-list--item">FAQ</li>
                <li class="footer-list--item"> TRACK YOUR ORDER</li>
            </ul>
            <ul class="footer-list">
                <li class="footer-list--item">
                    <h3>CUSTOMER CARE</h3>
                </li>
                <li class="footer-list--item">Contact Us</li>
                <li class="footer-list--item">Call Now : 800 227 8437</li>
                <li class="footer-list--item">FAQ</li>
                <li class="footer-list--item"> TRACK YOUR ORDER</li>
            </ul>
            <ul class="footer-list">
                <li class="footer-list--item">
                    <h3>CUSTOMER CARE</h3>
                </li>
                <li class="footer-list--item">Contact Us</li>
                <li class="footer-list--item">Call Now : 800 227 8437</li>
                <li class="footer-list--item">FAQ</li>
                <li class="footer-list--item"> TRACK YOUR ORDER</li>
            </ul>
            <div class="footer-list hasnt-flex">
                <h3 class="footer-list--item">FOLLOW US</h3>
                <div class="icon-link">
                    <a href="" class="footer-list--item icon-link-item"><i class="fa fa-facebook-f"></i></a>
                    <a href="" class="footer-list--item icon-link-item"><i class="fa fa-youtube-play"></i></a>
                    <a href="" class="footer-list--item icon-link-item"><i class="fa fa-instagram"></i></a>
                    <a href="" class="footer-list--item icon-link-item"><i class="fa fa-twitter"></i></a>

                </div>
            </div>
        </div>
        <!-- footer end -->
    </div>
</body>

<script src="{{ asset('js/home.js')}}"></script>



</html>
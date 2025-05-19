
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="language" content="sv">

        <!-- SEO Meta Tags -->
        <title>Mera Konsultbyrå | Redovisning & Bokföring</title>
        <meta name="description" content="Mera Konsultbyrå erbjuder professionella tjänster inom redovisning, bokföring och ekonomisk rådgivning i Sverige. Kontakta oss för skräddarsydda lösningar.">
        <meta name="keywords" content="Mera Konsultbyrå, redovisning, bokföring, ekonomisk rådgivning, företagsekonomi, skatt, moms, konsult, Sverige">
        <meta name="author" content="Mera Konsultbyrå">
        <meta name="robots" content="index, follow">

        <!-- Open Graph (For social media sharing) -->
        <meta property="og:title" content="Mera Konsultbyrå | Redovisning & Bokföring">
        <meta property="og:description" content="Vi erbjuder tjänster inom redovisning, bokföring och ekonomisk rådgivning för företag i Sverige.">
        <meta property="og:image" content="{{ asset('img/logo.png') }}">
        <meta property="og:url" content="https://www.merakonsult.se">
        <meta property="og:type" content="website">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Mera Konsultbyrå | Redovisning & Bokföring">
        <meta name="twitter:description" content="Vi erbjuder professionella tjänster inom redovisning, bokföring och ekonomisk rådgivning i Sverige.">
        <meta name="twitter:image" content="{{ asset('img/logo.png') }}">

        <!-- Preconnect for Performance -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/55b1c7ce83.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Styles & Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Inline Styles -->
        <style>
            .font-league {
                font-family: "League Spartan", sans-serif;
                font-optical-sizing: auto;
                font-weight: 600;
                font-style: normal;
            }

            .font-mont {
                font-family: "Montserrat", sans-serif;
                font-optical-sizing: auto;
                font-weight: normal;
                font-style: normal;
            }
        </style>
    </head>

    <body class="flex flex-col items-center bg-gray-100">
        <!-- ========== HEADER ========== -->
        <header class="fixed inset-x-0 top-0 z-50 flex flex-wrap w-full text-sm md:justify-start md:flex-nowrap">
            <nav class="mt-4 relative md:max-w-2xl w-full bg-white border border-gray-200 shadow-xl rounded-4xl mx-2 py-2.5 md:flex md:items-center md:justify-between md:py-0 md:px-4 md:mx-auto">
                <div class="flex items-center justify-between px-4 md:px-0">
                    <div class="flex flex-col items-center">
                        <img onclick="window.location.href='/'" src="/img/mera-red.png" class="object-contain w-24 h-auto hover:cursor-pointer" alt="" style="width:96px;">
                    </div>

                    <div class="md:hidden">
                        <!-- Toggle Button -->
                        <button type="button" id="navbar-toggle" class="flex items-center justify-center text-gray-500 border border-gray-200 rounded-full hs-collapse-toggle size-7 hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200" aria-expanded="false" aria-controls="navbar-menu" aria-label="Toggle navigation">
                            <i id="menu-open-icon" class="fa-solid fa-bars"></i>
                        </button>
                    </div>
                </div>

                <div id="navbar-menu" class="hidden overflow-hidden transition-all duration-300 ease-in-out hs-collapse max-h-0 md:max-h-none md:block" aria-labelledby="navbar-toggle">
                    <div class="flex flex-col gap-2 py-2 mt-3 md:flex-row md:items-center md:justify-end md:gap-3 md:mt-0 md:py-0 md:ps-7">
                        <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2
                        font-mont focus:outline-hidden
                        {{ request()->is('/') ? 'border-[#b25659] text-[#b25659] font-medium' : 'border-transparent text-gray-500 hover:text-gray-800' }}"
                        href="/" aria-current="page">
                        Hem
                    </a>

                    <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2
                        font-mont focus:outline-hidden
                        {{ request()->is('tjanster') ? 'border-[#b25659] text-[#b25659] font-medium' : 'border-transparent text-gray-500 hover:text-gray-800' }}"
                        href="/tjanster">
                        Tjänster
                    </a>

                    <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2
                        font-mont focus:outline-hidden
                        {{ request()->is('om-oss') ? 'border-[#b25659] text-[#b25659] font-medium' : 'border-transparent text-gray-500 hover:text-gray-800' }}"
                        href="/om-oss">
                        Om Oss
                    </a>

                    </div>
                </div>
            </nav>
        </header>
        <main class="flex flex-col w-full ">
            <div class="flex flex-col w-full min-h-screen p-2 pt-4 bg-gray-100 md:p-10 gap-y-16">

                @if(session('msg'))
                    <div id="toast" class="fixed z-50 w-full max-w-sm transform -translate-x-1/2 -translate-y-1/2 bg-white border border-gray-200 shadow-lg top-28 left-1/2 rounded-4xl">
                        <div class="flex items-center justify-between p-4">
                            <div class="flex items-center">
                                <i class="fa-solid fa-check text-[#b25659] text-2xl"></i>
                                <p id="hs-toast-normal-example-label" class="text-gray-700 font-mont text-md ms-3">
                                    {{session('msg')}}
                                </p>
                                <button onclick="document.getElementById('toast').style.display='none'" class="pl-8 text-gray-500 hover:text-gray-700 hover:cursor-pointer">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif

                <!--HERO-->
                <div style="background-image: url('/img/point.jpg')" class="w-full bg-center bg-cover border border-gray-200 shadow-xl rounded-4xl">
                    <div class="w-full h-full bg-radial-[at_150%_0%] from-transparent from-25% to-black to-90% opacity-95 rounded-4xl flex items-end p-8 pt-96 md:p-12 md:pt-72 lg:pt-96">
                        <div class="w-full border-4 border-[#b25659] py-8 border-x-0">
                            <h1 class="text-5xl tracking-tighter text-white lg:text-7xl md:text-6xl font-league" aria-label="Mera Konsultbyrå">Lite <a class="text-[#b25659]">mera</a> än bara redovisning</h1>
                            <h2 class="text-lg tracking-tighter text-white md:text-2xl font-mont" aria-label="Mera Konsultbyrå">Med lång erfarenhet inom såväl redovisning och affärsutveckling som eget företagande hjälper vi entreprenörer bli bättre företagare. </h2>
                            <!--BUTTON 1-->
                            <button onclick="scrollToSection('CTA')" class="relative hover:cursor-pointer mt-8 inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-white transition duration-300 ease-out border-2 border-[#b25659] rounded-full shadow-md group">
                                <span class="absolute inset-0 flex items-center rounded-4xl justify-center w-full h-full text-white duration-300 -translate-x-full bg-[#b25659] group-hover:translate-x-0 ease"><i class="text-white fa-solid fa-arrow-right"></i></span>
                                <span class="absolute flex items-center justify-center w-full h-full text-xl tracking-tight text-white transition-all duration-300 transform font-league group-hover:translate-x-full ease">Kontakt</span><span class="relative invisible">Kontakt</span>
                            </button>
                            <!--BUTTON 2-->
                            <a href="/om-oss" class="mx-8 relative text-xl text-white cursor-pointer font-league after:bg-[#b25659] after:absolute after:h-0.5 after:w-0
                            after:left-0 after:bottom-[-4px] hover:after:w-full after:transition-all after:duration-250">Om oss</a>
                        </div>
                        <div class="flex-col items-end justify-end hidden w-full md:flex">
                            <div class="flex flex-col">
                                <img src="/img/mera-white.png" class="w-40 bg-cover" alt="Mera konsultbyrå logga" style="width:160px;"></div>
                        </div>
                    </div>
                </div>
                <!--MAIN CONTENT-->
                <div class="max-w-[1500px] mx-auto w-full space-y-32 bg-gray-100">

                    <!--SERVICES SECTION-->
                    <div class="flex flex-col gap-4 mb-12">
                        <h2 class="text-4xl tracking-tighter text-[#b25659] lg:text-6xl md:text-5xl font-league" aria-label="Våra tjänster">Våra tjänster.</h2>
                        <div class="grid w-full grid-cols-1 md:grid-cols-[1fr_1.2fr_1fr] gap-6">
                            <!--CARD-->
                            <div onclick="window.location.href='/tjanster'" class="w-full col-span-1 my-4 transition-all duration-300 bg-white border border-gray-200 shadow-sm rounded-4xl group hover:cursor-pointer hover:scale-102 hover:shadow-2xl">
                                <div style="background-image: url('/img/hero.jpg')" class="bg-center bg-cover rounded-b-none h-52 rounded-4xl">
                                    <div class="w-full h-full bg-radial-[at_150%_0%] from-transparent from-25% to-black to-90% opacity-95 rounded-4xl px-6 py-4 flex flex-col justify-end rounded-b-none">
                                        <div class="border-b-4 w-1/6 md:w-1/8 mb-2 border-[#b25659]"></div>
                                        <h3 class="text-2xl tracking-tighter text-white lg:text-4xl md:text-3xl font-league" aria-label="Våra tjänster">Rådgivning</h3>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <p class="text-gray-800 text- font-mont" aria-label="Mera Konsultbyrå">Vår filosofi är att bättre företagande börjar med rätt stöd. Vi erbjuder rådgivning i stort och smått – från val av bolagsform och uppstart till hur du kan utveckla din verksamhet och ta nästa steg. Oavsett var du befinner dig i din företagarresa finns vi vid din sida med insikter, bollplank och praktisk hjälp. Vi tror på ett nära samarbete där du får trygghet, tydlighet och inspiration att växa – både som företagare och som person.</p>
                                    <div class="flex justify-end w-full pt-2">
                                        <a href="#" class="relative text-xl text-gray-800 cursor-pointer font-league after:bg-[#b25659] after:absolute after:h-0.5 after:w-0
                                        after:left-0 after:bottom-[-4px] group-hover:after:w-full after:transition-all after:duration-250">Läs mer &rarr;</a>
                                    </div>
                                </div>
                            </div>
                            <!--CARD-->

                            <div onclick="window.location.href='/tjanster'" class="w-full col-span-1 transition-all duration-300 bg-white border border-gray-200 shadow-sm rounded-4xl group hover:cursor-pointer hover:scale-102 hover:shadow-2xl">
                                <div style="background-image: url('/img/laugh.jpg')" class="h-64 bg-bottom bg-cover rounded-b-none rounded-4xl">
                                    <div class="w-full h-full bg-radial-[at_150%_0%] from-transparent from-25% to-black to-90% opacity-95 rounded-4xl px-6 py-4 flex flex-col justify-end rounded-b-none">
                                        <div class="border-b-4 w-1/6 md:w-1/8 mb-2 border-[#b25659]"></div>
                                        <h3 class="text-2xl tracking-tighter text-white lg:text-4xl md:text-3xl font-league" aria-label="Våra tjänster">Redovisning</h3>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <p class="text-gray-800 text- font-mont" aria-label="Mera Konsultbyrå">Får du migrän av papper och siffror? Lugn, vi tar hand om hela din redovisning – allt från löpande bokföring och löner till bokslut och årsredovisning. Oavsett om du vill lämna över allt eller bara vissa delar skräddarsyr vi en lösning som passar dig och ditt företag.
                                        <br><br>Vi jobbar digitalt och effektivt, men alltid med en personlig kontakt som har koll på både siffrorna och verksamheten. Så att du kan fokusera på det du gör bäst – medan vi håller ordning på resten.
                                    </p>
                                    <div class="flex justify-end w-full pt-2">
                                        <a href="#" class="relative text-xl text-gray-800 cursor-pointer font-league after:bg-[#b25659] after:absolute after:h-0.5 after:w-0
                                        after:left-0 after:bottom-[-4px] group-hover:after:w-full after:transition-all after:duration-250">Läs mer &rarr;</a>
                                    </div>
                                </div>
                            </div>
                            <!--CARD-->
                            <div onclick="window.location.href='/tjanster'" class="w-full col-span-1 my-4 transition-all duration-300 bg-white border border-gray-200 shadow-sm group rounded-4xl hover:cursor-pointer hover:scale-102 hover:shadow-2xl">
                                <div style="background-image: url('/img/type.jpg')" class="bg-cover rounded-b-none h-52 rounded-4xl">
                                    <div class="w-full h-full bg-radial-[at_150%_0%] from-transparent from-25% to-black to-90% opacity-95 rounded-4xl px-6 py-4 flex flex-col justify-end rounded-b-none">
                                        <div class="border-b-4 w-1/6 md:w-1/8 mb-2 border-[#b25659]"></div>
                                        <h3 class="text-2xl tracking-tighter text-white lg:text-4xl md:text-3xl font-league" aria-label="Våra tjänster">Skatt</h3>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <p class="text-gray-800 text- font-mont" aria-label="Mera Konsultbyrå">Skattefrågor kan kännas snåriga – även för den mest rutinerade företagaren. Vi hjälper dig att förstå reglerna, undvika fallgropar och se till att du betalar rätt skatt, varken mer eller mindre. Oavsett om du är privatperson, driver enskild firma eller aktiebolag finns vi här som ett stöd i både deklarationer och strategisk skatteplanering. Med rätt hjälp blir det enklare att fatta kloka beslut, i rätt tid.
                                    </p>
                                    <div class="flex justify-end w-full pt-2">
                                        <a href="/tjanster" class="relative text-xl text-gray-800 cursor-pointer font-league after:bg-[#b25659] after:absolute after:h-0.5 after:w-0
                                        after:left-0 after:bottom-[-4px] group-hover:after:w-full after:transition-all after:duration-250">Läs mer &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center mt-8 mb-4">
                            <button onclick="scrollToSection('CTA')" class="relative hover:cursor-pointer inline-flex items-center justify-center p-4 px-6 py-3 bg-white overflow-hidden font-medium text-white transition duration-300 ease-out border-2 border-[#b25659] rounded-full shadow-lg group">
                                <span class="absolute inset-0 flex items-center rounded-4xl justify-center w-full h-full text-white duration-300 -translate-x-full bg-[#b25659] group-hover:translate-x-0 ease"><i class="text-white fa-solid fa-arrow-right"></i></span>
                                <span class="absolute flex items-center justify-center w-full h-full text-xl tracking-tight text-[#b25659] transition-all duration-300 transform font-league group-hover:translate-x-full ease">Kontakta Oss</span><span class="relative invisible">Kontakta Oss</span>
                            </button>
                        </div>
                    </div>

                    <!--ABOUT SECTION-->
                    <div class="flex flex-col gap-4 mb-32">
                        <h2 class="text-4xl tracking-tighter text-[#b25659] lg:text-6xl md:text-5xl font-league">Mera Konsultbyrå.</h2>

                        <div class="grid w-full grid-cols-2 grid-rows-2 gap-2 md:gap-6 md:grid-cols-3">
                            <!--CARD-->
                            <div style="background-image: url('/img/annakarin.jpg')" class="flex flex-col justify-between w-full bg-[center_top_-1rem] md:bg-[center_top_-2rem] lg:bg-[center_top_-6rem] bg-cover border border-gray-200 shadow-sm min-h-64 rounded-4xl">
                                <div class="w-full h-full bg-radial-[at_150%_0%] from-transparent from-55% to-black to-90% opacity-95 rounded-4xl p-6 flex flex-col justify-end">
                                <div>
                                    <h2 class="tracking-tighter text-white text-md md:text-xl font-mont" aria-label="Mera Konsultbyrå">Affärskonsult</h2>
                                    <h2 class="text-3xl tracking-tighter text-white lg:text-5xl md:text-4xl font-league">Anna-Karin Nilsson</h2>
                                </div>
                                </div>
                            </div>
                            <!--CARD-->
                            <div style="background-image: url('/img/elise.jpg')" class="flex flex-col justify-between w-full bg-[center_top_-1rem] md:bg-[center_top_-2rem] lg:bg-[center_top_-6rem] bg-cover border border-gray-200 shadow-sm min-h-64 rounded-4xl">
                                <div class="w-full h-full bg-radial-[at_150%_0%] from-transparent from-55% to-black to-90% opacity-95 rounded-4xl p-6 flex flex-col justify-end">
                                <div>
                                    <h2 class="tracking-tighter text-white text-md md:text-xl font-mont" aria-label="Mera Konsultbyrå">Redovisningskonsult</h2>
                                    <h2 class="text-3xl tracking-tighter text-white lg:text-5xl md:text-4xl font-league">Elise Nilsson</h2>
                                </div>
                                </div>
                            </div>
                            <!--CARD-->
                            <div style="background-image: url('/img/annie.jpg')" class="flex flex-col justify-between w-full bg-[center_top_-1rem] md:bg-[center_top_-2rem] lg:bg-[center_top_-6rem] bg-cover border border-gray-200 shadow-sm min-h-64 rounded-4xl">
                                <div class="w-full h-full bg-radial-[at_150%_0%] from-transparent from-55% to-black to-90% opacity-95 rounded-4xl p-6 flex flex-col justify-end">
                                <div>
                                    <h2 class="tracking-tighter text-white text-md md:text-xl font-mont" aria-label="Mera Konsultbyrå">Redovisningskonsult</h2>
                                    <h2 class="text-3xl tracking-tighter text-white lg:text-5xl md:text-4xl font-league">Annie Johansson</h2>
                                </div>
                                </div>
                            </div>
                            <!--CARD-->
                            <div style="background-image: url('/img/moa.jpg')" class="flex flex-col justify-between w-full bg-[center_top_-1rem] md:bg-[center_top_-2rem] lg:bg-[center_top_-6rem] bg-cover border border-gray-200 shadow-sm min-h-64 rounded-4xl">
                                <div class="w-full h-full bg-radial-[at_150%_0%] from-transparent from-55% to-black to-90% opacity-95 rounded-4xl p-6 flex flex-col justify-end">
                                <div>
                                    <h2 class="tracking-tighter text-white text-md md:text-xl font-mont" aria-label="Mera Konsultbyrå">Redovisningskonsult</h2>
                                    <h2 class="text-3xl tracking-tighter text-white lg:text-5xl md:text-4xl font-league">Moa Lagerqvist</h2>
                                </div>
                                </div>
                            </div>
                            <!--CARD-->
                            <div style="background-image: url('/img/bosse.jpg')" class="flex flex-col justify-between w-full bg-[center_top_-1rem] md:bg-[center_top_-2rem] lg:bg-[center_top_-6rem] bg-cover border border-gray-200 shadow-sm min-h-64 rounded-4xl">
                                <div class="w-full h-full bg-radial-[at_150%_0%] from-transparent from-55% to-black to-90% opacity-95 rounded-4xl p-6 flex flex-col justify-end">
                                <div>
                                    <h2 class="tracking-tighter text-white text-md md:text-xl font-mont" aria-label="Mera Konsultbyrå">Glädjespridare</h2>
                                    <h2 class="text-3xl tracking-tighter text-white lg:text-5xl md:text-4xl font-league">Bosse</h2>
                                </div>
                                </div>
                            </div>
                            <!--READ MORE CARD-->
                            <div onclick="window.location.href='/om-oss'" class="hover:cursor-pointer group w-full min-h-48 col-span-1 bg-radial-[at_55%_25%] shadow-lg border border-gray-200  from-[#db8a8f] from-25% to-[#b25659] to-90% rounded-4xl px-6 py-6 flex flex-col hover:scale-102 transition-all duration-300 hover:shadow-3xl">

                                <div  class="flex items-end justify-end w-full pb-6">
                                    <div>
                                        <img src="/img/mera-white.png" class="w-24 bg-cover" style="width:96px;">
                                    </div>
                                </div>
                                <div class="flex items-center justify-around w-full md:pr-40">
                                    <div class="flex flex-col items-center justify-center pb-4 md:pb-0">
                                        <h2 class="text-4xl tracking-tighter text-center text-white lg:text-6xl md:text-5xl font-league" >20+</h2>
                                        <h2 class="text-lg tracking-tighter text-center text-white md:text-xl font-mont" aria-label="Mera Konsultbyrå">Års erfarenhet</h2>
                                    </div>
                                </div>
                                <div  class="flex items-end justify-end w-full">
                                    <a href="#" class="relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-white transition duration-300 ease-out bg-white rounded-full shadow-xl">
                                        <span class="absolute inset-0 flex items-center rounded-4xl justify-center w-full h-full text-white duration-300 -translate-x-full bg-[#b25659] group-hover:translate-x-0 ease">Läs mer<i class="ml-2 text-white fa-solid fa-arrow-right"></i></span>
                                        <span class="absolute flex items-center justify-center w-full h-full text-xl tracking-tight text-[#b25659] transition-all duration-300 transform font-league group-hover:translate-x-full ease">Läs mer</span><span class="relative invisible">Våra tjänster</span>
                                    </a>
                                </div>
                            </div>
                            <!--REVIEWCARD-->
                            <div class="grid w-full grid-cols-1 gap-8 p-6 mt-2 bg-white shadow-sm col-span-full sm:grid-cols-2 lg:grid-cols-4 rounded-4xl">
                                <div class="flex flex-col items-center justify-center">
                                    <i class="mb-4 text-2xl text-gray-800 fa-solid fa-user"></i>
                                    <h4 class="text-lg font-bold text-gray-800 font-mont" aria-label="Mera Konsultbyrå">Qia Hjelmäng</h4>
                                    <p class="text-center text-gray-800 font-mont" aria-label="Mera Konsultbyrå">“Rekommenderar alla smarta företagare att välja MERA – både bokföring och coaching! De besitter bred kompetens och driv – ett måste för en företagare att ha i ryggen”</p>
                                    <div class="flex items-start gap-1 pt-4">
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                    </div>
                                </div>

                                <div class="flex flex-col items-center justify-center">
                                    <i class="mb-4 text-2xl text-gray-800 fa-solid fa-user"></i>
                                    <h4 class="text-lg font-bold text-gray-800 font-mont" aria-label="Mera Konsultbyrå">Tania Markarian</h4>
                                    <p class="text-center text-gray-800 font-mont" aria-label="Mera Konsultbyrå">"De är raka, tydliga och aldrig dömande – oavsett om jag glömt något eller ställer "dumma" frågor. Det gör att jag faktiskt vågar ta hjälp i tid."</p>
                                    <div class="flex items-start gap-1 pt-4">
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                    </div>
                                </div>

                                <div class="flex flex-col items-center justify-center">
                                    <i class="mb-4 text-2xl text-gray-800 fa-solid fa-user"></i>
                                    <h4 class="text-lg font-bold text-gray-800 font-mont" aria-label="Mera Konsultbyrå">Yasir Jaafar</h4>
                                    <p class="text-center text-gray-800 font-mont" aria-label="Mera Konsultbyrå">"Jag gillar att jag kan släppa allt det administrativa och veta att de har koll. Det känns inte som ett stort företag med massa mellanled, behöver jag hjälp är det bara att ringa."</p>
                                    <div class="flex items-start gap-1 pt-4">
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                    </div>
                                </div>

                                <div class="flex flex-col items-center justify-center">
                                    <i class="mb-4 text-2xl text-gray-800 fa-solid fa-user"></i>
                                    <h4 class="text-lg font-bold text-gray-800 font-mont" aria-label="Mera Konsultbyrå">Zoltán Sumi</h4>
                                    <p class="text-center text-gray-800 font-mont" aria-label="Mera Konsultbyrå">“Mera Konsultbyrå ställer alltid upp för mig, är professionella och nogranna. Kan varmt rekommendera för alla som driver ett företag.”</p>
                                    <div class="flex items-start gap-1 pt-4">
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                        <i class="fa-solid fa-star text-[#b25659]"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- USP SECTION-->
                    <div class="flex flex-col gap-4 mb-32">
                        <h2 class="text-4xl tracking-tighter text-[#b25659] lg:text-6xl md:text-5xl font-league">Inte din vanliga redovisningskonsult.</h2>
                        <div class="flex flex-col w-full gap-6 md:flex-row">
                            <div class="w-full p-8 bg-white shadow-sm rounded-4xl">
                                <p class="text-gray-800 font-mont" aria-label="Mera Konsultbyrå">Vi kan stolt säga att vi inte är din stereotypa redovisningskonsult. Hos oss handlar det om mer än bara bokföring och att skicka in rätt siffror i tid. Vi vill vara en aktiv del av din resa – någon du kan bolla idéer med, få stöd av och växa tillsammans med.
                                    <br><br>Vi brinner för att hjälpa våra kunder på riktigt. Det betyder att vi inte nöjer oss med att bara ta emot dina papper – vi vill förstå din verksamhet, dina mål och dina utmaningar. Med regelbunden rådgivning, tydlig rapportering och ett nära samarbete kan vi hjälpa dig att fatta bättre beslut i rätt tid – inte i efterhand.
                                    <br><br>Tillsammans ser vi till att ditt företagande blir både enklare, tryggare och mer lönsamt.
                                    </p>

                            </div>
                            <div style="background-image: url('/img/point.jpg')" class="w-full bg-center bg-cover shadow-sm rounded-4xl"></div>
                        </div>
                    </div>

                    <!-- CTA SECTION-->
                    <div id="CTA" class="flex flex-col gap-4 mb-20 bg-white rounded-4xl">

                        <div class="relative bg-linear-to-bl from-[#f7e6e7] from-20% via-transparent rounded-4xl border border-gray-200 shadow-sm">
                            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                            <!-- Grid -->
                            <div class="grid items-center gap-8 md:grid-cols-2 lg:gap-12">
                                <div>
                                <h1 class="text-sm font-medium hidden md:inline-block text-transparent font-mont bg-clip-text bg-linear-to-l from-[#b25659] to-[#db9a9c]">Mera Konusultbyrå</h1>
                                <div class="max-w-2xl mt-8 md:mb-12">
                                    <h3 class="text-3xl tracking-tighter text-[#b25659] lg:text-5xl md:text-4xl font-league">Boka ett första kostnadsfritt möte idag!</h3>
                                    <p class="pt-2 text-gray-800 font-mont" aria-label="Mera Konsultbyrå">Vi är en personlig och modern redovisningsbyrå i Borås med fokus på digitala lösningar - alltid med ett personligt bemötande.</p>
                                </div>

                                <!-- Bulletpoints -->
                                <div class="flex flex-col gap-4">
                                    <p class="font-bold text-gray-800 font-mont" aria-label="Mera Konsultbyrå">Vi erbjuder tjänster inom:</p>
                                    <div class="flex items-center gap-4">
                                        <i class="fa-solid fa-minus text-[#b25659]"></i>
                                        <p class="text-gray-800 font-mont" aria-label="Mera Konsultbyrå">Redovisning</p>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <i class="fa-solid fa-minus text-[#b25659]"></i>
                                        <p class="text-gray-800 font-mont" aria-label="Mera Konsultbyrå">Rådgivning</p>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <i class="fa-solid fa-minus text-[#b25659]"></i>
                                        <p class="text-gray-800 font-mont" aria-label="Mera Konsultbyrå">Skatt</p>
                                    </div>
                                </div>

                                </div>

                                <div>
                                <!-- Form -->
                                <form method="POST" action="/form" id="myForm">
                                    @csrf
                                    <div class="lg:max-w-lg lg:mx-auto lg:me-0 ms-auto">
                                        <!-- Card -->
                                        <div class="flex flex-col p-4 bg-white shadow-lg sm:p-6 rounded-3xl">
                                            <div class="text-center">
                                                <h1 class="block text-2xl text-gray-800 font-league">Skicka in!</h1>
                                            </div>
                                            <div class="mt-4">
                                                <div class="grid grid-cols-1 gap-4">
                                                    <div>
                                                        <div class="w-full">
                                                            <label for="name" class="block mb-2 text-sm font-medium font-mont">Namn</label>
                                                            <input type="text" name="name" id="name" class="py-2.5 font-mont sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-[#b25659] focus:ring-[#b25659] disabled:opacity-50 disabled:pointer-events-none" placeholder="John Svensson">
                                                            @error('name')
                                                                <p class="block my-2 text-sm font-medium text-red-500 font-mont">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="w-full">
                                                            <label for="email" class="block mb-2 text-sm font-medium font-mont">Mejladdress</label>
                                                            <input type="email" name="email" id="email" class="py-2.5 font-mont sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-[#b25659] focus:ring-[#b25659] disabled:opacity-50 disabled:pointer-events-none" placeholder="john@gmail.com">
                                                            @error('email')
                                                                <p class="block my-2 text-sm font-medium text-red-500 font-mont">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="w-full">
                                                            <label for="surname" class="block mb-2 text-sm font-medium font-mont">Meddelande</label>
                                                            <textarea name="surname" id="surname" class="py-2.5 font-mont sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-[#b25659] focus:ring-[#b25659] disabled:opacity-50 disabled:pointer-events-none h-20" placeholder="Meddelande"></textarea>
                                                            @error('surname')
                                                                <p class="block my-2 text-sm font-medium text-red-500 font-mont">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <!-- Google reCAPTCHA widget -->
                                                        <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                                                        @if ($errors->has('g-recaptcha-response'))
                                                            <p class="block my-2 text-sm font-medium text-red-500 font-mont">{{ $errors->first('g-recaptcha-response') }}</p>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="mt-8">
                                                    <button type="submit" id="submitButton" class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-white bg-[#b25659] border border-transparent rounded-lg gap-x-2 hover:cursor-pointer focus:outline-hidden hover:scale-102 transition-all duration-300 disabled:opacity-50 font-mont disabled:pointer-events-none">Skicka</button>
                                                </div>
                                                <div class="flex items-center py-2 my-4 text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6">Eller</div>
                                                <div class="flex items-center justify-center w-full pb-2">
                                                    <p class="text-sm text-gray-600">Kontakta specifik person?<a class="font-medium text-[#b25659] decoration-2 hover:underline focus:outline-hidden text-center focus:underline" href="/om-oss"> Läs mer här</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- Google reCAPTCHA script -->
                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                </div>
                            </div>

                            <!-- Clients Section
                            <div class="mt-6 md:mt-12 py-3 flex items-center text-sm text-gray-800 gap-x-1.5 after:flex-1 after:border-t after:border-gray-200 after:ms-6">
                                <span class="font-semibold text-transparent bg-clip-text bg-linear-to-l from-[#b25659] to-[#b25659]">150+</span>
                                företag litar på Mera Konsultbyrå
                            </div>

                            Clients
                            <div class="flex flex-wrap items-center justify-center gap-x-6 sm:gap-x-12 lg:gap-x-24">
                                <svg class="w-16 h-auto py-3 text-gray-500 lg:py-5 md:w-20 lg:w-24" enable-background="new 0 0 2499 614" viewBox="0 0 2499 614" xmlns="http://www.w3.org/2000/svg"><path d="m431.7 0h-235.5v317.8h317.8v-235.5c0-45.6-36.7-82.3-82.3-82.3zm-308.9 0h-40.5c-45.6 0-82.3 36.7-82.3 82.3v40.5h122.8zm-122.8 196.2h122.8v122.8h-122.8zm392.5 317.8h40.5c45.6 0 82.3-36.7 82.3-82.3v-39.2h-122.8zm-196.3-121.5h122.8v122.8h-122.8zm-196.2 0v40.5c0 45.6 36.7 82.3 82.3 82.3h40.5v-122.8zm828-359.6h-48.1v449.4h254.5v-43h-206.4zm360.8 119c-93.7 0-159.5 69.6-159.5 169.6v11.5c1.3 43 20.3 83.6 51.9 113.9 30.4 27.9 69.6 44.3 111.4 44.3h6.3c44.3 0 86.1-16.5 119-44.3l1.3-1.3-21.5-35.4-2.5 1.3c-26.6 24.1-59.5 38-94.9 38-58.2 0-117.7-38-121.5-122.8h243.1v-2.5s1.3-15.2 1.3-22.8c-.3-91.2-53.4-149.5-134.4-149.5zm-108.9 134.2c10.1-57 51.9-93.7 106.3-93.7 40.5 0 84.8 24.1 88.6 93.7zm521.6-96.2v16.5c-20.3-34.2-58.2-55.7-97.5-55.7h-3.8c-86.1 0-145.6 68.4-145.6 168.4 0 101.3 57 169.6 141.8 169.6 67.1 0 97.5-40.5 107.6-58.2v49.4h45.6v-447h-46.8v157zm-98.8 257c-59.5 0-98.7-50.6-98.7-126.6 0-73.4 41.8-125.3 100-125.3 49.4 0 98.7 39.2 98.7 125.3 0 93.7-51.9 126.6-100 126.6zm424.1-250.7v2.5c-8.9-15.2-36.7-48.1-103.8-48.1-84.8 0-140.5 64.6-140.5 163.3s58.2 165.8 144.3 165.8c46.8 0 78.5-16.5 100-50.6v44.3c0 62-39.2 97.5-108.9 97.5-29.1 0-59.5-7.6-86.1-21.5l-2.5-1.3-17.7 39.2 2.5 1.3c32.9 16.5 69.6 25.3 105.1 25.3 74.7 0 154.4-38 154.4-143.1v-311.3h-46.8zm-93.7 241.8c-62 0-102.5-48.1-102.5-122.8 0-76 35.4-119 96.2-119 67.1 0 98.7 39.2 98.7 119 1.3 78.5-31.6 122.8-92.4 122.8zm331.7-286.1c-93.7 0-158.2 69.6-158.2 168.4v11.4c1.3 43 20.3 83.6 51.9 113.9 30.4 27.9 69.6 44.3 111.4 44.3h6.3c44.3 0 86.1-16.5 119-44.3l1.3-1.3-22.8-35.4-2.5 1.3c-26.6 24.1-59.5 38-94.9 38-58.2 0-117.7-38-121.5-122.8h244.2v-2.5s1.3-15.2 1.3-22.8c0-89.9-53.2-148.2-135.5-148.2zm-107.6 134.2c10.1-57 51.9-93.7 106.3-93.7 40.5 0 84.8 24.1 88.6 93.7zm440.6-127.9c-6.3-1.3-11.4-1.3-17.7-2.5-44.3 0-81 27.9-100 74.7v-72.2h-46.8l1.3 320.3v2.5h48.1v-135.4c0-20.3 2.5-41.8 8.9-60.8 15.2-49.4 49.4-81 89.9-81 5.1 0 10.1 0 15.2 1.3h2.5v-46.8z" fill="currentColor"/></svg>
                                <svg class="w-16 h-auto py-3 text-gray-500 lg:py-5 md:w-20 lg:w-24" xmlns="http://www.w3.org/2000/svg" viewBox="-4.126838974812941 0.900767442746961 939.436838974813 230.18142889845947" width="2500" height="607"><path d="M667.21 90.58c-13.76 0-23.58 4.7-28.4 13.6l-2.59 4.82V92.9h-22.39v97.86h23.55v-58.22c0-13.91 7.56-21.89 20.73-21.89 12.56 0 19.76 7.77 19.76 21.31v58.8h23.56v-63c0-23.3-12.79-37.18-34.22-37.18zm-114.21 0c-27.79 0-45 17.34-45 45.25v13.74c0 26.84 17.41 43.51 45.44 43.51 18.75 0 31.89-6.87 40.16-21l-14.6-8.4c-6.11 8.15-15.87 13.2-25.55 13.2-14.19 0-22.66-8.76-22.66-23.44v-3.89h65.73v-16.23c0-26-17.07-42.74-43.5-42.74zm22.09 43.15h-44.38v-2.35c0-16.11 7.91-25 22.27-25 13.83 0 22.09 8.76 22.09 23.44zm360.22-56.94V58.07h-81.46v18.72h28.56V172h-28.56v18.72h81.46V172h-28.57V76.79zM317.65 55.37c-36.38 0-59 22.67-59 59.18v19.74c0 36.5 22.61 59.18 59 59.18s59-22.68 59-59.18v-19.74c-.01-36.55-22.65-59.18-59-59.18zm34.66 80.27c0 24.24-12.63 38.14-34.66 38.14S283 159.88 283 135.64v-22.45c0-24.24 12.64-38.14 34.66-38.14s34.66 13.9 34.66 38.14zm98.31-45.06c-12.36 0-23.06 5.12-28.64 13.69l-2.53 3.9V92.9h-22.4v131.53h23.56v-47.64l2.52 3.74c5.3 7.86 15.65 12.55 27.69 12.55 20.31 0 40.8-13.27 40.8-42.93v-16.64c0-21.37-12.63-42.93-41-42.93zM468.06 149c0 15.77-9.2 25.57-24 25.57-13.8 0-23.43-10.36-23.43-25.18v-14.72c0-15 9.71-25.56 23.63-25.56 14.69 0 23.82 9.79 23.82 25.56zm298.47-90.92L719 190.76h23.93l9.1-28.44h54.64l.09.28 9 28.16h23.92L792.07 58.07zm-8.66 85.53l21.44-67.08 21.22 67.08zM212.59 95.12a57.27 57.27 0 0 0-4.92-47.05 58 58 0 0 0-62.4-27.79A57.29 57.29 0 0 0 102.06 1a57.94 57.94 0 0 0-55.27 40.14A57.31 57.31 0 0 0 8.5 68.93a58 58 0 0 0 7.13 67.94 57.31 57.31 0 0 0 4.92 47A58 58 0 0 0 83 211.72 57.31 57.31 0 0 0 126.16 231a57.94 57.94 0 0 0 55.27-40.14 57.3 57.3 0 0 0 38.28-27.79 57.92 57.92 0 0 0-7.12-67.95zM126.16 216a42.93 42.93 0 0 1-27.58-10c.34-.19 1-.52 1.38-.77l45.8-26.44a7.43 7.43 0 0 0 3.76-6.51V107.7l19.35 11.17a.67.67 0 0 1 .38.54v53.45A43.14 43.14 0 0 1 126.16 216zm-92.59-39.54a43 43 0 0 1-5.15-28.88c.34.21.94.57 1.36.81l45.81 26.45a7.44 7.44 0 0 0 7.52 0L139 142.52v22.34a.67.67 0 0 1-.27.6l-46.3 26.72a43.14 43.14 0 0 1-58.86-15.77zm-12-100A42.92 42.92 0 0 1 44 57.56V112a7.45 7.45 0 0 0 3.76 6.51l55.9 32.28L84.24 162a.68.68 0 0 1-.65.06L37.3 135.33a43.13 43.13 0 0 1-15.77-58.87zm159 37l-55.9-32.28L144 70a.69.69 0 0 1 .65-.06l46.29 26.73a43.1 43.1 0 0 1-6.66 77.76V120a7.44 7.44 0 0 0-3.74-6.54zm19.27-29c-.34-.21-.94-.57-1.36-.81L152.67 57.2a7.44 7.44 0 0 0-7.52 0l-55.9 32.27V67.14a.73.73 0 0 1 .28-.6l46.29-26.72a43.1 43.1 0 0 1 64 44.65zM78.7 124.3l-19.36-11.17a.73.73 0 0 1-.37-.54V59.14A43.09 43.09 0 0 1 129.64 26c-.34.19-.95.52-1.38.77l-45.8 26.44a7.45 7.45 0 0 0-3.76 6.51zm10.51-22.67l24.9-14.38L139 101.63v28.74l-24.9 14.38-24.9-14.38z" fill="currentColor"/></svg>
                                <svg class="w-16 h-auto py-3 text-gray-500 lg:py-5 md:w-20 lg:w-24" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 88 22" xml:space="preserve" enable-background="new 0 0 88 22"><path d="M36.3 14.6a7.3 7.3 0 0 1-5.6 2.8c-3.8 0-6.8-2.7-6.8-6.2a6 6 0 0 1 2-4.5A6 6 0 0 1 30.5 5c2.2 0 4.3 1 5.6 2.8l-2.5 1.8a3.7 3.7 0 0 0-3.1-1.8 3.5 3.5 0 0 0-3.5 3.5c.1 2 1.7 3.5 3.6 3.5 1.3 0 2.5-.6 3.2-1.7l2.5 1.5z" fill="currentColor"/><path d="M37.7 0H40.8V17.1H37.7z" fill="currentColor"/><path d="M49.1 14.7c2 0 3.7-1.6 3.8-3.6-.1-2-1.8-3.6-3.8-3.6s-3.7 1.6-3.8 3.6c.1 2 1.7 3.6 3.8 3.6m0-9.8c1.7-.1 3.4.5 4.7 1.7 1.3 1.2 2 2.8 2.1 4.5a6.4 6.4 0 0 1-2.1 4.5 6.4 6.4 0 0 1-4.7 1.7c-3.8 0-6.8-2.7-6.8-6.2s3-6.2 6.8-6.2" fill="currentColor"/><path d="M55.3 5.1 59 5.1 62 11.5 65.2 5.1 68.6 5.1 62 17.8z" fill="currentColor"/><path d="M77.5 9.4a3 3 0 0 0-2.9-1.9c-1.3 0-2.5.7-3.1 1.9h6zm2 6.3a7 7 0 0 1-4.6 1.6c-3.8 0-6.8-2.7-6.8-6.2 0-1.7.7-3.3 1.9-4.5a6 6 0 0 1 4.6-1.7c1.7-.1 3.3.6 4.5 1.8s1.8 2.8 1.7 4.5v.8h-9.6a3.9 3.9 0 0 0 6.5 1.5l1.8 2.2zm2.8-5.3c0-2.9 2.2-5.2 5.7-5.2V8c-.7 0-1.5.3-2 .8s-.7 1.3-.6 2v6.3h-3.1v-6.7z" fill="currentColor"/><path d="M9.7 5.6a5 5 0 0 0-8.3-3.5C0 3.5-.4 5.6.3 7.4s2.5 3 4.5 3h4.9V5.6zm1.4 0a5 5 0 0 1 8.3-3.5c1.4 1.4 1.8 3.5 1.1 5.3s-2.5 3-4.5 3h-4.9V5.6zm0 11a5 5 0 0 0 8.3 3.5c1.4-1.4 1.8-3.5 1.1-5.3s-2.5-3-4.5-3h-4.9v4.8zm-6.3 3.5c1.9 0 3.5-1.5 3.5-3.5v-3.5H4.8c-1.9 0-3.5 1.5-3.5 3.5s1.6 3.5 3.5 3.5zm4.9-3.5a5 5 0 0 1-8.3 3.5C0 18.7-.4 16.6.3 14.8s2.5-3 4.5-3h4.9v4.8z" fill="currentColor"/></svg>
                                <svg class="w-16 h-auto py-3 text-gray-500 lg:py-5 md:w-20 lg:w-24" viewBox="0 -8.881784197001252e-16 267.51517722360785 65.24679557585003" xmlns="http://www.w3.org/2000/svg" width="2500" height="610"><path d="M263.043 56.411a4.418 4.418 0 1 0 .085 0zm0 8.33a3.874 3.874 0 1 1 3.809-3.938v.065a3.791 3.791 0 0 1-3.708 3.871h-.1m-16.96-9.535h-9.6V40.17c0-3.585-.064-8.2-4.993-8.2-5 0-5.765 3.906-5.765 7.939v15.294h-9.6V24.287h9.216v4.225h.129a10.1 10.1 0 0 1 9.093-4.994c9.73 0 11.524 6.4 11.524 14.726zm-40.79-35.143a5.571 5.571 0 1 1 5.57-5.572 5.571 5.571 0 0 1-5.57 5.572m4.8 35.143h-9.61V24.287h9.61zM250.87.004h-55.21a4.728 4.728 0 0 0-4.781 4.67v55.439a4.731 4.731 0 0 0 4.781 4.675h55.21a4.741 4.741 0 0 0 4.8-4.675V4.67a4.738 4.738 0 0 0-4.8-4.67m-86.12 31.749c-4.8 0-7.68 3.205-7.68 7.875s2.879 7.878 7.68 7.878 7.687-3.2 7.687-7.878-2.881-7.875-7.687-7.875m16.525 23.437h-8.838v-4.1h-.131a12.071 12.071 0 0 1-9.544 4.868c-9.224 0-15.3-6.657-15.3-16.071 0-8.646 5.377-16.585 14.216-16.585 3.973 0 7.684 1.087 9.861 4.1h.126V9.577h9.609zm-46.139-19.048a5.756 5.756 0 0 0-5.894-5.89 6.406 6.406 0 0 0-6.784 5.89zm8.132 13.7a16.909 16.909 0 0 1-13.128 6.151c-9.6 0-17.286-6.408-17.286-16.331s7.685-16.328 17.286-16.328c8.973 0 14.6 6.4 14.6 16.328v3.01h-22.282a7.171 7.171 0 0 0 7.235 6.019 8.193 8.193 0 0 0 6.851-3.778zM47.834 24.279h9.219v4.225h.131a10.085 10.085 0 0 1 9.09-4.994c9.735 0 11.527 6.405 11.527 14.726V55.19h-9.6V40.159c0-3.588-.066-8.2-5-8.2-4.99 0-5.76 3.907-5.76 7.939v15.288h-9.6zM82.669 9.58h9.6v27.265l10.88-12.583h11.77l-12.6 14.313 12.335 16.63h-12.066L92.397 39.923h-.126v15.28h-9.6zM32.911 24.276h9.6v30.916h-9.6zm4.8-15.37a5.569 5.569 0 1 1-5.57 5.569 5.569 5.569 0 0 1 5.57-5.569M0 9.587h9.993v36.4h18.5v9.222H0zm263.744 51.522a1.2 1.2 0 0 0 1.21-1.269c0-.9-.543-1.33-1.657-1.33h-1.8v4.712h.677v-2.054h.832l.019.025 1.291 2.029h.724l-1.389-2.1zm-.783-.472h-.785v-1.593h.995c.514 0 1.1.084 1.1.757 0 .774-.593.836-1.314.836" fill="currentColor"/></svg>
                                <svg class="w-16 h-auto py-3 text-gray-500 lg:py-5 md:w-20 lg:w-24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 127 33"><path d="M9.3 16.5C9.3 9 14.3 2.7 21.2.7a16.5 16.5 0 1 0 0 31.6c-6.9-2-11.9-8.3-11.9-15.8Z" fill="currentColor"/><path d="M21.7 10c4 0 7.4 2.8 8.5 6.4a8.9 8.9 0 1 0-17 0c1-3.6 4.4-6.3 8.5-6.3Z" fill="currentColor"/><path d="M24.8 19.4c0 3-2 5.5-4.8 6.3A6.6 6.6 0 1 0 20 13c2.8.8 4.8 3.4 4.8 6.4Z" fill="currentColor"/><path d="M39.6 13.5A4.4 4.4 0 0 1 44 9.1h1.3v2.7l-1 .2-1 .6-.2.4-.1.5h2.3v3H43v9.2h-3.4v-9.3h-1.3v-2.9h1.3ZM55.7 13.5h3.4v6.1a6.9 6.9 0 0 1-1.7 4.6 6 6 0 0 1-4.5 1.8c-1 0-1.8-.1-2.5-.5a6 6 0 0 1-3.2-3.4c-.3-.8-.4-1.6-.4-2.5v-6H50v6c0 .5 0 1 .2 1.3l.5 1c.2.4.5.6.9.8.3.2.8.3 1.2.3a2.6 2.6 0 0 0 2.1-1c.3-.3.4-.7.5-1l.2-1.4v-6ZM61.2 25.7V9.5h3.4v16.2h-3.4ZM66.9 25.7V9.5h3.3v16.2H67ZM78.5 21.2l3.3-7.7h3.7l-5.7 12.2h-2.7l-5.6-12.2H75l3.4 7.7ZM87 13.5h3.3v12.2H87V13.5Zm1.6-5 .8.1.6.4.4.7.2.7a1.9 1.9 0 0 1-.6 1.4l-.6.4a2 2 0 0 1-.8.1c-.5 0-1-.2-1.3-.5a2 2 0 0 1-.4-2.1c0-.3.2-.5.4-.7l.6-.4.7-.1ZM98.8 13.2a6.7 6.7 0 0 1 4.8 1.9 6.3 6.3 0 0 1 1.9 5.7h-9.8a3.3 3.3 0 0 0 3.2 2.2c.5 0 1-.1 1.4-.4.5-.2.9-.5 1.2-1h3.7c-.2.7-.5 1.3-1 1.8a6.1 6.1 0 0 1-3.3 2.3 7 7 0 0 1-6.9-1.6 6.1 6.1 0 0 1-2-4.5 6.1 6.1 0 0 1 2-4.5c.7-.6 1.4-1 2.2-1.4.8-.3 1.7-.5 2.6-.5Zm3.2 5.2c-.3-.6-.7-1.1-1.2-1.5-.6-.4-1.3-.7-2-.7s-1.4.3-2 .7c-.5.4-.9.9-1.1 1.5h6.3ZM123 13.5h3.6l-5 12.2H119l-2.5-6.5-2.5 6.5h-2.7l-5-12.2h3.6l2.7 7 2.8-7h2.2l2.8 7 2.7-7Z" fill="currentColor"/></svg>
                                <svg class="w-16 h-auto py-3 text-gray-500 lg:py-5 md:w-20 lg:w-24" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 32"><g clip-path="url(#a)"><path d="M46.6 11c.5-.7 1-1.3 1.9-1.7.7-.5 1.6-.7 2.6-.7v3.9h-1c-1.1 0-2 .2-2.6.8-.6.5-1 1.5-1 2.8v7.3H43V8.8h3.7v2.3ZM53 16c0-1.4.2-2.7.8-3.9a6.6 6.6 0 0 1 5.9-3.6 6 6 0 0 1 4.9 2.4v-2h3.7v14.5h-3.7v-2.1c-.5.6-1.2 1.2-2 1.7-.9.4-1.8.6-3 .6a6.4 6.4 0 0 1-5.8-3.6 8.7 8.7 0 0 1-.9-4Zm11.6.1c0-.9-.2-1.7-.6-2.3-.3-.6-.8-1.1-1.4-1.5-.6-.3-1.3-.5-2-.5a3.8 3.8 0 0 0-3.3 2c-.4.6-.5 1.4-.5 2.2 0 1 .1 1.7.5 2.4a3.8 3.8 0 0 0 3.4 2 4 4 0 0 0 1.9-.5c.6-.4 1-.9 1.4-1.5.4-.6.6-1.4.6-2.3ZM86.4 8.8l-9.2 21.5h-4l3.3-7.3-6-14.2h4.2L78.5 19l3.9-10.2h4ZM95.2 23.6a8 8 0 0 1-3.8-.9 7 7 0 0 1-2.7-2.7 8 8 0 0 1-1-3.9c0-1.5.3-2.8 1-4a7 7 0 0 1 2.8-2.6 8 8 0 0 1 3.8-1 8 8 0 0 1 3.9 1 7.6 7.6 0 0 1 3.7 6.6c0 1.5-.3 2.8-1 4a7 7 0 0 1-2.8 2.6c-1.2.6-2.4 1-3.9 1Zm0-3.2a3.6 3.6 0 0 0 3.3-2c.4-.6.6-1.4.6-2.3 0-1.4-.4-2.4-1.1-3.2a3.6 3.6 0 0 0-2.7-1.1c-1.1 0-2 .4-2.7 1.1-.7.8-1.1 1.8-1.1 3.2 0 1.4.4 2.5 1 3.2.8.7 1.6 1.1 2.7 1.1ZM114.1 8.6c1.8 0 3.2.6 4.3 1.7 1 1 1.6 2.6 1.6 4.5v8.6h-3.7v-8c0-1.2-.3-2.1-1-2.7-.5-.7-1.3-1-2.3-1-1 0-1.9.3-2.5 1-.6.6-.8 1.5-.8 2.6v8h-3.8V8.9h3.8v1.8a5 5 0 0 1 1.8-1.4 6 6 0 0 1 2.6-.6ZM25.1 0H7C3 0 0 3 0 6.9V25C0 29 3 32 6.9 32H25c3.8 0 6.9-3 6.9-6.9V7C32 3 29 0 25.1 0Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12.7 12a2.5 2.5 0 1 0 0-5.1 2.5 2.5 0 0 0 0 5Zm4-5.1a6.1 6.1 0 1 1 0 12.1V7Zm0 12.1 6.2 6.1H9V11.4l7.7 7.6Z" fill="currentColor" class="fill-white"/></g></svg>
                                <svg class="w-16 h-auto py-3 text-gray-500 lg:py-5 md:w-20 lg:w-24" xmlns="http://www.w3.org/2000/svg" width="2500" height="1036" viewBox="0 -6.166 294.398 121.975"><path d="M12.139 90.511c-3.939 0-7.799-.479-10.938-1.292l.487-8.277c3.053 1.123 7.313 2.012 11.254 2.012 5.952 0 10.775-2.492 10.775-8.359C23.718 63.172 0 68.002 0 50.466c0-9.325 7.315-15.834 19.941-15.834 3.214 0 6.51.397 9.809.959l-.485 7.802c-3.132-.963-6.591-1.527-9.806-1.527-6.754 0-10.211 3.134-10.211 7.638 0 10.855 23.72 6.839 23.72 23.798-.005 9.973-7.882 17.209-20.829 17.209M54.106 90.264c-2.249 0-3.938-.076-6.03-.479v17.397h-8.601V49.746h8.12c0 2.094-.082 5.309-.484 7.476h.162c2.25-5.068 6.833-8.283 12.944-8.283 9.487 0 14.712 6.75 14.712 18.814.001 14.076-7.473 22.511-20.823 22.511m3.861-34.246c-6.434 0-9.892 7.558-9.892 14.384v12.312c1.852.562 3.86.804 6.272.804 6.833 0 11.497-4.182 11.497-14.958.001-8.039-2.49-12.542-7.877-12.542zM102.519 57.381C94.561 55.936 90.7 61.485 90.7 73.466v16.238h-8.606V49.746H90.3c0 2.246-.246 5.791-.809 8.844h.162c1.771-5.388 5.79-10.377 13.271-9.651l-.405 8.442M114.803 43.797c-3.056 0-5.55-2.414-5.55-5.393 0-2.971 2.494-5.385 5.55-5.385 2.974 0 5.467 2.333 5.467 5.385 0 2.979-2.493 5.393-5.467 5.393m4.26 45.907h-8.6V49.746h8.6v39.958zM154.449 89.704V63.975c0-4.982-1.374-7.875-5.951-7.875-6.03 0-10.457 6.345-10.457 14.302v19.303h-8.603V49.746h8.203c0 2.094-.162 5.546-.563 7.796l.082.075c2.33-5.141 7.157-8.68 13.91-8.68 9.084 0 11.9 5.711 11.9 12.787v27.979h-8.521M186.675 90.425c-8.524 0-11.1-3.294-11.1-12.214V56.417h-7.634v-6.671h7.634V37.04l8.523-2.333v15.039h10.532v6.671h-10.448v19.137c0 5.954 1.205 7.558 5.224 7.558 1.769 0 3.699-.24 5.226-.643v7.076c-2.331.486-5.307.88-7.957.88" fill="currentColor"/><path d="M233.712 78.636c11.72-15.086 20.938-32.809 20.938-45.537 0-6.652-4.765-11.295-10.978-14.823.123 13.831-4.668 46.263-9.96 60.36M195.279 115.809c27.47-9.188 67.29-30.598 94.985-49.725 2.324-1.6 4.135-3.085 4.135-5.685 0-4.519-8.275-10.576-12.292-12.987-21.792 22.653-65.163 56.596-86.828 68.397" fill="currentColor"/><path d="M220.76 96.567c16.938-11.709 41.545-33.739 49.873-45.727 1.963-2.82 3.416-4.454 3.416-7.405 0-4.839-5.644-8.382-9.703-10.849-9.727 22.924-31.579 51.469-43.586 63.981M236.192 64.087c2.191-14.477.903-31.952-1.894-42.913-1.521-5.969-6.901-12.706-11.88-14.812 6.526 18.522 12.128 44.898 13.774 57.725" fill="currentColor"/><path d="M231.367 43.779C226.235 29.91 213.446.998 194.633-6.165c12.247 13.516 30.417 40.337 36.734 49.944" fill="currentColor"/></svg>
                            </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <footer class="w-full bg-white border-t border-gray-200">
                <!-- ========== FOOTER ========== -->
                <footer class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
                    <!-- Grid -->
                    <div class="grid items-center grid-cols-1 gap-5 md:grid-cols-3">
                        <div class="hover:cursor-pointer" onclick="window.location.href='/'">
                            <img src="/img/mera-red-b.png" class="object-cover w-48" alt="" style="width:192px;">
                        </div>
                      <!-- End Col -->

                      <ul class="text-center">
                        <li class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300">
                          <a class="inline-flex text-sm text-gray-500 gap-x-2 hover:text-gray-800 focus:outline-hidden focus:text-gray-800" href="/">
                            Hem
                          </a>
                        </li>
                        <li class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300">
                          <a class="inline-flex text-sm text-gray-500 gap-x-2 hover:text-gray-800 focus:outline-hidden focus:text-gray-800" href="/tjanster">
                            Tjänster
                          </a>
                        </li>
                        <li class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300">
                          <a class="inline-flex text-sm text-gray-500 gap-x-2 hover:text-gray-800 focus:outline-hidden focus:text-gray-800" href="/om-oss">
                            Om Oss
                          </a>
                        </li>
                      </ul>
                      <!-- End Col -->

                      <!-- Social Brands -->
                      <div class="space-x-2 text-center md:text-end">
                        <a class="inline-flex items-center justify-center text-sm font-semibold text-gray-500 border border-transparent rounded-full size-10 gap-x-2 hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="https://www.linkedin.com/company/mera-konsultbyr%C3%A5-ab/">
                            <i class="text-lg fa-brands fa-linkedin"></i>
                        </a>
                        <a class="inline-flex items-center justify-center text-sm font-semibold text-gray-500 border border-transparent rounded-full size-10 gap-x-2 hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="mailto:info@merakonsult.se">
                            <i class="text-lg fa-solid fa-envelope"></i>
                        </a>
                      </div>
                      <!-- End Social Brands -->
                    </div>
                    <!-- End Grid -->
            </footer>
        </main>

    <script>

        function scrollToSection(sectionId) {
                const element = document.getElementById(sectionId);
                const rect = element.getBoundingClientRect();
                const scrollTo = window.scrollY + rect.top - 32;

                window.scrollTo({
                    top: scrollTo,
                    behavior: 'smooth'
                });
            }

            document.addEventListener('DOMContentLoaded', function() {
                const toggleButton = document.getElementById('navbar-toggle');
                const menu = document.getElementById('navbar-menu');

                // Helper function to reset the menu state based on screen size
                function resetMenuOnResize() {
                    if (window.innerWidth >= 768) {
                        // For desktop, make sure the menu is always visible
                        menu.style.maxHeight = 'none';
                        menu.classList.remove('hidden');
                    } else {
                        // For mobile, hide the menu initially
                        menu.style.maxHeight = 0;
                        if (!menu.classList.contains('hidden')) {
                            menu.classList.add('hidden');
                        }
                    }
                }

                toggleButton.addEventListener('click', function() {
                    // Toggle the menu height
                    if (menu.classList.contains('hidden')) {
                        menu.classList.remove('hidden');
                        menu.style.maxHeight = menu.scrollHeight + 'px';
                    } else {
                        menu.style.maxHeight = 0;
                        setTimeout(() => {
                            menu.classList.add('hidden');
                        }, 300); // Wait for the transition to finish before hiding
                    }

                    // Update the aria-expanded attribute
                    const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
                    toggleButton.setAttribute('aria-expanded', !isExpanded);
                });

                // Add a listener to reset the menu when resizing the window
                window.addEventListener('resize', resetMenuOnResize);

                // Initialize menu visibility based on screen size
                resetMenuOnResize();
            });

            document.getElementById("submitButton").addEventListener("click", function(event) {
        let button = this;
        let originalText = button.innerHTML;

        // Change button to loading state with spinner
        button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Skickar...';
        button.disabled = true;

        // Timeout to revert button text in case of a long submission (e.g., 8 seconds)
        let revertTimeout = setTimeout(() => {
            button.innerHTML = originalText;
            button.disabled = false;
        }, 8000);

        // Allow the form to submit naturally
        // No need for preventDefault, because the form will submit when the button is clicked
        document.getElementById("myForm").submit();
        });
    </script>

</html>

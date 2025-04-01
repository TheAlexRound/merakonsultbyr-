<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script src="https://kit.fontawesome.com/55b1c7ce83.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

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
                font-weight: <weight>;
                font-style: normal;
            }

        </style>

    </head>
    <body class="flex flex-col items-center bg-gray-50">
        <!-- ========== HEADER ========== -->
        <header class="fixed inset-x-0 top-0 z-50 flex flex-wrap w-full text-sm md:justify-start md:flex-nowrap">
            <nav class="mt-4 relative md:max-w-2xl w-full bg-white border border-gray-200 shadow-xl rounded-4xl mx-2 py-2.5 md:flex md:items-center md:justify-between md:py-0 md:px-4 md:mx-auto">
                <div class="flex items-center justify-between px-4 md:px-0">
                    <div class="flex flex-col items-center">
                        <h1 class="text-4xl font-league text-[#b25659] tracking-tighter" aria-label="Mera Konsultbyrå">mera.</h1>
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
                        <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-[#b25659] font-medium font-mont text-[#b25659] focus:outline-hidden" href="#" aria-current="page">Home</a>
                        <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-transparent font-mont text-gray-500 hover:text-gray-800 focus:outline-hidden" href="#">Projects</a>
                    </div>
                </div>
            </nav>
        </header>
        <main class="flex flex-col w-full">
            <div class="flex flex-col w-full min-h-screen p-2 pt-4 md:p-10 bg-gray-50 gap-y-12">
                <div style="background-image: url('/img/hero.jpg')" class="w-full bg-center bg-cover border border-gray-200 shadow-xl rounded-4xl">
                    <div class="w-full h-full bg-radial-[at_150%_0%] from-transparent from-25% to-black to-90% opacity-95 rounded-4xl flex items-end p-8 pt-96 md:p-12 md:pt-72 lg:pt-96">
                        <div class="w-full border-4 border-[#b25659] py-8 border-x-0">
                            <h1 class="text-5xl tracking-tighter text-white lg:text-7xl md:text-6xl font-league" aria-label="Mera Konsultbyrå">Bokför på rätt sätt för att hijasdf fsdg.</h1>
                            <h2 class="text-lg tracking-tighter text-white md:text-2xl font-mont" aria-label="Mera Konsultbyrå">Bokför på rätt sätt. BokBokför på rätt sätt.fö BokBokför på rätt sätt.fö BokBokför på rätt sätt.för på rätt sätt. Bokför på rätt sätt. </h2>
                            <!--BUTTON 1-->
                            <a href="#" class="relative mt-8 inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-white transition duration-300 ease-out border-2 border-[#b25659] rounded-full shadow-md group">
                                <span class="absolute inset-0 flex items-center rounded-4xl justify-center w-full h-full text-white duration-300 -translate-x-full bg-[#b25659] group-hover:translate-x-0 ease"><i class="text-white fa-solid fa-arrow-right"></i></span>
                                <span class="absolute flex items-center justify-center w-full h-full text-xl tracking-tight text-white transition-all duration-300 transform font-league group-hover:translate-x-full ease">Boka samtal</span><span class="relative invisible">Våra tjänster</span>
                            </a>
                            <!--BUTTON 2-->
                            <a href="#" class="mx-8 relative text-xl text-white cursor-pointer font-league after:bg-[#b25659] after:absolute after:h-0.5 after:w-0
                            after:left-0 after:bottom-[-4px] hover:after:w-full after:transition-all after:duration-250">Våra tjänster</a>
                        </div>
                        <div class="flex-col items-end justify-end hidden w-full md:flex">
                            <div class="flex flex-col">
                                <h1 class="-ml-1 tracking-tighter text-white text-7xl font-league" aria-label="Mera Konsultbyrå">mera.</h1>
                                <h1 class="-mt-4 text-lg tracking-tight text-white font-mont" aria-label="Mera Konsultbyrå">k o n s u l t b y r å</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex w-full gap-12">
                    <div class="w-full p-6 bg-red-500 rounded-4xl">
                        asdf
                    </div>
                    <div class="w-full">
                        dfg
                    </div>
                </div>

            </div>
            <div class="bg-[#f7e6e7]">
                <h1 class="text-7xl font-league text-[#b25659] tracking-tighter" aria-label="Mera Konsultbyrå">Bokför på rätt sätt för att hijasdf fsdg.</h1>
                    <h1 class="text-2xl font-mont text-[#b25659] tracking-tighter" aria-label="Mera Konsultbyrå">Bokför på rätt sätt. BokBokför på rätt sätt.för på rätt sätt. Bokför på rätt sätt. </h1>

                <a href="#" class="relative bg-white inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-[#b25659] transition duration-300 ease-out border-2 border-[#b25659] rounded-full shadow-md group">
                    <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-[#b25659] group-hover:translate-x-0 ease"><i class="text-white fa-solid fa-arrow-right"></i></span>
                    <span class="absolute font-mont flex items-center justify-center w-full h-full text-[#b25659] transition-all duration-300 transform group-hover:translate-x-full ease">Boka samtal</span>
                    <span class="relative invisible">Våra tjänster</span>
                </a>
            </div>
        </main>

    <script>
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
        </script>

</html>

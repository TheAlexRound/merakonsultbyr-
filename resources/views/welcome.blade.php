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
    <body class="bg-gray-50 flex items-center flex-col">
        <!-- ========== HEADER ========== -->
        <header class="fixed top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-sm">
            <nav class="mt-4 relative max-w-2xl w-full bg-white border border-gray-200 rounded-4xl mx-2 py-2.5 md:flex md:items-center md:justify-between md:py-0 md:px-4 md:mx-auto">
                <div class="px-4 md:px-0 flex justify-between items-center">
                    <div class="flex items-center flex-col">
                        <h1 class="text-4xl font-league text-[#b25659] tracking-tighter" aria-label="Mera Konsultbyrå">mera.</h1>
                    </div>

                    <div class="md:hidden">
                        <!-- Toggle Button -->
                        <button type="button" id="navbar-toggle" class="hs-collapse-toggle flex justify-center items-center size-7 border border-gray-200 text-gray-500 rounded-full hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200" aria-expanded="false" aria-controls="navbar-menu" aria-label="Toggle navigation">
                            <i id="menu-open-icon" class="fa-solid fa-bars"></i>
                        </button>
                    </div>
                </div>

                <div id="navbar-menu" class="hidden hs-collapse overflow-hidden transition-all duration-300 ease-in-out max-h-0 md:max-h-none md:block" aria-labelledby="navbar-toggle">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-end gap-2 md:gap-3 mt-3 md:mt-0 py-2 md:py-0 md:ps-7">
                        <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-[#b25659] font-medium text-[#b25659] focus:outline-hidden" href="#" aria-current="page">Home</a>
                        <a class="py-0.5 md:py-3 px-4 md:px-1 border-s-2 md:border-s-0 md:border-b-2 border-transparent text-gray-500 hover:text-gray-800 focus:outline-hidden" href="#">Projects</a>
                    </div>
                </div>
            </nav>
        </header>
        <main class="w-full flex flex-col">
            <div style="background-image: url('/img/hero.jpg')" class="bg-cover bg-left w-full min-h-screen">

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

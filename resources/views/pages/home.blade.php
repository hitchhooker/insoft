@extends('layouts.homepage')

@section('title', 'Training & Certification - Enabling your IT Skills')


@section('content')


<x-videomodal /> <!-- TODO: build videomodal here that opens when arrow in h1 is clicked -->
<!--Hero+Menu-->
<section class="hero-section">
    <nav class="relative text-primary-200">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" title="IT Training &amp; Consulting | Insoft Services">
                <img src="{{asset('images/logos/Insoft-Logo-Inverse.svg')}}"
                    class="w-40 lg:w-48 xl:w-56" alt="IT Training &amp; Consulting | Insoft Services"
                    title="IT Training &amp; Consulting | Insoft Services" />
                <h1 class="hidden">Insoft services</h1>
            </a>
			<!-- TODO: solve how to make all 3 menus to function like unclickable radios preferably without scripting in pure html/css -->
            <!-- TODO: So basically, what you’d want to do, is using a plain button that will open a menu,
                     close all other menus, and put a closing button over itself. -->

            <ul class="flex items-center pr-4">

                <!--Toggleable contact us-->
                <li class="hover:text-white relative">
                    <input type="checkbox" value="selected" id="toggle-contact" class="toggle-input">
                    <label for="toggle-contact" class="block cursor-pointer py-6 px-2 lg:px-4 lg:p-6 
                    text-md lg:text-base font-bold">
                        <i class="fa fa-phone-square fa-2x" role="button" aria-pressed="false"></i>
                        <span class="hidden">Contact us</span>
                    </label>
                    <x-contactmenu /> <!-- Found at /views/components/contactmenu.blade.php -->
                </li>

                <!--Toggleable lang-Menu-->
                <li class="hover:text-white">
                    <input type="checkbox" value="selected" id="toggle-lang" class="toggle-input">
                    <label for="toggle-lang" class="cursor-pointer py-6 px-2 lg:px-4 lg:p-6 
                    text-sm lg:text-base font-bold flex items-end">
                        <img alt="English language" width="42px"
                            src="{{asset('images/flags/GB.svg')}}" />
                    </label>
                    <x-langmenu /> <!-- Found at /views/components/langmenu.blade.php -->
                </li>

                <!--Toggleable Mega-Menu-->
                <li class="hover:text-white">
                    <input type="checkbox" value="selected" id="toggle-menu" class="toggle-input">
                    <label for="toggle-menu"
                        class="block cursor-pointer py-6 px-2 lg:px-4 lg:p-6 text-md lg:text-base font-bold"><i
                            class="fa fa-bars fa-2x" role="navigation" aria-label="Main"></i>
                        <span class="hidden">Menu</span>
                    </label>
                    <x-megamenu /> <!-- Found at /views/components/megamenu.blade.php -->
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero -->
    <div class="container justify-center pt-16 mx-auto">

        <div class="mx-auto w-10/12 xs:w-full">
            <h2 class="text-white font-bold text-3xl sm:text-4xl 
                leading-tight relative mb-5">Insoft Training
                <button class="hover:text-secondary-300 focus:outline-none focus:text-secondary-500 fas fa-play ml-1" 
                data-video="https://www.youtube.com/embed/Y6OAOfwTkdk?controls=0" 
                data-toggle="modal" data-target="#videoModal">
                </button>
            </h2>

            <p class="w-9/12 md:w-7/12 lg:w-6/12 xl:w-5/12 text-white sm:text-lg relative">
                Discover our vast majority of Accredited and Vendor
                Independent Courses,
                all available as Instructor Led Online (ILO)</p>
            
            <div
                class="mt-5 w-full sm:w-11/12 md:w-9/12 lg:w-8/12 xl:w-6/12 rounded-md h-12 
                bg-searchbar opacity-70 z-50 flex flex-row justify-between">
                <form class="w-full flex h-12" action="https://www.insoftservices.uk" method="get">
                    <div class="flex items-center ml-1 sm:w-1/12 w-12">
                        <i class="fas fa-search fa-2x"></i>
                    </div>
                    <input class="bg-seachbar focus:outline-none border-none sm:w-8/12 w-full h-12 text-xs
                     sm:text-sm lg:text-md text-fontFamily-placeholder"
                        role="searchbox" type="text" placeholder="Ready to start your learning?" value=""
                        name="s" onclick="addbg()" id="s" style="background-color:#DCF0FA; color:#242D31">
                    <button
                        class="uppercase md:text-md bg-tertiary-400 rounded-r-md h-12 font-bold shadow-sm 
                        text-tertiary-800 w-40 sm:w-3/12 text-xs sm:text-sm xl:text-md 
                        hover:filter-brighter hover:text-tertiary-700 hover:bg-tertiary-300" 
                        aria-label="Get-started" type="submit">Get Started 
                        <!-- TODO: replace color hover with filter brightness or sremove color change after button works -->

                    </button>
                </form>
            </div>
            
        </div>
    </div>
</section>

<!-- 3 boxes -->
<!-- todo: write boxes as updateable blade components -->
<div class="container flex flex-wrap items-start w-11/12 m-auto relative justify-between mb-12 md:mb-20"
    style="margin-top:-125px;">
    <div class="relative bg-gray-100 p-5 mx-5 lg:min-h-280 w-full lg:flex-1 mb-5 shadow">
        <a class="flex flex-col" href="https://www.insoftservices.uk/a-message-from-our-ceo-and-founder/"
            target="_blank">
            <h3 class="text-2xl xl:text-3xl font-bold mb-2 tracking-tighter">The best time to learn a new skill</h3>
            <div class="text-md pt-5">
                <p class="w-11/12 leading-7 mb-5">
                    Covid 19 has impacted the way we work. Now we're helping you accelerating your digital learning.
                </p>
            </div>
            <div class="absolute bottom-0 right-0 p-5">
                <img class="w-10" src="{{asset('images/icons/arrow.svg')}}" alt="arrow">
            </div>
        </a>
    </div>

    <div class="relative bg-gray-100 p-5 mx-5 lg:min-h-280 w-full lg:flex-1 mb-5 shadow">
        <a class="flex flex-col" href="#" target="_blank">
            <div class="text-2xl xl:text-3xl font-bold tracking-tighter flex">Upcoming courses available</div>
            <div class="text-md pt-5">
                <p class="w-11/12 leading-7 mb-5">Be part of an interactive classroom, with our instructor-led
                    training. Now
                    all courses are available online.</p>
            </div>
            <div class="absolute bottom-0 right-0 p-5">
                <img class="w-10" src="{{asset('images/icons/arrow.svg')}}" alt="arrow">
            </div>
        </a>
    </div>

    <div class="relative bg-gray-100 p-5 mx-5 lg:min-h-280 w-full lg:flex-1 mb-5 shadow">
        <a class="flex flex-col" href="{{ route('home') }}" target="_blank">
            <div class="text-2xl xl:text-3xl font-bold tracking-tighter">Enterprise Training</div>
            <div class="text-md pt-5">
                <p class="w-11/12 leading-7 mb-5">
                    For specific technology requirements, we provide customized services to our customers.
                </p>
            </div>
            <div class="absolute bottom-0 right-0 p-5">
                <img class="w-10" src="{{asset('images/icons/arrow.svg')}}" alt="arrow">
            </div>
        </a>
    </div>
</div>

<!-- Carousel -->
<!-- TODO: write html caroussel as blade component -->
<!-- TODO: needs to be still completely worked -->
<div class="carousel relative shadow-2xl bg-white">
    <div class="carousel-inner relative overflow-hidden w-full">
        <!--Slide 1-->
        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
            checked="checked">
        <div class="carousel-item absolute min-h-60vh lg:min-h-40vh"
        style="background-image:url({{asset('images/caroussels/bg-roulette-min.png')}})">
            <div class="block h-full w-full opacity-10 bg-primary-500">
            </div>
        </div>
        <label for="carousel-4"
            class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl 
            font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight 
            text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-2"
            class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl 
            font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight 
            text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!--Slide 2-->
        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute bg-secondary-500  opacity-0 min-h-40vh">
            <div class="block h-full w-full text-white text-5xl text-center"
                style="background-image:url({{asset('images/bg-roulette-min.png')}})">
                Secondary
            </div>
        </div>
        <label for="carousel-1"
            class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl 
            font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight 
            text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-3"
            class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl 
            font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight 
            text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!--Slide 3-->
        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0 min-h-40vh">
            <div class="block h-full w-full bg-tertiary-500 text-white text-5xl text-center">Tertiary</div>
        </div>
        <label for="carousel-2"
            class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl 
            font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight 
            text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-4"
            class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl 
            font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight 
            text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!--Slide 4-->
        <input class="carousel-open" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0 min-h-40vh">
            <div class="block h-full w-full bg-quartary-500 text-white text-5xl text-center">Quartary</div>
        </div>
        <label for="carousel-3"
            class="prev control-4 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl 
            font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight 
            text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-1"
            class="next control-4 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl 
            font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight 
            text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!-- Add additional indicators for each slide-->
        <ol class="carousel-indicators">
            <li class="inline-block mr-3">
                <label for="carousel-1"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-2"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-3"
                    class="carousel-bullet cursor-pointnper block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-4"
                    class="carousel-bullet cursor-pointnper block text-4xl text-white hover:text-blue-700">•</label>
            </li>
        </ol>

    </div>
</div>
<!-- latest/subscribe section -->
<div class="py-12 md:py-24">
    <div class="flex flex-wrap justify-center">
        <a href="#" class="m-5 text-2xl hover:text-secondary-400 flex">
            <div class="flex flex-1 h-48 bg-tertiary-500 text-white items-end justify-between
                p-5 text-2xl hover:text-secondary-400 w-84 sm:w-120 bg-cover"
                style="background-image:url({{ asset('images/buttons/bg-latest-min.png')}});">
                Latest Articles
                <i class="fas fa-arrow-right fa-2x"></i>
            </div>
        </a>
        <a href="#" class="m-5 text-2xl hover:text-secondary-400 flex">
            <div class="flex flex-1 h-48 bg-tertiary-500 text-white items-end justify-between
                p-5 text-2xl hover:text-secondary-400 w-84 sm:w-120 bg-cover"
                style="background-image:url({{ asset('images/buttons/bg-subscribe-min.png')}});">
                Subscribe News
                <i class="fas fa-arrow-right fa-2x"></i>
            </div>
        </a>
    </div>
</div>

@endsection

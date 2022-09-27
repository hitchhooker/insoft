@extends('layouts.app')
@section('title', 'Fortinet Training')
@section('content')
<section class="bg-cover min-h-30vh p-10 items-center flex"
    style="background-image:url({{asset('images/cover/fortinet-act-cover.png')}})">
    <div class="container mx-auto">
        <h1 class="text-white font-bold text-4xl" style="text-shadow:2px 2px #444;">Fortinet Training</h1>
    </div>

</section>
<section class="bg-white text-primary-800">
    <div class="container mx-auto">
        <h1 class="font-light text-3xl text-center p-10">Fortinet Authorised Training Center</h1>
        <!-- TODO: these 4 cards can be written also as components to avoid repetition and improve updateability from backend -->
        <div class="flex flex-wrap justify-evenly p-5">
            <div class="max-w-sm w-full sm:w-6/12 xl:w-3/12 my-5 rounded overflow-hidden">
                <img class="w-7/12 mx-auto"
                    src="{{ asset('images/fortinet/atc-status.svg') }}" alt="ATC Status" />
                <div class="px-6 py-4 min-h-150">
                    <div class="font-bold text-xl mb-2 text-center">ACT Status</div>
                    <p class="text-gray-700 text-base text-center">
                        As a Fortinet Authorised Training Center, we offer official course materials.
                    </p>
                </div>
                <div class="px-6 py-4 text-center">
                    <a href="https://www.fortinet.com/support/training/learning-center" alt="ACT Status"
                    class="inline-block bg-gray-200 hover:bg-gray-400 hover:text-primary-700
                rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                        Learn more
                    </a>
                </div>
            </div>
            <div class="max-w-sm w-full sm:w-6/12 xl:w-3/12 my-5 rounded overflow-hidden">
                <img class="w-7/12 mx-auto"
                    src="{{ asset('images/fortinet/on-site%20training.svg') }}"
                    alt="Onsite Training" />
                <div class="px-6 py-4 min-h-150">
                    <div class="font-bold text-xl mb-2 text-center">Fortinet Training</div>
                    <p class="text-gray-700 text-base text-center">
                        Check our Fortinet training schedule.
                    </p>
                </div>
                <div class="px-6 py-4 text-center">
                    <a href="#" alt="Course catalog"
                    class="inline-block bg-gray-200 hover:bg-gray-400 hover:text-primary-700
                    rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                        Check dates
                    </a>
                </div>
            </div>
            <div class="max-w-sm w-full sm:w-6/12 xl:w-3/12 my-5 rounded overflow-hidden">
                <img class="w-7/12 mx-auto"
                    src="{{ asset('images/fortinet/online-training.svg') }}"
                    alt="ATC Status" />
                <div class="px-6 py-4 min-h-150">
                    <div class="font-bold text-xl mb-2 text-center">Instructor-Led Online</div>
                    <p class="text-gray-700 text-base text-center">
                        Get all the benefit of instructor-led training online. Enroll for our training courses
                        virtually.
                    </p>
                </div>
                <div class="px-6 py-4 text-center">
                    <a href="{{ route('instructors') }}" alt="Online Training"
                    class="inline-block bg-gray-200 hover:bg-gray-400 hover:text-primary-700
                rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                        See instructors
                    </a>
                </div>
            </div>
            <div class="max-w-sm w-full sm:w-6/12 xl:w-3/12 my-5 rounded overflow-hidden">
                <img class="w-7/12 mx-auto"
                    src="{{ asset('images/fortinet/preforce8.svg') }}" alt="ATC Status" />
                <div class="px-6 py-4 min-h-150">
                    <div class="font-bold text-xl mb-2 text-center">Prepforce 8</div>
                    <p class="text-gray-700 text-base text-center">
                        Prepare for the NSE 8 exam. Boot camps are now available in three different versions.
                    </p>
                </div>
                <div class="px-6 py-4 text-center">
                    <a href="https://nse8.com" target="_blank" alt="Prepforce 8 for Fortinet NSE8 Certificate"
                    class="inline-block bg-gray-200 hover:bg-gray-400 hover:text-primary-700
                    rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                        Discover here
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text-white bg-quartary-800">
    <div class="flex flex-wrap container mx-auto p-10 md:p-16">
        <div class="lg:w-6/12 p-10">
            <h2 class="font-bold text-2xl mb-5">
                Fortinet Authorised Training across EMEAR
            </h2>
            <p class="mb-5">
                Insoft Services´ training capabilities rely on the excellence
                of our exclusive Fortinet Certified Trainers (FCT). We are dedicated
                to providing high-quality training to Fortinet Customers,
                Partners and Employees.
            </p>
            <p class="mb-5">
                In addition to the United Kingdom (UK), we are fully certified
                to run as Premier Authorised Training Center (ATC) in Finland, Norway,
                Germany, Sweden, Saudi Arabia and Italy, covering the whole EMEAR.
                <a class="font-bold hover:text-secondary-600" href="{{ route('about') }}">Learn more about our offices</a>
            </p>
            <img class="" alt="Fortinet logo"
                src="{{ asset('images/fortinet/fortinet-training-insoftservices.png') }}">
        </div>
        <div class=" w-full lg:w-6/12 lg:p-10">
            <img alt="fortinet network security"
                src="{{ asset('images/fortinet/network-security-img.svg') }}">
        </div>
    </div>
    <div class="bg-gray-400 text-primary-900 p-5 text-2xl text-center">
        <p>
            Insoft Services Delivers training across the whole Fortinet Security Fabric. 
            <a class="hover:text-secondary-600" href="#">See
                our upcoming training ></a>
        </p>
    </div>
</section>
<!-- these cards can be modularized as components to avoid code repetition and improve code quality-->
<section class="bg-white">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row p-10 md:p-16">
            <div class="flex justify-center items-center md:w-1/3 p-5">
                <h2 class="text-center font-semibold text-3xl">
                    Fortinet
                    Network Security Expert
                    (NSE) Program
                </h2>
            </div>
            <div class=" flex flex-col md:w-2/3 px-5">
                <p class="mb-5">
                    The Fortinet Network Security Expert (NSE) is an eight-level certification
                    program designed for technical professionals interested in independent
                    validation of their network security skills and experience. The first 3
                    levels of the NSE program provide an understanding of cybersecurity concepts
                    and Fortinet products. These levels (NSE 1, NSE 2 and NSE 3) were designed
                    for Fortinet Partners, Employees and Sales. Online self-paced courses are available.
                    Therefore, the NSE 4 certification is the first level for network and security professionals.
                    Consult the table below to which training meets your requirements.
                </p>
                <p>
                    Feel free to contact our customer services team for more details.
                </p>
            </div>
        </div>
        <div class="grid lg:grid-cols-3 gap-5 text-white px-10">
            <div class="bg-blue-700 p-6 rounded-lg">
                <h3 class="mb-2 font-bold text-xl">NSE 1</h3>
                <h4 class="mb-1 font-semibold text-lg">Security Associate [SALES]</h4>
                <p class="mb-5">
                    Develop an understanding of the Threat Landscape.
                    Learn how individuals can be safer on the Internet
                    with Personal Security Awareness.
                </p>
                <a href="#"
                    class="font-bold py-2 px-4 rounded bg-blue-900 hover:bg-blue-300 hover:text-primary-700 ">Get
                    started with the basics</a>

            </div>
            <div class="bg-blue-700 p-6 rounded-lg">
                <h3 class="mb-2 font-bold text-xl">NSE 2</h3>
                <h4 class="mb-1 font-semibold text-lg">Security Associate [SALES]</h4>
                <p class="mb-5">
                    Develop the knowledge about Fortinet Security Fabric solutions
                    required to address the threat landscape and security concerns
                    discussed in NSE 1.
                </p>
                <a href="#" alt="NSE2 training"
                    class="font-bold py-2 px-4 rounded bg-blue-900 hover:bg-blue-300 hover:text-primary-700 ">Learn
                    about cybersecurity</a>
            </div>
            <div class="bg-blue-700 p-6 rounded-lg">
                <h3 class="mb-2 font-bold text-xl">NSE 3</h3>
                <h4 class="mb-1 font-semibold text-lg">Security Associate [SALES]</h4>
                <p class="mb-5">
                    Learn more about Fortinet products.
                    Employees and channel partners are required to
                    obtain the NSE 3 certification.
                </p>
                <br>
                <a href="#" alt="NSE3 training"
                    class="font-bold py-2 px-4 rounded bg-blue-900 hover:bg-blue-300 hover:text-primary-700">Enroll to
                    NSE 3 training here</a>
                
            </div>
        </div>
        <div class="flex flex-wrap px-10 my-5 text-white">

            <div class="w-full lg:w-4/12 rounded-t-lg lg:rounded-t-none bg-orange-500 p-6 lg:rounded-l-md lg:my-3 min-h-240">
                <h3 class="mb-2 font-bold text-xl">NSE 4</h4>
                    <h4 class="mb-1 font-semibold text-lg">Professional [TECH]</h5>
                        <p class="mb-5">
                            Develop the knowledge to manage the day-to-day configuration,
                            monitoring and operation of FortiGate devices to support
                            corporate network security policies.
                        </p>
                        <a class="font-bold py-2 px-4 rounded bg-orange-700 
              hover:bg-orange-300 hover:text-primary-700" href="#">Get started</a>

            </div>
            <div class="w-full lg:w-8/12 rounded-b-lg lg:rounded-b-none bg-gray-300 p-6 lg:rounded-r-md 
            lg:my-3 min-h-240 text-primary-600 flex mb-5 leading-8 font-semibold">
                <ul class="w-1/2">
                    <li><a href="" class="hover:text-secondary-600">FortiGate Security 6.2</a></li>
                    <li><a href="" class="hover:text-secondary-600">FortiGate Infrastructure 6.2</a></a></li>
                    <li><a href="" class="hover:text-secondary-600">NSE 4 Bundle Training 6.2 [Recommended]</a></li>
                </ul>
            </div>


            <div class="w-full lg:w-4/12 rounded-t-lglg:rounded-t-none bg-orange-500 p-6 lg:rounded-l-md lg:my-3 min-h-240">
                <h3 class="mb-2 font-bold text-xl">NSE 5</h4>
                    <h4 class="mb-1 font-semibold text-lg">Analyst [TECH]</h5>
                        <p class="mb-5">
                            Develop a detailed understanding of how to implement network security management and
                            analytics.
                        </p>
                        <a href="#" class="font-bold py-2 px-4 rounded bg-orange-700 
              hover:bg-orange-300 hover:text-primary-700">Learn more</a>
            </div>
            <div class="w-full lg:w-8/12 rounded-b-lg lg:rounded-b-none bg-gray-300 p-6 lg:rounded-r-md 
            lg:my-3 min-h-240 text-primary-600 flex mb-5 leading-8 font-semibold">
                <ul class="w-1/2">
                    <li><a href="" class="hover:text-secondary-600">FortiAnalyzer</a></li>
                    <li><a href="" class="hover:text-secondary-600">FortiManager</a></a></li>
                    <li><a href="" class="hover:text-secondary-600">FortiSIEM</a></li>
                </ul>
                <ul class="w-1/2">
                    <li><a href="" class="hover:text-secondary-600">FortiInsight</a></li>
                    <li><a href="" class="hover:text-secondary-600">FortiClient</a></li>
                </ul>
            </div>

            <div class="w-full lg:w-4/12 rounded-t-lg lg:rounded-t-none bg-orange-500 p-6 lg:rounded-l-md lg:my-3 min-h-240">
                <h3 class="mb-2 font-bold text-xl">NSE 6</h4>
                    <h4 class="mb-1 font-semibold text-lg">Security Specialist [TECH]</h5>
                        <p class="mb-5">
                            Develop an understanding of the fabric products that
                            augment FortiGate to provide deeper and more comprehensive
                            network security.
                        </p>
                        <a class="font-bold py-2 px-4 rounded bg-orange-700 
              hover:bg-orange-300 hover:text-primary-700" href="#">Enhance your knowledge</a>

            </div>
            <div class="w-full lg:w-8/12 rounded-b-lg lg:rounded-b-none bg-gray-300 p-6 lg:rounded-r-md 
            lg:my-3 min-h-240 text-primary-600 flex mb-5 leading-8 font-semibold">
                <ul class="w-1/2">
                    <li><a href="" class="hover:text-secondary-600">FortiADC</a></li>
                    <li><a href="" class="hover:text-secondary-600">FortiAuthenticator</a></li>
                    <li><a href="" class="hover:text-secondary-600">FortiDDoS</a></li>
                    <li><a href="" class="hover:text-secondary-600">FortiMail</a></li>
                    <li><a href="" class="hover:text-secondary-600">FortiVoice</a></li>
                </ul>
                <ul class="w-1/2">
                    <li><a href="" class="hover:text-secondary-600">FortiNAC</a></li>
                    <li><a href="" class="hover:text-secondary-600">Integrated and Cloud Wireless</a></li>
                    <li><a href="" class="hover:text-secondary-600">FortiWeb</a></li>
                    <li><a href="" class="hover:text-secondary-600">FortiWLC</a></li>
                </ul>
            </div>

            <div class="w-full lg:w-4/12 rounded-t-lg lg:rounded-t-none bg-gray-800 p-6 lg:rounded-l-md lg:my-3 min-h-240">
                <h3 class="mb-2 font-bold text-xl">NSE 7</h4>
                    <h4 class="mb-1 font-semibold text-lg">Security Architect [TECH]</h5>
                        <p class="mb-5">
                            Develop the knowledge to integrate
                            Fortinet products to deploy and administer network security solutions.
                        </p>
                        <a class="font-bold py-2 px-4 rounded bg-black 
              hover:bg-gray-400 hover:text-primary-700" href="#">Advance your career</a>

            </div>
            <div class="w-full lg:w-8/12 rounded-b-lg lg:rounded-b-none bg-gray-300 p-6 lg:rounded-r-md 
            lg:my-3 min-h-240 text-primary-600 flex mb-5 leading-8 font-semibold">
                <ul>
                    <li>
                        <a href="" class="hover:text-secondary-600">Advanced Threat Protection</a>
                    </li>
                    <li>
                        <a href="" class="hover:text-secondary-600">Enterprise Firewall</a>
                    </li>
                    <li>
                        <a href="" class="hover:text-secondary-600">Secure Access</a>
                    </li>
                    <li>
                        <a href="" class="hover:text-secondary-600">Public Cloud Security</a>
                    </li>
                </ul>
            </div>

            <div class="w-full lg:w-4/12 rounded-t-lg lg:rounded-t-none bg-red-600 p-6 lg:rounded-l-md lg:my-3 min-h-240">
                <h3 class="mb-2 font-bold text-xl">NSE 8</h4>
                    <h4 class="mb-1 font-semibold text-lg">Security Expert [TECH]</h5>
                        <p class="mb-5">
                            Demonstrate the ability to design, configure, install, and troubleshoot
                            a comprehensive network security solution in a live environment.
                        </p>
                        <a href="#" class="font-bold py-2 px-4 rounded bg-red-800 
              hover:bg-red-300 hover:text-primary-700">Become a Security Expert</a>

            </div>
            <div class="w-full lg:w-8/12 rounded-b-lg lg:rounded-b-none bg-gray-300 p-6 lg:rounded-r-md 
            lg:my-3 min-h-240 text-primary-600 flex mb-5 leading-8 font-semibold">
                <ul>
                    <li>
                        <a href="" class="hover:text-secondary-600">Light Lab Exam Preparation Boot camp</a>
                    </li>
                    <li>
                        <a href="" class="hover:text-secondary-600">Advanced Fortinet Technologies Preparation Boot camp</a>
                    </li>
                    <li>
                        <a href="" class="hover:text-secondary-600">Full Intensive Boot camp</a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
    <div class="mt-16 bg-secondary-500 text-white p-5">
        <div class="container mx-auto">
            <!-- TODO: create modal popup form for free download -->
            <p>Get the NSE training guide in your inbox. 
                <a href="#idhere" class="font-bold hover:bg-primary-500">Free
                    download ></a></p>
        </div>
    </div>
</section>


@endsection
@extends('layouts.app')
@section('title', 'About Us')
@section('content')
<style>
    .home-2-part .customer-logos.slider.slick-initialized.slick-slider.slick-dotted {
        height: 180px !important;
    }
</style>
<div class="bg-center flex flex-wrap content-center w-full min-h-40vh text-blue-100 "
    style="background-image:url({{asset('images/cover/insoft-services-team-photo-1.jpg')}})">
    <div class="text-center container mx-auto">
        <h3 class="flex-1 uppercase text-2xl">@lang('about.title')</h3>
        <h2 class="flex-1 align-middle text-4xl -mt-4">
            @lang('about.sub_title')
        </h2>
    </div>
</div>



<div class="container mx-auto">
    <div class="lg:flex lg:flex-row">
        <div class="lg:w-5/12">
            <p class="text-3xl lg:px-20 px-10 lg:py-48 py-20 text-center">
            @lang('about.what_we_do')
            </p>
        </div>
        <div class="lg:p-16 p-10 text-lg lg:w-7/12">
        @lang('about.what_we_do_desc')
        </div>
    </div>
</div>


<!-- TODO: history tracker
<div class="new-about-us-3">
    <div class="new-about-us-3-inner">
        <div class="container coursepag">
            <h1 class="Our_Journey">Our Journey</h1>
            <h3 class="We_are_continuously">We are continuously evolving…</h3>
            <div id="process-tab">
                <ul class="nav nav-tabs process-model" role="tablist">
                    <li role="presentation" class="active"><a href="#oj1" aria-controls="discover" role="tab" data-toggle="tab"><i class="" aria-hidden="true"></i>
                            <p>2006</p>
                        </a></li>

                    <li role="presentation"><a href="#oj7" aria-controls="optimization" role="tab" data-toggle="tab"><i class="" aria-hidden="true"></i>
                            <p>2012</p>
                        </a></li>
                    <li role="presentation"><a href="#oj9" aria-controls="optimization" role="tab" data-toggle="tab"><i class="" aria-hidden="true"></i>
                            <p>2014</p>
                        </a></li>
                    <li role="presentation"><a href="#oj10" aria-controls="optimization" role="tab" data-toggle="tab"><i class="" aria-hidden="true"></i>
                            <p>2015</p>
                        </a></li>
                    <li role="presentation"><a href="#oj11" aria-controls="optimization" role="tab" data-toggle="tab"><i class="" aria-hidden="true"></i>
                            <p>2016</p>
                        </a></li>
                    <li role="presentation"><a href="#oj12" aria-controls="optimization" role="tab" data-toggle="tab"><i class="" aria-hidden="true"></i>
                            <p>2017</p>
                        </a></li>
                    <li role="presentation"><a href="#oj13" aria-controls="optimization" role="tab" data-toggle="tab"><i class="" aria-hidden="true"></i>
                            <p>2018</p>
                        </a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="oj1">
                        <div class="design-process-content">
                            <h2>2006</h2>
                            <p>Started providing Consultancy & Training Services for Global Network Manufacturer</p>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="oj2">
                        <div class="design-process-content">
                            <h2>2007</h2>
                            <p>Won the first long term PS Contract with Juniper PS EMEA. </p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="oj3">
                        <div class="design-process-content">
                            <h2>2008</h2>
                            <p>Started providing consultants and IP engineers to Redback Networks, which later got acquired by Ericsson.</p>


                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane " id="oj4">
                        <div class="design-process-content">
                            <h2>2009</h2>
                            <p>Reached agreement with Juniper Networks to become Juniper Authorized Training Partner in selected countries across EMEA. 3x Insoft Tunisia, Dubai and Pakistan were born. </p>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="oj5">
                        <div class="design-process-content">
                            <h2>2010</h2>
                            <p>Global DEW Agreement with Nokia Siemens Networks -Hired 15th resource in the PS Team </p>
                            </li>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="oj6">
                        <div class="design-process-content">
                            <h2>2011</h2>
                            <p>as Started working with global training companies to provide product management on Juniper & HP globally</p>


                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane " id="oj7">
                        <div class="design-process-content">
                            <h2>2012</h2>
                            <p><b>CLP Launch</b><br />
                                • Cisco Business started in Finland, with the status Cisco Learning Partner Finland</p><br />
                            <img src="{{ asset('images/reference-logos/Cisco-Learning-Partner.png') }}" class="lls" width="100">

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="oj8">
                        <div class="design-process-content">
                            <h2>2013</h2>
                            <p>Became Cisco Learning Specialized Partner in EMEA.Expanded the geo reach to anywhere in EMEA for Cisco delivery. </p>


                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="oj9">
                        <div class="design-process-content">
                            <h2>2014</h2>
                            <p><b>CLSP Status</b><br />
                                • 25 CCSIs<br />
                                • CLSP Status<br />
                                • 150+ Courses<br />
                                • EN Specialization<br />
                                • Finland Local Office</p><br />
                            <img src="{{ asset('images/reference-logos/Business_Enablement_Partners.png') }}" class="bep" width="100">
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane " id="oj10">
                        <div class="design-process-content">
                            <h2>2015</h2>
                            <p><b>Nordic Focus</b><br />
                                • Denmark, Norway were added<br />
                                • Nordic Sales – 4.7 CSAT global<br />
                                • 2500 + Student Days<br />
                                • Full Cisco Portfolio
                            </p>
                            <img src="{{ asset('images/reference-logos/Authorized-Partner-Logo.png') }}" class="Prepforce-Logo22" width="225" style="padding-top:15px;">

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="oj11">
                        <div class="design-process-content">
                            <h2>2016</h2>
                            <p> <b>Fortinet Education & Consultancy</b><br />
                                • The only Premier ATC to work for Fortinet Education <br /> covering whole North Europe


                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="oj12">
                        <div class="design-process-content">
                            <h2>2017</h2>
                            <p><b>NSE-8 Training Advanced Consultancy</b><br />
                                • Only Global Company proprietary of NSE8 training content<br />
                                • The most advanced labs in the world<br />
                                • Consultancy projects </p><br />
                            <img src="{{ asset('images/reference-logos/Prepforce8.png') }}" class="Prepforce-Logo22" width="250">
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="oj13">
                        <div class="design-process-content">
                            <h2>2018</h2>
                            <p><b>Advanced Competence Center</b><br />
                                • Services development in the UK<br />
                                • Most Advanced Team of SMEs<br />
                                • Resource pool distributed globally</p>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
-->

<!-- TODO: write these leadership cards as components -->
<div class="container mx-auto">
    <h3 class="text-3xl text-center p-10">
        @lang('about.leadership')
    </h3>
    <div class="flex flex-wrap justify-evenly mb-10 p-5">
        <div class="max-w-sm w-full sm:w-6/12 lg:w-4/12 my-5 rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="{{ asset('images/leadership/ali.png') }}" alt="CEO & President Ali Manzoor" />
            <div class="px-6 py-4 text-center">
                <h3 class="font-bold text-2xl mb-2">Ali Manzoor</h3>
                <h4 class="font-semibold text-xl mb-1">
                    @lang('about.ceo')
                </h4>
                <h5 class="text-lg mb-2">
                    @lang('about.gb')
                </h5>
                <ul class="">
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="mailto:amanzoor@insoftservices.com">
                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="https://www.linkedin.com/in/ali-manzoor-43a49b2/" target="_blank">
                            <i class="fab fa-linkedin fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="max-w-sm w-full sm:w-6/12 lg:w-4/12 my-5 rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="{{ asset('images/leadership/Enrico_Angioli.png') }}" alt="Vice President Enrico Angioli" />
            <div class="px-6 py-4 text-center">
                <h3 class="font-bold text-2xl mb-2">Enrico Angioli</h3>
                <h4 class="font-semibold text-xl mb-1">
                    @lang('about.vp_strategy')
                </h4>
                <h5 class="text-lg mb-2">
                    @lang('about.italy')
                </h5>
                <ul class="">
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="mailto:info@insoftservices.it">
                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="https://www.linkedin.com/in/enrico-angioli/" target="_blank">
                            <i class="fab fa-linkedin fa-2x  m" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="max-w-sm w-full sm:w-6/12 lg:w-4/12 my-5 rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="{{ asset('images/leadership/Tanja-Varvikko.jpg') }}" alt="Country Manager Tanja Varvikko" />
            <div class="px-6 py-4 text-center">
                <h3 class="font-bold text-2xl mb-2">Tanja Varvikko</h3>
                <h4 class="font-semibold text-xl mb-1">
                    @lang('about.country_manager')
                </h4>
                <h5 class="text-lg mb-2">
                    @lang('about.finland')
                </h5>
                <ul class="">
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="mailto:tanja.varvikko@insoftservices.fi">
                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="https://www.linkedin.com/in/tanjavarvikko/" target="_blank">
                            <i class="fab fa-linkedin fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="max-w-sm w-full sm:w-6/12 lg:w-4/12 my-5 rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="{{ asset('images/leadership/Maz-Shakibaii.png') }}" alt="Account Manager Maz Shakibaii" />
            <div class="px-6 py-4 text-center">
                <h3 class="font-bold text-2xl mb-2">Maz Shakibaii</h3>
                <h4 class="font-semibold text-xl mb-1">
                    @lang('about.account_manager')
                </h4>
                <h5 class="text-lg mb-2">
                    @lang('about.uk_ireland')
                </h5>
                <ul class="">
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="mailto:info@insoftservices.uk">
                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="https://www.linkedin.com/in/mazshakibaii/" target="_blank">
                            <i class="fab fa-linkedin fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="max-w-sm w-full sm:w-6/12 lg:w-4/12 my-5 rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="{{ asset('images/leadership/Insoft-Picture-Daniela.png') }}"
                alt="HR Manager Daniela Venturelli" />
            <div class="px-6 py-4 text-center">
                <h3 class="font-bold text-2xl mb-2">Daniela Venturelli</h3>
                <h4 class="font-semibold text-xl mb-1">
                    @lang('about.hr_manager')
                </h4>
                <h5 class="text-lg mb-2">
                    @lang('about.italy')
                </h5>
                <ul class="">
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="mailto:info@info@insoftservices.it">
                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="https://www.linkedin.com/in/dventurelli/"  target="_blank">
                            <i class="fab fa-linkedin fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="max-w-sm w-full sm:w-6/12 lg:w-4/12 my-5 rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="{{ asset('images/leadership/Mitzy-Insoft-Services-Picture.png') }}"
                alt="Business Development Manager Mitzy Maino" />
            <div class="px-6 py-4 text-center">
                <h3 class="font-bold text-2xl mb-2">Mitzy Maino</h3>
                <h4 class="font-semibold text-xl mb-1">
                    @lang('about.business_dev')
                </h4>
                <h5 class="text-lg mb-2">
                    @lang('about.emea')
                </h5>
                <ul class="">
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="mailto:info@m.maino@insoftservices.com">
                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="https://www.linkedin.com/in/mitzy-maino/" target="_blank">
                            <i class="fab fa-linkedin fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="max-w-sm w-full sm:w-6/12 lg:w-4/12 my-5 rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="{{ asset('images/leadership/Olga-Erdie.png') }}" alt="Inside Sales Olga Erdie" />
            <div class="px-6 py-4 text-center">
                <h3 class="font-bold text-2xl mb-2">Olga Erdie</h3>
                <h4 class="font-semibold text-xl mb-1">
                    @lang('about.inside_sales')
                </h4>
                <h5 class="text-lg mb-2">
                    @lang('about.emea')
                </h5>
                <ul class="">
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="mailto:o.erdie@insoftservices.com">
                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="https://www.linkedin.com/in/olga-erdniieva-358ba816b/" target="_blank">
                            <i class="fab fa-linkedin fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="max-w-sm w-full sm:w-6/12 lg:w-4/12 my-5 rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="{{ asset('images/leadership/Mari-Bergman-Insoft-Services.jpg') }}"
                alt="Training Coordinator Mari Bergman" />
            <div class="px-6 py-4 text-center">
                <h3 class="font-bold text-2xl mb-2">Mari Bergman</h3>
                <h4 class="font-semibold text-xl mb-1">
                    @lang('about.training_coordinator')
                </h4>
                <h5 class="text-lg mb-2">
                    @lang('about.sweden')
                </h5>
                <ul class="">
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="mailto:m.bergman@insoftservices.com">
                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="https://www.linkedin.com/in/mari-bergman-959552155/" target="_blank">
                            <i class="fab fa-linkedin fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="max-w-sm w-full sm:w-6/12 lg:w-4/12 my-5 rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="{{ asset('images/leadership/Brunner-Toywa-Insoft-Services.jpg') }}"
                alt="Network Automation Developer Brunner Toywa" />
            <div class="px-6 py-4 text-center">
                <h3 class="font-bold text-2xl mb-2">Brunner Toywa</h3>
                <h4 class="font-semibold text-xl mb-1">
                    @lang('about.network_automation_dev')
                </h4>
                <h5 class="text-lg mb-2">
                    @lang('about.emea')
                </h5>
                <ul class="">
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="mailto:b.toywa@insoftservices.uk">
                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="https://www.linkedin.com/in/brunner-k-58204298/" target="_blank">
                            <i class="fab fa-linkedin fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="max-w-sm w-full sm:w-6/12 lg:w-4/12 my-5 rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="{{ asset('images/leadership/Rita-Goncalves.png') }}" 
            alt="Marketing Manager Rita Goncalves" />
            <div class="px-6 py-4 text-center">
                <h3 class="font-bold text-2xl mb-2">Rita Goncalves</h3>
                <h4 class="font-semibold text-xl mb-1">
                    @lang('about.marketing_man')
                </h4>
                <h5 class="text-lg mb-2">
                    @lang('about.emea')
                </h5>
                <ul class="">
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="mailto:r.goncalves@insoftservices.com">
                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="https://www.linkedin.com/in/ritavigoncalves/" target="_blank">
                            <i class="fab fa-linkedin fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="max-w-sm w-full sm:w-6/12 lg:w-4/12 my-5 rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="{{ asset('images/leadership/tommi-niemi.png') }}" 
            alt="DevOps Tommi Niemi" />
            <div class="px-6 py-4 text-center">
                <h3 class="font-bold text-2xl mb-2">Tommi Niemi</h3>
                <h4 class="font-semibold text-xl mb-1">
                    @lang('about.fullstack')
                </h4>
                <h5 class="text-lg mb-2">
                    @lang('about.finland')
                </h5>
                <ul class="">
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="mailto:tommi.niemi@insoftservices.fi">
                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="inline m-1">
                        <a class="hover:text-secondary" href="https://www.linkedin.com/in/tomminiemi/" target="_blank">
                            <i class="fab fa-linkedin fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="bg-primary-500 w-full min-h-screen">
    <div class="container mx-auto text-center text-white p-16">
        <h3 class="text-3xl p-10">
            @lang('about.our_offices')
        </h3>
        <p class="text-xl font-light mb-5">
            @lang('about.our_offices_sub')
        </p>
        <img src="{{ asset('images/maps/Map-Insoft.png') }}" class="w-full mb-12">

        <!-- TODO: office caroussel slides functionality caroussel -->
        <div class="flex-row justify-between">
            <i class="fas fa-chevron-left fa-2x"></i>
            <div class="text-lg slides">
                <div>
                    <!-- TODO: write offices as component -->
                    <div class="text-white slide">
                        <p class="font-bold uppercase pb-2 block text-xl text-center">
                            @lang('about.finland')
                        </p>
                        <p>
                            @lang('about.fi_email')
                        </p>
                        <p>
                            @lang('about.fi_phone')
                        </p>
                    </div>
                    <div class="text-white slide">
                        <p class="font-bold uppercase pb-2 block text-xl text-center">
                            @lang('about.denmark')
                        </p>
                        <p>
                            @lang('about.dk_email')
                        </p>
                        <p>
                            @lang('about.dk_phone')
                        </p>
                    </div>
                    <div class="text-white slide">
                        <p class="font-bold uppercase pb-2 block text-xl text-center">
                            @lang('about.norway')
                        </p>
                        <p>
                            @lang('about.no_email')
                        </p>
                        <p>
                            @lang('about.no_phone')
                        </p>
                    </div>
                    <div class="text-white slide">
                        <p class="font-bold uppercase pb-2 block text-xl text-center">
                            @lang('about.sweden')
                        </p>
                        <p>
                            @lang('about.se_email')
                        </p>
                        <p>
                            @lang('about.se_phone')
                        </p>
                    </div>
                    <div class="text-white slide">
                        <p class="font-bold uppercase pb-2 block text-xl text-center">
                            @lang('about.gb')
                        </p>
                        <p>
                            @lang('about.gb_email')
                        </p>
                        <p>
                            @lang('about.gb_phone')
                        </p>
                    </div>
                    <div class="text-white slide">
                        <p class="font-bold uppercase pb-2 block text-xl text-center">
                            @lang('about.netherlands')
                        </p>
                        <p>
                            @lang('about.nl_email')
                        </p>
                        <p>
                            @lang('about.nl_phone')
                        </p>
                    </div>
                    <div class="text-white slide">
                        <p class="font-bold uppercase pb-2 block text-xl text-center">
                            @lang('about.germany')
                            </p>
                        <p>
                            @lang('about.de_email')
                        </p>
                        <p>
                            @lang('about.de_phone')
                        </p>
                    </div>

                    <div class="text-white slide">
                        <p class="font-bold uppercase pb-2 block text-xl text-center">
                            @lang('about.italy')
                            </p>
                        <p>
                            @lang('about.it_email')
                        </p>
                        <p>
                            @lang('about.it_phone')
                        </p>
                    </div>

                </div>
                <i class="fas fa-chevron-right fa-2x"></i>
            </div>
        </div>
    </div>
</div>

    <div class="min-h-40vh w-full">
        <div class="container mx-auto text-center">
            <h3 class="text-3xl p-10">@lang('about.partners_references')</h3>
            <!-- TODO:write partnership slides as blade components, not really saving space tho -->
            <div class="customer-logos slider">
                <div class="slide"><img src="{{ asset('images/reference-logos/Reference-Logo-Prince2.png') }}"></div>
                <div class="slide"><img src="{{ asset('images/reference-logos/Reference-Logo-Elisa.png') }}"></div>
                <div class="slide"><img src="{{ asset('images/reference-logos/Reference-Logo-Juniper.png') }}"></div>
                <div class="slide"><img src="{{ asset('images/reference-logos/Reference-Logo-Fortinet.png') }}"></div>
                <div class="slide"><img src="{{ asset('images/reference-logos/Reference-Logo-Cisco.png') }}"></div>
                <div class="slide"><img src="{{ asset('images/reference-logos/Reference-Logo-IAPP.png') }}"></div>
                <div class="slide"><img src="{{ asset('images/reference-logos/Reference-Logo-ATIC360.png') }}"></div>
                <div class="slide"><img src="{{ asset('images/reference-logos/Reference-Logo-Microsoft.png') }}"></div>
                <div class="slide"><img src="{{ asset('images/reference-logos/Reference-Logo-Nokia.png') }}"></div>
                <div class="slide"><img src="{{ asset('images/reference-logos/Reference-Logo-PeopleCert.png') }}"></div>
                <div class="slide"><img src="{{ asset('images/reference-logos/Reference-Logo-Here.png') }}"></div>
                <div class="slide"><img src="{{ asset('images/reference-logos/Reference-Logo-PrepForce.png') }}"></div>
                <div class="slide"><img src="{{ asset('images/reference-logos/Reference-Logo-Tieto.png') }}"></div>
                <div class="slide"><img src="{{ asset('images/reference-logos/Reference-Logo-Fujitsu.png') }}"></div>
            </div>
        </div>
    </div>
    @endsection
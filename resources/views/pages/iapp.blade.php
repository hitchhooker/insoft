@extends('layouts.app')

@section('title', 'IAPP Training')

@section('content')
<div class="min-h-30vh p-10 items-start flex flex-col justify-center"
    style="background-image:url({{asset('images/cover/insoftservices-iapp-certifications-courses-training.jpg')}});">
    <div class="mx-auto container">
        <h1 class="text-white uppercase text-3xl">IAPP Training</h1>
        <br>
        <span class="text-white text-2xl">GDPR Certification & Courses</span>
    </div>
</div>
<div class="container mx-auto text-tertiary-700">

    <div class="p-10 bg-white my-10 flex lg:flex-row flex-col-reverse">
        <div class="lg:w-8/12">
            <h2 class="text-2xl mb-5">IAPP – International Association of Privacy Professionals Training</h2>
            <p>
                The <span class="font-bold">IAPP (International Association of Privacy Professionals)</span> is the
                industry
                standard when it comes
                to Information Privacy. The IAPP is responsible for developing and launching globally recognised
                credentialing programs which help Privacy Professionals develop their careers and Organisations, to
                manage and protect their data.
            </p>
            <p>
                With data being one of the most valuable assets, Organisations must develop the expertise necessary to
                recognise potential problems before they become an issue, avoiding major fines and legal sanctions.
            </p>
            <h3 class="text-xl font-light my-5">Insoft Services’ IAPP Accreditation</h3>
            <p>
                As an Official Training Partner, Insoft Services provides access to accredited IAPP Privacy Training
                across
                the EMEA. These certifications comply with the ANSI/ISO/IEC 17024 standard which means they have been
                developed to meet stringent requirements and to make sure that those who possess the IAPP credentials
                have
                the required skills and knowledge to do the job better than those who do not.
            </p>
        </div>
        <div class="lg:w-4/12">
            <img alt="IAPP Official Training Partner" src="{{ asset('images/reference-logos/Reference-Logo-IAPP.png') }}">
        </div>
    </div>
    <div class="p-10 my-10 bg-white">
        <h3 class="text-xl font-light mb-5">IAPP Training</h3>
        <p>
            The IAPP Training will help you advance your career as a Privacy Professional. Insoft Services’ training
            programs provide access to official content, textbooks, sample questions, the exam voucher and 1 year of
            IAPP Membership.
        </p>
        <p>
            These training programs have been specifically designed for professionals who manage, handle and access
            data.
        </p>
    </div>
    <div class="p-10 my-10 bg-white">
        <h3 class="text-center text-xl font-semibold m-5">Compare programs to choose the right one for you</h3>
        <div class="lg:w-10/12 mx-auto">
            <div class="grid md:grid-cols-3 gap-5">
                <div>
                    <img alt="CIPP Training Europe" width="200px" class="block mx-auto"
                        src="{{ asset('images/certified/CIPP-Europe.png') }}">
                    <h4 class="font-semibold text-center m-5">Laws and Regulations</h4>
                    <ul class="px-5 list-disc">
                        <li>Legal</li>
                        <li>Compliance</li>
                        <li>Information Management</li>
                        <li>Data Governance</li>
                        <li>Human Resource</li>
                    </ul>
                </div>
                <div class="">
                    <img alt="CIPP Training Europe" width="200px" class="block mx-auto"
                        src="{{ asset('images/certified/CIPM.png') }}">
                    <h4 class="font-semibold text-center m-5">Operations</h4>
                    <ul class="px-5 list-disc">
                        <li>Risk Management</li>
                        <li>Privacy Operations</li>
                        <li>Accountability</li>
                        <li>Audit</li>
                        <li>Privacy Analytics</li>
                    </ul>
                </div>
                <div class="">
                    <img alt="CIPP Training Europe" width="200px" class="block mx-auto"
                        src="{{ asset('images/certified/CIPT-IAPP.png') }}">
                    <h4 class="font-semibold text-center m-5">Technology</h4>
                    <ul class="px-5 list-disc">
                        <li>Information Technology</li>
                        <li>Information Security</li>
                        <li>Software Engineering</li>
                        <li>Privacy by Design</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="m-5" />
        <p>
            For those wishing to focus on the EU’s General Data Protection Regulation (GDPR), we recommend the
            CIPP/E and CIPM bundle training to quick start your GDPR readiness journey.
        </p>
        <h3>Who should attend?</h3>
        <p>
            Anyone interested in Data Protection or Information Privacy, especially professionals working with
            privacy laws, regulations and frameworks, including Lawyers, Advocates, Solicitors, Compliance
            Specialists and Legal and those who manage day-to-day privacy operations for businesses and
            organisations, including Data Protection Officers (DPOs), Project Managers, Leaders, HR and other
            Privacy Professionals.
        </p>
        <h3>How to enroll?</h3>
        <p>
            Our IAPP Privacy courses are available online or in a classroom. FIND TRAINING NEAR YOU >
        </p>
        <p>
            Do you have doubts if the IAPP training is right for you? Send us an email at info@insoftservices.uk
            or
            call +44 (0) 20 7193 1373.
        </p>
        <h3>Data Privacy Consulting</h3>
        <p>
            Implementation of Data Privacy and Compliance with the GDPR regulations requires more than just
            training
            individuals across the organisation. Adopt a methodology that works better for your business.
            Schedule
            an appointment with our Privacy Experts. Read More >
        </p>
    </div>
</div>

<!--TODO: add iapp course browse module here-->
@endsection
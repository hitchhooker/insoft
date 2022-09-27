@extends('layouts.app')

@section('title', 'Our recognition')

@section('content')
<div class="bg-cover w-full min-h-320 flex items-center" style="background-image:url({{ asset('images/cover/insoft-main-picture-1280-1679.jpg')}});">
    <div class="container mx-auto">
        <h1 class="text-4xl text-white font-light uppercase">Our Recognition</h1>
    </div>
</div>  
<div class="mx-auto container my-10 grid md:grid-cols-2 gap-3">
    <div class="">

        <h2 class="font-light text-2xl my-5">Our Recognition</h2>
        <p>
            “The certification process requires a lot of hard work over a 12-month period and demonstrates Insoft
            Services
            continued EMEA wide commitment to our customers and our quality of service. This now means that our
            customers can be
            assured that they are working with an IT provider, who themselves are operating under internationally
            recognised
            information security standards.”
        </p>
        <p>
            Insoft Services has achieved the <span class="font-bold">International Organisation for Standardisation’s
                (ISO)
                9001:2008 and ISO
                27001:2005</span>
            certifications, which demonstrates an organisation’s commitment to quality-of-service standards. Customers
            using
            Insoft’s services rely on our uninterrupted delivery of business-critical technical consultancy services.
            The ISO
            certification assures adherence to documented processes and procedures, and continued improvements in our
            Professional Services.
        </p>
        <p>
            ISO 9001:2008 and ISO 27001:2005 standards specify Quality Management System (QMS) requirements focused on
            an
            organisation’s ability to meet and improve upon customer satisfaction and quality requirements. As a part of
            the
            certification process, Insoft Services established its own QMS to ensure the worldwide customers
            satisfaction.
        </p>
        <p>
            By identifying areas for improvement, creating recommendations to resolve identified gaps, and executing
            against
            these recommendations, Insoft is ensuring that it has the global processes necessary to consistently improve
            service
            quality on a regular, quantifiable, and demonstrable basis.
        </p>
    </div>
    <div class="flex justify-center items-center">
        <img alt="ISO certified" src="{{ asset('images/certified/ISO-Certified-Insoft.png') }}">
    </div>
</div>
@endsection
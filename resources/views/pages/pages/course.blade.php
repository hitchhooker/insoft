@extends('layouts.app')

@section('title', 'course page')

@section('content')
<div class="text-white min-h-480 bg-cover" style="background-image: url({{asset('images/cover/course-cover-1-1920.png')}});">
    <div class="container mx-auto">
        <div class="pb-16 pt-32 px-5 flex flex-col justify-between">
            <h1 class="uppercase text-4xl md:text-5xl font-normal sm:8/12 md:w-7/12 xl:w-5/12">
                @lang('course.title_default')
            </h1>
            <h2 class="text-2lx md:text-3xl font-normal mb-20">
                @lang('course.duration_default')
            </h2>
            <div class="flex flex-col md:flex-row justify-start md:items-end items-center py-10">
                <div class="flex flex-col w-56">
                    <button
                        class="uppercase bg-secondary-600 text-center text-2xl py-2 px-16 mb-3 hover:bg-secondary-700">
                        @lang('course.register')
                    </button>
                    <p class="text-center">
                        @lang('course.pricing_default')
                    </p>
                </div>
                <div class="flex w-56">
                    <img alt="@lang('course.logo-alt')"
                        src="{{ asset('images/reference-logos/Reference-Logo-Cisco.png') }}">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mx-auto container mb-20 px-2">
    <div class="flex flex-col-reverse sm:flex-row py-10">
        <div class="w-full sm:w-6/12 md:w-8/12 lg:w-9/12 mt-0 sm:-mt-40 md:mt-0">
            <div class="">
                <!-- TODO: modularize -->
                <!-- TODO: work on checked funtionality on click -->

                <div class="tab shadow-md mx-auto my-5">
                    <input class="absolute opacity-0" id="details" type="checkbox" name="tabs">
                    <label class="bg-gray-400 flex justify-between p-6" for="details">
                        <h4 class="text-primary text-2xl">
                            @lang('course.details')
                        </h4>
                        <!-- TODO: make 180 degree rotate to work when input is checked -->
                        <img class="origin-center transform checked:rotate-180 duration-200"
                            src="{{ asset('images/icons/downarrow.svg') }}">
                    </label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-300 border-primary-300 leading-normal">
                        <div class="p-5">
                            @lang('course.details_default')
                        </div>
                    </div>
                </div>

                <div class="tab shadow-md mx-auto my-5">
                    <input class="absolute opacity-0" id="objectives" type="checkbox" name="tabs">
                    <label class="bg-gray-400 flex justify-between p-6" for="objectives">
                        <h4 class="text-primary text-2xl">
                            @lang('course.objectives')
                        </h4>
                        <!-- TODO: make 180 degree rotate to work when input is checked -->
                        <img class="origin-center transform checked:rotate-180 duration-200"
                            src="{{ asset('images/icons/downarrow.svg') }}">
                    </label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-300 border-primary-300 leading-normal">
                        <div class="p-5">
                            @lang('course.objectives_default')
                        </div>
                    </div>
                </div>

                <div class="tab shadow-md mx-auto my-5">
                    <input class="absolute opacity-0" id="outline" type="checkbox" name="tabs">
                    <label class="bg-gray-400 flex justify-between p-6" for="outline">
                        <h4 class="text-primary text-2xl">
                            @lang('course.outline')
                        </h4>
                        <!-- TODO: make 180 degree rotate to work when input is checked -->
                        <img class="origin-center transform checked:rotate-180 duration-200"
                            src="{{ asset('images/icons/downarrow.svg') }}">
                    </label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-300 border-primary-300 leading-normal">
                        <div class="p-5">
                            @lang('course.outline_default')
                        </div>
                    </div>
                </div>

                <div class="tab shadow-md mx-auto my-5">
                    <input class="absolute opacity-0" id="audience" type="checkbox" name="tabs">
                    <label class="bg-gray-400 flex justify-between p-6" for="audience">
                        <h4 class="text-primary text-2xl">
                            @lang('course.audience')
                        </h4>
                        <!-- TODO: make 180 degree rotate to work when input is checked -->
                        <img class="origin-center transform checked:rotate-180 duration-200"
                            src="{{ asset('images/icons/downarrow.svg') }}">
                    </label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-300 border-primary-300 leading-normal">
                        <div class="p-5">
                            @lang('course.audience_default')
                        </div>
                    </div>
                </div>

                <div class="tab shadow-md mx-auto my-5">
                    <input class="absolute opacity-0" id="prerequisites" type="checkbox" name="tabs">
                    <label class="bg-gray-400 flex justify-between p-6" for="prerequisites">
                        <h4 class="text-primary text-2xl">
                            @lang('course.prerequisites')
                        </h4>
                        <!-- TODO: make 180 degree rotate to work when input is checked -->
                        <img class="origin-center transform checked:rotate-180 duration-200"
                            src="{{ asset('images/icons/downarrow.svg') }}">
                    </label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-300 border-primary-300 leading-normal">
                        <div class="p-5">
                            @lang('course.prerequisites_default')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sm:w-5/12 lg:w-3/12 md:w-4/12 w-full sm:justify-end">
            <div class="md:-mt-96 -mt-40 w-9/12 sm:w-11/12 mx-auto bg-white xl:p-10 p-5 shadow-md">
                <h3 class="mb-5 text-xl font-medium">
                    @lang('course.upcoming')
                </h3>

                <!-- TODO: modularize courses and bring data from backend -->
                <div class="py-5 flex flex-col">
                    <h4>
                        @lang('course.date_default')
                    </h4>
                    <span>
                        @lang('course.time_default')
                    </span>
                    <span>
                        @lang('course.location_default')
                    </span>
                    <button class="py-2 px-12 w-11/12 text-white bg-secondary-500 hover:bg-secondary-600 uppercase">
                        @lang('course.register')
                    </button>
                </div>
                <hr />
                <div class="py-5 flex flex-col">
                    <h4>
                        @lang('course.date_default')
                    </h4>
                    <span>
                        @lang('course.time_default')
                    </span>
                    <span>
                        @lang('course.location_default')
                    </span>
                    <button class="py-2 px-12 w-11/12 text-white bg-secondary-500 hover:bg-secondary-600 uppercase">
                        @lang('course.register')
                    </button>
                </div>
                <hr />
                <div class="py-5 flex flex-col">
                    <h4>
                        @lang('course.date_default')
                    </h4>
                    <span>
                        @lang('course.time_default')
                    </span>
                    <span>
                        @lang('course.location_default')
                    </span>
                    <button class="py-2 px-12 w-11/12 text-white bg-secondary-500 hover:bg-secondary-600 uppercase">
                        @lang('course.register')
                    </button>
                </div>
                <hr />
                <div class="py-5 flex flex-col">
                    <h4>
                        @lang('course.date_default')
                    </h4>
                    <span>
                        @lang('course.time_default')
                    </span>
                    <span>
                        @lang('course.location_default')
                    </span>
                    <button class="py-2 px-12 w-11/12 text-white bg-secondary-500 hover:bg-secondary-600 uppercase">
                        @lang('course.register')
                    </button>
                </div>
                <hr />

            </div>
        </div>
    </div>
    <div class="py-10 px-2">
        <h3 class="text-center pb-10 text-2xl">Course Recommendations</h3>
        <div class="recommendations grid lg:grid-cols-3 gap-5 min-h-240 text-white">
            <div class="pt-12 pl-10 pr-20 min-h-240"
                style="background-image: url({{asset('images/buttons/course-recommend-button-1.png')}})">
            </div>
            <div class="pt-12 pl-10 pr-20 min-h-240"
                style="background-image: url({{asset('images/buttons/course-recommend-button-2.png')}})">
            </div>
            <div class="pt-12 pl-10 pr-20 min-h-240"
                style="background-image: url({{asset('images/buttons/course-recommend-button-3.png')}})">
            </div>

        </div>
    </div>
</div>

@endsection
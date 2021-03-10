@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12">
            <div class="p-6">
                <h1 class="text-2xl font-semibold mb-1">{{ $doctor->name }}</h1>
                <span class="bg-indigo-500 text-white font-bold py-1 px-4 rounded">No. KTA: {{ $doctor->nokta }}</span>
            </div>
            
            <div class="bg-white p-6 rounded-lg">
                <div class="-my-8 divide-y-2 divide-gray-100">
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">DATE OF BIRTH</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $doctor->dob }}</p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">SEX</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $doctor->sex }}</p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">DEPARTMENT</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $doctor->position }}</p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">EDUCATION</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $doctor->education }}</p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">EMAIL</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $doctor->email }}</p>
                        </div>
                    </div>

                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">PHONE NUMBER</span>
                        </div>
                        <div class="md:flex-grow">
                            <p class="leading-relaxed">{{ $doctor->phone }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex p-6">
                <a href="{{ route('doctor') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Back to list</a>
            </div>

        </div>
    </div>
@endsection
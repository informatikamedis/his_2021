@extends('layout.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-3/4 bg-white p-9 rounded-lg">
            <div class="px-6 py-4 bg-white border-b border-gray-200 font-bold uppercase">
                Facility
            </div>

            <div class="container mx-auto mt-10 grid grid-cols-1 gap-8 md:grid-cols-3 xl:grid-cols-3">
                <div class="card bg-white shadow h-auto w-auto rounded-2xl overflow-hidden relative">
                    <h1 class="shadow-md text-l font-bold text-center text-gray-600 uppercase p-3">Patient Room</h1>
                    <img class="py-2 transform scale-110" src="{{ asset('img/hospital_room.jpg') }}" alt="" />
                    <button onclick="location.href='{{ route('room') }}'" class="card bg-gray-700 hover:bg-gray-600 transition text-white w-full h-1/6 absolute bottom-0 ">Show table</button>
                </div>

                <div class="card bg-white shadow h-auto w-auto rounded-2xl overflow-hidden relative">
                    <h1 class="shadow-md text-l font-bold text-center text-gray-600 uppercase p-3">Consulting Room</h1>
                    <img class="py-11 transform scale-150" src="{{ asset('img/consulting.jpg') }}" alt="" />
                    <button onclick="location.href='{{ route('consulting') }}'" class="card bg-gray-700 hover:bg-gray-600 transition text-white w-full h-1/6 absolute bottom-0 ">Show table</button>
                </div>
                
                <div class="card bg-white shadow h-auto w-auto rounded-2xl overflow-hidden relative">
                    <h1 class="shadow-md text-l font-bold text-center text-gray-600 uppercase p-3">Operating Theater</h1>
                    <img class="py-6 transform scale-125" src="{{ asset('img/operating.jpg') }}" alt="" />
                    <button onclick="location.href='{{ route('room') }}'" class="card bg-gray-700 hover:bg-gray-600 transition text-white w-full h-1/6 absolute bottom-0 ">Show table</button>
                </div>
            </div>
        </div>
    </div>
@endsection
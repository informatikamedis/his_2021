@extends('layout.app')

@section('content')
<div class="flex flex-col h-screen">
    <div class="grid place-items-center mx-2 my-20 sm:my-auto">
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
        px-6 py-10 sm:px-10 sm:py-6 
        bg-white rounded-lg shadow-md lg:shadow-lg">
            <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
                Edit Doctor
            </h2>

            <form method="POST" action="{{ route('doctor.edit', $doctor) }}">
                @csrf
                <div class="bg-white sm:p-6">
                    <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Name</label>
                    <input id="name" type="text" name="name" placeholder="Enter name..." autocomplete="name" 
                        class="block w-full py-3 px-1 mt-2 
                        text-gray-800 appearance-none 
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="{{ $doctor->name }}"
                        />
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="nokta" class="block text-xs font-semibold text-gray-600 uppercase">No. KTA</label>
                    <input id="nokta" type="number" name="nokta" placeholder="Enter KTA..."
                        class="block w-full py-3 px-1 mt-2 
                        text-gray-800 appearance-none 
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="{{ $doctor->nokta }}"
                        />
                    @error('nokta')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="sex" class="block text-xs font-semibold text-gray-600 uppercase">Sex</label>
                    <input id="sex" type="text" name="sex" placeholder="M / F"
                        class="block w-full py-3 px-1 mt-2 
                        text-gray-800 appearance-none 
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="{{ $doctor->sex }}"
                        />
                    @error('sex')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="dob" class="block text-xs font-semibold text-gray-600 uppercase">Date of Birth</label>
                    <input id="dob" type="date" name="dob"
                        class="block w-full py-3 px-1 mt-2 
                        text-gray-800 appearance-none 
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="{{ $doctor->dob }}"
                        />
                    @error('dob')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="position" class="block text-xs font-semibold text-gray-600 uppercase">Department</label>
                    <input id="position" type="text" name="position" placeholder="Enter department..."
                        class="block w-full py-3 px-1 mt-2 
                        text-gray-800 appearance-none 
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="{{ $doctor->position }}"
                        />
                    @error('position')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="education" class="block text-xs font-semibold text-gray-600 uppercase">Education</label>
                    <input id="education" type="text" name="education" placeholder="Enter education..."education
                        class="block w-full py-3 px-1 mt-2 
                        text-gray-800 appearance-none 
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="{{ $doctor->education }}"
                        />
                    @error('education')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="email" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Email</label>
                    <input id="email" type="email" name="email" placeholder="Enter email..." autocomplete="email"
                        class="block w-full py-3 px-1 mt-2 mb-4
                        text-gray-800 appearance-none 
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="{{ $doctor->email }}"
                        />
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="bg-white sm:p-6">
                    <label for="phone" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Phone</label>
                    <input id="phone" type="number" name="phone" placeholder="Enter phone..." autocomplete="phone"
                        class="block w-full py-3 px-1 mt-2 mb-4
                        text-gray-800 appearance-none 
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        value="{{ $doctor->phone }}"
                        />
                    @error('phone')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex items-center space-x-4 justify-end px-4 py-3 sm:px-6">
                    <a href="{{ route('doctor') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Back to list
                    </a>
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Update
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
@extends('layout')

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

@section('content')
    <div class="content-center" style="width: 300px; margin: auto;">
        <form
            method="POST"
            action="/contact"
            class="bg-white p-6 roudned shadow-md"
            style="width: 300px">

            @csrf
            {{-- @method('put') --}}

            <div class="mb-5">
                <label for="email" class="block text-xs uppercase font-semibold mb-1">
                    Email Address
                </label>

                <input type="text" id="email" name="email" class="border px-2 px-1 text-sm w-full">

                @error('email')
                    <div class="text-red-500 text-xs mt-3">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <button type="submit" class="bg-blue-500 py-2 text-white rounded-full text-sm w-full">
                Email Me
            </button>

            @if(session('message'))
                {{ session('message') }}
            @endif


        </form>
    </div>


@endsection

@extends('components.template.auth')

@section('content')

    <section class="grid h-screen place-content-center bg-gray-100 text-gray-700">
        <div class="mb-10 text-center text-indigo-600">
            <h1 class="text-3xl font-bold tracking-widest">My store</h1>
            <p style="margin-top: 10px"><span class="font-bold">Log in</span> to <span class="font-bold">your</span> account</p>
        </div>
        <div class="flex flex-col items-center justify-center space-y-6">
            <input type="text" id="name" name="name" placeholder="name" class="w-80 appearance-none rounded-full border-2 border-indigo-600 bg-white p-2 px-4 focus:bg-white focus:ring-2 focus:ring-indigo-500" />
        <div>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" class="w-80 appearance-none rounded-full border-2 border-indigo-600 bg-white p-2 px-4 focus:bg-white focus:ring-2 focus:ring-indigo-500" />
            <p id="validation" class="text-center text-red-500 italic text-sm"></p>
        </div>
            <button id="showPw" class="rounded-full bg-indigo-600 p-2 px-4 text-white hover:bg-indigo-700"><span id="showHide">Show</span> Password</button>
        </div>
    </section>


@endsection

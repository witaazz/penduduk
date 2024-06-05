@extends('auth.template')

@section('title')
Login
@endsection

@section('content')

<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-sky-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
        </div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">

            <div class="max-w-md mx-auto">
                <form class="flex flex-col gap-4 pb-4" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1 class="mb-4 text-2xl font-bold  dark:text-gray-900">Login</h1>
                    <div>
                        <div class="mb-2">
                            <label class="text-sm font-medium text-gray-900 dark:text-gray-900" for="email">Email:</label>
                        </div>
                        <div class="flex w-full rounded-lg pt-1">
                            <div class="relative w-full">
                                <input class="block w-full border disabled:cursor-not-allowed disabled:opacity-50 bg-gray-50 border-gray-300 text-gray-900 focus:border-cyan-500 focus:ring-cyan-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-cyan-500 dark:focus:ring-cyan-500 p-2.5 text-sm rounded-lg" id="email" type="email" name="email" placeholder="email@example.com">
                                <span>
                                    <p class="text-red-500">{{ $errors->first('email') }}</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mb-2">
                            <label class="text-sm font-medium text-gray-900 dark:text-gray-900" data-testid="flowbite-label" for="password">Password</label>
                        </div>
                        <div class="flex w-full rounded-lg pt-1">
                            <div class="relative w-full">
                                <input class="block w-full border disabled:cursor-not-allowed disabled:opacity-50 bg-gray-50 border-gray-300 text-gray-900 focus:border-cyan-500 focus:ring-cyan-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-cyan-500 dark:focus:ring-cyan-500 p-2.5 text-sm rounded-lg" id="password" type="password" name="password">
                                <span>
                                    <p class="text-red-500">{{ $errors->first('password') }}</p>
                                </span>
                            </div>
                        </div>
                        <!-- <p class="mt-2 cursor-pointer text-blue-500 hover:text-blue-600">Forgot password?</p> -->
                    </div>
                    <div class="flex flex-col gap-2">
                        <button type="submit" class="border transition-colors focus:ring-2 p-0.5 disabled:cursor-not-allowed border-transparent bg-sky-600 hover:bg-sky-700 active:bg-sky-800 text-white disabled:bg-gray-300 disabled:text-gray-700 rounded-lg ">
                            <span class="flex items-center justify-center gap-1 font-medium py-1 px-2.5 text-base false">
                                Login
                            </span>
                        </button>

                    </div>
                </form>
                <div class="min-w-[270px]">
                    <div class="mt-4 text-center dark:text-gray-900">New user?
                        <a class="text-blue-500 underline hover:text-blue-600" href="{{ route('register') }}">Create account
                            here</a>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>

@endsection
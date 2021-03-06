<x-guest-layout>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-6/12 px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blue-200 border-0"
            >
                <div class="rounded-t mb-0 px-6 py-6">
                <div class="text-center mb-3">
                    <h6 class="text-blue-500 text-sm font-bold">Sign up with</h6>
                </div>
                <div class="btn-wrapper text-center">
                    <button
                    class="bg-white active:bg-blue-50 text-blue-700 px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                    type="button"
                    >
                    <img alt="..." class="w-5 mr-1" src="assets/img/github.svg" />
                    Github
                    </button>
                    <button
                    class="bg-white active:bg-blue-50 text-blue-700 px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                    type="button"
                    >
                    <img alt="..." class="w-5 mr-1" src="assets/img/google.svg" />
                    Google
                    </button>
                </div>
                <hr class="mt-6 border-b-1 border-blue-300" />
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <div class="text-blue-400 text-center mb-3 font-bold">
                    <small>Or sign up with credentials</small>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="relative w-full mb-3">
                    <label
                        class="block uppercase text-blue-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                    >
                        Name
                    </label>
                    <input
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blue-300 text-blue-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Name"
                        name="name" 
                        :value="old('name')" 
                        required
                    />
                    </div>
        
                    <div class="relative w-full mb-3">
                    <label
                        class="block uppercase text-blue-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                    >
                        Email
                    </label>
                    <input
                        type="email"
                        class="border-0 px-3 py-3 placeholder-blue-300 text-blue-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Email"
                        name="email" 
                        :value="old('email')" 
                        required
                    />
                    </div>
        
                    <div class="relative w-full mb-3">
                    <label
                        class="block uppercase text-blue-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                    >
                        Password
                    </label>
                    <input
                        type="password"
                        class="border-0 px-3 py-3 placeholder-blue-300 text-blue-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Password"
                        name="password"
                        required 
                        autocomplete="new-password"
                    />
                    </div>
                    <div class="relative w-full mb-3">
                    <label
                        class="block uppercase text-blue-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                    >
                        Confirm Password
                    </label>
                    <input
                        type="password"
                        class="border-0 px-3 py-3 placeholder-blue-300 text-blue-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Password"
                        name="password_confirmation" 
                        required
                    />
                    </div>
        
                    <div>
                    <label class="inline-flex items-center cursor-pointer">
                        <input
                        id="customCheckLogin"
                        type="checkbox"
                        class="form-checkbox border-0 text-blue-700 ml-1 w-5 h-5 ease-linear transition-all duration-150 rounded"
                        />
                        <span class="ml-2 text-sm font-semibold text-blue-600">
                        I agree with the
                        <a href="javascript:void(0)" class="text-red-600">
                            Privacy Policy
                        </a>
                        </span>
                    </label>
                    </div>
                    
                    <div class="text-center mt-6">
                    <button
                        class="bg-blue-800 text-white active:bg-blue-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                        type="submit"
                    >
                        Create Account
                    </button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</x-guest-layout>

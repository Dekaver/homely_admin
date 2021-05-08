<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Input New User') }}
    </h2>
  </x-slot>
  <div class="flex items-center min-h-screen p-6 bg-gray-50">
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl">
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-full">
            <div class="w-full">
                <h1 class="mb-4 text-xl font-semibold text-gray-700 ">{{__('Create New User')}}</h1>
                <form method="POST" action="{{route('users.update', $user->id)}}">
                  @csrf
                  @method('PUT')
                  <label class="block text-sm">
                      <span class="text-gray-700">Name User</span>
                      <input
                        class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                        id="user"
                        type="text"
                        name="name"
                        value="{{$user->name}}"
                        placeholder="Name"
                        required autofocus 
                      />
                  </label>
                  <label class="block text-sm">
                    <span class="text-gray-700">Email</span>
                    <input
                      class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                      id="email"
                      type="email"
                      value="{{$user->email}}"
                      name="email"
                      placeholder="Email"
                      required autofocus 
                      />
                  </label>
                  <label class="block text-sm">
                    <span class="text-gray-700">Email</span>
                    <select class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input">
                      <option value="{{$user->status}}">aktif</option>
                      <option value="tidak aktif">Tidak aktif</option>
                      <option value="aktif">aktif</option>
                    </select>
                  </label>
                  <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                  <!-- Button Login -->
                  <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                      {{ __('Save') }}
                  </button>
                  <a href="{{route('users.index')}}" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-gray-800 transition-colors duration-150 bg-gray-50 border border-purple-600 rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    {{ __('cancel') }}
                  </a>
                </form>    
            </div>
        </div>
    </div>
  </div>
</x-app-layout>
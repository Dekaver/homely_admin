

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Show Seller') }}
    </h2>
  </x-slot>
  
  <div class="p-2 lg:p-8 w-full lg:flex">
    <div class="h-48 lg:h-auto bg-contain lg:w-48 flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden">
      <img src="https://tailwindcss.com/img/card-left.jpg" class="w-full" alt="" srcset="">
    </div>
    <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
      <div class="mb-8">
        <p class="text-sm text-grey-dark flex items-center">
          <svg class="text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
          </svg>
          Members only
        </p>
        <div class="text-black font-bold text-xl mb-2">Can coffee make you a better developer?</div>
        <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
      </div>
      <div class="flex items-center">
        <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
        <div class="text-sm">
          <p class="text-black leading-none">Jonathan Reinink</p>
          <p class="text-grey-dark">Aug 18</p>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
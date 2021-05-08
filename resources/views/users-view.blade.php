<x-app-layout>
    <x-slot name="header">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            {{ __('Show user') }}
        </h2>
    </x-slot>
    <div class="container p-8">
    
    <div class="py-12">
      <div class="text-4xl font-serif">
        Show Data user
      </div>
    </div>
    <div x-data="{ open: false }" class="mb-6">
      <a href="{{route('users.create')}}" class="bg-green-500 rounded-md hover:bg-green-700 text-white font-serif font-bold py-2 px-6">
        Add User
      </a>
    </div>
    {{-- <div class="flex justify-center"> --}}
      <div class="overflow-hidden shadow-xl rounded-lg lg:rounded-md w-12/12">
        <div class="overflow-x-auto">
          <table class="whitespace-nowrap ">
            <thead >
              <tr
                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-200 border-gray-700"
                >
                <th class="px-4 py-3 w-1.5">No</th>
                <th class="px-4 py-3 w-3/12">Username</th>
                <th class="px-4 py-3 w-4/12">Email</th>
                <th class="px-4 py-3 w-2/12">Status</th>
                <th class="px-4 py-3 w-4/12">Aksi</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y">
              @foreach ($users as $user)
                <tr class="text-gray-700">
                    <td class="px-4 py-3">
                      {{$loop->iteration}}
                    </td>
                    <td class="px-4 py-3">
                      {{$user->name}}  
                    </td>
                    <td class="px-4 py-3 col">
                      {{$user->email}}
                    </td>
                    <td class="px-4 py-3 col">
                      {{$user->status}}
                    </td>
                    <td class="px-4 py-3">
                      <form action="{{ route('users.destroy',$user->id) }}" method="post">  
                        @csrf
                        @method('DELETE')
                        <a class="bg-green-700 py-1 px-3 hover:bg-green-800 rounded-md text-white" href="{{ route('users.show', $user->id)}}">Show</a>
                        <a class="bg-blue-700 py-1 px-3 hover:bg-blue-800 rounded-md text-white" href="{{ route('users.edit', $user->id)}}">Edit</a>
                        <button type="submit" class="bg-red-700 py-1 px-3 hover:bg-red-800 text-white rounded-md">Delete</button>
                      </form>
                    </td>
                </tr>
  
              @endforeach
            </tbody>
  
          </table>
        </div>
        {{-- {!!$users->links()!!} --}}
        </div>
    </div>
          
  
  
  </x-app-layout>
  
  
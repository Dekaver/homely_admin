<x-app-layout>
  <x-slot name="header">
      <h2 class="my-6 text-2xl font-semibold text-gray-700">
          {{ __('Show house') }}
      </h2>
  </x-slot>
  <div class="container p-8">
  
  <div class="py-12">
    <div class="text-4xl font-serif">
      Show Data house
    </div>
  </div>
  <div x-data="{ open: false }" class="mb-6">
    <a href="{{route('houses.create')}}" class="bg-green-500 rounded-md hover:bg-green-700 text-white font-serif font-bold py-2 px-6">
      Add house
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
              <th class="px-4 py-3 w-2/12">Tipe</th>
              <th class="px-4 py-3 w-1/12">Lantai</th>
              <th class="px-4 py-3 w-1/12">Sertifikasi</th>
              <th class="px-4 py-3 w-3/12">Luas bangunan</th>
              <th class="px-4 py-3 w-3/12">Harga</th>
              <th class="px-4 py-3 w-3/12">Alamat</th>
              <th class="px-4 py-3 w-3/12">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y">
            @foreach ($houses as $house)
              <tr class="text-gray-700">
                  <td class="px-4 py-3">
                    {{$loop->iteration}}
                  </td>
                  <td class="px-4 py-3">
                    {{$house->tipe}}  
                  </td>
                  <td class="px-4 py-3">
                    {{$house->lantai}}  
                  </td>
                  <td class="px-4 py-3">
                    {{$house->Sertifikasi}}  
                  </td>
                  <td class="px-4 py-3">
                    {{$house->luas_bangunan}}  
                  </td>
                  <td class="px-4 py-3">
                    {{$house->harga}}  
                  </td>
                  <td class="px-4 py-3 text-sm">
                    {{substr($house->alamat, 0,15).'...'}}  
                  </td>
                  <td class="px-4 py-3">
                    <form action="{{ route('houses.destroy',$house->id) }}" method="post">  
                      @csrf
                      @method('DELETE')
                      <a class="bg-green-700 py-1 px-3 hover:bg-green-800 rounded-md text-white" href="{{ route('houses.show', $house->id)}}">Show</a>
                      <a class="bg-blue-700 py-1 px-3 hover:bg-blue-800 rounded-md text-white" href="{{ route('houses.edit', $house->id)}}">Edit</a>
                      <button type="submit" class="bg-red-700 py-1 px-3 hover:bg-red-800 text-white rounded-md">Delete</button>
                    </form>
                  </td>
              </tr>

            @endforeach
          </tbody>

        </table>
      </div>
      {{-- {!!$houses->links()!!} --}}
      </div>
  </div>
        


</x-app-layout>


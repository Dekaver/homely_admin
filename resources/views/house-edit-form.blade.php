<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Input New House') }}
    </h2>
  </x-slot>
  <div class="flex items-center min-h-screen p-6 bg-gray-50">
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl">
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-full">
            <div class="w-full">
                <h1 class="mb-4 text-xl font-semibold text-gray-700 ">{{__('Create New User')}}</h1>
                <form method="POST" action="{{ route('houses.update', $house->id)}}" >
                    @csrf
                    @method("PUT")
                    <input type="hidden" value="{{$house->id}}" id="house_id">
                    <label class="block text-sm">
                        <span class="text-gray-700">Tipe Rumah</span>
                        <input
                          class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                          type="text"
                          name="tipe"
                          value="{{$house->tipe}}"
                          placeholder="Tipe rumah"
                          required autofocus 
                        />
                    </label>
                    <label class="block text-sm">
                      <span class="text-gray-700">Kontak Penjual Rumah</span>
                      <input
                        class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                        type="text"
                        name="kontak"
                        value="{{$house->kontak}}"
                        placeholder="+62"
                        required autofocus 
                      />
                    </label>
                    <label class="block text-sm">
                      <span class="text-gray-700">Sertifikat Rumah</span>
                      <input
                        class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                        type="text"
                        name="sertifikasi"
                        value="{{$house->sertifikasi}}"
                        placeholder="Sertifikat"
                        required autofocus 
                      />
                    </label>
                    <label class="block text-sm">
                      <span class="text-gray-700">Banyaknya Lantai Rumah</span>
                      <input
                        class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                        min="1"
                        type="number"
                        name="lantai"
                        value="{{$house->lantai}}"
                        placeholder="banyaknya lantai rumah"
                        required autofocus 
                      />
                    </label>
                    <label class="block text-sm">
                      <span class="text-gray-700">Luas Tanah</span>
                      <input
                        class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                        min="0"
                        type="number"
                        name="luas_tanah"
                        value="{{$house->luas_tanah}}"
                        placeholder="Luas Tanah"
                        required autofocus 
                      />
                    </label>
                    <label class="block text-sm">
                      <span class="text-gray-700">Luas Bangunan Rumah</span>
                      <input
                        class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                        min="0"
                        type="number"
                        name="luas_bangunan"
                        value="{{$house->luas_bangunan}}"
                        placeholder="Luas Bangunan"
                        required autofocus 
                      />
                    </label>
                    <label class="block text-sm">
                      <span class="text-gray-700">Harga Rumah</span>
                      <input
                        class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                        min="0"
                        type="number"
                        name="harga"
                        value="{{$house->harga}}"
                        placeholder="Harga Rumah (Rp.)"
                        required autofocus 
                      />
                    </label>
                    <label class="block text-sm">
                      <span class="text-gray-700">Lokasi GPS Rumah</span>
                      <input
                        class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                        type="text"
                        name="lokasi_gps"
                        value="{{$house->lokasi_gps}}"
                        placeholder="gps"
                        required autofocus 
                      />
                    </label>
                    <label class="block text-sm">
                      <span class="text-gray-700">Alamat Rumah</span>
                      <textarea 
                        name="alamat" 
                        rows="3"
                        class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                        >{{$house->alamat}}</textarea>
                    </label>
                    <label class="block text-sm">
                      <span class="text-gray-700">Deskripsi Rumah</span>
                      <textarea 
                        name="deskripsi" 
                        rows="3" 
                        class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                        >{{$house->deskripsi}}</textarea>
                    </label>
                    <label class="block text-sm pt-2">
                      <span class="font-bold text-gray-700">Ruangan Rumah</span>
                      <div class="table-responsive">  
                        <table class="table table-bordered" id="dynamic_field"> 
                          <tr>  
                            <td><input type="text" name="nama_ruangan[]" placeholder="Nama Ruangan" id="nama_ruangan"></td>  
                            <td><input type="number" name="jumlah_ruangan[]" placeholder="0" min="0" id="jumlah_ruangan"></td>  
                            <td><button type="button" name="add" id="add" class="py-2 px-4 bg-green-400 rounded-lg float-right">Add More</button></td>  
                          </tr>  
                        </table>  
                      </div>
                    </label>
                    <label class="block text-sm">
                      <span class="text-gray-700">Gambar Rumah</span>
                      <div class="input-images" style="padding-top: .5rem;"></div>
                    </label>
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                    <!-- Button Login -->
                    <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        {{ __('Save') }}
                    </button>
                  </button>
                  <a href="{{route('houses.index')}}" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-gray-800 transition-colors duration-150 bg-gray-50 border border-purple-600 rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    {{ __('cancel') }}
                  </a>
                </form>
                <label class="block text-sm pt-2">
                  <span class="font-bold text-gray-700">Ruangan Rumah</span>
                  <div class="table-responsive">  
                    <table class="table table-bordered" id="dynamic_field">
                      @foreach ($house->Ruangan as $ruangan)
                      <tr>  
                        <td><input type="text" value="{{$ruangan->nama}}" readonly></td>  
                        <td><input type="number" value="{{$ruangan->jumlah}}" readonly></td>
                        <td>
                          <form action="{{route('ruangan.destroy', $ruangan->id)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="text-red-500 btn_remove">X</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </table>  
                  </div>
                </label>
                <label class="block text-sm">  
                  <span class="text-gray-700">Delete Gambar Rumah</span>
                    <div class="image-uploader has-files">
                      <div class="uploaded">
                        @foreach ($house->Images as $image)
                        <div class="uploaded-image" data-index="{{$loop->iteration}}">
                          <img src="{{asset('images/'.$image->nama)}}">
                          <form action="{{route('image.destroy', $image->id)}}" method="post" class="w-auto">
                            @csrf
                            @method('delete')
                              <button class="delete-image">
                                <i class="material-icons">clear</i>
                              </button>
                          </form>
                        </div>
                        @endforeach
                      </div>
                  </div>
                </label>
            </div>
        </div>
    </div>
  </div>
  <script type="text/javascript">
    $('.input-images').imageUploader();
    $(document).ready(function(){      
      var i=1;  
      $('#add').click(function(){  
        var title = $("#title").val();
        i++;  
        $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="nama_ruangan[]" placeholder="Nama Ruangan" id="nama_ruangan"></td><td><input type="number" name="jumlah_ruangan[]" placeholder="0" min="0" id="jumlah_ruangan"></td><td><button type="button" name="remove" id="'+i+'" class="text-red-500 btn_remove">X</button></td><tr/>');  
        });  
        $(document).on('click', '.btn_remove', function(){  
          var button_id = $(this).attr("id");   
          $('#row'+button_id+'').remove();  
        });
      });  
    </script>
</x-app-layout>
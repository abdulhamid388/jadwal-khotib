@extends('admin.layout')

@section('content')

<div class="mb-4">

    <h2>
        Tambah Jadwal Khotib
    </h2>

    <p class="text-muted">
        Isi formulir di bawah untuk menambahkan jadwal khotib baru
    </p>

</div>



<div class="card border-0 shadow-sm" style="max-width:600px;">


    <div class="card-body p-4">


        <form action="{{ route('admin.jadwal.store') }}" method="POST" enctype="multipart/form-data">

            @csrf



            <div class="mb-3">

                <label class="form-label">
                    Nama Masjid
                </label>


                <input 
                type="text"
                name="nama_masjid"
                class="form-control @error('nama_masjid') is-invalid @enderror"
                required>


                @error('nama_masjid')

                <div class="invalid-feedback">
                    {{ $message }}
                </div>

                @enderror


            </div>





            <div class="mb-3">

                <label class="form-label">
                    Tanggal
                </label>


                <input 
                type="date"
                name="tanggal"
                class="form-control @error('tanggal') is-invalid @enderror"
                required>


                @error('tanggal')

                <div class="invalid-feedback">
                    {{ $message }}
                </div>

                @enderror


            </div>






            <div class="mb-3">


                <label class="form-label">
                    Nama Khotib
                </label>


                <input 
                type="text"
                name="nama_khotib"
                class="form-control @error('nama_khotib') is-invalid @enderror"
                required>



                @error('nama_khotib')

                <div class="invalid-feedback">
                    {{ $message }}
                </div>

                @enderror


            </div>






            <div class="mb-4">


                <label class="form-label">
                    Foto Khotib
                </label>



                <input 
                type="file"
                name="foto"
                class="form-control @error('foto') is-invalid @enderror"
                accept="image/*">



                <small class="text-muted">

                    Format JPG/PNG maksimal 2MB

                </small>




                @error('foto')

                <div class="invalid-feedback">

                    {{ $message }}

                </div>

                @enderror



            </div>






            <div class="d-flex gap-2">


                <button 
                type="submit"
                class="btn btn-primary">

                    Simpan Jadwal

                </button>





                <a 
                href="{{ route('admin.jadwal.index') }}"
                class="btn btn-secondary">

                    Batal

                </a>



            </div>





        </form>



    </div>


</div>



@endsection
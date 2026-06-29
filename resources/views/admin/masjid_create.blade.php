@extends('admin.layout')


@section('content')



<div class="mb-4">


    <h2>
        Tambah Masjid
    </h2>


    <p class="text-muted">
        Tambahkan data masjid baru
    </p>


</div>







<div class="card shadow-sm border-0"
style="max-width:650px;">



<div class="card-body p-4">






<form 

action="{{ route('admin.masjid.store') }}"

method="POST">



@csrf







{{-- NAMA MASJID --}}



<div class="mb-3">



<label class="form-label">

Nama Masjid

</label>




<input

type="text"

name="nama_masjid"

class="form-control @error('nama_masjid') is-invalid @enderror"

placeholder="Masukkan nama masjid"

value="{{ old('nama_masjid') }}"

required>






@error('nama_masjid')


<div class="invalid-feedback">

{{ $message }}

</div>


@enderror





</div>









{{-- ALAMAT --}}



<div class="mb-4">



<label class="form-label">

Alamat Masjid

</label>





<textarea

name="alamat"

rows="4"

class="form-control @error('alamat') is-invalid @enderror"

placeholder="Masukkan alamat masjid"

required>{{ old('alamat') }}</textarea>







@error('alamat')


<div class="invalid-feedback">

{{ $message }}

</div>


@enderror






</div>









<div class="d-flex gap-2">





<button 

type="submit"

class="btn btn-primary">


Simpan Masjid


</button>








<a 

href="{{ route('admin.masjid.index') }}"

class="btn btn-secondary">


Kembali


</a>







</div>






</form>







</div>



</div>






@endsection
@extends('admin.layout')


@section('content')



<div class="mb-4">


    <h2>
        Tambah Khotib
    </h2>


    <p class="text-muted">
        Tambahkan data khotib baru
    </p>


</div>









<div class="card border-0 shadow-sm"
style="max-width:650px;">



<div class="card-body p-4">







<form 

action="{{ route('admin.khotib.store') }}"

method="POST"

enctype="multipart/form-data">



@csrf







{{-- NAMA KHOTIB --}}



<div class="mb-3">



<label class="form-label">

Nama Khotib

</label>





<input

type="text"

name="nama_khotib"

class="form-control @error('nama_khotib') is-invalid @enderror"

placeholder="Masukkan nama khotib"

value="{{ old('nama_khotib') }}"

required>






@error('nama_khotib')


<div class="invalid-feedback">

{{ $message }}

</div>


@enderror





</div>









{{-- NO HP --}}



<div class="mb-3">



<label class="form-label">

No HP

</label>






<input

type="text"

name="no_hp"

class="form-control @error('no_hp') is-invalid @enderror"

placeholder="Masukkan nomor HP"

value="{{ old('no_hp') }}"

required>







@error('no_hp')


<div class="invalid-feedback">

{{ $message }}

</div>


@enderror





</div>









{{-- FOTO --}}



<div class="mb-4">



<label class="form-label">

Foto Khotib

</label>






<input

type="file"

name="foto"

class="form-control @error('foto') is-invalid @enderror"

accept="image/*"

required>







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


Simpan Khotib


</button>








<a

href="{{ route('admin.khotib.index') }}"

class="btn btn-secondary">


Kembali


</a>








</div>







</form>






</div>




</div>







@endsection
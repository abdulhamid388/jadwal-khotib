@extends('admin.layout')


@section('content')



<div class="mb-4">


    <h2>
        Edit Khotib
    </h2>


    <p class="text-muted">
        Perbarui data khotib yang sudah terdaftar
    </p>


</div>








<div class="card border-0 shadow-sm"
style="max-width:650px;">



<div class="card-body p-4">







<form

action="{{ route('admin.khotib.update',$khotib->id) }}"

method="POST"

enctype="multipart/form-data">



@csrf

@method('PUT')









{{-- NAMA KHOTIB --}}



<div class="mb-3">



<label class="form-label">

Nama Khotib

</label>







<input

type="text"

name="nama_khotib"

class="form-control @error('nama_khotib') is-invalid @enderror"

value="{{ old('nama_khotib',$khotib->nama_khotib) }}"

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

value="{{ old('no_hp',$khotib->no_hp) }}"

placeholder="Contoh: 08123456789"

required>







@error('no_hp')


<div class="invalid-feedback">

{{ $message }}

</div>


@enderror






</div>














{{-- FOTO LAMA --}}



<div class="mb-3">



<label class="form-label">

Foto Saat Ini

</label>







@if($khotib->foto)



<div class="mb-3">


<img

src="{{ asset('storage/'.$khotib->foto) }}"

width="120"

height="120"

class="rounded"

style="object-fit:cover;">



</div>





@else



<p class="text-muted">

Belum ada foto

</p>



@endif







</div>













{{-- UPLOAD FOTO BARU --}}



<div class="mb-4">



<label class="form-label">

Ganti Foto Khotib

</label>






<input

type="file"

name="foto"

class="form-control @error('foto') is-invalid @enderror"

accept="image/*">






<small class="text-muted">

Kosongkan jika tidak ingin mengganti foto

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


<i class="bi bi-save"></i>

Simpan Perubahan


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
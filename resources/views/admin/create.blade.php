@extends('admin.layout')

@section('content')


<div class="mb-4">

    <h2>
        Tambah Jadwal Khotib
    </h2>


    <p class="text-muted">
        Tambahkan jadwal khutbah Jumat baru
    </p>

</div>





<div class="card shadow-sm border-0"
style="max-width:650px">


<div class="card-body p-4">



<form 
action="{{ route('admin.jadwal.store') }}"
method="POST"
enctype="multipart/form-data">


@csrf





{{-- MASJID --}}

<div class="mb-3">


<label class="form-label">
Nama Masjid
</label>


<input 
type="text"
name="nama_masjid"
class="form-control"
list="listMasjid"
placeholder="Pilih atau ketik nama masjid"
required>



<datalist id="listMasjid">


@foreach($masjids as $m)

<option value="{{ $m->nama_masjid }}">


@endforeach


</datalist>



</div>








{{-- TANGGAL --}}

<div class="mb-3">


<label class="form-label">
Tanggal
</label>


<input 
type="date"
name="tanggal"
class="form-control"
required>



</div>








{{-- KHOTIB --}}


<div class="mb-3">


<label class="form-label">
Nama Khotib
</label>



<input 
type="text"
name="nama_khotib"
class="form-control"
list="listKhotib"
placeholder="Pilih atau ketik nama khotib"
required>




<datalist id="listKhotib">


@foreach($khotibs as $k)

<option value="{{ $k->nama_khotib }}">


@endforeach


</datalist>



</div>










{{-- FOTO --}}


<div class="mb-4">


<label class="form-label">
Foto Khotib
</label>


<input 
type="file"
name="foto"
class="form-control"
accept="image/*">



<small class="text-muted">

Format JPG/PNG maksimal 2MB

</small>



</div>









<div class="d-flex gap-2">


<button 
class="btn btn-primary">


Simpan Jadwal


</button>




<a 
href="{{ route('admin.jadwal.index') }}"
class="btn btn-secondary">


Kembali


</a>



</div>





</form>



</div>


</div>





@endsection
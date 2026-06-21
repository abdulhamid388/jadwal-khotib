@extends('admin.layout')


@section('content')


<h2>
Tambah Jadwal Khotib
</h2>



<div class="card p-4">


<form action="{{ route('admin.store') }}"
method="POST"
enctype="multipart/form-data">


@csrf



<div class="mb-3">

<label>
Nama Masjid
</label>


<input 
type="text"
name="nama_masjid"
class="form-control"
required
>


</div>





<div class="mb-3">

<label>
Tanggal
</label>


<input 
type="date"
name="tanggal"
class="form-control"
required
>


</div>





<div class="mb-3">

<label>
Nama Khotib
</label>


<input 
type="text"
name="nama_khotib"
class="form-control"
required
>


</div>





<div class="mb-3">

<label>
Foto Khotib
</label>


<input
type="file"
name="foto"
class="form-control"
accept="image/*"
>


</div>





<button
type="submit"
class="btn btn-orange">

Simpan

</button>



</form>


</div>



@endsection
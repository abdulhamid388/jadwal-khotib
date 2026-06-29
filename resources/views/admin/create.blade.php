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
method="POST">


@csrf







{{-- PILIH MASJID --}}


<div class="mb-3">


<label class="form-label">

Nama Masjid

</label>




<select

name="masjid_id"

class="form-control @error('masjid_id') is-invalid @enderror"

required>



<option value="">

-- Pilih Masjid --

</option>






@foreach($masjids as $m)



<option value="{{ $m->id }}">


{{ $m->nama_masjid }}


</option>




@endforeach




</select>






@error('masjid_id')


<div class="invalid-feedback">


{{ $message }}


</div>


@enderror





</div>









{{-- TANGGAL --}}



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









{{-- PILIH KHOTIB --}}



<div class="mb-3">


<label class="form-label">

Nama Khotib

</label>






<select

name="khotib_id"

class="form-control @error('khotib_id') is-invalid @enderror"

required>



<option value="">

-- Pilih Khotib --

</option>






@foreach($khotibs as $k)



<option value="{{ $k->id }}">



{{ $k->nama_khotib }}



</option>





@endforeach





</select>






@error('khotib_id')


<div class="invalid-feedback">


{{ $message }}


</div>


@enderror





</div>









{{-- INFO FOTO --}}



<div class="mb-4">


<label class="form-label">

Foto Khotib

</label>




<p class="text-muted mb-0">

Foto otomatis mengambil dari data khotib

</p>




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


Kembali


</a>






</div>







</form>





</div>


</div>







@endsection
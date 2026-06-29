@extends('admin.layout')


@section('content')

<div class="mb-4">

    <h2>
        Edit Jadwal Khotib
    </h2>

    <p class="text-muted">
        Perbarui informasi jadwal khotib
    </p>

</div>





<div class="card border-0 shadow-sm" style="max-width:600px;">


<div class="card-body p-4">





<form action="{{ route('admin.jadwal.update',$jadwal->id) }}" 
method="POST">


@csrf

@method('PUT')







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


<option 
value="{{ $m->id }}"

@if($jadwal->masjid_id == $m->id)

selected

@endif

>


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









<div class="mb-3">


<label class="form-label">

Tanggal

</label>



<input

type="date"

name="tanggal"

class="form-control"

value="{{ $jadwal->tanggal->format('Y-m-d') }}"

required>


</div>









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



<option

value="{{ $k->id }}"


@if($jadwal->khotib_id == $k->id)

selected

@endif


>


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









<div class="mb-4">


<label class="form-label">

Foto Khotib

</label>



@if($jadwal->khotib && $jadwal->khotib->foto)


<div class="mb-3">


<img

src="{{ asset('storage/'.$jadwal->khotib->foto) }}"

width="100"

height="100"

class="rounded"

style="object-fit:cover;">


</div>



@endif





<p class="text-muted">

Foto mengikuti data khotib

</p>




</div>









<div class="d-flex gap-2">



<button

type="submit"

class="btn btn-primary">


Simpan Perubahan


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
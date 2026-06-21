@extends('admin.layout')


@section('content')


<h2>
Edit Jadwal
</h2>



<div class="card p-4">


<form action="/admin/{{$jadwal->id}}"

method="POST">


@csrf

@method('PUT')



<input

class="form-control mb-3"

name="nama_masjid"

value="{{$jadwal->nama_masjid}}">



<input

type="date"

class="form-control mb-3"

name="tanggal"

value="{{$jadwal->tanggal}}">



<input

class="form-control mb-3"

name="nama_khotib"

value="{{$jadwal->nama_khotib}}">



<input

class="form-control mb-3"

name="tema"

value="{{$jadwal->tema}}">



<input

type="time"

class="form-control mb-3"

name="jam"

value="{{$jadwal->jam}}">



<button class="btn btn-orange">

Update

</button>


</form>


</div>



@endsection
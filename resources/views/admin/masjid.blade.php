@extends('admin.layout')

@section('content')


<div class="mb-4">

    <h2>
        Daftar Masjid
    </h2>

    <p class="text-muted">
        Data masjid yang sudah terdaftar
    </p>

</div>



<div class="card border-0 shadow-sm">


<div class="card-body">


<table class="table table-hover align-middle">


<thead class="bg-light">

<tr>

<th>No</th>

<th>Nama Masjid</th>

<th>Jumlah Jadwal</th>


</tr>

</thead>



<tbody>


@php

$masjid = $jadwals->groupBy('nama_masjid');

@endphp



@forelse($masjid as $nama=>$data)


<tr>


<td>
{{ $loop->iteration }}
</td>



<td>

<div class="fw-semibold">

{{ $nama }}

</div>


</td>




<td>


<span class="badge bg-primary">

{{ count($data) }} Jadwal

</span>


</td>



</tr>



@empty


<tr>

<td colspan="3" class="text-center text-muted">

Belum ada data masjid

</td>


</tr>


@endforelse



</tbody>


</table>



</div>


</div>



@endsection
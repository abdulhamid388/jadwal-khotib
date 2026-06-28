@extends('admin.layout')


@section('content')


<div class="mb-4">

<h2>
Daftar Masjid
</h2>

<p class="text-muted">
Daftar masjid yang sudah terdaftar
</p>

</div>




<div class="card border-0 shadow-sm">


<div class="card-body">


<table class="table align-middle">


<thead class="table-light">

<tr>

<th>No</th>

<th>Nama Masjid</th>

</tr>

</thead>



<tbody>


@forelse($masjids as $m)


<tr>


<td>
{{ $loop->iteration }}
</td>



<td>

<div class="fw-semibold">

{{ $m->nama_masjid }}

</div>


</td>



</tr>



@empty


<tr>

<td colspan="2" class="text-center">

Belum ada data masjid

</td>

</tr>


@endforelse


</tbody>



</table>


</div>


</div>



@endsection
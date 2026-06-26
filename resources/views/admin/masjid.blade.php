@extends('admin.layout')


@section('content')


<h2>Daftar Masjid</h2>



<div class="card shadow-sm">


<div class="card-body">


<table class="table">


<thead>

<tr>

<th>No</th>

<th>Nama Masjid</th>

</tr>

</thead>




<tbody>


@foreach($masjids as $m)


<tr>


<td>
{{ $loop->iteration }}
</td>


<td>
{{ $m->nama_masjid }}
</td>


</tr>


@endforeach


</tbody>


</table>



</div>


</div>



@endsection
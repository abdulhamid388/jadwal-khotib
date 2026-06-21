@extends('admin.layout')


@section('content')


<div class="d-flex justify-content-between mb-4">


<h2>
Jadwal Khotib Jumat
</h2>



<a href="{{ route('admid.create') }}"
class="btn btn-orange">

+ Tambah Jadwal

</a>



</div>







<div class="card p-4">



<table class="table table-hover">



<thead>


<tr>


<th>No</th>

<th>Masjid</th>

<th>Tanggal</th>

<th>Khotib</th>

<th>Foto</th>

<th>Aksi</th>


</tr>


</thead>







<tbody>



@foreach($jadwals as $j)



<tr>



<td>
{{ $loop->iteration }}
</td>




<td>
{{ $j->nama_masjid }}
</td>





<td>
{{ $j->tanggal }}
</td>





<td>
{{ $j->nama_khotib }}
</td>





<td>


@if($j->foto)


<img src="{{ asset('uploads/'.$j->foto) }}"
width="70"
class="rounded">


@else

Tidak ada foto

@endif


</td>







<td>



<a href="{{ route('admid.edit',$j->id) }}"
class="btn btn-warning btn-sm">

Edit

</a>







<form action="{{ route('admid.destroy',$j->id) }}"
method="POST"
style="display:inline">


@csrf

@method('DELETE')



<button 
class="btn btn-danger btn-sm"
onclick="return confirm('Hapus data ini?')">

Hapus

</button>


</form>



</td>



</tr>



@endforeach





</tbody>



</table>



</div>



@endsection
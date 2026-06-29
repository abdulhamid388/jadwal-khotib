@extends('admin.layout')


@section('content')



<div class="d-flex justify-content-between align-items-center mb-4">


    <div>

        <h2>
            Daftar Masjid
        </h2>


        <p class="text-muted mb-0">
            Data masjid yang sudah terdaftar
        </p>


    </div>





    <a href="{{ route('admin.masjid.create') }}"
       class="btn btn-primary">


        <i class="bi bi-plus-circle"></i>

        Tambah Masjid


    </a>





</div>









<div class="card border-0 shadow-sm">



<div class="card-body p-0">





<div class="table-responsive">



<table class="table table-hover align-middle mb-0">



<thead class="table-light">


<tr>


<th width="80">
No
</th>


<th>
Nama Masjid
</th>


<th>
Alamat
</th>


<th width="180">
Aksi
</th>


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








<td>


{{ $m->alamat }}


</td>









<td>



<a href="{{ route('admin.masjid.edit',$m->id) }}"

class="btn btn-warning btn-sm">


<i class="bi bi-pencil"></i>

Edit


</a>









<form 

action="{{ route('admin.masjid.destroy',$m->id) }}"

method="POST"

class="d-inline">



@csrf

@method('DELETE')




<button 

type="submit"

class="btn btn-danger btn-sm"

onclick="return confirm('Yakin hapus masjid ini?')">


<i class="bi bi-trash"></i>

Hapus


</button>





</form>






</td>







</tr>





@empty





<tr>


<td colspan="4"

class="text-center py-4 text-muted">


Belum ada data masjid


</td>


</tr>






@endforelse





</tbody>







</table>







</div>





</div>




</div>





@endsection
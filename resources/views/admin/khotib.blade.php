@extends('admin.layout')


@section('content')



<div class="d-flex justify-content-between align-items-center mb-4">


    <div>


        <h2>
            Daftar Khotib
        </h2>


        <p class="text-muted mb-0">
            Data khotib yang sudah terdaftar
        </p>


    </div>





    <a href="{{ route('admin.khotib.create') }}"
       class="btn btn-primary">


        <i class="bi bi-plus-circle"></i>

        Tambah Khotib


    </a>




</div>









<div class="row g-4">






@forelse($khotibs as $k)





<div class="col-md-6 col-lg-4">






<div class="card border-0 shadow-sm h-100">



<div class="card-body">






<div class="d-flex align-items-center gap-3 mb-3">






@if($k->foto)



<img

src="{{ asset('storage/'.$k->foto) }}"

width="70"

height="70"

class="rounded-circle"

style="object-fit:cover">





@else



<img

src="{{ asset('images/default.png') }}"

width="70"

height="70"

class="rounded-circle"

style="object-fit:cover">





@endif







<div>



<h5 class="mb-1">


{{ $k->nama_khotib }}


</h5>




<small class="text-muted">


Khotib Jumat


</small>



</div>






</div>









<hr>






<div class="mb-3">


<strong>

No HP:

</strong>


<br>


<span class="text-muted">

{{ $k->no_hp }}

</span>


</div>









<div class="d-flex gap-2">






<a 

href="{{ route('admin.khotib.edit',$k->id) }}"

class="btn btn-warning btn-sm">


<i class="bi bi-pencil"></i>


Edit


</a>










<form

action="{{ route('admin.khotib.destroy',$k->id) }}"

method="POST">



@csrf

@method('DELETE')





<button

type="submit"

class="btn btn-danger btn-sm"


onclick="return confirm('Yakin hapus data khotib?')">


<i class="bi bi-trash"></i>


Hapus


</button>





</form>






</div>






</div>




</div>






</div>







@empty





<div class="col-12">


<div class="text-center text-muted">


Belum ada data khotib


</div>


</div>





@endforelse







</div>








@endsection
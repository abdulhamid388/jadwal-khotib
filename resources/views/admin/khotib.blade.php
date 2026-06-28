@extends('admin.layout')


@section('content')



<div class="mb-4">


<h2>
Daftar Khotib
</h2>


<p class="text-muted">
Data khotib yang sudah terdaftar
</p>


</div>





<div class="row g-4">



@forelse($khotibs as $k)



<div class="col-md-4">



<div class="card border-0 shadow-sm">


<div class="card-body d-flex align-items-center gap-3">



@if($k->foto)


<img 
src="{{ asset('storage/'.$k->foto) }}"
width="60"
height="60"
class="rounded-circle"
style="object-fit:cover">



@else


<img
src="{{ asset('landing/img/default.png') }}"
width="60"
height="60"
class="rounded-circle">



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


</div>


</div>




@empty


<p class="text-center">

Belum ada data khotib

</p>


@endforelse




</div>



@endsection
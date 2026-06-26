@extends('admin.layout')


@section('content')


<h2>Daftar Khotib</h2>




<div class="row">


@foreach($khotibs as $k)



<div class="col-md-4 mb-3">


<div class="card shadow-sm p-3 text-center">



@if($k->foto)


<img 
src="{{ asset('storage/'.$k->foto) }}"
width="100"
height="100"
class="rounded-circle mx-auto"
style="object-fit:cover">


@else


<img 
src="{{ asset('landing/img/default.png') }}"
width="100"
height="100"
class="rounded-circle mx-auto">


@endif




<h4 class="mt-3">

{{ $k->nama_khotib }}

</h4>




</div>


</div>



@endforeach



</div>



@endsection
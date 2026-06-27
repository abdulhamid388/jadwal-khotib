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



@php

$khotibs = $jadwals->groupBy('nama_khotib');

@endphp





@forelse($khotibs as $nama=>$data)


<div class="col-md-4">


<div class="card border-0 shadow-sm h-100">


<div class="card-body text-center">


<img 

src="{{ $data->first()->foto 
? asset('storage/'.$data->first()->foto)
: asset('landing/img/default.png') }}"

class="rounded-circle mb-3"

width="80"

height="80"

style="object-fit:cover">





<h5>

{{ $nama }}

</h5>



<p class="text-muted">

{{ count($data) }} Jadwal khutbah

</p>



</div>


</div>


</div>



@empty



<div class="text-center text-muted">

Belum ada data khotib

</div>



@endforelse




</div>



@endsection
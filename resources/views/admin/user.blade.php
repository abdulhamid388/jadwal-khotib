@extends('admin.layout')


@section('content')


<div class="mb-4">

<h2>
Daftar User
</h2>


<p class="text-muted">

User yang dapat mengakses admin

</p>


</div>





<div class="card border-0 shadow-sm">


<div class="card-body">


<table class="table">


<thead class="table-light">


<tr>

<th>No</th>

<th>Nama</th>

<th>Email</th>


</tr>


</thead>



<tbody>


@foreach($users as $u)



<tr>


<td>

{{ $loop->iteration }}

</td>



<td>

{{ $u->name }}

</td>



<td>

{{ $u->email }}

</td>



</tr>



@endforeach



</tbody>



</table>


</div>


</div>



@endsection
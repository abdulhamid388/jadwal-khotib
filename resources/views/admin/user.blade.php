@extends('admin.layout')


@section('content')



<div class="mb-4">


<h2>
Data User
</h2>


<p class="text-muted">
Daftar pengguna yang dapat masuk sistem
</p>


</div>





<div class="card border-0 shadow-sm">


<div class="card-body">



<table class="table table-hover align-middle">



<thead class="bg-light">


<tr>

<th>No</th>

<th>Nama</th>

<th>Email</th>

<th>Bergabung</th>


</tr>



</thead>




<tbody>



@forelse($users as $user)


<tr>



<td>

{{ $loop->iteration }}

</td>




<td>


<div class="fw-semibold">

{{ $user->name }}

</div>


</td>




<td>

{{ $user->email }}

</td>




<td>

{{ $user->created_at->translatedFormat('d F Y') }}

</td>



</tr>




@empty



<tr>

<td colspan="4" class="text-center text-muted">

Belum ada user

</td>

</tr>



@endforelse




</tbody>



</table>




</div>


</div>




@endsection
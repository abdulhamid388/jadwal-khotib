@extends('admin.layout')


@section('content')


<h2>Daftar User</h2>



<div class="card shadow-sm">


<div class="card-body">



<table class="table">


<tr>

<th>No</th>

<th>Nama</th>

<th>Email</th>

</tr>



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


</table>


</div>


</div>




@endsection
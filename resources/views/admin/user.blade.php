@extends('layouts.app')


@section('content')


<div class="container mt-5">


<h2>
Data User
</h2>



@if(session('success'))

<div class="alert alert-success">

{{session('success')}}

</div>

@endif






<table class="table table-bordered">


<thead>


<tr>

<th>No</th>

<th>Email</th>

<th>Aksi</th>


</tr>


</thead>





<tbody>


@foreach($users as $u)


<tr>


<td>

{{$loop->iteration}}

</td>



<td>

{{$u->email}}

</td>





<td>



<a href="{{route('admin.user.edit',$u->id)}}"

class="btn btn-warning">

Edit

</a>







<form action="{{route('admin.user.delete',$u->id)}}"

method="POST"

style="display:inline">


@csrf

@method('DELETE')


<button

class="btn btn-danger"

onclick="return confirm('Hapus user ini?')">


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
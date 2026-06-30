@extends('layouts.app')


@section('content')


<div class="container mt-5">


<div class="card shadow">


<div class="card-header bg-primary text-white">


<h4 class="mb-0">

Data User

</h4>


</div>




<div class="card-body">



@if(session('success'))

<div class="alert alert-success">

{{session('success')}}

</div>

@endif






<table class="table table-bordered table-striped">


<thead class="table-dark">


<tr>


<th width="80">

No

</th>


<th>

Email

</th>



<th width="200">

Aksi

</th>


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

class="btn btn-warning btn-sm">

Edit

</a>








<form 

action="{{route('admin.user.delete',$u->id)}}"

method="POST"

style="display:inline">



@csrf

@method('DELETE')




<button

class="btn btn-danger btn-sm"

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


</div>


</div>



@endsection
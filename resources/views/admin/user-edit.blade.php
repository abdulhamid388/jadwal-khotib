@extends('layouts.app')


@section('content')



<div class="container mt-5">



<h2>
Edit User
</h2>





<form method="POST"

action="{{route('admin.user.update',$user->id)}}">


@csrf

@method('PUT')





<div class="mb-3">


<label>Email</label>


<input

type="email"

name="email"

class="form-control"

value="{{$user->email}}"

>


</div>







<div class="mb-3">


<label>Password Baru</label>


<input

type="password"

name="password"

class="form-control"

placeholder="Kosongkan jika tidak diganti"


>


</div>







<button class="btn btn-primary">

Simpan

</button>



<a href="{{route('admin.user')}}"

class="btn btn-secondary">

Kembali

</a>




</form>




</div>


@endsection
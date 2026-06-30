<!DOCTYPE html>
<html lang="id">


<head>


<meta charset="UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0">



<title>
Admin Jadwal Khotib
</title>




<!-- FAVICON -->

<link 
rel="icon"
type="image/png"
href="{{ asset('favicon.png') }}?v={{ time() }}">


<link 
rel="shortcut icon"
type="image/png"
href="{{ asset('favicon.png') }}?v={{ time() }}">






<!-- Bootstrap -->

<link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">





<!-- Bootstrap Icon -->

<link 
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
rel="stylesheet">






@vite([
'resources/css/app.css',
'resources/js/app.js'
])





<style>


body{

background:#f1f5f9;
margin:0;

}



.sidebar{


width:240px;

height:100vh;

position:fixed;

left:0;

top:0;

background:#0f172a;

padding-top:25px;

}



.logo-admin{


color:white;

text-align:center;

font-size:22px;

font-weight:bold;

margin-bottom:30px;

}




.sidebar a{


display:flex;

align-items:center;

gap:10px;

padding:14px 20px;

color:white;

text-decoration:none;


}



.sidebar a:hover{


background:#2563eb;


}




.content{


margin-left:240px;

padding:30px;


}




.logout-btn{


width:100%;

border:none;

background:none;

color:white;

padding:14px 20px;

display:flex;

gap:10px;


}



.logout-btn:hover{

background:#dc2626;

}


</style>




</head>





<body>






<div class="sidebar">


<div class="logo-admin">

Jadwal Khotib

</div>




<a href="{{route('admin.jadwal.index')}}">

<i class="bi bi-calendar-event"></i>

Jadwal

</a>




<a href="{{route('admin.masjid.index')}}">

<i class="bi bi-building"></i>

Masjid

</a>




<a href="{{route('admin.khotib.index')}}">

<i class="bi bi-person"></i>

Khotib

</a>




<a href="{{route('admin.user')}}">

<i class="bi bi-people"></i>

User

</a>




<a href="{{route('admin.website')}}">

<i class="bi bi-globe"></i>

Website

</a>





<form method="POST" action="{{route('logout')}}">

@csrf


<button class="logout-btn">


<i class="bi bi-box-arrow-right"></i>

Logout


</button>


</form>




</div>







<div class="content">


@yield('content')


</div>







<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>




</body>


</html>
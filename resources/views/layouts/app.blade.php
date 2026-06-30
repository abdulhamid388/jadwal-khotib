<!DOCTYPE html>
<html lang="id">


<head>


<meta charset="UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>
Jadwal Khotib Admin
</title>




<!-- Bootstrap -->

<link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">



<!-- Bootstrap Icon -->

<link 
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
rel="stylesheet">





<!-- Laravel CSS JS -->

@vite([
'resources/css/app.css',
'resources/js/app.js'
])




<style>


body{

    background:#f1f5f9;

}



.sidebar{


    width:240px;

    height:100vh;

    position:fixed;

    left:0;

    top:0;

    background:#0f172a;

    padding-top:20px;

}



.sidebar a{


    display:block;

    color:white;

    padding:14px 20px;

    text-decoration:none;

}



.sidebar a:hover{


    background:#2563eb;


}



.content{


    margin-left:240px;

    padding:25px;


}





.logo-admin{


    color:white;

    text-align:center;

    font-size:22px;

    font-weight:bold;

    margin-bottom:30px;


}




</style>




</head>







<body>






<!-- SIDEBAR ADMIN -->


<div class="sidebar">



<div class="logo-admin">

Jadwal Khotib

</div>





<a href="{{ route('admin.jadwal.index') }}">

<i class="bi bi-calendar"></i>

Jadwal

</a>




<a href="{{ route('admin.masjid.index') }}">

<i class="bi bi-building"></i>

Masjid

</a>





<a href="{{ route('admin.khotib.index') }}">

<i class="bi bi-person"></i>

Khotib

</a>






<a href="{{ route('admin.user') }}">

<i class="bi bi-people"></i>

User

</a>







<a href="{{ route('admin.website') }}">

<i class="bi bi-globe"></i>

Website

</a>






<form method="POST" action="{{ route('logout') }}">


@csrf



<button 
class="btn text-white w-100 text-start px-3 mt-3">


<i class="bi bi-box-arrow-right"></i>

Logout


</button>



</form>




</div>








<!-- CONTENT -->


<div class="content">



@yield('content')



</div>








<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>



</body>


</html>
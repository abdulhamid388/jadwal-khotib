<!DOCTYPE html>
<html lang="id">


<head>


<meta charset="UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0">



<title>
Jadwal Khotib Admin
</title>




<!-- FAVICON SAMA DENGAN WEBSITE -->

<link 
rel="icon"
type="image/png"
href="{{ asset('favicon.png') }}?v=3">


<link 
rel="shortcut icon"
type="image/png"
href="{{ asset('favicon.png') }}?v=3">







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

    margin:0;

}





/* SIDEBAR */


.sidebar{


    width:240px;

    height:100vh;

    position:fixed;

    left:0;

    top:0;

    background:#0f172a;

    padding-top:25px;

    z-index:999;


}





.sidebar a{


    display:flex;

    align-items:center;

    gap:12px;

    color:white;

    padding:14px 22px;

    text-decoration:none;

    font-size:15px;


}





.sidebar a:hover{


    background:#2563eb;

    transition:.3s;


}





.sidebar i{


    font-size:18px;


}





.logo-admin{


    color:white;

    text-align:center;

    font-size:22px;

    font-weight:700;

    margin-bottom:35px;


}





/* CONTENT */


.content{


    margin-left:240px;

    padding:30px;


}







.logout-btn{


    border:none;

    background:none;

    color:white;

    width:100%;

    padding:14px 22px;

    text-align:left;

    display:flex;

    align-items:center;

    gap:12px;


}





.logout-btn:hover{


    background:#dc2626;


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


<i class="bi bi-calendar-event"></i>


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



<button class="logout-btn">


<i class="bi bi-box-arrow-right"></i>


Logout


</button>



</form>






</div>









<!-- HALAMAN -->


<div class="content">



@yield('content')



</div>









<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>



</body>



</html>
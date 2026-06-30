<!DOCTYPE html>
<html lang="id">


<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>
Admin Jadwal Khotib
</title>


<link rel="icon" href="/favicon.png?v={{ time() }}" type="image/png">


<link rel="shortcut icon" href="/favicon.png?v={{ time() }}" type="image/png">



<link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">



@vite([
'resources/css/app.css',
'resources/js/app.js'
])


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
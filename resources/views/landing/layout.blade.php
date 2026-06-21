<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<title>
Jadwal Khotib Jumat
</title>

<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="{{asset('landing/css/style.css')}}">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>


<body>



<!-- NAVBAR -->

<nav id="navbar">


<div class="logo">
Jadwal Khotib
</div>



<ul>


<li>
<a href="#home">HOME</a>
</li>


<li>
<a href="#jadwal">JADWAL</a>
</li>


<li>
<a href="#tentang">TENTANG</a>
</li>


<li>
<a href="#galeri">GALERI</a>
</li>


<li>
<a href="#kegiatan">KEGIATAN</a>
</li>


<li>
<a href="#kontak">KONTAK</a>
</li>


<li>
<a href="/admin">ADMIN</a>
</li>



</ul>


</nav>





<!-- CONTENT -->

@yield('content')





<footer>


<h3>
Website Jadwal Khotib Jumat
</h3>


<p>
Informasi jadwal khutbah Jumat masjid
</p>


<p>
© 2026 Masjid
</p>


</footer>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



<script>


window.addEventListener("scroll",function(){


let navbar=document.getElementById("navbar");


if(window.scrollY > 80){


navbar.classList.add("scrolled");


}else{


navbar.classList.remove("scrolled");


}



});


</script>



</body>

</html>
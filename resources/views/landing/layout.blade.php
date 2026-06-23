<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<title>
Jadwal Khotib Jumat
</title>


<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet"
href="{{ asset('landing/css/style.css') }}">



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">



<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
rel="stylesheet">


</head>



<body>



<!-- NAVBAR -->


<nav id="navbar">



<div class="logo">

Jadwal Khotib

</div>




<ul>


<li>
<a href="#home">
Home
</a>
</li>



<li>
<a href="#jadwal">
Jadwal
</a>
</li>



<li>
<a href="#tentang">
Tentang
</a>
</li>



<li>
<a href="#galeri">
Galeri
</a>
</li>



<li>
<a href="#kegiatan">
Kegiatan
</a>
</li>



<li>
<a href="#kontak">
Kontak
</a>
</li>



</ul>



</nav>









@yield('content')











<!-- FOOTER -->


<footer>



<div class="footer-content">



<h2>
Website Jadwal Khotib Jumat
</h2>



<p>
Informasi jadwal khutbah Jumat masjid
</p>



<div class="footer-line"></div>



<p>
© 2026 Masjid | Semua Hak Dilindungi
</p>



</div>



</footer>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>





<script>


window.addEventListener("scroll",function(){


let nav=document.getElementById("navbar");


if(window.scrollY > 50){


nav.classList.add("scrolled");


}else{


nav.classList.remove("scrolled");


}



});



</script>





</body>


</html>
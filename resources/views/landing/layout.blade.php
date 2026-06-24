<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">


<title>
Jadwal Khotib Jumat
</title>


<meta name="viewport" content="width=device-width, initial-scale=1.0">



<!-- BOOTSTRAP DULU -->

<link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">


<!-- CSS KAMU TERAKHIR -->

<link rel="stylesheet"
href="{{ asset('landing/css/style.css') }}">


<!-- FONT -->

<link 
href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
rel="stylesheet">



</head>





<body>





<!-- ================= NAVBAR ================= -->


<nav id="navbar">



<div class="logo">

Jadwal Khotib

</div>





<button class="menu-toggle"
onclick="bukaMenu()">

☰

</button>






<ul id="menu">


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











<!-- ================= CONTENT ================= -->


<main>

@yield('content')

</main>









<!-- ================= FOOTER ================= -->


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











<!-- BOOTSTRAP JS -->


<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>









<script>


// =================
// NAVBAR SCROLL
// =================


window.addEventListener("scroll",()=>{


let navbar =
document.getElementById("navbar");



if(window.scrollY > 50){


navbar.classList.add("scrolled");


}else{


navbar.classList.remove("scrolled");


}



});











// =================
// MENU MOBILE
// =================


function bukaMenu(){


let menu =
document.getElementById("menu");


menu.classList.toggle("aktif");


}


// =================
// AUTO CAROUSEL SLIDE
// =================

const carousel = document.getElementById('sliderMasjid');
if(carousel) {
    const bootstrapCarousel = new bootstrap.Carousel(carousel, {
        interval: 3000,
        wrap: true,
        keyboard: true
    });
}






</script>







</body>


</html>
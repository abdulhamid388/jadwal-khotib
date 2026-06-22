@extends('landing.layout')


@section('content')



<!-- ================= HERO ================= -->


<section id="home">


<div id="sliderMasjid" 
class="carousel slide"
data-bs-ride="carousel">



<div class="carousel-inner">



<div class="carousel-item active">


<img src="{{ asset('landing/img/masjid1.jpg') }}"
class="d-block w-100">



<div class="carousel-caption">


<h1>
Jadwal Khotib Jumat
</h1>


<p>
Informasi jadwal khutbah Jumat terbaru
</p>


<a href="#jadwal">
Lihat Jadwal
</a>


</div>



</div>






<div class="carousel-item">


<img src="{{ asset('landing/img/masjid2.jpg') }}"
class="d-block w-100">



<div class="carousel-caption">


<h1>
Informasi Masjid
</h1>


<p>
Kegiatan dan informasi masjid
</p>



</div>



</div>



</div>



</div>



</section>







<!-- ================= KALENDER ================= -->


<section id="jadwal">


<h2>
Jadwal Khotib Jumat
</h2>



<div class="jadwal-container">





<!-- KALENDER -->


<div class="calendar-box"
id="calendarBox">



<h3>
Juli 2026
</h3>



<div class="hari">


<span>Minggu</span>
<span>Senin</span>
<span>Selasa</span>
<span>Rabu</span>
<span>Kamis</span>
<span>Jumat</span>
<span>Sabtu</span>


</div>





<div class="calendar-grid">





<!-- kosong sebelum tanggal 1 -->

<div></div>
<div></div>
<div></div>





@for($i=1;$i<=31;$i++)



<div class="tanggal"
onclick="bukaJadwal()">



{{ $i }}



</div>



@endfor





</div>






<button
onclick="resetKalender()"
class="btn-reset">


Kembali


</button>



</div>









<!-- TAB ANGKA -->


<div class="tab-box"
id="tabBox">



@foreach($jadwals->take(11) as $key=>$j)



<button
onclick="lihatDetail({{ $key }})">


{{ $key+1 }}



</button>



@endforeach



</div>









<!-- DETAIL KHOTIB -->


<div class="detail-box">



<h3>
Detail Khotib
</h3>




@foreach($jadwals->take(11) as $key=>$j)



<div class="profil"
id="profil{{ $key }}">



@if($j->foto)


<img src="{{ asset('storage/'.$j->foto) }}">



@else


<img src="{{ asset('landing/img/default.png') }}">



@endif





<div>



<h3>


{{ $j->nama_khotib }}


</h3>




<p>


{{ $j->nama_masjid }}


</p>





</div>



</div>





@endforeach





</div>





</div>



</section>









<!-- ================= GALERI ================= -->



<section id="galeri">



<h2>
Galeri Khotib
</h2>





<div class="cards">



@foreach($jadwals as $j)



<div class="card galeri-card">





@if($j->foto)



<img src="{{ asset('storage/'.$j->foto) }}">



@endif





<h3>


{{ $j->nama_khotib }}


</h3>



</div>



@endforeach



</div>




</section>









<!-- ================= TENTANG ================= -->


<section id="tentang"
class="bg-light">


<h2>
Tentang Website
</h2>



<p style="text-align:center;">


Website ini dibuat untuk memberikan informasi jadwal khotib Jumat kepada jamaah.


</p>


</section>









<!-- ================= KEGIATAN ================= -->



<section id="kegiatan">



<h2>
Informasi Kegiatan
</h2>



<div class="cards">



<div class="card">


<h3>
Kajian Masjid
</h3>


<p>
Kegiatan kajian rutin masjid.
</p>


</div>





<div class="card">


<h3>
Kegiatan Sosial
</h3>


<p>
Program sosial masjid.
</p>


</div>





<div class="card">


<h3>
Jumat Rutin
</h3>


<p>
Informasi khutbah Jumat.
</p>


</div>



</div>



</section>









<!-- ================= KONTAK ================= -->


<section id="kontak">



<h2>
Kontak Masjid
</h2>



<p>
085806203202
</p>



<p>
Indonesia
</p>



</section>









<script>



function bukaJadwal(){



document
.getElementById("calendarBox")
.classList.add("geser");



document
.getElementById("tabBox")
.classList.add("muncul");



}





function lihatDetail(id){



let semua =
document.querySelectorAll(".profil");



semua.forEach(function(item){


item.style.display="none";


});





document
.getElementById("profil"+id)
.style.display="flex";



}





function resetKalender(){



document
.getElementById("calendarBox")
.classList.remove("geser");



document
.getElementById("tabBox")
.classList.remove("muncul");




document
.querySelectorAll(".profil")
.forEach(function(item){


item.style.display="none";


});



}




</script>






@endsection
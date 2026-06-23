@extends('landing.layout')


@section('content')


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

</div>


</div>


<div class="carousel-item">

<img src="{{ asset('landing/img/masjid2.jpg') }}"
class="d-block w-100">


</div>


</div>


</div>


</section>









<section id="jadwal">


<h2>
Kalender Jadwal Khotib
</h2>





<div class="kalender-wrapper"
id="wrapper">







<!-- KALENDER -->

<div class="kalender-box">



<div class="tahun">


<button onclick="ubahTahun(-1)">
▲
</button>


<h3 id="tahun">
2026
</h3>


<button onclick="ubahTahun(1)">
▼
</button>



</div>






<div class="bulan-container">





@for($bulan=1;$bulan<=12;$bulan++)


<div class="bulan">



<h4>
{{ \Carbon\Carbon::create()->month($bulan)->translatedFormat('F') }}
</h4>





<div class="hari">


<span>M</span>
<span>S</span>
<span>S</span>
<span>R</span>
<span>K</span>
<span>J</span>
<span>S</span>


</div>





<div class="tanggal-grid">



@for($i=1;$i<=31;$i++)


@php

$tanggal =
"2026-".
str_pad($bulan,2,'0',STR_PAD_LEFT).
"-".
str_pad($i,2,'0',STR_PAD_LEFT);


@endphp





<div class="tanggal"

onclick="ambilData('{{ $tanggal }}')">


{{ $i }}


</div>


@endfor




</div>



</div>


@endfor





</div>



</div>













<!-- DETAIL -->



<div class="detail-box"
id="detailBox">



<h3>
Pilih tanggal
</h3>



</div>







</div>




</section>












<section id="galeri">


<h2>
Galeri Khotib
</h2>




<div class="cards">


@foreach($jadwals as $j)



<div class="card">


<img src="{{ asset('storage/'.$j->foto) }}">



<h3>

{{ $j->nama_khotib }}

</h3>


</div>



@endforeach


</div>


</section>









<section id="tentang"
class="bg-light">


<h2>
Tentang Website
</h2>


<p>

Website ini digunakan untuk memberikan informasi
jadwal khotib Jumat berdasarkan tanggal.

</p>


</section>











<section id="kegiatan">


<h2>
Informasi Kegiatan Masjid
</h2>


<div class="cards">


<div class="card">

<h3>
Kajian Masjid
</h3>


<p>
Kajian rutin dan kegiatan keagamaan jamaah.
</p>

</div>





<div class="card">

<h3>
Kegiatan Sosial
</h3>


<p>
Program bantuan dan kegiatan sosial masyarakat.
</p>

</div>






<div class="card">

<h3>
Jumat Rutin
</h3>


<p>
Informasi imam dan khotib setiap Jumat.
</p>

</div>




</div>


</section>









<section id="kontak">


<h2>
Kontak
</h2>


<p>
085806203202
</p>


<p>
Indonesia
</p>


</section>









<script>


let dataJadwal =
@json($jadwals);






function ambilData(tanggal){



let hasil =
dataJadwal.filter(function(item){



return item.tanggal.startsWith(tanggal);


});





document
.getElementById("wrapper")
.classList.add("aktif");





let html="";



hasil.forEach(function(item,index){



let foto =
item.foto
?
"/storage/"+item.foto
:
"/landing/img/default.png";



html += `


<div class="detail-item">


<div class="angka">

${index+1}

</div>


<img src="${foto}">



<div>

<h4>

${item.nama_khotib}

</h4>


<p>

${item.nama_masjid}

</p>


<p>

${item.tanggal}

</p>


</div>



</div>



`;



});





document
.getElementById("detailBox")
.innerHTML=html;



}







function ubahTahun(nilai){


let tahun =
document.getElementById("tahun");



tahun.innerHTML =
parseInt(tahun.innerHTML)+nilai;



}



</script>




@endsection
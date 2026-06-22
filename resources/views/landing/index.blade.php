@extends('landing.layout')


@section('content')



<section id="home">


<div id="sliderMasjid" class="carousel slide" data-bs-ride="carousel">


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


<div class="carousel-caption">

<h1>
Informasi Masjid
</h1>


</div>

</div>



</div>



</div>


</section>








<section id="jadwal">


<h2>
Jadwal Khotib Jumat
</h2>



<div class="calendar-wrapper">





<!-- KALENDER -->


<div class="calendar-box"
id="calendarBox">


<h3>
Juli 2026
</h3>



<div class="calendar-grid">


@for($i=1;$i<=31;$i++)


<div class="tanggal"
onclick="bukaJadwal()">

{{ $i }}

</div>


@endfor



</div>



</div>







<!-- PANEL DETAIL -->


<div class="detail-area"
id="detailArea">





<div class="tabs">


@foreach($jadwals->take(11) as $key=>$j)



<button onclick="lihatDetail({{ $key }})">


{{ $key+1 }}


</button>



@endforeach


</div>







@foreach($jadwals->take(11) as $key=>$j)



<div class="profil"
id="profil{{ $key }}">



@if($j->foto)


<img src="{{ asset('storage/'.$j->foto) }}">


@endif





<div>


<h3>

{{ $j->nama_masjid }}

</h3>


<p>

{{ $j->nama_khotib }}

</p>


<p>

{{ $j->tanggal->format('d-m-Y') }}

</p>


</div>



</div>



@endforeach





</div>





</div>



</section>










<section id="tentang" class="bg-light">


<h2>
Tentang Website
</h2>


<p style="text-align:center;">

Website informasi jadwal khotib Jumat.

</p>


</section>







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
Kegiatan kajian rutin.
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



</div>


</section>









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


document.getElementById("calendarBox")
.classList.add("geser");


document.getElementById("detailArea")
.classList.add("muncul");


}




function lihatDetail(id){



let semua=document.querySelectorAll(".profil");


semua.forEach(function(data){


data.style.display="none";


});



document.getElementById("profil"+id)
.style.display="flex";



}



</script>



@endsection
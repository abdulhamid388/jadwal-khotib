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





<div class="jadwal-container">





<!-- ================= KALENDER ================= -->



<div class="calendar-box"
id="calendarBox">



<h3>
Juli 2026
</h3>





<div class="hari">


<span>Min</span>
<span>Sen</span>
<span>Sel</span>
<span>Rab</span>
<span>Kam</span>
<span>Jum</span>
<span>Sab</span>


</div>








<div class="calendar-grid">





@php


use Carbon\Carbon;


$bulan = Carbon::create(2026,7,1);


$awal = $bulan->dayOfWeek;


$jumlahHari = $bulan->daysInMonth;



$jadwalTanggal = $jadwals->groupBy(function($item){


return Carbon::parse($item->tanggal)->day;


});


@endphp







{{-- kotak kosong sebelum tanggal 1 --}}


@for($i=0;$i<$awal;$i++)


<div></div>


@endfor







{{-- tanggal asli --}}


@for($i=1;$i<=$jumlahHari;$i++)





@if(isset($jadwalTanggal[$i]))



<div class="tanggal aktif"
onclick="bukaJadwal({{$i}})">



{{$i}}



</div>



@else



<div class="tanggal kosong">


{{$i}}


</div>



@endif





@endfor






</div>








<button class="btn-reset"
onclick="resetKalender()">



Kembali


</button>




</div>











<!-- ================= TAB ================= -->



<div class="tab-box"
id="tabBox">



</div>









<!-- ================= DETAIL ================= -->



<div class="detail-box">



<h3>
Detail Khotib
</h3>




<div id="isiDetail">


<p>
Klik tanggal yang tersedia
</p>



</div>




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



@if($j->foto)


<img src="{{ asset('storage/'.$j->foto) }}">



@else


<img src="{{asset('landing/img/default.png')}}">



@endif





<h3>

{{$j->nama_khotib}}

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
Kegiatan kajian rutin
</p>


</div>





<div class="card">


<h3>
Kegiatan Sosial
</h3>


<p>
Program sosial masjid
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



let semuaJadwal = @json($jadwals);







function bukaJadwal(tanggal){



document
.getElementById("calendarBox")
.classList.add("geser");



document
.getElementById("tabBox")
.classList.add("muncul");






let dataTanggal = semuaJadwal.filter(function(item){



let tgl = new Date(item.tanggal)
.getDate();



return tgl == tanggal;



});







let tab="";

let detail="";





dataTanggal.forEach(function(item,index){





tab += `

<button onclick="lihatDetail(${index})">


${index+1}


</button>

`;






let foto = item.foto
? "/storage/"+item.foto
: "/landing/img/default.png";






detail += `


<div class="profil"
id="profil${index}">



<img src="${foto}">



<div>


<h3>

${item.nama_khotib}

</h3>


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
.getElementById("tabBox")
.innerHTML = tab;



document
.getElementById("isiDetail")
.innerHTML = detail;



}










function lihatDetail(id){



document
.querySelectorAll(".profil")
.forEach(function(item){


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
.getElementById("tabBox")
.innerHTML="";



document
.getElementById("isiDetail")
.innerHTML="Klik tanggal yang tersedia";



}



</script>





@endsection
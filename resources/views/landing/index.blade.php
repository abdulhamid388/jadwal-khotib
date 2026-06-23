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
Kegiatan dan informasi masjid terbaru
</p>


<a href="#jadwal">
Lihat Jadwal
</a>


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








@for($i=0;$i<$awal;$i++)

<div></div>

@endfor








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













<div class="tab-box"
id="tabBox">

</div>












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


<img src="{{ asset('landing/img/default.png') }}">


@endif




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





<p style="text-align:center;line-height:2;">


Website Jadwal Khotib Jumat dibuat untuk memberikan
informasi jadwal khutbah Jumat kepada jamaah dengan
lebih mudah dan cepat.


<br><br>


Jamaah dapat melihat jadwal berdasarkan tanggal,
nama khotib, nama masjid, serta foto khotib yang bertugas.


<br><br>


Data jadwal diperbarui oleh admin agar informasi yang
ditampilkan selalu terbaru.



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

Kegiatan kajian rutin masjid yang bertujuan untuk
menambah wawasan agama, mempererat silaturahmi
antar jamaah, dan meningkatkan pemahaman Islam.

</p>


</div>







<div class="card">


<h3>
Kegiatan Sosial
</h3>


<p>

Kegiatan sosial seperti berbagi kepada masyarakat,
bantuan jamaah, program amal, dan kegiatan
kepedulian lingkungan sekitar masjid.

</p>


</div>








<div class="card">


<h3>
Jumat Rutin
</h3>


<p>

Informasi kegiatan rutin hari Jumat seperti jadwal
khotib, imam, dan kegiatan keagamaan sebelum
pelaksanaan shalat Jumat.

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
ah1260794@gmail.com
</p>


<p>
Indonesia
</p>



</section>









<script>


let semuaJadwal = @json($jadwals);






function formatTanggal(tanggal){


let t = new Date(tanggal);



let hari = String(t.getDate())
.padStart(2,'0');



let bulan = String(t.getMonth()+1)
.padStart(2,'0');



let tahun = t.getFullYear();



return hari+"-"+bulan+"-"+tahun;


}









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






let tab = "";

let detail = "";







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

Masjid :
${item.nama_masjid}

</p>




<p>

Tanggal :
${formatTanggal(item.tanggal)}

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
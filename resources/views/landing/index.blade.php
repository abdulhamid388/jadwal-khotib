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


<p>
Kegiatan dan informasi masjid
</p>


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



<div class="calendar-box">



@php


use Carbon\Carbon;


$jadwalTanggal = $jadwals->groupBy(function($item){


return Carbon::parse($item->tanggal)
->format('Y-m-d');


});


@endphp







@for($bulan=1;$bulan<=12;$bulan++)



@php


$awalBulan =
Carbon::create(2026,$bulan,1);



$jumlahHari =
$awalBulan->daysInMonth;



$awalHari =
$awalBulan->dayOfWeek;



@endphp








<div class="bulan">



<h3>

{{ $awalBulan->translatedFormat('F Y') }}

</h3>







<div class="hari">


<span>M</span>
<span>S</span>
<span>S</span>
<span>R</span>
<span>K</span>
<span>J</span>
<span>S</span>


</div>








<div class="calendar-grid">






@for($i=0;$i<$awalHari;$i++)

<div></div>

@endfor







@for($hari=1;$hari<=$jumlahHari;$hari++)



@php


$tanggalFix =
Carbon::create(
2026,
$bulan,
$hari
)->format('Y-m-d');



@endphp







@if(isset($jadwalTanggal[$tanggalFix]))



<div class="tanggal aktif"

onclick="lihatJadwal('{{ $tanggalFix }}')">


{{ $hari }}


</div>



@else


<div class="tanggal">


{{ $hari }}


</div>



@endif






@endfor






</div>




</div>







@endfor






</div>













<!-- ================= DETAIL ================= -->



<div class="detail-container"
id="detailContainer">



<div class="kosong">


Klik tanggal yang berwarna biru

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



<p>


Website Jadwal Khotib Jumat dibuat untuk memberikan
informasi jadwal khutbah Jumat secara mudah.


<br><br>


Jamaah dapat melihat jadwal berdasarkan tanggal,
nama khotib, masjid, dan foto khotib.



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

Kajian rutin untuk menambah wawasan agama,
mempererat hubungan jamaah, dan meningkatkan
pengetahuan keislaman.

</p>



</div>







<div class="card">


<h3>
Kegiatan Sosial
</h3>


<p>

Kegiatan sosial seperti bantuan masyarakat,
program berbagi, dan kegiatan kepedulian sosial.

</p>



</div>








<div class="card">


<h3>
Jumat Rutin
</h3>


<p>

Informasi jadwal khotib Jumat,
imam, dan kegiatan rutin setiap hari Jumat.

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


let semuaJadwal =
@json($jadwals);





function formatTanggal(tanggal){



let d =
new Date(tanggal);



return String(d.getDate())
.padStart(2,'0')

+

"-"

+

String(d.getMonth()+1)
.padStart(2,'0')

+

"-"

+

d.getFullYear();



}









function lihatJadwal(tanggal){





let data =
semuaJadwal.filter(function(item){



return item.tanggal.startsWith(tanggal);



});







let html = "";






data.forEach(function(item,index){





let foto =
item.foto

?

"/storage/"+item.foto

:

"/landing/img/default.png";







html += `


<div class="detail-card">



<div class="nomor">

${index+1}

</div>




<img src="${foto}">






<div>



<h3>

${item.nama_khotib}

</h3>



<p>

${item.nama_masjid}

</p>



<p>

${formatTanggal(item.tanggal)}

</p>




</div>




</div>



`;



});







document
.getElementById("detailContainer")
.innerHTML =
html;



}




</script>





@endsection
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



<div class="navigator">


<button onclick="ubahBulan(-1)">
▲
</button>



<h3 id="judulBulan">

Januari 2026

</h3>




<button onclick="ubahBulan(1)">
▼
</button>


</div>







<div class="hari">


<span>M</span>
<span>S</span>
<span>S</span>
<span>R</span>
<span>K</span>
<span>J</span>
<span>S</span>


</div>





<div class="tanggal-grid"
id="tanggalGrid">



</div>





</div>










<!-- DETAIL -->



<div class="detail-box"
id="detailBox">


<p>
Pilih tanggal
</p>


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


Website ini dibuat untuk memberikan informasi
jadwal khotib Jumat secara mudah berdasarkan tanggal.


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

Program sosial dan kepedulian masyarakat.

</p>


</div>






<div class="card">


<h3>
Jumat Rutin
</h3>


<p>

Informasi khotib dan kegiatan setiap Jumat.

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


let semuaJadwal = 
@json($jadwals);



let bulan = 0;

let tahun = 2026;





function tampilKalender(){



let date =
new Date(tahun,bulan,1);



let jumlahHari =
new Date(
tahun,
bulan+1,
0
).getDate();





document
.getElementById("judulBulan")
.innerHTML =
date.toLocaleString(
'id-ID',
{
month:'long',
year:'numeric'
}
);






let html="";




for(let i=1;i<=jumlahHari;i++){



let tanggal =

tahun+

"-"+

String(bulan+1).padStart(2,'0')

+

"-"+

String(i).padStart(2,'0');





html += `


<div class="tanggal"
onclick="ambilDetail('${tanggal}')">

${i}

</div>


`;



}



document
.getElementById("tanggalGrid")
.innerHTML=html;



}








function ubahBulan(nilai){



bulan += nilai;



if(bulan > 11){


bulan=0;

tahun++;


}



if(bulan <0){


bulan=11;

tahun--;


}





tampilKalender();



}










function ambilDetail(tanggal){



let data = semuaJadwal.filter(function(item){



return item.tanggal.startsWith(tanggal);


});






document
.getElementById("wrapper")
.classList.add("aktif");






let html="";





data.forEach(function(item,index){



let foto =
item.foto

?

"/storage/"+item.foto

:

"/landing/img/default.png";







html += `


<div class="detail-item">



<div class="nomor">

${index+1}

</div>



<img src="${foto}">



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


`;



});







document
.getElementById("detailBox")
.innerHTML=html;



}







tampilKalender();



</script>




@endsection
@extends('landing.layout')


@section('content')


<section id="home">


<div id="sliderMasjid"
class="carousel slide"
data-bs-ride="carousel">


<div class="carousel-inner">


<div class="carousel-item active">


<img src="{{asset('landing/img/masjid1.jpg')}}"
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


<img src="{{asset('landing/img/masjid2.jpg')}}"
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





<div class="kalender-wrapper"
id="kalenderWrapper">






<!-- KALENDER -->


<div class="kalender-box">



<div class="navigator">


<button onclick="bulanMundur()">
‹
</button>


<h3 id="judulBulan"></h3>



<button onclick="bulanMaju()">
›
</button>


</div>






<div class="hari">

<span>Min</span>
<span>Sen</span>
<span>Sel</span>
<span>Rab</span>
<span>Kam</span>
<span>Jum</span>
<span>Sab</span>


</div>





<div class="tanggal-grid"
id="kalender">


</div>





</div>









<!-- DETAIL -->


<div class="detail-container">



<button class="kembali"
onclick="kembaliKalender()">

← Kembali

</button>




<h3>
Detail Khotib
</h3>






@foreach($jadwals->groupBy(function($item){

return $item->tanggal->format('Y-m-d');

}) as $tanggal=>$list)




<div class="tanggal-detail"
id="detail-{{$tanggal}}">





@foreach($list as $index=>$j)



<div class="detail-card">



<div class="angka">

{{$index+1}}

</div>






@if($j->foto)

<img src="{{asset('storage/'.$j->foto)}}">

@else

<img src="{{asset('landing/img/default.png')}}">

@endif






<div class="detail-info">


<h4>

{{$j->nama_khotib}}

</h4>



<p>

{{$j->nama_masjid}}

</p>



<span>

{{\Carbon\Carbon::parse($j->tanggal)->translatedFormat('d F Y')}}

</span>



</div>





</div>




@endforeach





</div>





@endforeach





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

<img src="{{asset('storage/'.$j->foto)}}">

@endif



<h3>

{{$j->nama_khotib}}

</h3>



</div>



@endforeach



</div>


</section>









<section id="tentang">


<h2>
Tentang Website
</h2>



<p>

Website ini dibuat untuk membantu jamaah melihat jadwal khutbah Jumat,
informasi khotib, dan masjid tempat pelaksanaan.

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
Kajian rutin dan pembelajaran agama bersama jamaah.
</p>


</div>






<div class="card">


<h3>
Kegiatan Sosial
</h3>


<p>
Program sosial masjid untuk membantu masyarakat.
</p>


</div>






<div class="card">


<h3>
Jumat Rutin
</h3>


<p>
Informasi khutbah Jumat setiap minggu.
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


let bulan = 6;

let tahun = 2026;





function tampilKalender(){



let bulanNama=[

"Januari",
"Februari",
"Maret",
"April",
"Mei",
"Juni",
"Juli",
"Agustus",
"September",
"Oktober",
"November",
"Desember"

];




document.getElementById("judulBulan").innerHTML =
bulanNama[bulan]+" "+tahun;




let kalender=document.getElementById("kalender");


kalender.innerHTML="";





let awal = new Date(
tahun,
bulan,
1
).getDay();




let jumlah = new Date(
tahun,
bulan+1,
0
).getDate();





for(let i=0;i<awal;i++){

kalender.innerHTML += "<div></div>";

}





for(let i=1;i<=jumlah;i++){


let tanggal =

tahun+
"-"+
String(bulan+1).padStart(2,'0')+
"-"+
String(i).padStart(2,'0');




kalender.innerHTML += `


<div class="tanggal"
onclick="lihatTanggal('${tanggal}')">

${i}

</div>


`;



}



}









function lihatTanggal(tanggal){



document
.getElementById("kalenderWrapper")
.classList.add("aktif");




document
.querySelectorAll(".tanggal-detail")
.forEach(item=>{

item.style.display="none";

});





let detail=document.getElementById(
"detail-"+tanggal
);




if(detail){

detail.style.display="grid";

}


}









function kembaliKalender(){


document
.getElementById("kalenderWrapper")
.classList.remove("aktif");



document
.querySelectorAll(".tanggal-detail")
.forEach(item=>{

item.style.display="none";

});


}








function bulanMaju(){


bulan++;


if(bulan>11){

bulan=0;

tahun++;

}


tampilKalender();


}








function bulanMundur(){


bulan--;


if(bulan<0){

bulan=11;

tahun--;

}


tampilKalender();


}





tampilKalender();



</script>




@endsection
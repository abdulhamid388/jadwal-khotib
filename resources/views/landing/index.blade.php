@extends('landing.layout')


@section('content')



<section id="home">


<div id="sliderMasjid" class="carousel slide" data-bs-ride="carousel">


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




<h3 id="judulBulan">
Januari 2026
</h3>




<button onclick="bulanMaju()">
›
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
id="kalender">


</div>





</div>











<!-- DETAIL -->


<div class="detail-box">



<p class="info">
Pilih tanggal jadwal
</p>





@foreach($jadwals->groupBy(function($item){


return $item->tanggal->format('Y-m-d');


}) as $tanggal=>$list)





<div class="tanggal-detail detail-{{$tanggal}}">







@foreach($list as $index=>$j)





<div class="detail-item">





<div class="nomor">

{{$index+1}}

</div>







@if($j->foto)



<img src="{{asset('storage/'.$j->foto)}}">



@else



<img src="{{asset('landing/img/default.png')}}">



@endif







<div>


<h4>

{{$j->nama_khotib}}

</h4>



<p>

{{$j->nama_masjid}}

</p>



<p>

{{$j->tanggal->format('d F Y')}}

</p>



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









<section id="tentang"
class="bg-light">


<h2>
Tentang Website
</h2>



<p>


Website ini dibuat untuk memberikan informasi jadwal khotib Jumat kepada jamaah.
Pengunjung dapat melihat jadwal khutbah, nama khotib, dan informasi masjid dengan mudah.


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

Kegiatan kajian rutin dan pembelajaran agama bersama jamaah.

</p>


</div>







<div class="card">


<h3>
Kegiatan Sosial
</h3>



<p>

Program sosial masjid seperti bantuan masyarakat dan kegiatan kemanusiaan.

</p>


</div>







<div class="card">


<h3>
Jumat Rutin
</h3>



<p>

Informasi jadwal khutbah Jumat dan kegiatan rutin setiap minggu.

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



let bulan = 0;

let tahun = 2026;







function tampilKalender(){



let namaBulan=[


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

namaBulan[bulan]+" "+tahun;






let kalender=document.getElementById("kalender");



kalender.innerHTML="";





let hariAwal =
new Date(tahun,bulan,1).getDay();




let jumlahHari =
new Date(tahun,bulan+1,0).getDate();






for(let i=0;i<hariAwal;i++){


kalender.innerHTML += "<div></div>";


}





for(let i=1;i<=jumlahHari;i++){



let tanggal =

tahun+"-"+
String(bulan+1).padStart(2,'0')
+"-"+
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





document.querySelectorAll(".tanggal-detail")

.forEach(item=>{


item.style.display="none";


});






let data=document.querySelector(

".detail-"+tanggal


);





if(data){


data.style.display="grid";


}



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
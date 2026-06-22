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

<span>M</span>
<span>S</span>
<span>S</span>
<span>R</span>
<span>K</span>
<span>J</span>
<span>S</span>


</div>






<div class="calendar-grid">



@php

$jadwalTanggal = $jadwals->pluck('tanggal')
->map(function($tgl){

return \Carbon\Carbon::parse($tgl)
->day;

});


@endphp






{{-- kosong sebelum tanggal 1 juli 2026 --}}

@for($i=0;$i<3;$i++)

<div></div>

@endfor






@for($i=1;$i<=31;$i++)



@if($jadwalTanggal->contains($i))


<div class="tanggal aktif"
onclick="bukaJadwal()">



{{ $i }}


</div>



@else



<div class="tanggal kosong">


{{ $i }}


</div>



@endif




@endfor




</div>





<button
onclick="resetKalender()"
class="btn-reset">


Kembali


</button>




</div>









<!-- TAB -->


<div class="tab-box"
id="tabBox">


@foreach($jadwals as $key=>$j)


<button
onclick="lihatDetail({{$key}})">



{{ $key+1 }}



</button>


@endforeach



</div>









<!-- DETAIL -->



<div class="detail-box">



<h3>
Detail Khotib
</h3>




@foreach($jadwals as $key=>$j)



<div class="profil"
id="profil{{$key}}">





@if($j->foto)


<img src="{{ asset('storage/'.$j->foto) }}">



@else


<img src="{{ asset('landing/img/default.png') }}">



@endif






<div>



<h3>

{{$j->nama_khotib}}

</h3>




<p>

{{$j->nama_masjid}}

</p>




</div>



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


document
.querySelectorAll(".profil")
.forEach(function(e){


e.style.display="none";


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
.forEach(function(e){


e.style.display="none";


});


}



</script>




@endsection
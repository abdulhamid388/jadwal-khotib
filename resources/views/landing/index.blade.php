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
Kalender Jadwal Khotib
</h2>



<div class="jadwal-container">



<!-- KALENDER -->

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


@for($i=1;$i<=31;$i++)


<div class="tanggal"
onclick="bukaTab()">

{{ $i }}

</div>


@endfor


</div>



</div>







<!-- TAB ANGKA -->

<div class="tab-box"
id="tabBox">


@foreach($jadwals as $key=>$j)


<button onclick="detail({{ $key }})">

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
id="data{{ $key }}">



@if($j->foto)


<img src="{{ asset('storage/'.$j->foto) }}">


@else


<img src="{{ asset('landing/img/default.png') }}">


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









<section id="tentang"
class="bg-light">


<h2>
Tentang Website
</h2>


<p style="text-align:center">

Website informasi jadwal khotib Jumat.

</p>


</section>









<script>


function bukaTab(){


document
.getElementById("calendarBox")
.classList.add("geser");


document
.getElementById("tabBox")
.classList.add("muncul");


}




function detail(id){


let data =
document.querySelectorAll(".profil");


data.forEach(function(item){


item.style.display="none";


});



document
.getElementById("data"+id)
.style.display="flex";

}



</script>



@endsection
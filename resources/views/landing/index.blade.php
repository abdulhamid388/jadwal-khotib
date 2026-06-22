@extends('landing.layout')


@section('content')


<section id="home">


<div id="sliderMasjid" class="carousel slide" data-bs-ride="carousel">


<div class="carousel-inner">


<div class="carousel-item active">


<img src="{{ asset('landing/img/masjid1.jpg') }}"
class="d-block w-100"
alt="Masjid">



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
class="d-block w-100"
alt="Masjid">



<div class="carousel-caption">


<h1>
Informasi Masjid
</h1>


<p>
Kegiatan dan informasi masjid terbaru
</p>


<a href="#jadwal">
Lihat Informasi
</a>


</div>


</div>


</div>





<button class="carousel-control-prev"
type="button"
data-bs-target="#sliderMasjid"
data-bs-slide="prev">


<span class="carousel-control-prev-icon"></span>


</button>





<button class="carousel-control-next"
type="button"
data-bs-target="#sliderMasjid"
data-bs-slide="next">


<span class="carousel-control-next-icon"></span>


</button>



</div>


</section>









<section id="jadwal">


<h2>
Jadwal Khotib Jumat
</h2>




<div class="cards">



@if($jadwals->count())



@foreach($jadwals as $j)



<div class="card"
style="cursor:pointer"
data-bs-toggle="modal"
data-bs-target="#detail{{ $j->id }}">



<h3>

{{ $j->tanggal->format('d-m-Y') }}

</h3>



</div>





<!-- MODAL DETAIL -->

<div class="modal fade"
id="detail{{ $j->id }}"
tabindex="-1">



<div class="modal-dialog modal-dialog-centered">



<div class="modal-content">





<div class="modal-header">


<h5 class="modal-title">

Detail Jadwal Khotib

</h5>



<button type="button"
class="btn-close"
data-bs-dismiss="modal">

</button>


</div>






<div class="modal-body text-center">





@if($j->foto)


<img src="{{ asset('storage/'.$j->foto) }}"
class="img-fluid rounded mb-3"
style="max-height:250px">



@endif





<h3>

{{ $j->nama_khotib }}

</h3>




<p>

Masjid :
{{ $j->nama_masjid }}

</p>




<p>

Tanggal :
{{ $j->tanggal->format('d F Y') }}

</p>





</div>




</div>



</div>


</div>





@endforeach




@else


<p>
Belum ada jadwal khotib
</p>


@endif



</div>


</section>












<section id="galeri">


<h2>
Galeri Khotib
</h2>




<div class="cards">



@if($jadwals->count())



@foreach($jadwals as $j)



<div class="card">



@if($j->foto)



<img src="{{ asset('storage/'.$j->foto) }}"
class="img-fluid"
alt="Foto Khotib">



@endif





<h3>

{{ $j->nama_khotib }}

</h3>




<p>

{{ $j->nama_masjid }}

</p>




</div>




@endforeach



@else


<p>
Belum ada foto khotib
</p>


@endif



</div>


</section>









<section id="tentang" class="bg-light">


<h2>
Tentang Website
</h2>



<p style="text-align:center;">

Website ini dibuat untuk memberikan informasi
jadwal khotib Jumat kepada jamaah.

</p>


</section>









<section id="kegiatan" class="bg-light">


<h2>
Informasi Kegiatan
</h2>




<div class="cards">



<div class="card">


<h3>
Kajian Masjid
</h3>


<p>
Informasi kajian dan kegiatan keagamaan masjid.
</p>


</div>





<div class="card">


<h3>
Kegiatan Sosial
</h3>


<p>
Informasi program sosial masjid.
</p>


</div>





<div class="card">


<h3>
Jumat Rutin
</h3>


<p>
Informasi imam dan khotib Jumat.
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





@endsection
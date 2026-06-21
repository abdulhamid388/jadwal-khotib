@extends('landing.layout')

@php
use Illuminate\Support\Facades\Storage;
@endphp


@section('content')


<!-- ================= HERO SLIDER ================= -->

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







<!-- ================= JADWAL ================= -->


<section id="jadwal">


<h2>
Jadwal Khotib Jumat
</h2>



<div class="cards">


@if($jadwals->count())


@foreach($jadwals as $j)


<div class="card">


<h3>
{{ $j->nama_masjid }}
</h3>



<p>
Tanggal :
{{ $j->tanggal->format('d-m-Y') }}
</p>



<p>
Khotib :
{{ $j->nama_khotib }}
</p>



</div>


@endforeach


@else


<p>
Belum ada jadwal khotib
</p>


@endif



</div>


</section>









<!-- ================= GALERI KHOTIB ================= -->


<section id="galeri">


<h2>
Galeri Khotib
</h2>



<div class="cards">


@if($jadwals->count())


@foreach($jadwals as $j)



<div class="card">



@if($j->foto)


<img src="{{ Storage::url($j->foto) }}"
class="img-fluid"
alt="Foto Khotib">



@else


<p>
Foto tidak tersedia
</p>


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









<!-- ================= TENTANG ================= -->


<section id="tentang"
class="bg-light">


<h2>
Tentang Website
</h2>


<p style="text-align:center;">

Website ini dibuat untuk memberikan informasi
jadwal khotib Jumat kepada jamaah.

</p>


</section>









<!-- ================= KEGIATAN ================= -->


<section id="kegiatan"
class="bg-light">


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








<!-- ================= KONTAK ================= -->


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
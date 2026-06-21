<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<title>
Admin Jadwal Khotib
</title>


<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">



<style>


body{

background:#f5f6fa;

font-family:Arial;

}



.sidebar{

width:260px;

height:100vh;

position:fixed;

background:#222;

color:white;

padding:30px 20px;

}



.sidebar h3{

color:#ff5722;

margin-bottom:40px;

}



.sidebar a{


display:block;

color:white;

text-decoration:none;

padding:12px;

margin-bottom:10px;

border-radius:8px;

}



.sidebar a:hover{

background:#ff5722;

}




.content{


margin-left:260px;

padding:40px;


}



.card{


border:none;

border-radius:15px;

box-shadow:0 10px 25px rgba(0,0,0,.1);

}




.btn-orange{


background:#ff5722;

color:white;

}



.btn-orange:hover{


background:#e64a19;

color:white;

}



</style>


</head>


<body>




<div class="sidebar">


<h3>
Admin Masjid
</h3>



<a href="/admin">

<i class="bi bi-calendar"></i>

 Jadwal Khotib

</a>



<a href="/">

<i class="bi bi-house"></i>

 Website

</a>


</div>





<div class="content">


@yield('content')


</div>





</body>


</html>
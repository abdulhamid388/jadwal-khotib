<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Jadwal Khotib</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


<style>


*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}



body{

    font-family: 'Inter', sans-serif;

    background:#f8fafc;

}




/* SIDEBAR */

.sidebar{


    width:260px;

    height:100vh;

    background:#0f172a;

    position:fixed;

    left:0;

    top:0;

    padding:25px;

    color:white;

}





.sidebar h3{

    font-size:25px;

    font-weight:800;

    margin-bottom:10px;

}





.welcome{


    background:#1e293b;

    padding:15px;

    border-radius:15px;

    margin-bottom:30px;


}



.welcome p{

    margin:0;

    font-size:14px;

    color:#cbd5e1;

}



.welcome h5{

    margin:5px 0 0;

    color:white;

}





.menu a{


    display:flex;

    align-items:center;

    gap:12px;


    color:#cbd5e1;

    text-decoration:none;


    padding:12px 15px;


    border-radius:12px;


    margin-bottom:8px;


    transition:.3s;


}





.menu a:hover{


    background:#2563eb;

    color:white;


}







.content{


    margin-left:260px;

    padding:30px;


}






.logout button{


    width:100%;

    margin-top:20px;


}





</style>


</head>




<body>



<!-- SIDEBAR -->


<div class="sidebar">



<h3>

<i class="bi bi-mosque"></i>

Admin

</h3>





<div class="welcome">


<p>

Selamat datang,

</p>


<h5>

{{ Auth::user()->name }}

</h5>


</div>







<div class="menu">



<a href="{{ route('admin.jadwal.index') }}">

<i class="bi bi-calendar-week"></i>

Jadwal Khotib

</a>







<a href="#">

<i class="bi bi-building"></i>

Daftar Masjid

</a>







<a href="#">

<i class="bi bi-person-badge"></i>

Daftar Khotib

</a>







<a href="#">

<i class="bi bi-people"></i>

User

</a>








<a href="/">

<i class="bi bi-house"></i>

Kembali ke Website

</a>






</div>









<div class="logout">


<form action="{{ route('logout') }}" method="POST">

@csrf


<button class="btn btn-danger">


<i class="bi bi-box-arrow-right"></i>

Logout


</button>


</form>


</div>







</div>









<!-- CONTENT -->



<div class="content">


@yield('content')


</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



</body>


</html>
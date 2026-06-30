<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
Jadwal Khotib
</title>


<link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">



@vite(['resources/css/app.css','resources/js/app.js'])


</head>



<body class="bg-light">



@include('layouts.navigation')





<div class="container-fluid mt-4">


@yield('content')


</div>





<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>



</body>


</html>
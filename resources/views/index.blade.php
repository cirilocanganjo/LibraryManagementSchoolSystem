<!DOCTYPE html>
<html lang="pt-br">

<head>
<!--links-->
@include('partials/links')
<!--fim links-->
  <title>Biblioteca</title>
  <style>
    a{
      text-decoration: none;
    }
  </style>
</head>

<body>
<!--Navbar-->
@include('partials/navbar')
<!--fim Navbar-->
 <!--Message success-->
 @include('partials/message')
 <!--fim message success-->

<!--Menu de links-->
<div class="container mt-4">
 <!--Message error-->
 @include('partials/error')
 <!--fim message error-->
  <div class="row pb-3">

 <!--Paginação-->
 @include('partials/pagination')
 <!--Fim do Paginação-->

  </div><hr class="mt-1"></div>
  <!--Fim Menu de links-->
 <!--Tecnologia-->
 <div class="container py-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">

    @foreach ($book as $book)
    <div class="col" data-anima="esquerda">
        <div class="card h-100 w-75">
          <img src="{{asset('storage/img/book_cap/'.$book->image_path)}}" style="height: 150px"  alt="" class="card-img-top">
          <div class="card-body">

            <p class="card-text">{{$book->title}}</p>
      <div><a href="{{route('create.loan.book',$book->id)}}" class="btn btn-success">Emprestar</a>
        <a href="{{route('show.book',$book->id)}}" target="__blank" class="btn btn-primary">Detalhes</a></div>
          </div>
  </div></div>
  @endforeach
</div>
</div>
<!--Fim  Tecnologia-->

<!--Menu de links-->
<div class="container">

<div class="row pb-3">

</div> </div>
<!--Fim Menu de links-->
<div class=" d-md-none d-lg-none d-sm-none d-block"  style="height: 250px;"></div>
<div class="col-md d-sm-none d-lg-none d-md-block d-none"  style="height: 150px;"></div>
<div class="col-lg d-md-none d-sm-none d-lg-block d-none"  style="height: 130px;"></div>
<div class="col-sm d-md-none d-lg-none d-sm-block d-none"  style="height: 280px;"></div>

 <!--Rodape-->
 @include('partials/footer')
<!--Fim do Rodape-->
</body>

</html>

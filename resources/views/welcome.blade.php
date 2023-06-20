@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portofolio | Elsa Estika</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color:#C3B091; 
             
        }
        .form-label>span{
          color: red;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#8E806A;">
        <div class="container">
          <a class="navbar-brand" href="#">Elsa estika</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portofolio">Portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <!--akhir navbar-->
      <!--Home-->
      
      <section id="home">
        <div class="container-fluid pt-4">
          <div class="text-bg text-center p-5">
            <img src="/storage/{{ $profil->foto }}" alt="" width="200" class="img-thumbnail rounded-circle">
            <h2 class="fw-bold mt-3">{{ $profil->nama }}</h2>
          </div>
        </div>
      </section>
      <!--Akhir Home-->
      <!--About me-->
      <section id="about">
        <div class="container">
          <div class="p-5 text-center">
            <h3 class="fw-bold mb-3">About me</h3>
            <div class="row justify-content-center">
              <div class="col-md-4">
                <p class="fs-5">{{ $profil->about }}</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Akhir aboutme-->
      <!--Myproject-->
      <section id="portofolio" class="page-section portofolio">
        <div class="container fluid text-center">
          {{-- <div class="p-5" text-bg-light text-center> --}}
            <h3 class="fw-bold mb-3 text-center">Portofolio</h3>
            <div class="row justify-content-center">
              {{-- <div class="col-md-4 mb-3"> --}}
                {{-- <div class="card h-100" style="width: 350px;"> --}} 
                  @foreach ($portofolio as $item)
                  <div class="col col-md-4 mb-5 text-center">
                    <div class="card mt-5 ms-4" style="width: 18rem;">
                      <img src="/storage/{{ $item->gambar }}" class="card-img-top" alt="" width="200" height="300">
                      <div class="card-body">
                        <h4 class="fw-bold">{{ $item->nama_portofolio }}</h4>
                        <p class="card-text">{{ $item->kategori }}</p>
                        <p class="card-text">{{ $item->deskripsi }}</p>
                      
                      </div>
                  </div>
                </div>
                @endforeach
                {{-- </div> --}}
              {{-- </div> --}}
            </div>
          {{-- </div> --}}
        </div>
      </section>
      <!--Akhir project-->

      <!--Contact Me-->
      <section id="contact">
        <div class="container p-5">
         <h3 class="fw-bold text-center" mb-3>Contact Me</h3>
         <div class="row justify-content-center">
           <div class="col-md-6">
          <form action="{{ url('contact/create') }}" method="post">
            @csrf
              <div class="mb-3">
                <label for="form" class="form-label">Nama lengkap <span>*</span></label>
                <input type="text" name="nama" id="nama" class="form-control">
              </div>
              <div class="mb-3">
                <label for="form" class="form-label">Email <span>*</span></label>
                <input type="email" name="email" id="email" class="form-control">
              </div>
              <div class="mb-3">
                <label for="form" class="form-label">Pesan <span>*</span></label>
                <input type="text" name="pesan" id="pesan" class="form-control">
              </div>
              <div class="mb-3">
                <input type="submit" value="kirim" class="btn btn-primary">
              </div>
            </div>
          </form>
         </div>
        </div>
      </section>
      
      <!--Akhir Contact Me-->
      <div class="container-fluid">
        <footer class="py-3 my-3 border-top">
          <p class="text-center">&copy; 2023 <a href="https://instagram.com/haisayaeca?igshid=ZDdkNTZiNTM=" target="_blank" class="fw-bold textdecoration-none"> Elsa estika</a></p>
        </footer>
      </div>

</body>
<script src="js/bootstrap.bundle.js"></script>
</html>
@endsection
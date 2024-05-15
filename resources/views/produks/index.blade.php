<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
     {{-- Navbar --}}
     @include('layouts.navbar')
     {{-- /Navbar --}}
 
     {{-- Content --}}
     <div class="section">
         <div class="container">
             <div class="row mt-5">
                 <center><h3>List Artikel</h3></center>
             </div>
             <div class="row mt-5">
                 @foreach ($produk as $data )
                 <div class="col-4 mt-5">
                     <div class="card" style="width: 18rem;">
                         <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=1798&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                         <div class="card-body">
                           <h5 class="card-title">{{ $data->nama_produk}}</h5>
                           <p class="card-text">{{$data->jumlah}}</p>
                           <a href="{{$data->id}}" class="btn btn-primary">more detail</a>
                         </div>
                       </div>
                 </div> 
                 @endforeach
             </div>
         </div>
     </div>
     {{-- /Content --}}
 
     {{-- Footer --}}
        @include('layouts.footer')
     {{-- /Footer --}}
 

     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
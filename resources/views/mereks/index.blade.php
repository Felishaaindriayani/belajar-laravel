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
                 @foreach ($merek as $data )
                 <div class="col-4 mt-5">
                     <div class="card" style="width: 18rem;">
                         <img src="https://yt3.ggpht.com/a/AATXAJxzz7mL1jzXCQytG9FJw-DGWRW_Ug4_Bg_H=s900-c-k-c0xffffffff-no-rj-mo" class="card-img-top" alt="...">
                         <div class="card-body">
                           <h5 class="card-title">{{ $data->nama_merek}}</h5>
                           <p class="card-text"></p>
                           <a href="{{ $data->id }}" class="btn btn-primary">more detail</a>
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
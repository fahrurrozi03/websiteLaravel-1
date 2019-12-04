@extends('layout.main')

@section('title', 'Welcome')

@section('content')
<!-- Button trigger modal -->
<!-- Modal -->
    <body>
      <br>
      <br>
      <br>
      <br>
      <div class="container">

         <section class="jumbotron text-center">
            <div class="container">
               <h1 class="jumbotron-heading">Share {{Session::get('name')}}</h1>
               <p class="lead texta-muted">Sebuah website untuk menampung beberapa project Fahrur Rozi</p>
               <p>
                  <a href="{{url('/projects')}}" class="btn btn-primary">Cek Disini</a>
               </p>
                
            </div>
         </section>
      </div>

      <br>
      <br>
      <br>
      <br>
    </body>

   </script>

@endsection

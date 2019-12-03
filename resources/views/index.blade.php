@extends('layout.main')

@section('title', 'Welcome')

@section('content')
    <body>
      <br>
      <br>
      <br>
      <br>
      <div class="container">

         <section class="jumbotron text-center">
            <div class="container">
               <h1 class="jumbotron-heading">Share project</h1>
               @if(Auth::user())
               <p class="lead text-muted">Selamat datang, {{Auth::user()->name}} !</p>
                 <p>
                  <a href="{{ route('upload') }}" class="btn btn-primary">Upload filemu Disini</a>
               </p>

               @else
               <p class="lead texta-muted">Sebuah website untuk menampung beberapa project Fahrur Rozi</p>
               <p>
                  <a href="{{url('/projects')}}" class="btn btn-primary">Cek Disini</a>
               </p>
                 @endif
            </div>
         </section>
      </div>

      <br>
      <br>
      <br>
      <br>
    </body>

@endsection

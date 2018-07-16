@extends('layouts.master')

@section('content')

<main role="main" class="container">

      <div class="row">


        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose (Ezekiel's Post)
          </h3>
         <?php foreach($posts as $post): ?>

          @include('posts.post')

          
         <?php endforeach;?>

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

        

@endsection
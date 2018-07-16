@extends('layouts.master')

@section('content')
<main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          

         <h1> Publish a post </h1>

         <form method="post" action="/posts">

         	{{ csrf_field() }}
			  <div class="form-group">
			    <label for="title"> Title: </label>
			    <input type="text" class="form-control" id="title" name="title" >
			  </div>

			  <div class="form-group">
			    <label for="body"> Body: </label>
			    <textarea id="body" name="body" class="form-control" rows="5" cols="2" ></textarea>
			  </div>
			 <div class="form-group">
			  <button type="submit" class="btn btn-primary"> Publish </button>
			 </div>
			  @include('layouts.errors')
	  </form>
	 
        </div><!-- /.blog-main -->

@endsection


@extends('layouts.master')

@section('content')

<main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          

         <h1> Sign In </h1>
         <form method="POST" action="/login">
         	{{ csrf_field() }}

         	<div class="form-group">

         		<label for="email"> Email: </label>
         		<input type="email" class="form-control" name="email">
         		
         	</div>
         	<div class="form-group">
         		<label for="password"> Password: </label>
         		<input type="password" name="password" class="form-control">
         	</div>

         	<div class="form-group">
         		<button type="submit" class="btn btn-primary"> Sign In </button>
         	</div>
         	@include('layouts.errors')
         </form>	 
        </div><!-- /.blog-main -->
@endsection


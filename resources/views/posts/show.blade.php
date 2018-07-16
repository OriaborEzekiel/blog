@extends('layouts.master')

@section('content')
<main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          
         <h1> <?php echo $post->title; ?> </h1>

         <p> <?php echo $post->body; ?></p>

         <div class="comments">

         	<?php foreach($post->comments as $comment): //a post has many comments  ?>

         		<article>
         		 <ul class="list-group">
         		 	<li class="list-group-item">
                     <?php echo $comment->user->name; ?>
         		 		<strong>
         		 			<?php

         		 				echo $comment->created_at->diffForHumans() . ": ";

         		 			?>
         		 		</strong>
         			<?php
         				echo $comment->body;

         			?>
         		    </li>
         		</ul>
         		</article>

         	<?php endforeach;?>


         <!--Add Comments-->

       		<hr>
         <div class="card">

         	<div class="card-block">

         			<form method="POST" action="/posts/<?php echo $post->id; ?>/comments">
         				<?php echo csrf_field(); ?>
         				<div class="form-group">

         				<textarea name="body" class="form-control" rows="5" placeholder="Your comment here..." required=""></textarea>
         					
         				</div>

         				<div class="form-group">

         				<button type="submit" class="btn btn-primary">
         					Add Comment
         				</button>
         				</div>


         			</form>
         			@include('layouts.errors')
         		
         	</div>
         	
         </div>
         
         </div>
        </div><!-- /.blog-main -->

@endsection


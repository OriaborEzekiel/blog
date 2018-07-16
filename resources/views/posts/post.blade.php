<div class="blog-post">
            <h2 class="blog-post-title"> <a href="/posts/<?php echo $post->id; ?>"> <?php  echo $post->title; ?> </a> </h2>
            <p class="blog-post-meta">
             By	<?php echo $post->user->name;  ?> On
            	<?php echo $post->created_at->toFormattedDateString(); ?> </p>

            <p>
              <?php echo $post->body; ?>
            </p>
</div><!-- /.blog-post -->
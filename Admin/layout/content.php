<div class="col-md-8">

<h1 class="page-header">
    Page Heading
    <small>Secondary Text</small>
</h1>

<!-- First Blog Post -->
<?php 
    $sql = "SELECT * FROM posts";

    $result = mysqli_query($connection,$sql);

    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $title = $row['title'];
            $author = $row['author'];
            $date = $row['date'];
            $hr = "<hr>";
            $img = $row['img'];
            $content = $row['content'];
            $id = $row['id'];

            echo "<h2><a href='#'>{$title}</a></h2>";
            echo "<p class='lead'>By <a href='#'>{$author}</a></p>";
            echo "<p><span class='glyphicon glyphicon-time'></span> posted at {$date}</p>";
            echo $hr;
            echo "<img src='img/{$img}' class='img-responsive'>";
            echo $hr;
            echo "<p class='lead'>{$content}</p>";
            echo "<a href='post.php?id=$id' class='btn btn-primary'>read more <span class='glyphicon glyphicon-chevron-right'></span></a>";
            echo $hr;

            
        }
    }else
    {
        echo "<h1>No Posts Yet</h1>";
    }


?>
<h2>
    <a href="#">Blog Post Title</a>
</h2>
<p class="lead">
    by <a href="index.php">Start Bootstrap</a>
</p>
<p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
<hr>
<img class="img-responsive" src="http://placehold.it/900x300" alt="">
<hr>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

<hr>

<!-- Second Blog Post -->


<!-- Pager -->
<ul class="pager">
    <li class="previous">
        <a href="#">&larr; Older</a>
    </li>
    <li class="next">
        <a href="#">Newer &rarr;</a>
    </li>
</ul>

</div>

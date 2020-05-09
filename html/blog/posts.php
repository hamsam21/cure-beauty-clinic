<?php include('../../layout/header.php'); ?>

<?php include('../../layout/nav.php'); ?>

<div class="container">
<div class="row">

<div class="col">

<?php
include('../../layout/DB.php');
echo 'pk';
 ?>

<?php

$sql = "SELECT posts.post_ID,users.name,title,pic,content,user_ID FROM posts INNER JOIN users on users.ID_user=posts.user_ID WHERE approved='yes'";
$result = mysqli_query($connection,$sql);

if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
$id = $row['id'];
$title = $row['title'];
$img = $row['post_img'];
$user = $row['name'];
$content = $row['content'];
$hr = '<hr>';


//$comment = $row['comments'];

echo "<h2><a href='#'>{$title}</a></h2>";
echo "<p class='lead'>By <a href='#'>{$user}</a></p>";
echo $hr;
echo "<img class='img-responsive' src='../../img/{$img}'>";
echo $hr;
echo "<p class='lead'>{$content}</p>";
$getComments = "SELECT comments,users.name FROM comments INNER JOIN users ON users.id=comments.users_id WHERE post_id='$id'";
$comment = mysqli_query($connection,$getComments);
if(mysqli_num_rows($comment)>0)
{
    while($rowComment = mysqli_fetch_assoc($comment))
    {
        $username = $rowComment['name'];
        $commentText = $rowComment['comments'];

        echo "<div>
        <p>{$username} : <span>{$commentText}</span></p>
    </div>";


    }

}else
{
    echo 'no commets yet';
}

echo "<div>
<form action='comments.php?id={$id}' method='post'>
    <textarea class='form-control' name='comment' id='' cols='30' rows='2'></textarea>
    <a href='comments.php'><input class='btn btn-primary' type='submit' value='comment' name='send'></a>
</form>
</div>";

}
}else
{
    echo 'no posts yet';
}


?>

</div>
</div>

</div>



<!-- Sidebar -->
<?php include('../../layout/POPULAR POSTS.php'); ?>


  <!-- Post data -->
  <?php include('../../layout/archive.php'); ?>
<!-- Fourth column -->
<!-- Title -->
<?php include('../../layout/sidebar.php'); ?>

  
  <!-- Footer -->
  <?php include('../../layout/footer.php'); ?>


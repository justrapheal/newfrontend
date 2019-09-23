<?php 
include 'header.php';


?>



<div class="user_details column">

<a href="#"> <img src="images/default/defualt.png"class=""></a>
<div class="user_details_left_right">
<a href="#">
<?php echo $user['FirstName']." ".$user['LastName']; ?>
<br />
</a>
<?php echo "Posts:". $user['num_posts'];
echo "Likes:". $user['num_likes'];
?>
</div>

</div>
<div class="main_column column">
<form action="home.php" class="post_form" method="POST">
<textarea name="post" id="post_text" name="post_text" placeholder="GOT SOMETHING TO SAY?">





</textarea>

<input type="submit" value="post" id="post_button" name="post">
<hr>

</form>

</div>
</div>
</body>
</html>
    
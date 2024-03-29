<?php
    require '../App/Views/common/head.php';
    require '../App/Views/common/navigation.php';
    use App\Authentication;

?>

<h1>HOME PAGE</h1>

<?php
    if(Authentication::isLoggedIn()):
?>
User with email <?php echo $_SESSION['user_email']; ?> is logged in. <a href="/logout">Log out</a>.

<?php else: ?>
<a href="/signup">Sign up</a> or <a href="/login">Log in</a>.

<?php endif; ?>

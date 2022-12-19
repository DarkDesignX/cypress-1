<?php $page_title = "Home ★ Productive"; ?>
<?php require "view/blocks/page_start.php"; ?>
<h1>Welcome to Productive!</h1>
<?php require "view/blocks/page_end.php"; ?>

<script>
class UserService {
  validateUsername = function (username) {
    // implement validation here
  }
}

window.UserService = UserService;
</script>
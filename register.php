<?php
include("header.html");
?>
<!--
<form action="registeraction.php" method="post" >
    <input type="text" name="firstname" placeholder="نام">
    <input type="text" name="lastname" placeholder="فامیل">
    <input type="text" name="email" placeholder="ایمیل">
    <input type="text" name="username" placeholder="نام کاربری">
    <input type="text" name="password" placeholder="رمز">
    <input type="text" name="repassword" placeholder="تکرار رمز">
    <input type="submit" value="ثبت نام">
</form>-->
<form action="registeraction.php" method="post">
  <div class="imgcontainer">
    <img src="photos/profile-circle.svg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b>نام کاربری *</b></label>
    <input type="text" placeholder="وارد کردن نام کابری" name="username" required>

    <label for="email"><b>ایمیل *</b></label>
    <input type="email" placeholder="وارد کردن ایمیل" name="email" required>

    <label for="passw"><b>رمز عبور *</b></label>
    <input type="password" placeholder="وارد کردن رمز عبور" name="passw" required>

    <label for="repassw"><b>تکرار رمز عبور *</b></label>
    <input type="password" placeholder="تکرار رمز عبور" name="repassw" required>

    <button type="submit">ورود</button>
  </div>

</form>
<?php
include("footer.html");
?>
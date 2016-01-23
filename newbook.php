<?php require('header.html');?>
  <title>Book-O - New Book Entry</title>
</head>
<style>
  .form-control {
    border:0px;
  }

</style>
<body>
 
  <div class="container">
 <img src="logo1.png"  class="img-rounded" title="点此返回主页" style="width: 43%;margin: -44px 0 0 0;">
      <h1>Book-O-Rama - New Book Wish list</h1>
     <form class="form-signin" action="insert_book.php" method="post">
    <table border="0" class="form-control">
      <tr>
        <td style="padding: 20px 0 0 0;">&nbsp;ISBN</td>
  
         <td>  <br/><input type="text" name="isbn" maxlength="13"  placeholder="请输入" required></td>
      </tr>

      <tr>
        <td style="padding: 20px 0 0 0;">&nbsp;Author&nbsp;&nbsp;</td>
        <td>  <br/> <input type="text" name="author" maxlength="30" required></td>
      </tr>

      <tr>
        <td style="padding: 20px 0 0 0;">&nbsp;Title&nbsp;&nbsp;</td>
        <td>   <br/><input type="text" name="title" maxlength="60" required></td>
      </tr>
      <tr>
        <td style="padding: 20px 0 0 0;">&nbsp;Price $&nbsp;&nbsp;</td>
        <td>  <br/><input type="text" name="price" maxlength="7" required></td>
      </tr>
      <tr>
      <br/>
        <td colspan="2">
        <br/>
         <p class="text-right ">
        <input type="submit" value="Register" class="btn  btn-primary ">
        <a class="btn  btn-success text-center" name="submit"  type="submit" value=""href="home.php">Search</a>
      </p>
      </td>
      </tr>
    </table>

  </form>
      </div>
     <?php require('footer.html');?>
</body>
</html>

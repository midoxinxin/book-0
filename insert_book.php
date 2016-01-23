<?php require('header.html');?>
  <title>Book-O-Rama Book Entry Results</title>
</head>
<body>
 <div class="container">
   <img src="logo1.png"  title="点此返回主页" class="img-rounded" style="width: 43%;margin: -44px 0 0 0;">
<h2>Book-O-Rama Book Entry Results</h2>

<?php
  // create short variable names
  $isbn=$_POST['isbn'];
  $author=$_POST['author'];
  $title=$_POST['title'];
  $price=$_POST['price'];

  if (!$isbn || !$author || !$title || !$price) {
     echo "You have not entered all the required details.<br />"
          ."Please go back and try again.";
     exit;
  }

  if (!get_magic_quotes_gpc()) {
    $isbn = addslashes($isbn);
    $author = addslashes($author);
    $title = addslashes($title);
    $price = doubleval($price);
  }

  @ $db = new mysqli('localhost', 'root', '', 'books');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }

  $query = "insert into books values
            ('".$isbn."', '".$author."', '".$title."', '".$price."')";
  $result = $db->query($query);

  if ($result) {
      echo "<table class=\"table table-striped\"><tr>
  <td class=\"info\"> ".$db->affected_rows."book inserted into database</td></tr></table>";
  } else {
    
  	   echo "<table class=\"table table-striped\"><tr>
  <td class=\"info\">An error has occurred. The item was not added.</td></tr></table>";
  }
 

  $db->close();
?>
<div class="row">

 <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Price $</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
              </tr>
              <?php echo"<tr class=\"success\">
                <td >4</td>
                <td>".$title."</td>
                <td>".$author."</td>
                <td>".$isbn."</td>
                <td>".$price."</td>
              </tr>"?>
            </tbody>
          </table>
        </div>
        </div>
    <?php require('footer.html');?>
</body>
</html>

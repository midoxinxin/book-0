<?php require('header.html');?>
  <title>Book-O-Rama Search Results</title>
</head>
<body>
 <div class="container">
 <img src="logo1.png"  class="img-rounded" style="width:35%;height:35%" >


<h1>Book-O-Rama Search Results</h1>


<?php


  // create short variable names
  $searchtype=$_POST['searchtype'];
  $searchterm=trim($_POST['searchterm']);

  if (!$searchtype || !$searchterm) {
     echo 'You have not entered search details.  Please go back and try again.';
     exit;
  }

  if (!get_magic_quotes_gpc()){
    $searchtype = addslashes($searchtype);
    $searchterm = addslashes($searchterm);
  }

  @ $db = new mysqli('localhost', 'root', '', 'books');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  $query = "select * from books where ".$searchtype." like '%".$searchterm."%'";
  $result = $db->query($query);

  $num_results = $result->num_rows;
?>
<br/>
<br/>
<br/>
<?php
  echo "<h4>Number of books found: ".$num_results."</h4>";

  for ($i=0; $i <$num_results; $i++) {
     $row = $result->fetch_assoc();
     echo "<table class=\"table\">
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
             <tr class=\"info\">";
     echo "<td>".($i+1)."</td>";
     echo "<td>".htmlspecialchars(stripslashes($row['title']))."</td>";
     echo "<td>".stripslashes($row['author'])."</td>";
     echo "<td>".stripslashes($row['isbn'])."</td>";
     echo "<td>".stripslashes($row['price'])."</td>";
     echo "   </tbody></table>";
  }

  $result->free();
  $db->close();

?>
<br/>
<br/>
<br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/>
  </div>
   <?php require('footer.html');?>
</body>

</html>

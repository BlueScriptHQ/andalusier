<?php
  require "../php/connection.php";

  require "../php/assets/classes/connection_class.php";

  $accountsHandling =  new connectionHandler();

  // the MYSQL query
  $sql = "SELECT pages.pages_id, pages_name, pages_parentid, pages_url FROM acc_ranks
  INNER JOIN ranks
  ON acc_ranks.ranks_id = ranks.ranks_id
  INNER JOIN ranks_pages
  ON ranks.ranks_id = ranks_pages.ranks_id
  INNER JOIN pages
  ON ranks_pages.pages_id = pages.pages_id
  WHERE acc_ranks.accounts_id = :id
  ";
  // prepare the query before it's executed.
  // The main purpose of the prepare function is to separate the variables from the query so that the query is not fulnerable for MySQL injections.
  // Which is now virtually impossible.
  $results = $conn->prepare($sql);
  $results->execute(array(
    "id" => 1 // this will later be the user_id of the account that is logged in.
  ));
  // fetch the results as an object. NOTE: This is personal preference, an array will do just fine! :)
  $fetchedResults = $results->fetchAll(PDO::FETCH_OBJ);

  // here we create the hierarchy array, we will load our database data into this array.
  $hierarchy = array();
  // here we create the index array, that we will need for editing the hierarchy array properly.
  $indexes = array();

  // iterating through the database results...
  foreach($fetchedResults as $row){
      // This if statement checks if there is already an array that has an id of the parent id.
      // If so, we will add the row as a child to that parent.
      // NOTE: You can safely assume that parents are being created first. This has been built into the database.
      // Because this is a double layered menu, (So no multiple layers) we can also assume that a row with a parentid equal to nothing IS a parent.
      // Also a good thing to note is that everytime a parent is created, the indexes array will store the index value for this parent.
      // So let's get into the code shown below.

      // If there is an index in the index array equal to the current parent_id, it means that there is a parent available
      // where this child can be added to.
      if (array_key_exists($row->pages_parentid, $indexes)) {
        // Now we know that there is a parent available, we want to add this record to its parent.
        // So we have to iterate through the hierarchy array to find the parent that belongs to this record.
        // F.e. if this record has a parent id of 1 this for loop will iterate through the (whole) hierarchy until it finds a record with the page_id of 1
        for ($i= 0; $i < count($hierarchy); $i++) {
          // Save the page_id of A record.
          $check = $hierarchy[$i]['pages_id'];
          // Check if this page_id (parent_id) matches the parent_id of this record. If so, we found the parent! :)
          if($check == $row->pages_parentid){
            // Add a new array into the parent with the childs info.
            $hierarchy[$i][] = array(
              "pages_parentid" => $row->pages_parentid,
              "pages_id" => $row->pages_id,
              "pages_url" => $row->pages_url,
              "pages_name" => $row->pages_name
            );
          }
        }
      } else {
          // This element is no child. So, the record will be added as a parent.
          $hierarchy[] = array(
            "pages_id" => $row->pages_id,
            "pages_url" => $row->pages_url,
            "pages_name" => $row->pages_name
          );
          // Save the index of the created parent into the indexes array
          $indexes[$row->pages_id] = "SomeCoolValue, ThisIsJustAPlaceholderAnyway";
      }

      // And we're done! :)
  }

  // pretty print the created hierarchy, so it's (more) readable.
  echo "<pre>";
  print_r($hierarchy);
  echo "</pre>";

  // Just for the geeks around, here is the indexes array.
  echo "<pre>";
  print_r($indexes);
  echo "</pre>";

  // and now for the users (they obviously dont want to be bothered with an array looking menu ;) );
  echo "<h2>The compiled menu:</h2>";
  foreach ($hierarchy as $parentKey => $parentValue) {
    echo $hierarchy[$parentKey]["pages_id"].". ".$hierarchy[$parentKey]["pages_name"]."<br>";
    foreach ($hierarchy[$parentKey] as $key => $value) {
      if(is_array($value)){
        echo "- ".$value["pages_parentid"].". ".$value["pages_name"]."<br>";
      }
    }
  }

?>

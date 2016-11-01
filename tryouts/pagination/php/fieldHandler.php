<?php
  session_start();

    if(isset($_POST["clicked"])){
      $_SESSION["currentPage"] = $_POST["clicked"];
    }

    if(isset($_POST["read"])){
      $dsn = 'mysql:dbname=gerrizo42_andalusier;host=127.0.0.1';
      $user = 'root';
      $password = '';

      try {
        $conn = new PDO($dsn, $user, $password);
      }

      catch(PDOException $e) {
        echo 'Connection failed:' . $e->getMessage();
      }

      $sql = "SELECT * FROM fakeTable";
      $data = $conn->prepare($sql);
      $data->execute();
      $count = $data->rowCount();

              $listSize = 5;
              $html = "";
              $pagination = "";
              $sql = "SELECT * FROM fakeTable LIMIT 5 OFFSET :offset";
              $data = $conn->prepare($sql);
              $data->bindValue(':offset', (int) ($_SESSION["currentPage"]-1) * 5, PDO::PARAM_INT);
              $data->execute();

              $res = $data->fetchAll(PDO::FETCH_OBJ);


              foreach($res as $row){
                $html.= "
                  <tr>
                    <input type='hidden' class='counted' value=".$count.">
                    <td>".$row->fakeTable_id."</td>
                    <td>".$row->fakeTable_firstname."</td>
                    <td>".$row->fakeTable_lastname."</td>
                  </tr>
                ";

              }
              $pageCount = ceil($count / 5);
              $navigator = "";

              for($i = 1; $i < $pageCount + 1; $i++){
              $navigator .= "<a href='#' onclick='openPage(".$i.")'>".$i."</a>";
              }

              if($count > 5){
                $html.= "<tr class='pagination-indicator'><td>" .$navigator. " <td></tr>";
              }




              echo $html;
        }


      ?>

<?php

  // when a user wants to logout
  function handleLogout(){
    // remove that session >:3
    session_destroy();
  }

  // load account name
  function getAccountName($dbHandler){
    if(valid($_SESSION["loggeduserid"])){
      $sql = "SELECT accounts_name FROM accounts WHERE accounts_id = :id";
      $res = $dbHandler->handleQuery($sql, array(':id' => $_SESSION["loggeduserid"]));
      return $res->accounts_name;
    } else { return "Gebruiker"; }
  }

  function getMenu($dbHandler, $sequelHandler){
    if(valid($_SESSION["loggeduserid"])) {

      $sql = $sequelHandler->generateSequel(
      "SELECT",
      array("pages.pages_id", "pages_name", "pages_parentid", "pages_iscontroller", "pages_url"),
      "acc_ranks",
      array("ranks" =>
              "acc_ranks.ranks_id = ranks.ranks_id",
            "ranks_pages"
                   => "ranks.ranks_id = ranks_pages.ranks_id",
            "pages"
                   =>
                      "ranks_pages.pages_id = pages.pages_id"),
      array('acc_ranks.accounts_id' => 'id')
      );

      $fetchedResults = $dbHandler->handleQuery($sql, array(':id' => $_SESSION["loggeduserid"]), true, PDO::FETCH_OBJ);
      $structure = "";
      $hierarchy = array();
      $indexes = array();
      foreach($fetchedResults as $row){
          if (array_key_exists($row->pages_parentid, $indexes)) {
            for ($i= 0; $i < count($hierarchy); $i++) {
              $check = $hierarchy[$i]['pages_id'];
              if($check == $row->pages_parentid){
                $hierarchy[$i][] = array(
                  "pages_parentid" => $row->pages_parentid,
                  "pages_id" => $row->pages_id,
                  "pages_iscontroller" => $row->pages_iscontroller,
                  "pages_url" => $row->pages_url,
                  "pages_name" => $row->pages_name
                );
              }
            }
          } else {
              $hierarchy[] = array(
                "pages_id" => $row->pages_id,
                "pages_url" => $row->pages_url,
                "pages_iscontroller" => $row->pages_iscontroller,
                "pages_name" => $row->pages_name
              );
              $indexes[$row->pages_id] = "SomeCoolValue, ThisIsJustAPlaceholderAnyway";
          }
      }
      foreach ($hierarchy as $parentKey => $parentValue) {
        if($hierarchy[$parentKey]["pages_iscontroller"] != 0){
          $structure.= "<li id='".strtolower($hierarchy[$parentKey]["pages_name"])."-toggler' onclick='openMenu".$hierarchy[$parentKey]["pages_name"]."()'>
                <img src='img/side-menu/".strtolower($hierarchy[$parentKey]["pages_name"]).".png'>
                <a href='#'>".$hierarchy[$parentKey]["pages_name"]."</a>
                <img id='".strtolower($hierarchy[$parentKey]["pages_name"])."-dropdown-indicator' class='dropdown-indicator' src='img/side-menu/arrow-down.png'>
                </li>";
        } else {
          $structure.= "<li><img src='img/side-menu/".strtolower($hierarchy[$parentKey]["pages_name"]).".png'><a href='".$hierarchy[$parentKey]["pages_url"]."'>".$hierarchy[$parentKey]["pages_name"]."</a></li>";
        }
        $structure.= " <div id='".strtolower($hierarchy[$parentKey]["pages_name"])."-sub-menu' class='sub-menu'>";
        foreach ($hierarchy[$parentKey] as $key => $value) {
          if(is_array($value)){
           $structure.= "<li class='ischild'><a href='".strtolower($value['pages_url'])."'>".$value['pages_name']."</a></li>";
          }
        }
        $structure.= "</div>";
      }

      return $structure;
    } else { $structure.= "Interne fout. Probeer het later opnieuw."; return $structure; exit(); }
  }


?>

<?php
  require_once "../assets/connection.php";
  sleep(5);

  function validateDate($date)
  {
    $d = DateTime::createFromFormat('Y-m-d', $date);
    return $d && $d->format('Y-m-d') === $date;
  }

  if(isset($_POST["object2"])){
    $data = json_decode($_POST["object2"]);

    $name = $data->name;
    $address = $data->address;
    $city = $data->city;
    $tel = $data->tel;
    $email = $data->email;
    $date = $data->date;
    $register_as = $data->register_as;
    $horsename = $data->horsename;
    $activities = $data->activities;
    $introduction = $data->introduction;
    $promoting = $data->promoting;
    $ideas = $data->ideas;

  //Check of een veld leeg is
  foreach($data as $row){
    if(empty($row)){
      echo "veld leeg";
      die();
    }
  }

  // Deze check kijkt of er vreemde tekens in het object staat.
  foreach($data as $key=>$value){
    if(preg_match("/[\'^£$%&*()}{#~?><>,|=¬]/", $value)){
      if($key !== "email"){
        echo "Er zijn vreemde tekens gevonden!";
        die();
      }
    }
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "$email is not a valid email address";
    die();
  }

  if(!validateDate($date)){
    echo "Date is niet valid";
    var_dump($date);
    die();
  }

  $sql = "INSERT INTO register (register_name, register_address, register_city, register_tel, register_email, register_date, register_type, register_horsename, register_activities, register_introduction, register_promoting, register_ideas)
  VALUES (:name, :address, :city, :tel, :email, :date, :register_as, :horsename, :activities, :introduction, :promoting, :ideas)";

  $stmt = $conn->prepare($sql);
  $stmt->execute(array(
    ":name"=>$name,
    ":address"=>$address,
    ":city"=>$city,
    ":tel"=>$tel,
    ":email"=>$email,
    ":date"=>$date,
    ":register_as"=>$register_as,
    ":horsename"=>$horsename,
    ":activities"=>$activities,
    ":introduction"=>$introduction,
    ":promoting"=>$promoting,
    ":ideas"=>$ideas
  ));
}
?>

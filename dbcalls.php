<?php




  class DB_Connect
{
    public function connect()
    {
      $host        = "ec2-54-163-245-44.compute-1.amazonaws.com";
      $port        = "5432";
      $dbname      = "dd962ihu1pjloc";
      $credentialsU = "reqepaqorashjo";
      $credentialsP= "369f9cbc320bfe03435d354ce2327ba6485f3d029255dcd698bf7e7506796093";

      $conn_string = "host=".$host." port=5432 dbname=".$dbname." user=".$credentialsU." password=".$credentialsP."";
      $db = pg_connect($conn_string);

      //$db = pg_connect($conn_string);
      if(!$db){
         echo "Error : Unable to open database\n";
      } else {
         echo "Opened database successfully\n";
      }
      return $db;
    }

}



 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
    $first_name = test_input($_POST["first_name"]); // required
    $last_name = test_input($_POST["last_name"]); // required
    $email = test_input($_POST["email"]); // required
 
   


    $db1 = new DB_Connect();
    $conn = $db1->connect();

    $query = "insert into Users(first_name,last_name,email) values('".$first_name."','".$last_name."','".$email."')";
    $result = pg_query($conn,$query);
    echo "Thank you for signing up!";
    sleep(3);

  
    function goback()
{
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
}
 
goback();
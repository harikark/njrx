<?php
ini_set('display_errors', 10);
ini_set('display_startup_errors', 10);
error_reporting(E_ALL);

$hostname = "mariadb-035.wc1.lan3.stabletransit.com";
$db = "705705_njr_hk";
$username = "705705_njr_hk";
$password = "R+}sxth4]QX]sL5e<&(n";


try {
 $conn = new PDO('mysql:host=mariadb-035.wc1.lan3.stabletransit.com;dbname=705705_njr_hk', '705705_njr_hk', 'R+}sxth4]QX]sL5e<&(n');

    if($conn){
        echo"<h1>Connection Successful</h1>";
    }

    else
    {
        echo "Connection Failed";

    }

//1
$keywords=$_GET['keywords'];
// //2
// echo '<br></br>' . htmlspecialchars($_GET["keywords"]);

$sth=$conn->prepare('SELECT * FROM Awards WHERE First_Name LIKE :keywords OR Last_Name LIKE :keywords OR Year LIKE :keywords OR Award_Type LIKE :keywords OR Email_Address LIKE :keywords OR Code LIKE :keywords OR NRDS_ID LIKE :keywords');

//1
$sth->bindParam(':keywords',$keywords, PDO::PARAM_STR, 20);
$sth->execute();
print("Fetch all remaining rows in the result set:\n");
$results= $sth->fetchAll();
print_r($results);
$howmany=count($results);

$return=array(); 



if($howmany>0){
      foreach ($row = $results) {
            $return[]=aarray('First_Name,')
            $results[] = $row;
    
      }
  }

    header("Access-Control-Allow-Origin: *");//this allows coors
    header('Content-Type: application/json');
    print json_encode($results);
}




}catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
 


?>

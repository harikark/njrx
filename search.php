<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$hostname = "mariadb-035.wc1.lan3.stabletransit.com";
$dbh = "705705_njr_hk";
$user = "705705_njr_hk";
$pass = "R+}sxth4]QX]sL5e<&(n";


try {
 $conn = new PDO('mysql:host=mariadb-035.wc1.lan3.stabletransit.com;dbname=$705705_njr_hk', $user, $pass);

    if($conn){
        echo"<h1>Connection Successful</h1>";
    }

    else
    {
        echo "Connection Failed";

    }

//1
$keywords=$_GET['keywords'];
//2
// echo '<br></br>' . htmlspecialchars($_GET["keywords"]);

$sth=$dbh->prepare($('SELECT First_Name, Last_Name, Year, Award_Type, Email_Address, Code, NRDS_ID
    FROM Awards
    WHERE Awards < :Awards AND keywords = :keywords');


$sth->bindParam(':keywords', $keywords, PDO::PARAM_STR, 20);

print("Fetch all remaining rows in the result set:\n");
$results= $sth->fetchAll();
print_r($result);
$howmany=count($results);

$sth->execute();

if($sth)
{
    if(results->rowCount()>0)
    {
        foreach($results as $row)
        {
             print $row[""] .$row[""] ."<br/>";
         }
          echo $row;
        }
        else
            echo 'No Data Found'
    }
}

 //3
// foreach ($results as $row) {
//     print $row[""] .$row[""] ."<br/>";
// }
// echo '<table><tr><td>'.$row[""].'</td></tr></table>';



catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


// if(isset($_GET['First_Name'])) {
//   $Fname=$_GET['First_Name'];
// }

// else {
//   echo "Data was not set in the form\n";

// }




?>
<?php

$hostname = "mariadb-035.wc1.lan3.stabletransit.com";
$dbh = "705705_njr_hk";
$user = "705705_njr_hk";
$pass = "R+}sxth4]QX]sL5e<&(n";




//     

try {
 $conn = new PDO('mysql:host=mariadb-035.wc1.lan3.stabletransit.com;dbname=$705705_njr_hk', $user, $pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    if($conn){
        echo"<h1>Connection Successful</h1>";
    }

    else
    {
        echo "Connection Failed";
    }
$keywords='';
echo 'Hello ' . htmlspecialchars($_GET["keywords"]) . '!';

$sth=$dbh->prepare($('SELECT First_Name, Last_Name, Year, Award_Type, Email_Address, Code, NRDS_ID
    FROM Awards
    WHERE Awards < :Awards AND keywords = :keywords');


$sth->bindParam(':keywords', $keywords, PDO::PARAM_STR, 20);

print("Fetch all remaining rows in the result set:\n");
$results= $sth->fetchAll();
print_r($result);
$howmany=count($results);

$sth->execute();



//3
foreach ($results as $row) {
    print $row[""] .$row[""] ."<br/>";
}
echo '<table><tr><td>'.$row['lastLogin'].'</td></tr></table>';



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
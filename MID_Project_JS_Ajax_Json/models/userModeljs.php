<?php

$id = $_GET['id'];
$func= $_GET['func'];

if ($func== "deactive") {
    deactiveUser($id);
}

if ($func == "active") {
    activeUser($id);
}
if($func == "table")
{
    getAllUser();
}

if($func == "delete")
{
    deleteUser($id);
}

function getConnection()
{
    $host = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'wtproject';
    $con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
    return $con;
}


function deactiveUser($id)
{
    $con = getConnection();
    $sql = "update users set status='Deactive' where id='{$id}'";

    if (mysqli_query($con, $sql)) {
        echo "Deactive";
    } 
}

function activeUser($id)
{
    $con = getConnection();
    $sql = "update users set status='Active' where id='{$id}'";

    if (mysqli_query($con, $sql)) {
        echo "Active";
    } 
}

function getAllUser()
{
    $con = getConnection();
    $sql = "select id, name, username, email, mobile, dob, gender, status from users";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result)) {
        $resultPrint=$result;
        echo "<table border='1'>
        <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>USERNAME</th>
        <th>EMAIL</th>
        <th>MOBILE</th>
        <th>DOB</th>
        <th>GENDER</th>
        <th>STATUS</th>
        <th>ACTION</th>
         </tr>";
        
           while ($row = mysqli_fetch_assoc($resultPrint)) {
            echo "<tr>";
           
            foreach($row as $i => $val ){
                
               echo "<td>".$val."</td>";
               
            }    
                echo "<td>";
            
                 echo"<button><a href='editUsers.php?id=".$row['id']."'> EDIT </a></button>";
                   echo "|";
                    echo "<button onclick=deleteUser(".$row['id'].")> DELETE </button>";
                   echo "|";

                    if ($row['status']=='Active')
                   
                   
                    echo "<button onclick=deactive(".$row['id'].")> Deactivate </button>";
                    
                    if ($row['status']=='Deactive')
                    
                    echo "<button onclick=active(".$row['id'].")> Activate </button>";
                    
            
               echo"</td>";
            
            echo "</tr>";
           
            
        }
        echo "</table>";
 
    }
    else {
        return null;
    }
}

function deleteUser($id)
{
    $con = getConnection();
    $sql = "delete from users where id='{$id}'";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}


?>

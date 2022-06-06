
<?php

$con=mysqli_connect("localhost","root","","employee");
// Checking Whether the database is Connected or Not //
if($con!=null)
{
        echo"Sucessfully Connected";
}

// Inserting Employee Details into the Database  //
$n=$_POST['name'];
$id=$_POST['id'];
$sal=$_POST['sal'];
$insert="insert into emp values('$n','$id','$sal')";
if(isset($_POST['in']))
{
    $res=mysqli_query($con,$insert);
    echo"Inserted Successfully ";
}

// Display the records From the Database //
$select="select NAME,ID,SALARY from emp";
if(isset($_POST['v']))
{

    $vie=mysqli_query($con,$select);
    $count=mysqli_num_rows($vie);
    if($count>0)
    {
        echo"<table border=5 align=center> ";
        echo"<tr><th>Employee Name </th><th>Employee Id</th><th>Employee Salary</th></tr>";

        while($r=mysqli_fetch_assoc($vie))
        {
        echo"<tr>";
        echo"<td>".$r['NAME']."</td>";
        echo"<td>".$r['ID']."</td>";
        echo"<td>".$r['SALARY']."</td>";
        echo"</tr>";
       
        }
        echo"</table>";
    }
    else{
            echo"No Record Found ";
        }
}

// Update record //

if(isset($_POST['up']))
{
    $na=$_POST['name'];
$i=$_POST['id'];
$sa=$_POST['sal'];
$update="update emp set NAME='$na',SALARY='$sa' where ID='$i'";
    $connect=mysqli_query($con,$update);
    
    if($connect)
    {
    echo"<h1>Record Updated Successfully</h1>";
    }else{
        echo"No records are Updated";
    }
    
}
// Deleting The record //
if(isset($_POST['del']))
{
    $na=$_POST['name'];
    $i=$_POST['id'];
    $sa=$_POST['sal'];
    $delete="delete from emp where ID='$i' AND NAME='$na'";
    $connect=mysqli_query($con,$delete);
    if($connect)
    {
    echo"<h1>Record Deleted Successfully</h1>";
    }else{
        echo"<h1>No records are deleted</h1>";
    }
}

?>
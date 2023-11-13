<?php
    require_once '../Config/config.php' ;
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $EmployeeId = $_POST["EmployeeId"];
        $sql2="SELECT Job_Id FROM Employee WHERE Employee_Id='$EmployeeId'";
        $result2 = $connection->query($sql2);
        $row2 = $result2->fetch_assoc();
        $jobId = $row2['Job_Id'];

        if($jobId == 41){
            $url = "../Manager/Manager.php?variableToPass=" . urlencode($EmployeeId);
            header("Location: $url");
            exit;
        }
        elseif($jobId == 1 || $jobId == 2 || $jobId == 3 || $jobId == 4 || $jobId == 5){
            $url = "../HrStaff/Hr Staff.php?variableToPass=" . urlencode($EmployeeId);
            header("Location: $url");
            exit;
        }
        else{
            $url = "../Employee/Employee.php?variableToPass=" . urlencode($EmployeeId);
            header("Location: $url");
            exit;
        }
    }


<?php
    require_once '../Config/config.php' ;

    if (isset($_GET['variableToPass'])) {
        $receivedVariable = $_GET['variableToPass'];
        $EmployeeId = $receivedVariable;
        $sql1="SELECT * FROM employee WHERE Employee_Id='$EmployeeId' ";
        $result1= $connection->query($sql1);
        if($result1->num_rows >0){
            $row = $result1->fetch_assoc();
            $Name = $row['Name'];
            $DB = $row['Date_of_Birth'];
            $Gender = $row['Gender'];
            $Address = $row['Address'];
            $Contact = $row['Contact'];
            $Email = $row['Email'];
            $JD = $row['Joining_Date'];
            $Department = $row['Department'];
            $Job_Id =$row['Job_Id'];
        }
    }
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $EmployeeId = $_POST["EmployeeId"];
        $sql1="SELECT * FROM employee WHERE Employee_Id='$EmployeeId' ";
        $result1= $connection->query($sql1);
        if($result1->num_rows >0){
            $row = $result1->fetch_assoc();
            $Name = $row['Name'];
            $DB = $row['Date_of_Birth'];
            $Gender = $row['Gender'];
            $Address = $row['Address'];
            $Contact = $row['Contact'];
            $Email = $row['Email'];
            $JD = $row['Joining_Date'];
            $Department = $row['Department'];
            $Job_Id =$row['Job_Id'];
        }
    }
    
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About page</title>

    <style>
        body {
            background-image: url('../Image/04.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            margin: 0;
            padding: 0;
            height: 100vh;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="About.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="form-container">
        <div class="col-50">
        <div class="header">
            <H2> User Details </H2>
        </div>
            <label for="id"><i class="fa fa-user"></i> Employee Id</label>
            <input type="text" id="id" name="EmployeeID" value="<?php echo $EmployeeId; ?>" readonly><br>

            <label for="fname"><i class="fa fa-user"></i> Name</label>
            <input type="text" id="fname" name="fname" value="<?php echo $Name; ?>" readonly><br>
            
            <label for="dob"><i class="fa fa-calendar"></i> Date of Birth</label>
            <input type="text" id="dob" name="dob" value="<?php echo $DB; ?>" readonly><br>
            
            <label for="gender"><i class="fa fa-venus-mars"></i> Gender</label>
            <input type="text" id="gender" name="gender" value="<?php echo ($Gender == 'M') ? 'Male' : 'Female'; ?>" readonly><br>
            
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="adr" value="<?php echo $Address; ?>" readonly><br>
            
            <label for="con"><i class="fa fa-phone"></i> Contact No</label>
            <input type="text" id="con" name="con" value="<?php echo $Contact; ?>" readonly><br>
            
            <label for="email"><i class="fa fa-envelope"></i> Email Address</label>
            <input type="text" id="email" name="email" value="<?php echo $Email; ?>" readonly><br>
            
            <label for="jd"><i class="fa fa-calendar"></i> Joined Date</label>
            <input type="text" id="jd" name="jd" value="<?php echo $JD; ?>" readonly><br>
            
            <label for="dept"><i class="fa fa-briefcase"></i> Department</label>
            <input type="text" id="dept" name="dept" value="<?php echo $Department; ?>" readonly><br>
            
            <label for="job_id"><i class="fa fa-institution"></i> Job Id</label>
            <input type="text" id="job_id" name="job_id" value="<?php echo $Job_Id; ?>" readonly><br>
        </div>
    </div>
    </div>
    </div>
        <div class="button">
            <form action="../Edit User Details/Edit User Detail.php" method="post">
                <input type="hidden" name="EmployeeId" value=<?php echo $EmployeeId ?> >
                <button type="submit" class="cancel-btn" id="cancelButton">Edit Details</button>
            </form>
        </div>
        <div class="button">
            <form action="About Back.php" method="post">
                <input type="hidden" name="EmployeeId" value="<?php echo $EmployeeId; ?>">
                <button type="submit" class="cancel-btn" id="cancelButton">Back</button>
        </form>
        </div>
</html>
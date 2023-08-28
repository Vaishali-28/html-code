<?php
 $Username=$_POST['Username'];
 $Password=$_POST['Password'];

  //database connection here
$con=new mysqli("localhost","root","","dashboard");
if($con->connect_error){
    die("Failed to connect:".$con->connect_error);
}
else
{
    $stmt=$con->prepare("select * from registration where Username = ?");
    $stmt->bind_param("s",$Username);
    $stmt->execute();
    $stmt_result=$stmt ->get_result();
    if($stmt_result->num_rows>0)
    {
        $data =$stmt_result->fetch_assoc();
        if($data['Password']===$Password)
        {
            $flag=1;
            http_response_code(301);
            exit();
        }
        else{
            // echo '<script type="text/JavaScript"';
            //    echo 'alert("sample")';
               //echo '/script>';
               http_response_code(401);
                header("Content-Type: application/json");
                echo "Login Failed";
                $data = array("message" => "Unauthorized request");
                echo json_encode($data);
    
            }
    }
    
}

?>
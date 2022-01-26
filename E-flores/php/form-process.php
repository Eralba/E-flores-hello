<?php
include 'DataBase.php';
$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// Subject
if (empty($_POST["subject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $subject = $_POST["subject"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}









$sql = "INSERT INTO buyer (name, email, subject,message)
VALUES ('$name', '$email', '$subject','$message')";

if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
echo "success";
} else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
  echo "Error: " . "data not sent to database" . "<br>" . $conn->error;
}
















// echo "success";























// echo $name ;
// echo "<br/>";
// echo $email ;
// echo "<br/>";
// echo $subject ;
// echo "<br/>";
// echo $message ;
// echo "<br/>";










// if ($success && $errorMSG == ""){
//    echo "success";
// }else{
//     if($errorMSG == ""){
//         echo "Something went wrong :(";
//     } else {
//         echo $errorMSG;
//     }
// }








// $EmailTo = "armanmia7@gmail.com";
// $Subject = "New Message Received";

// // prepare email body text
// $Body = "";
// $Body .= "Name: ";
// $Body .= $name;
// $Body .= "\n";
// $Body .= "Email: ";
// $Body .= $email;
// $Body .= "\n";
// $Body .= "guest: ";
// $Body .= $guest;
// $Body .= "\n";
// $Body .= "event: ";
// $Body .= $event;
// $Body .= "\n";
// $Body .= "Message: ";
// $Body .= $message;
// $Body .= "\n";

// // send email
// $success = mail($EmailTo, $Subject, $Body, "From:".$email);

// // redirect to success page
// if ($success && $errorMSG == ""){
//    echo "success";
// }else{
//     if($errorMSG == ""){
//         echo "Something went wrong :(";
//     } else {
//         echo $errorMSG;
//     }
// }

?>
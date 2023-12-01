<!-- <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Validate title
//     $title = $_POST["textFieldTitle"];
//     if (empty($title) || !preg_match("/^[a-zA-Z0-9\s]+$/", $title)) {
//         die("Invalid title. Please provide a valid title.");
//     }

//     // Validate email
//     $email = $_POST["textFiledYourEmail"];
//     if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         die("Invalid email format. Please provide a valid email address.");
//     }

//     // Process the message (trimming extra spaces)
//     $message = isset($_POST["textFieldMessage"]) ? trim($_POST["textFieldMessage"]) : "";

//     // Your email sending logic goes here

//     // Display success message
//     echo "Your email has been sent.";
// } else {
//     // If the form is not submitted, display the form
// ?>
// <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
//    <table cellpadding="5px" align="center">
//       <tr>
//          <td><label for="textFieldTitle">Title: </label></td>
//          <td><input type="text" name="textFieldTitle" id="textFieldTitle"></td>
//       </tr>
//       <tr>
//          <td><label for="textFiledYourEmail">Your email: </label></td>
//          <td><input type="text" name="textFiledYourEmail" id="textFiledYourEmail"></td>
//       </tr>
//       <tr>
//          <td colspan="2">
//             <label for="textFieldMessage">Message:</label><br>
//             <textarea name="textFieldMessage" id="textFieldMessage" cols="27" rows="6"></textarea>
//          </td>
//       </tr>
//       <tr>
//          <td colspan="2">
//             <input type="submit" value="Send" name="buttonSubmit"> &nbsp;&nbsp;
//             <input type="reset" value="Reset" name="buttonReset">
//          </td>
//       </tr>
//    </table>
// </form>
// <?php
// }
// ?> -->

<link rel="stylesheet" href="master.css">
<?php
$errors = "";
$success = "";
$title = "";
$email = "";

If(isset($_POST['buttonSubmit'])){
    $title=trim($_POST['textFieldTitle']);
    $email=trim($_POST['textFiledYourEmail']);
    $message=trim($_POST['textFieldMessage']);

    if($title=="")
    {
        $errors .= "Title field is required!!! <br> ";
    }
    
    if($email==""){
        $errors .= "Your email is required!!! <br>";
    }
    else{
        $emailPattern = "/^[a-zA-Z0-9_]+[a-zA-Z0-9_\.\-]*@[a-zA-Z0-9_]+[a-zA-Z0-9_\.\-]{2,}$/ui";
        if(!preg_match($emailPattern,$email)){
            $errors .= "Invalid your email fomatting!!! <br>";
        }
    }
    if($errors== ""){
        $success = "Your message has been sent!!!"
        }
      //  $title = "";
       // $email = "";
       // $message = "";

    
}
?>

<form action="" method="post">
    <table cellpadding="5px" align="center">
        <tr>
            <td><label for="textFieldTitle">Title: </label></td>
            <td><input type="text" name="textFieldTitle" id="textFieldTitle" value="<?php echo htmlspecialchars($title); ?>" required>*</td>
            <td><span class="error"><?php echo $titleErr; ?></span></td>
        </tr>
        <tr>
            <td><label for="textFiledYourEmail">Your email: </label></td>
            <td><input type="text" name="textFiledYourEmail" id="textFiledYourEmail" value="<?php echo htmlspecialchars($email); ?>" required>*</td>
            <td><span class="error"><?php echo $emailErr; ?></span></td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="textFieldMessage">Message:</label><br>
                <textarea name="textFieldMessage" id="textFieldMessage" cols="27" rows="6"><?php echo htmlspecialchars($message); ?></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Send" name="buttonSubmit"> &nbsp;&nbsp;
                <input type="reset" value="Reset" name="buttonReset">
            </td>
        </tr>
    </table>
    </fieldset>
</form>
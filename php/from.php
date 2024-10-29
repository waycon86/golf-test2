<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $teamName = $_POST['team_name'];
    $shirtSize = $_POST['shirt_size'];
    $comments = $_POST['comments'];

    // Set up email parameters
    $to = "conwaytest77@gmail.com";  // Destination email address
    $subject = "New Registration: Classic on the Dan Charity Event";
    $message = "
        New registration details:
        
        Name: $firstName $lastName
        Email: $email
        Phone: $phone
        Team Name: $teamName
        Shirt Size: $shirtSize
        Comments: $comments
    ";
    $headers = "From: no-reply@yourwebsite.com";  // Update with your actual domain or website email

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "<h1>Thank you, $firstName, for registering!</h1>";
        echo "<p>Your details have been sent to our team, and we will reach out if any further information is needed.</p>";
    } else {
        echo "<p>Sorry, there was an issue with your registration. Please try again later.</p>";
    }
}
?>


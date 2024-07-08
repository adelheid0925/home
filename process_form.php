
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['preferred_name']);
    $email = htmlspecialchars($_POST['email']);
    $session = htmlspecialchars($_POST['session']);

    $to = 'heidi.tseng@colostate.edu';
    $subject = 'New Form Submission';
    $message = "Preferred Name: $name\nEmail: $email\nSession: $session";
    $headers = "From: adelheid0925.github.io/home"; // Change this to your domain

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Error sending email.";
    }
}

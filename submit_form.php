<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $guests = $_POST['guests'];
    $diet = $_POST['diet'];
    $comments = $_POST['comments'];

    $to = "emailul_mirilor@example.com";  // Înlocuiește cu email-ul mirilor
    $subject = "Confirmare prezență nuntă de la $name";
    $message = "
    Confirmare prezență:
    Nume: $name
    Telefon: $phone
    Număr de persoane: $guests
    Preferințe alimentare: $diet
    Alte mențiuni: $comments
    ";

    $headers = "From: siteul.tau@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Vă mulțumim pentru confirmare! Răspunsul dumneavoastră a fost trimis cu succes.";
    } else {
        echo "Ne pare rău, a apărut o eroare. Vă rugăm să încercați din nou.";
    }
}
?>

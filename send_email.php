<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $telegram = $_POST["telegram"];
  $mail = $_POST["mail"];
  $link = $_POST["link"];
  $project_description = $_POST["project_description"];
  
  $to = "wallet@redcat.click";
  $subject = "Become partner";
  
  // Змінна для зберігання тексту листа
  $body = "Telegram: $telegram\nEmail: $mail\nLink:\n$link\nProject description: $project_description";
  
  // Встановлюємо заголовки листа
  $headers = "From: sender@example.com\r\n";
  $headers .= "Reply-To: $email\r\n";
  
  // Відправляємо лист
  if (mail($to, $subject, $body, $headers)) {
    http_response_code(200); // Встановлюємо статус 200 OK
    echo "The letter was sent successfully!";
    header('Location: index.html');
  } else {
    http_response_code(500); // Встановлюємо статус 500 Internal Server Error
    echo "There was an error sending the email. Please try again later.";
    header('Location: index.html');
  }
}
?>

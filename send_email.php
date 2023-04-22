<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  $to = "wallet@redcat.click";
  $subject = "Повідомлення з форми зворотнього зв'язку";
  
  // Змінна для зберігання тексту листа
  $body = "Ім'я: $name\nEmail: $email\nПовідомлення:\n$message";
  
  // Встановлюємо заголовки листа
  $headers = "From: sender@example.com\r\n";
  $headers .= "Reply-To: $email\r\n";
  
  // Відправляємо лист
  if (mail($to, $subject, $body, $headers)) {
    http_response_code(200); // Встановлюємо статус 200 OK
    echo "The letter was sent successfully!";
  } else {
    http_response_code(500); // Встановлюємо статус 500 Internal Server Error
    echo "There was an error sending the email. Please try again later.";
  }
}
?>

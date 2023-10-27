<?php
session_start();
require('../model/students_db.php');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UVU Passport Messaging</title>
  <style>
      body {
        margin: 0;
        font-family: Arial, sans-serif;
        align-items: center;
        justify-content: center;
      }
      
      h1 {
        text-align: center;
        margin-top: 5px;
      }
      
      form {
        margin-top: 10px;
      }
      
      label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
      }
      
      input[type="text"],
      input[type="email"],
      textarea {
        width: 700px;
        padding: 10px;
        margin-bottom: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: content-box;
        font-size: 16px;
      }

      input[type="message"],
      textarea {
        width: 900px;
        padding: 5px;
        margin-bottom: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: content-box;
        font-size: 16px;
      }
      
      input[type="submit"] {
        background-color:#ccc;
        color: black;
        padding: 10px 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
      }
      
      input[type="submit"]:hover {
        background-color: #ccc;
        color: black;
      }
    </style>
</head>
    <body>
        <img class="center" alt="UVU Logo" src="/ClinicalPassport/images/UVU_logo.png" />
  <h1>UVU Passport Message Submission</h1>
  <hr><br>
  <form id="messageForm">
    <label for="UVUID">UVU ID:</label>
    <input type="text" id="name" name="name" required>
    <br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
    <br><br>
    <input type="submit" value="Submit">
  </form>
</body>
        <script>
          // Handle form submission
          document.getElementById("messageForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the form from submitting normally
            
            // Get form values
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;
            
            // Perform validation if needed
            
            // Send the message to the server (you'll need to implement the server-side processing)
            sendMessage(name, email, message);
            
            // Reset the form
            document.getElementById("messageForm").reset();
          });
          
          // Function to send the message to the server
          function sendMessage(name, email, message) {
            // Perform an AJAX request or use a fetch API to send the message data to the server
            
            // Example using fetch API:
            fetch("your-server-url", {
              method: "POST",
              headers: {
                "Content-Type": "application/json"
              },
              body: JSON.stringify({ name: name, email: email, message: message })
            })
            .then(function(response) {
              // Handle the response from the server (e.g., display a success message)
            })
            .catch(function(error) {
              // Handle any error that occurs during the request
            });
          }
        </script>
  </body>
<html>
<br><br>
<?php include '../view/footer.php'; ?>
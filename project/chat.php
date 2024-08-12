<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Page</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<div id="chatBox" style="height: 300px; overflow-y: scroll; border: 1px solid #ccc;"></div>

<form id="messageForm">
    <label for="message">Message:</label>
    <input type="text" id="message" placeholder="Type your message">
    <button type="submit">Send</button>
</form>

<script>
    $(document).ready(function () {
        $("#messageForm").submit(function (event) {
            event.preventDefault();

            // Get the message from the input field
            var message = $("#message").val();

            // Check if the message is not empty
            if (message.trim() !== "") {
                // Append the message to the chat box
                $("#chatBox").append("<p>You: " + message + "</p>");

                // Clear the input field
                $("#message").val("");

                // Scroll to the bottom of the chat box
                $("#chatBox").scrollTop($("#chatBox")[0].scrollHeight);
            }
        });
    });
</script>

</body>
</html>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["message"])) {
        $message = htmlspecialchars($_POST["message"]);

        // You can save the message to a database or file here
        // For simplicity, let's store messages in the session
        if (!isset($_SESSION["chat"])) {
            $_SESSION["chat"] = array();
        }

        $_SESSION["chat"][] = "User: " . $message;

        // Send a response (optional)
        echo json_encode(["status" => "success"]);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submitted</title>
</head>
<body>
    <h1>Contact Form Submitted</h1>
    <p>Name: {{ $contact->name }}</p>
    <p>Email: {{ $contact->email }}</p>
    <p>Message: {{ $contact->message }}</p>
</body>
</html>

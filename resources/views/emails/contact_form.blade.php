<!-- resources/views/emails/contact_form.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h1>New Contact Form Submission</h1>
    <p><strong>First Name:</strong> {{ $data['first_name'] }}</p>
    <p><strong>Last Name:</strong> {{ $data['last_name'] }}</p>
    <p><strong>Address:</strong> {{ $data['address'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>
</body>
</html>
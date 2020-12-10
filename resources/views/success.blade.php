<!DOCTYPE html>
<a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>
<!-- CSS Stylesheet -->
<link rel="stylesheet" href="{{ URL::asset('css/stylesheet.css') }}">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<body class="body3">
    <h1>Success! Copy of notification sent to admin below:</h1>

    <h2>Hello Admin,</h2>
    You received an email from : {{ $name }}
    Here are the details:
    <br>Name:</br> {{ $name }}
    <br>Email:</br> {{ $email }}
    <br>Phone Number:</br> {{ $phone_number }}
    <br>Subject:</br> {{ $subject }}
    <br>Message:</br> {{ $user_message }}

</body>

</html>
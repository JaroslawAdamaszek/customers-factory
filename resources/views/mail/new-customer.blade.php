<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8"><title>New customer!</title>
</head>
<body>

Hello admin, informs about a new user on your system. His details:

<p>Name: {{$customer->name}}</p>
<p>Company: {{$customer->company_name}}</p>
<p>Address: {{$customer->address}}</p>

<p></p>
</body>
</html>

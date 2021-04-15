<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>admin</title>
</head>
<body>
    <table class="table">
        <thead class="table-dark">
            <th>First name</th>
            <th>Second name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Question 1</th>
            <th>Question 2</th>
            <th>Question 3</th>
            <th>Question 4</th>
            <th>view</th>
            <th>delete</th>
        </thead>
    @foreach ($exam as $key => $exam)
        <tbody>
            <th>{{ $exam->Firstname }}</th>
            <th>{{ $exam->Secondname }}</th>
            <th>{{ $exam->Email }}</th>
            <th>{{ $exam->password }}</th>
            <th>{{ $exam->question1 }}</th>
            <th>{{ $exam->question2 }}</th>
            <th>{{ $exam->question3 }}</th>
            <th>{{ $exam->question4 }}</th>
            <th><a href="/exam/{{ $exam->id }}" target="_blank"><button class="btn btn-info">view</button></a></th>
            <th><a href="/delete/{{ $exam->id }}"><button class="btn btn-danger">delete</button></a></th>
        </tbody>
    @endforeach
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
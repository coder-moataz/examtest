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
    <div class="mb-50" style="padding: 60px">
    <h1><strong> First name: </strong>{{ $exam->Firstname }}</h1>
    <h1><strong> second name : </strong>{{ $exam->Secondname }}</h1>
    <h1><strong> Email :  </strong>{{ $exam->Email }}</h1>
    <h1><strong> Password : </strong>{{ $exam->password }}</h1>
    <h3><strong> question Answers: </strong> </h3>
    <ul>
        
        <li><strong> 1: </strong>{{ $exam->question1 }}</li>
        <li><strong> 2: </strong>{{ $exam->question2 }}</li>
        <li><strong> 3: </strong>{{ $exam->question3 }}</li>
        <li><strong> 4: </strong>{{ $exam->question4 }}</li>
    </ul>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
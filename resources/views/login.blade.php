<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    
    <style>
        *{
            padding: 0;
            margin: 0;
            object-fit: cover
        }
        main{
            height: 100vh;
            background-image: url('/assets/images/mountain.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <main class="p-5 d-flex flex-column">
        <ul class="d-flex justify-content-around fs-1 list-unstyled">
            <li><a href="/" class="text-secondary text-decoration-none">Home</a></li>
            <li><a href="/business" class="text-secondary text-decoration-none">Business</a></li>
            <li><a href="/contacts" class="text-secondary text-decoration-none">Contacts</a></li>
            <li><a href="/about" class="text-secondary text-decoration-none">About</a></li>
            <li><a href="/login" class="text-secondary text-decoration-none">Login</a></li>
        </ul>
        <div class="hero-section flex-grow-1 d-flex align-items-center justify-content-center">
            <h1>LOGIN</h1>
        </div>
    </main>
</body>
</html>
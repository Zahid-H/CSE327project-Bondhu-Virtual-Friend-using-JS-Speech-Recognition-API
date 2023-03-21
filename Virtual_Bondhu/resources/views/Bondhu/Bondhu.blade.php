<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bondhu - Virtual Assistant</title>

    <!---- CSS Linkage ------>
    <link rel="stylesheet" href="{{ asset('assets/css/bondhu.css') }}">
    

    <!---- Font Awesome Cdn Linkage ------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <section class="main">
        <div class="image-container">
            <div class="image">
                <img src="{{ asset('assets/images/gif.gif') }}" alt="image">
            </div>
            <h1>বন্ধু - ভার্চুয়াল সহকারী</h1>
            <p>আমি আপনার ভার্চুয়াল বন্ধু</p>
        </div>
        <div class="input">
            <button class="talk"><i class="fas fa-microphone-alt"></i></button>
            <h1 class="content"> Click here to speak</h1>
        </div>
    </section>

    <!------- Js Linkage --------->
    <script src="{{ asset('assets/js/bondhu.js') }}"></script>
</body>

</html>
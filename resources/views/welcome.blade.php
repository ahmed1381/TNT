<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>

<div class="bg-black h-[20rem] rounded-b-[8rem]">
    <div>
        <img class="w-[7rem] h-[7rem] m-auto relative top-[2rem]" src="{{ asset('image/cropped_image.png') }}"
             alt="Ipersona-Logo">

        <div class="bg-teal-800 w-[10rem] h-[10rem] rounded-full relative top-[5rem] opacity-45">

        </div>

    </div>
</div>

<div class="bg-teal-800 h-[30rem] w-[50rem] mt-12 m-auto rounded-xl">
    <h3 class="text-4xl text-white font-black text-center pt-5">
        To order
    </h3>
</div>

</body>
</html>

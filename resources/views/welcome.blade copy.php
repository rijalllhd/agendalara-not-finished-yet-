<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Of Skiel</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container bg-cover min-h-screen w-full flex justify-center items-center" style="background-image: url('{{ asset('images/tes.jpeg') }}');">

        <div class="grid place-items-center m-40 bg-white rounded-xl bg-opacity-40 backdrop-filter backdrop-blur-lg w-1/2 p-5 mx-[26rem]">
            <span class="text-gray-950 text-lg font-semibold">
                SELAMAT DATANG!
            </span>
            <span class="text-gray-900 text-sm font-light">
                Kemudahan pengisian agenda beserta presensi dalam satu tempat
            </span>
            <hr class="w-3/4 my-4 bg-gray-300">
            <span class="text-gray-900 text-md font-normal">
                Anda akan masuk dengan akun sebagai?
            </span>
            <br>
            <div class="grid grid-cols-2 gap-4">
                <a href="{{ url('/loginadmin') }}" class="bg-gray-800 text-gray-100 rounded-md px-8 py-2 shadow-md hover:bg-gray-900">
                    Admin
                </a>
                <a href="{{ url('/loginguru') }}" class="bg-gray-800 text-gray-100 rounded-md px-8 py-2 shadow-md hover:bg-gray-900">
                    Guru
                </a>
            </div>
        </div>
    </div>
</body>
</html>

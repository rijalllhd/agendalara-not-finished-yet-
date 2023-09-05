<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login Admin</title>
</head>
<body>
    <div class="container bg-cover min-h-screen w-full flex justify-center items-center"
        style="background-image: url('{{ asset('images/tes.jpeg') }}');">
        <div class="bg-white rounded-xl bg-opacity-50 backdrop-filter backdrop-blur-lg w-1/2 p-5 mx-[26rem]">
            <span class="text-gray-950 text-xl font-semibold flex justify-center items-center">
                LOGIN ADMIN
            </span>
            <br>
            <div class="grid place-items-center">
                <form action="">
                    <label for="" class="text-gray-900">Username</label>
                    <input type="text" name="" id=""
                        class=" form-input mt-1 block border-2 rounded-md pr-20 focus:ring-2 focus:ring-gray-800 focus:border-0 p-2"
                        placeholder="username">
                    <hr class="h-0 border-0 my-2 ">
                    <label for="" class="text-gray-900">Password</label>
                    <input type="password" name="" id=""
                        class="form-input mt-1 block border-2 rounded-md pr-20 focus:ring-2 focus:ring-gray-800 focus:border-0 p-2"
                        placeholder="********">
                    <br>
                    <a href="{{ url('/dashboard') }}"
                        class="flex justify-center items-center bg-gray-900 hover:bg-gray-950 shadow-md text-white rounded-md px-4 py-2 font-medium">LOGIN</a>
                </form>
                <br>
                <p class="text-sm">Belum memiliki akun? <a href="{{ url('/registeradmin') }}"
                        class="hover:text-blue-600 hover:text-md hover:underline">Register</a></p>
                <p class="text-sm">atau</p>
                <p class="text-sm">Kembali ke <a href="{{ url('/') }}"
                        class="hover:text-blue-600 hover:text-md hover:underline">Halaman Sebelumnya</a></p>
            </div>
        </div>
    </div>
</body>
</html>

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
    <!-- navbar -->
    <div class="flex w-full bg-gray-900">
        <nav class="h-12 p-3">
            <div class="items-center justify-between shadow-sm flex">
                <p class="font-semibold text-lg m ml-16 text-blue-50 uppercase">Agenda Of Skiel </p>
            </div>
        </nav>
    </div>

  <div class="flex h-screen bg-gray-200">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-50 text-w p-4 shadow xl:w-72">
      <div class="flex items-center mb-4">
        <!-- Profile-->
        <img src="profile-image.jpg" alt="Profile" class="w-12 h-12 rounded-full mr-3">
        <div>
          <!-- user & role -->
          <p class="text-lg font-semibold">Nama Guru</p>
          <p class="text-xs">Guru SMKN 1 Gunung Putri</p>
        </div>
      </div>
      <hr>
      <br>
      <nav>
        <!-- navbar -->
        <ul class="space-y-2 text-sm">
          <li>
            <p class=" font-light">Menu Utama</p>
          </li>
          <li>
            <a href="{{ url('/dashboard') }}" class="flex items-center rounded-md hover:bg-gray-600 hover:text-white hover:font-medium py-2 px-2">
              <img src="" alt="#">
              Dashboard
            </a>
          </li>
          <li>
            <a href="{{ url('/agenda') }}" class="flex items-center rounded-md hover:bg-gray-600 hover:text-white hover:font-medium py-2 px-2">
              <img src="" alt="#">
              Agenda
            </a>
          </li>
          <li>
            <a href="{{ url('/jadwal') }}" class="flex items-center rounded-md hover:bg-gray-600 hover:text-white hover:font-medium py-2 px-2">
              <img src="" alt="#">
              Jadwal Pelajaran
            </a>
          </li>
          <br>
          <hr>

          <li>
            <p class="text-sm font-light">Basis Data</p>
          </li>
          <li>
            <a href="{{ url('/dataguru') }}" class="flex items-center rounded-md hover:bg-gray-600 hover:text-white hover:font-medium py-2 px-2">
              <img src="" alt="#">
              Data Guru
            </a>
          </li>
          <li>
            <a href="{{ url('/mapel') }}" class="flex items-center rounded-md hover:bg-gray-600 hover:text-white hover:font-medium py-2 px-2">
              <img src="" alt="#">
              Mata Pelajaran
            </a>
          </li>
          <li>
            <a href="{{ url('/datasiswa') }}" class="flex items-center rounded-md hover:bg-gray-600 hover:text-white hover:font-medium py-2 px-2">
              <img src="" alt="#">
              Data Siswa
            </a>
          </li>
          <li>
            <a href="{{ url('/buku-induk') }}" class="flex items-center rounded-md hover:bg-gray-600 hover:text-white hover:font-medium py-2 px-2">
              <img src="" alt="#">
              Buku Induk
            </a>
          </li>
          <li>
            <a href="{{ url('/kelas-jurusan') }}" class="flex items-center rounded-md hover:bg-gray-600 hover:text-white hover:font-medium py-2 px-2">
              <img src="" alt="#">
              Kelas & Jurusan
            </a>
          </li>
          <br>
          <hr>
          <li>
            <p class="text-sm font-light">Menu Lainnya</p>
          </li>
          <li>
          <li>
            <a id="logoutModalButton" href="#" class="flex items-center rounded-md hover:bg-red-700 hover:text-white hover:font-medium py-2 px-2">
              <img src="" alt="#">
              Keluar
            </a>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- content -->
    @yield('content-guru')
    <!-- content ends -->

    <!-- Logout Modal -->
    <div id="logoutModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="mb-4">Apakah Anda yakin ingin keluar dari akun ini?</p>
        <div class="flex justify-center">
            <button id="cancelLogout"
            class="mr-2 px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-500 hover:text-gray-100">Batal</button>
            <button id="confirmLogout"
            class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700 hover:text-gray-100"><a id="logoutModalButton" href="{{ route('guru.logout') }}">Keluar</a></button>
        </div>
        </div>
    </div>

  <!-- JavaScript -->
  <script>
    const logoutButton = document.querySelector('#logoutModalButton');
    const logoutModal = document.querySelector('#logoutModal');
    const cancelLogoutButton = document.querySelector('#cancelLogout');
    const confirmLogoutButton = document.querySelector('#confirmLogout');

    logoutButton.addEventListener('click', () => {
      logoutModal.classList.remove('hidden');
    });

    cancelLogoutButton.addEventListener('click', () => {
      logoutModal.classList.add('hidden');
    });

    confirmLogoutButton.addEventListener('click', () => {
      window.location.href = '{{ url('/') }}';
      //   location.reload();
    });

      // Get references to the dropdown buttons and dropdown menus
    const actionsDropdownButton = document.getElementById("actionsDropdownButton");
    const actionsDropdown = document.getElementById("actionsDropdown");

    const filterDropdownButton = document.getElementById("filterDropdownButton");
    const filterDropdown = document.getElementById("filterDropdown");

    // Add event listeners to the dropdown buttons
    actionsDropdownButton.addEventListener("click", () => {
        actionsDropdown.classList.toggle("hidden");
    });

    filterDropdownButton.addEventListener("click", () => {
        filterDropdown.classList.toggle("hidden");
    });

  </script>
</body>

</html>

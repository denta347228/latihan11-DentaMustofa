<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Conversion</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {},
            },
            plugins: [],
        }
    </script>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="-ml-2 mr-2 flex items-center md:hidden">
                        <!-- Mobile menu button -->
                        <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path id="menu-icon" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                                <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex-shrink-0 flex items-center">
                        <a href="#" class="text-xl font-semibold text-gray-800">BrandLogo</a>
                    </div>
                    <div class="hidden md:ml-6 md:flex md:space-x-8">
                        <a href="#" class="text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-indigo-500 text-sm font-medium">Home</a>
                        <a href="#" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">Product</a>
                        <div class="relative group">
                            <button class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium focus:outline-none">
                                <span>Dropdown</span>
                                <svg class="ml-1 h-5 w-5 text-gray-500 group-hover:text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.27a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div class="absolute left-0 mt-2 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden group-hover:block">
                                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Action</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Another action</a>
                                    <div class="border-t border-gray-100"></div>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="text-gray-400 cursor-not-allowed inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">Gallery</a>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <form class="flex space-x-2">
                            <input type="text" placeholder="Search" class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-indigo-500">
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="pt-2 pb-3 space-y-1">
                <a href="#" class="block pl-3 pr-4 py-2 border-l-4 border-indigo-500 bg-indigo-50 text-indigo-700 text-base font-medium">Home</a>
                <a href="#" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800 text-base font-medium">Product</a>
                <a href="#" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800 text-base font-medium">Dropdown</a>
                <a href="#" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-400 cursor-not-allowed text-base font-medium">Gallery</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
        <div class="bg-white shadow rounded-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Profile Image -->
                <div class="flex justify-center md:justify-start">
                    <img src="github.svg" alt="Profile Image" class="w-48 h-48 rounded-full object-cover">
                </div>

                <!-- Profile Info -->
                <div class="md:col-span-2 flex flex-col justify-center space-y-4">
                    <div>
                        <h3 id="datanama" class="text-2xl font-semibold text-gray-800">Your Name</h3>
                        <p id="Role-1" class="text-gray-600">Front End Designer</p>
                    </div>
                    <div class="space-x-2">
                        <button class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none">Kontak</button>
                        <button class="px-4 py-2 border border-indigo-600 text-indigo-600 rounded-md hover:bg-indigo-100 focus:outline-none">Resume</button>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <span class="text-gray-500">Availability:</span>
                            <span id="Avaibility" class="text-gray-800">Full Time</span>
                        </div>
                        <div>
                            <span class="text-gray-500">Usia:</span>
                            <span id="age" class="text-gray-800">25</span>
                        </div>
                        <div>
                            <span class="text-gray-500">Lokasi:</span>
                            <span id="Tempat" class="text-gray-800">Jakarta</span>
                        </div>
                        <div>
                            <span class="text-gray-500">Year Experience:</span>
                            <span id="Pengalaman" class="text-gray-800">3 Years</span>
                        </div>
                        <div>
                            <span class="text-gray-500">Email:</span>
                            <span id="email" class="text-gray-800">example@example.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="bg-white shadow rounded-lg p-6 mt-8">
            <form id="profile-form" class="space-y-6">
                <div>
                    <label for="inputNama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" id="inputNama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Masukkan nama Anda">
                </div>
                <div>
                    <label for="inputRole" class="block text-sm font-medium text-gray-700">Role</label>
                    <input type="text" id="inputRole" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Masukkan role Anda">
                </div>
                <div>
                    <label for="inputKesediaan" class="block text-sm font-medium text-gray-700">Availability</label>
                    <input type="text" id="inputKesediaan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Misal: Full Time">
                </div>
                <div>
                    <label for="inputUmur" class="block text-sm font-medium text-gray-700">Age</label>
                    <input type="number" id="inputUmur" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Masukkan usia Anda">
                </div>
                <div>
                    <label for="inputLokasi" class="block text-sm font-medium text-gray-700">Lokasi</label>
                    <input type="text" id="inputLokasi" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Masukkan lokasi Anda">
                </div>
                <div>
                    <label for="inputPengalaman" class="block text-sm font-medium text-gray-700">Year Experience</label>
                    <input type="number" id="inputPengalaman" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Misal: 3">
                </div>
                <div>
                    <label for="inputemail" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="inputemail" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Masukkan email Anda">
                </div>
                <div>
                    <button type="submit" id="submit" class="w-full py-3 px-4 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>

    <!-- Tailwind JavaScript -->
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // Form submission
        $('#profile-form').on('submit', function (e) {
            e.preventDefault();

            var Nama = $("#inputNama").val();
            var Role = $("#inputRole").val();
            var Kesediaan = $("#inputKesediaan").val();
            var Tempat = $("#inputLokasi").val();
            var Umur = $("#inputUmur").val();
            var Pengalaman = $("#inputPengalaman").val();
            var email = $("#inputemail").val();

            $('#datanama').text(Nama || 'Your Name');
            $('#Role-1').text(Role || 'Front End Designer');
            $('#Avaibility').text(Kesediaan || 'Full Time');
            $('#Tempat').text(Tempat || 'Jakarta');
            $('#age').text(Umur || '25');
            $('#Pengalaman').text(Pengalaman ? `${Pengalaman} Years` : '3 Years');
            $('#email').text(email || 'example@example.com');
        });
    </script>
</body>

</html>
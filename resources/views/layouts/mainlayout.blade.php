<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PointOfSales | @yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">


</head>

<body>
    @yield('body')
    <section>
        <div class="flex flex-col min-h-screen bg-[#303841] w-60 relative font-poppins font-medium">
            <div class="flex flex-col absolute gap-4">
                <div class="flex flex-row-reverse bg-[#222831] h-[74px] items-center">
                    <img src="{{ asset('assets/arrow-left.svg') }}" alt="arrow-left" class="mr-[20px]">
                    <img src="{{ asset('assets/Logo-SIVENTI.png') }}" alt="logo-siventi" class="scale-50">
                </div>
                <div class="flex flex-col text-sm gap-2">
                    @yield('dashboard')
                    @yield('daftarProduk')
                    @yield('transaksi')
                    @yield('daftarMember')

                    <a href="dashboard" class="group flex flex-row gap-3 p-[14px] items-center mx-3 rounded-lg bg-white hover:bg-white hover:opacity-90">
                        <svg class="stroke-[#303841] group-hover:stroke-[#303841]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.5 18.333h5c4.167 0 5.833-1.666 5.833-5.833v-5c0-4.167-1.666-5.833-5.833-5.833h-5c-4.167 0-5.833 1.666-5.833 5.833v5c0 4.167 1.666 5.833 5.833 5.833Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12.917 15.417c.916 0 1.666-.75 1.666-1.667v-7.5c0-.917-.75-1.667-1.666-1.667-.917 0-1.667.75-1.667 1.667v7.5c0 .917.742 1.667 1.667 1.667Zm-5.834 0c.917 0 1.667-.75 1.667-1.667v-2.917c0-.916-.75-1.666-1.667-1.666-.916 0-1.666.75-1.666 1.666v2.917c0 .917.741 1.667 1.666 1.667Z" />
                        </svg>
                        <h1 class="text-[#303841] group-hover:text-[#303841]">Dashboard</h1>
                    </a>
                    <a href="daftarProduk" class="group flex flex-row gap-3 p-[14px] items-center mx-3 rounded-lg hover:bg-white hover:opacity-90 ">
                        <svg class="stroke-white group-hover:stroke-[#303841]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.083 9.417v-3.55c0-3.359-.783-4.2-3.933-4.2h-6.3c-3.15 0-3.933.841-3.933 4.2v9.383c0 2.217 1.216 2.742 2.691 1.158l.009-.008c.683-.725 1.725-.667 2.316.125l.842 1.125M6.667 5.833h6.666M7.5 9.167h5" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="m15.176 12.309-2.95 2.95a1.026 1.026 0 0 0-.25.491l-.159 1.125c-.058.409.225.692.634.634l1.125-.159a.99.99 0 0 0 .491-.25l2.95-2.95c.509-.508.75-1.1 0-1.85-.741-.741-1.333-.5-1.841.009Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M14.75 12.734c.25.9.95 1.6 1.85 1.85" />
                        </svg>


                        <h1 class="text-[#A8ADB5]  group-hover:text-[#303841]">Daftar Produk</h1>
                    </a>
                    <a href="transaksi" class="group flex flex-row gap-3 p-[14px] items-center mx-3 rounded-lg hover:bg-white hover:opacity-90">
                        <svg class="stroke-white group-hover:stroke-[#303841]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M1.667 1.667h1.45c.9 0 1.608.775 1.533 1.666l-.692 8.3a2.33 2.33 0 0 0 2.325 2.525h8.875c1.2 0 2.25-.983 2.342-2.175l.45-6.25c.1-1.383-.95-2.508-2.342-2.508H4.85m8.692 15.108a1.042 1.042 0 1 0 0-2.083 1.042 1.042 0 0 0 0 2.083Zm-6.667 0a1.042 1.042 0 1 0 0-2.083 1.042 1.042 0 0 0 0 2.083ZM7.5 6.667h10" />
                        </svg>


                        <h1 class="text-[#A8ADB5] group-hover:text-[#303841]">Transaksi</h1>
                    </a>
                    <a href="daftarMember" class="group flex flex-row gap-3 p-[14px] items-center mx-3 rounded-lg hover:bg-white hover:opacity-90">
                        <svg class="stroke-white group-hover:stroke-[#303841]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.133 9.058a1.516 1.516 0 0 0-.275 0A3.683 3.683 0 0 1 6.3 5.367c0-2.042 1.65-3.7 3.7-3.7a3.696 3.696 0 0 1 .133 7.392Zm-4.166 3.075c-2.017 1.35-2.017 3.55 0 4.892 2.291 1.533 6.05 1.533 8.341 0 2.017-1.35 2.017-3.55 0-4.892-2.283-1.525-6.041-1.525-8.341 0Z" />
                        </svg>


                        <h1 class="text-[#A8ADB5] group-hover:text-[#303841]">Daftar Member</h1>
                    </a>
                </div>

            </div>
        </div>
    </section>
</body>

</html>
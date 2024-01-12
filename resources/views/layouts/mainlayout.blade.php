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
                    <img src="{{ asset('assets/arrow-left.svg') }}" alt="arrow-left" class="scale-75 mr-[20px]">
                    <img src="{{ asset('assets/Logo-SIVENTI.png') }}" alt="logo-siventi" class="scale-50">
                </div>
                <div class="flex flex-col text-sm gap-2">
                    <div class="flex flex-row gap-3 bg-white p-[14px] items-center mx-3 rounded-lg">
                        <svg class="stroke-[#303841]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.475 18.333h5c4.167 0 5.833-1.666 5.833-5.833v-5c0-4.167-1.666-5.833-5.833-5.833h-5c-4.167 0-5.833 1.666-5.833 5.833v5c0 4.167 1.666 5.833 5.833 5.833Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m1.642 10.583 5-.016c.625 0 1.325.475 1.558 1.058l.95 2.4c.217.542.558.542.775 0l1.908-4.842c.184-.466.525-.483.759-.041l.866 1.641c.259.492.925.892 1.475.892h3.384" />
                        </svg>
                        <h1 class="text-[#303841]">Dashboard</h1>
                    </div>
                    <a href="#" class="group flex flex-row gap-3 p-[14px] items-center mx-3 rounded-lg hover:bg-white hover:opacity-90 ">
                        <svg class="stroke-[#A8ADB5] group-hover:stroke-[#303841]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.475 18.333h5c4.167 0 5.833-1.666 5.833-5.833v-5c0-4.167-1.666-5.833-5.833-5.833h-5c-4.167 0-5.833 1.666-5.833 5.833v5c0 4.167 1.666 5.833 5.833 5.833Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m1.642 10.583 5-.016c.625 0 1.325.475 1.558 1.058l.95 2.4c.217.542.558.542.775 0l1.908-4.842c.184-.466.525-.483.759-.041l.866 1.641c.259.492.925.892 1.475.892h3.384" />
                        </svg>
                        <h1 class="text-[#A8ADB5]  group-hover:text-[#303841]">Daftar Produk</h1>
                    </a>
                    <div class="flex flex-row gap-3 p-[14px] items-center mx-3 rounded-lg">
                        <svg class="stroke-[#A8ADB5]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.475 18.333h5c4.167 0 5.833-1.666 5.833-5.833v-5c0-4.167-1.666-5.833-5.833-5.833h-5c-4.167 0-5.833 1.666-5.833 5.833v5c0 4.167 1.666 5.833 5.833 5.833Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m1.642 10.583 5-.016c.625 0 1.325.475 1.558 1.058l.95 2.4c.217.542.558.542.775 0l1.908-4.842c.184-.466.525-.483.759-.041l.866 1.641c.259.492.925.892 1.475.892h3.384" />
                        </svg>
                        <h1 class="text-[#A8ADB5]">Daftar Produk</h1>
                    </div>
                    <div class="flex flex-row gap-3 p-[14px] items-center mx-3 rounded-lg">
                        <svg class="stroke-[#A8ADB5]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.475 18.333h5c4.167 0 5.833-1.666 5.833-5.833v-5c0-4.167-1.666-5.833-5.833-5.833h-5c-4.167 0-5.833 1.666-5.833 5.833v5c0 4.167 1.666 5.833 5.833 5.833Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m1.642 10.583 5-.016c.625 0 1.325.475 1.558 1.058l.95 2.4c.217.542.558.542.775 0l1.908-4.842c.184-.466.525-.483.759-.041l.866 1.641c.259.492.925.892 1.475.892h3.384" />
                        </svg>
                        <h1 class="text-[#A8ADB5]">Daftar Produk</h1>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>

</html>
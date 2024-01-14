@extends('layouts.layoutLogin')

@section('title', 'Login')

@section('body')
<section class="flex min-h-screen items-center justify-center  ">
    <div class="bg-[#EEEEEE] w-1/2 min-h-screen"></div>
    <div class="bg-[#303841] w-1/2 min-h-screen"></div>

    <div class="flex flex-row-reverse absolute w-3/5 h-3/5 rounded-3xl overflow-hidden drop-shadow-[0_5px_50px_rgba(18,18,18,0.1)]  min-w-[600px]">
        <div class="bg-[#222831] w-1/2 flex justify-center items-center">
            <div class="flex flex-col gap-3">
                <h1 class="text-white font-semibold font-poppins text-lg">Welcome Back!</h1>
                <form action="" class="flex flex-col gap-10 items-center">
                    <div class="flex flex-col gap-4">
                        <input type="email" name="email" id="email" placeholder="Email" class="bg-transparent h-[40px] border-b-2 font-poppins text-white focus:outline-none text-sm">
                        <div class="flex flex-col items-end gap-2">
                            <div class="flex flex-row gap-2 items-center border-b-2">
                                <input type="password" name="password" id="password" placeholder="Password" class=" bg-transparent h-[40px] font-poppins text-white focus:outline-none text-sm w-[200px]">
                                <span id="togglePassword" class="relative cursor-pointer">
                                    <img id="eyeIcon" src="{{ asset('assets/vue-eye-slash.svg') }}" alt="Toggle Password" aria-hidden="true" class="text-white scale-90">
                                </span>
                            </div>

                            <a href="#" class="text-xs text-white opacity-30 font-poppins hover:opacity-100 ">Forgot Password?</a>
                        </div>

                    </div>
                    <button type="submit" class="text-[#222831] bg-[#EEEEEE] font-poppins font-semibold py-2 px-10 w-full rounded-full  flex justify-center items-center">
                        Login
                    </button>
                </form>
            </div>
        </div>
        <div class="bg-[#EEEEEE] w-1/2 justify-center flex items-center ">
            <img src="{{ asset('assets/Logo-SIVENTI.png') }}" alt="Logo-SIVENTI" class="scale-50">
        </div>
    </div>

    @if(isset($error))

    <div class="flex flex-row items-center absolute top-8 gap-5 font-poppins text-[#EE0B0B] bg-[#FCCECE] py-[12px] px-[24px] rounded-lg transition-transform duration-500 ease-in-out transform translate-y-0 opacity-100">
        <svg class="scale-90" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none">
            <path fill="#EE0B0B" d="M20 22.917a1.26 1.26 0 0 1-1.25-1.25v-8.75c0-.684.567-1.25 1.25-1.25s1.25.566 1.25 1.25v8.75a1.26 1.26 0 0 1-1.25 1.25Zm0 5.833a1.65 1.65 0 0 1-1.183-.483 2.433 2.433 0 0 1-.367-.55 1.644 1.644 0 0 1-.117-.634c0-.433.184-.866.484-1.183.616-.617 1.75-.617 2.366 0 .3.317.484.75.484 1.183 0 .217-.05.434-.134.634-.083.2-.2.383-.35.55A1.65 1.65 0 0 1 20 28.75Z" />
            <path fill="#EE0B0B" d="M20 37.917a6.463 6.463 0 0 1-3.25-.867l-9.9-5.717A6.544 6.544 0 0 1 3.6 25.7V14.3a6.544 6.544 0 0 1 3.25-5.633l9.9-5.717a6.473 6.473 0 0 1 6.5 0l9.9 5.717A6.544 6.544 0 0 1 36.4 14.3v11.4a6.544 6.544 0 0 1-3.25 5.633l-9.9 5.717c-1 .583-2.133.867-3.25.867Zm0-33.334c-.683 0-1.383.184-2 .534l-9.9 5.716a4.01 4.01 0 0 0-2 3.467v11.4c0 1.417.767 2.75 2 3.467l9.9 5.716a3.958 3.958 0 0 0 3.984 0l9.9-5.716a4.01 4.01 0 0 0 2-3.467V14.3a4.03 4.03 0 0 0-2-3.467l-9.9-5.716c-.6-.35-1.3-.534-1.984-.534Z" />
        </svg>
        <div class="flex-col text-center">
            <h1 class="font-semibold">Warning!</h1>
            <h2>{{$error}}</h2>
        </div>
    </div>

    <script>
        // Menghilangkan alert setelah beberapa detik
        setTimeout(function() {
            var errorAlert = document.getElementById('error-alert');
            errorAlert.classList.add('hidden');
        }, 5000); // Ubah angka 5000 (milidetik) sesuai keinginan
    </script>
    @endif
</section>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Ganti gambar mata tergantung pada tipe input
            if (type === 'password') {
                eyeIcon.src = "{{ asset('assets/vue-eye-slash.svg') }}";
            } else {
                eyeIcon.src = "{{ asset('assets/vue-eye.svg') }}";
            }
        });
    });
</script>
@endsection
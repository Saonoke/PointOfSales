@extends('layouts.mainlayout')

@section('title', 'Login')

<section class="flex min-h-screen items-center justify-center  ">
    <div class="bg-[#EEEEEE] w-1/2 min-h-screen"></div>
    <div class="bg-[#303841] w-1/2 min-h-screen"></div>

    <div class="flex flex-row-reverse absolute w-3/5 h-3/5 rounded-3xl overflow-hidden drop-shadow-[0_5px_50px_rgba(18,18,18,0.1)]  min-w-[600px]">
        <div class="bg-[#222831] w-1/2 flex justify-center items-center">
            <div class="flex flex-col gap-3">
                <h1 class="text-white font-semibold font-poppins text-lg">Welcome Back!</h1>
                <form action="" class="flex flex-col w-full gap-10 items-center">
                    <div class="flex flex-col gap-4">
                        <input type="email" name="" id="email" placeholder="Email" class="bg-transparent h-[40px] border-b-2 font-poppins text-white focus:outline-none text-sm">
                        <div class="flex flex-col items-end gap-2">
                            <div class="flex flex-row gap-2 items-center border-b-2">
                                <input type="password" name="password" id="password" placeholder="Password" class=" bg-transparent h-[40px] font-poppins text-white focus:outline-none text-sm w-[250px]">
                                <span id="togglePassword" class="relative cursor-pointer">
                                    <img id="eyeIcon" src="{{ asset('assets/vue-eye-slash.svg') }}" alt="Toggle Password" aria-hidden="true" class="text-white scale-90" >
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

</section>








































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
    console.log('test inline');
</script>
<div data-aos="fade-up" class="flex flex-col justify-center items-center">
    <!-- Logo -->
    <img src="{{ asset('./images/logo/logo1.png') }}" class=" h-[100px]" alt="Logo">

    <!-- Judul -->
    <h1
        class="font-poppins text-center font-bold text-transparent bg-gradient-to-r from-[#129A6A] to-[#A5BBB6] bg-clip-text text-[40px] uppercase">
        {{ $title }}
    </h1>

    <!-- Breadcrumb -->
    <div class="flex flex-row space-x-2 font-normal font-dmsans text-[14px] text-gray-300">
        <a href="/" class="hover:text-secondary">{{ $breadcrumbHome }}</a>
        <h2>></h2>
        <h2 class="text-primary">{{ $breadcrumbCurrent }}</h2>
    </div>
</div>

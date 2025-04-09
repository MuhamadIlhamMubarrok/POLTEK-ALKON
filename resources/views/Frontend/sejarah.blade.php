@section('title', 'Sejarah')
@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="Sejarah Politeknik Alkon" breadcrumb-home="Home" breadcrumb-current="Sejarah Singkat" />

    <div data-aos="fade-up" class=" flex flex-col my-6 md:my-10 px-4 md:px-20 lg:px-32 xl:px-60">
        <!-- Gambar -->
        {{-- <img src="{{ asset('./images/sambutan/petinggi.png') }}" data-aos="fade-up" class=" mb-5 w-full" alt=""> --}}

        <!-- Konten Teks -->
        <div data-aos="fade-up"
            class="flex flex-col space-y-4 text-justify font-dmsans text-[14px] md:text-[16px] bg-white shadow-xl shadow rounded-lg p-6">
            <p class="first-line:pl-5 text-center font-bold ">
                Sedang Maintenance
            </p>
        </div>

        <!-- Bagian Ajakan -->
        <x-join-us-section title="Bergabunglah Bersama POLITEKNIK ALKON KALIMANTAN"
            description="Politeknik Alkon Kalimantan menawarkan lingkungan belajar yang kondusif dengan fasilitas modern untuk mendukung pengembangan kompetensi Anda."
            buttonText="Daftar Sekarang" buttonLink="/pendaftaran" />
    </div>
@endsection

@section('title', 'Struktur Organisasi')
@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="Struktur Organisasi Politeknik Alkon" breadcrumb-home="Home"
        breadcrumb-current="Struktur Organisasi" />

    <div data-aos="fade-up" class=" py-16 mt-8 ">
        <div data-aos="fade-up" class="container mx-auto px-4 lg:px-20">

            <!-- Image Section -->
            <div data-aos="fade-up" class="flex justify-center">
                {{-- <h1 class="text-[20px] font-poppins uppercase font-bold p-6 rounded-lg shadow-lg">Sedang Maintenance</h1> --}}
                {{-- <img src="{{ asset('images/sambutan/struktur.png') }}" alt="Struktur Organisasi POLITEKNIK ALKON KALIMANTAN"
                    data-aos="fade-up" class="shadow-lg rounded-lg w-full md:w-3/4 lg:w-1/2 shadow-xl bg-white p-8"> --}}
                <p data-aos="fade-up" class="text-gray-700 font-dmsans font-bold">
                    SEDANG MAINTENANCE
                </p>
            </div>

            <!-- Description Section -->
            <x-join-us-section title="Bergabunglah Bersama POLITEKNIK ALKON KALIMANTAN"
                description="Politeknik Alkon Kalimantan berkomitmen mencetak lulusan yang kompeten dan siap bersaing di dunia kerja global melalui program pendidikan berkualitas."
                buttonText="Daftar Sekarang" />
        </div>
    </div>
@endsection

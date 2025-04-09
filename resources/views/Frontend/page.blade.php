@section('title', $page->judul)
@extends('Frontend.Layouts.app2')
@section('content')

    <x-header-section-page title="{{ $page->judul }}" breadcrumb-home="Home" breadcrumb-current="{{ $page->judul }}" />

    <!-- Content Section -->
    <div data-aos="fade-up" class="py-4 mt-8">
        <div data-aos="fade-up" class="container mx-auto px-4 lg:px-16">
            <div data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div data-aos="fade-up" class="md:col-span-2 bg-white shadow-xl rounded-lg p-6">
                    <section>
                        <div id="text-page" data-aos="fade-up" class="text-gray-700 font-dmsans leading-relaxed">
                            {!! $page->isi !!} <!-- Render the 'isi' content as HTML -->
                        </div>
                    </section>
                </div>

                <!-- Sidebar (Optional) -->
                <div data-aos="fade-up" class="hidden md:block bg-white shadow-xl rounded-lg p-6">
                    <h3 data-aos="fade-up" class="text-xl font-poppins font-bold text-primary mb-4">Informasi Lainnya</h3>
                    <ul data-aos="fade-up" class="space-y-2 text-gray-600 font-dmsans">
                        <li><a href="/sejarah-singkat" data-aos="fade-up" class="hover:text-secondary">Tentang STIE IGI</a>
                        </li>
                        <li><a href="/biaya-jurusan" data-aos="fade-up" class="hover:text-secondary">Biaya dan Jurusan</a>
                        </li>
                        <li><a href="/pendaftaran" data-aos="fade-up" class="hover:text-secondary">Pendaftaran</a></li>
                        <li><a href="/kontak-form" data-aos="fade-up" class="hover:text-secondary">Kontak Kami</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Call-to-Action Section -->
    <x-join-us-section title="Bergabunglah Bersama POLITEKNIK ALKON KALIMANTAN"
        description="Dengan jaringan industri yang luas, Politeknik Alkon Kalimantan membuka peluang magang dan kerja bagi mahasiswa di berbagai sektor."
        buttonText="Daftar Sekarang" />
@endsection

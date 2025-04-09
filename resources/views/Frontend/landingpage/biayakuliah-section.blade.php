<div class="md:h-full h-auto flex flex-col items-center md:flex-row justify-center md:justify-start py-8 md:py-[100px] px-4 md:px-[200px] md:bg-center bg-right-top bg-cover bg-no-repeat"
    style="background-image: url('{{ asset('./images/background/sambutan.png') }}');">
    <div class="flex flex-col md:items-start justify-center items-center w-full mt-4 md:mt-0" data-aos="fade-up">

        <x-header-section subtext="BIAYA & JURUSAN POLITEKNIK ALKON KALIMANTAN" subtext-color="#6b7280" title=""
            title-color="#D48B01" />
        <div class="container mx-auto px-4 lg:px-16 pb-10 font-poppins">

            <!-- Tambahkan Keterangan Biaya di Atas Tabel -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-md mb-6">
                <p class="text-lg font-bold mb-3 text-gray-800">Biaya Pendaftaran Rp. 150.000,-
                </p>
                <p class="text-md mb-2 text-gray-600">
                    Biaya Awal Prodi D3 dan D4 sudah termasuk Angs 1 UKT <br>
                    Biaya Bulanan (UKT) sudah termasuk biaya Praktikum dan fasilitas, sks, biaya ujian uts uas, biaya
                    her/daftar ulang
                </p>
            </div>

            <!-- Biaya Formulir -->
            <div class="p-6 rounded-lg shadow-md bg-gray-100 min-h-auto">
                <!-- Tabel SMA ke Sarjana -->
                <div class="mb-8">
                    <table class="table-auto w-full border border-gray-300 shadow-md rounded-lg overflow-hidden">
                        <!-- Header Section -->
                        <thead class="bg-gradient-to-r from-[#129A6A] to-[#A5BBB6] text-white">
                            <tr>
                                <th colspan="3"
                                    class="text-center px-4 py-3 text-lg md:text-2xl font-semibold uppercase">
                                    Diploma D3
                                </th>
                            </tr>
                        </thead>
                        <!-- Sub-header -->
                        <thead class="bg-green-100">
                            <tr>
                                <th class="border border-gray-300 px-2 py-2 text-left text-sm md:text-base">Jurusan</th>
                                <th class="border border-gray-300 px-2 py-2 text-left text-sm md:text-base">Biaya Awal
                                </th>
                                <th class="border border-gray-300 px-2 py-2 text-left text-sm md:text-base">Biaya
                                    Bulanan</th>
                            </tr>
                        </thead>
                        <!-- Body -->
                        <tbody>
                            @foreach ($data['d3'] as $program)
                                <tr class="hover:bg-green-50">
                                    <td class="border border-gray-300 px-2 py-2 text-sm md:text-base">
                                        {{ $program['jurusan'] }}
                                    </td>
                                    <td class="border border-gray-300 px-2 py-2 text-sm md:text-base">
                                        Rp {{ $program['b_awal'] }}
                                    </td>
                                    <td class="border border-gray-300 px-2 py-2 text-sm md:text-base">
                                        Rp {{ $program['spp'] }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <thead class="bg-gradient-to-r from-[#129A6A] to-[#A5BBB6] text-white">
                            <tr>
                                <th colspan="3"
                                    class="text-center px-4 py-3 text-lg md:text-2xl font-semibold uppercase">
                                    Diploma D4
                                </th>
                            </tr>
                        </thead>
                        <!-- Sub-header -->
                        <thead class="bg-green-100">
                            <tr>
                                <th class="border border-gray-300 px-2 py-2 text-left text-sm md:text-base">Jurusan</th>
                                <th class="border border-gray-300 px-2 py-2 text-left text-sm md:text-base">Biaya Awal
                                </th>
                                <th class="border border-gray-300 px-2 py-2 text-left text-sm md:text-base">Biaya
                                    Bulanan</th>
                            </tr>
                        </thead>
                        <!-- Body -->
                        <tbody>
                            @foreach ($data['d4'] as $program)
                                <tr class="hover:bg-green-50">
                                    <td class="border border-gray-300 px-2 py-2 text-sm md:text-base">
                                        {{ $program['jurusan'] }}
                                    </td>
                                    <td class="border border-gray-300 px-2 py-2 text-sm md:text-base">
                                        Rp {{ $program['b_awal'] }}
                                    </td>
                                    <td class="border border-gray-300 px-2 py-2 text-sm md:text-base">
                                        Rp {{ $program['spp'] }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        {{-- <thead class="bg-gradient-to-r from-[#129A6A] to-[#A5BBB6] text-white">
                            <tr>
                                <th colspan="3"
                                    class="text-center px-4 py-3 text-lg md:text-2xl font-semibold uppercase">
                                    Magister S2
                                </th>
                            </tr>
                        </thead>
                        <!-- Sub-header -->
                        <thead class="bg-green-100">
                            <tr>
                                <th class="border border-gray-300 px-2 py-2 text-left text-sm md:text-base">Jurusan</th>
                                <th class="border border-gray-300 px-2 py-2 text-left text-sm md:text-base">Biaya Awal
                                </th>
                                <th class="border border-gray-300 px-2 py-2 text-left text-sm md:text-base">Biaya
                                    Bulanan</th>
                            </tr>
                        </thead>
                        <!-- Body -->
                        <tbody>
                            @foreach ($data['s2'] as $program)
                                <tr class="hover:bg-green-50">
                                    <td class="border border-gray-300 px-2 py-2 text-sm md:text-base">
                                        {{ $program['jurusan'] }}
                                    </td>
                                    <td class="border border-gray-300 px-2 py-2 text-sm md:text-base">
                                        Rp {{ $program['b_awal'] }}
                                    </td>
                                    <td class="border border-gray-300 px-2 py-2 text-sm md:text-base">
                                        Rp {{ $program['spp'] }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                </div>

                <div>
                    {!! $page->isi !!}
                </div>
            </div>

            <x-join-us-section title="Ubah Masa Depanmu
                        Bersama POLITEKNIK ALKON KALIMANTAN"
                description="Bergabunglah dengan Politeknik Alkon Kalimantan dan wujudkan impian Anda melalui program studi yang dirancang untuk mencetak tenaga profesional siap kerja."
                buttonText="Daftar Sekarang" />
        </div>
    </div>
</div>

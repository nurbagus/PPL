<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="bg-gray-100 py-12">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold text-gray-800">Solusi Terbaik untuk Perawatan Sepatu Anda</h1>
            <p class="mt-4 text-lg text-gray-600">
                Kami menghadirkan layanan profesional untuk membersihkan, merawat, dan memperbaiki sepatu Anda agar selalu tampil seperti baru. Dengan teknologi modern dan tenaga ahli berpengalaman, kami memastikan sepatu Anda mendapatkan perawatan terbaik.
            </p>
            <a href="/services" class="mt-6 inline-block px-6 py-3 bg-blue-600 text-white text-lg rounded-md shadow hover:bg-blue-700">
                Jelajahi Layanan Kami
            </a>
        </div>
    </div>
    
    <div class="container mx-auto py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-md p-6 text-center">
                <img src="img/cucis.jpg" alt="Cleaning Service" class="mx-auto w-24 h-24">
                <h3 class="mt-4 text-xl font-bold">Cuci Sepatu</h3>
                <p class="mt-2 text-gray-600">
                    Layanan cuci sepatu profesional untuk menjaga kebersihan dan keharuman sepatu Anda.
                </p>
            </div>
            <div class="bg-white shadow-lg rounded-md p-6 text-center">
                <img src="img/repairs.jpg" alt="Repair Service" class="mx-auto w-24 h-24">
                <h3 class="mt-4 text-xl font-bold">Perbaikan Sepatu</h3>
                <p class="mt-2 text-gray-600">
                    Solusi perbaikan sepatu untuk semua jenis kerusakan, dari sol lepas hingga jahitan putus.
                </p>
            </div>
            <div class="bg-white shadow-lg rounded-md p-6 text-center">
                <img src="img/customs.jpg" alt="Customization Service" class="mx-auto w-24 h-24">
                <h3 class="mt-4 text-xl font-bold">Kustomisasi Sepatu</h3>
                <p class="mt-2 text-gray-600">
                    Layanan personalisasi untuk membuat sepatu Anda unik sesuai gaya dan kepribadian Anda.
                </p>
            </div>
        </div>
    </div>
    
    <div class="bg-blue-600 py-12">
        <div class="container mx-auto text-center text-white">
            <h2 class="text-3xl font-bold">Bersama Kami, Sepatu Anda Lebih Terawat</h2>
            <p class="mt-4 text-lg">
                Mulai rawat sepatu Anda dengan layanan terpercaya. Jadilah bagian dari ribuan pelanggan yang puas!
            </p>
            <a href="/contact" class="mt-6 inline-block px-6 py-3 bg-white text-blue-600 text-lg rounded-md shadow hover:bg-gray-100">
                Hubungi Kami
            </a>
        </div>
    </div>
    
</x-layout>
<x-footer></x-footer>
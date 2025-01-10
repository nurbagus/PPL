<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="bg-gray-100 py-12">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold text-gray-800">Tentang Kami</h1>
            <p class="mt-4 text-lg text-gray-600">
                CuciSepatu adalah solusi terbaik untuk merawat, membersihkan, dan memperbaiki sepatu Anda. Kami percaya bahwa sepatu bukan sekadar pelindung kaki, tetapi juga bagian dari gaya hidup dan identitas Anda. Itulah mengapa kami berdedikasi memberikan layanan terbaik untuk menjaga sepatu Anda tetap bersih, nyaman, dan tampil maksimal.
            </p>
        </div>
    </div>
    
    <div class="container mx-auto py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <img src="{{ asset('img/about-us.jpg') }}" alt="Tentang Kami" class="rounded-lg shadow-md">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-800">Misi Kami</h2>
                <p class="mt-4 text-gray-600">
                    Misi kami adalah menjadi mitra terpercaya untuk semua kebutuhan perawatan sepatu Anda. Dengan kombinasi teknologi modern, bahan berkualitas tinggi, dan tenaga ahli berpengalaman, kami menghadirkan layanan yang tidak hanya membersihkan sepatu, tetapi juga menjaga kualitas dan keindahannya.
                </p>
                <p class="mt-4 text-gray-600">
                    Kami percaya bahwa dengan memberikan perhatian pada detail dan kualitas layanan, kami dapat membantu Anda menjaga kepercayaan diri dalam setiap langkah.
                </p>
            </div>
        </div>
    </div>
    
    <div class="bg-gray-50 py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800">Mengapa Memilih Kami?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div class="bg-white shadow-lg rounded-md p-6">
                    <h3 class="text-xl font-bold text-gray-800">Berpengalaman</h3>
                    <p class="mt-2 text-gray-600">
                        Kami telah melayani ribuan pelanggan dengan beragam kebutuhan perawatan sepatu, dari sepatu kasual hingga premium.
                    </p>
                </div>
                <div class="bg-white shadow-lg rounded-md p-6">
                    <h3 class="text-xl font-bold text-gray-800">Teknologi Modern</h3>
                    <p class="mt-2 text-gray-600">
                        Kami menggunakan teknologi terbaru dan bahan ramah lingkungan untuk hasil terbaik tanpa merusak material sepatu Anda.
                    </p>
                </div>
                <div class="bg-white shadow-lg rounded-md p-6">
                    <h3 class="text-xl font-bold text-gray-800">Layanan Personal</h3>
                    <p class="mt-2 text-gray-600">
                        Setiap sepatu mendapatkan perhatian khusus dan layanan personal sesuai dengan jenis dan kebutuhannya.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-blue-600 py-12">
        <div class="container mx-auto text-center text-white">
            <h2 class="text-3xl font-bold">Mari Rawat Sepatu Anda Bersama Kami</h2>
            <p class="mt-4 text-lg">
                Hubungi kami untuk informasi lebih lanjut atau langsung datang ke lokasi kami. Kami siap membantu Anda!
            </p>
            <a href="/contact" class="mt-6 inline-block px-6 py-3 bg-white text-blue-600 text-lg rounded-md shadow hover:bg-gray-100">
                Hubungi Kami
            </a>
        </div>
    </div>
</x-layout>
<x-footer></x-footer>
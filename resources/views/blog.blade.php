    <x-layout>
        <x-slot:title>{{ $title }}</x-slot>
        <h3>Blog Seputar Sepatu</h3>
        <!-- Blog Grid -->
    <section class="blog-posts py-5">
        <div class="container">
            <div class="row">
                <!-- Blog Post 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="img/blog2.jpg" alt="Post 2" class="w-32 h-32">
                        <div class="card-body">
                            <h5 class="card-title">Perawatan sepatu</h5>
                            <p class="card-text">Tips Merawat Sepatu Berwarna Hitam</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="img/blog1.jpg" alt="Post 2" class="w-32 h-32">

                        <div class="card-body">
                            <h5 class="card-title">Tips Pemilihan sepatu</h5>
                            <p class="card-text">5 Akibat Jika Kamu Tidak Memakai Sepatu Lari yang Tepat!.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="img/blog3.webp" alt="Post 2" class="w-32 h-32">
                        <div class="card-body">
                            <h5 class="card-title">Tips Pemilihan sepatu</h5>
                            <p class="card-text">Cara Membersihkan Sepatu Yang Sudah Lama Tidak Terpakai!</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>
    <x-footer></x-footer>
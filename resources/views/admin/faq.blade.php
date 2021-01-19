@extends('layouts.app')
@section('content')
    <div class="card border-light shadow-sm py-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-6">
                <div class="card-header border-0 text-center">
                    <h2 class="h3 mb-4">Frequently asked questions</h2>
                    <p class="text-gray">Here’s what you need to know about UC Internship, based on the questions we get
                        asked the most.</p>
                </div>
                <div class="card-body">
                    <div class="accordion">
                        <div class="card card-sm card-body border border-light rounded mb-2">
                            <div data-target="#panel-1" class="accordion-panel-header d-flex justify-content-between"
                                data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                                <span class="h6 mb-0">About UC Internship</span>
                                <span class="icon"><i class="fas fa-angle-down"></i></span>
                            </div>
                            <div class="collapse" id="panel-1">
                                <div class="pt-3">
                                    <p class="mb-0">UC Internship adalah sebuah sistem dimana mahasiswa magang dapat mencari
                                        projek magang serta mengelola projek tersebut.dengan dosen pembimbingnya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-sm card-body border border-light rounded mb-2">
                            <div data-target="#panel-2" class="accordion-panel-header d-flex justify-content-between"
                                data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-2">
                                <span class="h6 mb-0">Ada berapa macam kategori untuk sebuah project?</span>
                                <span class="icon"><i class="fas fa-angle-down"></i></span>
                            </div>
                            <div class="collapse" id="panel-2">
                                <div class="pt-3">
                                    <p class="mb-0">Terdapat 3 macam kategori.</p>
                                    <ul>
                                        <li>Event : Project yang berkaitan dengan
                                            acara-acara di UC.
                                        </li>
                                        <li>Education : Project yang berkaitan dengan
                                            mata kuliah di UC.
                                        </li>
                                        <li>Other : Project yang berkaitan
                                            dengan hal lain selain acara dan mata kuliah di
                                            UC.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card card-sm card-body border border-light rounded mb-2">
                            <div data-target="#panel-3" class="accordion-panel-header d-flex justify-content-between"
                                data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-3">
                                <span class="h6 mb-0">Apa arti status yang terdapat di suatu project?</span>
                                <span class="icon"><i class="fas fa-angle-down"></i></span>
                            </div>
                            <div class="collapse" id="panel-3">
                                <div class="pt-3">
                                    <p class="mb-0">Status menunjukan kondisi dari project tersebut.</p>
                                    <ul>
                                        <li>
                                            <span class="fas fa-thumbs-up text-info"></span>
                                            <span class="text-info">Available</span> : Project belum di mulai dan masih
                                            terbuka untuk para mahasiswa.
                                        </li>
                                        <li>
                                            <span class="fas fa-clock text-warning"></span>
                                            <span class="text-warning">Ongoing</span> : Project sedang berjalan dan sedang
                                            dalam proses pengerjaan.
                                        </li>
                                        <li>
                                            <span class="fas fa-check text-success"></span>
                                            <span class="text-success">Completed</span> : Project telah selesai dikerjakan.
                                        </li>
                                        <li>
                                            <span class="fas fa-ban text-danger"></span>
                                            <span class="text-danger">Suspended</span> : Project sedang di berhentikan untuk
                                            sementara karena ada suatu masalah atau hal lainnya.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card card-sm card-body border border-light rounded mb-2">
                            <div data-target="#panel-4" class="accordion-panel-header d-flex justify-content-between"
                                data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-4">
                                <span class="h6 mb-0">Apa arti status yang terdapat di suatu scholarship?</span>
                                <span class="icon"><i class="fas fa-angle-down"></i></span>
                            </div>
                            <div class="collapse" id="panel-4">
                                <div class="pt-4">
                                    <p class="mb-0">Status menunjukan kondisi dari scholarship tersebut.</p>
                                    <ul>
                                        <li>
                                            <span class="fas fa-check text-success"></span>
                                            <span class="text-success">Open</span> : Program beasiswa ini masih berjalan dan
                                            dapat dimiliki oleh mahasiswa.
                                        </li>
                                        <li>
                                            <span class="fas fa-ban text-danger"></span>
                                            <span class="text-danger">Close</span> : Program beasiswa ini sudah tidak
                                            berjalan namun masih ada mahasiswa yang bisa masih memiliki beasiswa tersebut.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card card-sm card-body border border-light rounded mb-2">
                            <div data-target="#panel-5" class="accordion-panel-header d-flex justify-content-between"
                                data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-5">
                                <span class="h6 mb-0">Terdapat seorang mahasiswa yang beasiswanya diberhentikan.
                                    <br>Apa yang harus saya lakukan?</span>
                                <span class="icon"><i class="fas fa-angle-down"></i></span>
                            </div>
                            <div class="collapse" id="panel-5">
                                <div class="pt-3">
                                    <p class="mb-0">Buka profile dari mahasiswa tersebut, edit scholarshipnya menjadi None
                                        dan Time Remaining yang ia miliki menjadi 0.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-sm card-body border border-light rounded">
                            <div data-target="#panel-6" class="accordion-panel-header d-flex justify-content-between"
                                data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-6">
                                <span class="h6 mb-0">Terjadi kesalahan pada saat pembuatan periode/semester baru.
                                    <br>Apa yang harus saya lakukan?
                                </span>
                                <span class="icon"><i class="fas fa-angle-down"></i></span>
                            </div>
                            <div class="collapse" id="panel-6">
                                <div class="pt-3">
                                    <p class="mb-0">Jika terjadi kesalahan pada saat pembuatan periode baru, periode
                                        tersebut dapat di edit menjadi sesuai dengan tanggal yang baru.<br>
                                        Pastikan periode yang baru ini tidak mulai atau berakhir ditengah-tengah periode
                                        lainnya yang sudah dibuat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-sm card-body border border-light rounded mb-2">
                            <div data-target="#panel-10" class="accordion-panel-header d-flex justify-content-between"
                                data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-10">
                                <span class="h6 mb-0">Saya ada pertanyaan lain tetapi tidak ada di FAQ.<br>
                                    Apa yang harus saya lakukan?</span>
                                <span class="icon"><i class="fas fa-angle-down"></i></span>
                            </div>
                            <div class="collapse" id="panel-10">
                                <div class="pt-3">
                                    <p class="mb-0">Kalian dapat mengontak kontak berikut ini untuk bertanya mengenai apapun
                                        yang terkait dengan UC Internship.<br>
                                        <span class="fab fa-whatsapp mr-2"></span>Contact Person : 08123456789 (Admin UCI)<br>
                                        <span class="fas fa-envelope mr-2"></span>Email : adminuci@ciputra.ac.id
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="btn-group">
                        <a class="btn mb-2 mr-2 btn-secondary" href="">
                            <i class="fa fa-book-reader mr-2"></i>Download Guidebook
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

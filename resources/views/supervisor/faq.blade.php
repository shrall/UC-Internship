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
                                        projek magang serta mengelola projek tersebut.dengan supervisor pembimbingnya.</p>
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
                                <span class="h6 mb-0">Apa arti dari status pada tabel Student yang ada di Project?</span>
                                <span class="icon"><i class="fas fa-angle-down"></i></span>
                            </div>
                            <div class="collapse" id="panel-4">
                                <div class="pt-3">
                                    <p class="mb-0">Status menunjukan kondisi dari pengajuanmu terhadap project tersebut.
                                    </p>
                                    <ul>
                                        <li>
                                            <span class="fas fa-check text-success"></span>
                                            <span class="text-success">Accepted</span> : Mahasiswa tersebut diterima menjadi
                                            anggota dari
                                            project tersebut.
                                        </li>
                                        <li>
                                            <span class="fas fa-clock text-warning"></span>
                                            <span class="text-warning">Pending</span> : Proses pengajuan mahasiswa tersebut
                                            untuk menjadi
                                            anggota dari project tersebut masih menunggu persetujuan dari supervisor.
                                        </li>
                                        <li>
                                            <span class="fas fa-ban text-danger"></span>
                                            <span class="text-danger">Declined</span> : Mahasiswa tersebut tidak diterima
                                            untuk menjadi
                                            anggota dari project tersebut.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card card-sm card-body border border-light rounded mb-2">
                            <div data-target="#panel-5" class="accordion-panel-header d-flex justify-content-between"
                                data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-5">
                                <span class="h6 mb-0">Apa arti dari status pada suatu Task?</span>
                                <span class="icon"><i class="fas fa-angle-down"></i></span>
                            </div>
                            <div class="collapse" id="panel-5">
                                <div class="pt-3">
                                    <p class="mb-0">Status menunjukan kondisi dari task tersebut.</p>
                                    <ul>
                                        <li>
                                            <span class="fas fa-check text-success"></span>
                                            <span class="text-success">Completed</span> : Task tersebut sudah terselesaikan
                                            oleh PIC dari task tersebut.
                                        </li>
                                        <li>
                                            <span class="fas fa-clock text-warning"></span>
                                            <span class="text-warning">Ongoing</span> : Task masih dalam proses pengerjaan
                                            oleh PIC dari task tersebut.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card card-sm card-body border border-light rounded mb-2">
                            <div data-target="#panel-6" class="accordion-panel-header d-flex justify-content-between"
                                data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-6">
                                <span class="h6 mb-0">Apa arti dari status pada suatu Progress?</span>
                                <span class="icon"><i class="fas fa-angle-down"></i></span>
                            </div>
                            <div class="collapse" id="panel-6">
                                <div class="pt-3">
                                    <p class="mb-0">Status menunjukan kondisi dari progress tersebut.</p>
                                    <ul>
                                        <li>
                                            <span class="fas fa-check text-success"></span>
                                            <span class="text-success">Approved</span> : Progress tersebut telah dilihat
                                            oleh supervisor dan telah diterima.
                                        </li>
                                        <li>
                                            <span class="fas fa-times text-danger"></span>
                                            <span class="text-danger">Declined</span> : Terdapat suatu kesalahan pada input
                                            waktu mulai dan berakhir progress yang di submit sehingga di tolak oleh
                                            supervisor.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card card-sm card-body border border-light rounded mb-2">
                            <div data-target="#panel-7" class="accordion-panel-header d-flex justify-content-between"
                                data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-7">
                                <span class="h6 mb-0">Apakah ada limit untuk berapa project yang dapat kita buat?</span>
                                <span class="icon"><i class="fas fa-angle-down"></i></span>
                            </div>
                            <div class="collapse" id="panel-7">
                                <div class="pt-3">
                                    <p class="mb-0">Tidak ada limit untuk project yang dapat dibuat oleh supervisor.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-sm card-body border border-light rounded mb-2">
                            <div data-target="#panel-8" class="accordion-panel-header d-flex justify-content-between"
                                data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-8">
                                <span class="h6 mb-0">Apakah wajib untuk memberikan suatu attachment pada suatu
                                    project?</span>
                                <span class="icon"><i class="fas fa-angle-down"></i></span>
                            </div>
                            <div class="collapse" id="panel-8">
                                <div class="pt-3">
                                    <p class="mb-0">Tidak. Namun, dianjurkan untuk memberikan attachment yang dapat
                                        menunjang penjelasan dari suatu project agar mahasiswa dapat lebih menmahami
                                        tugas-tugas yang akan diberikan pada project tersebut.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-sm card-body border border-light rounded mb-2">
                            <div data-target="#panel-9" class="accordion-panel-header d-flex justify-content-between"
                                data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-9">
                                <span class="h6 mb-0">Apakah ada limit untuk berapa attachment yang dapat kita lampirkan
                                    dalam suatu project?</span>
                                <span class="icon"><i class="fas fa-angle-down"></i></span>
                            </div>
                            <div class="collapse" id="panel-9">
                                <div class="pt-3">
                                    <p class="mb-0">Tidak ada limit untuk attachment yang dapat dilampirkan pada project
                                        yang ingin dibuat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-sm card-body border border-light rounded mb-2">
                            <div data-target="#panel-10" class="accordion-panel-header d-flex justify-content-between"
                                data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-10">
                                <span class="h6 mb-0">Project yang sedang berjalan yang saya miliki statusnya tiba-tiba
                                    menjadi Suspended.<br>
                                    Apa yang harus saya lakukan?</span>
                                <span class="icon"><i class="fas fa-angle-down"></i></span>
                            </div>
                            <div class="collapse" id="panel-10">
                                <div class="pt-3">
                                    <p class="mb-0">Silahkan kontak admin UC Internship untuk mendapatkan detailnya.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-sm card-body border border-light rounded mb-2">
                            <div data-target="#panel-11" class="accordion-panel-header d-flex justify-content-between"
                                data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-11">
                                <span class="h6 mb-0">Saya ada pertanyaan lain tetapi tidak ada di FAQ.<br>
                                    Apa yang harus saya lakukan?</span>
                                <span class="icon"><i class="fas fa-angle-down"></i></span>
                            </div>
                            <div class="collapse" id="panel-11">
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
                        <a class="btn mb-2 mr-2 btn-secondary" href="{{asset("guidebook/guidebook_supervisor.pdf")}}">
                            <i class="fa fa-book-reader mr-2"></i>Download Guidebook
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

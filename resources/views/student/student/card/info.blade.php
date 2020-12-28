{{-- ini yang nunjukin general information dari student  --}}
<div class="col-12 col-xl-8">
    <div class="card card-body bg-white border-light shadow-sm mb-4">
        <h2 class="h4 mb-4">General information</h2>
        <form>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div>
                        <label for="full_name">Full Name</label>
                        <h2 class="h5 mb-4">{{ $user->detailable->name }}</h2>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div>
                        <label for="nim">NIM</label>
                        <h2 class="h5 mb-4">{{ $user->detailable->nim }}</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 mb-3">
                    <label for="email"><span class="fa fa-envelope"></span> E-Mail</label>
                    <h2 class="h5 mb-4">movierdo@student.ciputra.ac.id</h2>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email"><span class="fab fa-whatsapp"></span> Phone Number</label>
                    <h2 class="h5 mb-4">081233129966</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email"><span class="fa fa-map-marker-alt"></span> Address</label>
                    <h2 class="h5 mb-4">CitraLand CBD Boulevard, Surabaya, East Java</h2>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email"><span class="fa fa-book"></span> Scholarship</label>
                    <h2 class="h5 mb-4">Beasiswa Prestasi Ekonomi (A)</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email"><span class="fa fa-clock"></span> Time Remaining</label>
                    <h2 class="h5 mb-4">139.3 Hours</h2>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email"><span class="fa fa-graduation-cap"></span> GPA</label>
                    <h2 class="h5 mb-4">4.00</h2>
                </div>
            </div>
        </form>
    </div>
</div>

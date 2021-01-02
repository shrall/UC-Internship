{{-- ini yang ngasi general information  --}}
<div class="card card-body bg-white border-light shadow-sm mb-4">
    <h2 class="h4 mb-4">General information</h2>
    <form>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div>
                    <label for="full_name">Full Name</label>
                    <h2 class="h5 mb-4">{{$lecturer->detailable->name}}</h2>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div>
                    <label for="nim">NIP</label>
                    <h2 class="h5 mb-4">{{$lecturer->detailable->nip}}</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-3">
                <label for="email"><span class="fa fa-envelope"></span> E-Mail</label>
                <h2 class="h5 mb-4">{{$lecturer->detailable->email}}</h2>
            </div>
            <div class="col-md-6 mb-3">
                <label for="email"><span class="fab fa-whatsapp"></span> Phone Number</label>
                <h2 class="h5 mb-4">{{$lecturer->detailable->phone}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="email"><span class="fa fa-map-marker-alt"></span> Line ID:</label>
                <h2 class="h5 mb-4">{{$lecturer->detailable->line_account}}</h2>
            </div>
            <div class="col-md-6 mb-3">
                <label for="email"><span class="fa fa-clock"></span> Ongoing Projects</label>
                <h2 class="h5 mb-4">...</h2>
            </div>
        </div>
    </form>
</div>

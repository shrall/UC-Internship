<div class="col-12 col-xl-8">
    <div class="card card-body bg-white border-light shadow-sm mb-4">
        <h2 class="h4 mb-4">General information</h2>
        <form>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div>
                        <label for="full_name">Full Name</label>
                        <h2 class="h5 mb-4">{{ $lecturer->detailable->name }}</h2>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div>
                        <label for="nim">NIP</label>
                        <h2 class="h5 mb-4">{{ $lecturer->detailable->nip }}</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 mb-3">
                    <label for="email"><span class="fa fa-envelope mr-2"></span>E-Mail</label>
                    <h2 class="h5 mb-4">{{ $lecturer->email }}</h2>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email"><span class="fab fa-whatsapp mr-2"></span>Phone Number</label>
                    <h2 class="h5 mb-4">{{ $lecturer->detailable->phone }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="email"><span class="fab fa-line mr-2"></span>Line ID</label>
                        <h2 class="h5 mb-4">{{$lecturer->detailable->line_account}}</h2>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email"><span class="fa fa-venus-mars mr-2"></span>Gender</label>
                    @if ($lecturer->detailable->gender == 'M')
                    <h2 class="h5 mb-4">Male</h2>
                    @endif
                    @if ($lecturer->detailable->gender == 'F')
                    <h2 class="h5 mb-4">Female</h2>
                    @endif
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <label for="email"><span class="fa fa-clipboard-list mr-2"></span>Total Projects</label>
                        <h2 class="h5 mb-4">{{count($lecturer->projects)}} Project(s)</h2>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email"><span class="fa fa-clock mr-2"></span>Ongoing Projects</label>
                        <h2 class="h5 mb-4">{{count($lecturer->projects->where('status', 1))}} Project(s)</h2>
                </div>
            </div>
        </form>
    </div>
</div>

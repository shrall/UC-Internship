{{-- ini yang nunjukin desc singkat dari student kalo di klik namanya di table --}}
<div class="modal fade" id="modal-student-{{ $user->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modal-student-{{ $user->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">General information</h2>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="full_name">Full Name</label>
                                <h2 class="h5 mb-4"> {{ $user->detailable->name }}</h2>
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
                            <h2 class="h5 mb-4">{{ $user->detailable->email }}</h2>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="nim"><span class="fa fa-building"></span> Department</label>
                                <h2 class="h5 mb-4">{{ $user->detailable->department->name }} -
                                    ({{ $user->detailable->department->initial }})</h2>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

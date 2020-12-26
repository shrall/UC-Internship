{{-- ngasi tau picnya siapa  --}}
<div class="card card-body bg-white border-light shadow-sm mb-4">
    <h2 class="h4 mb-4">PIC</h2>
    <div class="d-xl-flex align-items-center">
        <div class="user-avatar large-avatar mb-3 mr-3">
            <img class="rounded"
                 src="{{ asset('assets/img/team/profile-picture-1.jpg') }}"
                 alt="change avatar">
        </div>
        <div class="row align-items-center pb-4 mb-4">
            <div class="col-auto">
                <a href="{{ route('supervisor.student.show', 1) }}">
                    <h3 class="h5">Marshall Ovierdo Kurniawan</h3>
                </a>
                <span class="text-700">Informatics (IMT)</span>
                <div class="small font-weight-bold mt-1">
                    <span class="fa fa-envelope"></span> E-Mail : movierdo@ciputra.ac.id
                </div>
                <span class="small font-weight-bold">
                            <span class="fab fa-whatsapp"></span> WA : 08123456789
                        </span>
            </div>
        </div>
    </div>
</div>

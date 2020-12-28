{{-- ngasi detail dari supervisornya  --}}
<div class="card card-body bg-white border-light shadow-sm mb-4">
    <h2 class="h4 mb-4">Supervisor</h2>
    <div class="d-xl-flex align-items-center">
        <div class="user-avatar large-avatar mb-3 mr-3">
            <img class="rounded"
                 src="{{ asset('assets/img/team/profile-picture-3.jpg') }}"
                 alt="change avatar">
        </div>
        <div class="row align-items-center pb-4 mb-4">
            <div class="col-auto">
                <a href="{{ route('supervisor.user.show', $project->supervisor_id) }}">
                    <h3 class="h5">{{ $project->supervisor->detailable->name }}</h3>
                </a>
                <span class="text-700">Organized by {{ $project->supervisor->detailable->department->name}} ({{ $project->supervisor->detailable->department->initial}})</span>
                <div class="small font-weight-bold mt-1">{{ $project->supervisor->detailable->title->name }}</div>
                <div class="small font-weight-bold mt-1">
                    <span class="fa fa-envelope"></span> E-Mail: {{ $project->supervisor->detailable->email}}
                </div>
                <span class="small font-weight-bold">
                            <span class="fab fa-whatsapp"></span> WA : {{ $project->supervisor->detailable->phone }}
                        </span>
            </div>
        </div>
    </div>
</div>

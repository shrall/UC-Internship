<div class="col-12 col-lg-6">
    <div class="card card-body bg-white border-light shadow-sm">
        <h2 class="h4 mb-4">Supervisor</h2>
        <div class="d-xl-flex align-items-center">
            <div class="user-avatar large-avatar mb-3 mr-3">
                @if ($project->supervisor->detailable->photo != null)
                    <img src="{{ asset('profile_picture/supervisor/' . $project->supervisor->detailable->photo) }}"
                        class="rounded" alt="Avatar">
                @else
                    <img src="{{ asset('assets/img/team/profile-picture-1.jpg') }}" class="rounded" alt="Avatar">
                @endif
            </div>
            <div class="pb-4 mb-4 mx-0">
                <div class="col-auto">
                    @if ($project->supervisor->detailable_type == 'App\Models\Staff')
                        <a href="{{ route('supervisor.staff.show', $project->supervisor_id) }}">
                            <h3 class="h5">{{ $project->supervisor->detailable->name }}</h3>
                        </a>
                    @endif
                    @if ($project->supervisor->detailable_type == 'App\Models\Lecturer')
                        <a href="{{ route('supervisor.lecturer.show', $project->supervisor_id) }}">
                            <h3 class="h5">{{ $project->supervisor->detailable->name }}</h3>
                        </a>
                    @endif
                    <span class="text-700">Organized by {{ $project->supervisor->detailable->department->name }}
                        ({{ $project->supervisor->detailable->department->initial }})</span>
                    <div class="small font-weight-bold mt-1">{{ $project->supervisor->detailable->title->name }}
                        at
                        {{ $project->supervisor->detailable->department->name }}
                    </div>
                    <div class="small font-weight-bold mt-1">
                        <span class="fa fa-envelope"></span> E-Mail :
                        {{ $project->supervisor->detailable->email }}
                    </div>
                    <span class="small font-weight-bold">
                        <span class="fab fa-whatsapp"></span> WA : {{ $project->supervisor->detailable->phone }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

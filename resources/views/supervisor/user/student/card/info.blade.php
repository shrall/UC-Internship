<div class="col-12 col-xl-4">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-light text-center p-0">
                <div class="profile-cover rounded-top" data-background="{{ asset('assets/img/profile-cover.jpg') }}">
                </div>
                <div class="card-body pb-5">
                    @if ($student->detailable->photo != null)
                        <img src="{{ asset('profile_picture/student/' . $student->detailable->photo) }}"
                            class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Profile Picture">
                    @else
                        <img src="{{ asset('assets/img/team/profile-picture-1.jpg') }}"
                            class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Profile Picture">
                    @endif
                    <h4 class="h3">{{ $student->detailable->name }}</h4>
                    @if ($student->detailable->gender == 'M')
                        <h5 class="font-weight-normal">Student - Male</h5>
                    @endif
                    @if ($student->detailable->gender == 'F')
                        <h5 class="font-weight-normal">Student - Female</h5>
                    @endif
                    <p class="text-gray mb-4">{{ $student->detailable->department->name }}
                        ({{ $student->detailable->department->initial }}) - Class of {{ $student->detailable->batch }}
                    </p>
                    <a class="btn btn-sm btn-secondary" href="{{ route('supervisor.history.show', $student->id) }}">
                        <span class="fa fa-history"></span> Time History
                    </a>
                    @if ($student->info->cv != null)
                        <a class="btn btn-sm btn-tertiary mt-1" href="{{ asset('cv/' . $student->info->cv) }}">
                            <span class="fa fa-file-pdf mr-2"></span>CV / Portfolio
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

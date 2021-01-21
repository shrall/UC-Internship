<div class="col-12 col-xl-4">
    <div class="row">
        <div class="col-12">
            <div class="card border-light text-center p-0">
                <div class="profile-cover rounded-top" data-background="{{ asset('assets/img/profile-cover.jpg') }}">
                </div>
                <div class="card-body">
                    @if ($user->detailable->photo != null)
                        <img src="{{ asset('profile_picture/student/' . $user->detailable->photo) }}"
                            class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Profile Picture">
                    @else
                        <img src="{{ asset('assets/img/team/profile-picture-1.jpg') }}"
                            class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Profile Picture">
                    @endif
                    <h4 class="h3">{{ $user->detailable->name }}</h4>
                    @if ($user->detailable->gender == 'M')
                        <h5 class="font-weight-normal">Student - Male</h5>
                    @endif
                    @if ($user->detailable->gender == 'F')
                        <h5 class="font-weight-normal">Student - Female</h5>
                    @endif
                    <p class="text-gray mb-4">{{ $user->detailable->department->name }}
                        ({{ $user->detailable->department->initial }}) - Class of
                        {{ $user->detailable->batch }}
                    </p>
                    <a class="btn btn-sm btn-primary" href="{{ route('student.user.edit', $user->id) }}">
                        <span class="fa fa-edit"></span> Edit Profile
                    </a>
                    <a class="btn btn-sm btn-secondary" href="{{ route('student.history.show', $user->id) }}">
                        <span class="fa fa-history"></span> Time History
                    </a>
                    <br>
                    @if ($user->info->cv != null)
                        <a class="btn btn-sm btn-tertiary mt-1" href="{{ asset('cv/' . $user->info->cv) }}">
                            <span class="fa fa-file-pdf mr-2"></span>CV / Portfolio
                        </a>
                    @else
                        <a class="btn btn-sm btn-tertiary mt-1" href="{{ route('student.user.edit', Auth::id()) }}">
                            <span class="fa fa-upload mr-2"></span>Upload a CV / Portfolio
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

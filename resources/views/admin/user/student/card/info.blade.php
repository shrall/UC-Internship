<div class="col-12 col-xl-4">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-light text-center p-0">
                <div class="profile-cover rounded-top"
                    data-background="{{ asset('assets/img/profile-cover.jpg') }}"></div>
                <div class="card-body pb-5">
                    <img @if ($student->detailable->photo != null)
                    src="/profile_picture/student/{{$student->detailable->photo}}" @else
                    src="{{ asset('assets/img/team/profile-picture-1.jpg') }}" @endif
                    class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Profile Picture">
                    <h4 class="h3">{{ $student->detailable->name }}</h4>
                    @if ($student->detailable->gender == 'M')
                    <h5 class="font-weight-normal">Student - Male</h5>
                    @endif
                    @if ($student->detailable->gender == 'F')
                    <h5 class="font-weight-normal">Student - Female</h5>
                    @endif
                    <p class="text-gray mb-4">{{ $student->detailable->department->name }}
                        ({{ $student->detailable->department->initial }}) - Class of {{$student->detailable->batch}}</p>
                    <a class="btn btn-sm btn-primary"
                        href="{{ route('admin.student.edit', $student->id) }}">
                        <span class="fa fa-edit"></span> Edit Profile
                    </a>
                    <a class="btn btn-sm btn-secondary"
                        href="{{ route('admin.history.show', $student->history->id) }}">
                        <span class="fa fa-history"></span> Time History
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

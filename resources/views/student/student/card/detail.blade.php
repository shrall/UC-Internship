{{-- ini yang nunjukin mukanya student with edit profile button --}}
{{-- tambahin check history(ini belum ada di uastemplate. check bagian admin uastemplate) --}}
{{-- tambahin export di deketnya edit sm history juga  --}}

<div class="col-12 col-xl-4">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="card border-light text-center p-0">
                <div class="profile-cover rounded-top"
                     data-background="{{ asset('assets/img/profile-cover.jpg') }}"
                     style="height: 146.5px"></div>
                <div class="card-body pb-3">
                    <img
                        @if ($user->detailable->photo != null)
                        src="/profile_picture/student/{{$user->detailable->photo}}" @else
                        src="{{ asset('assets/img/team/profile-picture-1.jpg') }}" @endif
                        class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Profile Picture"
                        style="height: 8rem; width: 8rem; min-height: 8rem; min-width: 8rem">
                    <h4 class="h3">{{ $user->detailable->name }}</h4>
                    @if ($user->detailable->gender == 'M')
                        <h5 class="font-weight-normal">Student - Male</h5>
                    @endif
                    @if ($user->detailable->gender == 'F')
                        <h5 class="font-weight-normal">Student - Female</h5>
                    @endif
                    <p class="text-gray mb-4">{{ $user->detailable->department->name }}
                        ({{ $user->detailable->department->initial }}) - Class of {{$user->detailable->batch}}</p>
                    <a class="btn btn-sm btn-primary mb-3" href="{{ route('student.user.edit', Auth::id()) }}">
                        <span class="fa fa-edit"></span> Edit Profile
                    </a>
                    <a class="btn btn-sm btn-secondary mb-3" href="{{route('student.history.show', $user->id)}}">
                        <span class="fa fa-history"></span> Time History
                    </a>
                </div>
            </div>
            @include('student.student.card.cv')
        </div>
    </div>
</div>

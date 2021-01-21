<div class="card border-light text-center p-0">
    <div class="profile-cover rounded-top" data-background="{{ asset('assets/img/profile-cover.jpg') }}"></div>
    <div class="card-body pb-5">
        @if ($lecturer->detailable->photo != null)
            <img src="{{ asset('profile_picture/supervisor/' . $lecturer->detailable->photo) }}"
                class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Profile Picture">
        @else
            <img src="{{ asset('assets/img/team/profile-picture-1.jpg') }}"
                class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Profile Picture">
        @endif
        <h4 class="h3">{{ $lecturer->detailable->name }}</h4>
        <h4 class="h3">{{ $lecturer->detailable->title->name }}</h4>
        <p class="text-gray mb-4">{{ $lecturer->detailable->department->name }}
            ({{ $lecturer->detailable->department->initial }})</p>
        @if (Auth::User()->id == $lecturer->id)
            <a class="btn btn-sm btn-primary" href="{{ route('supervisor.user.edit', $lecturer->id) }}">
                <span class="fa fa-edit"></span> Edit Profile
            </a>
        @endif
    </div>
</div>

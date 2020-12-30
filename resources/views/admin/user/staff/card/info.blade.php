<div class="col-12 col-xl-4">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-light text-center p-0">
                <div class="profile-cover rounded-top"
                    data-background="{{ asset('assets/img/profile-cover.jpg') }}"></div>
                <div class="card-body pb-5">
                    @if($staff->detailable->photo != null)
                        <img src="/profile_picture/staff/{{ $staff->detailable->photo }}"
                            class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Profile Picture">
                    @else
                        <img src="{{ asset('assets/img/team/profile-picture-1.jpg') }}"
                            class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Profile Picture">
                    @endif
                    <h4 class="h3">{{ $staff->detailable->name }}</h4>
                    <h5 class="font-weight-normal">{{ $staff->detailable->title->name }}</h5>
                    <p class="text-gray mb-4">{{ $staff->detailable->department->name }}
                        ({{ $staff->detailable->department->initial }})</p>
                    <a class="btn btn-sm btn-primary"
                        href="{{ route('admin.staff.edit', $staff->id) }}">
                        <span class="fa fa-edit"></span> Edit Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

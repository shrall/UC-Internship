{{-- ini yang ada mukanya  --}}
{{-- kalo ini bukan profile dari user yang login, gada tombol editnya --}}
<div class="card border-light text-center p-0">
    <div class="profile-cover rounded-top"
         data-background="{{ asset('assets/img/profile-cover.jpg') }}"></div>
    <div class="card-body pb-5"><img
            src="{{ asset('assets/img/team/profile-picture-3.jpg') }}"
            class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
        <h4 class="h3">{{$staff->detailable->name}}</h4>
        <h4 class="h3">{{$staff->detailable->title->name}}</h4>
        {{--                            <h5 class="font-weight-normal">Head Department</h5>--}}
        <p class="text-gray mb-4">{{$staff->detailable->department->name}} ({{$staff->detailable->department->initial}})</p>

        @if(Auth::User()->id == $staff->id)
            <a class="btn btn-sm btn-primary" href="{{ route('supervisor.staff.edit', $staff->id) }}">
                <span class="fa fa-edit"></span> Edit Profile
            </a>
        @endif
    </div>
</div>

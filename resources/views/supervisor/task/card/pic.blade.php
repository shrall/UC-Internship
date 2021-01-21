<div class="col-12 col-lg-6">
    <div class="card card-body bg-white border-light shadow-sm mb-4">
        <h2 class="h4 mb-4">PIC</h2>
        <div class="d-xl-flex align-items-center">
            <div class="user-avatar large-avatar mb-3 mr-3">
                @if ($task->projectuser->user->detailable->photo != null)
                    <img src="{{ asset('profile_picture/student/' . $task->projectuser->user->detailable->photo) }}"
                        class="rounded" alt="Avatar">
                @else
                    <img src="{{ asset('assets/img/team/profile-picture-1.jpg') }}" class="rounded" alt="Avatar">
                @endif
            </div>
            <div class="pb-4 mb-4 mx-0">
                <div class="col-auto">
                    <a href="{{ route('supervisor.student.show', $task->projectuser->uci_user_id) }}">
                        <h3 class="h5">{{ $task->projectuser->user->detailable->name }}</h3>
                    </a>
                    <span class="text-700">{{ $task->projectuser->user->detailable->department->name }}
                        ({{ $task->projectuser->user->detailable->department->initial }})</span>
                    <div class="small font-weight-bold mt-1">
                        <span class="fa fa-envelope"></span> E-Mail : {{ $task->projectuser->user->email }}
                    </div>
                    <span class="small font-weight-bold">
                        <span class="fab fa-whatsapp"></span> WA :
                        {{ $task->projectuser->user->detailable->phone }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

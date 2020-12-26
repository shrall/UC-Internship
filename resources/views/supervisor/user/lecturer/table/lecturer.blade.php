{{-- disini ngelist semua lecturer --}}
<div class="card card-body border-light shadow-sm table-wrapper table-responsive">
    <table class="table user-table table-hover align-items-center">
        <thead>
        <tr>
            <th class="border-bottom">NIK</th>
            <th class="border-bottom">Name</th>
            <th class="border-bottom">Department</th>
            <th class="border-bottom">Title</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td><span class="font-weight-normal">{{$user->nip}}</span></td>
                <td><a href="{{ route('supervisor.staff.show', $user->id) }}" class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/team/profile-picture-3.jpg') }}"
                             class="user-avatar rounded-circle mr-3" alt="Avatar">
                        <div class="d-block">
                            <span class="font-weight-bold">{{$user->name}}</span>
                            <div class="small text-gray">{{$user->email}}</div>
                        </div>
                    </a>
                </td>
                <td><span class="font-weight-normal">{{$user->department->name}}</span></td>
                <td><span class="font-weight-normal">{{$user->title->name}}</span></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

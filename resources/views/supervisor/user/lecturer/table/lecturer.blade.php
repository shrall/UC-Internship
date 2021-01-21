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
            @foreach ($users as $user)
                <tr>
                    <td><span class="font-weight-normal">{{ $user->detailable->nip }}</span></td>
                    <td><a href="{{ route('supervisor.lecturer.show', $user->id) }}" class="d-flex align-items-center">
                            @if ($user->detailable->photo != null)
                                <img src="{{ asset('profile_picture/supervisor/' . $user->detailable->photo) }}"
                                    class="user-avatar rounded-circle mr-3" alt="Avatar">
                            @else
                                <img src="{{ asset('assets/img/team/profile-picture-1.jpg') }}"
                                    class="user-avatar rounded-circle mr-3" alt="Avatar">
                            @endif
                            <div class="d-block">
                                <span class="font-weight-bold">{{ $user->detailable->name }}</span>
                                <div class="small text-gray">{{ $user->detailable->email }}</div>
                            </div>
                        </a>
                    </td>
                    <td><span class="font-weight-normal">{{ $user->detailable->department->name }}</span></td>
                    <td><span class="font-weight-normal">{{ $user->detailable->title->name }}</span></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

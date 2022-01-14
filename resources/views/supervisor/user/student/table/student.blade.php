<div class="card card-body border-light shadow-sm table-wrapper table-responsive">
    <table class="table user-table table-hover align-items-center">
        <thead>
            <tr>
                <th class="border-bottom">NIM</th>
                <th class="border-bottom">Name</th>
                <th class="border-bottom">Department</th>
                <th class="border-bottom">Time Remaining</th>
                <th class="border-bottom">Scholarship</th>
                <th class="border-bottom">GPA</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td><span class="font-weight-normal">{{ $user->detailable->nim }}</span></td>
                    <td>
                        <a style="font-weight: 700; text-decoration: underline;"
                            href="{{ route('supervisor.student.show', $user->id) }}"
                            class="d-flex align-items-center text-info">
                            @if ($user->detailable->photo != null)
                                <img src="{{ asset('profile_picture/student/' . $user->detailable->photo) }}"
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
                    <td><span class="font-weight-normal">{{ $user->info->time_remaining }}</span></td>
                    <td><span class="font-weight-normal">{{ $user->info->scholarship->name ?? 'None' }}
                            ({{ $user->info->scholarship->grade ?? '-' }})</span></td>
                    <td><span
                            class="font-weight-normal">{{ number_format((float) $user->info->gpa, 2, '.', '') }}</span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

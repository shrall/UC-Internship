{{-- disini ngelist semua student --}}
<div class="card card-body border-light shadow-sm table-wrapper table-responsive">
    <table class="table user-table table-hover align-items-center">
        <thead>
        <tr>
            <th class="border-bottom">NIM</th>
            <th class="border-bottom">Name</th>
            <th class="border-bottom">Department</th>
            <th class="border-bottom">Time Reimaining</th>
            <th class="border-bottom">Scholarship</th>
            <th class="border-bottom">GPA</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td><span class="font-weight-normal">{{$user->nim}}</span></td>
                <td><a href="{{ route('supervisor.student.show', $user->id) }}" class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/team/profile-picture-3.jpg') }}"
                             class="user-avatar rounded-circle mr-3" alt="Avatar">
                        <div class="d-block">
                            <span class="font-weight-bold">{{$user->name}}</span>
                            <div class="small text-gray">{{$user->email}}</div>
                        </div>
                    </a>
                </td>
                <td><span class="font-weight-normal">{{$user->department->name}}</span></td>
                <td><span class="font-weight-normal">139 Hours</span></td>
                <td><span class="font-weight-normal">Beasiswa Sosial Ekonomi (A)</span></td>
                <td><span class="font-weight-normal">4.00</span></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

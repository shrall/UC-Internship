<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
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
                        @foreach($students as $student)
                            <!-- Item -->
                            <tr>
                                <td><span class="font-weight-normal">{{ $student->detailable->nim }}</span></td>
                                <td><a href="{{ route('admin.student.show', $student->id) }}"
                                        class="d-flex align-items-center">
                                        <img @if ($student->detailable->photo != null)
                                        src="/profile_picture/student/{{$student->detailable->photo}}" @else
                                        src="{{ asset('assets/img/team/profile-picture-1.jpg') }}" @endif
                                        class="user-avatar rounded-circle mr-3" alt="Avatar">
                                        <div class="d-block">
                                            <span class="font-weight-bold">{{ $student->detailable->name }}</span>
                                            <div class="small text-gray">{{ $student->email }}</div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <span class="font-weight-normal">{{ $student->detailable->department->name }}
                                        ({{ $student->detailable->department->initial }})</span>
                                </td>
                                <td>
                                    <span class="font-weight-normal">{{ $student->info->time_remaining }}
                                        Hours</span>
                                </td>
                                <td>
                                    <span class="font-weight-normal">{{ $student->info->scholarship->name }}
                                        ({{ $student->info->scholarship->grade }})</span>
                                </td>
                                <td><span
                                        class="font-weight-normal">{{ number_format((float)$student->info->gpa, 2, '.', '') }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

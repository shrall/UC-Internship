<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-header border-0 pb-2">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h4"><i class="fas fa-user mr-2"></i>Student List</h2>
                    </div>
                </div>
            </div>
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="border-bottom">NIM</th>
                            <th class="border-bottom">Name</th>
                            <th class="border-bottom">Department</th>
                            <th class="border-bottom">Time Remaining</th>
                            <th class="border-bottom">GPA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($scholarship->infos as $info)
                            <!-- Item -->
                            <tr>
                                <td><span class="font-weight-normal">{{ $info->user->detailable->nim }}</span></td>
                                <td>
                                    <a style="font-weight: 700; text-decoration: underline;"
                                        href="{{ route('admin.student.show', $info->user->id) }}"
                                        class="d-flex align-items-center text-info">
                                        @if ($info->user->detailable->photo != null)
                                            <img src="{{ asset('profile_picture/student/' . $info->user->detailable->photo) }}"
                                                class=" user-avatar rounded-circle mr-3" alt="Avatar">
                                        @else
                                            <img src="{{ asset('assets/img/team/profile-picture-1.jpg') }}"
                                                class="user-avatar rounded-circle mr-3" alt="Avatar">
                                        @endif
                                        <div class="d-block">
                                            <span class="font-weight-bold">{{ $info->user->detailable->name }}</span>
                                            <div class="small text-gray">{{ $info->user->detailable->email }}</div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <span class="font-weight-normal">{{ $info->user->detailable->department->name }}
                                        ({{ $info->user->detailable->department->initial }})</span>
                                </td>
                                <td>
                                    <span class="font-weight-normal">{{ $info->user->info->time_remaining }}
                                        Hours</span>
                                </td>
                                <td><span
                                        class="font-weight-normal">{{ number_format((float) $info->user->info->gpa, 2, '.', '') }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

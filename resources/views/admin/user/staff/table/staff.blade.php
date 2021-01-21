<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="border-bottom">NIP</th>
                            <th class="border-bottom">Name</th>
                            <th class="border-bottom">Department</th>
                            <th class="border-bottom">Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($staffs as $staff)
                            <!-- Item -->
                            <tr>
                                <td><span class="font-weight-normal">{{ $staff->detailable->nip }}</span></td>
                                <td><a href="{{ route('admin.staff.show', $staff->id) }}"
                                        class="d-flex align-items-center">
                                        @if ($staff->detailable->photo != null)
                                            <img src="{{ asset('profile_picture/supervisor/' . $staff->detailable->photo) }}"
                                                class="user-avatar rounded-circle mr-3" alt="Avatar">
                                        @else
                                            <img src="{{ asset('assets/img/team/profile-picture-1.jpg') }}"
                                                class="user-avatar rounded-circle mr-3" alt="Avatar">
                                        @endif
                                        <div class="d-block">
                                            <span class="font-weight-bold">{{ $staff->detailable->name }}</span>
                                            <div class="small text-gray">{{ $staff->detailable->email }}</div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <span class="font-weight-normal">{{ $staff->detailable->department->name }}
                                        ({{ $staff->detailable->department->initial }})</span>
                                </td>
                                <td><span class="font-weight-normal">{{ $staff->detailable->title->name }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

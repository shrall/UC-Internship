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
                        @foreach($lecturers as $lecturer)
                            <!-- Item -->
                            <tr>
                                <td><span class="font-weight-normal">{{ $lecturer->detailable->nip }}</span></td>
                                <td><a href="{{ route('admin.lecturer.show', $lecturer->id) }}"
                                        class="d-flex align-items-center">
                                        @if($lecturer->detailable->photo != null)
                                            <img src="/profile_picture/lecturer/{{ $lecturer->detailable->photo }}"
                                                class="user-avatar rounded-circle mr-3" alt="Avatar">
                                        @else
                                            <img src="{{ asset('assets/img/team/profile-picture-1.jpg') }}"
                                                class="user-avatar rounded-circle mr-3" alt="Avatar">
                                        @endif
                                        <div class="d-block">
                                            <span class="font-weight-bold">{{ $lecturer->detailable->name }}</span>
                                            <div class="small text-gray">{{ $lecturer->detailable->email }}</div>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <span class="font-weight-normal">{{ $lecturer->detailable->department->name }}
                                        ({{ $lecturer->detailable->department->initial }})</span>
                                </td>
                                <td><span
                                        class="font-weight-normal">{{ $lecturer->detailable->title->name }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

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
                        <th class="border-0" width="25px">NIM</th>
                        <th class="border-0">Name</th>
                        <th class="border-0">Department</th>
                        <th class="border-0">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($project->works as $user)
                        <!-- Item -->
                        @include('student.project.modal.student')
                        @if($user->pivot->status == 1)
                            <tr>
                                <td>
                                    <a data-toggle="modal" data-target="#modal-student-{{ $user->id }}"
                                       class="text-primary font-weight-bold">{{ $user->detailable->nim }}</a>
                                </td>
                                <td class="font-weight-bold proj-name">
                                    <a data-toggle="modal" data-target="#modal-student-{{ $user->id }}">
                                        {{ $user->detailable->name }}</a>
                                </td>
                                <td>{{ $user->detailable->department->initial }}</td>
                                <td class="text-success">
                                    <span class="fas fa-check"></span>
                                    <span class="font-weight-bold">Accepted</span>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

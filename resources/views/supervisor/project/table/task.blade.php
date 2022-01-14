<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-header border-0 pb-2">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h2 class="h4"><i class="fas fa-tasks mr-2"></i>Task List</h2>
                    </div>
                    <div class="col-6">
                        <div class="d-flex justify-content-end flex-wrap flex-md-nowrap align-items-center pb-2">
                            <div>
                                @if ($project->status == 1)
                                    @include('supervisor.project.modal.task.create')
                                    <a class="btn btn-secondary text-dark mr-2 dropdown-toggle " data-toggle="modal"
                                        data-target="#modal-add-task-{{ $project->id }}">
                                        <span class="fas fa-plus mr-2"></span>New
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="border-0">Name</th>
                            <th class="border-0">PIC</th>
                            <th class="border-0">Status</th>
                            @if ($project->supervisor->id == Auth::id())
                                <th class="border-0">Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($project->projectusers as $pu)
                            @foreach ($pu->tasks as $task)
                                @include('supervisor.project.modal.task.delete')
                                <!-- Item -->
                                <tr>
                                    <td class="align-middle">
                                        <a style="font-weight: 700; text-decoration: underline; font-size: 1rem;" class="text-info"
                                            href="{{ route('supervisor.task.show', $task->id) }}">{{ $task->name }}</a>
                                    </td>
                                    <td class="font-weight-bold proj-name align-middle">
                                        <a
                                            href="{{ route('supervisor.student.show', $task->projectuser->uci_user_id) }}">
                                            {{ $task->projectuser->user->detailable->name }}</a>
                                    </td>
                                    @if ($task->status == 0)
                                        <td class="text-warning align-middle">
                                            <span class="fas fa-clock"></span>
                                            <span class="font-weight-bold">Ongoing</span>
                                        </td>
                                    @endif
                                    @if ($task->status == 1)
                                        <td class="text-success align-middle">
                                            <span class="fas fa-check"></span>
                                            <span class="font-weight-bold">Completed</span>
                                        </td>
                                    @endif
                                    @if ($project->supervisor->id == Auth::id())
                                        @include('supervisor.project.modal.task.edit')
                                        <td>
                                            <div class="btn-group">
                                                <button
                                                    class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="icon icon-sm">
                                                        <span class="fas fa-ellipsis-h icon-dark"></span>
                                                    </span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a style="font-weight: 700;" class="dropdown-item"
                                                        href="{{ route('supervisor.task.show', $task->id) }}">
                                                        <span class="fas fa-eye mr-2"></span>View Details
                                                    </a>
                                                    @if ($project->status == '1')
                                                        @if ($task->status == '0')
                                                            <a class="dropdown-item" data-toggle="modal"
                                                                data-target="#modal-edit-task-{{ $task->id }}">
                                                                <span class="fas fa-cog mr-2"></span>Edit Task
                                                            </a>
                                                        @endif
                                                        @if ($task->duration == 0)
                                                            <a class="dropdown-item text-danger" data-toggle="modal"
                                                                data-target="#modal-delete-{{ $task->id }}">
                                                                <span class="fas fa-ban mr-2"></span>Delete
                                                            </a>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

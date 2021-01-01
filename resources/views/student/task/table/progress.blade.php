@include('student.task.modal.progress.create')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-4">
    <div>
        <a class="btn btn-secondary" data-toggle="modal" data-target="#modal-progress-create">
            <span class="fas fa-plus mr-2"></span>Add Progress
        </a>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-header border-0 pb-2">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h4"><i class="fas fa-spinner mr-2"></i>Progress List</h2>
                    </div>
                </div>
            </div>
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="border-0">Description</th>
                            <th class="border-0" width="150px">Time Start</th>
                            <th class="border-0" width="150px">Time End</th>
                            <th class="border-0" width="150px">Status</th>
                            <th class="border-0" width="150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($task->progresses as $progress)
                            <!-- Item -->
                            @include('student.task.modal.progress.detail')
                            @include('student.task.modal.progress.delete')
                            <tr>
                                <td>
                                    <a data-toggle="modal"
                                        data-target="#modal-progress-{{ $progress->id }}">{{ $progress->description }}</a>
                                </td>
                                <td>
                                    {{ date('d-m-Y, H:i', strtotime($progress->time_start)) }}
                                </td>
                                <td>
                                    {{ date('d-m-Y, H:i', strtotime($progress->time_end)) }}
                                </td>
                                @if($progress->status == 0)
                                    <td class="text-warning">
                                        <span class="fas fa-clock"></span>
                                        <span class="font-weight-bold">Pending</span>
                                    </td>
                                @endif
                                @if($progress->status == 1)
                                    <td class="text-success">
                                        <span class="fas fa-check"></span>
                                        <span class="font-weight-bold">Approved</span>
                                    </td>
                                @endif
                                @if($progress->status == 2)
                                    <td class="text-danger">
                                        <span class="fas fa-times"></span>
                                        <span class="font-weight-bold">Declined</span>
                                    </td>
                                @endif

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
                                            <a class="dropdown-item" data-toggle="modal"
                                                data-target="#modal-progress-{{ $progress->id }}"><span
                                                    class="fas fa-eye mr-2"></span>View
                                                Details</a>
                                            <a class="dropdown-item text-danger" data-toggle="modal"
                                                data-target="#modal-delete-{{ $progress->id }}">
                                                <span class="fas fa-ban mr-2"></span>Delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($task->progresses as $progress)
                            <!-- Item -->
                            @include('supervisor.task.modal.progress')
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
                                @if ($progress->status == 0)
                                    <td class="text-warning">
                                        <span class="fas fa-clock"></span>
                                        <span class="font-weight-bold">Pending</span>
                                    </td>
                                @endif
                                @if ($progress->status == 1)
                                    <td class="text-success">
                                        <span class="fas fa-check"></span>
                                        <span class="font-weight-bold">Approved</span>
                                    </td>
                                @endif
                                @if ($progress->status == 2)
                                    <td class="text-danger">
                                        <span class="fas fa-times"></span>
                                        <span class="font-weight-bold">Declined</span>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

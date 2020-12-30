{{-- ini ngelist semua task yang ada di project tsb --}}
{{-- disini include SEMUA modal.task <- belum ada di uastemplate. di uastemplate kemarin view  --}}

{{-- kalo bukan user yang login yang punya projectnya, hide semua actionnya  --}}
<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="border-0">Name</th>
                        <th class="border-0">PIC</th>
                        <th class="border-0">Status</th>
                        <th class="border-0">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($project->projectusers as $pu)
                        @foreach($pu->tasks as $task)
                            <!-- Item -->
                            <tr>
                                <td class="align-middle">
                                    <a href="{{ route('supervisor.task.show', $task->id) }}">{{ $task->name }}</a>
                                </td>
                                <td class="font-weight-bold proj-name align-middle">
                                    <a href="{{ route('supervisor.student.show', $task->projectuser->uci_user_id) }}">
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
                                <td class="align-middle">
                                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                                        <div>
                                            <a class="btn btn-secondary text-white mr-2 dropdown-toggle" data-toggle="modal" data-target="#modal-edit-task-{{$project->id}}" href="{{ route('supervisor.task.edit', $task->id) }}">
                                                <span class="fa fa-cog"></span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

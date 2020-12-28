{{-- ini table yang nunjukin semua task dari suatu project di detail.blade.php --}}
{{-- disini include modal.student  --}}

<div class="card card-body border-light shadow-sm table-wrapper table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th class="border-0" width="25px">#</th>
            <th class="border-0">Name</th>
            <th class="border-0">PIC</th>
            <th class="border-0">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($project->projectusers as $pu)
            @foreach($pu->tasks as $task)
                <!-- Item -->
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>
                        <a href="{{ route('student.task.show', $task->id) }}">{{ $task->name }}</a>
                    </td>
                    <td class="font-weight-bold proj-name">
                            {{ $task->projectuser->user->detailable->name }}
                    </td>
                    @if ($task->status == 0)
                        <td class="text-warning">
                            <span class="fas fa-clock"></span>
                            <span class="font-weight-bold">Ongoing</span>
                        </td>
                    @endif
                    @if ($task->status == 1)
                        <td class="text-success">
                            <span class="fas fa-check"></span>
                            <span class="font-weight-bold">Completed</span>
                        </td>
                    @endif
                </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
</div>

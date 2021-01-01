{{-- ini table yang nunjukin semua task yang dipunya sama student  --}}
{{-- kolom pic ganti project name aja  --}}
{{-- tambahin duration disini  --}}
<div class="card border-light shadow-sm">
    <div class="card-header border-0 pb-2">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="h4"><i class="fas fa-clipboard-list"></i> Task List</h2>
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
            </tr>
            </thead>
            <tbody>
            @foreach(Auth::User()->projectusers as $tk)
                @foreach($tk->tasks as $task)
                    <!-- Item -->
                    <tr>
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
</div>


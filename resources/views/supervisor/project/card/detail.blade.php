{{-- disini ngasi detail dari projectnya  --}}

{{-- kalo bukan user yang login yang punya projectnya, hide semua action buat ngeditnya  --}}
<div class="col-12 col-lg-6">
    <div class="card border-light shadow-sm text-center pt-3 pb-4 mb-4 mb-lg-0">
        <div class="card-body">
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group">
                    <a href="{{ route('supervisor.project.edit', $project->id) }}">
                        <button type="button" class="btn btn-sm btn-secondary"><span class="fa fa-cog"></span></button>
                    </a>
                </div>
            </div>
            <h2 class="display-3 mb-2">{{$project->name}}</h2>
            <div class="medium font-weight-bold mt-1">{{$project->id}}</div>
            <div class="medium mt-1">{{$project->description}}</div>
            <div class="medium font-weight-bold mt-1 text-primary">Category :
                @if($project->category == 0)
                    <td><span class="fas fa-calendar-week"></span> Event</td>
                @endif
                @if($project->category == 1)
                    <td><span class="fas fa-school"></span> Education</td>
                @endif
                @if($project->category == 2)
                    <td><span class="fas fa-question-circle"></span> Other</td>
                @endif
            </div>
            <div class="medium font-weight-bold mt-1 text-warning"><span class="fa fa-hourglass-half"></span> Deadline
                :{{$project->deadline}}</div>
            <div class="medium font-weight-bold mt-1 text-info">
                @if($project->status == 0)
                    <td class="text-success">
                        <span class="fa fa-thumbs-up"></span>
                        <span class="font-weight-bold">Available</span>
                    </td>
                @endif
                @if($project->status == 1)
                    <td class="text-success">
                        <span class="fas fa-clock"></span>
                        <span class="font-weight-bold">Ongoing</span>
                    </td>
                @endif
                @if($project->status == 2)
                    <td class="text-success">
                        <span class="fas fa-check"></span>
                        <span class="font-weight-bold">Completed</span>
                    </td>
                @endif
                @if($project->status == 3)
                    <td class="text-warning">
                        <span class="fas fa-warning"></span>
                        <span class="font-weight-bold">Suspended</span>
                    </td>
                @endif

            </div>
        </div>
    </div>
</div>

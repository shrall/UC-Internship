<div class="col-12 col-lg-6">
    <div class="card border-light shadow-sm text-center pt-3 pb-3 mb-4 mb-lg-0">
        <div class="card-body">
            <h2 class="display-3 mb-2">{{ $project->name }}</h2>
            <div class="medium mt-1">{{ $project->description }}</div>
            <div class="medium font-weight-bold mt-1 text-primary">
                @if ($project->category == 0)
                    Category : <span class="fa fa-calendar-week mr-2"></span>Event
                @endif
                @if ($project->category == 1)
                    Category : <span class="fa fa-calendar-week mr-2"></span>Education
                @endif
                @if ($project->category == 2)
                    Category : <span class="fa fa-question-circle mr-2"></span>Other
                @endif
            </div>
            <div class="medium font-weight-bold mt-1 text-warning">
                <span class="fa fa-hourglass-half"></span> Deadline :
                {{ date('d F Y', strtotime($project->deadline)) }}
            </div>
            @if ($project->status == 0)
                <div class="medium font-weight-bold mt-1 text-info">
                    <span class="fa fa-thumbs-up mr-2"></span> Available
                </div>
            @endif
            @if ($project->status == 1)
                <div class="medium font-weight-bold mt-1 text-warning">
                    <span class="fa fa-clock mr-2"></span>Ongoing
                </div>
            @endif
            @if ($project->status == 2)
                <div class="medium font-weight-bold mt-1 text-success">
                    <span class="fa fa-check mr-2"></span>Completed
                </div>
            @endif
            @if ($project->status == 3)
                <div class="medium font-weight-bold mt-1 text-danger">
                    <span class="fa fa-ban mr-2"></span>Suspended
                </div>
            @endif
            @if ($project->status == 0)
            <form class="d-inline" action="{{ route('supervisor.projects.ongoing') }}" method="POST">
                @csrf
                <input name="project_id" type="hidden" value="{{ $project->id }}">
                <input name="supervisor_id" type="hidden" value="{{ $project->supervisor->id }}">
                <button type="submit" class="btn btn-sm btn-success mt-1">
                    <span class="fa fa-play mr-2"></span>Start Project
                </button>
            </form>
            @endif
            @if ($project->status == 1)
            <form class="d-inline" action="{{ route('supervisor.projects.completed') }}" method="POST">
                @csrf
                <input name="project_id" type="hidden" value="{{ $project->id }}">
                <input name="supervisor_id" type="hidden" value="{{ $project->supervisor->id }}">
                <button type="submit" class="btn btn-sm btn-success mt-1">
                    <span class="fa fa-check mr-2"></span>Finish Project
                </button>
            </form>
            @endif
            @if ($project->supervisor->id == Auth::id())
                <a class="btn btn-sm btn-primary mt-1" href="{{ route('supervisor.project.edit', $project->id) }}">
                    <span class="fa fa-cog mr-2"></span>Edit Project
                </a>
            @endif
            @if ($attachmentscount > 0)
                <a class="btn btn-sm btn-secondary mt-1" href="">
{{--                    {{ route('supervisor.projects.zipFile', $project->id) }}--}}
                    <span class="fa fa-file-pdf mr-2"></span>Attachments
                </a>
            @endif
        </div>
    </div>
</div>

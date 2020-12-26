<div class="col-12 col-lg-6">
    <div class="card border-light shadow-sm text-center pt-3 mb-lg-0">
        <div class="card-body">
            <h2 class="display-3 mb-2">{{ $project->name }}</h2>
            <div class="medium font-weight-bold mt-1">Project ID : {{ $project->id }}</div>
            <div class="medium mt-1">{{ $project->description }}</div>
            <div class="medium font-weight-bold mt-1 text-primary">
                @if($project->category == 0)
                    Category : <span class="fa fa-calendar-week mr-2"></span>Event
                @endif
                @if($project->category == 1)
                    Category : <span class="fa fa-calendar-week mr-2"></span>Education
                @endif
                @if($project->category == 2)
                    Category : <span class="fa fa-question-circle mr-2"></span>Other
                @endif
            </div>
            <div class="medium font-weight-bold mt-1 text-warning">
                <span class="fa fa-hourglass-half"></span> Deadline :
                {{ date('d F Y', strtotime($project->deadline)) }}
            </div>
            @if($project->status == 0)
                <div class="medium font-weight-bold mt-1 text-info">
                    <span class="fa fa-thumbs-up mr-2"></span> Available
                </div>
            @endif
            @if($project->status == 1)
                <div class="medium font-weight-bold mt-1 text-warning">
                    <span class="fa fa-clock mr-2"></span>Ongoing
                </div>
            @endif
            @if($project->status == 2)
                <div class="medium font-weight-bold mt-1 text-success">
                    <span class="fa fa-check mr-2"></span>Completed
                </div>
            @endif
            @if($project->status == 3)
                <div class="medium font-weight-bold mt-1 text-danger">
                    <span class="fa fa-ban mr-2"></span>Suspended
                </div>
            @endif
        </div>
    </div>
</div>

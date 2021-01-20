<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-header border-0 pb-2">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h4"><i class="fas fa-clipboard-list mr-2"></i>Project List</h2>
                    </div>
                </div>
            </div>
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="border-0" width="25px">ID</th>
                            <th class="border-0">Project Name</th>
                            <th class="border-0">Category</th>
                            <th class="border-0">Supervisor</th>
                            <th class="border-0">Deadline</th>
                            <th class="border-0">Period</th>
                            <th class="border-0">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(Auth::User()->applies as $project)
                            @if($project->pivot->status != '0')
                                <tr>
                                    <td><a href="{{ route('student.project.show', $project->id) }}"
                                            class="text-primary font-weight-bold">{{ $project->id }}</a></td>
                                    <td class="font-weight-bold proj-name">
                                        <a
                                            href="{{ route('student.project.show', $project->id) }}">{{ $project->name }}</a>
                                    </td>

                                    <td>
                                        @if($project->category == "0")
                                            <span class="fas fa-calendar-week"></span>
                                            <span> Event</span>
                                        @endif
                                        @if($project->category == "1")
                                            <span class="fas fa-school"></span>
                                            <span> Education</span>
                                        @endif
                                        @if($project->category == "2")
                                            <span class="fas fa-question-circle"></span>
                                            <span> Other</span>
                                        @endif
                                    <td>{{ $project->supervisor->detailable->name }}</td>
                                    <td>{{ $project->deadline }}</td>
                                    @if($project->period->term == 0)
                                        <td>{{ date("Y", strtotime($project->period->start)) }}-{{ idate("Y", strtotime($project->period->start))+1 }}
                                            / Odd </td>
                                    @else
                                        <td>{{ idate("Y", strtotime($project->period->end))-1 }}-{{ date("Y", strtotime($project->period->end)) }}
                                            / Even </td>
                                    @endif
                                    <td>
                                        @if($project->status == "0")
                                            <span class="fas fa-stop text-info"></span>
                                            <span class="font-weight-bold text-info">
                                                Available</span>
                                        @endif
                                        @if($project->status == "1")
                                            <span class="fas fa-clock text-warning"></span>
                                            <span class="font-weight-bold text-warning">
                                                Ongoing</span>
                                        @endif
                                        @if($project->status == "2")
                                            <span class="fas fa-check text-success"></span>
                                            <span class="font-weight-bold text-success">
                                                Completed</span>
                                        @endif
                                        @if($project->status == "3")
                                            <span class="fas fa-ban text-danger"></span>
                                            <span class="font-weight-bold text-danger">
                                                Suspended</span>
                                        @endif
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

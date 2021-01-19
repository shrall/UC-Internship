<div class="row mb-3">
    <div class="col-12">
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
                            @if($project->pivot->status == '1')
                                <tr>
                                    <td><a href="{{ route('student.project.show', $project->id) }}"
                                            class="text-primary font-weight-bold">{{ $project->id }}</a></td>
                                    <td class="font-weight-bold proj-name">
                                        <a
                                            href="{{ route('student.project.show', $project->id) }}">{{ $project->name }}</a>
                                    </td>
                                    @if($project->category == 0)
                                        <td><span class="fas fa-calendar-week mr-2"></span>Event</td>
                                    @endif
                                    @if($project->category == 1)
                                        <td><span class="fas fa-school mr-2"></span>Education</td>
                                    @endif
                                    @if($project->category == 2)
                                        <td><span class="fas fa-question-circle mr-2"></span>Other</td>
                                    @endif
                                    <td>{{ $project->supervisor->detailable->name }}</td>
                                    <td>{{ date('d F Y', strtotime($project->deadline)) }}
                                    </td>
                                    @if($project->period->term == 0)
                                        <td>{{ date("Y", strtotime($project->period->start)) }}-{{ idate("Y", strtotime($project->period->start))+1 }}
                                            / Odd </td>
                                    @else
                                        <td>{{ idate("Y", strtotime($project->period->end))-1 }}-{{ date("Y", strtotime($project->period->end)) }}
                                            / Even </td>
                                    @endif
                                    @if($project->status == 0)
                                        <td class="text-info">
                                            <span class="fas fa-thumbs-up"></span>
                                            <span class="font-weight-bold">Available</span>
                                        </td>
                                    @endif
                                    @if($project->status == 1)
                                        <td class="text-warning">
                                            <span class="fas fa-clock"></span>
                                            <span class="font-weight-bold">Ongoing</span>
                                        </td>
                                    @endif
                                    @if($project->status == 2)
                                        <td class="text-success">
                                            <span class="fas fa-check"></span>
                                            <span class="font-weight-bold">Completed</span></td>
                                    @endif
                                    @if($project->status == 3)
                                        <td class="text-danger">
                                            <span class="fas fa-ban"></span>
                                            <span class="font-weight-bold">Suspended</span>
                                        </td>
                                    @endif
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

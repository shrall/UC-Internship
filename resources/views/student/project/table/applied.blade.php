<div class="row">
    <div class="col-12">
        <div class="card border-light shadow-sm">
            <div class="card-header border-0 pb-2">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h4">
                            <span class="fa fa-share-square"></span> Applied Projects
                        </h2>
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
                            <th class="border-0">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(Auth::User()->projectusers as $pu)
                            <tr>
                                <td>
                                    <a href="{{ route('student.project.show', $pu->project->id) }}"
                                        class="text-primary font-weight-bold">{{ $pu->project->id }}</a>
                                </td>
                                <td class="font-weight-bold proj-name">
                                    <a
                                        href="{{ route('student.project.show', $pu->project->id) }}">{{ $pu->project->name }}</a>
                                </td>
                                @if($pu->project->category == 0)
                                    <td><span class="fas fa-calendar-week mr-2"></span>Event</td>
                                @endif
                                @if($pu->project->category == 1)
                                    <td><span class="fas fa-school mr-2"></span>Education</td>
                                @endif
                                @if($pu->project->category == 2)
                                    <td><span class="fas fa-question-circle mr-2"></span>Other</td>
                                @endif
                                <td>{{ $pu->project->supervisor->detailable->name }}</td>
                                <td>{{ date('d F Y', strtotime($pu->project->deadline)) }}
                                </td>
                                @if($pu->status == "0")
                                    <td class="text-warning">
                                        <span class="fas fa-clock"></span>
                                        <span class="font-weight-bold">Pending</span>
                                    </td>
                                @endif
                                @if($pu->status == "1")
                                    <td class="text-success">
                                        <span class="fas fa-check"></span>
                                        <span class="font-weight-bold">Accepted</span>
                                    </td>
                                @endif
                                @if($pu->status == "2")
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

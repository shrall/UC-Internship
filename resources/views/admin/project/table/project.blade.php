<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="border-0" width="25px">#</th>
                            <th class="border-0">Project Name</th>
                            <th class="border-0">Category</th>
                            <th class="border-0">Supervisor</th>
                            <th class="border-0">Deadline</th>
                            <th class="border-0">Period</th>
                            <th class="border-0">Status</th>
                            <th class="border-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                            <!-- Item -->
                            @include('admin.project.modal.suspend')
                            <tr>
                                <td>
                                    <a href="{{ route('admin.project.show', $project->id) }}"
                                        class="text-primary font-weight-bold">{{ $project->id }}</a>
                                </td>
                                <td class="font-weight-bold proj-name">
                                    <a href="{{ route('admin.project.show', $project->id) }}">
                                        {{$project->name}}</a>
                                </td>
                                @if ($project->category == 0)
                                <td><span class="fas fa-calendar-week mr-2"></span>Event</td>
                                @endif
                                @if ($project->category == 1)
                                <td><span class="fas fa-school mr-2"></span>Education</td>
                                @endif
                                @if ($project->category == 2)
                                <td><span class="fas fa-question-circle mr-2"></span>Other</td>
                                @endif
                                <td><a href="{{ route('admin.user.show', $project->supervisor_id) }}">{{$project->supervisor->detailable->name}}</a></td>
                                <td>{{date('d F Y', strtotime($project->deadline))}}</td>
                                <td>{{ date("Y", strtotime($project->period->start)) }}-{{ date("Y", strtotime($project->period->end)) }} / @if ($project->period->term == 0) Odd @else Even @endif</td>

                                @if ($project->status == 0)
                                <td class="text-info">
                                    <span class="fas fa-thumbs-up"></span>
                                    <span class="font-weight-bold">Available</span>
                                </td>
                                @endif
                                @if ($project->status == 1)
                                <td class="text-warning">
                                    <span class="fas fa-clock"></span>
                                    <span class="font-weight-bold">Ongoing</span>
                                </td>
                                @endif
                                @if ($project->status == 2)
                                <td class="text-success">
                                    <span class="fas fa-check"></span>
                                    <span class="font-weight-bold">Completed</span></td>
                                @endif
                                @if ($project->status == 3)
                                <td class="text-danger">
                                    <span class="fas fa-ban"></span>
                                    <span class="font-weight-bold">Suspended</span>
                                </td>
                                @endif
                                <td>
                                    <div class="btn-group">
                                        <button
                                            class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="icon icon-sm">
                                                <span class="fas fa-ellipsis-h icon-dark"></span>
                                            </span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{ route('admin.project.show', $project->id) }}"><span
                                                    class="fas fa-eye mr-2"></span>View
                                                Details</a>
                                            <a class="dropdown-item text-danger" data-toggle="modal"
                                                data-target="#modal-suspend-1">
                                                <span class="fas fa-ban mr-2"></span>Suspend
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

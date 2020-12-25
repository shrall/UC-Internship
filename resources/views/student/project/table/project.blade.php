{{-- ini table di index buat nunjukin project yang di punya student --}}
<div class="row mb-3">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-header border-0 pb-2">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h4"><i class="fas fa-clipboard-list"></i> Projects List</h2>
                    </div>
                </div>
            </div>
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
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($pus as $pu)
                        <tr>
                            <td><a href="{{ route('student.project.show', $pu->project->id) }}"
                                   class="text-primary font-weight-bold">{{ $pu->project->id }}</a></td>
                            <td class="font-weight-bold proj-name">
                                <a href="{{ route('student.project.show', $pu->project->id) }}">{{ $pu->project->name }}</a>
                            </td>

                            <td>

                                @if($pu->project->category == "0")
                                    <span class="fas fa-calendar-week"></span>
                                    <span> Event</span>
                                @endif

                                @if($pu->project->category == "1")
                                    <span class="fas fa-school"></span>
                                    <span> Education</span>
                                @endif

                                @if($pu->project->category == "2")
                                    <span class="fas fa-question-circle"></span>
                                    <span> Other</span>
                            @endif

                            <td>{{ $pu->project->supervisor->name }}</td>
                            <td>{{ $pu->project->deadline }}</td>
                            <td> {{ date("Y", strtotime($pu->project->period->start)) }}
                                -{{ date("Y", strtotime( $pu->project->period->end)) }}
                                / @if ( $pu->project->period->term == 0)
                                    Odd @else Even @endif
                            </td>
                            <td>
                                @if($pu->project->status == "0")
                                    <span class="fas fa-clock text-info"></span>
                                    <span
                                        class="font-weight-bold text-info">
                                    Available</span>
                                @endif

                                @if($pu->project->status == "1")
                                    <span class="fas fa-clock text-warning"></span>
                                    <span
                                        class="font-weight-bold text-warning">
                                    Ongoing</span>
                                @endif

                                @if($pu->project->status == "2")
                                    <span class="fas fa-check text-success"></span>
                                    <span
                                        class="font-weight-bold text-success">
                                    Completed</span>
                                @endif

                                @if($pu->project->status == "3")
                                    <span class="fas fa-ban text-danger"></span>
                                    <span
                                        class="font-weight-bold text-danger">
                                    Suspended</span>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- ini table di index yang nunjukin studentnya udah apply kemana aja --}}
{{-- ini table di index buat nunjukin project yang di punya student --}}
<div class="row">
    <div class="col-12 mb-4">
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
                        <th class="border-0">Project Name</th>
                        <th class="border-0">Category</th>
                        <th class="border-0">Supervisor</th>
                        <th class="border-0">Deadline</th>
                        <th class="border-0">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach (Auth::User()->projectusers as $pu)
                        {{--                    item--}}
                        @include('student.project.modal.applied')
                        @if($pu->status == '0')
                            <tr>
                                <td class="font-weight-bold proj-name">
                                    <a data-toggle="modal"
                                       data-target="#modal-applied-{{ $pu->project->id }}">{{ $pu->project->name }}</a>
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

                                </td>
                                <td>{{ $pu->project->supervisor->detailable->name }}</td>
                                <td>{{ $pu->project->deadline }}</td>

                                <td>
                                    @if($pu->status == "0")
                                        <span class="fas fa-clock text-warning"></span>
                                        <span
                                            class="font-weight-bold text-warning">
                                    Pending</span>
                                    @endif

                                    @if($pu->status == "1")
                                        <span class="fas fa-clock text-success"></span>
                                        <span
                                            class="font-weight-bold text-success">
                                    Accepted</span>
                                    @endif

                                    @if($pu->status == "2")
                                        <span class="fas fa-check text-danger"></span>
                                        <span
                                            class="font-weight-bold text-danger">
                                    Declined</span>
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

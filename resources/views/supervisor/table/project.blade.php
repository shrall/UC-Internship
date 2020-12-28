<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-header border-0 pb-2">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h4"><i class="fas fa-clipboard-list mr-2"></i>Incoming Applications</h2>
                    </div>
                </div>
            </div>
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="border-0" width="50px">Project ID</th>
                            <th class="border-0"><span class="fas fa-clipboard-list mr-2"></span>Project Name</th>
                            <th class="border-0"><span class="fa fa-user mr-2"></span>Applicant</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pus as $pu)
                        <tr>
                            <td><a href="{{route('supervisor.project.show', $pu->uci_project_id)}}">{{$pu->uci_project_id}}</a></td>
                            <td><a href="{{route('supervisor.project.show', $pu->uci_project_id)}}">{{$pu->project->name}}</a></td>
                            <td>
                                <a href="{{route('supervisor.student.show', $pu->uci_user_id)}}">
                                    @if($pu->status == '0')
                                        {{$pu->project->applies->name}}
                                    @endif
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

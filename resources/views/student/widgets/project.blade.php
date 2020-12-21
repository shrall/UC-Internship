<div class="col-12 px-0 mb-2">
    <div class="card border-light shadow-sm">
        <div class="card-body">
            <div class="row d-block d-xl-flex align-items-center">
                <div
                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                    <a href="{{ route('student.project.index') }}">
                        <div class="icon icon-shape icon-md icon-shape-tertiary rounded mr-4 mr-sm-0">
                            <span class="fas fa-tasks"></span>
                        </div>
                    </a>
                    <div class="d-sm-none">
                        <h2 class="h5">Ongoing</h2>
                        <h3 class="mb-1">{{ count($pus) }} @if (count($pus)>1)Projects @else Project @endif</h3>
                    </div>
                </div>
                <div class="col-12 col-xl-7 px-xl-0">
                    <div class="d-none d-sm-block">
                        <a href="{{ route('student.project.index') }}">
                            <h2 class="h5">Ongoing</h2>
                            <h3 class="mb-1">{{ count($pus) }} @if (count($pus)>1)Projects @else Project @endif</h3>
                        </a>
                    </div>
                    <div class="small mt-2">
                        <span class="fas fa-check text-success"></span>
                        <span class="text-success font-weight-bold">{{count($tasks->where('status', '1'))}}/{{count($tasks)}} Tasks Completed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

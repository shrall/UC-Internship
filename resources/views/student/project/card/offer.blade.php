@include('student.project.modal.apply')
<div class="card hover-state border-bottom rounded-0 py-3">
    <div class="card-body d-sm-flex align-items-center flex-wrap flex-lg-nowrap py-0">
        <div class="col-11 col-lg-8 px-0 mb-4 mb-md-0">
            <div class="mb-2">
                @include('student.project.modal.offer')
                <h3><a href="#" data-toggle="modal"
                        data-target="#modal-project-{{ $project->id }}">{{ $project->name }}</h3>
                <div class="d-block d-sm-flex mb-2">
                    <div>
                        <h4 class="h6 font-weight-normal text-warning mb-0">
                            <span class="fas fa-clock mr-2"></span>{{ date("d F Y", strtotime($project->deadline)) }}
                        </h4>
                    </div>
                </div>
                <div class="d-block d-sm-flex mb-2">
                    <div>
                        @if($project->category == 0)
                            <span class="fas fa-calendar-week text-primary mr-2"></span>Event
                        @endif
                        @if($project->category == 1)
                            <span class="fas fa-school text-primary mr-2"></span>Education
                        @endif
                        @if($project->category == 2)
                            <span class="fas fa-question-circle text-primary mr-2"></span>Others
                        @endif
                    </div>
                </div>
                <div class="d-block d-sm-flex mb-2">
                    <div>
                        <h4 class="h6 font-weight-normal text-primary mb-3 mb-sm-0">
                            <span
                                class="fas fa-user-shield mr-2"></span>{{ $project->supervisor->detailable->name }}
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="col-10 col-sm-2 col-lg-2 col-xl-2 d-none d-lg-block d-xl-inline-flex align-items-center ml-lg-auto text-right justify-content-end px-md-0">
            <div class="mr-lg-3">
                <a href="#" class="btn btn-secondary text-dark" data-toggle="modal"
                    data-target="#modal-apply-{{ $project->id }}">
                    <span class="fas fa-share-square mr-2"></span>
                    <span>Apply</span>
                </a>
            </div>
        </div>
    </div>
</div>

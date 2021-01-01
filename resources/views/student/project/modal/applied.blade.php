<div class="modal fade" id="modal-applied-{{ $pu->project->id }}" tabindex="-1" role="dialog"
     aria-labelledby="modal-applied-{{ $pu->project->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">{{ $pu->project->name }}</h2>
                <button type="button" class="btn-close"
                        data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="">Description</label>
                <p class="h5 mb-4">{{ $pu->project->description }}</p>
                <span class="fas fa-user-shield"></span>
                <label for="">Supervisor</label>
                <p class="h5 mb-4">{{ $pu->project->supervisor->detailable->name }}</p>

                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <span class="fas fa-clock"></span>
                        <label for="">Deadline</label>
                        <p class="h5 mb-4">{{ $pu->project->deadline }}</p>

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Category</label>
                        <p class="h5 mb-4">
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
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

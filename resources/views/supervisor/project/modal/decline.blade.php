<div class="modal fade text-white" id="modal-decline-{{ $user->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modal-decline-1" aria-hidden="true">
    <div class="modal-dialog modal-info modal-dialog-centered" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-header">
                <p class="modal-title" id="modal-title-notification">Decline Confirmation</p>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <span class="modal-icon display-1-lg">
                        <span class="fas fa-times"></span>
                    </span>
                    <h2 class="h4 modal-title my-3 text-white">
                        Are you sure you want to Decline
                    </h2>
                    <p>{{ $user->detailable->name }}'s application?</p>
                </div>
            </div>
            <div class="modal-footer">
                <form action="{{ route('supervisor.students.decline') }}" method="POST">
                    @csrf
                    <input name="project_id" type="hidden" value="{{ $project->id }}">
                    <input name="user_id" type="hidden" value="{{ $user->id }}">
                    <button type="submit" class="btn btn-white btn-sm mr-3 mb-3">Decline</button>
                </form>
            </div>
        </div>
    </div>
</div>

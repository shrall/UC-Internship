<div class="modal fade text-white" id="modal-accept-{{ $user->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modal-accept-1" aria-hidden="true">
    <div class="modal-dialog modal-info modal-dialog-centered" role="document">
        <div class="modal-content bg-gradient-success">
            <div class="modal-header">
                <p class="modal-title" id="modal-title-notification">Acceptation Confirmation</p>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <span class="modal-icon display-1-lg">
                        <span class="fas fa-check"></span>
                    </span>
                    <h2 class="h4 modal-title my-3 text-white">
                        Are you sure you want to accept
                    </h2>
                    <p>{{ $user->detailable->name }}'s application?</p>
                </div>
            </div>
            <div class="modal-footer">
                <form action="{{ route('supervisor.students.accept') }}" method="POST">
                    @csrf
                    <input name="user_id" type="hidden" value="{{ $user->id }}">
                    <input name="project_id" type="hidden" value="{{ $project->id }}">
                    <button type="submit" class="btn btn-white btn-sm mr-3 mb-3">Accept</button>
                </form>
            </div>
        </div>
    </div>
</div>

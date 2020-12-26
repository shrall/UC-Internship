<div class="modal fade" id="modal-suspend-1" tabindex="-1" role="dialog" aria-labelledby="modal-suspend-1"
    aria-hidden="true" style="color:#fff">
    <div class="modal-dialog modal-info modal-dialog-centered" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-header">
                <p class="modal-title" id="modal-title-notification">Suspend Confirmation</p>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <span class="modal-icon display-1-lg">
                        <span class="fas fa-exclamation-circle"></span>
                    </span>
                    <h2 class="h4 modal-title my-3"  style="color:#fff">Are you sure you want to suspend this project?</h2>
                </div>
            </div>
            <div class="modal-footer">
                <form action="{{route('admin.project.destroy', $project->id)}}" method="POST">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="button" class="btn btn-sm btn-white mr-3 mb-3">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>

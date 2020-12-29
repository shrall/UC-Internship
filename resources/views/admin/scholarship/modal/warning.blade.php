<div class="modal fade text-white" id="modal-warning-{{ $scholarship->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modal-delete-{{ $scholarship->id }}" aria-hidden="true">
    <div class="modal-dialog modal-info modal-dialog-centered" role="document">
        <div class="modal-content bg-gradient-warning">
            <div class="modal-header">
                <p class="modal-title" id="modal-title-notification">Delete Warning</p>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <span class="modal-icon display-1-lg">
                        <span class="fas fa-exclamation-triangle"></span>
                    </span>
                    <h2 class="h4 modal-title mt-3 text-white">There are still {{count($scholarship->infos)}} student(s) who owns this scholarship.</h2>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary mr-3 mb-3" data-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>

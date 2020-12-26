{{-- ini modal buat nge accept anak keproject  --}}
<div class="modal fade" id="modal-accept-{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-accept-1"
     aria-hidden="true" style="color:#fff">
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
                    <h2 class="h4 modal-title my-3" style="color: #fff;">Are you sure you want to accept<br> Marshall's application?</h2>
                </div>
            </div>
            <div class="modal-footer">
                <form method="POST">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="button" class="btn btn-white btn-sm mr-3 mb-3">Accept</button>
                </form>
            </div>
        </div>
    </div>
</div>

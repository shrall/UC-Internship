<div class="modal fade text-white" id="modal-delete-{{$scholarship->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-delete-{{$scholarship->id}}"
    aria-hidden="true">
    <div class="modal-dialog modal-info modal-dialog-centered" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-header">
                <p class="modal-title" id="modal-title-notification">Delete Confirmation</p>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <span class="modal-icon display-1-lg">
                        <span class="fas fa-exclamation-circle"></span>
                    </span>
                    <h2 class="h4 modal-title mt-3 text-white">Are you sure you want to delete this scholarship?</h2>
                </div>
            </div>
            <div class="modal-footer">
                <form action="{{route('admin.scholarship.destroy', $scholarship->id)}}" method="POST">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-sm btn-white mr-3 mb-3">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>

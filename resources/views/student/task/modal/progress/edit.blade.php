{{-- ini modal buat edit progress  --}}

<div class="modal fade" id="modal-edit-1" tabindex="-1" role="dialog" aria-labelledby="modal-edit-1"
     aria-hidden="true" style="color:#fff">
    <div class="modal-dialog modal-info modal-dialog-centered" role="document">
        <div class="modal-content bg-gradient-info">
            <div class="modal-header">
                <p class="modal-title" id="modal-title-notification">Edit Confirmation</p>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <span class="modal-icon display-1-lg">
                        <span class="fas fa-edit"></span>
                    </span>
                    <h2 class="h4 modal-title my-3"  style="color:#fff">Are you sure you want to edit this progress?</h2>
                </div>
            </div>
            <div class="modal-footer">
                {{--                hrs ke view form edit--}}
                <form action="{{route('student.progress.edit', 1)}}" method="POST">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <a href="{{ route('student.progress.edit', 1) }}" type="button" class="btn btn-sm btn-white mr-3 mb-3" >Confirm</a>
                </form>
            </div>
        </div>
    </div>
</div>



{{-- student.progress.update  --}}

{{-- ini modal confirmation buat apply ke project  --}}
<div class="modal fade" id="modal-apply-{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-apply-{{$project->id}}"
     aria-hidden="true" style="color:#fff">
    <div class="modal-dialog modal-info modal-dialog-centered" role="document">
        <div class="modal-content bg-gradient-secondary">
            <div class="modal-header">
                <p class="modal-title text-black" id="modal-title-notification">Application Confirmation</p>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <span class="modal-icon display-1-lg text-black">
                        <span class="fas fa-briefcase"></span>
                    </span>
                    <h2 class="h4 modal-title my-3 text-black" >Are you sure you want to apply on this project?</h2>
                </div>
            </div>
            <div class="modal-footer">
                <form action="{{route('student.project.store', $project->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="project_id" value="{{$project->id}}">
                    <button type="submit" class="btn btn-sm btn-primary mr-3 mb-3 text-white" >Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>



{{-- form ke student.project.store  --}}

<div class="modal fade" id="modal-progress-create" tabindex="-1" role="dialog" aria-labelledby="modal-progress-create"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Add New Progress</h2>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('student.progress.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="task_id" value="{{ $task->id }}">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" type="text"
                        placeholder="Description" rows="3" required></textarea>
                    <label class="mt-3" for="start">Time Start</label>
                    <input class="form-control" id="time_start" name="time_start" type="datetime-local"
                        placeholder="Time Start" required>
                    <label class="mt-3" for="end">Time End</label>
                    <input class="form-control" id="time_end" name="time_end" type="datetime-local"
                        placeholder="Time End" required>
                    <h2 class="h5 mt-3 mb-4">Upload Attachments</h2>
                    <div class="d-xl-flex align-items-center">
                        <div class="file-field">
                            <div class="d-flex justify-content-xl-center ml-xl-3">
                                <div class="d-flex">
                                    <span class="icon icon-md">
                                        <span class="fas fa-paperclip mr-3"></span>
                                    </span>
                                    <input type="file" name="attachments[]" id="attachments" multiple>
                                    <div class="d-md-block text-left">
                                        <div class="font-weight-normal text-dark mb-1" id="pp-name">Choose File</div>
                                        <div class="text-gray small">JPG, GIF or PNG.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Add New Progress</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

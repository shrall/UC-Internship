{{-- ini modal buat create progress. belum ada di uastemplate --}}
{{-- student.progress.store  --}}
<div class="modal fade" id="modal-progress-create" tabindex="-1" role="dialog"
     aria-labelledby="modal-progress-create" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Add New Progress</h2>
                <button type="button" class="btn-close"
                        data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
{{--                <div class="col-md-6 mb-3">--}}
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" type="text" placeholder="Description" rows="3" required></textarea>
{{--                </div>--}}
{{--                <div class="col-md-6 mb-3">--}}
                    <label class="mt-3"  for="start">Time Start</label>
                    <input class="form-control" id="start" type="datetime-local" placeholder="Time Start" required>
{{--                </div>--}}
{{--                <div class="col-md-6 mb-3">--}}
                    <label class="mt-3" for="end">Time End</label>
                    <input class="form-control" id="end" type="datetime-local" placeholder="Time End" required>
{{--                </div>--}}

                <h2 class="h5 mt-3 mb-4">Upload Attachments</h2>
                <div class="d-xl-flex align-items-center">
                    <div class="file-field">
                        <div class="d-flex justify-content-xl-center ml-xl-3">
                            <div class="d-flex">
                                <span class="icon icon-md">
                                    <span class="fas fa-paperclip mr-3"></span>
                                </span>
                                <input type="file">
                                <div class="d-md-block text-left">
                                    <div class="font-weight-normal text-dark mb-1" id="pp-name">Choose File</div>
                                    <div class="text-gray small">JPG, PNG or etc. Max size of 800K</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Add New Task</button>
                </div>
            </div>
        </div>
    </div>
</div>

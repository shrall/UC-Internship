{{-- ini modal buat edit progress  --}}

<div class="modal fade" id="modal-progress-edit-{{ $progress->id }}" tabindex="-1" role="dialog"
     aria-labelledby="modal-progress-edit-{{ $progress->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Edit Progress</h2>
                <button type="button" class="btn-close"
                        data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('student.progress.update', $progress->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input name="_method" type="hidden" value="PATCH">

                    <input type="hidden" name="task_id" value="{{$task->id}}">
                    <div class="col-md-12 mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" type="text" placeholder="Description" rows="3"
                                  required>{{ $progress->description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="mt-3" for="start">Time Start</label>
                        <input class="form-control" id="time_start" name="time_start" type="datetime-local" placeholder="Time Start"
                               value="{{date('Y-m-d\TH:i:s', strtotime($progress->time_start) )}}" required>
                        {{--                                    {{dd(date('Y-m-d\TH:i:s', strtotime($progress->time_start)) )}}--}}
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="mt-3" for="end">Time End</label>
                        <input class="form-control" id="time_end" name="time_end" type="datetime-local" placeholder="Time End"
                               value="{{date('Y-m-d\TH:i:s',  strtotime($progress->time_end) )}}" required>
                    </div>

                    <h2 class="h5 mt-3 mb-4">Upload Attachments</h2>

                    @foreach($progress->attachments as $attachment)
                        <p class="text-info"><span class="fa fa-paperclip"></span>
                            <a href="/attachments/progress/{{$attachment->name}}">
                                {{ $attachment->name }}
                            </a>
                        </p>
                    @endforeach
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
                                        <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Edit Task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- student.progress.update  --}}

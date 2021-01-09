<div class="modal fade" id="modal-progress-{{ $progress->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modal-progress-{{ $progress->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">{{ $task->name }}</h2>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="">Description</label>
                <p>{{ $progress->description }}</p>
                <label for="">Time Start</label>
                <p>
                    <span class="fa fa-calendar-day"></span>
                    {{ date('d-m-Y, H:i', strtotime($progress->time_start)) }}
                </p>
                <label for="">Time End</label>
                <p>
                    <span class="fa fa-calendar-day"></span>
                    {{ date('d-m-Y, H:i', strtotime($progress->time_end)) }}
                </p>
                <label for="">Attachment</label>
                @foreach ($progress->attachments as $attachment)
                    <p class="text-info"><span class="fa fa-paperclip"></span>
                        <a href="/attachments/progress/{{ $attachment->name }}">
                            {{ $attachment->name }}
                        </a>
                    </p>
                @endforeach
                @if ($progress->task->projectuser->project->supervisor->id == Auth::id())
                    @if ($progress->status == '0')
                        <form action="{{ route('supervisor.progresses.approve') }}" method="POST">
                            <div class="row"></div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div>
                                        <label for="comment">Comment</label>
                                        <input class="form-control" id="comment_id" name="comment" type="text"
                                            placeholder="Add New Comment" required>
                                    </div>
                                </div>
                            </div>
                    @endif
                    @if ($progress->status == '1' || $progress->status == '2')
                        <label for="">Comment</label>
                        @if ($progress->comment == null)
                            <p>No comment.</p>
                        @endif
                        <p>{{ $progress->comment }}</p>
                    @endif
            </div>
            @if ($progress->status == 0)
                <div class="modal-footer">
                    @csrf
                    <input name="progress_id" type="hidden" value="{{ $progress->id }}">
                    <input name="task_id" type="hidden" value="{{ $task->id }}">
                    <button type="submit" class="btn btn-success">
                        <span class="fas fa-check"></span> Approve
                    </button>
                    </form>
                    <form action="{{ route('supervisor.progresses.decline') }}" method="POST">
                        @csrf
                        <input name="progress_id" type="hidden" value="{{ $progress->id }}">
                        <input name="task_id" type="hidden" value="{{ $task->id }}">
                        <button type="submit" class="btn btn-danger">
                            <span class="fas fa-times"></span> Decline
                        </button>
                    </form>
                </div>
            @endif
            @endif
            @if ($progress->status == 1)
                <div class="modal-footer">
                    <div class="text-success">
                        <span class="fa fa-check mr-2"></span>Approved
                    </div>
                </div>
            @endif
            @if ($progress->status == 2)
                <div class="modal-footer">
                    <div class="text-danger">
                        <span class="fa fa-times mr-2"></span>Declined
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

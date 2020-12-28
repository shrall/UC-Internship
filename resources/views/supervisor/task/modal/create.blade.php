<div class="modal fade" id="modal-task-{{ $task->id }}" tabindex="-1" role="dialog"
     aria-labelledby="modal-task-{{ $task->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">{{ $task->name }}</h2><button type="button" class="btn-close"
                                                                         data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="">Name</label>
                <p>{{ $task->name }}</p>
                <label for="">Description</label>
                <p>{{ $task->description }}</p>
                <label for="">Deadline</label>
                <p>{{ $task->deadline }}</p>
                <label for="">Duration</label>
                <p>{{ $task->duration }}</p>
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
                @foreach($progress->attachments as $attachment)
                    <p class="text-info"><span class="fa fa-paperclip"></span>
                        <a href="#">
                            {{ $attachment->name }}
                        </a>
                    </p>
                @endforeach
                @if($progress->comment == null)
                    <form action="{{ route('supervisor.progress.update', $progress->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div>
                                    <label for="project_name">Comment</label>
                                    <input class="form-control" id="project_name" type="text" placeholder="Add New Comment" required>
                                </div>
                            </div>
                        </div>
                    </form>
                @endif
                @if($progress->comment != null)
                    <label for="">Comments</label>
                    <p>{{ $progress->comment }}</p>
                @endif
            </div>
            @if($progress->status == 0)
                {{--                <div class="modal-footer">--}}
                {{--                    <div class="text-warning"><span class="fa fa-clock mr-2"></span>Pending</div>--}}
                {{--                </div>--}}
                <div class="modal-footer">
                    <div>
                        <a class="btn btn-danger text-dark mr-2 dropdown-toggle" data-toggle="modal" data-target="#modal-status-{{ $progress->id }}1">
                            <span class="fas fa-times"></span> Decline
                        </a>
                        <a class="btn btn-secondary text-dark mr-2 dropdown-toggle" data-toggle="modal" data-target="#modal-status-{{ $progress->id }}">
                            <span class="fas fa-check"></span> Approve
                        </a>
                    </div>
                </div>
            @endif
            @if($progress->status == 1)
                <div class="modal-footer">
                    <div class="text-success"><span class="fa fa-check mr-2"></span>Approved</div>
                </div>
            @endif
            @if($progress->status == 2)
                <div class="modal-footer">
                    <div class="text-danger"><span class="fa fa-times mr-2"></span>Declined</div>
                </div>
            @endif

        </div>
    </div>
</div>

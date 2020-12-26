<div class="modal fade" id="modal-progress-{{$progress->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-progress-{{$progress->id}}"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">{{$task->name}}</h2><button type="button" class="btn-close"
                    data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="">Description</label>
                <p>{{$progress->description}}</p>
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
                    <a href="#">
                        {{$attachment->name}}
                    </a>
                </p>
                @endforeach
                <label for="">Comments</label>
                <p>{{$progress->comment}}</p>
            </div>
            @if ($progress->status == 0)
            <div class="modal-footer">
                <div class="text-warning"><span class="fa fa-clock mr-2"></span>Pending</div>
            </div>
            @endif
            @if ($progress->status == 1)
            <div class="modal-footer">
                <div class="text-success"><span class="fa fa-check mr-2"></span>Approved</div>
            </div>
            @endif
            @if ($progress->status == 2)
            <div class="modal-footer">
                <div class="text-danger"><span class="fa fa-times mr-2"></span>Declined</div>
            </div>
            @endif
        </div>
    </div>
</div>

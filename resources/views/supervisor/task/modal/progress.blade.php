{{-- disini ngeliat detail dari progress yang di klik  --}}
{{-- ada form buat ke supervisor.progress.update,$progress->id buat ngasi comment + ngerubah status  beda but done--}}

{{-- disini harus ngasi pilihan buat decline. kenapa? soale lek misal ada arek sg ngisi progress ngawur ga ada attachment gada description, trus cuma bisa di accept tok, de e jadi dapet jam gratisan  done--}}
{{-- :v panjang ya notenya :v  --}}
<div class="modal fade" id="modal-progress-{{ $progress->id }}" tabindex="-1" role="dialog"
     aria-labelledby="modal-progress-{{ $progress->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">{{ $task->name }}</h2><button type="button" class="btn-close"
                                                                         data-dismiss="modal" aria-label="Close"></button>
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
                @foreach($progress->attachments as $attachment)
                    <p class="text-info"><span class="fa fa-paperclip"></span>
                        <a href="#">
                            {{ $attachment->name }}
                        </a>
                    </p>
                @endforeach
                <div style="width: 100%; display: block;"></div>
                @if($progress->status == '0')
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div>
                                <form action="{{route('supervisor.progresses.approve')}}" method="POST">
                                    <label for="comment">Comment</label>
                                    <input class="form-control" id="comment_id" name="comment" type="text" placeholder="Add New Comment" required>
                            </div>
                        </div>
                    </div>
                @endif
                @if($progress->status == '1' || $progress->status == '2')
                    <label for="">Comment</label>
                    @if($progress->comment == null)
                        <p>No comment.</p>
                    @endif
                    <p>{{ $progress->comment }}</p>
                @endif
            </div>
            @if($progress->status == 0)
                <div class="modal-footer">
                    <div>
                            @csrf
                            <input name="progress_id" type="hidden" value="{{$progress->id}}">
                            <input name="task_id" type="hidden" value="{{$task->id}}">
                            <button type="submit" class="btn btn-secondary text-dark"><span class="fas fa-check"></span> Approve</button>
                        </form>
                        <form action="{{route('supervisor.progresses.decline')}}" method="POST">
                            @csrf
                            <input name="progress_id" type="hidden" value="{{$progress->id}}">
                            <input name="task_id" type="hidden" value="{{$task->id}}">
                            <button type="submit" class="btn btn-danger text-dark"><span class="fas fa-times"></span> Decline</button>
                        </form>


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

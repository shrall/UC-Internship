{{-- ini table yang nunjukin semua progress dari suatu task  --}}
{{-- disini include SEMUA modal.progress  --}}

<div class="card card-body border-light shadow-sm table-wrapper table-responsive">
    <table id="table" class="table table-hover">
        <thead class="thead-light">
        <tr>
            <th class="border-0" width="25px">#</th>
            <th class="border-0">Description</th>
            <th class="border-0" width="150px">Time Start</th>
            <th class="border-0" width="150px">Time End</th>
            <th class="border-0" width="150px">Status</th>
            @if($pages != "dash")
                <th class="border-0">Action</th>
            @endif
        </tr>
        </thead>
        <tbody>
        <!-- Item -->
        @include('student.progress.modal.progress')
        @include('student.progress.modal.delete')
        {{--            @include('student.progress.modal.edit')--}}
        <tr>
            <td class="text-primary font-weight-bold">1</td>
            <td>
                <a data-toggle="modal" data-target="#modal-progress-1">Creating Hearts</a>
            </td>
            <td>
                19-01-2021, 15:00
            </td>
            <td>
                19-01-2021, 17:00
            </td>
            <td class="text-success">
                <span class="fas fa-check"></span>
                <span class="font-weight-bold">Approved</span>
            </td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('student.progress.edit', 1) }}"><span
                                class="fas fa-edit mr-2"></span>Edit</a>
                        <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-1">
                            <span class="fas fa-ban mr-2"></span>Delete
                        </a>
                    </div>
                </div>
            </td>
        </tr>
        <!-- Item -->
        @include('student.progress.modal.progress')
        @include('student.progress.modal.delete')
        {{--            @include('student.progress.modal.edit')--}}
        <tr>
            <td class="text-primary font-weight-bold">2</td>
            <td>
                <a data-toggle="modal" data-target="#modal-progress-1">Creating The Cupid</a>
            </td>
            <td>
                20-01-2021, 15:00
            </td>
            <td>
                20-01-2021, 17:00
            </td>
            <td class="text-warning">
                <span class="fas fa-clock"></span>
                <span class="font-weight-bold">Pending</span>
            </td>
            <td>
                <div class="btn-group">
                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" data-toggle="modal" data-target="#modal-edit-1"><span
                                class="fas fa-edit mr-2"></span>Edit</a>
                        <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-1">
                            <span class="fas fa-ban mr-2"></span>Delete
                        </a>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>

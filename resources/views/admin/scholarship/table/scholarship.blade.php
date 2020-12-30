<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="border-0" width="25px">#</th>
                            <th class="border-0">Name</th>
                            <th class="border-0">Grade</th>
                            <th class="border-0">Duration</th>
                            <th class="border-0">Min. GPA</th>
                            <th class="border-0">Hour per Semester</th>
                            <th class="border-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($scholarships as $scholarship)
                            <!-- Item -->
                            @include('admin.scholarship.modal.delete')
                            @include('admin.scholarship.modal.warning')
                            <tr>
                                <td class="text-primary font-weight-bold">{{ $loop->iteration }}</td>
                                <td>
                                    <a
                                        href="{{ route('admin.scholarship.show', $scholarship->id) }}">{{ $scholarship->name }}</a>
                                </td>
                                <td class="font-weight-bold">{{ $scholarship->grade }}</td>
                                <td class="font-weight-bold">{{ $scholarship->duration }} Year(s)</td>
                                <td class="font-weight-bold">{{ $scholarship->minimum_gpa }}</td>
                                <td class="font-weight-bold">{{ $scholarship->hps }} Hours</td>
                                <td>
                                    <div class="btn-group">
                                        <button
                                            class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="icon icon-sm">
                                                <span class="fas fa-ellipsis-h icon-dark"></span>
                                            </span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{ route('admin.scholarship.show', $scholarship->id) }}">
                                                <span class="fas fa-eye mr-2"></span>View Details
                                            </a>
                                            <a class="dropdown-item"
                                                href="{{ route('admin.scholarship.edit', $scholarship->id) }}">
                                                <span class="fas fa-edit mr-2"></span>Edit
                                            </a>
                                            @if(count($scholarship->infos) == 0)
                                                <a class="dropdown-item text-danger" data-toggle="modal"
                                                    data-target="#modal-delete-{{ $scholarship->id }}">
                                                    <span class="fas fa-ban mr-2"></span>Delete
                                                </a>
                                            @else
                                                <a class="dropdown-item text-danger" data-toggle="modal"
                                                    data-target="#modal-warning-{{ $scholarship->id }}">
                                                    <span class="fas fa-ban mr-2"></span>Delete
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="border-0">Term</th>
                            <th class="border-0" width="150px">Period Start</th>
                            <th class="border-0" width="150px">Period End</th>
                            <th class="border-0" width="150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($periods as $period)
                            <!-- Item -->
                            <tr>
                                @if($period->term == 0)
                                    <td>{{ date("Y", strtotime($period->start)) }}-{{ idate("Y", strtotime($period->start))+1 }}
                                        / Odd </td>
                                @else
                                    <td>{{ idate("Y", strtotime($period->end))-1 }}-{{ date("Y", strtotime($period->end)) }}
                                        / Even </td>
                                @endif
                                <td>
                                    {{ date("d-m-Y", strtotime($period->start)) }}
                                </td>
                                <td>
                                    {{ date("d-m-Y", strtotime($period->end)) }}
                                </td>
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
                                                href="{{ route('admin.period.edit', $period->id) }}"><span
                                                    class=" fas fa-edit mr-2"></span>Edit</a>
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

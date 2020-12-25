{{-- ini table yang nunjukin semua task yang dipunya sama student  --}}
{{-- kolom pic ganti project name aja  --}}
{{-- tambahin duration disini  --}}

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-header border-0 pb-2">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="h4"><i class="fas fa-clipboard-list"></i> Projects This Semester</h2>
                    </div>
                </div>
            </div>
            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="border-0" width="25px">#</th>
                        <th class="border-0">Name</th>
                        <th class="border-0">PIC</th>
                        <th class="border-0">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($pus as $pu)
                        <tr>
                            <td><a href="{{ route('student.project.show', $pu->projectuser->id) }}"
                                   class="text-primary font-weight-bold">{{ $pu->projectuser->id }}</a></td>
                            <td class="font-weight-bold proj-name">
                                <a href="{{ route('student.project.show', $pu->projectuser->id) }}">{{ $pu->projectuser->name }}</a>
                            </td>
                            <td>{{ $pu->projectuser->deadline }}</td>
                            <td>{{ $pu->projectuser->duration }}</td>

                            <td>
                                @if($pu->projectuser->status == "0")
                                    <span class="fas fa-clock text-warning"></span>
                                    <span
                                        class="font-weight-bold text-warning">
                                    On Progress</span>
                                @endif

                                @if($pu->projectuser->status == "1")
                                    <span class="fas fa-check text-success"></span>
                                    <span
                                        class="font-weight-bold text-success">
                                    Completed</span>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

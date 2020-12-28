{{-- ini table yang nunjukin semua anggota dari suatu project --}}
{{-- disini include modal.student  --}}
<div class="card card-body border-light shadow-sm table-wrapper table-responsive">
    <table id="table" class="table table-hover">
        <thead class="thead-light">
        <tr>
            <th class="border-0" width="25px">NIM</th>
            <th class="border-0">Name</th>
            <th class="border-0">Department</th>
        </tr>
        </thead>
        <tbody>
        @foreach($project->works as $user)
{{--            @if($applies->status == '1')--}}
                <!-- Item -->
                @include('student.project.modal.student')
                <tr>
                    @if($user->pivot->status == 1)
                    <td>
                        <a data-toggle="modal" data-target="#modal-student-{{ $user->id }}"
                           class="text-primary font-weight-bold">{{ $user->detailable->nim }}</a>
                    </td>
                    <td class="font-weight-bold proj-name">
                        <a data-toggle="modal" data-target="#modal-student-{{ $user->id }}">
                            {{ $user->detailable->name }}</a>
                    </td>
                    <td>{{ $user->detailable->department->initial }}</td>
                    @endif
                </tr>
{{--            @endif--}}
        @endforeach
        </tbody>
    </table>
</div>

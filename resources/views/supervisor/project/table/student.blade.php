{{-- ini ngelist student yang nge apply ke project kalau masih available --}}
{{-- disini nge include modal.accept & modal.delete  --}}

{{-- kalau udah ongoing ngelist student yang udah accepted di dalemnya tanpa kolom application status --}}

{{-- kalo bukan user yang login yang punya projectnya, hide semua actionnya  --}}

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm">

            <div class="card card-body border-light shadow-sm table-wrapper table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="border-0" width="25px">NIM</th>
                        <th class="border-0">Name</th>
                        <th class="border-0">Department</th>
                        <th class="border-0">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($project->works as $user)
                        <tr>
                            <td><a href="{{ route('supervisor.user.show', $user->id) }}"
                                   class="text-primary font-weight-bold">{{ $user->detailable->nim }}</a></td>
                            <td class="font-weight-bold proj-name">
                                <a
                                    href="{{ route('supervisor.user.show', $user->id) }}">
                                    {{ $user->detailable->name }}</a>
                            </td>
                            <td>{{ $user->detailable->department->initial }}</td>
                            @if($user->pivot->status == 0)
                                <td class="text-warning">
                                    <span class="fas fa-clock"></span>
                                    <span class="font-weight-bold">Pending</span>
                                </td>
                            @endif
                            @if($user->pivot->status == 1)
                                <td class="text-success">
                                    <span class="fas fa-check"></span>
                                    <span class="font-weight-bold">Accepted</span>
                                </td>
                            @endif
                            @if($user->pivot->status == 2)
                                <td class="text-danger">
                                    <span class="fas fa-times"></span>
                                    <span class="font-weight-bold">Declined</span>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

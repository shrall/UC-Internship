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
        <!-- Item -->
        @include('student.project.modal.student')
        <tr>
            <td>
                <a data-toggle="modal" data-target="#modal-friend-1"
                   class="text-primary font-weight-bold">0706011910009</a></td>
            <td class="font-weight-bold proj-name"><a data-toggle="modal" data-target="#modal-friend-1"> Marshall Ovierdo Kurniawan</a></td>
            <td>IMT</td>
        </tr>
        </tbody>
    </table>
</div>

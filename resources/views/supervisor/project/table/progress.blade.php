<div class="card card-body border-light shadow-sm table-wrapper table-responsive">
    <table id="table" class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th class="border-0" width="25px">#</th>
                <th class="border-0">Description</th>
                <th class="border-0" width="150px">Time Start</th>
                <th class="border-0" width="150px">Time End</th>
                <th class="border-0" width="150px">Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- Item -->
            @include('staff.project.inc.modal.progress')
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
            </tr>
            <!-- Item -->
            @include('staff.project.inc.modal.progress')
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
            </tr>
        </tbody>
    </table>
</div>

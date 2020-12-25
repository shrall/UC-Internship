{{-- ini table yang nunjukin semua task dari suatu project di detail.blade.php --}}
{{-- disini include modal.student  --}}
<div class="card card-body border-light shadow-sm table-wrapper table-responsive">
    <table id="table" class="table table-hover">
        <thead class="thead-light">
        <tr>
            <th class="border-0" width="25px">#</th>
            <th class="border-0">Name</th>
            <th class="border-0">PIC</th>
            <th class="border-0">Status</th>
        </tr>
        </thead>
        <tbody>
        <!-- Item -->
        <tr>
            <td class="text-primary font-weight-bold">1</td>
            <td>
                <a href="{{ route('student.progress.index') }}">Design Assets</a>
            </td>
            <td class="font-weight-bold proj-name">
                <a href="#"> Marshall Ovierdo Kurniawan</a>
            </td>
            <td class="text-success">
                <span class="fas fa-check"></span>
                <span class="font-weight-bold">Completed</span>
            </td>
        </tr>
        <!-- Item -->
        <tr>
            <td class="text-primary font-weight-bold">2</td>
            <td>
                <a href="{{ route('student.progress.index') }}">Layout Design</a>
            </td>
            <td class="font-weight-bold proj-name">
                <a href="#"> Marshall Ovierdo Kurniawan</a>
            </td>
            <td class="text-warning">
                <span class="fas fa-clock"></span>
                <span class="font-weight-bold">Pending</span>
            </td>
        </tr>
        </tbody>
    </table>
</div>

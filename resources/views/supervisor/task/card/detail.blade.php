{{-- disini itu ngasi detail dari sebuah task  --}}
{{-- bisa ngedit. berarti include modal.edit  --}}
<div class="card border-light shadow-sm text-center pt-3 pb-4 mb-4 mb-lg-0">
    <div class="card-body">
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group">
                <a href="{{ route('supervisor.task.edit', 1) }}"><button type="button" class="btn btn-sm btn-secondary"><span class="fa fa-cog"></span></button></a>
            </div>
        </div>
        <h2 class="display-3 mb-2">Design Assets</h2>
        <div class="medium mt-1">Design asset-asset yang diperlukan untuk digunakan di dalam poster</div>
        <div class="medium font-weight-bold mt-1 text-success">
            <span class="fa fa-check"></span> Completed
        </div>
    </div>
</div>

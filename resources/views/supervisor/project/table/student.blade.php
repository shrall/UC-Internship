{{-- ini ngelist student yang nge apply ke project kalau masih available --}}
{{-- disini nge include modal.accept & modal.delete  --}}

{{-- kalau udah ongoing ngelist student yang udah accepted di dalemnya tanpa kolom application status --}}

{{-- kalo bukan user yang login yang punya projectnya, hide semua actionnya  --}}

{{--<div class="card card-body border-light shadow-sm table-wrapper table-responsive">--}}
{{--    <table id="table" class="table table-hover">--}}
{{--        <thead class="thead-light">--}}
{{--        <tr>--}}
{{--            <th class="border-0" width="25px">NIM</th>--}}
{{--            <th class="border-0">Name</th>--}}
{{--            <th class="border-0">Department</th>--}}
{{--            <th class="border-0">Status</th>--}}
{{--            <th class="border-0">Application Status</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        <!-- Item -->--}}
{{--       @foreach($pus as $pu)--}}
{{--           <tr>--}}
{{--               <td class="align-middle"><a href="{{ route('supervisor.student.show', 1) }}"--}}
{{--                                           class="text-primary font-weight-bold">AJDNA</a></td>--}}
{{--               <td class="font-weight-bold proj-name align-middle"><a--}}
{{--                       href="{{ route('supervisor.student.show', 1) }}"> Andi Gunawan</a></td>--}}
{{--               <td class="align-middle">IBM</td>--}}
{{--               <td class="text-warning align-middle">--}}
{{--                   <span class="fas fa-clock"></span>--}}
{{--                   <span class="font-weight-bold">Pending</span>--}}
{{--               </td>--}}
{{--               <td class="align-middle">--}}
{{--                   @include('supervisor.project.modal.accept')--}}
{{--                   @include('supervisor.project.modal.decline')--}}
{{--                   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">--}}
{{--                       <div>--}}
{{--                           <a class="btn btn-success text-white mr-2 dropdown-toggle" data-toggle="modal" data-target="#modal-accept-{{$project->id}}">--}}
{{--                               <span class="fa fa-check"></span>--}}
{{--                           </a>--}}
{{--                           <a class="btn btn-danger text-white mr-2 dropdown-toggle" data-toggle="modal" data-target="#modal-decline-{{$project->id}}">--}}
{{--                               <span class="fa fa-times"></span>--}}
{{--                           </a>--}}

{{--                       </div>--}}
{{--                   </div>--}}
{{--               </td>--}}
{{--           </tr>--}}
{{--       @endforeach--}}

{{--        </tbody>--}}
{{--    </table>--}}
{{--</div>--}}

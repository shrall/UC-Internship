<!doctype html>
<html lang="en">

<head>
    <title>Internship Report</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        html {
            font-size: 12px;
        }

    </style>
</head>

<body>
    <h3 class="text-center mb-0">Internship Report</h3>
    <h6 class="text-muted text-center mt-0">Laporan Magang Beasiswa</h6>

    <strong>Student Information</strong>

    <table width="100%" class="mb-5">
        <tr>
            <td width="30%">NIM / Name</td>
            <td width="55%" class="border-top">: {{ Auth::user()->detailable->nim }} /
                {{ Auth::user()->detailable->name }}
            </td>
            <td width="15%" rowspan="2" class="border border-bottom-0">
                <h6 class="my-0">Total</h6>{{ $totalduration }} Hours
            </td>
        </tr>
        <tr>
            <td width="30%">Department / Title</td>
            <td width="55%">: {{ Auth::user()->detailable->department->initial }} / Student</td>
        </tr>
        <tr>
            <td width="30%">SMT / Academic Year</td>
            @if ($currentperiod->term == 0)
                <td width="55%">:
                    {{ date('Y', strtotime($currentperiod->start)) }}-{{ idate('Y', strtotime($currentperiod->start)) + 1 }}
                    / Odd
                </td>
            @else
                <td width="55%">:
                    {{ idate('Y', strtotime($currentperiod->end)) - 1 }}-{{ date('Y', strtotime($currentperiod->end)) }}
                    / Even
                </td>
            @endif
            <td width="15%" rowspan="2" class="border"></td>
        </tr>
        <tr>
            <td width="30%">Scholarship</td>
            <td width="55%" class="border-bottom">: {{ Auth::user()->info->scholarship->name ?? 'None'}}
                ({{ Auth::user()->info->scholarship->grade ?? '-'}})</td>
        </tr>
    </table>
    <strong>Task List</strong>
    <table width="100%" class="table-bordered">
        <thead>
            <tr>
                <th width="25%">Project Name</th>
                <th width="25%">Task Name</th>
                <th width="25%">Supervisor</th>
                <th width="5%">Start Date</th>
                <th width="5%">End Date</th>
                <th width="15%">Duration</th>
            </tr>
        </thead>
        <tbody>
            @foreach (Auth::user()->projectusers as $pu)
                @foreach ($pu->tasks as $task)
                    <tr>
                        <td>{{ $task->projectuser->project->name }}</td>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->projectuser->project->supervisor->detailable->name }}</td>
                        <td>{{ date('Y/m/d', strtotime($task->created_at)) }}</td>
                        @if ($task->status == '1')
                            <td>{{ date('Y/m/d', strtotime($task->updated_at)) }}</td>
                        @else
                            <td>-</td>
                        @endif
                        <td>{{ $task->duration }} hours</td>
                    </tr>
                @endforeach
            @endforeach
            <tr>
                <td colspan="5" class="text-center font-weight-bold">Total Hours</td>
                <td class="font-weight-bold">{{ $totalduration }} Hours</td>
            </tr>
        </tbody>
    </table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

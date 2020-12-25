{{-- ini yang buat pdf  --}}
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
        <td width="55%" class="border-top">: 0706011910009 / Marshall Ovierdo Kurniawan</td>
        <td width="15%" rowspan="2" class="border border-bottom-0"><h6 class="my-0">Total</h6>231 Hours</td>
    </tr>
    <tr>
        <td width="30%">Department / Title</td>
        <td width="55%">: IMT / Student</td>
    </tr>
    <tr>
        <td width="30%">SMT / Academic Year</td>
        <td width="55%">: 2020/2021 / Odd</td>
        <td width="15%" rowspan="2" class="border"></td>
    </tr>
    <tr>
        <td width="30%">Scholarship</td>
        <td width="55%" class="border-bottom">: Beasiswa Sosial Ekonomi (A)</td>
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
    {{--    @foreach ($info as $inf)--}}
    <tr>
        <td>Valentine's Day</td>
        <td>Design Assets</td>
        <td>Ida Kristin Sianipar, S.Th., M.M.</td>
        <td>27/01/2021</td>
        <td>01/02/2021</td>
        <td>4.3 Hours</td>
    </tr>
{{--    @endforeach--}}
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

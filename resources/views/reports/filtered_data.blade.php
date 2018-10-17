<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover dataTables custom_table" id="example">
        <thead>
        <tr>
            <th class="center">SL No</th>
            <th class="center">Class Name</th>
            <th class="center">Subject Name</th>
            <th class="center">Total Attendance</th>
            <th class="center">Total Absent</th>
            <th class="center">Current Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr class="item{{$item->id}}" style="height: 20px !important;">
                <td class="center">{{ $loop->iteration or $item->id }}</td>
                <td class="center">{{$item->class->name}}</td>
                <td class="center">{{$item->subject->name}}</td>
                <td class="center"> </td>
                <td class="center"> </td>
                <td class="center">{{$item->present_date}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

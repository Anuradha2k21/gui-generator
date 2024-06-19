<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="students-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Date Of Birth</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->date_of_birth }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['students.destroy', $student->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('students.show', [$student->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('students.edit', [$student->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $students])
        </div>
    </div>
</div>

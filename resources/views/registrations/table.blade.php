<div class="table-responsive">
    <table class="table" id="registrations-table">
        <thead>
            <tr>
                <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>Birthdate</th>
        <th>Age</th>
        <th>Sex</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($registrations as $registration)
            <tr>
                <td>{{ $registration->firstname }}</td>
            <td>{{ $registration->middlename }}</td>
            <td>{{ $registration->lastname }}</td>
            <td>{{ $registration->address }}</td>
            <td>{{ $registration->birthdate }}</td>
            <td>{{ $registration->age }}</td>
            <td>{{ $registration->sex }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['registrations.destroy', $registration->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('registrations.show', [$registration->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('registrations.edit', [$registration->id]) }}" class='btn btn-default btn-xs'>
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

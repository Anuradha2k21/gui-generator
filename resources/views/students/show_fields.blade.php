<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $student->name }}</p>
</div>

<!-- Gender Field -->
<div class="col-sm-12">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $student->gender }}</p>
</div>

<!-- Date Of Birth Field -->
<div class="col-sm-12">
    {!! Form::label('date_of_birth', 'Date Of Birth:') !!}
    <p>{{ $student->date_of_birth }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $student->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $student->updated_at }}</p>
</div>


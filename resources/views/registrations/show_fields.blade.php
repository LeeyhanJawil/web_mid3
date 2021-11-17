<!-- Firstname Field -->
<div class="col-sm-12">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{{ $registration->firstname }}</p>
</div>

<!-- Middlename Field -->
<div class="col-sm-12">
    {!! Form::label('middlename', 'Middlename:') !!}
    <p>{{ $registration->middlename }}</p>
</div>

<!-- Lastname Field -->
<div class="col-sm-12">
    {!! Form::label('lastname', 'Lastname:') !!}
    <p>{{ $registration->lastname }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $registration->address }}</p>
</div>

<!-- Birthdate Field -->
<div class="col-sm-12">
    {!! Form::label('birthdate', 'Birthdate:') !!}
    <p>{{ $registration->birthdate }}</p>
</div>

<!-- Age Field -->
<div class="col-sm-12">
    {!! Form::label('age', 'Age:') !!}
    <p>{{ $registration->age }}</p>
</div>

<!-- Sex Field -->
<div class="col-sm-12">
    {!! Form::label('sex', 'Sex:') !!}
    <p>{{ $registration->sex }}</p>
</div>


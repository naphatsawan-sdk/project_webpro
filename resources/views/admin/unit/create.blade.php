@extends('layouts.main-admin')

@section('title', 'Unit : Create')

@section('content')
<form class="form" action="{{ route('unit-create') }}" method="post">
    @csrf

    <table class="group">
        <tr>
            <td><strong>Name</strong></td>
            <td><input type="text" name="name" id="" value="{{ old('name')}}" required></td>
        </tr>
        <tr>
            <td><strong>logo</strong></td>
            <td><input type="text" name="logo" id="" value="{{ old('logo')}}" required></td>
        </tr>
        <tr>
            <td><strong>Photo</strong></td>
            <td><input type="text" name="photo" id="" value="{{ old('photo')}}" required></td>
        </tr>
        <tr>
            <td><strong>Group</strong></td>
            <td>
                <select name="group_id" required>
                    <option value="">Please select group</option>
                    @foreach($groups as $group)
                    <option value="{{ $group->id }}" {{ ($group->id === old('group'))? 'selected' : '' }}>
                        {{ $group->name }}
                    </option>
                    @endforeach
                </select>
            </td>
        </tr>

    </table>

    <div>
        <button class="submit" type="submit">Create</button>
    </div>

</form>
@endsection
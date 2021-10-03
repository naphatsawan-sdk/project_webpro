@extends('layouts.main-admin')

@section('title', 'Blog : Update')

@section('content')
<form class="form" action="{{ route('blog-update-form', ['id' => $blog->id])}}" method="post">
    @csrf
    <table>
        <tr>
            <td><strong>Title</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="title" id="" value="{{ old('title', $blog->title)}}" required></td>
        </tr>
        <tr>
            <td><strong>Photo</strong></td>
            <td><strong>::</strong></td>
            <td><input type="text" name="photo" id="" value="{{ old('photo', $blog->photo)}}" required></td>
        </tr>
        <tr>
            <td><strong>Content</strong></td>
            <td><strong>::</strong></td>
            <td>@trix($blog, 'content')</td>
        </tr>
        <tr>
            <td><strong>Group</strong></td>
            <td><strong>::</strong></td>
            <td>
                <select name="group_id" required>
                    <option value="">-- Please select group --</option>
                    @foreach($groups as $group)
                    <option value="{{ $group->id }}" {{ ($group->id === old('group_id', $blog->group_id))? 'selected' : '' }}>
                        {{ $group->name }}
                    </option>
                    @endforeach
                </select>
            </td>
        </tr>
    </table>

    <div class="actions">
        <button type="submit">Update</button>
    </div>

</form>
@endsection
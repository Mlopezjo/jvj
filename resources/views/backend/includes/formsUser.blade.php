@csrf
<label for="role-id">Role : </label>
<select name="role_id" id="role-id">
    @foreach($roles as $role)
    <option value="{{$role->id}}"{{ $user->role_id == $role->id ? 'selected' : '' }}>{{$role->name}}</option>
    @endforeach
</select>
@csrf
<label for="role-name">Nom du role : </label>
<input type="text" name="name" id="role-name" value="{{ old('name') ?? $role->name }}">
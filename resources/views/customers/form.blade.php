<div class="form-group pb-2">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{ old('name') ?? $customer->name }}">
    <div class="label label-danger">{{ $errors->first('name') }}</div>
</div>

<div class="form-group">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" name="email" value="{{ old('email') ?? $customer->email }}">
    <div class="label label-danger">{{ $errors->first('email') }}</div>
</div>

<div class="form-group">
    <label for="active" class="label-control">Status</label>
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select Customer Status</option>

        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
        <option value="{{ $activeOptionKey }}" {{ $customer->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
        @endforeach
        
    </select>
    <div class="label label-danger">{{ $errors->first('active') }}</div>
</div>

<div class="form-group">
    <label for="company_id" class="label-control">Company</label>
    <select name="company_id" id="company_id" class="form-control">
        <option value="" disabled>Select Company</option>
        @foreach($companies as $company)
        <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
        @endforeach
    </select>
    <div class="label label-danger">{{ $errors->first('company_id') }}</div>
</div>

<div class="form-group d-flex flex-column">
    <label for="image">Profile Image</label>
    <input type="file" name="image" class="py-2">
    <div class="label label-danger">{{ $errors->first('image') }}</div>
</div>
@csrf

@section('content')
<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-white shadow">
                    <h1>Edit Affiare</h1>

            <form action="{{ route('affaires.update', $affaire->id) }}" method="POST" class="max-w-md mx-auto">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="name" class="block font-medium mb-2">{{ __('Nom D\'affaire') }}</label>
                    <input type="text" class="form-input w-full @error('name') border-red-500 @enderror" id="name" name="name" value="{{ $affaire->Name }}" required autofocus>
                    @error('name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="Description" class="block font-medium mb-2">{{ __('Description') }}</label>
                    <textarea class="form-input w-full @error('Description') border-red-500 @enderror" id="Description" name="Description" required>{{ $affaire->Description }}</textarea>
                    @error('Description')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="status" class="block font-medium mb-2">{{ __('Status') }}</label>
                    <select class="form-select w-full @error('status') border-red-500 @enderror" id="status" name="status" required>
                        <option value="In Progress" {{ $affaire->status === 'In Progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="Done" {{ $affaire->status === 'Done' ? 'selected' : '' }}>Done</option>
                    </select>
                    @error('status')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="priorité" class="block font-medium mb-2">{{ __('Priorité') }}</label>
                    <input type="number" class="form-input w-full @error('priorité') border-red-500 @enderror" id="priorité" name="priorité" value="{{ $affaire->priorité }}" required>
                    @error('priorité')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Modifier') }}
                    </button>
                </div>
            </form>
        </div>
    </x-layout>
@endsection


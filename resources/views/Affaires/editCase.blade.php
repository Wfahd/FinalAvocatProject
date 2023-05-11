<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
      
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-navbars.navs.auth titlePage="My Clients"></x-navbars.navs.auth>

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
                </div>
            </div>
        </div>
    </main>
    {{-- <style>
        .container {
  margin-top: 5rem;
}

.card {
  background-color: #fff;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1), 0 1px 2px rgba(0, 0, 0, 0.06);
  border-radius: 0.375rem;
  padding: 1rem;
}

.card h1 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.form-input {
  border-width: 1px;
  border-style: solid;
  border-color: #e5e7eb;
  border-radius: 0.375rem;
  padding: 0.75rem 1rem;
  font-size: 1rem;
  line-height: 1.5;
  transition-duration: 150ms;
}

.form-input:focus {
  outline: none;
  border-color: #7c3aed;
  box-shadow: 0 0 0 3px rgba(124, 58, 173, 0.2);
}

.form-select {
  border-width: 1px;
  border-style: solid;
  border-color: #e5e7eb;
  border-radius: 0.375rem;
  padding: 0.75rem 1rem;
  font-size: 1rem;
  line-height: 1.5;
  transition-duration: 150ms;
  appearance: none;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='%236b7280'%3e%3cpath fill-rule='evenodd' d='M16.146 7.854a.5.5 0 00-.708 0L10 13.293 5.854 9.146a.5.5 0 00-.708.708l4.5 4.5a.5.5 0 00.708 0l4.5-4.5a.5.5 0 000-.708z' clip-rule='evenodd'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 1.5em 1.5em;
}

.form-select:focus {
  outline: none;
  border-color: #7c3aed;
  box-shadow: 0 0 0 3px rgba(124, 58, 173, 0.2);
}

.btn {
  font-size: 1rem;
  line-height: 1.5;
  padding: 0.5rem 1rem;
  border-radius: 0.375rem;
  color: #fff;
  background-color: #7c3aed;
  transition-duration: 150ms;
}

.btn:hover {
  background-color: #6d28d9;
}

.btn:focus {
  outline: none;
  box-shadow: 0 0 0 3px rgba(124, 58, 173, 0.2);
}

.btn-primary {
  background-color: #7c3aed;
}

.btn-primary:hover {
  background-color: #6d28d9;
}

    </style> --}}
    <style>
      .container {
  max-width: 800px;
  margin: 0 auto;
}

.card {
  padding: 2rem;
  border-radius: 0.5rem;
}

h1 {
  text-align: center;
  font-size: 2rem;
  margin-bottom: 2rem;
}

label {
  display: block;
  font-size: 1.2rem;
  font-weight: bold;
  margin-bottom: 0.5rem;
}

input[type="text"],
textarea,
select {
  display: block;
  width: 100%;
  padding: 0.5rem;
  font-size: 1.2rem;
  border-radius: 0.25rem;
  border: 1px solid #ccc;
  margin-bottom: 1rem;
}

input[type="number"] {
  display: block;
  width: 100%;
  padding: 0.5rem;
  font-size: 1.2rem;
  border-radius: 0.25rem;
  border: 1px solid #ccc;
  margin-bottom: 1rem;
}

.btn {
  background-color: #07a512;
  color: #fff;
  padding: 0.5rem 1rem;
  border-radius: 0.25rem;
  font-size: 1.2rem;
  cursor: pointer;
}

.btn:hover {
  background-color: #3215d7;
}

    </style>
</x-layout>


<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
                <x-navbars.navs.auth titlePage="My Clients"></x-navbars.navs.auth>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-white shadow">
                    <h1>Edit Affiare</h1>

                    <div class="card-body">
                        <form method="POST" action="{{ route('affaires.update', $affaire->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-bold mb-2">{{ __('Nom D\'affaire') }}</label>
                                <input id="name" type="text" class="form-input @error('name') border-red-500 @enderror" name="name" value="{{ $affaire->Name }}" required autofocus>
                                @error('name')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="Description" class="block text-gray-700 font-bold mb-2">{{ __('Description') }}</label>
                                <textarea id="Description" type="text" class="form-input @error('Description') border-red-500 @enderror" name="Description" required>{{ $affaire->Description }}</textarea>
                                @error('Description')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="status" class="block text-gray-700 font-bold mb-2">{{ __('Status') }}</label>
                                <select id="status" class="form-select @error('status') border-red-500 @enderror" name="status" required>
                                    <option value="In Progress" @if($affaire->status === 'In Progress') selected @endif>In Progress</option>
                                    <option value="Done" @if($affaire->status === 'Done') selected @endif>Done</option>
                                </select>
                                @error('status')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="priorité" class="block text-gray-700 font-bold mb-2">{{ __('Priorité') }}</label>
                                <input id="priorité" type="number" class="form-input @error('priorité') border-red-500 @enderror" name="priorité" value="{{ $affaire->priorité }}" required>
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
        </div>
</x-layout>

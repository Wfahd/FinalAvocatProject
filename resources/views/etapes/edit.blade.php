<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-navbars.navs.auth titlePage="My Clients"></x-navbars.navs.auth>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Etape') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('etapes.update', $etape->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="deadline" class="col-md-4 col-form-label text-md-right">{{ __('Deadline') }}</label>

                                <div class="col-md-6">
                                    <input id="deadline" type="date" class="form-control @error('deadline') is-invalid @enderror" name="deadline" value="{{ old('deadline', $etape->deadline) }}" required autocomplete="deadline" autofocus>

                                    @error('deadline')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="next_step" class="col-md-4 col-form-label text-md-right">{{ __('Next Steps') }}</label>

                                <div class="col-md-6">
                                    <textarea id="next_step" class="form-control @error('next_step') is-invalid @enderror" name="next_step" required autocomplete="next_step" autofocus>{{ old('next_step', $etape->next_steps) }}</textarea>

                                    @error('next_step')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="notes" class="col-md-4 col-form-label text-md-right">{{ __('Notes') }}</label>

                                <div class="col-md-6">
                                    <textarea id="notes" class="form-control @error('notes') is-invalid @enderror" name="notes" autocomplete="notes" autofocus>{{ old('notes', $etape->notes) }}</textarea>

                                    @error('notes')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="document" class="col-md-4 col-form-label text-md-right">{{ __('Document') }}</label>

                                <div class="col-md-6">
                                    <input id="document" type="text" class="form-control @error('document') is-invalid @enderror" name="document" value="{{ old('document', $etape->document) }}" autocomplete="document" autofocus>

                                    @error('document')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                    <a href="{{ route('etapes.index', $etape->affaire_id) }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </x-layout>
            
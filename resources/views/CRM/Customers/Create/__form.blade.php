<div class="row g-4 settings-section">
    <div class="col-12 col-md-4">
        <h3 class="section-title">General</h3>
        <div class="section-intro">
            Entrer les informations général du client
        </div>
    </div>
    <div class="col-12 col-md-8">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <form class="settings-form" accept="{{ route('admin:customers.store') }}" method="post">
                    @honeypot
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Raison sociale<span class="ms-2"
                                data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg
                                    width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                    <circle cx="8" cy="4.5" r="1" />
                                </svg></span> <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control @error('name')  is-invalid @enderror"
                            id="name" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact pricipal <span
                                class="text-danger">*</span></label>
                        <input type="text" name="contact"
                            class="form-control @error('contact')  is-invalid @enderror" id="contact"
                            value="{{ old('contact') }}" required>
                        @error('contact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control  @error('email')  is-invalid @enderror"
                            id="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Télephone</label>
                        <input type="text" name="telephone"
                            class="form-control  @error('telephone')  is-invalid @enderror" id="telephone"
                            value="{{ old('telephone') }}">
                        @error('telephone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Adresse</label>
                        <textarea id="address" name="address" rows="5" class="form-control  @error('address')  is-invalid @enderror">{{ old('address') }}</textarea>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <hr class="mb-2">

                    <div class="mb-3">
                        <label for="rc" class="form-label">R.C</label>
                        <input type="text" name="rc" class="form-control  @error('rc')  is-invalid @enderror"
                            id="rc" value="{{ old('rc') }}">
                        @error('rc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ice" class="form-label">I.C.E</label>
                        <input type="text" name="ice" class="form-control  @error('ice')  is-invalid @enderror"
                            id="ice" value="{{ old('ice') }}">
                        @error('ice')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn app-btn-primary">sauvegarder</button>
                </form>
            </div>
        </div>
    </div>
</div>

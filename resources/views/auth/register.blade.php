<x-layout>
    {{-- SEZIONE REGISTER --}}
    <section>
        <div class="container-fluid form-register">
            <div class="row row-form-register">
                <div class="col-12 col-md-8 col-lg-5">
                    <h2 class="mb-4">{{ __('ui.registrati') }}</h2>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label fw-bold">{{ __('ui.tuoNome') }}</label>
                            <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-custom-class="custom-tooltip" data-bs-title="{{ __('ui.tooltipName') }}"></i>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.live="name" id="username" name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">{{ __('ui.tuaEmail') }}</label>
                            <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-custom-class="custom-tooltip" data-bs-title="{{ __('ui.tooltipEmail') }}"></i>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model.live="email" id="email" name="email" value="{{ old('email') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-custom-class="custom-tooltip"
                                data-bs-title="{{ __('ui.tooltipPassword') }}"></i>
                            <input type="password" class="form-control  @error('password') is-invalid @enderror" wire:model.live="password" id="password1" name="password">
                            <input type="checkbox" id="checkbox1"><span>{{ __('ui.mostra') }}</span>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password2" class="form-label fw-bold">{{ __('ui.confermaPassword') }}</label>
                            <input type="password" class="form-control" id="password2" name="password_confirmation">
                            <input type="checkbox" id="checkbox2" class="checkbox @error('password') is-invalid @enderror" wire:model.live="password"><span>{{ __('ui.mostra') }}</span>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-dark fw-bold">{{ __('ui.registrati') }}</button>
                        <div class="mt-3">
                            <h6> {{ __('ui.haiAccount') }} </h6>

                            <a class="text-decoration-none tx-black fw-bold"
                                href="{{ route('login') }}">{{ __('ui.accedi') }}</a>

                        </div>
                    </form>
                </div>

                <div class="col-12 col-md-4 info-register">
                    <h3 class="mb-5">{{ __('ui.perchèIscriversi?') }}</h3>
                    <ul>
                        <li class="fw-bold">{{ __('ui.semplice') }}</li>
                        <p>{{ __('ui.mettiAnnuncioUnClick') }}</p>
                        <li class="fw-bold">{{ __('ui.li1') }}</li>
                        <p>{{ __('ui.p1') }}</p>
                        <li class="fw-bold">{{ __('ui.li2') }}</li>
                        <p>{{ __('ui.p2') }}</p>
                    </ul>
                </div>
            </div>
        </div>
    </section>







</x-layout>

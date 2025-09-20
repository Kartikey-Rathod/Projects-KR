<x-layout>

    {{-- 
    <div class="container  my-5">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-mb-6 ">
                <h1>Accedi</h1>
            </div>
        </div>
    </div> --}}


    {{-- SEZIONE LOGIN --}}
    <section>
        <div class="container-fluid form-login">
            <div class="row row-form-login justify-content-center">
                <div class="col-12 col-md-8">
                    <h2 class="mb-5 fw-bold">{{__('ui.accedi')}}</h2>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">{{__('ui.email')}}</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model.live="email" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" wire:model.live="password" id="password3" name="password">
                            <input type="checkbox" id="checkbox3" class="checkbox"><span>{{ __('ui.mostra') }}</span>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-dark fw-bold">
                            {{__('ui.login')}}
                        </button>
                        <div class="mt-3">
                            <h6> {{__('ui.nonHaiAccount')}} </h6>

                            <a class="text-decoration-none tx-black fw-bold"
                                href="{{ route('register') }}">{{__('ui.registrati')}}</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>

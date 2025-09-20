<div>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form class="p-5 form-create" wire:submit="store">
        <div class="mb-3">
            <label for="title" class="form-label fw-bold">{{ __('ui.titolo') }}: </label>
            <input type="text" class="form-control" id="title" value="{{ old('title') }}" wire:model.blur="title">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label fw-bold">{{ __('ui.categoria') }}: </label>
            <select class="form-select" aria-label="Default select example" wire:model.live="categoria"
                name="categories[]">
                <option readonly>{{ __('ui.selezionaCategoria') }}</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ __("ui.$category->name") }}</option>
                @endforeach
            </select>
            @error('categoria')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label fw-bold">{{ __('ui.prezzo') }} €</label>
            <input type="number" class="form-control" id="price" value="{{ old('price') }}"
                wire:model.live="price">
            @error('price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label fw-bold">{{ __('ui.descrizione') }}:</label>
            <textarea id="description" value="{{ old('description') }}" class="form-control" wire:model.live="description"></textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        {{-- SEZIONE CARICAMENTO IMMAGINE --}}
        <div class="mb-3">
            <label for="image" class="form-label fw-bold">{{ __('ui.immagine') }}:</label>
            <input type="file"
                class="form-control shadow @error('temporary_images.*') is-invalid @enderror @error('temporary_images') is-invalid @enderror"
                id="image" wire:model.live="temporary_images" multiple placeholder="Img/" ">
            @error('temporary_images')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            @error('temporary_images.*')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
            @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p class="fw-bold">{{ __('ui.anteprimaImmagini') }}</p>
                    <div class="d-flex gap-3 flex-wrap border border-success rounded p-3">
                        @foreach ($images as $key => $image)
                            <div style="position: relative; width: 150px; height: 150px;">
                                <img src="{{ $image->temporaryUrl() }}" alt="Immagine" class="img-thumbnail">
                                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0"
                                    wire:click="removeImage({{ $key }})"><i class="fa-regular fa-2x fa-trash-can"></i></button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            <button type="submit" class="btn btn-dark my-3">{{ __('ui.inserisci') }}</button>
    </form>

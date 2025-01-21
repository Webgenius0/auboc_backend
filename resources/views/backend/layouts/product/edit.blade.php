@extends('backend.app')

@section('title', 'Product Edit')

@push('styles')
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 150px;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('content')

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Product Edit Form</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('product.index') }}"><i
                                    data-feather="skip-back"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active"> Product Create</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-12 col-lg-7">
                    <form class="card" method="POST" action="{{ route('product.update', ['id' => $data->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-header pb-0">
                            <h4 class="card-title mb-0">Product Edit</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">


                                        <label for="category_name" class="form-label f-w-500">Category :</label>
                                        <select name="category_id" class="form-select">
                                            <option value="">-- Select Type --</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $data->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">

                                        <label for="brand_name" class="form-label f-w-500">Brand :</label>
                                        <select name="brand_id" class="form-select">
                                            <option value="">-- Select Type --</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}"
                                                    {{ $data->brand_id == $brand->id ? 'selected' : '' }}>
                                                    {{ $brand->brand_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('brand_id')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">

                                        <label for="designer_name" class="form-label f-w-500">Designer Name :</label>
                                        <select name="designer_id" class="form-select">
                                            <option value="">-- Select Type --</option>
                                            @foreach ($designers as $designer)
                                                <option value="{{ $designer->id }}"
                                                    {{ $data->designer_id == $designer->id ? 'selected' : '' }}>
                                                    {{ $designer->designer_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('designer_id')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="name" class="form-label f-w-500">Product Name :</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Name" name="name" id="name"
                                            value="{{ $data->name ?? '' }}">
                                        @error('name')
                                            <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <!-- Heading for Product Price -->
                                    <label for="product_price" class="form-label f-w-500">Product Price :</label>
                                    <!-- Heading -->

                                    <div class="row"> <!-- Row to align inputs side by side -->
                                        <!-- Old Price -->
                                        <div class="mb-3 col-md-6"> <!-- Using col-md-6 for responsive columns -->
                                            <input type="number"
                                                class="form-control @error('old_price') is-invalid @enderror"
                                                placeholder="Old Price" name="old_price" id="old_price" min="1"
                                                value="{{ $data->old_price ?? '' }}">
                                            @error('old_price')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Selling Price -->
                                        <div class="mb-3 col-md-6"> <!-- Using col-md-6 for responsive columns -->
                                            <input type="number"
                                                class="form-control @error('selling_price') is-invalid @enderror"
                                                placeholder="Selling Price" name="selling_price" id="selling_price"
                                                min="1" value="{{ $data->selling_price ?? '' }}">
                                            @error('selling_price')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- 2nd time added --}}
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="product_code" class="form-label f-w-500">Product Code :</label>
                                        <input type="text"
                                            class="form-control @error('product_code') is-invalid @enderror"
                                            placeholder="Code" name="product_code" id="product_code"
                                            value="{{ $data->product_code ?? '' }}">
                                        @error('product_code')
                                            <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="description" class="form-label f-w-500">Description :</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Description"
                                            name="description" id="description">{{ $data->description ?? '' }}</textarea>
                                        @error('description')
                                            <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="sub_description" class="form-label f-w-500">Sub Description :</label>
                                        <textarea class="form-control @error('sub_description') is-invalid @enderror" placeholder="Sub Description"
                                            name="sub_description" id="sub_description">{{ $data->sub_description ?? '' }}</textarea>
                                        @error('sub_description')
                                            <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="image" class="form-label f-w-500">Image :</label>
                                        <input class="form-control dropify @error('image') is-invalid @enderror"
                                            type="file" data-default-file="{{ asset('/' . $data->image) }}"
                                            name="image">

                                        @error('image')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- <div class="col-12">
                                    <div class="mb-3">
                                        <label for="gallery" class="form-label f-w-500">Gallery:</label>
                                        <div class="row mb-3">
                                            @if ($data->galleries->isNotEmpty())
                                                @foreach ($data->galleries as $gallery)
                                                    <div id="gallery-item-{{ $gallery->id }}" class="col-md-3 text-center mb-3">
                                                        <img src="{{ asset($gallery->gallery ?? '') }}" alt="Gallery Image"
                                                             class="img-thumbnail" style="width: 100%; height: auto;">
                                                        <button class="btn btn-danger btn-sm delete-gallery-image mt-2"
                                                                data-gallery-id="{{ $gallery->id }}"
                                                                data-url="{{ route('gallery.delete', $gallery->id) }}"><i class="icon-trash"></i>
                                                        </button>

                                                    </div>
                                                @endforeach
                                            @else
                                                <p>No images uploaded yet.</p>
                                            @endif
                                        </div>

                                        <!-- New image upload -->
                                        <input
                                            class="form-control dropify @error('gallery') is-invalid @enderror"
                                            type="file"
                                            name="gallery[]"
                                            id="gallery"
                                            multiple
                                            accept="image/*">

                                        @error('gallery')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror

                                        @error('gallery.*')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div> --}}

                                <!-- Variants -->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="variants" class="form-label">Variants</label>
                                        <div id="variant-fields">
                                            @foreach ($data->variants as $index => $variant)
                                                <div class="variant-row" id="variant-row-{{ $variant->id }}">
                                                    <div class="row">
                                                        <!-- Color -->
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label for="color" class="form-label">Color</label>
                                                                <input type="text"
                                                                       class="form-control @error('variants.{{ $index }}.color') is-invalid @enderror"
                                                                       name="variants[{{ $index }}][color]"
                                                                       placeholder="Variant Color"
                                                                       value="{{ old("variants.$index.color", $variant->color) }}" required>
                                                                @error("variants.$index.color")
                                                                <div style="color: red">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <!-- Color Code -->
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label for="color_code" class="form-label">Color Code</label>

                                                                <!-- Color Picker Input -->
                                                                <input type="color"
                                                                       class="form-control form-control-color @error('variants.{{ $index }}.color_code') is-invalid @enderror"
                                                                       id="colorPicker_{{ $index }}"
                                                                       value="{{ old("variants.$index.color_code", $variant->color_code ?? '#000000') }}">

                                                                <!-- HEX Code Input -->
                                                                <input type="text"
                                                                       class="form-control mt-2 @error('variants.{{ $index }}.color_code') is-invalid @enderror"
                                                                       name="variants[{{ $index }}][color_code]"
                                                                       id="colorHex_{{ $index }}"
                                                                       placeholder="Variant Color Code"
                                                                       value="{{ old("variants.$index.color_code", $variant->color_code ?? '#000000') }}" required>

                                                                <!-- Error Display -->
                                                                @error("variants.$index.color_code")
                                                                <div style="color: red">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                        <!-- Quantity -->
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <input type="number"
                                                                    name="variants[{{ $index }}][quantity]"
                                                                    class="form-control" value="{{ $variant->quantity }}"
                                                                    placeholder="Quantity">
                                                            </div>
                                                        </div>

                                                        <!-- Variant Image -->
                                                        <div class="col-12">
                                                            <input type="file" class="form-control dropify"
                                                                name="variants[{{ $index }}][variant_image]"
                                                                data-default-file="{{ asset($variant->variant_image) }}"
                                                                value="{{ $variant->variant_image }}">
                                                            <input type="hidden"
                                                                name="variants[{{ $index }}][existing_variant_image]"
                                                                value="{{ $variant->variant_image }}">
                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="button" id="add-variant" class="btn btn-success mt-3">Add
                                            Variant</button>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit">Update</button>
                                <a href="{{ route('product.edit', ['id' => $data->id]) }}"
                                    class="btn btn-warning">Cancel</a>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

@endsection

@push('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'), {
                height: '500px'
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#description1'), {
                height: '500px'
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#sub_description'), {
                height: '500px'
            })
            .catch(error => {
                console.error(error);
            });


        $('.dropify').dropify();



        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>


    <script>
        // Dropify
        $('.dropify').dropify();

        // Add Variant Row
        let variantIndex = {{ $data->variants->count() }};
        $('#add-variant').on('click', function() {
            $('#variant-fields').append(`
            <div class="variant-row mt-3">
                <div class="row">
                    <!-- Color -->
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="variants[${variantIndex}][color]" class="form-label">Color</label>
                            <input type="text"
                                   name="variants[${variantIndex}][color]"
                                   class="form-control"
                                   placeholder="Variant Color">
                        </div>
                    </div>

                    <!-- Color Code -->
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="variants[${variantIndex}][color_code]" class="form-label">Color Code</label>

                            <!-- Color Picker Input -->
                            <input type="color"
                                   class="form-control form-control-color color-picker"
                                   id="colorPicker_${variantIndex}"
                                   value="#000000">

                            <!-- HEX Code Input -->
                            <input type="text"
                                   name="variants[${variantIndex}][color_code]"
                                   class="form-control mt-2 hex-input"
                                   id="colorHex_${variantIndex}"
                                   placeholder="Variant Color Code"
                                   value="#000000">
                        </div>
                    </div>

                    <!-- Quantity -->
                    <div class="col-12">
                        <div class="mb-3">
                            <input type="number"
                                   name="variants[${variantIndex}][quantity]"
                                   class="form-control"
                                   placeholder="Quantity">
                        </div>
                    </div>

                    <!-- Variant Image -->
                    <div class="col-12">
                        <div class="mb-3">
                            <input type="file"
                                   class="form-control dropify"
                                   name="variants[${variantIndex}][variant_image]">
                        </div>
                    </div>
                </div>
            </div>
        `);

            // Initialize Dropify for newly added file inputs
            $('.dropify').dropify();

            // Synchronize color picker with HEX input
            synchronizeColorPicker(variantIndex);

            // Increment variant index
            variantIndex++;
        });

        // Function to synchronize color picker and HEX input
        function synchronizeColorPicker(index) {
            const colorPicker = $(`#colorPicker_${index}`);
            const colorHex = $(`#colorHex_${index}`);

            // Update HEX input when the color picker changes
            colorPicker.on('input', function() {
                colorHex.val(colorPicker.val());
            });

            // Update color picker when the HEX input changes
            colorHex.on('input', function() {
                if (/^#[0-9A-Fa-f]{6}$/.test(colorHex.val())) {
                    colorPicker.val(colorHex.val());
                }
            });
        }
    </script>

    <script>
        // Delete image via Ajax
        document.querySelectorAll('.delete-gallery-image').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();

                // Get the gallery ID and URL for the delete request
                const galleryId = this.getAttribute('data-gallery-id');
                const url = this.getAttribute('data-url');
                const galleryItem = document.querySelector(`#gallery-item-${galleryId}`);

                // Confirm if the gallery item exists in the DOM
                if (!galleryItem) {
                    console.error(`Gallery item with ID #gallery-item-${galleryId} not found in the DOM.`);
                    return;
                }

                // Make an Ajax request to delete the image
                fetch(url, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Remove the image and delete button from the DOM
                            console.log(
                                `Gallery item with ID #gallery-item-${galleryId} is being removed.`);
                            galleryItem.remove();
                        } else {
                            alert(data.message || 'Error deleting image.');
                        }
                    })
                    .catch(error => {
                        console.error('Error during fetch:', error);
                        alert('An error occurred while deleting the image.');
                    });
            });
        });
    </script>
@endpush

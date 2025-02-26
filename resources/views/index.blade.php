<x-layout>

    <x-slot:title>Home</x-slot:title>

    <x-layout-scan>

        <section class="container overflow-y-auto">
            
            <section class="row mx-2 mb-3 mt-3">
                <div class="col-8">
                    <h2 class="fw-bold heading-home">
                        Mari temukan tanaman!
                    </h2>
                </div>

                <div class="mt-3 col-4">
                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="d-block">
                            <img src="{{ URL('icons/bell.svg') }}" class="w-100" alt="bell" />
                        </a>
                        <a href="/favorite" class="d-block">
                            <img src="{{ URL('icons/heart.svg') }}" class="w-100" alt="heart" />
                        </a>
                        
                    </div>
                </div>
                
            </section>

            <section class="row">
                <div class="col-12">
                    <div id="scanner" class="d-flex justify-content-center mx-3">
                        <div id="reader"
                            class="w-100 border rounded-4 mx-auto d-flex align-items-center justify-content-center">
                            <div id="error-scanner"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="row mb-5">

                <div class="col-12 mt-5 d-flex justify-content-center">
                    <button id="change-style" class="btn btn-primary">
                        Change Style
                    </button>
                </div>

                <div class="col-12 mb-5">
                    <div class="my-5 d-flex justify-content-center gap-4">

                        <input type="file" id="file-input-scanner" class="d-none" accept="image/*" />
                        <button id="select-image-btn" class="btn">
                            <img src="{{ URL('icons/select-image.svg') }}" alt="select-image-icon">
                        </button>
                        
                        
                        <div class="scanner-icon rounded-circle py-2 px-1">
                            <button class="btn" id="access-camera-btn">
                                <img src="{{ URL('icons/scanner.svg') }}" alt="scanner-icon">
                            </button>
                        </div>

                        <button id="flip-camera-btn" class="btn">
                            <img src="{{ URL('icons/change-camera.svg') }}" alt="change-camera-icon">
                        </button>
                    </div>
                </div>
            </section>
        </section>
        
    </x-layout-scan>

</x-layout>

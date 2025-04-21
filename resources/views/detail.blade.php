<x-layout>

    <x-slot:title>Detail</x-slot:title>


    <section class="mobile-wrapper">
        <div class="container">
            <x-back headingTitle="Detail" linkTo="/" />
            <div class="row justify-content-center px-0 position-relative min-h-screen">
                <div id="detail-img" class=" height-image">
                    <img src="{{ URL('images/tanaman-1.png') }}" alt="..."
                        class="img-fluid unzoom-image object-fit-cover" />
                </div>

                <div class="col-12 z-1 bg-white-cust pt-3 px-4 border rounded-5 rounded-bottom-0 pb-5">
                    <div class="d-flex align-items-center justify-content-between gap-5 mb-4 pt-4">

                        <h1 class="fw-bold fs-3">
                            {{ $data->name }}
                        </h1>
                        <div class="d-flex">
                            <button class="btn muted" id="btn-speak">
                                <img id="img-speak" src="{{ URL('icons/sound-green.svg') }}" alt="..."/>
                            </button>
                            <button class="btn">
                                <img src="{{ URL('icons/love-green.svg') }}" alt="..." />
                            </button>
                        </div>

                    </div>

                    <div class="mx-1 mb-5 fw-normal text-wrap detail-text fs-6 pb-5">
                        {!! $data->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const btnSpeak = document.getElementById('btn-speak');
        const textToSpeak = `{!! strip_tags($data->description) !!}`;

        btnSpeak.addEventListener('click', (el) => {
            const utterance = new SpeechSynthesisUtterance(textToSpeak);
            const img = document.getElementById('img-speak');
            utterance.lang = 'id-ID'; // Set the language to Indonesian

            if (speechSynthesis.speaking) {
                speechSynthesis.cancel(); // Stop any ongoing speech
                img.src = "{{ URL('icons/sound-green.svg') }}";
            } else {
                speechSynthesis.speak(utterance);
                img.src = "{{ URL('icons/sound-green-muted.svg') }}";
            }
        });
    </script>
</x-layout>

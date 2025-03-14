<x-layout>

    <x-slot:title>Riwayat</x-slot:title>

    <section class="container mb-5 pb-5">

        <x-back headingTitle="Riwayat" linkTo="/" />

        <div class="row mt-5 mb-5 overflow-y-auto history-list">

            <div class="col-12 col-lg-6">
                <div class="card mb-3 card-history-style">
                    <a href="/detail" class="row d-flex align-items-center text-decoration-none text-dark">
                        <div class="col-4 col-md-5">
                            <img src="{{ URL('/images/tanaman-1.png') }}" class="img-fluid rounded-2 my-2 ms-2 object-fit-cover card-history-size" alt="...">
                        </div>
                        <div class="col-8 col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Hanjuang
                                </h5>
                                <p class="card-text">
                                    13/10/24 18:30
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card mb-3 card-history-style">
                    <a href="/detail" class="row d-flex align-items-center text-decoration-none text-dark">
                        <div class="col-4 col-md-5">
                            <img src="{{ URL('/images/tanaman-2.jpg') }}" class="img-fluid rounded-2 my-2 ms-2 object-fit-cover card-history-size" alt="...">
                        </div>
                        <div class="col-8 col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Hanjuang
                                </h5>
                                <p class="card-text">
                                    13/10/24 18:30
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card mb-3 card-history-style">
                    <a href="/detail" class="row d-flex align-items-center text-decoration-none text-dark">
                        <div class="col-4 col-md-5">
                            <img src="{{ URL('/images/tanaman-3.jpeg') }}" class="img-fluid rounded-2 my-2 ms-2 object-fit-cover card-history-size" alt="...">
                        </div>
                        <div class="col-8 col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Hanjuang
                                </h5>
                                <p class="card-text">
                                    13/10/24 18:30
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card mb-3 card-history-style">
                    <a href="/detail" class="row d-flex align-items-center text-decoration-none text-dark">
                        <div class="col-4 col-md-5">
                            <img src="{{ URL('/images/tanaman-4.jpg') }}" class="img-fluid rounded-2 my-2 ms-2 object-fit-cover card-history-size" alt="...">
                        </div>
                        <div class="col-8 col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Hanjuang
                                </h5>
                                <p class="card-text">
                                    13/10/24 18:30
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


        </div>



    </section>

</x-layout>

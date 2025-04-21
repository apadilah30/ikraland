<section id="heading-back" class="container z-2 position-relative">

    <div
        class="row btn-back {{ in_array(request()->route()->uri(), ['detail']) ? '' : 'bg-white-cust' }} shadow-sm">

        <div class="col-auto">
            <a href="{{ $linkTo }}" class="text-center btn bg-white-cust opacity-75 rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px">
                <img src="{{ URL('/icons/back.svg') }}" alt="icon-back" class="mx-auto">
            </a>
        </div>

        <div class="col-auto">
            <span class="fw-bolder fs-3">{{ $headingTitle }}</span>
        </div>

        <div class="col-auto"></div>

    </div>

</section>

<section id="heading-back" class="container z-2">

    <div class="row fixed-top d-flex justify-content-between align-items-center ps-4 py-4 px-2 
    {{ in_array(request()->route()->uri(), ['detail']) ? '' : 'bg-white-cust' }}">

        <div class="col-auto">
            <a href="{{ $linkTo }}" class="text-center btn bg-white-cust opacity-75 rounded-circle ">
                <img src="{{ URL('/icons/back.svg') }}" alt="icon-back">
            </a>
        </div>

        <div class="col-auto">
            <span class="fw-bolder fs-3">{{ $headingTitle }}</span>
        </div>

        <div class="col-auto"></div>

    </div>

</section>
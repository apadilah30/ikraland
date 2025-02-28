<x-layout>

  <x-slot:title>Detail</x-slot:title>


  <x-back linkTo="/"/>

  <section class="container px-0 overflow-x-hidden">

    <div class="row justify-content-center px-0 position-relative">
      <div id="detail-img" class="col-12 px-0 z-0 height-image">
        <img src="{{ URL('images/tanaman-1.png') }}" alt="..." class="img-fluid unzoom-image object-fit-cover" />
      </div>

      <div class="col-12 z-1 bg-white-cust pt-3 px-4 mx-2 border rounded-5 rounded-bottom-0">
        <div class="d-flex align-items-center justify-content-between gap-5 mb-4 pt-4">
          
          <h1 class="fw-bold fs-1">
            Sri Rejeki
          </h1>
          <div class="d-flex">
            <button class="btn">
              <img src="{{ URL('icons/sound-green.svg') }}" alt="..." />
            </button>
            <button class="btn">
              <img src="{{ URL('icons/love-green.svg') }}" alt="..." />
            </button>
          </div>

        </div>

        <div class="mx-1">
          <p class="fw-normal text-wrap">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur adipisci laboriosam temporibus delectus aliquam! Maiores hic earum porro consequuntur natus aliquam aut adipisci doloribus ut, deleniti accusantium molestias dolorum nobis tenetur sunt eveniet corrupti libero laudantium quidem ex nostrum eum enim. Architecto rerum voluptatum provident hic saepe recusandae fuga laboriosam odit quisquam, nihil possimus esse similique accusantium, porro sunt voluptatem corporis assumenda repellat, ea dolorem. Incidunt totam quaerat eveniet, quos nulla unde fuga sapiente dolore, cupiditate quam ex iure nesciunt officia delectus nihil iste error dolor eos, vel quidem eum dignissimos! Beatae ex reiciendis assumenda eaque alias voluptas saepe aliquam?
          </p>
        </div>
      </div>
    </div>

  </section>



</x-layout>
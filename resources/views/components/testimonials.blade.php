<?php
$testimonials = json_decode(file_get_contents(storage_path('app/testimonials.json')));
?>


<section class="splide mna-testimonials-container mb-12">
  <div class="splide__track">
		<ul class="splide__list">
            @foreach ($testimonials as $testimonial)
            <li class="splide__slide mna-testimonial">
                <div class="mna-testimonial-img">
                    <img src="/images/testimonials/{{ $testimonial->img }}" alt="{{ $testimonial->name }}" loading="lazy">
                    <div class="mna-testimonial-img-bling"></div>
                    <div class="mna-testimonial-img-content">
                        <div class="mna-testimonial-img-content-name font-bold text-primary p-2 w-full text-xl leading-none">{{ $testimonial->name }}</div>
                    </div>
                </div>
                <p class="mt-4">{{$testimonial->quote}}</p>
                <p class="font-bold">{{$testimonial->position}}</p>
            </li>
            @endforeach
		</ul>
  </div>
</section>

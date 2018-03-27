<div class="col-lg-12 experimeerbuurt-shadow"></div>
@foreach($faqs as $index => $faq)
@if($faq == $faqs->first())
<div class="faq-question-wrapper flex-r aling-v justify-c col-12" data-id="{{ $index + 1 }}">
@else
<div class="faq-question-wrapper flex-c aling-v justify-c col-12 invisible" data-id="{{ $index + 1 }}">
@endif
    <div class="row">
        <h1 class="col-12 faq-question"><span>{{ $faq->question }}</span></h1>
        <p class="col-12 faq-answer"><span>{{ $faq->answer}}</span></p>
    </div>
</div>
@endforeach
<div class="col-12 faq-nav-wrapper flex-r align-v justify-c">
    <img src="{{ asset('/images/icons/chevron-left.svg') }}" class="img-fluid prev-question" style="width: 4%; cursor: pointer;" alt="volgende veel gestelde vraag">
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4" style="display: flex; align-items: center;">
        <span style="width: 100%; text-align: center;"> <span class="faq-count">1</span> / {{ count($faqs) }}</span>
    </div>
    <img src="{{ asset('/images/icons/chevron-right.svg') }}" class="img-fluid next-question" style="width: 4%; cursor: pointer;" alt="volgende veel gestelde vraag">
</div>

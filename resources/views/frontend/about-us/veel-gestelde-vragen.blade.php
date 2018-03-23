<div class="col-lg-12 experimeerbuurt-shadow"></div>
@foreach($faqs as $index => $faq)
@if($faq == $faqs->first())
<div class="faq-question-wrapper col-12" data-id="{{ $index + 1 }}">
@else
<div class="faq-question-wrapper col-12 d-none" data-id="{{ $index + 1 }}">
@endif
    <div class="col-lg-12">
        <h1 class="col-12 faq-question"><span>{{ $faq->question }}</span></h1>
        <p class="col-12 faq-answer"><span>{{ $faq->answer}}</span></p>
    </div>
</div>
@endforeach
<div class="col-12 faq-nav-wrapper">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-1" style="display: flex; align-items: center;">
        <span class="glyphicon glyphicon-chevron-left" style="width: 100%; text-align: right;"></span>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4" style="display: flex; align-items: center;">
        <span style="width: 100%; text-align: center;"> <span class="faq-count">1</span> / {{ count($faqs) }}</span>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="display: flex; align-items: center;">
        <span class="glyphicon glyphicon-chevron-right" style="width: 100%; text-align: left;"></span>
    </div>
</div>

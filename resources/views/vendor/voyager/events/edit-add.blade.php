@extends('voyager::master')

@section('page_title', __('voyager.generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->display_name_singular)

@section('css')
    <style>
        .panel .mce-panel {
            border-left-color: #fff;
            border-right-color: #fff;
        }
        .panel .mce-toolbar,
        .panel .mce-statusbar {
            padding-left: 20px;
        }
        .panel .mce-edit-area,
        .panel .mce-edit-area iframe,
        .panel .mce-edit-area iframe html {
            padding: 0 10px;
            min-height: 350px;
        }
        .mce-content-body {
            color: #555;
            font-size: 14px;
        }
        .panel.is-fullscreen .mce-statusbar {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 200000;
        }
        .panel.is-fullscreen .mce-tinymce {
            height:100%;
        }
        .panel.is-fullscreen .mce-edit-area,
        .panel.is-fullscreen .mce-edit-area iframe,
        .panel.is-fullscreen .mce-edit-area iframe html {
            height: 100%;
            position: absolute;
            width: 99%;
            overflow-y: scroll;
            overflow-x: hidden;
            min-height: 100%;
        }
    </style>
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        Wijzig de event gegevens
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content container-fluid">
        <form class="form-edit-add" role="form" action="@if(isset($dataTypeContent->id)){{ route('voyager.events.update', $dataTypeContent->id) }}@else{{ route('voyager.events.store') }}@endif" method="POST" enctype="multipart/form-data">
            <!-- PUT Method if we are editing -->
            @if(isset($dataTypeContent->id))
                {{ method_field("PUT") }}
            @endif
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-8">
                    <!-- ### events ### -->
                    <div class="panel  panel-bordered">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="panel-heading">
                            <h3 class="panel-title">
                              Events
                                <span class="panel-desc"> vul hier de gegevens in</span>
                            </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <label for="name">Naam:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="naam" value="@if(isset($dataTypeContent->name)){{ $dataTypeContent->name }}@endif">

                            <label for="description">Beschrijving:</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="beschrijving" value="@if(isset($dataTypeContent->description)){{ $dataTypeContent->description }}@endif">

                            <br>

                            <input type="checkbox" class="form-check-input" id="gift" name="gift" @if(isset($dataTypeContent->gift) && $dataTypeContent->gift) checked="checked" @endif>
                            <label for="gift">Gift</label>

                            <br>

                            <input type="checkbox" class="form-check-input" id="active" name="active" @if(isset($dataTypeContent->active) && $dataTypeContent->active) checked="checked" @endif>
                            <label for="active">Actief</label>

                            <br>

                            <label for="cost">Kosten:</label>
                            <input type="text" class="form-control" id="cost" name="cost" placeholder="kosten" value="@if(isset($dataTypeContent->cost)){{ $dataTypeContent->cost }}@endif">

                            <label for="event_date">Event datum:</label>
                            <input type="date" class="form-control" id="event_date" name="event_date" value="@if(isset($dataTypeContent->event_date)){{ $dataTypeContent->event_date }}@endif">

                            <label for="event_time">Event tijdstip:</label>
                            <input type="time" class="form-control" id="event_time" name="event_time" value="@if(isset($dataTypeContent->event_time)){{ $dataTypeContent->event_time }}@endif">

                            <label for="eventbrite_url">Eventbrite url:</label>
                            <input type="text" class="form-control" id="eventbrite_url" name="eventbrite_url" placeholder="eventbrite url" value="@if(isset($dataTypeContent->eventbrite_url)){{ $dataTypeContent->eventbrite_url }}@endif">

                            </div>
                      </div>
                  </div>
                    <div class="col-md-4">
                      <div class="panel  panel-bordered">
                      <div class="panel-heading">
                          <h3 class="panel-title">
                            Achtergrond Afbeelding
                              <span class="panel-desc"> vul hier de afbeelding in</span>
                          </h3>
                          <div class="panel-actions">
                              <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                          </div>
                          <div class="panel-body">
                            @if(isset($dataTypeContent->background_image))
                                <img src="{{ filter_var($dataTypeContent->background_image, FILTER_VALIDATE_URL) ? $dataTypeContent->background_image : Voyager::image( $dataTypeContent->background_image ) }}" style="width:100%" />
                            @endif
                              <label for="background_image">Afbeelding:</label>
                              <input type="file" class="form-control" id="background_image" name="background_image" placeholder="background_image" value="@if(isset($dataTypeContent->background_image)){{ $dataTypeContent->background_image }}@endif">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer">
                      <button type="submit" class="btn btn-primary save">Sla wijzingen op</button>
                  </div>
        </form>

        <iframe id="form_target" name="form_target" style="display:none"></iframe>
        <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
            {{ csrf_field() }}
            <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
            <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
        </form>
    </div>
@stop

@section('javascript')
    <script>
        $('document').ready(function () {
            $('#slug').slugify();
        @if ($isModelTranslatable)
            $('.side-body').multilingual({"editing": true});
        @endif
        });
    </script>
@stop

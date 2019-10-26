@extends('layouts.app')
@section('title')
    Мои лендинги
@endsection
@section('content')
    <div class="container">
        <div class="page-header">
            <h1 class="page-header__title">Мои лендинги</h1>
            <div class="dropdown">
                <a class="btn btn-blue btn-arrow" target="_blank" href="{{route('landings.create', ['name' => 'expert'])}}">
                    Coздать лендинг
                </a>
            </div>
        </div>

        @if( $landings->isNotEmpty() )
            <div class="block-list">
                @foreach($landings as $landing)
                    <div class="block-list__item">
                        <div class="block-list__main">
                            <div class="block-list__img-container">
                                <img src="https://cdn.p.smartexpert.net/platform/production/posts/images/ae631730-e4eb-11e9-a694-d915ce04e050.png"
                                     alt="landing image">
                                <div class="block-list__btn-group">
                                    <a target="_blank" href="{{route('landings.edit', ['landing' => $landing->id])}}" class="btn btn-blue">Редактировать</a>
                                    <a href="{{route('landings.settings', ['landing' => $landing->id])}}"  class="btn btn-blue">Настроить</a>
                                </div>
                            </div>
                        </div>
                        <div class="block-list__desc">
                            <h2>Лендинг</h2>
                            <h1>{{strip_tags($landing->name['text'])}}</h1>
                        </div>
                        <div class="block-list__footer">
                            <div class="block-list__status block-list__status--{{$landing->status ? 'green' : 'yellow'}}">
                                <span></span>
                                <p>{{$landing->status ? 'Опубликован' : 'Не опубликован'}}</p>
                            </div>
                            <div class="block-list__cta">
                                <a href="{{route('landings.show', ['id' => $landing->id])}}" class="btn btn-blue" target="_blank">
                                    Посмотреть
                                </a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>

            {!! $landings->appends(request()->except('page'))->links() !!}

        @else
            <div class="no-landings-block">
                <div class="no-landings-block__container">
                    <div class="no-landings-block__img">
                        <img src="{{ asset('/img/no_landing.jpg') }}" alt="you have no landing">
                    </div>
                    <div class="no-landings-block__text">
                        <h1>У вас пока нет лендингов, но это легко иправить</h1>
                        <p>Начните продавать свои знания прямо сейчас. Создайте свой первый продукт на нашей
                            платформе, привлеките аудиторию и станьте успешным экспертом.</p>
                        <div class="no-landings-block__button-group">
                            <a href="{{route('landings.create', ['layoutName' => 'expert'])}}"
                               class="btn btn-blue"
                               target="_blank">Создать лендинг</a>
                        </div>
                    </div>
                </div>
            </div>

        @endif

    </div>
@endsection
@push('after_styles')
    <link rel="stylesheet" href="{{ mix('css/list.css') }}">
@endpush

@push('after_scripts')
    <script src="{{ asset('js/toggleTabs.js') }}"></script>
    <script>
        toggleTabs.init();
    </script>
@endpush

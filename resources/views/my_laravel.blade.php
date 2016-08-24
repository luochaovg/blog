<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title"><?php echo $data['name']; echo $data['age'];?>
                    <p>{{isset($title)?$title:'aaa'}}  @{{$title}} @ 屏蔽</p>
                    <p>{!! $str !!}</p>

                </div>
                <div>
                    <p>
                        {{--@if($data['age']<60)--}}
                            {{--不及格--}}
                            {{--@else--}}
                                {{--及格--}}
                        {{--@endif--}}

                        {{--@unless($data['age']>60)--}}
                                {{--不及格--}}
                            {{--@endunless--}}

                        {{--@for($i=0; $i<=$data['num'];$i++)--}}
                            {{--{{$i}}<BR>--}}
                            {{--@endfor--}}

                        {{--@foreach($data['article'] as $v)--}}
                            {{--{{$v}}<br>--}}
                            {{--@endforeach--}}


                        {{--@forelse($data['news'] as $v)--}}
                            {{--{{$v}}<br>--}}
                                {{--@empty--}}
                                    {{--no data--}}
                            {{--@endforelse--}}

                        @foreach($data['article'] as $key => $v)
                            @if($key>1)
                                {{$key}} => {{$v}}<br>
                                @endif
                        @endforeach

                    </p>
                </div>
            </div>

        </div>
    </body>
</html>

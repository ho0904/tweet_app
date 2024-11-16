@component('mail::message')
# 昨日は{{$count}}件のつぶやきが追加されました！
{{$toUser->name}}さんこんにち

キノは{{$count}}件のつぶやきが追加されましたよ、最新のつぶさきに見にいきましょう

@component('mail::button', ['url' => route('tweet.index')])
つぶやきを見にくい

@endcomponent


@endcomponent

@component('mail::message')

#新しいユーザが追加されました
{{ $toUser->name}}さんこんにちは




@component('mail::panel')
    新しく{{ $newUser->name}}さんが参加しました
@endcomponent
@component('mail::button',['url' => route('tweet.index')])
    つぶやきを見にいく

@endcomponent
@endcomponent


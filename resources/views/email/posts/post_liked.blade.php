@component('mail::message')
Your post was liked

{{$liker->name}} like one of your posts

@component('mail::button', ['url' => route('posts.show',[$post])])
View Post
@endcomponent

Thanks.
{{-- Thanks,<br> --}}
{{-- {{ config('app.name') }} --}}
@endcomponent

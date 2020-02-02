@component('mail::message')
# Contact from submitted

Someone submitted contact from to your site

From Information:

Name: {{$data['msg_name']}}<br/>
Email: {{$data['email']}}<br/>
Title: {{$data['msg_title']}}<br/>
Message: {{$data['comments']}}<br/>

Thanks,<br>
{{ config('app.name') }}
@endcomponent

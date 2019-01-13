@component('mail::message')
# You have new project "{{ $project->title }}"

{{ $project->description }}

@component('mail::button', ['url' => '/projects/' . $project->id])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

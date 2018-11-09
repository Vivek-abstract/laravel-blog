@component('mail::message')
Hi {{ explode(" ", $name)[0] }},

Welcome to my blog! Here you'll find interesting articles about technology and life.
I plan on writing about latest trends in software development and other interesting tools I come across.
I'll also write about my journey as a Software Developer as it unwinds...

Here's an awesome quote:

@component('mail::panel', ['url' => ''])
"It does not matter how slowly you go as long as you do not stop"
@endcomponent

@component('mail::button', ['url' => 'http://vivekgawande.herokuapp.com'])
Start Browsing
@endcomponent

<hr>

Thanks,<br>
Vivek Gawande
@endcomponent

@props([
    'message' => '初期値です。',
    'content' => "first content",
    'title'
    ])

<div {{ $attributes->merge([
    'class' => 'border-2 shadow-md w-1/4 p-2 bg-red-300',

])}}>
<div>{{ $title }}</div>
<div>画像</div>
<div>{{ $content }}</div>
<div>{{ $message }}</div>
</div>
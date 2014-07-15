@extends('_master')


@section('title')
	Lorem Ipsum
@stop
<a href='/randtext'>Lorem Ipsum Generator</a> |
<a href='/'>Home</a>
<hr>   
@section('content')
   
    <?php $data = Input::all(); ?>
    <?php $generator = new Badcow\LoremIpsum\Generator(); ?>
    <?php $paragraphs = $generator->getParagraphs($data['num_par']); ?>
    <p class="text-left"><?php echo implode('<p>', $paragraphs); ?> </p>
   

<hr>
<a href='/randtext'>Lorem Ipsum Generator</a> |
<a href='/'>Home</a>

@stop
<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{$blog->title }}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{{$blog->body}}</p>
</div>

<!-- Publish Field -->
<div class="form-group">
    {!! Form::label('publish', 'Publish:') !!}
    <p>{{ $blog->publish }}</p>
</div>


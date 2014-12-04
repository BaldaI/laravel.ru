@extends('_layout.nosidebar')

@section('title')
	<?= e($post->title) ?>
@stop

@section('content')

<?= breadcrumbs(['Последние посты'=>route("feed"), ""=>""]) ?>

<h1><?= e($post->title) ?></h1>

<div class="post_credentials">
	<span class="date"><?= $post->displayPublishedAt() ?></span> <?= $post->author->displayProfile() ?>
	<?if(allowEditPost($post)){?>
		<span class="controls"><a class="btn btn-default btn-xs" href="<?= route("post.edit",[$post->slug]) ?>">Редактировать</a></span>
	<?}?>
</div>



<div class="post_content">
	<?= $post->displayText() ?>
</div>

@stop
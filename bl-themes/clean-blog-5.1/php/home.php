<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo $backgroundImage ?>')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="site-heading">
					<h1><?php echo $site->title() ?></h1>
					<span class="subheading"><?php echo $site->description() ?></span>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Main Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">

			<!-- Content -->
			<?php foreach ($content as $page): ?>

				<div class="post-preview">
					<a href="<?php echo $page->permalink() ?>">
						<h2 class="post-title"><?php echo $page->title() ?></h2>
						<h3 class="post-subtitle"><?php echo $page->description() ?></h3>
					</a>
					<p class="post-meta"><?php echo $language->get('Posted by').' '.$page->user('nickname').' - '.$page->date() ?></p>
				</div>
				<hr>

			<?php endforeach ?>

			<!-- Pager -->
			<div class="clearfix">
			<?php
				if (Paginator::showNext()) {
					echo '<a class="btn btn-primary float-left" href="'.Paginator::nextPageUrl().'">&larr; '.$language->get('Previous page').'</a>';
				}

				if (Paginator::showPrev()) {
					echo '<a class="btn btn-primary float-right" href="'.Paginator::previousPageUrl().'">'.$language->get('Next page').' &rarr;</a>';
				}
			?>
			</div>

		</div>
	</div>
</div>

<hr>

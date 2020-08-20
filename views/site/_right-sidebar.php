<?php
use yii\helpers\Url;
?>
	<!-- aside -->
					<div class="col-md-4">

<?php if(isset($most_read)): ?>
						<div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>
<? foreach($most_read as $most): ?>
							<div class="post post-widget">
								<a class="post-img" href="<?=Url::to(['article', 'id' => $most->id])?>"><img src="/uploads/<?=$most->image?>" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="<?=Url::to(['article', 'id' => $most->id])?>"><?=$most->title?></a></h3>
								</div>
							</div>
<? endforeach; ?>
						</div>
<? endif; ?>

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Featured Posts</h2>
							</div>
<? foreach($featured as $feat): ?>
							<div class="post post-thumb">
								<a class="post-img" href="<?=Url::to(['article', 'id' => $feat->id])?>"><img src="/uploads/<?=$feat->image?>" alt=""></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-3" href="<?=Url::to(['category', 'id' => $feat->category_id])?>"><?=$feat->category->title?></a>
										<span class="post-date"><?= \Yii::$app->formatter->asDate($feat->date, 'long');?></span>
									</div>
									<h3 class="post-title"><a href="<?=Url::to(['article', 'id' => $feat->id])?>"><?=$feat->title?></a></h3>
								</div>
							</div>
<? endforeach; ?>
						</div>
						<!-- /post widget -->
						
						<!-- catagories -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
								<ul>
						<?php $m = 1; foreach($categories as $category): ?>
							
									<li><a href="<?=Url::to(['category', 'id' => $category->id])?>" class="cat-<?=$m?>"><?=$category->title?><span><?=$category->getArticles()->count()?></span></a></li>

						<? ++$m; endforeach; ?>
								</ul>
							</div>
						</div>
						<!-- /catagories -->
						
						<!-- tags -->
						<div class="aside-widget">
							<div class="tags-widget">
								<ul>
									<li><a href="#">Chrome</a></li>
									<li><a href="#">CSS</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Backend</a></li>
									<li><a href="#">JQuery</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Development</a></li>
									<li><a href="#">JavaScript</a></li>
									<li><a href="#">Website</a></li>
								</ul>
							</div>
						</div>
						<!-- /tags -->
						
						<!-- archive -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Archive</h2>
							</div>
							<div class="archive-widget">
								<ul>
									<li><a href="#">January 2018</a></li>
									<li><a href="#">Febuary 2018</a></li>
									<li><a href="#">March 2018</a></li>
								</ul>
							</div>
						</div>
						<!-- /archive -->
					</div>
					<!-- /aside -->
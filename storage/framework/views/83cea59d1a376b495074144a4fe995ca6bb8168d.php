

<?php $__env->startSection("contain"); ?>
    <div class="files-new">
				<ul>
				<?php $__currentLoopData = $book->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		
					<li>
						<div class="row" id="row1">
							<div class="col-md-2">
								<div class="file-left">
									<a href="#" >
										<img class="img-zoom file-img" src="<?php echo e('http://127.0.0.1:8000/bookimages/' . $b->bcover); ?>" alt=<?php echo e($b->bname); ?> title=<?php echo e($b->bname); ?> id="img1">
									</a>
									
								</div>
							</div>
						
							<div class="col-md-7">
								<div class="float-right">
									<a href="#" data-loc="1">
										<h2><?php echo e($b->bname); ?></h2>
									</a>
								
								<div class="file-info" data-id="10172273">
									<span class="fi-pagecount "><?php echo e($b->bpage); ?>  Pages</span><span class="ml-1 mr-1">·</span><span class="fi-year "><?php echo e($b->bpubdate); ?></span><span class="ml-1 mr-1">·</span><span class="fi-size hidemobile"><?php echo e($b->bsize); ?> MB</span><span class="ml-1 mr-1 hidemobile">·</span><span class="fi-hit">00 Downloads</span></span> <br />
								</div>
								<?php echo e($b->bdescribe); ?>

								 &nbsp;...
								</div>
								<h5><a href="home/<?php echo e($b->id); ?>/view">View</a></h5>
							
							</div>
						</div>
					</li>
				
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
					<hr/>
				<span>
					<?php echo e($book->links()); ?>

				</span>
					<hr/>
				
			</div>
		  
<?php $__env->stopSection(); ?>
	

<?php echo $__env->make("layout.user", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mansi\laravel\pdfdrive3\resources\views/home/index.blade.php ENDPATH**/ ?>
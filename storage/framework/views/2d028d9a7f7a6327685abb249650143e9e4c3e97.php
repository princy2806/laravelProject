

<?php $__env->startSection("contain"); ?>
  <style>
  

.float-right{
	float:right;
	width:100%;
	hight:100%;
}

#img1{
	height:200px;
	width:auto;
	margin-left:0px;
}

#img1:hover{
	border:2px solid #00BFFF;
}

#btn3{
	margin-top:40px;
	width: auto;
	padding: 10px 18px;
	margin-right:20px;
	background-color:#696969;
}

.float-right{
	margin-left:20px;
}
</style>

    <div class="files-new">
				<ul>
					<li>
						<div class="row" id="row1">
							<div class="col-md-3">
								<div class="file-left">
									<a href="/living-in-the-light-a-guide-to-personal-transformation-e10172273.html" data-id="10172273">
										<img class="img-zoom file-img" src="<?php echo e('http://127.0.0.1:8000/bookimages/' . $book->bcover); ?>" data-original="https://s.pdfdrive.com/assets/thumbs/9b8/9b88b7c17f496a61fc78505130af288e-s.jpg" alt="Living in the Light: A guide to personal transformation" title="Living in the Light: A guide to personal transformation" id="img1">
									</a>
									
								</div>
							</div>
						
							<div class="col-md-6">
								<div class="float-right">
									<a href="#">
										<h2><?php echo e($book->bname); ?></h2>
									</a>
								
								<div class="file-info">
									<span class="fi-pagecount "><?php echo e($book->bpage); ?> Pages</span><span class="ml-1 mr-1">·</span><span class="fi-year "><?php echo e($book->bpubdate); ?></span><span class="ml-1 mr-1">·</span><span class="fi-size hidemobile"><?php echo e($book->bsize); ?> MB</span><span class="ml-1 mr-1 hidemobile">·</span><span class="fi-hit">00 Downloads</span></span> <br />
								</div>
								<?php echo e($book->bdescribe); ?>

								&nbsp;...<br>
								
								<button type="button" value="Download" id="btn3">Download</button>
								
								<button type="button" value="preview" id="btn3">Preview</button>
								</div>
								
							</div>
						</div>
					</li>
				</ul>
			</div>
		  
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.user", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mansi\laravel\pdfdrive3\resources\views/home/view.blade.php ENDPATH**/ ?>
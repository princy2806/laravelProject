

<?php $__env->startSection("contain"); ?>
  <style>
  

.float-right{
	float:right;
	width:100%;
	hight:100%;
}

#img1{
	height:300px;
	width:auto;
	margin-left:0px;
}

#img1:hover{
	padding:10px 10px 10px 10px;
	border:3px solid #00BFFF;
}

#btn3{
	margin-top:40px;
	width: auto;
	padding: 5px 5px 5px 5px;
	font-size:18px;
	margin-right:20px;
	color:white;
	font-weight:bold;
	background-color:#696969;
}
#btn3:hover{
	opacity:0.8;
}

.float-right{
	margin-left:20px;
}
p{
	font-size:16px;
}
</style>

    <div class="files-new">
				<ul>
					<li>
						<div class="row" id="row1">
							<div class="col-md-3">
								<div class="file-left">
									<a href="/living-in-the-light-a-guide-to-personal-transformation-e10172273.html" data-id="10172273">
										<img class="img-zoom file-img" src="<?php echo e('http://127.0.0.1:8000/bookimages/' . $book->bcover); ?>" id="img1">
									</a>
									
								</div>
							</div>
						
							<div class="col-md-6">
								<div class="float-right">
									
										<h1><?php echo e($book->bname); ?></h1><br>
								
								<p><b>Author Name :-</b> <?php echo e($book->bauthor); ?></p>
								<p><b>Pages & Size :- </b><?php echo e($book->bpage); ?> & <?php echo e($book->bsize); ?></p>
								<p><b>Language :- </b><?php echo e($book->blanguage); ?></p>
								<p><b>Publish Date :-</b> <?php echo e($book->bpubdate); ?></p>
								&nbsp;...<br>
								
								<button type="button" value="Download" id="btn3">Download</button>
								<a href="http://127.0.0.1:8000/home/<?php echo e($book->id); ?>/preview">
								<button type="button" value="preview" id="btn3">Preview</button>
								</a>
								</div>
								
							</div>
						</div>
					</li>
				</ul>
			</div>
		  
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.user", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ansh\pdfdrive 27-2\resources\views/home/view.blade.php ENDPATH**/ ?>
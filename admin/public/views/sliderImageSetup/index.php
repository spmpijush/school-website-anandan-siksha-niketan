<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); ?>

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
				<button id="modal-trigger-btn" class="btn btn-primary">New slider image</button>
			</div>
			<div class="col-12 mt-2" id="item-list"></div>
		</div>
		<!-- /.row -->

	</div>
	<!-- /.container-fluid -->
</div>
<!-- /.content -->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="#" action="post" id="ui-form"></form>
			</div>
			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
				<button type="button" id="save_btn" class="btn btn-primary">Save Page</button>
			</div>
		</div>
	</div>
</div>
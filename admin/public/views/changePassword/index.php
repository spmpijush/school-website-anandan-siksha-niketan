<?php if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); ?>

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-4 offset-md-4 mt-2">

                <div class="card">
                    <div class="card-body">
                        <form action="#" id="change-passwod-form">
                            <div class="form-group">
                                <label for=""> New password </label>
                                <input type="password" id="new_password" 
                                    name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""> Type password again to confirm it is right</label>
                                <input type="password" id="confirm_password"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" id="change"
                                    class="btn btn-primary btn-block"> Change </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
		<!-- /.row -->

    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->
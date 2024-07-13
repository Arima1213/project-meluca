@extends('user.template.templates')

@section('container')
	<div class="container-fluid py-4">
		<div class="row">
			<div class="col-12">
				<div class="card my-4">
					<div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
						<div class="bg-gradient-primary shadow-primary border-radius-lg pb-3 pt-4">
							<h6 class="text-capitalize ps-3 text-white">Submit Feedback</h6>
						</div>
					</div>
					<div class="card-body">
						<form action="submitFeedback.php" method="post">
							<input type="hidden" name="user_id" value="">
							<div class="input-group input-group-static mb-4">
								<label for="message">Feedback Message</label>
								<textarea name="message" id="message" class="form-control" rows="4" required></textarea>
							</div>
							<button type="submit" class="btn bg-gradient-primary">Submit Feedback</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

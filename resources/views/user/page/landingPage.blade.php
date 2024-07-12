@extends('template.template')

@section('container')
	<div class="container-fluid py-4">
		<div class="row">
			<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
				<div class="card">
					<div class="card-header p-3 pt-2">
						<div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark border-radius-xl mt-n4 position-absolute text-center">
							<i class="material-icons opacity-10">weekend</i>
						</div>
						<div class="pt-1 text-end">
							<p class="text-capitalize mb-0 text-sm">Today's Money</p>
							<h4 class="mb-0">$53k</h4>
						</div>
					</div>
					<hr class="horizontal dark my-0" />
					<div class="card-footer p-3">
						<p class="mb-0">
							<span class="text-success font-weight-bolder text-sm">+55% </span>than lask week
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
				<div class="card">
					<div class="card-header p-3 pt-2">
						<div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary border-radius-xl mt-n4 position-absolute text-center">
							<i class="material-icons opacity-10">person</i>
						</div>
						<div class="pt-1 text-end">
							<p class="text-capitalize mb-0 text-sm">Today's Users</p>
							<h4 class="mb-0">2,300</h4>
						</div>
					</div>
					<hr class="horizontal dark my-0" />
					<div class="card-footer p-3">
						<p class="mb-0">
							<span class="text-success font-weight-bolder text-sm">+3% </span>than lask month
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
				<div class="card">
					<div class="card-header p-3 pt-2">
						<div class="icon icon-lg icon-shape bg-gradient-success shadow-success border-radius-xl mt-n4 position-absolute text-center">
							<i class="material-icons opacity-10">person</i>
						</div>
						<div class="pt-1 text-end">
							<p class="text-capitalize mb-0 text-sm">New Clients</p>
							<h4 class="mb-0">3,462</h4>
						</div>
					</div>
					<hr class="horizontal dark my-0" />
					<div class="card-footer p-3">
						<p class="mb-0">
							<span class="text-danger font-weight-bolder text-sm">-2%</span>
							than yesterday
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6">
				<div class="card">
					<div class="card-header p-3 pt-2">
						<div class="icon icon-lg icon-shape bg-gradient-info shadow-info border-radius-xl mt-n4 position-absolute text-center">
							<i class="material-icons opacity-10">weekend</i>
						</div>
						<div class="pt-1 text-end">
							<p class="text-capitalize mb-0 text-sm">Sales</p>
							<h4 class="mb-0">$103,430</h4>
						</div>
					</div>
					<hr class="horizontal dark my-0" />
					<div class="card-footer p-3">
						<p class="mb-0">
							<span class="text-success font-weight-bolder text-sm">+5% </span>than yesterday
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-lg-4 col-md-6 mb-4 mt-4">
				<div class="card z-index-2">
					<div class="card-header position-relative mt-n4 z-index-2 mx-3 bg-transparent p-0">
						<div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
							<div class="chart">
								<canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
							</div>
						</div>
					</div>
					<div class="card-body">
						<h6 class="mb-0">Website Views</h6>
						<p class="text-sm">Last Campaign Performance</p>
						<hr class="horizontal dark" />
						<div class="d-flex">
							<i class="material-icons my-auto me-1 text-sm">schedule</i>
							<p class="mb-0 text-sm">campaign sent 2 days ago</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 mt-4">
				<div class="card z-index-2">
					<div class="card-header position-relative mt-n4 z-index-2 mx-3 bg-transparent p-0">
						<div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
							<div class="chart">
								<canvas id="chart-line" class="chart-canvas" height="170"></canvas>
							</div>
						</div>
					</div>
					<div class="card-body">
						<h6 class="mb-0">Daily Sales</h6>
						<p class="text-sm">
							(<span class="font-weight-bolder">+15%</span>) increase in
							today sales.
						</p>
						<hr class="horizontal dark" />
						<div class="d-flex">
							<i class="material-icons my-auto me-1 text-sm">schedule</i>
							<p class="mb-0 text-sm">updated 4 min ago</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mb-3 mt-4">
				<div class="card z-index-2">
					<div class="card-header position-relative mt-n4 z-index-2 mx-3 bg-transparent p-0">
						<div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
							<div class="chart">
								<canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
							</div>
						</div>
					</div>
					<div class="card-body">
						<h6 class="mb-0">Completed Tasks</h6>
						<p class="text-sm">Last Campaign Performance</p>
						<hr class="horizontal dark" />
						<div class="d-flex">
							<i class="material-icons my-auto me-1 text-sm">schedule</i>
							<p class="mb-0 text-sm">just updated</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb-4">
			<div class="col-lg-8 col-md-6 mb-md-0 mb-4">
				<div class="card">
					<div class="card-header pb-0">
						<div class="row">
							<div class="col-lg-6 col-7">
								<h6>Projects</h6>
								<p class="mb-0 text-sm">
									<i class="fa fa-check text-info" aria-hidden="true"></i>
									<span class="font-weight-bold ms-1">30 done</span> this
									month
								</p>
							</div>
							<div class="col-lg-6 col-5 my-auto text-end">
								<div class="dropdown float-lg-end pe-4">
									<a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="fa fa-ellipsis-v text-secondary"></i>
									</a>
									<ul class="dropdown-menu ms-sm-n4 ms-n5 px-2 py-3" aria-labelledby="dropdownTable">
										<li>
											<a class="dropdown-item border-radius-md" href="javascript:;">Action</a>
										</li>
										<li>
											<a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
										</li>
										<li>
											<a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body px-0 pb-2">
						<div class="table-responsive">
							<table class="align-items-center mb-0 table">
								<thead>
									<tr>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
											Companies
										</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
											Members
										</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
											Budget
										</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
											Completion
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="d-flex px-2 py-1">
												<div>
													<img src="./assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd" />
												</div>
												<div class="d-flex flex-column justify-content-center">
													<h6 class="mb-0 text-sm">Material XD Version</h6>
												</div>
											</div>
										</td>
										<td>
											<div class="avatar-group mt-2">
												<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom"
													title="Ryan Tompson">
													<img src="./assets/img/team-1.jpg" alt="team1" />
												</a>
												<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom"
													title="Romina Hadid">
													<img src="./assets/img/team-2.jpg" alt="team2" />
												</a>
												<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom"
													title="Alexander Smith">
													<img src="./assets/img/team-3.jpg" alt="team3" />
												</a>
												<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom"
													title="Jessica Doe">
													<img src="./assets/img/team-4.jpg" alt="team4" />
												</a>
											</div>
										</td>
										<td class="text-center align-middle text-sm">
											<span class="font-weight-bold text-xs">
												$14,000
											</span>
										</td>
										<td class="align-middle">
											<div class="progress-wrapper w-75 mx-auto">
												<div class="progress-info">
													<div class="progress-percentage">
														<span class="font-weight-bold text-xs">60%</span>
													</div>
												</div>
												<div class="progress">
													<div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex px-2 py-1">
												<div>
													<img src="./assets/img/small-logos/logo-atlassian.svg" class="avatar avatar-sm me-3" alt="atlassian" />
												</div>
												<div class="d-flex flex-column justify-content-center">
													<h6 class="mb-0 text-sm">Add Progress Track</h6>
												</div>
											</div>
										</td>
										<td>
											<div class="avatar-group mt-2">
												<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom"
													title="Romina Hadid">
													<img src="./assets/img/team-2.jpg" alt="team5" />
												</a>
												<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom"
													title="Jessica Doe">
													<img src="./assets/img/team-4.jpg" alt="team6" />
												</a>
											</div>
										</td>
										<td class="text-center align-middle text-sm">
											<span class="font-weight-bold text-xs"> $3,000 </span>
										</td>
										<td class="align-middle">
											<div class="progress-wrapper w-75 mx-auto">
												<div class="progress-info">
													<div class="progress-percentage">
														<span class="font-weight-bold text-xs">10%</span>
													</div>
												</div>
												<div class="progress">
													<div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex px-2 py-1">
												<div>
													<img src="./assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm me-3" alt="team7" />
												</div>
												<div class="d-flex flex-column justify-content-center">
													<h6 class="mb-0 text-sm">Fix Platform Errors</h6>
												</div>
											</div>
										</td>
										<td>
											<div class="avatar-group mt-2">
												<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom"
													title="Romina Hadid">
													<img src="./assets/img/team-3.jpg" alt="team8" />
												</a>
												<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom"
													title="Jessica Doe">
													<img src="./assets/img/team-1.jpg" alt="team9" />
												</a>
											</div>
										</td>
										<td class="text-center align-middle text-sm">
											<span class="font-weight-bold text-xs">
												Not set
											</span>
										</td>
										<td class="align-middle">
											<div class="progress-wrapper w-75 mx-auto">
												<div class="progress-info">
													<div class="progress-percentage">
														<span class="font-weight-bold text-xs">100%</span>
													</div>
												</div>
												<div class="progress">
													<div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex px-2 py-1">
												<div>
													<img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm me-3" alt="spotify" />
												</div>
												<div class="d-flex flex-column justify-content-center">
													<h6 class="mb-0 text-sm">
														Launch our Mobile App
													</h6>
												</div>
											</div>
										</td>
										<td>
											<div class="avatar-group mt-2">
												<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom"
													title="Ryan Tompson">
													<img src="./assets/img/team-4.jpg" alt="user1" />
												</a>
												<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom"
													title="Romina Hadid">
													<img src="./assets/img/team-3.jpg" alt="user2" />
												</a>
												<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom"
													title="Alexander Smith">
													<img src="./assets/img/team-4.jpg" alt="user3" />
												</a>
												<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom"
													title="Jessica Doe">
													<img src="./assets/img/team-1.jpg" alt="user4" />
												</a>
											</div>
										</td>
										<td class="text-center align-middle text-sm">
											<span class="font-weight-bold text-xs">
												$20,500
											</span>
										</td>
										<td class="align-middle">
											<div class="progress-wrapper w-75 mx-auto">
												<div class="progress-info">
													<div class="progress-percentage">
														<span class="font-weight-bold text-xs">100%</span>
													</div>
												</div>
												<div class="progress">
													<div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex px-2 py-1">
												<div>
													<img src="./assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm me-3" alt="jira" />
												</div>
												<div class="d-flex flex-column justify-content-center">
													<h6 class="mb-0 text-sm">
														Add the New Pricing Page
													</h6>
												</div>
											</div>
										</td>
										<td>
											<div class="avatar-group mt-2">
												<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom"
													title="Ryan Tompson">
													<img src="./assets/img/team-4.jpg" alt="user5" />
												</a>
											</div>
										</td>
										<td class="text-center align-middle text-sm">
											<span class="font-weight-bold text-xs"> $500 </span>
										</td>
										<td class="align-middle">
											<div class="progress-wrapper w-75 mx-auto">
												<div class="progress-info">
													<div class="progress-percentage">
														<span class="font-weight-bold text-xs">25%</span>
													</div>
												</div>
												<div class="progress">
													<div class="progress-bar bg-gradient-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex px-2 py-1">
												<div>
													<img src="./assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm me-3" alt="invision" />
												</div>
												<div class="d-flex flex-column justify-content-center">
													<h6 class="mb-0 text-sm">
														Redesign New Online Shop
													</h6>
												</div>
											</div>
										</td>
										<td>
											<div class="avatar-group mt-2">
												<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom"
													title="Ryan Tompson">
													<img src="./assets/img/team-1.jpg" alt="user6" />
												</a>
												<a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom"
													title="Jessica Doe">
													<img src="./assets/img/team-4.jpg" alt="user7" />
												</a>
											</div>
										</td>
										<td class="text-center align-middle text-sm">
											<span class="font-weight-bold text-xs"> $2,000 </span>
										</td>
										<td class="align-middle">
											<div class="progress-wrapper w-75 mx-auto">
												<div class="progress-info">
													<div class="progress-percentage">
														<span class="font-weight-bold text-xs">40%</span>
													</div>
												</div>
												<div class="progress">
													<div class="progress-bar bg-gradient-info w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="card h-100">
					<div class="card-header pb-0">
						<h6>Orders overview</h6>
						<p class="text-sm">
							<i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
							<span class="font-weight-bold">24%</span> this month
						</p>
					</div>
					<div class="card-body p-3">
						<div class="timeline timeline-one-side">
							<div class="timeline-block mb-3">
								<span class="timeline-step">
									<i class="material-icons text-success text-gradient">notifications</i>
								</span>
								<div class="timeline-content">
									<h6 class="text-dark font-weight-bold mb-0 text-sm">
										$2400, Design changes
									</h6>
									<p class="text-secondary font-weight-bold mb-0 mt-1 text-xs">
										22 DEC 7:20 PM
									</p>
								</div>
							</div>
							<div class="timeline-block mb-3">
								<span class="timeline-step">
									<i class="material-icons text-danger text-gradient">code</i>
								</span>
								<div class="timeline-content">
									<h6 class="text-dark font-weight-bold mb-0 text-sm">
										New order #1832412
									</h6>
									<p class="text-secondary font-weight-bold mb-0 mt-1 text-xs">
										21 DEC 11 PM
									</p>
								</div>
							</div>
							<div class="timeline-block mb-3">
								<span class="timeline-step">
									<i class="material-icons text-info text-gradient">shopping_cart</i>
								</span>
								<div class="timeline-content">
									<h6 class="text-dark font-weight-bold mb-0 text-sm">
										Server payments for April
									</h6>
									<p class="text-secondary font-weight-bold mb-0 mt-1 text-xs">
										21 DEC 9:34 PM
									</p>
								</div>
							</div>
							<div class="timeline-block mb-3">
								<span class="timeline-step">
									<i class="material-icons text-warning text-gradient">credit_card</i>
								</span>
								<div class="timeline-content">
									<h6 class="text-dark font-weight-bold mb-0 text-sm">
										New card added for order #4395133
									</h6>
									<p class="text-secondary font-weight-bold mb-0 mt-1 text-xs">
										20 DEC 2:20 AM
									</p>
								</div>
							</div>
							<div class="timeline-block mb-3">
								<span class="timeline-step">
									<i class="material-icons text-primary text-gradient">key</i>
								</span>
								<div class="timeline-content">
									<h6 class="text-dark font-weight-bold mb-0 text-sm">
										Unlock packages for development
									</h6>
									<p class="text-secondary font-weight-bold mb-0 mt-1 text-xs">
										18 DEC 4:54 AM
									</p>
								</div>
							</div>
							<div class="timeline-block">
								<span class="timeline-step">
									<i class="material-icons text-dark text-gradient">payments</i>
								</span>
								<div class="timeline-content">
									<h6 class="text-dark font-weight-bold mb-0 text-sm">
										New order #9583120
									</h6>
									<p class="text-secondary font-weight-bold mb-0 mt-1 text-xs">
										17 DEC
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('user.template.footer')
	</div>
@endsection

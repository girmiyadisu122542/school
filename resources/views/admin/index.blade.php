@extends('admin.admin_master')
@section('admin')

  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div class="icon bg-primary-light rounded w-60 h-60">
			<i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">Total Students</p>
			<h3 class="text-white mb-0 font-weight-500">1,245 <small class="text-success"><i class="fa fa-caret-up"></i> +8.5%</small></h3>
		</div>
	</div>
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div class="icon bg-warning-light rounded w-60 h-60">
			<i class="text-warning mr-0 font-size-24 mdi mdi-account-tie"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">Total Teachers</p>
			<h3 class="text-white mb-0 font-weight-500">89 <small class="text-success"><i class="fa fa-caret-up"></i> +3.2%</small></h3>
		</div>
	</div>
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div class="icon bg-info-light rounded w-60 h-60">
			<i class="text-info mr-0 font-size-24 mdi mdi-cash-multiple"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">Monthly Revenue</p>
			<h3 class="text-white mb-0 font-weight-500">$45,250 <small class="text-success"><i class="fa fa-caret-up"></i> +12.5%</small></h3>
		</div>
	</div>
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div class="icon bg-danger-light rounded w-60 h-60">
			<i class="text-danger mr-0 font-size-24 mdi mdi-school"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">Total Classes</p>
			<h3 class="text-white mb-0 font-weight-500">24 <small class="text-success"><i class="fa fa-caret-up"></i> +2.1%</small></h3>
		</div>
	</div>
</div>
</div>
 
 
 
 
<div class="col-12">
<div class="box">
	<div class="box-header">
		<h4 class="box-title align-items-start flex-column">
			Recent Student Registrations
			<small class="subtitle">Latest enrolled students this month</small>
		</h4>
	</div>
	<div class="box-body">
		<div class="table-responsive">
			<table class="table no-border">
				<thead>
					<tr class="text-uppercase bg-lightest">
						<th style="min-width: 250px"><span class="text-white">Student Details</span></th>
						<th style="min-width: 100px"><span class="text-fade">Class</span></th>
						<th style="min-width: 100px"><span class="text-fade">Fee Status</span></th>
						<th style="min-width: 150px"><span class="text-fade">Guardian</span></th>
						<th style="min-width: 130px"><span class="text-fade">Status</span></th>
						<th style="min-width: 120px"></th>
					</tr>
				</thead>
				<tbody>
					<tr>										
						<td class="pl-0 py-8">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 mr-20">
	 <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-1.jpg)"></div>
								</div>

								<div>
									<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Ahmed Hassan</a>
									<span class="text-fade d-block">Roll: 2024001, Grade 10-A</span>
								</div>
							</div>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Class 10
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								Science Section
							</span>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Paid
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								$450
							</span>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Mr. Hassan Ali
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								Father
							</span>
						</td>
						<td>
							<span class="badge badge-primary-light badge-lg">Active</span>
						</td>
						<td class="text-right">
							<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-eye"></span></a>
							<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-pencil"></span></a>
						</td>
					</tr>
					<tr>										
						<td class="pl-0 py-8">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 mr-20">
									<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-2.jpg)"></div>
								</div>

								<div>
									<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Sarah Mohammed</a>
									<span class="text-fade d-block">Roll: 2024002, Grade 9-B</span>
								</div>
							</div>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Class 9
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								Arts Section
							</span>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Pending
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								$420
							</span>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Mrs. Fatima Ahmed
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								Mother
							</span>
						</td>
						<td>
							<span class="badge badge-warning-light badge-lg">Pending</span>
						</td>
						<td class="text-right">
							<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-eye"></span></a>
							<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-pencil"></span></a>
						</td>
					</tr>
					<tr>										
						<td class="pl-0 py-8">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 mr-20">
									<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-3.jpg)"></div>
								</div>

								<div>
									<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Omar Ibrahim</a>
									<span class="text-fade d-block">Roll: 2024003, Grade 11-A</span>
								</div>
							</div>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Class 11
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								Commerce Section
							</span>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Paid
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								$480
							</span>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Mr. Ibrahim Yusuf
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								Father
							</span>
						</td>
						<td>
							<span class="badge badge-success-light badge-lg">Active</span>
						</td>
						<td class="text-right">
							<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-eye"></span></a>
							<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-pencil"></span></a>
						</td>
					</tr>
					<tr>										
						<td class="pl-0 py-8">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 mr-20">
									<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-4.jpg)"></div>
								</div>

								<div>
									<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Maryam Abdullah</a>
									<span class="text-fade d-block">Roll: 2024004, Grade 8-C</span>
								</div>
							</div>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Class 8
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								General Section
							</span>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Overdue
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								$380
							</span>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Mr. Abdullah Khalil
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								Father
							</span>
						</td>
						<td>
							<span class="badge badge-danger-light badge-lg">Fee Due</span>
						</td>
						<td class="text-right">
							<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-eye"></span></a>
							<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-pencil"></span></a>
						</td>
					</tr>
					<tr>										
						<td class="pl-0 py-8">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 mr-20">
									<div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-5.jpg)"></div>
								</div>

								<div>
									<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Yusuf Rahman</a>
									<span class="text-fade d-block">Roll: 2024005, Grade 12-A</span>
								</div>
							</div>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Class 12
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								Science Section
							</span>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Partial
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								$500
							</span>
						</td>
						<td>
							<span class="text-fade font-weight-600 d-block font-size-16">
								Mrs. Aisha Rahman
							</span>
							<span class="text-white font-weight-600 d-block font-size-16">
								Mother
							</span>
						</td>
						<td>
							<span class="badge badge-warning-light badge-lg">Partial Payment</span>
						</td>
						<td class="text-right">
							<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-eye"></span></a>
							<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-pencil"></span></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>  
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
@endsection
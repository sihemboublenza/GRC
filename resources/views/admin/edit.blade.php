<div class="card">
	<div class="card-block">
		<ul class="nav nav-tabs" id="myTab" role="tablist">

			<li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home5" role="tab"
															aria-controls="home5" aria-expanded="true"><span class="hidden-sm-up"><i
							class="ti-home"></i></span> <span class="hidden-xs-down"> Formulaire edition</span></a>
			</li>

		</ul>

		<div class="tab-content tabcontent-border p-20" id="myTabContent">

			<div role="tabpanel" class="tab-pane fade show active" id="home5" aria-labelledby="home-tab">

				<form class="form-horizontal form-material" action="{{ route('comemrcial.edit.client', $client->id) }}"
							method="post">
					@method('PUT')
					@csrf


					<div class="form-group col-12">

						<div class="col-md-12 m-b-20">
							<input type="text" class="form-control" placeholder="Matricule"
										 value="{{$client->matricule}}"
										 name="matricule">
						</div>

						<div class="col-md-12 m-b-20">
							<input type="text" class="form-control" placeholder="Nom"
										 value="{{$client->societe_client}}"
										 name="nom">
						</div>

						<div class="col-md-12 m-b-20">
							<input type="text" class="form-control" placeholder="Prenom"
										 value="{{$client->tel_client}}"
										 name="prenom">
						</div>

						<div class="col-md-12 m-b-20">
							<input type="email" class="form-control" placeholder="Email"
										 value="{{$client->adresse_client}}"
										 name="email">
						</div>

						<div class="col-md-12 m-b-20">
							<span class="col-md-6">Date Naissance:</span>
							<input type="date" class="form-control col-md-6"
										 value="{{$client->siteweb_client}}"
										 name="date_naissance">
						</div>

						<div class="col-md-12 m-b-20">
							<input type="password" class="form-control" placeholder="nouveau mot de passe"
										 name="password">
						</div>

						<div class="col-md-12 m-b-20">
							@if($enseignant->admin)
								<input type="checkbox" checked class="form-check-input col-md-2" value="Admin"
											 name="admin">
								<label for="admin" class="form-check-label">Admin</label>
							@else
								<input type="checkbox" class="form-check-input col-md-2" value="Admin" name="admin">
								<label for="admin" class="form-check-label">Admin</label>
							@endif
						</div>


						<div class="col-md-12 m-b-20">
							<button class="btn btn-success btn-rounded waves-effect waves-light" type="submit">Modifier
								l'enseignant
							</button>
						</div>

					</div>
				</form>

			</div>

		</div>
	</div>
</div>

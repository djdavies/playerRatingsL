
<div class="col-md-4">
	@include('layouts.modals.modal-' . $player->position . 's')
		{{--
			Check if columns hit 3, if they do, insert a new row 
		--}}	
	
			<div class="thumbnail" >
				<img src="/PlayerImages/{{{ $player->id }}}.png" data-src="holder.js/200x200">
				<div class="caption"> 
					<h4>{{{ $player->name }}}</h4>
					<h3>{{{ $player->average() }}}</h3>
					<p>Age: {{{ $player->age }}}</p>
					<p>Nation: {{{ $player->nationality }}}</p>
					<p>Position: {{{ $player->position }}}</p>
					<p>Team: {{{ $player->team }}}</p>
					<p>Height(cm): {{{ $player->height }}}</p>
					<p>Weight(kg): {{{ $player->weight }}}</p>

					<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
						Rate Me
					</button>

				</div>
			</div>
	</div>
				 
@extends('layouts.modals.master-modal')

@section('rating-form')
    <form
      method="POST" 
      action="{{ URL::route('players.rate', $player->id) }}">
      
      Tackling:
      <select name="tackling">
        <option value="1">Rubbish!</option>
        <option value="2">Poor</option>
        <option value="3">Average</option>
        <option value="4">Good</option>
        <option value="5">Sublime!</option>
      </select> <br>
      Passing:
      <select name="passing">
        <option value="1">Rubbish!</option>
        <option value="2">Poor</option>
        <option value="3">Average</option>
        <option value="4">Good</option>
        <option value="5">Sublime!</option>
      </select> <br>
      Shooting:
      <select name="shooting">
        <option value="1">Rubbish!</option>
        <option value="2">Poor</option>
        <option value="3">Average</option>
        <option value="4">Good</option>
        <option value="5">Sublime!</option>
      </select> <br>
      Speed:
      <select name="speed">
        <option value="1">Rubbish!</option>
        <option value="2">Poor</option>
        <option value="3">Average</option>
        <option value="4">Good</option>
        <option value="5">Sublime!</option>
      </select> <br>
      Dribbling:
      <select name="dribbling">
        <option value="1">Rubbish!</option>
        <option value="2">Poor</option>
        <option value="3">Average</option>
        <option value="4">Good</option>
        <option value="5">Sublime!</option>
      </select> <br>

     <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Rate</button>
         <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
  @stop

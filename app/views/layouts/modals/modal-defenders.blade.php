@extends('layouts.modals.master-modal')

@section('rating-form')
Rating a defender:
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
      Strength:
      <select name="strength">
        <option value="1">Rubbish!</option>
        <option value="2">Poor</option>
        <option value="3">Average</option>
        <option value="4">Good</option>
        <option value="5">Sublime!</option>
      </select> <br>
      Composure:
      <select name="composure">
        <option value="1">Rubbish!</option>
        <option value="2">Poor</option>
        <option value="3">Average</option>
        <option value="4">Good</option>
        <option value="5">Sublime!</option>
      </select> <br>

      <button type="submit">Rate!</button>
    </form>
  @stop

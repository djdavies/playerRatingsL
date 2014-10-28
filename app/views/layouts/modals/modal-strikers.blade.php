@extends('layouts.modals.master-modal')

  @section('rating-form')
  Rating a striker:
    <form
      method="POST" 
      action="{{ URL::route('players.rate', $player->id) }}">
      
      Shooting:
      <select name="shooting">
        <option value="1">Rubbish!</option>
        <option value="2">Poor</option>
        <option value="3">Average</option>
        <option value="4">Good</option>
        <option value="5">Sublime!</option>
      </select> <br>
      Strength:
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

      <button type="submit">Rate!</button>
    </form>
  @stop

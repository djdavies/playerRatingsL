<!-- Button trigger modal -->

<!-- The Main modal  -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Player Rating</h4>
      </div>
      <div class="modal-body">
        <h4>{{{ $player->name }}}</h4>
        @yield('rating-form')
     </div>

     <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save rating</button>
      </div>
    </div>
  </div>
</div>
@if(session()->has('notif'))
<div class="alert alert-{{session()->get('notif.type')}} alert-dismissible fade show" id="alert-feed">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">×</span>
  </button>
  {{session()->get('notif.title')}} <span>{!!session()->get('notif.message')!!}</span>.
</div>
@endif
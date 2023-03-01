@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
  class="alert alert-success alert-styled-left alert-arrow-left alert-dismissible 'success'">
  <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
  <p>
    <span class="font-weight-semibold">Well done!</span> You successfully read <a href="#" class="alert-link">{{session('message')}}</a>
  </p>
</div>
@endif


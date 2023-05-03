@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
  class="alert alert-success alert-styled-left alert-arrow-left alert-dismissible 'success'">
  <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
  <p>
    <span class="font-weight-semibold">Well done!</span>  <a href="#" class="alert-link">{{session('message')}}</a>
  </p>
</div>

@elseif(session()->has('error'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
  class="alert alert-warning alert-styled-left alert-arrow-left alert-dismissible 'success'">
  <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
  <p>
    <span class="font-weight-semibold">OOPS!</span><a href="#" class="alert-link">{{session('error')}}</a>
  </p>
</div>
@endif


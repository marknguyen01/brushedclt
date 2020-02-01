<!-- Start Service Style-->
@if(isset($featured_services))
<div class="section p-0" id="service">
  <service-component :service-data="{{ $featured_services }}"></service-component>
      <!-- End Single Service -->
</div>
@endif
<!-- End Service Style-->

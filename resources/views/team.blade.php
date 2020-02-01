@if(isset($team_members) && sizeof($team_members) > 0)
<div class="section px-3 px-lg-5 d-flex align-items-center" id="team">
    <div class="container">
        <div class="section__title text-center font-family--cursive">
          Team Members
        </div>
        <team-component :team-data="{{ $team_members }}"></team-component>
    </div>
</div>
@endif

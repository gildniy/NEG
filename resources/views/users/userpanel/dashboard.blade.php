<div class="maincontent" style="width: 80%">
    <h1>Welcome {{ Confide::user()->username }}</h1>

    <div class="well">
        <b>You logged with this email:</b>
        {{ Confide::user()->email }}
    </div>

</div>
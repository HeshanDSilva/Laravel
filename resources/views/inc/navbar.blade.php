<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
     <!-- <button type="button" class="navbar-toggle-collapsed" data-toggle="collapse" data-target="#navbar" aira-expands="false" aria-controls="navbar">-->
        <span class="sr-only" >tonggle navbar</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="/">Heshan</a>
    </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
          <li class="{{Request::is('About') ? 'active' : ''}}"><a href="/About">About</a></li>
          <li class="{{Request::is('Contact') ? 'active' : ''}}"><a href="/Contact">Contact</a></li>
        </ul>

      </div> <!--/.navbar.collapse--> 
  </div>
</nav>

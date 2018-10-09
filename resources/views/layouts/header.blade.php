 <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="{{ url('/') }}"> <i class="fas fa-cookie-bite"></i> Food City වගේ</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home"></i> | <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ route('deliveries.index') }}"><i class="fas fa-truck"></i> |<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('deliveries.create') }}"><i class="fas fa-plus-circle"></i> <i class="fas fa-truck"></i> <span class="sr-only">(current)</span></a>
          </li>
         
        </ul>
        
      </div>
    </nav>

<br><br><br><br>
<!DOCTYPE html>
<html>
	<head>
		<title>
         @yield('title')
		</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="@yield('description')">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		{{ HTML::style('css/style.css') }}
		{{ HTML::style('css/bootstrap.min.css') }}<!--
	 -->{{ HTML::style('css/non-responsive.css') }} 
		
		<style type="text/css"></style>
	</head>
	<body>
	
    
	<header>
     <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">IM 2.0</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Accueil</a></li>
            <li><a href="#about">Rechercher</a></li>
            <li><a href="#contact">Stastéstiques</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Actions <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Insérer</a></li>
                <li><a href="#">Consulter</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Recherche</li>
                <li><a href="#">Recherche Rapide</a></li>
                <li><a href="#">Recherche détaillée</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">W.A.Solution Sur le NET</a></li>
            <li><a href="#">A propos</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </header>

    <div class="container">    
    @yield('content')
    </div>

	

	
	
	<div class="footer">
      <div class="container">
        <p class="text-muted">
        {{ "W.A.Solution &copy;".date('Y') }}
        </p>
      </div>
    </div>
    

    {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}

	</body>
	<script type="text/javascript"></script>
</html>
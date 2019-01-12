<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My project</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
  <style>
    .is-completed {
      text-decoration: line-through;
    }

    .card__header__link {
      text-decoration: none !important;
    }

    .new-article .message-header {
      background: #AAA;
    }

    .new-article .message-body {
      background: rgb(243, 243, 243);
    }

    .big-plus {
      font-size: 48px;
      color: #AAA;
    }
  </style>
</head>

<body>
  <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="container">
      <div class="navbar-menu">
        <div class="navbar-start">
          <a href="/projects" class="navbar-item">
            Home
          </a>
          <a href="/projects/create" class="navbar-item">
            Create project
          </a>
        </div>
        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <a class="button is-primary">
                <strong>Sign up</strong>
              </a>
              <a class="button is-light">
                Log in
              </a>
            </div>
          </div>
        </div>
      </div>
  </nav>
  </div>
  <section class="section">
    <div class="container">
      @yield('content')
    </div>
  </section>
</body>

</html>
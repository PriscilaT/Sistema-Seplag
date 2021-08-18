<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <img src="https://github.com/PriscilaT.png" alt="" width="150" height="150" class="rounded-circle me-2">
<!--  https://www.itsolutionstuff.com/post/laravel-7-image-upload-exampleexample.html -->
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
        <a href="/home" class="{{ Request::path() ==  'home' ? 'nav-link active' : 'nav-link'  }}" aria-current="page">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#perfil"></use></svg>
            Perfil 
        </a>
        </li>
        <li>
        <a href="/funcionario" class="{{ Request::path() ==  'funcionario' ? 'nav-link active' : 'nav-link'  }}">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#funcionario"></use></svg>
            Funcionários
        </a>
        </li>
        <li>
        <a href="/curso" class="{{ Request::path() ==  'curso' ? 'nav-link active' : 'nav-link'  }}">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#curso"></use></svg>
            Cursos
        </a>
        </li>
        <li>
        <a href="/instituicao" class="{{ Request::path() ==  'instituicao' ? 'nav-link active' : 'nav-link'  }}">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#instituicao"></use></svg>
            Instituições
        </a>
        </li>
        <li>
        <a href="/cargo" class="{{ Request::path() ==  'cargo' ? 'nav-link active' : 'nav-link'  }}">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#cargo"></use></svg>
            Cargos
        </a>
        </li>
        <li>
        <a href="tecnologia" class="{{ Request::path() ==  'tecnologia' ? 'nav-link active' : 'nav-link'  }}">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#tecnologia"></use></svg>
            Tecnologias
        </a>
        </li>
        <li>
        <a href="/projeto" class="{{ Request::path() ==  'projeto' ? 'nav-link active' : 'nav-link'  }}">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#projeto"></use></svg>
            Projetos
        </a>
        </li>
    </ul>
    <hr>
</div>
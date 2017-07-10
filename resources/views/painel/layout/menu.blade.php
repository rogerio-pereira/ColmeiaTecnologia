<ul>
    {{--Banners--}}
    <li>
        <a href='{{url('/banners')}}' alt='Banners' title='Banners'>
            <i class="fa fa-picture-o" aria-hidden="true"></i> Banners
        </a>
    </li>
    <li>
        <a href='{{url('/servicos')}}' alt='Serviços' title='Serviços'>
            <i class="fa fa-wrench" aria-hidden="true"></i> Serviços
        </a>
    </li>
    <li>
        <a href='{{url('/portifolios')}}' alt='Portifólios' title='Portifólios'>
            <i class="fa fa-wrench" aria-hidden="true"></i> Portifólios
        </a>
    </li>

    {{--Posts--}}
    <li class='menuLabel'>
        Blog
    </li>
    <li>
        <a href='{{url('/categorias_post')}}' alt='Categorias Post' title='Categorias Post'>
            <i class="fa fa-list" aria-hidden="true"></i> Categorias Post
        </a>
    </li>
    <li>
        <a href='{{url('/posts')}}' title='Posts' alt='Posts' title='Posts'>
            <i class="fa fa-file-text"></i> Posts
        </a>
    </li>
</ul>
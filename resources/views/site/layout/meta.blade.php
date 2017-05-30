{{--
    TAGS QUE PRECISAM ALTERAR DENTRO DO BODY
      title,
      meta_description
      meta_keywords
      meta_title
      og_title
      og_description
        itemprop_description
--}}
<title>{$titulo}</title>
<meta charset='UTF-8' />

<link rel='shortcut icon' href='/app.view/img/favicon.ico' type='image/x-icon' />

<meta name='description' content='{$_SESSION['configuracoes']->descricao}' />
<meta name='keywords' content='{$_SESSION['configuracoes']->keywords}' />
<meta name='title' content='{$titulo}'/>
<meta name='url' content='http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}' />
<meta itemprop='name' content='{$_SESSION['configuracoes']->empresa}' />
<meta name='author' content='Rogério Pereira' />
<meta name='copyright' content='Rogério Pereira' />
<meta name='generator' content='Rogério Pereira' />
<meta name='GENERATOR' content='MSHTML 6.00.3790.3959' />
<meta name='Robots' content='all'/>
<meta name='DISTRIBUTION' content='GLOBAL' />
<meta name='RATING' content='General, HTML' />
<meta name='REVISIT-AFTER' content='7 days' />
<meta name='Audience' content='All' />
<meta name='language'content='Portuguese' />
<meta name='viewport' content='width=device-width, initial-scale=1.0' />
        
<meta property='og:title' content='{$titulo}' />
<meta property='og:description' content='{$_SESSION['configuracoes']->descricao}/>
<meta property='og:image' content='{$_SESSION['configuracoes']->logotipo}' />
<meta property='og:url'content='http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}'/>
<meta property='og:type' content='{$_SESSION['configuracoes']->conteudo}' />
<meta property='og:site_name' content='{$_SESSION['configuracoes']->empresa}' />
<meta property='og:locale' content='pt_BR' />
        
<meta itemprop='description' content='{$_SESSION['configuracoes']->descricao}' />
<meta itemprop='image' content='{$_SESSION['configuracoes']->logotipo}' />

<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='Expires' content='none' />
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
<meta http-equiv='VW96.OBJECT TYPE' content='{$_SESSION['configuracoes']->keywords}' /
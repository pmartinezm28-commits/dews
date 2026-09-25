<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <base href="https://www.php.net/manual/es/index.php">

  <title>PHP: Manual de PHP - Manual</title>

      <link rel="stylesheet" type="text/css" href="/cached.php?t=1756715876&amp;f=/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/cached.php?t=1756715876&amp;f=/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/cached.php?t=1759298403&amp;f=/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/cached.php?t=1756715876&amp;f=/styles/theme-medium.css" media="screen">

 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/es/index.php">
 <link rel="shorturl" href="https://www.php.net/manual/es/index.php">
 <link rel="alternate" href="https://www.php.net/manual/es/index.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/es/index.php">
 <link rel="index" href="https://www.php.net/manual/es/">
 <link rel="prev" href="https://www.php.net/manual/es/">
 <link rel="next" href="https://www.php.net/manual/es/">

 <link rel="alternate" href="https://www.php.net/manual/en/index.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/index.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/index.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/index.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/index.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/index.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/index.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/index.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/index.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/index.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/index.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/cached.php?t=1756715876&amp;f=/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/cached.php?t=1756715876&amp;f=/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/cached.php?t=1759298403&amp;f=/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/cached.php?t=1756715876&amp;f=/styles/theme-medium.css" media="screen">


 <base href="https://www.php.net/manual/es/index.php">

<meta name="Description" content="Manual de PHP" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Manual de PHP - Manual" />
<meta name="twitter:description" content="Manual de PHP" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Manual de PHP - Manual" />
<meta itemprop="description" content="Manual de PHP" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Manual de PHP" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">

      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>





<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/index.php'>English</option>
            <option value='de/index.php'>German</option>
            <option value='es/index.php' selected="selected">Spanish</option>
            <option value='fr/index.php'>French</option>
            <option value='it/index.php'>Italian</option>
            <option value='ja/index.php'>Japanese</option>
            <option value='pt_BR/index.php'>Brazilian Portuguese</option>
            <option value='ru/index.php'>Russian</option>
            <option value='tr/index.php'>Turkish</option>
            <option value='uk/index.php'>Ukrainian</option>
            <option value='zh/index.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="index" class="set">
 <h1 class="title">Manual de PHP</h1>





<div class="info">

 <div class="pubdate">2025-10-03</div>


 <div class="authorgroup" id="translators">
  <div class="author vcard"><strong class="by">por</strong>:<br />
   <span class="personname fn">
     <span class="firstname given-name">¿Quieres ayudarnos a traducir?</span>
     <span class="surname family-name">Ponte en contacto con: seros[arroba]php.net</span>
   </span>
  </div>

  <div class="author vcard">
   <span class="personname fn">
     <span class="firstname given-name">Traduciendo desde Dic-2009. Estado: 80%</span>
     <span class="surname family-name">completo y al día.</span>
   </span>
  </div>

  <div class="author vcard">
   <span class="personname fn">
     <span class="firstname given-name">
     <span class="surname family-name">
   </span>
  </div>

  <div class="author vcard">
   <span class="personname fn">
     <span class="firstname given-name">Lista de encargados del mantenimiento y</span>
     <span class="surname family-name">traducción por número de ficheros:</span>
   </span>
  </div>

  <div class="author vcard">
   <span class="personname fn">
     <span class="firstname given-name">1. Pedro Antonio</span>
     <span class="surname family-name">Gil Rodríguez 2. Andrés García 3. Yago Ferrer 4. Jesús Ruiz-Ayúcar Vázquez  5. Juan Pablo Berdejo 6. Alexander Garzon 7. Jesús Ruiz García 8. Marta Regina Cano Jiménez 9. Leonardo Boshell 10. Francisco José Naranjo Abad 11. Jesús Rafael
Cova Huerta 12. Jorge Eduardo Olaya P. 13. Edwin Cartagena Hdez. 14. Jesús Díez 15. Diego Agulló Falcó 16. Ernesto Mediavilla del Río 17. Carlos Hernández Afan de Ribera 18. Waldo Malqui Silva 19. Braian Iván Monnier 20. José Mercedes Venegas Acevedo</span>
   </span>
  </div>

  <div class="author vcard">
   <span class="personname fn">
     <span class="firstname given-name">y</span>
     <span class="surname family-name">muchos más...</span>
   </span>
  </div>

  <div class="author vcard">
   <span class="personname fn">
     <span class="firstname given-name">
     <span class="surname family-name">
   </span>
  </div>

 </div>



</div>
























<ul class="chunklist chunklist_set"><li><a href="copyright.php">Copyright</a></li><li><a href="preface.php">Prefacio</a> — Acerca de este manual</li><li><a href="getting-started.php">Conceptos b&aacute;sicos</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="introduction.php">Introducci&oacute;n</a> — &iquest;Qu&eacute; es PHP y qu&eacute; puede hacer?</li><li><a href="tutorial.php">Una introducci&oacute;n a PHP</a></li></ul></li><li><a href="install.php">Instalaci&oacute;n y configuraci&oacute;n</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="install.general.php">Consideraciones generales sobre la instalaci&oacute;n</a></li><li><a href="install.unix.php">Instalaci&oacute;n en sistemas Unix</a></li><li><a href="install.macosx.php">Instalaci&oacute;n en un sistema macOS</a></li><li><a href="install.windows.php">Instalaci&oacute;n en sistemas Windows</a></li><li><a href="install.cloud.php">Instalaci&oacute;n en las plataformas de Nube Inform&aacute;tica</a></li><li><a href="install.fpm.php">FastCGI Process Manager (FPM)</a></li><li><a href="install.pecl.php">Instalaci&oacute;n de extensiones PECL</a></li><li><a href="install.composer.intro.php">Introducci&oacute;n a Composer</a></li><li><a href="install.pie.intro.php">Introducci&oacute;n a PIE</a></li><li><a href="configuration.php">Configuraci&oacute;n en tiempo de ejecuci&oacute;n</a></li></ul></li><li><a href="langref.php">Referencia del lenguaje</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="language.basic-syntax.php">La sintaxis b&aacute;sica</a></li><li><a href="language.types.php">Los tipos</a></li><li><a href="language.variables.php">Variables</a></li><li><a href="language.constants.php">Constants</a></li><li><a href="language.expressions.php">Expresiones</a></li><li><a href="language.operators.php">Los operadores</a></li><li><a href="language.control-structures.php">Estructuras de Control</a></li><li><a href="language.functions.php">Las funciones</a></li><li><a href="language.oop5.php">Clases y objetos</a></li><li><a href="language.namespaces.php">Los espacios de nombres</a></li><li><a href="language.enumerations.php">Enumeraciones</a></li><li><a href="language.errors.php">Errores</a></li><li><a href="language.exceptions.php">Las excepciones</a></li><li><a href="language.fibers.php">Fibers</a></li><li><a href="language.generators.php">Generators</a></li><li><a href="language.attributes.php">Atributos</a></li><li><a href="language.references.php">Las referencias</a></li><li><a href="reserved.variables.php">Variables predefinidas</a></li><li><a href="reserved.exceptions.php">Excepciones predefinidas</a></li><li><a href="reserved.interfaces.php">Interfaces y clases predefinidas</a></li><li><a href="reserved.attributes.php">Atributos predefinidos</a></li><li><a href="context.php">Opciones y par&aacute;metros de contexto</a></li><li><a href="wrappers.php">Protocolos y Envolturas soportados</a></li></ul></li><li><a href="security.php">Seguridad</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="security.intro.php">Introducci&oacute;n</a></li><li><a href="security.general.php">Consideraciones generales</a></li><li><a href="security.cgi-bin.php">Instalado como CGI binario</a></li><li><a href="security.apache.php">Instalado como m&oacute;dulo de Apache</a></li><li><a href="security.sessions.php">Seguridad de una Sesi&oacute;n</a></li><li><a href="security.filesystem.php">Seguridad del Sistema de Archivos</a></li><li><a href="security.database.php">Seguridad en bases de datos</a></li><li><a href="security.errors.php">Reportando errores</a></li><li><a href="security.variables.php">Datos Enviados por el Usuario</a></li><li><a href="security.hiding.php">Ocultar PHP</a></li><li><a href="security.current.php">Mantenerse al d&iacute;a</a></li></ul></li><li><a href="features.php">Caracter&iacute;sticas</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="features.http-auth.php">Identificaci&oacute;n HTTP con PHP</a></li><li><a href="features.cookies.php">Cookies</a></li><li><a href="features.sessions.php">Sesiones</a></li><li><a href="features.file-upload.php">Gesti&oacute;n de cargas de ficheros</a></li><li><a href="features.remote-files.php">Uso de ficheros a distancia</a></li><li><a href="features.connection-handling.php">Gesti&oacute;n de las conexiones</a></li><li><a href="features.persistent-connections.php">Conexiones persistentes a bases de datos</a></li><li><a href="features.commandline.php">Utilizaci&oacute;n de l&iacute;neas de comando</a> — Utilizaci&oacute;n de la l&iacute;nea de comandos</li><li><a href="features.gc.php">Recolecci&oacute;n de basura (Garbage Collection)</a></li><li><a href="features.dtrace.php">DTrace Tra&ccedil;age din&aacute;mico</a></li></ul></li><li><a href="funcref.php">Referencia de funciones</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="refs.basic.php.php">Afecta el comportamiento de PHP</a></li><li><a href="refs.utilspec.audio.php">Manipulaci&oacute;n de formatos de audio</a></li><li><a href="refs.remote.auth.php">Servicios de autenticaci&oacute;n</a></li><li><a href="refs.utilspec.cmdline.php">Extensiones espec&iacute;ficas de la l&iacute;nea de comandos</a></li><li><a href="refs.compression.php">Extensiones de compresi&oacute;n y archivos</a></li><li><a href="refs.crypto.php">Extensiones criptogr&aacute;ficas</a></li><li><a href="refs.database.php">Extensiones de bases de datos</a></li><li><a href="refs.calendar.php">Extensiones relacionadas con fecha y hora</a></li><li><a href="refs.fileprocess.file.php">Extensiones relacionadas con el sistema de ficheros</a></li><li><a href="refs.international.php">Soporte para lenguaje humano y codificaci&oacute;n de caracteres</a></li><li><a href="refs.utilspec.image.php">Procesamiento y generaci&oacute;n de im&aacute;genes</a></li><li><a href="refs.remote.mail.php">Extensiones relacionadas con Email</a></li><li><a href="refs.math.php">Extensiones matem&aacute;ticas</a></li><li><a href="refs.utilspec.nontext.php">Salida MIME que no es texto</a></li><li><a href="refs.fileprocess.process.php">Extensiones de control de procesos</a></li><li><a href="refs.basic.other.php">Otras extensiones b&aacute;sicas</a></li><li><a href="refs.remote.other.php">Otros servicios</a></li><li><a href="refs.search.php">Extensiones para motores de b&uacute;squeda</a></li><li><a href="refs.utilspec.server.php">Extensiones espec&iacute;ficas para Servidores</a></li><li><a href="refs.basic.session.php">Extensiones de sesiones</a></li><li><a href="refs.basic.text.php">Procesamiento de texto</a></li><li><a href="refs.basic.vartype.php">Extensiones relacionadas con variable y tipo</a></li><li><a href="refs.webservice.php">Servicios web</a></li><li><a href="refs.utilspec.windows.php">Extensiones espec&iacute;ficas de Windows</a></li><li><a href="refs.xml.php">Manipulaci&oacute;n de XML</a></li><li><a href="refs.ui.php">Extensiones de GUI</a></li></ul></li><li><a href="faq.php">FAQ</a> — Preguntas frecuentes<ul class="chunklist chunklist_set chunklist_children"><li><a href="faq.general.php">Informaci&oacute;n general</a></li><li><a href="faq.mailinglist.php">Listas de correos</a></li><li><a href="faq.obtaining.php">Consiguiendo PHP</a></li><li><a href="faq.databases.php">Problemas con bases de datos</a></li><li><a href="faq.installation.php">Instalaci&oacute;n</a></li><li><a href="faq.build.php">Problemas de Compilaci&oacute;n</a></li><li><a href="faq.using.php">Usar PHP</a></li><li><a href="faq.passwords.php">Hash de Contrase&ntilde;as</a> — Hash de contrase&ntilde;as seguro</li><li><a href="faq.html.php">PHP y HTML</a></li><li><a href="faq.com.php">PHP y COM</a></li><li><a href="faq.misc.php">Preguntas Varias</a></li></ul></li><li><a href="appendices.php">Ap&eacute;ndices</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="history.php">Historia de PHP</a></li><li><a href="examples.php">Acerca de los ejemplos del manual</a></li><li><a href="migration84.php">Migraci&oacute;n de PHP 8.3.x a PHP 8.4.x</a></li><li><a href="migration83.php">Migraci&oacute;n de PHP 8.2.x a PHP 8.3.x</a></li><li><a href="migration82.php">Migraci&oacute;n de PHP 8.1.x a PHP 8.2.x</a></li><li><a href="migration81.php">Migraci&oacute;n de PHP 8.0.x a PHP 8.1.x</a></li><li><a href="migration80.php">Migraci&oacute;n de PHP 7.4.x a PHP 8.0.x</a></li><li><a href="migration74.php">Migraci&oacute;n de PHP 7.3.x a PHP 7.4.x</a></li><li><a href="migration73.php">Migraci&oacute;n de PHP 7.2.x a PHP 7.3.x</a></li><li><a href="migration72.php">Migraci&oacute;n de PHP 7.1.x a PHP 7.2.x</a></li><li><a href="migration71.php">Migraci&oacute;n de PHP 7.0.x a PHP 7.1.x</a></li><li><a href="migration70.php">Migraci&oacute;n de PHP 5.6.x a PHP 7.0.x</a></li><li><a href="migration56.php">Migraci&oacute;n de PHP 5.5.x a PHP 5.6.x</a></li><li><a href="debugger.php">Depurador PHP</a></li><li><a href="configure.php">Opciones de configuraci&oacute;n</a></li><li><a href="ini.php">Directivas de php.ini</a></li><li><a href="extensions.php">Categorizaci&oacute;n de
Extensiones</a></li><li><a href="aliases.php">Lista de alias</a></li><li><a href="reserved.php">Palabras reservadas en PHP</a></li><li><a href="resource.php">Tipos de recursos PHP</a></li><li><a href="filters.php">Lista de filtros est&aacute;ndar</a></li><li><a href="transports.php">Lista de los modos de transporte de sockets disponibles</a></li><li><a href="types.comparisons.php">Comparaci&oacute;n de tipos en PHP</a></li><li><a href="tokens.php">Lista de tokens del analizador</a></li><li><a href="userlandnaming.php">Gu&iacute;a de entorno de usuario para nombres</a></li><li><a href="about.php">Acerca del manual</a></li><li><a href="cc.license.php">Creative Commons Attribution 3.0</a></li><li><a href="indexes.php">Listado de &iacute;ndices</a></li><li><a href="doc.changelog.php">Registro de cambios</a></li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>

      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-base/blob/master/manual.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-es/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Findex%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=index&amp;repo=es&amp;redirect=https://www.php.net/manual/es/index.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/es/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>


<script src="/cached.php?t=1756715876&amp;f=/js/ext/jquery-3.6.0.min.js"></script>
<script src="/cached.php?t=1756715876&amp;f=/js/ext/FuzzySearch.min.js"></script>
<script src="/cached.php?t=1756715876&amp;f=/js/ext/mousetrap.min.js"></script>
<script src="/cached.php?t=1756715876&amp;f=/js/ext/jquery.scrollTo.min.js"></script>
<script src="/cached.php?t=1756715876&amp;f=/js/search.js"></script>
<script src="/cached.php?t=1756715876&amp;f=/js/common.js"></script>
<script type="module" src="/cached.php?t=1759317002&amp;f=/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>

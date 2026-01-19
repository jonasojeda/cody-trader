<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Cody Trader API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://127.0.0.1:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.6.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.6.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-blog" class="tocify-header">
                <li class="tocify-item level-1" data-unique="blog">
                    <a href="#blog">Blog</a>
                </li>
                                    <ul id="tocify-subheader-blog" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="blog-GETapi-blogs">
                                <a href="#blog-GETapi-blogs">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="blog-GETapi-blogs--id-">
                                <a href="#blog-GETapi-blogs--id-">Display the specified resource.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-contenido-del-curso" class="tocify-header">
                <li class="tocify-item level-1" data-unique="contenido-del-curso">
                    <a href="#contenido-del-curso">Contenido del Curso</a>
                </li>
                                    <ul id="tocify-subheader-contenido-del-curso" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="contenido-del-curso-GETapi-courseContents">
                                <a href="#contenido-del-curso-GETapi-courseContents">Listar</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="contenido-del-curso-GETapi-courseContents--id-">
                                <a href="#contenido-del-curso-GETapi-courseContents--id-">Mostrar</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-credential" class="tocify-header">
                <li class="tocify-item level-1" data-unique="credential">
                    <a href="#credential">Credential</a>
                </li>
                                    <ul id="tocify-subheader-credential" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="credential-GETapi-credentials">
                                <a href="#credential-GETapi-credentials">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="credential-GETapi-credentials--id-">
                                <a href="#credential-GETapi-credentials--id-">Display the specified resource.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-footer" class="tocify-header">
                <li class="tocify-item level-1" data-unique="footer">
                    <a href="#footer">Footer</a>
                </li>
                                    <ul id="tocify-subheader-footer" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="footer-GETapi-footers">
                                <a href="#footer-GETapi-footers">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="footer-GETapi-footers--id-">
                                <a href="#footer-GETapi-footers--id-">Obtener datos</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-instructor" class="tocify-header">
                <li class="tocify-item level-1" data-unique="instructor">
                    <a href="#instructor">Instructor</a>
                </li>
                                    <ul id="tocify-subheader-instructor" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="instructor-GETapi-instructors">
                                <a href="#instructor-GETapi-instructors">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="instructor-GETapi-instructors--id-">
                                <a href="#instructor-GETapi-instructors--id-">Display the specified resource.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-learning" class="tocify-header">
                <li class="tocify-item level-1" data-unique="learning">
                    <a href="#learning">Learning</a>
                </li>
                                    <ul id="tocify-subheader-learning" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="learning-GETapi-learnings">
                                <a href="#learning-GETapi-learnings">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="learning-GETapi-learnings--id-">
                                <a href="#learning-GETapi-learnings--id-">Obtener datos</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-mediopago" class="tocify-header">
                <li class="tocify-item level-1" data-unique="mediopago">
                    <a href="#mediopago">MedioPago</a>
                </li>
                                    <ul id="tocify-subheader-mediopago" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="mediopago-GETapi-mediosPagos">
                                <a href="#mediopago-GETapi-mediosPagos">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="mediopago-GETapi-mediosPagos--medioPago_id-">
                                <a href="#mediopago-GETapi-mediosPagos--medioPago_id-">Display the specified resource.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-methodology" class="tocify-header">
                <li class="tocify-item level-1" data-unique="methodology">
                    <a href="#methodology">Methodology</a>
                </li>
                                    <ul id="tocify-subheader-methodology" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="methodology-GETapi-methodologies">
                                <a href="#methodology-GETapi-methodologies">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="methodology-GETapi-methodologies--id-">
                                <a href="#methodology-GETapi-methodologies--id-">Obtener datos</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-paises" class="tocify-header">
                <li class="tocify-item level-1" data-unique="paises">
                    <a href="#paises">Países</a>
                </li>
                                    <ul id="tocify-subheader-paises" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="paises-GETapi-countries">
                                <a href="#paises-GETapi-countries">Listar</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="paises-GETapi-countries--id-">
                                <a href="#paises-GETapi-countries--id-">Mostrar</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-reservas" class="tocify-header">
                <li class="tocify-item level-1" data-unique="reservas">
                    <a href="#reservas">Reservas</a>
                </li>
                                    <ul id="tocify-subheader-reservas" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="reservas-POSTapi-reservations">
                                <a href="#reservas-POSTapi-reservations">Crear</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="reservas-GETapi-reservations--reservation_id-">
                                <a href="#reservas-GETapi-reservations--reservation_id-">Mostrar</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-slide" class="tocify-header">
                <li class="tocify-item level-1" data-unique="slide">
                    <a href="#slide">Slide</a>
                </li>
                                    <ul id="tocify-subheader-slide" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="slide-GETapi-slides">
                                <a href="#slide-GETapi-slides">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="slide-GETapi-slides--id-">
                                <a href="#slide-GETapi-slides--id-">Obtener datos</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-stats" class="tocify-header">
                <li class="tocify-item level-1" data-unique="stats">
                    <a href="#stats">Stats</a>
                </li>
                                    <ul id="tocify-subheader-stats" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="stats-GETapi-stats">
                                <a href="#stats-GETapi-stats">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="stats-GETapi-stats--id-">
                                <a href="#stats-GETapi-stats--id-">Display the specified resource.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: January 19, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://127.0.0.1:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="blog">Blog</h1>

    <p>Controlador para gestionar los blogs/videos.</p>

                                <h2 id="blog-GETapi-blogs">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-blogs">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/blogs?nroPagina=1&amp;sinPaginar=1&amp;paginadoSimple=1&amp;ordenFechaCreado=DESC&amp;orden=architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nroPagina\": 4326.41688,
    \"sinPaginar\": true,
    \"paginadoSimple\": true,
    \"ordenFechaCreado\": \"architecto\",
    \"orden\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/blogs"
);

const params = {
    "nroPagina": "1",
    "sinPaginar": "1",
    "paginadoSimple": "1",
    "ordenFechaCreado": "DESC",
    "orden": "architecto",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nroPagina": 4326.41688,
    "sinPaginar": true,
    "paginadoSimple": true,
    "ordenFechaCreado": "architecto",
    "orden": "architecto"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-blogs">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 47
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: {
        &quot;ordenFechaCreado&quot;: [
            &quot;validation.in&quot;
        ],
        &quot;orden&quot;: [
            &quot;validation.in&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-blogs" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-blogs"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-blogs"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-blogs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-blogs">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-blogs" data-method="GET"
      data-path="api/blogs"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-blogs', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-blogs"
                    onclick="tryItOut('GETapi-blogs');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-blogs"
                    onclick="cancelTryOut('GETapi-blogs');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-blogs"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/blogs</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-blogs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-blogs"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-blogs"
               value="1"
               data-component="query">
    <br>
<p>Página a mostrar. Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-blogs" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="1"
                   data-endpoint="GETapi-blogs"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-blogs" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="0"
                   data-endpoint="GETapi-blogs"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para evitar la paginación y devolver todos los registros. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-blogs" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="1"
                   data-endpoint="GETapi-blogs"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-blogs" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="0"
                   data-endpoint="GETapi-blogs"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para realizar un paginado simple con anterior/siguiente, eficiente cuando se manejan muchos datos. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-blogs"
               value="DESC"
               data-component="query">
    <br>
<p>Ordenar por fecha de creación. Valores posibles: ASC, DESC. Example: <code>DESC</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>orden</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="orden"                data-endpoint="GETapi-blogs"
               value="architecto"
               data-component="query">
    <br>
<p>Ordenar por el campo order. Valores posibles: ASC, DESC. Default: ASC Example: <code>architecto</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-blogs"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-blogs" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="true"
                   data-endpoint="GETapi-blogs"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-blogs" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="false"
                   data-endpoint="GETapi-blogs"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-blogs" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="true"
                   data-endpoint="GETapi-blogs"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-blogs" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="false"
                   data-endpoint="GETapi-blogs"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-blogs"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>orden</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="orden"                data-endpoint="GETapi-blogs"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="blog-GETapi-blogs--id-">Display the specified resource.</h2>

<p>
</p>

<p>Obtener datos de un registro</p>

<span id="example-requests-GETapi-blogs--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/blogs/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/blogs/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-blogs--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 46
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;order&quot;: 1,
    &quot;title&quot;: &quot;Introducci&oacute;n al Trading de Criptomonedas&quot;,
    &quot;description&quot;: &quot;Aprende los conceptos fundamentales del trading de criptomonedas. En este video exploramos las bases del mercado crypto, c&oacute;mo funcionan los exchanges, y las estrategias b&aacute;sicas que todo trader debe conocer antes de comenzar su camino en este emocionante mundo financiero.&quot;,
    &quot;thumbnail&quot;: &quot;http://127.0.0.1:8000/storage/blogs/01KEZD9H1KVEMQ0F0VZKST46F6.webp&quot;,
    &quot;youtubeId&quot;: &quot;dQw4w9WgXcQ&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-blogs--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-blogs--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-blogs--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-blogs--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-blogs--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-blogs--id-" data-method="GET"
      data-path="api/blogs/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-blogs--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-blogs--id-"
                    onclick="tryItOut('GETapi-blogs--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-blogs--id-"
                    onclick="cancelTryOut('GETapi-blogs--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-blogs--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/blogs/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-blogs--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-blogs--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-blogs--id-"
               value="1"
               data-component="url">
    <br>
<p>ID del registro. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="contenido-del-curso">Contenido del Curso</h1>

    <p>Controlador para gestionar el contenido del curso.</p>

                                <h2 id="contenido-del-curso-GETapi-courseContents">Listar</h2>

<p>
</p>

<p>Obtener una lista de contenidos del curso</p>

<span id="example-requests-GETapi-courseContents">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/courseContents?nroPagina=1&amp;sinPaginar=1&amp;paginadoSimple=1&amp;ordenFechaCreado=DESC" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nroPagina\": 4326.41688,
    \"sinPaginar\": true,
    \"paginadoSimple\": true,
    \"ordenFechaCreado\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/courseContents"
);

const params = {
    "nroPagina": "1",
    "sinPaginar": "1",
    "paginadoSimple": "1",
    "ordenFechaCreado": "DESC",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nroPagina": 4326.41688,
    "sinPaginar": true,
    "paginadoSimple": true,
    "ordenFechaCreado": "architecto"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-courseContents">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 42
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: {
        &quot;ordenFechaCreado&quot;: [
            &quot;validation.in&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-courseContents" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-courseContents"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courseContents"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-courseContents" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courseContents">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-courseContents" data-method="GET"
      data-path="api/courseContents"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-courseContents', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-courseContents"
                    onclick="tryItOut('GETapi-courseContents');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-courseContents"
                    onclick="cancelTryOut('GETapi-courseContents');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-courseContents"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/courseContents</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-courseContents"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-courseContents"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-courseContents"
               value="1"
               data-component="query">
    <br>
<p>Página a mostrar. Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-courseContents" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="1"
                   data-endpoint="GETapi-courseContents"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-courseContents" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="0"
                   data-endpoint="GETapi-courseContents"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para evitar la paginación y devolver todos los registros. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-courseContents" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="1"
                   data-endpoint="GETapi-courseContents"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-courseContents" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="0"
                   data-endpoint="GETapi-courseContents"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para realizar un paginado simple con anterior/siguiente, eficiente cuando se manejan muchos datos. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-courseContents"
               value="DESC"
               data-component="query">
    <br>
<p>Ordenar por fecha de creación. Valores posibles: ASC, DESC. Example: <code>DESC</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-courseContents"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-courseContents" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="true"
                   data-endpoint="GETapi-courseContents"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-courseContents" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="false"
                   data-endpoint="GETapi-courseContents"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-courseContents" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="true"
                   data-endpoint="GETapi-courseContents"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-courseContents" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="false"
                   data-endpoint="GETapi-courseContents"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-courseContents"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="contenido-del-curso-GETapi-courseContents--id-">Mostrar</h2>

<p>
</p>

<p>Obtener los detalles de un contenido específico</p>

<span id="example-requests-GETapi-courseContents--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/courseContents/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/courseContents/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-courseContents--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 41
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;title&quot;: &quot;Programa Completo de Trading&quot;,
    &quot;academy&quot;: &quot;Academia Cody Trader&quot;,
    &quot;price&quot;: &quot;90.00&quot;,
    &quot;currency&quot;: &quot;ARS&quot;,
    &quot;description&quot;: [
        {
            &quot;icon&quot;: &quot;bell-electric&quot;,
            &quot;text&quot;: &quot;Acceso por 12 mesesssss&quot;
        },
        {
            &quot;icon&quot;: &quot;Users&quot;,
            &quot;text&quot;: &quot;Comunidad privada incluida&quot;
        },
        {
            &quot;icon&quot;: &quot;trending-up&quot;,
            &quot;text&quot;: &quot;Sesiones en vivo semanales&quot;
        }
    ],
    &quot;content&quot;: [
        &quot;M&oacute;dulos completos de formaci&oacute;n&quot;,
        &quot;Acceso a la metodolog&iacute;a documentada&quot;,
        &quot;Plantillas y herramientas de an&aacute;lisis&quot;,
        &quot;Soporte directo con el mentor&quot;,
        &quot;Cualquier cosa&quot;
    ],
    &quot;created_at&quot;: &quot;2026-01-17T05:07:41.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-01-17T05:42:30.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-courseContents--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-courseContents--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courseContents--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-courseContents--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courseContents--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-courseContents--id-" data-method="GET"
      data-path="api/courseContents/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-courseContents--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-courseContents--id-"
                    onclick="tryItOut('GETapi-courseContents--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-courseContents--id-"
                    onclick="cancelTryOut('GETapi-courseContents--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-courseContents--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/courseContents/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-courseContents--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-courseContents--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-courseContents--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the courseContent. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>courseContent</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="courseContent"                data-endpoint="GETapi-courseContents--id-"
               value="1"
               data-component="url">
    <br>
<p>ID del contenido. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="credential">Credential</h1>

    <p>Controlador para gestionar las credenciales.</p>

                                <h2 id="credential-GETapi-credentials">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-credentials">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/credentials?nroPagina=1&amp;sinPaginar=1&amp;paginadoSimple=1&amp;ordenFechaCreado=DESC" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nroPagina\": 4326.41688,
    \"sinPaginar\": true,
    \"paginadoSimple\": true,
    \"ordenFechaCreado\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/credentials"
);

const params = {
    "nroPagina": "1",
    "sinPaginar": "1",
    "paginadoSimple": "1",
    "ordenFechaCreado": "DESC",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nroPagina": 4326.41688,
    "sinPaginar": true,
    "paginadoSimple": true,
    "ordenFechaCreado": "architecto"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-credentials">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 51
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: {
        &quot;ordenFechaCreado&quot;: [
            &quot;validation.in&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-credentials" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-credentials"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-credentials"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-credentials" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-credentials">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-credentials" data-method="GET"
      data-path="api/credentials"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-credentials', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-credentials"
                    onclick="tryItOut('GETapi-credentials');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-credentials"
                    onclick="cancelTryOut('GETapi-credentials');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-credentials"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/credentials</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-credentials"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-credentials"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-credentials"
               value="1"
               data-component="query">
    <br>
<p>Página a mostrar. Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-credentials" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="1"
                   data-endpoint="GETapi-credentials"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-credentials" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="0"
                   data-endpoint="GETapi-credentials"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para evitar la paginación y devolver todos los registros. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-credentials" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="1"
                   data-endpoint="GETapi-credentials"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-credentials" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="0"
                   data-endpoint="GETapi-credentials"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para realizar un paginado simple con anterior/siguiente, eficiente cuando se manejan muchos datos. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-credentials"
               value="DESC"
               data-component="query">
    <br>
<p>Ordenar por fecha de creación. Valores posibles: ASC, DESC. Example: <code>DESC</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-credentials"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-credentials" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="true"
                   data-endpoint="GETapi-credentials"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-credentials" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="false"
                   data-endpoint="GETapi-credentials"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-credentials" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="true"
                   data-endpoint="GETapi-credentials"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-credentials" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="false"
                   data-endpoint="GETapi-credentials"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-credentials"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="credential-GETapi-credentials--id-">Display the specified resource.</h2>

<p>
</p>

<p>Obtener datos de un registro</p>

<span id="example-requests-GETapi-credentials--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/credentials/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/credentials/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-credentials--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 50
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;icon&quot;: &quot;Clock&quot;,
    &quot;value&quot;: &quot;8+&quot;,
    &quot;label&quot;: &quot;A&ntilde;os de experiencia&quot;,
    &quot;description&quot;: &quot;Operando en mercados financieros globales&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-credentials--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-credentials--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-credentials--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-credentials--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-credentials--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-credentials--id-" data-method="GET"
      data-path="api/credentials/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-credentials--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-credentials--id-"
                    onclick="tryItOut('GETapi-credentials--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-credentials--id-"
                    onclick="cancelTryOut('GETapi-credentials--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-credentials--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/credentials/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-credentials--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-credentials--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-credentials--id-"
               value="1"
               data-component="url">
    <br>
<p>ID del registro. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="footer">Footer</h1>

    <p>Controlador para gestionar la información del pie de página.</p>

                                <h2 id="footer-GETapi-footers">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-footers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/footers?nroPagina=1&amp;sinPaginar=1&amp;paginadoSimple=1&amp;ordenFechaCreado=DESC" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nroPagina\": 4326.41688,
    \"sinPaginar\": true,
    \"paginadoSimple\": true,
    \"ordenFechaCreado\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/footers"
);

const params = {
    "nroPagina": "1",
    "sinPaginar": "1",
    "paginadoSimple": "1",
    "ordenFechaCreado": "DESC",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nroPagina": 4326.41688,
    "sinPaginar": true,
    "paginadoSimple": true,
    "ordenFechaCreado": "architecto"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-footers">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: {
        &quot;ordenFechaCreado&quot;: [
            &quot;validation.in&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-footers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-footers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-footers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-footers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-footers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-footers" data-method="GET"
      data-path="api/footers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-footers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-footers"
                    onclick="tryItOut('GETapi-footers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-footers"
                    onclick="cancelTryOut('GETapi-footers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-footers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/footers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-footers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-footers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-footers"
               value="1"
               data-component="query">
    <br>
<p>Página a mostrar. Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-footers" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="1"
                   data-endpoint="GETapi-footers"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-footers" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="0"
                   data-endpoint="GETapi-footers"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para evitar la paginación y devolver todos los registros. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-footers" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="1"
                   data-endpoint="GETapi-footers"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-footers" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="0"
                   data-endpoint="GETapi-footers"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para realizar un paginado simple con anterior/siguiente, eficiente cuando se manejan muchos datos. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-footers"
               value="DESC"
               data-component="query">
    <br>
<p>Ordenar por fecha de creación. Valores posibles: ASC, DESC. Example: <code>DESC</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-footers"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-footers" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="true"
                   data-endpoint="GETapi-footers"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-footers" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="false"
                   data-endpoint="GETapi-footers"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-footers" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="true"
                   data-endpoint="GETapi-footers"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-footers" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="false"
                   data-endpoint="GETapi-footers"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-footers"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="footer-GETapi-footers--id-">Obtener datos</h2>

<p>
</p>

<p>Obtener datos de un registro</p>

<span id="example-requests-GETapi-footers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/footers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/footers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-footers--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;brand_name&quot;: &quot;Academia Cody Trader&quot;,
    &quot;brand_description&quot;: &quot;Formaci&oacute;n profesional en mercados financieros. Metodolog&iacute;a basada en datos y gesti&oacute;n de riesgo.&quot;,
    &quot;contact_email&quot;: &quot;contacto@academiacodytrader.com&quot;,
    &quot;social_links&quot;: [
        {
            &quot;url&quot;: &quot;https://t.me/&quot;,
            &quot;name&quot;: &quot;Telegram&quot;,
            &quot;color&quot;: &quot;#229ED9&quot;,
            &quot;active&quot;: true
        },
        {
            &quot;url&quot;: &quot;https://wa.me/&quot;,
            &quot;name&quot;: &quot;WhatsApp&quot;,
            &quot;color&quot;: &quot;#25D366&quot;,
            &quot;active&quot;: true
        },
        {
            &quot;url&quot;: &quot;https://facebook.com/&quot;,
            &quot;name&quot;: &quot;Facebook&quot;,
            &quot;color&quot;: &quot;#1877F2&quot;,
            &quot;active&quot;: true
        },
        {
            &quot;url&quot;: &quot;https://x.com/&quot;,
            &quot;name&quot;: &quot;X (Twitter)&quot;,
            &quot;color&quot;: &quot;#ffffff&quot;,
            &quot;active&quot;: true
        },
        {
            &quot;url&quot;: &quot;https://instagram.com/&quot;,
            &quot;name&quot;: &quot;Instagram&quot;,
            &quot;color&quot;: &quot;#E4405F&quot;,
            &quot;active&quot;: true
        }
    ],
    &quot;navigation_links&quot;: [
        {
            &quot;url&quot;: &quot;#metodologia&quot;,
            &quot;label&quot;: &quot;Metodolog&iacute;a&quot;
        },
        {
            &quot;url&quot;: &quot;#aprenderas&quot;,
            &quot;label&quot;: &quot;Programa&quot;
        },
        {
            &quot;url&quot;: &quot;#autoridad&quot;,
            &quot;label&quot;: &quot;Credenciales&quot;
        }
    ],
    &quot;risk_disclaimer&quot;: &quot;Aviso de riesgo: El trading en mercados financieros implica riesgos significativos de p&eacute;rdida. Los resultados pasados no garantizan resultados futuros. Este programa es estrictamente educativo y no constituye asesor&iacute;a de inversi&oacute;n. Opera &uacute;nicamente con capital que puedas permitirte perder.&quot;,
    &quot;copyright_text&quot;: &quot;Academia Cody Trader. Todos los derechos reservados.&quot;,
    &quot;created_at&quot;: &quot;2026-01-12T22:53:47.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-01-12T22:53:47.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-footers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-footers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-footers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-footers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-footers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-footers--id-" data-method="GET"
      data-path="api/footers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-footers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-footers--id-"
                    onclick="tryItOut('GETapi-footers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-footers--id-"
                    onclick="cancelTryOut('GETapi-footers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-footers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/footers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-footers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-footers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-footers--id-"
               value="1"
               data-component="url">
    <br>
<p>ID del registro. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="instructor">Instructor</h1>

    <p>Controlador para gestionar los instructores.</p>

                                <h2 id="instructor-GETapi-instructors">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-instructors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/instructors?nroPagina=1&amp;sinPaginar=1&amp;paginadoSimple=1&amp;ordenFechaCreado=DESC" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nroPagina\": 4326.41688,
    \"sinPaginar\": true,
    \"paginadoSimple\": true,
    \"ordenFechaCreado\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/instructors"
);

const params = {
    "nroPagina": "1",
    "sinPaginar": "1",
    "paginadoSimple": "1",
    "ordenFechaCreado": "DESC",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nroPagina": 4326.41688,
    "sinPaginar": true,
    "paginadoSimple": true,
    "ordenFechaCreado": "architecto"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-instructors">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: {
        &quot;ordenFechaCreado&quot;: [
            &quot;validation.in&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-instructors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-instructors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-instructors"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-instructors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-instructors">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-instructors" data-method="GET"
      data-path="api/instructors"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-instructors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-instructors"
                    onclick="tryItOut('GETapi-instructors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-instructors"
                    onclick="cancelTryOut('GETapi-instructors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-instructors"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/instructors</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-instructors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-instructors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-instructors"
               value="1"
               data-component="query">
    <br>
<p>Página a mostrar. Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-instructors" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="1"
                   data-endpoint="GETapi-instructors"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-instructors" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="0"
                   data-endpoint="GETapi-instructors"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para evitar la paginación y devolver todos los registros. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-instructors" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="1"
                   data-endpoint="GETapi-instructors"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-instructors" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="0"
                   data-endpoint="GETapi-instructors"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para realizar un paginado simple con anterior/siguiente, eficiente cuando se manejan muchos datos. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-instructors"
               value="DESC"
               data-component="query">
    <br>
<p>Ordenar por fecha de creación. Valores posibles: ASC, DESC. Example: <code>DESC</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-instructors"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-instructors" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="true"
                   data-endpoint="GETapi-instructors"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-instructors" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="false"
                   data-endpoint="GETapi-instructors"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-instructors" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="true"
                   data-endpoint="GETapi-instructors"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-instructors" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="false"
                   data-endpoint="GETapi-instructors"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-instructors"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="instructor-GETapi-instructors--id-">Display the specified resource.</h2>

<p>
</p>

<p>Obtener datos de un registro</p>

<span id="example-requests-GETapi-instructors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/instructors/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/instructors/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-instructors--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 52
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Carlos Mendoza&quot;,
    &quot;role&quot;: &quot;Director de Formaci&oacute;n&quot;,
    &quot;experience&quot;: &quot;12 a&ntilde;os en mercados&quot;,
    &quot;specialty&quot;: &quot;Price Action &amp; Estructura&quot;,
    &quot;achievements&quot;: [
        &quot;Ex-trader institucional&quot;,
        &quot;Certificaci&oacute;n CMT&quot;,
        &quot;+2,000 alumnos formados&quot;
    ],
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/instructors/01KEZ52EW053VMF9ZWPHNBF5HC.webp&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-instructors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-instructors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-instructors--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-instructors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-instructors--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-instructors--id-" data-method="GET"
      data-path="api/instructors/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-instructors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-instructors--id-"
                    onclick="tryItOut('GETapi-instructors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-instructors--id-"
                    onclick="cancelTryOut('GETapi-instructors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-instructors--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/instructors/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-instructors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-instructors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-instructors--id-"
               value="1"
               data-component="url">
    <br>
<p>ID del registro. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="learning">Learning</h1>

    <p>Controlador para gestionar los recursos de aprendizaje.</p>

                                <h2 id="learning-GETapi-learnings">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-learnings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/learnings?nroPagina=1&amp;sinPaginar=1&amp;paginadoSimple=1&amp;ordenFechaCreado=DESC" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nroPagina\": 4326.41688,
    \"sinPaginar\": true,
    \"paginadoSimple\": true,
    \"ordenFechaCreado\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/learnings"
);

const params = {
    "nroPagina": "1",
    "sinPaginar": "1",
    "paginadoSimple": "1",
    "ordenFechaCreado": "DESC",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nroPagina": 4326.41688,
    "sinPaginar": true,
    "paginadoSimple": true,
    "ordenFechaCreado": "architecto"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-learnings">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: {
        &quot;ordenFechaCreado&quot;: [
            &quot;validation.in&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-learnings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-learnings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-learnings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-learnings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-learnings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-learnings" data-method="GET"
      data-path="api/learnings"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-learnings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-learnings"
                    onclick="tryItOut('GETapi-learnings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-learnings"
                    onclick="cancelTryOut('GETapi-learnings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-learnings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/learnings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-learnings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-learnings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-learnings"
               value="1"
               data-component="query">
    <br>
<p>Página a mostrar. Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-learnings" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="1"
                   data-endpoint="GETapi-learnings"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-learnings" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="0"
                   data-endpoint="GETapi-learnings"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para evitar la paginación y devolver todos los registros. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-learnings" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="1"
                   data-endpoint="GETapi-learnings"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-learnings" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="0"
                   data-endpoint="GETapi-learnings"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para realizar un paginado simple con anterior/siguiente, eficiente cuando se manejan muchos datos. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-learnings"
               value="DESC"
               data-component="query">
    <br>
<p>Ordenar por fecha de creación. Valores posibles: ASC, DESC. Example: <code>DESC</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-learnings"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-learnings" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="true"
                   data-endpoint="GETapi-learnings"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-learnings" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="false"
                   data-endpoint="GETapi-learnings"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-learnings" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="true"
                   data-endpoint="GETapi-learnings"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-learnings" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="false"
                   data-endpoint="GETapi-learnings"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-learnings"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="learning-GETapi-learnings--id-">Obtener datos</h2>

<p>
</p>

<p>Obtener datos de un registro</p>

<span id="example-requests-GETapi-learnings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/learnings/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/learnings/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-learnings--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;icon&quot;: &quot;BookOpen&quot;,
    &quot;title&quot;: &quot;Lectura de mercado&quot;,
    &quot;topics&quot;: [
        &quot;Estructura de mercado y fases&quot;,
        &quot;Zonas de oferta y demanda&quot;,
        &quot;An&aacute;lisis multi-temporal&quot;,
        &quot;Identificaci&oacute;n de tendencias&quot;
    ],
    &quot;created_at&quot;: &quot;2026-01-12T22:53:47.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-01-12T22:53:47.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-learnings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-learnings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-learnings--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-learnings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-learnings--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-learnings--id-" data-method="GET"
      data-path="api/learnings/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-learnings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-learnings--id-"
                    onclick="tryItOut('GETapi-learnings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-learnings--id-"
                    onclick="cancelTryOut('GETapi-learnings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-learnings--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/learnings/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-learnings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-learnings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-learnings--id-"
               value="1"
               data-component="url">
    <br>
<p>ID del registro. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="mediopago">MedioPago</h1>

    <p>Controlador para gestionar los medios de pago.</p>

                                <h2 id="mediopago-GETapi-mediosPagos">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-mediosPagos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/mediosPagos?nroPagina=1&amp;sinPaginar=1&amp;paginadoSimple=1&amp;ordenFechaCreado=DESC" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nroPagina\": 4326.41688,
    \"sinPaginar\": true,
    \"paginadoSimple\": true,
    \"ordenFechaCreado\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/mediosPagos"
);

const params = {
    "nroPagina": "1",
    "sinPaginar": "1",
    "paginadoSimple": "1",
    "ordenFechaCreado": "DESC",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nroPagina": 4326.41688,
    "sinPaginar": true,
    "paginadoSimple": true,
    "ordenFechaCreado": "architecto"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-mediosPagos">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 40
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: {
        &quot;ordenFechaCreado&quot;: [
            &quot;validation.in&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-mediosPagos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-mediosPagos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-mediosPagos"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-mediosPagos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-mediosPagos">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-mediosPagos" data-method="GET"
      data-path="api/mediosPagos"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-mediosPagos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-mediosPagos"
                    onclick="tryItOut('GETapi-mediosPagos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-mediosPagos"
                    onclick="cancelTryOut('GETapi-mediosPagos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-mediosPagos"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/mediosPagos</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-mediosPagos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-mediosPagos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-mediosPagos"
               value="1"
               data-component="query">
    <br>
<p>Página a mostrar. Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-mediosPagos" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="1"
                   data-endpoint="GETapi-mediosPagos"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-mediosPagos" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="0"
                   data-endpoint="GETapi-mediosPagos"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para evitar la paginación y devolver todos los registros. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-mediosPagos" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="1"
                   data-endpoint="GETapi-mediosPagos"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-mediosPagos" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="0"
                   data-endpoint="GETapi-mediosPagos"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para realizar un paginado simple con anterior/siguiente, eficiente cuando se manejan muchos datos. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-mediosPagos"
               value="DESC"
               data-component="query">
    <br>
<p>Ordenar por fecha de creación. Valores posibles: ASC, DESC. Example: <code>DESC</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-mediosPagos"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-mediosPagos" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="true"
                   data-endpoint="GETapi-mediosPagos"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-mediosPagos" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="false"
                   data-endpoint="GETapi-mediosPagos"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-mediosPagos" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="true"
                   data-endpoint="GETapi-mediosPagos"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-mediosPagos" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="false"
                   data-endpoint="GETapi-mediosPagos"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-mediosPagos"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="mediopago-GETapi-mediosPagos--medioPago_id-">Display the specified resource.</h2>

<p>
</p>

<p>Obtener datos de un registro</p>

<span id="example-requests-GETapi-mediosPagos--medioPago_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/mediosPagos/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/mediosPagos/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-mediosPagos--medioPago_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 39
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Binance&quot;,
    &quot;descripcion&quot;: &quot;Pago mediante Binance.&quot;,
    &quot;reference_code&quot;: &quot;CC123456&quot;,
    &quot;qr_pay&quot;: &quot;http://127.0.0.1:8000/storage/medios-pagos/01KF9WEYC34MXWCB9RJXMDF228.jpg&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-mediosPagos--medioPago_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-mediosPagos--medioPago_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-mediosPagos--medioPago_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-mediosPagos--medioPago_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-mediosPagos--medioPago_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-mediosPagos--medioPago_id-" data-method="GET"
      data-path="api/mediosPagos/{medioPago_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-mediosPagos--medioPago_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-mediosPagos--medioPago_id-"
                    onclick="tryItOut('GETapi-mediosPagos--medioPago_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-mediosPagos--medioPago_id-"
                    onclick="cancelTryOut('GETapi-mediosPagos--medioPago_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-mediosPagos--medioPago_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/mediosPagos/{medioPago_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-mediosPagos--medioPago_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-mediosPagos--medioPago_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>medioPago_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="medioPago_id"                data-endpoint="GETapi-mediosPagos--medioPago_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the medioPago. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-mediosPagos--medioPago_id-"
               value="1"
               data-component="url">
    <br>
<p>ID del registro. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="methodology">Methodology</h1>

    <p>Controlador para gestionar las metodologías.</p>

                                <h2 id="methodology-GETapi-methodologies">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-methodologies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/methodologies?nroPagina=1&amp;sinPaginar=1&amp;paginadoSimple=1&amp;ordenFechaCreado=DESC" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nroPagina\": 4326.41688,
    \"sinPaginar\": true,
    \"paginadoSimple\": true,
    \"ordenFechaCreado\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/methodologies"
);

const params = {
    "nroPagina": "1",
    "sinPaginar": "1",
    "paginadoSimple": "1",
    "ordenFechaCreado": "DESC",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nroPagina": 4326.41688,
    "sinPaginar": true,
    "paginadoSimple": true,
    "ordenFechaCreado": "architecto"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-methodologies">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: {
        &quot;ordenFechaCreado&quot;: [
            &quot;validation.in&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-methodologies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-methodologies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-methodologies"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-methodologies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-methodologies">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-methodologies" data-method="GET"
      data-path="api/methodologies"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-methodologies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-methodologies"
                    onclick="tryItOut('GETapi-methodologies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-methodologies"
                    onclick="cancelTryOut('GETapi-methodologies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-methodologies"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/methodologies</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-methodologies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-methodologies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-methodologies"
               value="1"
               data-component="query">
    <br>
<p>Página a mostrar. Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-methodologies" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="1"
                   data-endpoint="GETapi-methodologies"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-methodologies" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="0"
                   data-endpoint="GETapi-methodologies"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para evitar la paginación y devolver todos los registros. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-methodologies" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="1"
                   data-endpoint="GETapi-methodologies"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-methodologies" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="0"
                   data-endpoint="GETapi-methodologies"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para realizar un paginado simple con anterior/siguiente, eficiente cuando se manejan muchos datos. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-methodologies"
               value="DESC"
               data-component="query">
    <br>
<p>Ordenar por fecha de creación. Valores posibles: ASC, DESC. Example: <code>DESC</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-methodologies"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-methodologies" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="true"
                   data-endpoint="GETapi-methodologies"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-methodologies" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="false"
                   data-endpoint="GETapi-methodologies"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-methodologies" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="true"
                   data-endpoint="GETapi-methodologies"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-methodologies" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="false"
                   data-endpoint="GETapi-methodologies"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-methodologies"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="methodology-GETapi-methodologies--id-">Obtener datos</h2>

<p>
</p>

<p>Obtener datos de un registro</p>

<span id="example-requests-GETapi-methodologies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/methodologies/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/methodologies/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-methodologies--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;icon&quot;: &quot;Target&quot;,
    &quot;title&quot;: &quot;Reglas claras&quot;,
    &quot;description&quot;: &quot;Sistema de trading con entradas y salidas definidas. Sin ambig&uuml;edades ni interpretaciones subjetivas.&quot;,
    &quot;created_at&quot;: &quot;2026-01-12T22:53:47.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-01-12T22:53:47.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-methodologies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-methodologies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-methodologies--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-methodologies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-methodologies--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-methodologies--id-" data-method="GET"
      data-path="api/methodologies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-methodologies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-methodologies--id-"
                    onclick="tryItOut('GETapi-methodologies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-methodologies--id-"
                    onclick="cancelTryOut('GETapi-methodologies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-methodologies--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/methodologies/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-methodologies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-methodologies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-methodologies--id-"
               value="1"
               data-component="url">
    <br>
<p>ID del registro. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="paises">Países</h1>

    <p>Controlador para gestionar los países.</p>

                                <h2 id="paises-GETapi-countries">Listar</h2>

<p>
</p>

<p>Obtener una lista de países</p>

<span id="example-requests-GETapi-countries">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/countries?nroPagina=1&amp;sinPaginar=1&amp;paginadoSimple=1&amp;ordenFechaCreado=DESC" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nroPagina\": 4326.41688,
    \"sinPaginar\": true,
    \"paginadoSimple\": true,
    \"ordenFechaCreado\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/countries"
);

const params = {
    "nroPagina": "1",
    "sinPaginar": "1",
    "paginadoSimple": "1",
    "ordenFechaCreado": "DESC",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nroPagina": 4326.41688,
    "sinPaginar": true,
    "paginadoSimple": true,
    "ordenFechaCreado": "architecto"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-countries">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 45
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: {
        &quot;ordenFechaCreado&quot;: [
            &quot;validation.in&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-countries" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-countries"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-countries"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-countries" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-countries">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-countries" data-method="GET"
      data-path="api/countries"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-countries', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-countries"
                    onclick="tryItOut('GETapi-countries');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-countries"
                    onclick="cancelTryOut('GETapi-countries');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-countries"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/countries</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-countries"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-countries"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-countries"
               value="1"
               data-component="query">
    <br>
<p>Página a mostrar. Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-countries" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="1"
                   data-endpoint="GETapi-countries"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-countries" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="0"
                   data-endpoint="GETapi-countries"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para evitar la paginación y devolver todos los registros. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-countries" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="1"
                   data-endpoint="GETapi-countries"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-countries" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="0"
                   data-endpoint="GETapi-countries"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para realizar un paginado simple con anterior/siguiente, eficiente cuando se manejan muchos datos. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-countries"
               value="DESC"
               data-component="query">
    <br>
<p>Ordenar por fecha de creación. Valores posibles: ASC, DESC. Example: <code>DESC</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-countries"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-countries" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="true"
                   data-endpoint="GETapi-countries"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-countries" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="false"
                   data-endpoint="GETapi-countries"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-countries" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="true"
                   data-endpoint="GETapi-countries"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-countries" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="false"
                   data-endpoint="GETapi-countries"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-countries"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="paises-GETapi-countries--id-">Mostrar</h2>

<p>
</p>

<p>Obtener los detalles de un país específico</p>

<span id="example-requests-GETapi-countries--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/countries/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/countries/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-countries--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 44
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Argentina&quot;,
    &quot;created_at&quot;: &quot;2026-01-17T02:23:19.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-01-17T02:23:19.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-countries--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-countries--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-countries--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-countries--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-countries--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-countries--id-" data-method="GET"
      data-path="api/countries/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-countries--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-countries--id-"
                    onclick="tryItOut('GETapi-countries--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-countries--id-"
                    onclick="cancelTryOut('GETapi-countries--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-countries--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/countries/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-countries--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-countries--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-countries--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the country. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>country</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="country"                data-endpoint="GETapi-countries--id-"
               value="1"
               data-component="url">
    <br>
<p>ID del país. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="reservas">Reservas</h1>

    <p>API para gestionar reservas</p>

                                <h2 id="reservas-POSTapi-reservations">Crear</h2>

<p>
</p>

<p>Crear un nuevo registro de reserva</p>

<span id="example-requests-POSTapi-reservations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/reservations" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "name=Juan"\
    --form "last_name=Perez"\
    --form "email=juan@example.com"\
    --form "phone=123456789"\
    --form "telegram_user=@juanperez"\
    --form "reservation_date=2024-01-20"\
    --form "confirmed="\
    --form "paid="\
    --form "country_id=1"\
    --form "ticket=@C:\Users\Jonas\AppData\Local\Temp\phpFDF9.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/reservations"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'Juan');
body.append('last_name', 'Perez');
body.append('email', 'juan@example.com');
body.append('phone', '123456789');
body.append('telegram_user', '@juanperez');
body.append('reservation_date', '2024-01-20');
body.append('confirmed', '');
body.append('paid', '');
body.append('country_id', '1');
body.append('ticket', document.querySelector('input[name="ticket"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-reservations">
</span>
<span id="execution-results-POSTapi-reservations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-reservations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-reservations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-reservations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-reservations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-reservations" data-method="POST"
      data-path="api/reservations"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-reservations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-reservations"
                    onclick="tryItOut('POSTapi-reservations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-reservations"
                    onclick="cancelTryOut('POSTapi-reservations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-reservations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/reservations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-reservations"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-reservations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-reservations"
               value="Juan"
               data-component="body">
    <br>
<p>Nombre del cliente. Example: <code>Juan</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="POSTapi-reservations"
               value="Perez"
               data-component="body">
    <br>
<p>Apellido del cliente. Example: <code>Perez</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-reservations"
               value="juan@example.com"
               data-component="body">
    <br>
<p>Email del cliente. Example: <code>juan@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-reservations"
               value="123456789"
               data-component="body">
    <br>
<p>Teléfono del cliente. Example: <code>123456789</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>telegram_user</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="telegram_user"                data-endpoint="POSTapi-reservations"
               value="@juanperez"
               data-component="body">
    <br>
<p>Usuario de Telegram del cliente. Example: <code>@juanperez</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reservation_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reservation_date"                data-endpoint="POSTapi-reservations"
               value="2024-01-20"
               data-component="body">
    <br>
<p>Fecha de la reserva. Example: <code>2024-01-20</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>confirmed</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-reservations" style="display: none">
            <input type="radio" name="confirmed"
                   value="true"
                   data-endpoint="POSTapi-reservations"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-reservations" style="display: none">
            <input type="radio" name="confirmed"
                   value="false"
                   data-endpoint="POSTapi-reservations"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Confirmado (0 o 1). Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>paid</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-reservations" style="display: none">
            <input type="radio" name="paid"
                   value="true"
                   data-endpoint="POSTapi-reservations"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-reservations" style="display: none">
            <input type="radio" name="paid"
                   value="false"
                   data-endpoint="POSTapi-reservations"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Pagado (0 o 1). Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ticket</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="ticket"                data-endpoint="POSTapi-reservations"
               value=""
               data-component="body">
    <br>
<p>Comprobante de pago (imagen o PDF). Example: <code>C:\Users\Jonas\AppData\Local\Temp\phpFDF9.tmp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="country_id"                data-endpoint="POSTapi-reservations"
               value="1"
               data-component="body">
    <br>
<p>ID del país asociado. Example: <code>1</code></p>
        </div>
        </form>

                    <h2 id="reservas-GETapi-reservations--reservation_id-">Mostrar</h2>

<p>
</p>

<p>Obtener los detalles de una reserva específica</p>

<span id="example-requests-GETapi-reservations--reservation_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/reservations/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/reservations/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-reservations--reservation_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 43
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Jonas&quot;,
    &quot;last_name&quot;: &quot;Ojeda&quot;,
    &quot;email&quot;: &quot;jonojed@gmail.com&quot;,
    &quot;phone&quot;: &quot;3856979948&quot;,
    &quot;reservation_date&quot;: &quot;2026-01-16 00:00:00&quot;,
    &quot;confirmed&quot;: 1,
    &quot;paid&quot;: 1,
    &quot;country_id&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Argentina&quot;,
        &quot;created_at&quot;: &quot;2026-01-17T02:23:19.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-01-17T02:23:19.000000Z&quot;
    },
    &quot;ticket_url&quot;: &quot;http://127.0.0.1:8000/storage/tickets/X1XlkbXblfARPbLenbSKk3uq0FwKOQQQm6ChxhkQ.jpg&quot;,
    &quot;telegram_user&quot;: &quot;codyTrader&quot;,
    &quot;created_at&quot;: &quot;2026-01-17T02:54:12.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-01-19T03:42:15.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-reservations--reservation_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-reservations--reservation_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-reservations--reservation_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-reservations--reservation_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-reservations--reservation_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-reservations--reservation_id-" data-method="GET"
      data-path="api/reservations/{reservation_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-reservations--reservation_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-reservations--reservation_id-"
                    onclick="tryItOut('GETapi-reservations--reservation_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-reservations--reservation_id-"
                    onclick="cancelTryOut('GETapi-reservations--reservation_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-reservations--reservation_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/reservations/{reservation_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-reservations--reservation_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-reservations--reservation_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>reservation_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="reservation_id"                data-endpoint="GETapi-reservations--reservation_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the reservation. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>reservation</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="reservation"                data-endpoint="GETapi-reservations--reservation_id-"
               value="1"
               data-component="url">
    <br>
<p>ID de la reserva. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="slide">Slide</h1>

    <p>Controlador para gestionar los slides.</p>

                                <h2 id="slide-GETapi-slides">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-slides">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/slides?nroPagina=1&amp;sinPaginar=1&amp;paginadoSimple=1&amp;ordenFechaCreado=DESC" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nroPagina\": 4326.41688,
    \"sinPaginar\": true,
    \"paginadoSimple\": true,
    \"ordenFechaCreado\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/slides"
);

const params = {
    "nroPagina": "1",
    "sinPaginar": "1",
    "paginadoSimple": "1",
    "ordenFechaCreado": "DESC",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nroPagina": 4326.41688,
    "sinPaginar": true,
    "paginadoSimple": true,
    "ordenFechaCreado": "architecto"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-slides">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 49
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: {
        &quot;ordenFechaCreado&quot;: [
            &quot;validation.in&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-slides" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-slides"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-slides"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-slides" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-slides">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-slides" data-method="GET"
      data-path="api/slides"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-slides', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-slides"
                    onclick="tryItOut('GETapi-slides');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-slides"
                    onclick="cancelTryOut('GETapi-slides');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-slides"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/slides</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-slides"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-slides"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-slides"
               value="1"
               data-component="query">
    <br>
<p>Página a mostrar. Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-slides" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="1"
                   data-endpoint="GETapi-slides"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-slides" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="0"
                   data-endpoint="GETapi-slides"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para evitar la paginación y devolver todos los registros. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-slides" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="1"
                   data-endpoint="GETapi-slides"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-slides" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="0"
                   data-endpoint="GETapi-slides"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para realizar un paginado simple con anterior/siguiente, eficiente cuando se manejan muchos datos. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-slides"
               value="DESC"
               data-component="query">
    <br>
<p>Ordenar por fecha de creación. Valores posibles: ASC, DESC. Example: <code>DESC</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-slides"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-slides" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="true"
                   data-endpoint="GETapi-slides"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-slides" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="false"
                   data-endpoint="GETapi-slides"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-slides" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="true"
                   data-endpoint="GETapi-slides"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-slides" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="false"
                   data-endpoint="GETapi-slides"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-slides"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="slide-GETapi-slides--id-">Obtener datos</h2>

<p>
</p>

<p>Obtener datos de un registro</p>

<span id="example-requests-GETapi-slides--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/slides/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/slides/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-slides--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 48
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;title&quot;: &quot;Aprende trading con una metodolog&iacute;a&quot;,
    &quot;highlight&quot;: &quot;profesional, medible y basada en datos&quot;,
    &quot;tag&quot;: &quot;Metodolog&iacute;a profesional verificable&quot;,
    &quot;description&quot;: &quot;Formaci&oacute;n real en mercados financieros, gesti&oacute;n de riesgo y toma de decisiones. Sin promesas falsas, solo resultados documentados.&quot;,
    &quot;primary_btn_text&quot;: &quot;Acceder al programa&quot;,
    &quot;primary_btn_link&quot;: &quot;#cart&quot;,
    &quot;secondary_btn_text&quot;: &quot;Ver metodolog&iacute;a&quot;,
    &quot;secondary_btn_link&quot;: &quot;#metodologia&quot;,
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/slides/01KETB9G7AMYHWVYTCVYF3HGEQ.jpg&quot;,
    &quot;floating_card_title&quot;: &quot;+340 ops&quot;,
    &quot;floating_card_description&quot;: &quot;Backtesting&quot;,
    &quot;floating_card_icon&quot;: &quot;BarChart3&quot;,
    &quot;indicators&quot;: [
        {
            &quot;icon&quot;: &quot;Shield&quot;,
            &quot;text&quot;: &quot;Gesti&oacute;n de riesgo&quot;,
            &quot;color&quot;: &quot;text-primary&quot;
        },
        {
            &quot;icon&quot;: &quot;BarChart3&quot;,
            &quot;text&quot;: &quot;Resultados auditables&quot;,
            &quot;color&quot;: &quot;text-secondary&quot;
        }
    ],
    &quot;expiration&quot;: false,
    &quot;expiration_date&quot;: null,
    &quot;activation_date&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-slides--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-slides--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-slides--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-slides--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-slides--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-slides--id-" data-method="GET"
      data-path="api/slides/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-slides--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-slides--id-"
                    onclick="tryItOut('GETapi-slides--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-slides--id-"
                    onclick="cancelTryOut('GETapi-slides--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-slides--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/slides/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-slides--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-slides--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-slides--id-"
               value="1"
               data-component="url">
    <br>
<p>ID del registro. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="stats">Stats</h1>

    <p>Controlador para gestionar las estadísticas.</p>

                                <h2 id="stats-GETapi-stats">Display a listing of the resource.</h2>

<p>
</p>

<p>Obtener listado de estadísticas.</p>

<span id="example-requests-GETapi-stats">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/stats?nroPagina=1&amp;sinPaginar=1&amp;paginadoSimple=1&amp;ordenFechaCreado=DESC" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nroPagina\": 4326.41688,
    \"sinPaginar\": true,
    \"paginadoSimple\": true,
    \"ordenFechaCreado\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/stats"
);

const params = {
    "nroPagina": "1",
    "sinPaginar": "1",
    "paginadoSimple": "1",
    "ordenFechaCreado": "DESC",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nroPagina": 4326.41688,
    "sinPaginar": true,
    "paginadoSimple": true,
    "ordenFechaCreado": "architecto"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-stats">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 38
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: {
        &quot;ordenFechaCreado&quot;: [
            &quot;validation.in&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-stats" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-stats"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-stats"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-stats" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-stats">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-stats" data-method="GET"
      data-path="api/stats"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-stats', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-stats"
                    onclick="tryItOut('GETapi-stats');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-stats"
                    onclick="cancelTryOut('GETapi-stats');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-stats"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/stats</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-stats"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-stats"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-stats"
               value="1"
               data-component="query">
    <br>
<p>Página a mostrar. Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-stats" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="1"
                   data-endpoint="GETapi-stats"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-stats" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="0"
                   data-endpoint="GETapi-stats"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para evitar la paginación y devolver todos los registros. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-stats" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="1"
                   data-endpoint="GETapi-stats"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-stats" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="0"
                   data-endpoint="GETapi-stats"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Para realizar un paginado simple con anterior/siguiente, eficiente cuando se manejan muchos datos. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-stats"
               value="DESC"
               data-component="query">
    <br>
<p>Ordenar por fecha de creación. Valores posibles: ASC, DESC. Example: <code>DESC</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>nroPagina</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nroPagina"                data-endpoint="GETapi-stats"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sinPaginar</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-stats" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="true"
                   data-endpoint="GETapi-stats"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-stats" style="display: none">
            <input type="radio" name="sinPaginar"
                   value="false"
                   data-endpoint="GETapi-stats"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>paginadoSimple</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-stats" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="true"
                   data-endpoint="GETapi-stats"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-stats" style="display: none">
            <input type="radio" name="paginadoSimple"
                   value="false"
                   data-endpoint="GETapi-stats"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordenFechaCreado</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordenFechaCreado"                data-endpoint="GETapi-stats"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="stats-GETapi-stats--id-">Display the specified resource.</h2>

<p>
</p>

<p>Obtener datos de una estadística.</p>

<span id="example-requests-GETapi-stats--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/stats/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/stats/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-stats--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 37
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;value&quot;: &quot;30+&quot;,
    &quot;label&quot;: &quot;A&ntilde;os combinados&quot;,
    &quot;color&quot;: &quot;#ffffff&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-stats--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-stats--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-stats--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-stats--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-stats--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-stats--id-" data-method="GET"
      data-path="api/stats/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-stats--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-stats--id-"
                    onclick="tryItOut('GETapi-stats--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-stats--id-"
                    onclick="cancelTryOut('GETapi-stats--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-stats--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/stats/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-stats--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-stats--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-stats--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the stat. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>stat</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="stat"                data-endpoint="GETapi-stats--id-"
               value="1"
               data-component="url">
    <br>
<p>ID de la estadística. Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>

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
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: January 7, 2026</li>
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
    &quot;created_at&quot;: &quot;2026-01-07T15:43:29.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-01-07T15:43:29.000000Z&quot;
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
    &quot;image&quot;: &quot;http://127.0.0.1:8000/storage/instructors/01KECVZY05H7WH7FWTG8CYS073.jpeg&quot;
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
    &quot;created_at&quot;: &quot;2026-01-07T15:43:29.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-01-07T15:43:29.000000Z&quot;
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
    &quot;created_at&quot;: &quot;2026-01-07T15:43:29.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2026-01-07T15:43:29.000000Z&quot;
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

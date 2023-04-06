<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

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
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.17.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.17.0.js") }}"></script>

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
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-hotel-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="hotel-management">
                    <a href="#hotel-management">Hotel management</a>
                </li>
                                    <ul id="tocify-subheader-hotel-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="hotel-management-GETapi-v1-hotels">
                                <a href="#hotel-management-GETapi-v1-hotels">Fetch zero to many JSON API resources.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="hotel-management-POSTapi-v1-hotels">
                                <a href="#hotel-management-POSTapi-v1-hotels">Create a new resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="hotel-management-GETapi-v1-hotels--id-">
                                <a href="#hotel-management-GETapi-v1-hotels--id-">Fetch zero to one JSON API resource by id.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="hotel-management-PATCHapi-v1-hotels--id-">
                                <a href="#hotel-management-PATCHapi-v1-hotels--id-">Update an existing resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="hotel-management-DELETEapi-v1-hotels--id-">
                                <a href="#hotel-management-DELETEapi-v1-hotels--id-">Destroy a resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="hotel-management-GETapi-v1-hotels--hotel--rooms">
                                <a href="#hotel-management-GETapi-v1-hotels--hotel--rooms">Fetch the related resource(s) for a JSON API relationship.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="hotel-management-GETapi-v1-hotels--hotel_id--relationships-rooms">
                                <a href="#hotel-management-GETapi-v1-hotels--hotel_id--relationships-rooms">Fetch the resource identifier(s) for a JSON API relationship.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-room-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="room-management">
                    <a href="#room-management">Room management</a>
                </li>
                                    <ul id="tocify-subheader-room-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="room-management-GETapi-v1-rooms">
                                <a href="#room-management-GETapi-v1-rooms">Fetch zero to many JSON API resources.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="room-management-POSTapi-v1-rooms">
                                <a href="#room-management-POSTapi-v1-rooms">Create a new resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="room-management-GETapi-v1-rooms--id-">
                                <a href="#room-management-GETapi-v1-rooms--id-">Fetch zero to one JSON API resource by id.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="room-management-PATCHapi-v1-rooms--id-">
                                <a href="#room-management-PATCHapi-v1-rooms--id-">Update an existing resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="room-management-DELETEapi-v1-rooms--id-">
                                <a href="#room-management-DELETEapi-v1-rooms--id-">Destroy a resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="room-management-GETapi-v1-rooms--room--hotel">
                                <a href="#room-management-GETapi-v1-rooms--room--hotel">Fetch the related resource(s) for a JSON API relationship.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="room-management-GETapi-v1-rooms--room_id--relationships-hotel">
                                <a href="#room-management-GETapi-v1-rooms--room_id--relationships-hotel">Fetch the resource identifier(s) for a JSON API relationship.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="room-management-PATCHapi-v1-rooms--room--booking">
                                <a href="#room-management-PATCHapi-v1-rooms--room--booking">Booking room</a>
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
        <li>Last updated: April 6, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user" \
    --header "Content-Type: application/vnd.api+json" \
    --header "Accept: application/vnd.api+json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

const headers = {
    "Content-Type": "application/vnd.api+json",
    "Accept": "application/vnd.api+json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: application/vnd.api+json
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;jsonapi&quot;: {
        &quot;version&quot;: &quot;1.0&quot;
    },
    &quot;errors&quot;: [
        {
            &quot;detail&quot;: &quot;Unauthenticated.&quot;,
            &quot;status&quot;: &quot;401&quot;,
            &quot;title&quot;: &quot;Unauthorized&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-user"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-user"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                        </form>

                <h1 id="hotel-management">Hotel management</h1>

    <p>APIs for managing hotels</p>

                                <h2 id="hotel-management-GETapi-v1-hotels">Fetch zero to many JSON API resources.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-hotels">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/hotels" \
    --header "Content-Type: application/vnd.api+json" \
    --header "Accept: application/vnd.api+json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotels"
);

const headers = {
    "Content-Type": "application/vnd.api+json",
    "Accept": "application/vnd.api+json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-hotels">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: application/vnd.api+json
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;jsonapi&quot;: {
        &quot;version&quot;: &quot;1.0&quot;
    },
    &quot;data&quot;: [
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;1&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Rosenbaum, Gulgowski and Renner&quot;,
                &quot;description&quot;: &quot;Quaerat ut illo vel debitis. Praesentium voluptatum doloribus distinctio nostrum id magni.&quot;,
                &quot;country&quot;: &quot;Oman&quot;,
                &quot;city&quot;: &quot;Friesenmouth&quot;,
                &quot;address&quot;: &quot;5884 D&#039;angelo Ramp\nWest Ianstad, OK 33642-5412&quot;,
                &quot;star_rating&quot;: 3,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:19.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:19.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/1/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/1/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/1&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;2&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Ritchie-Turcotte&quot;,
                &quot;description&quot;: &quot;Error voluptate quia neque dolorum reprehenderit neque. Dolore maxime et aliquam est ut in.&quot;,
                &quot;country&quot;: &quot;Iran&quot;,
                &quot;city&quot;: &quot;Borermouth&quot;,
                &quot;address&quot;: &quot;680 Thiel Way Suite 576\nLake Addison, MT 25965&quot;,
                &quot;star_rating&quot;: 2,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:19.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:19.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/2/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/2/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/2&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;3&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Barton-Rogahn&quot;,
                &quot;description&quot;: &quot;Aspernatur sit expedita animi eos est id et. Itaque nulla quo non ipsa eius incidunt.&quot;,
                &quot;country&quot;: &quot;Tajikistan&quot;,
                &quot;city&quot;: &quot;West Martineshire&quot;,
                &quot;address&quot;: &quot;40243 Kathryn Greens Suite 296\nMacyport, MA 69575&quot;,
                &quot;star_rating&quot;: 5,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/3/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/3/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/3&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;4&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Koss Group&quot;,
                &quot;description&quot;: &quot;Qui repudiandae consectetur voluptatem corporis non. Inventore illum et unde.&quot;,
                &quot;country&quot;: &quot;Swaziland&quot;,
                &quot;city&quot;: &quot;Tiannabury&quot;,
                &quot;address&quot;: &quot;5953 Halvorson Fort Apt. 900\nWunschfort, OR 87946-8527&quot;,
                &quot;star_rating&quot;: 1,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/4/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/4/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/4&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;5&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Homenick-Hoeger&quot;,
                &quot;description&quot;: &quot;Id omnis rerum dignissimos et cumque rerum aut. Odit nam aut repellat est. Saepe et dicta quos rem.&quot;,
                &quot;country&quot;: &quot;Anguilla&quot;,
                &quot;city&quot;: &quot;Gorczanyland&quot;,
                &quot;address&quot;: &quot;57072 Johnny Throughway\nNorth Assuntamouth, NV 64902&quot;,
                &quot;star_rating&quot;: 3,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/5/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/5/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/5&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;6&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Kirlin, Friesen and Nicolas&quot;,
                &quot;description&quot;: &quot;Consequatur placeat est voluptatibus est. Vel magni sit a. Quae quo perferendis vel quisquam.&quot;,
                &quot;country&quot;: &quot;Sweden&quot;,
                &quot;city&quot;: &quot;Boyleton&quot;,
                &quot;address&quot;: &quot;235 Armstrong Mission Apt. 708\nBotsfordmouth, MA 72426&quot;,
                &quot;star_rating&quot;: 5,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/6/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/6/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/6&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;7&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Metz-Wilderman&quot;,
                &quot;description&quot;: &quot;Recusandae reiciendis impedit ipsam animi alias modi. Blanditiis voluptas earum neque.&quot;,
                &quot;country&quot;: &quot;Yemen&quot;,
                &quot;city&quot;: &quot;West Ivyton&quot;,
                &quot;address&quot;: &quot;617 Ryleigh Shore Suite 825\nPort Onie, NJ 73170&quot;,
                &quot;star_rating&quot;: 4,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/7/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/7/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/7&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;8&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Schulist-Trantow&quot;,
                &quot;description&quot;: &quot;Aut aut nemo nostrum harum est. Nesciunt suscipit dolorum eum qui.&quot;,
                &quot;country&quot;: &quot;Cuba&quot;,
                &quot;city&quot;: &quot;Greenfeldermouth&quot;,
                &quot;address&quot;: &quot;11214 Carolanne Haven Apt. 669\nNorth Bernhard, AK 78260-9718&quot;,
                &quot;star_rating&quot;: 4,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/8/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/8/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/8&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;9&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Ullrich Inc&quot;,
                &quot;description&quot;: &quot;Qui soluta cupiditate enim totam et sed. Fuga quibusdam rerum id magni tempora veniam pariatur.&quot;,
                &quot;country&quot;: &quot;Antigua and Barbuda&quot;,
                &quot;city&quot;: &quot;New Candacestad&quot;,
                &quot;address&quot;: &quot;5338 Christian Spurs Apt. 343\nPort Thadmouth, MD 09770-6400&quot;,
                &quot;star_rating&quot;: 4,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/9/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/9/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/9&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;10&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Dietrich Inc&quot;,
                &quot;description&quot;: &quot;Rerum consectetur ut possimus dolores qui. Deserunt quisquam aut libero repellendus quam quae.&quot;,
                &quot;country&quot;: &quot;Norfolk Island&quot;,
                &quot;city&quot;: &quot;Lake Tanyaland&quot;,
                &quot;address&quot;: &quot;17625 Cummerata Loaf\nNew Domenicachester, CT 18860&quot;,
                &quot;star_rating&quot;: 5,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/10/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/10/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/10&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;11&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Kuhic Inc&quot;,
                &quot;description&quot;: &quot;Quam et natus distinctio autem. In qui at quia ut explicabo.&quot;,
                &quot;country&quot;: &quot;New Zealand&quot;,
                &quot;city&quot;: &quot;North Codyton&quot;,
                &quot;address&quot;: &quot;3880 Diamond Mission\nLangoshmouth, NC 35856-0675&quot;,
                &quot;star_rating&quot;: 2,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/11/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/11/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/11&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;12&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;O&#039;Conner, Wisozk and Hane&quot;,
                &quot;description&quot;: &quot;Et necessitatibus velit rerum. Quasi omnis consectetur unde corrupti quas quo ut.&quot;,
                &quot;country&quot;: &quot;Colombia&quot;,
                &quot;city&quot;: &quot;Lake Boyd&quot;,
                &quot;address&quot;: &quot;12389 Mosciski Garden Suite 034\nLebsackchester, MS 73944&quot;,
                &quot;star_rating&quot;: 4,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/12/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/12/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/12&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;13&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Bradtke Group&quot;,
                &quot;description&quot;: &quot;Neque sequi ut quia reprehenderit. Ut inventore quia odit modi eligendi ullam molestiae.&quot;,
                &quot;country&quot;: &quot;Turkey&quot;,
                &quot;city&quot;: &quot;West Kimmouth&quot;,
                &quot;address&quot;: &quot;45571 Treutel Meadows\nPort Nathanial, MD 34030-6497&quot;,
                &quot;star_rating&quot;: 2,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/13/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/13/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/13&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;14&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Mosciski, Toy and Quitzon&quot;,
                &quot;description&quot;: &quot;Fuga doloribus nobis dolorem modi temporibus. Similique odit nulla est autem et.&quot;,
                &quot;country&quot;: &quot;Korea&quot;,
                &quot;city&quot;: &quot;Lorenhaven&quot;,
                &quot;address&quot;: &quot;98052 Mariela Meadow\nSouth Alexanneland, NM 50557&quot;,
                &quot;star_rating&quot;: 5,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/14/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/14/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/14&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;15&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Dietrich, Beahan and Roob&quot;,
                &quot;description&quot;: &quot;Ipsam nam ut modi. Libero dolorem totam sint vel commodi.&quot;,
                &quot;country&quot;: &quot;Afghanistan&quot;,
                &quot;city&quot;: &quot;Lake Opal&quot;,
                &quot;address&quot;: &quot;300 Kaley Crossroad\nLeannestad, HI 92627-7745&quot;,
                &quot;star_rating&quot;: 3,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/15/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/15/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/15&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;16&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Kshlerin-Pfannerstill&quot;,
                &quot;description&quot;: &quot;Reiciendis voluptatem velit voluptas et ea. Accusamus quo voluptatem libero saepe deserunt.&quot;,
                &quot;country&quot;: &quot;Kyrgyz Republic&quot;,
                &quot;city&quot;: &quot;Willville&quot;,
                &quot;address&quot;: &quot;384 Lenny Place Suite 327\nAriborough, CA 55609&quot;,
                &quot;star_rating&quot;: 5,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/16/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/16/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/16&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;17&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Stokes Group&quot;,
                &quot;description&quot;: &quot;Est nihil aut minus iure at. Minus quo qui deserunt. Quia minima saepe illum officiis.&quot;,
                &quot;country&quot;: &quot;Belarus&quot;,
                &quot;city&quot;: &quot;Reichelmouth&quot;,
                &quot;address&quot;: &quot;1031 Schumm Shoals\nPort Analand, WY 47696-0091&quot;,
                &quot;star_rating&quot;: 5,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/17/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/17/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/17&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;18&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Treutel, Franecki and Halvorson&quot;,
                &quot;description&quot;: &quot;Delectus tempore illum excepturi qui id. Dolorum rerum qui aliquam.&quot;,
                &quot;country&quot;: &quot;Finland&quot;,
                &quot;city&quot;: &quot;North Lucie&quot;,
                &quot;address&quot;: &quot;869 Else Fort Apt. 761\nWest Jakaylastad, HI 08764&quot;,
                &quot;star_rating&quot;: 3,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/18/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/18/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/18&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;19&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Botsford and Sons&quot;,
                &quot;description&quot;: &quot;Id nihil rem sed ea a quis. Hic odit laudantium corrupti. Qui aut dolor quae ab qui modi qui iure.&quot;,
                &quot;country&quot;: &quot;Brazil&quot;,
                &quot;city&quot;: &quot;Johnsfurt&quot;,
                &quot;address&quot;: &quot;87571 Pat Crossing\nSouth Green, OK 26258-0904&quot;,
                &quot;star_rating&quot;: 3,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/19/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/19/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/19&quot;
            }
        },
        {
            &quot;type&quot;: &quot;hotels&quot;,
            &quot;id&quot;: &quot;20&quot;,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Wisozk PLC&quot;,
                &quot;description&quot;: &quot;Iusto voluptatem fugit ex quae. Quam placeat minus eum voluptatem non voluptas aut quibusdam.&quot;,
                &quot;country&quot;: &quot;Heard Island and McDonald Islands&quot;,
                &quot;city&quot;: &quot;New Irving&quot;,
                &quot;address&quot;: &quot;84490 Maximilian Expressway Suite 401\nPort Cortneyhaven, GA 53541&quot;,
                &quot;star_rating&quot;: 2,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;rooms&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/20/rooms&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/20/relationships/rooms&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/hotels/20&quot;
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-hotels" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-hotels"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-hotels" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-hotels" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-hotels"></code></pre>
</span>
<form id="form-GETapi-v1-hotels" data-method="GET"
      data-path="api/v1/hotels"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-hotels', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-hotels"
                    onclick="tryItOut('GETapi-v1-hotels');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-hotels"
                    onclick="cancelTryOut('GETapi-v1-hotels');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-hotels" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/hotels</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-hotels"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-hotels"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                        </form>

                    <h2 id="hotel-management-POSTapi-v1-hotels">Create a new resource.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-hotels">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/hotels" \
    --header "Content-Type: application/vnd.api+json" \
    --header "Accept: application/vnd.api+json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotels"
);

const headers = {
    "Content-Type": "application/vnd.api+json",
    "Accept": "application/vnd.api+json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-hotels">
</span>
<span id="execution-results-POSTapi-v1-hotels" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-hotels"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-hotels" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-hotels" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-hotels"></code></pre>
</span>
<form id="form-POSTapi-v1-hotels" data-method="POST"
      data-path="api/v1/hotels"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-hotels', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-hotels"
                    onclick="tryItOut('POSTapi-v1-hotels');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-hotels"
                    onclick="cancelTryOut('POSTapi-v1-hotels');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-hotels" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/hotels</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-hotels"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-hotels"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                        </form>

                    <h2 id="hotel-management-GETapi-v1-hotels--id-">Fetch zero to one JSON API resource by id.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-hotels--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/hotels/1" \
    --header "Content-Type: application/vnd.api+json" \
    --header "Accept: application/vnd.api+json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotels/1"
);

const headers = {
    "Content-Type": "application/vnd.api+json",
    "Accept": "application/vnd.api+json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-hotels--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: application/vnd.api+json
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;jsonapi&quot;: {
        &quot;version&quot;: &quot;1.0&quot;
    },
    &quot;links&quot;: {
        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/1&quot;
    },
    &quot;data&quot;: {
        &quot;type&quot;: &quot;hotels&quot;,
        &quot;id&quot;: &quot;1&quot;,
        &quot;attributes&quot;: {
            &quot;title&quot;: &quot;Rosenbaum, Gulgowski and Renner&quot;,
            &quot;description&quot;: &quot;Quaerat ut illo vel debitis. Praesentium voluptatum doloribus distinctio nostrum id magni.&quot;,
            &quot;country&quot;: &quot;Oman&quot;,
            &quot;city&quot;: &quot;Friesenmouth&quot;,
            &quot;address&quot;: &quot;5884 D&#039;angelo Ramp\nWest Ianstad, OK 33642-5412&quot;,
            &quot;star_rating&quot;: 3,
            &quot;createdAt&quot;: &quot;2023-04-04T10:27:19.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2023-04-04T10:27:19.000000Z&quot;
        },
        &quot;relationships&quot;: {
            &quot;rooms&quot;: {
                &quot;links&quot;: {
                    &quot;related&quot;: &quot;http://localhost/api/v1/hotels/1/rooms&quot;,
                    &quot;self&quot;: &quot;http://localhost/api/v1/hotels/1/relationships/rooms&quot;
                }
            }
        },
        &quot;links&quot;: {
            &quot;self&quot;: &quot;http://localhost/api/v1/hotels/1&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-hotels--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-hotels--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-hotels--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-hotels--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-hotels--id-"></code></pre>
</span>
<form id="form-GETapi-v1-hotels--id-" data-method="GET"
      data-path="api/v1/hotels/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-hotels--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-hotels--id-"
                    onclick="tryItOut('GETapi-v1-hotels--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-hotels--id-"
                    onclick="cancelTryOut('GETapi-v1-hotels--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-hotels--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/hotels/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-hotels--id-"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-hotels--id-"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-v1-hotels--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the hotel. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="hotel-management-PATCHapi-v1-hotels--id-">Update an existing resource.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-hotels--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/v1/hotels/1" \
    --header "Content-Type: application/vnd.api+json" \
    --header "Accept: application/vnd.api+json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotels/1"
);

const headers = {
    "Content-Type": "application/vnd.api+json",
    "Accept": "application/vnd.api+json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-hotels--id-">
</span>
<span id="execution-results-PATCHapi-v1-hotels--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-hotels--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-hotels--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-hotels--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-hotels--id-"></code></pre>
</span>
<form id="form-PATCHapi-v1-hotels--id-" data-method="PATCH"
      data-path="api/v1/hotels/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-hotels--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-hotels--id-"
                    onclick="tryItOut('PATCHapi-v1-hotels--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-hotels--id-"
                    onclick="cancelTryOut('PATCHapi-v1-hotels--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-hotels--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/hotels/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PATCHapi-v1-hotels--id-"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PATCHapi-v1-hotels--id-"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PATCHapi-v1-hotels--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the hotel. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="hotel-management-DELETEapi-v1-hotels--id-">Destroy a resource.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-hotels--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/hotels/1" \
    --header "Content-Type: application/vnd.api+json" \
    --header "Accept: application/vnd.api+json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotels/1"
);

const headers = {
    "Content-Type": "application/vnd.api+json",
    "Accept": "application/vnd.api+json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-hotels--id-">
</span>
<span id="execution-results-DELETEapi-v1-hotels--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-hotels--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-hotels--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-hotels--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-hotels--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-hotels--id-" data-method="DELETE"
      data-path="api/v1/hotels/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-hotels--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-hotels--id-"
                    onclick="tryItOut('DELETEapi-v1-hotels--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-hotels--id-"
                    onclick="cancelTryOut('DELETEapi-v1-hotels--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-hotels--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/hotels/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-v1-hotels--id-"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-v1-hotels--id-"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-v1-hotels--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the hotel. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="hotel-management-GETapi-v1-hotels--hotel--rooms">Fetch the related resource(s) for a JSON API relationship.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-hotels--hotel--rooms">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/hotels/1/rooms" \
    --header "Content-Type: application/vnd.api+json" \
    --header "Accept: application/vnd.api+json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotels/1/rooms"
);

const headers = {
    "Content-Type": "application/vnd.api+json",
    "Accept": "application/vnd.api+json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-hotels--hotel--rooms">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: application/vnd.api+json
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;jsonapi&quot;: {
        &quot;version&quot;: &quot;1.0&quot;
    },
    &quot;links&quot;: {
        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/1/rooms&quot;,
        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/1/relationships/rooms&quot;
    },
    &quot;data&quot;: [
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;11&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 7,
                &quot;description&quot;: &quot;Corrupti aut quo sit non. Adipisci quia temporibus officiis impedit. Harum quibusdam nam quia.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/11/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/11/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/11&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;55&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 56,
                &quot;description&quot;: &quot;Doloremque incidunt aut consequatur voluptates sit. Dolorem et praesentium magnam qui et eum.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/55/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/55/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/55&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;58&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 40,
                &quot;description&quot;: &quot;Distinctio deleniti impedit sit rerum magnam. Quibusdam et qui tempore impedit.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/58/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/58/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/58&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;60&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 17,
                &quot;description&quot;: &quot;Illo et dolor natus ut. Odit sed minus aspernatur quas. Qui dolore sit sapiente quod at quia.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/60/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/60/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/60&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;71&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 28,
                &quot;description&quot;: &quot;Dicta in culpa quia id aperiam. Sit aut sapiente beatae. Ea veritatis aut beatae repellat non.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/71/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/71/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/71&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;85&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 52,
                &quot;description&quot;: &quot;Amet ea odio voluptatum facilis ipsa. Rem excepturi perspiciatis ipsum praesentium.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/85/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/85/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/85&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;103&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 63,
                &quot;description&quot;: &quot;Nemo fugit ducimus at recusandae voluptatibus. Sint eum adipisci ipsam totam maiores.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/103/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/103/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/103&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;119&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 95,
                &quot;description&quot;: &quot;Quia sunt qui consequatur aliquid praesentium et. Tempora ipsum asperiores quos quo.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/119/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/119/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/119&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;131&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 34,
                &quot;description&quot;: &quot;Ut qui voluptatem est non. Rem amet sed ut ducimus. Non cupiditate ea dolorem et voluptatem minus.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/131/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/131/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/131&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;133&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 50,
                &quot;description&quot;: &quot;Molestiae in minus facere non et et id. Tenetur ex dicta incidunt nesciunt.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/133/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/133/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/133&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;136&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 26,
                &quot;description&quot;: &quot;Voluptatem sint quia nobis ab nobis. Eum qui autem ea dicta quia quod et.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/136/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/136/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/136&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;153&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 91,
                &quot;description&quot;: &quot;Ut a vel pariatur ipsa. Inventore consequuntur est non deserunt sed. Est sapiente tempore nam est.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/153/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/153/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/153&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;166&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 60,
                &quot;description&quot;: &quot;Explicabo at ut et ut eaque. Temporibus voluptatem et qui eum. Hic porro voluptas ut ut facere.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/166/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/166/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/166&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;193&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 47,
                &quot;description&quot;: &quot;Quo odio ex atque commodi atque laborum. Sed aspernatur voluptate vitae qui quod nihil.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/193/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/193/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/193&quot;
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-hotels--hotel--rooms" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-hotels--hotel--rooms"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-hotels--hotel--rooms" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-hotels--hotel--rooms" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-hotels--hotel--rooms"></code></pre>
</span>
<form id="form-GETapi-v1-hotels--hotel--rooms" data-method="GET"
      data-path="api/v1/hotels/{hotel}/rooms"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-hotels--hotel--rooms', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-hotels--hotel--rooms"
                    onclick="tryItOut('GETapi-v1-hotels--hotel--rooms');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-hotels--hotel--rooms"
                    onclick="cancelTryOut('GETapi-v1-hotels--hotel--rooms');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-hotels--hotel--rooms" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/hotels/{hotel}/rooms</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-hotels--hotel--rooms"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-hotels--hotel--rooms"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>hotel</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="hotel"                data-endpoint="GETapi-v1-hotels--hotel--rooms"
               value="1"
               data-component="url">
    <br>
<p>The hotel. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="hotel-management-GETapi-v1-hotels--hotel_id--relationships-rooms">Fetch the resource identifier(s) for a JSON API relationship.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-hotels--hotel_id--relationships-rooms">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/hotels/1/relationships/rooms" \
    --header "Content-Type: application/vnd.api+json" \
    --header "Accept: application/vnd.api+json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotels/1/relationships/rooms"
);

const headers = {
    "Content-Type": "application/vnd.api+json",
    "Accept": "application/vnd.api+json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-hotels--hotel_id--relationships-rooms">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: application/vnd.api+json
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;jsonapi&quot;: {
        &quot;version&quot;: &quot;1.0&quot;
    },
    &quot;links&quot;: {
        &quot;related&quot;: &quot;http://localhost/api/v1/hotels/1/rooms&quot;,
        &quot;self&quot;: &quot;http://localhost/api/v1/hotels/1/relationships/rooms&quot;
    },
    &quot;data&quot;: [
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;11&quot;
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;55&quot;
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;58&quot;
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;60&quot;
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;71&quot;
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;85&quot;
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;103&quot;
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;119&quot;
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;131&quot;
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;133&quot;
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;136&quot;
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;153&quot;
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;166&quot;
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;193&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-hotels--hotel_id--relationships-rooms" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-hotels--hotel_id--relationships-rooms"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-hotels--hotel_id--relationships-rooms" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-hotels--hotel_id--relationships-rooms" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-hotels--hotel_id--relationships-rooms"></code></pre>
</span>
<form id="form-GETapi-v1-hotels--hotel_id--relationships-rooms" data-method="GET"
      data-path="api/v1/hotels/{hotel_id}/relationships/rooms"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-hotels--hotel_id--relationships-rooms', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-hotels--hotel_id--relationships-rooms"
                    onclick="tryItOut('GETapi-v1-hotels--hotel_id--relationships-rooms');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-hotels--hotel_id--relationships-rooms"
                    onclick="cancelTryOut('GETapi-v1-hotels--hotel_id--relationships-rooms');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-hotels--hotel_id--relationships-rooms" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/hotels/{hotel_id}/relationships/rooms</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-hotels--hotel_id--relationships-rooms"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-hotels--hotel_id--relationships-rooms"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>hotel_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="hotel_id"                data-endpoint="GETapi-v1-hotels--hotel_id--relationships-rooms"
               value="1"
               data-component="url">
    <br>
<p>The ID of the hotel. Example: <code>1</code></p>
            </div>
                    </form>

                <h1 id="room-management">Room management</h1>

    <p>APIs for managing rooms</p>

                                <h2 id="room-management-GETapi-v1-rooms">Fetch zero to many JSON API resources.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-rooms">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/rooms" \
    --header "Content-Type: application/vnd.api+json" \
    --header "Accept: application/vnd.api+json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/rooms"
);

const headers = {
    "Content-Type": "application/vnd.api+json",
    "Accept": "application/vnd.api+json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-rooms">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: application/vnd.api+json
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;jsonapi&quot;: {
        &quot;version&quot;: &quot;1.0&quot;
    },
    &quot;data&quot;: [
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;1&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 75,
                &quot;description&quot;: &quot;Et sunt accusantium ipsam voluptatibus. Sed est accusantium vel. Quo et provident amet.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:22.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:22.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/1/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/1/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/1&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;2&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 23,
                &quot;description&quot;: &quot;A id maiores et. Totam tenetur maiores aut ipsa totam ratione aliquam mollitia.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:22.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:22.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/2/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/2/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/2&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;3&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 59,
                &quot;description&quot;: &quot;Molestiae quis quibusdam maxime est. Magni iusto alias nihil iste.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:22.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:22.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/3/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/3/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/3&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;4&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 100,
                &quot;description&quot;: &quot;Illo suscipit est repudiandae illum. Sunt rem et eum nulla iusto eum maiores illo.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/4/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/4/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/4&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;5&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 33,
                &quot;description&quot;: &quot;Qui vel ullam natus consequuntur. Rerum et minus reiciendis suscipit illum quasi labore.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/5/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/5/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/5&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;6&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 71,
                &quot;description&quot;: &quot;Iste cum eum debitis mollitia. Est itaque esse magnam autem sint. Omnis sed ut mollitia.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/6/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/6/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/6&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;7&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 73,
                &quot;description&quot;: &quot;Reiciendis officia consectetur eos adipisci earum. Voluptatem ratione consequatur at non id odio.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/7/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/7/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/7&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;8&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 64,
                &quot;description&quot;: &quot;Libero vel veniam quia et est. Est aut quia et esse omnis.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/8/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/8/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/8&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;9&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 36,
                &quot;description&quot;: &quot;In porro est voluptate itaque et ut repellat. Dignissimos aliquam ab libero aut.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 1,
                &quot;starts_at&quot;: &quot;2023-04-04 13:00:00&quot;,
                &quot;ends_at&quot;: &quot;2023-04-07 13:00:00&quot;,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T14:40:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/9/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/9/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/9&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;10&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 93,
                &quot;description&quot;: &quot;Facilis quasi velit id minus sapiente. Qui fugit in ab adipisci sunt ea similique.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/10/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/10/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/10&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;11&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 7,
                &quot;description&quot;: &quot;Corrupti aut quo sit non. Adipisci quia temporibus officiis impedit. Harum quibusdam nam quia.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:23.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/11/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/11/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/11&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;12&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 67,
                &quot;description&quot;: &quot;Aut eius dolores totam et neque quaerat. Adipisci eum eos voluptatum nulla molestiae quis quasi.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:24.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:24.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/12/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/12/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/12&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;13&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 57,
                &quot;description&quot;: &quot;Sunt possimus incidunt officiis totam repellat. In omnis omnis illo aut.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:24.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:24.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/13/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/13/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/13&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;14&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 89,
                &quot;description&quot;: &quot;Labore consequuntur ab velit totam. Id nemo qui placeat neque aliquam. Laudantium rerum vero rerum.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:24.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:24.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/14/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/14/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/14&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;15&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 93,
                &quot;description&quot;: &quot;Ducimus omnis cumque saepe. Optio veniam optio facilis. Autem eum et hic et.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:24.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:24.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/15/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/15/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/15&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;16&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 67,
                &quot;description&quot;: &quot;Sit perferendis ex non non sed. Error magni quasi quis at unde. Ad beatae sunt minus aut.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:24.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:24.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/16/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/16/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/16&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;17&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 10,
                &quot;description&quot;: &quot;Occaecati et et amet excepturi. Ullam nulla eum iste porro beatae ullam. Id et neque vero.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:25.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:25.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/17/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/17/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/17&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;18&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 50,
                &quot;description&quot;: &quot;Non perferendis voluptate incidunt ea aliquid et. Eum optio nesciunt recusandae tempora at.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:25.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:25.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/18/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/18/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/18&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;19&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 23,
                &quot;description&quot;: &quot;Provident atque nemo iste cupiditate deleniti. Est sed mollitia et neque ab autem soluta.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:25.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:25.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/19/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/19/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/19&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;20&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 55,
                &quot;description&quot;: &quot;Iste minima at sit minima molestias. Id autem quo voluptas voluptatibus animi sunt consequuntur.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:25.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:25.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/20/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/20/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/20&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;21&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 84,
                &quot;description&quot;: &quot;Porro iusto repellat recusandae cum consequatur. Dolores unde numquam culpa ea enim magnam.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:25.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:25.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/21/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/21/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/21&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;22&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 15,
                &quot;description&quot;: &quot;Aliquid vero libero id dolor in reiciendis sit. Tempore ut et ut assumenda perferendis.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:25.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:25.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/22/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/22/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/22&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;23&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 97,
                &quot;description&quot;: &quot;Incidunt ipsam repellendus dolorem saepe. Aut corrupti omnis itaque ut.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:26.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:26.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/23/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/23/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/23&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;24&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 78,
                &quot;description&quot;: &quot;Consequatur nemo recusandae quas. Eius facilis et nihil consequatur voluptates.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:26.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:26.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/24/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/24/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/24&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;25&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 20,
                &quot;description&quot;: &quot;Sunt dignissimos vel autem qui. Aut magnam nam quod id.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:26.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:26.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/25/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/25/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/25&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;26&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 20,
                &quot;description&quot;: &quot;Harum ab alias est non sed quibusdam qui consequatur. Sed a et incidunt ut et.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:26.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:26.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/26/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/26/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/26&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;27&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 71,
                &quot;description&quot;: &quot;Excepturi nam dolorem error delectus quod. Omnis est beatae cum nisi praesentium.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:26.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:26.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/27/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/27/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/27&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;28&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 75,
                &quot;description&quot;: &quot;Qui sit quo ut eius saepe dolor quo. Magni rem in modi at. Quod et voluptatibus architecto.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 1,
                &quot;starts_at&quot;: &quot;2023-04-04 13:00:00&quot;,
                &quot;ends_at&quot;: &quot;2023-04-07 13:00:00&quot;,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:26.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T14:39:18.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/28/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/28/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/28&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;29&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 37,
                &quot;description&quot;: &quot;Neque ut ut ut. Voluptatem quia non sed aliquid. Amet nihil cumque ipsa laudantium.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:26.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:26.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/29/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/29/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/29&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;30&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 32,
                &quot;description&quot;: &quot;Maiores tempore sequi nostrum aut. Quia aliquam sed a et doloremque.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:26.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:26.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/30/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/30/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/30&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;31&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 5,
                &quot;description&quot;: &quot;Sed est consectetur adipisci ea nesciunt. Facere et et consequatur laboriosam.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/31/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/31/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/31&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;32&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 10,
                &quot;description&quot;: &quot;Omnis et consectetur quibusdam. Omnis ipsa sit magnam modi aut. Unde impedit culpa ullam non.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/32/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/32/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/32&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;33&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 27,
                &quot;description&quot;: &quot;Ad aut itaque nobis commodi ea. Consequuntur et saepe tempore sunt.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/33/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/33/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/33&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;34&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 49,
                &quot;description&quot;: &quot;Dolorem vero ea mollitia aut vel ducimus. Assumenda ex occaecati consequuntur eum sed aut maxime.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/34/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/34/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/34&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;35&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 12,
                &quot;description&quot;: &quot;Quibusdam sit amet enim qui eveniet et qui. Amet occaecati rerum est velit voluptas.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/35/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/35/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/35&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;36&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 9,
                &quot;description&quot;: &quot;Ut nisi sunt nostrum quas nulla odio inventore. Doloremque omnis vel iure non rerum et et.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/36/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/36/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/36&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;37&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 27,
                &quot;description&quot;: &quot;Ut distinctio quam suscipit corrupti aliquam. Omnis maiores illum officia consequuntur.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/37/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/37/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/37&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;38&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 17,
                &quot;description&quot;: &quot;Quam facilis repellendus et dolor quidem aut. Iure quas libero beatae perferendis.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/38/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/38/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/38&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;39&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 89,
                &quot;description&quot;: &quot;Ipsa eum quasi sunt quis. Perferendis libero provident sed voluptas.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/39/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/39/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/39&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;40&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 84,
                &quot;description&quot;: &quot;Et quaerat ea quia sed velit dolore enim. Exercitationem natus omnis animi velit in et.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/40/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/40/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/40&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;41&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 10,
                &quot;description&quot;: &quot;Ut quos qui ut velit vel rem. Quas eum mollitia ducimus voluptas.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/41/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/41/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/41&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;42&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 11,
                &quot;description&quot;: &quot;Qui minus ducimus beatae sed illo soluta. Similique ipsam neque nobis cumque.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/42/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/42/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/42&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;43&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 90,
                &quot;description&quot;: &quot;Sit quis molestiae rerum qui laudantium blanditiis. Totam quis architecto illo omnis iure vero.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/43/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/43/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/43&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;44&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 91,
                &quot;description&quot;: &quot;Soluta aut nisi laudantium qui eius harum. Eligendi dignissimos harum aut quo vel porro.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:27.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/44/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/44/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/44&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;45&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 39,
                &quot;description&quot;: &quot;Omnis autem culpa velit fugit quas soluta perspiciatis. Maxime omnis porro repellendus.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/45/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/45/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/45&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;46&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 16,
                &quot;description&quot;: &quot;Maiores libero molestias nobis beatae. Ipsum praesentium architecto ex earum.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/46/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/46/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/46&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;47&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 23,
                &quot;description&quot;: &quot;Eius minima et rerum est voluptate. Consequatur est maiores modi.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/47/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/47/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/47&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;48&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 44,
                &quot;description&quot;: &quot;Corrupti minus maiores aut earum. Aut ducimus quasi qui sit aut provident sapiente.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/48/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/48/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/48&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;49&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 62,
                &quot;description&quot;: &quot;Similique dignissimos in et numquam id labore. Quisquam aut minus voluptatem possimus non quasi.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/49/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/49/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/49&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;50&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 83,
                &quot;description&quot;: &quot;Aperiam et qui recusandae eos aperiam. Commodi non qui facilis rerum et. Animi ut iure vel.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/50/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/50/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/50&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;51&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 78,
                &quot;description&quot;: &quot;Quo quos consequatur non excepturi nulla sed quis. Animi nihil ut ad consequatur.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/51/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/51/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/51&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;52&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 40,
                &quot;description&quot;: &quot;Laboriosam laborum consequatur rem. Non et architecto eius. Accusantium quibusdam occaecati amet.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/52/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/52/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/52&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;53&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 7,
                &quot;description&quot;: &quot;Corporis in doloribus aliquam non aut cum non non. Dolores consequuntur a non quo. Eum sed quo est.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/53/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/53/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/53&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;54&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 83,
                &quot;description&quot;: &quot;Sequi autem dolor culpa delectus voluptatem. Eaque sit consequuntur non qui quia rem.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/54/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/54/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/54&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;55&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 56,
                &quot;description&quot;: &quot;Doloremque incidunt aut consequatur voluptates sit. Dolorem et praesentium magnam qui et eum.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/55/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/55/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/55&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;56&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 39,
                &quot;description&quot;: &quot;Ex omnis harum iure consequatur. Itaque natus corrupti velit repudiandae aut soluta.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/56/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/56/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/56&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;57&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 46,
                &quot;description&quot;: &quot;Qui explicabo veniam veritatis aliquid dolores. Aut et adipisci voluptatem dolor ut quibusdam.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/57/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/57/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/57&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;58&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 40,
                &quot;description&quot;: &quot;Distinctio deleniti impedit sit rerum magnam. Quibusdam et qui tempore impedit.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/58/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/58/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/58&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;59&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 6,
                &quot;description&quot;: &quot;Eos sint nihil consequuntur ipsam esse. Sint eveniet enim sit voluptatem atque.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/59/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/59/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/59&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;60&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 17,
                &quot;description&quot;: &quot;Illo et dolor natus ut. Odit sed minus aspernatur quas. Qui dolore sit sapiente quod at quia.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/60/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/60/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/60&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;61&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 41,
                &quot;description&quot;: &quot;Quibusdam qui est rem facere incidunt minima. Quo sunt sint nam consequuntur dignissimos nihil.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/61/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/61/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/61&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;62&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 52,
                &quot;description&quot;: &quot;Blanditiis maiores sint delectus et sit. Et voluptatum velit in.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/62/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/62/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/62&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;63&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 38,
                &quot;description&quot;: &quot;Non ut optio inventore culpa modi. Nihil architecto deserunt sed quod dolor.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:28.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/63/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/63/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/63&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;64&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 92,
                &quot;description&quot;: &quot;Dolores nostrum itaque debitis quisquam. Sequi atque voluptatem ipsa rem error consequatur.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/64/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/64/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/64&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;65&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 86,
                &quot;description&quot;: &quot;Animi voluptatem ut natus. Laudantium illum quis omnis in.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/65/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/65/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/65&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;66&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 37,
                &quot;description&quot;: &quot;Sed quas debitis non odit aut. Ipsam quasi quasi maxime.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/66/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/66/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/66&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;67&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 11,
                &quot;description&quot;: &quot;In dolorem ab tempora. Minus tempora quo nesciunt natus.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/67/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/67/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/67&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;68&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 2,
                &quot;description&quot;: &quot;Eligendi nulla dicta temporibus perferendis. Velit molestiae rerum accusantium libero.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/68/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/68/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/68&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;69&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 20,
                &quot;description&quot;: &quot;Tempore nostrum dolor et impedit autem quia. Ea ducimus fuga qui iste.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/69/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/69/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/69&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;70&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 67,
                &quot;description&quot;: &quot;Assumenda qui ratione quia. Qui magni in autem officiis ut. Ducimus unde sit velit.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/70/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/70/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/70&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;71&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 28,
                &quot;description&quot;: &quot;Dicta in culpa quia id aperiam. Sit aut sapiente beatae. Ea veritatis aut beatae repellat non.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/71/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/71/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/71&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;72&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 96,
                &quot;description&quot;: &quot;Iusto autem et autem. Nostrum dolorem est ullam. Distinctio et laboriosam autem minus.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/72/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/72/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/72&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;73&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 38,
                &quot;description&quot;: &quot;Alias pariatur est cum illum repellendus. Et omnis eius quis. Quia mollitia id non quia.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/73/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/73/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/73&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;74&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 71,
                &quot;description&quot;: &quot;Quos ut qui velit rem eum. Non reiciendis voluptas enim id vel minus.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/74/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/74/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/74&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;75&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 6,
                &quot;description&quot;: &quot;Ut nobis porro ipsa dolor assumenda consequatur culpa. Dolorem nisi maxime officiis.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/75/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/75/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/75&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;76&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 40,
                &quot;description&quot;: &quot;Repudiandae ex quibusdam beatae et sequi aut repellat. Culpa eius ab quia ullam.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/76/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/76/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/76&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;77&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 42,
                &quot;description&quot;: &quot;Ab praesentium in sint aliquid iusto est. Cum aut totam voluptas accusamus quo ex.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/77/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/77/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/77&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;78&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 19,
                &quot;description&quot;: &quot;Iusto hic qui numquam. Officiis qui facere id.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/78/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/78/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/78&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;79&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 7,
                &quot;description&quot;: &quot;Dolorum ut sunt sint ipsam. Culpa quam necessitatibus assumenda quos.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/79/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/79/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/79&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;80&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 62,
                &quot;description&quot;: &quot;Temporibus quis quisquam dignissimos amet dolore natus ullam. Non et magni et sed molestias.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/80/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/80/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/80&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;81&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 20,
                &quot;description&quot;: &quot;Sint perferendis beatae voluptatem ut repudiandae dolorem iure. Iure aut dolores tempora.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/81/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/81/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/81&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;82&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 73,
                &quot;description&quot;: &quot;Qui atque est cupiditate. Qui dolor error qui est tempora magni. Est id dicta sint qui et magnam.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/82/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/82/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/82&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;83&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 38,
                &quot;description&quot;: &quot;Quo vitae accusamus iure dignissimos rerum. Voluptatem eum veritatis voluptatem id.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/83/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/83/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/83&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;84&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 60,
                &quot;description&quot;: &quot;Tempore dolores et nemo voluptatem. Harum laboriosam magnam beatae inventore quo.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/84/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/84/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/84&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;85&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 52,
                &quot;description&quot;: &quot;Amet ea odio voluptatum facilis ipsa. Rem excepturi perspiciatis ipsum praesentium.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/85/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/85/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/85&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;86&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 63,
                &quot;description&quot;: &quot;Ut quibusdam velit fugit illum aut et. Ea vero nihil ut quis. Non nesciunt vel est.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/86/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/86/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/86&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;87&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 14,
                &quot;description&quot;: &quot;Numquam ea hic autem cupiditate sit adipisci sunt. Neque et quisquam voluptatem qui.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/87/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/87/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/87&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;88&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 35,
                &quot;description&quot;: &quot;Vero quia dolorem aut. Beatae nesciunt ea in quae omnis deleniti quisquam.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/88/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/88/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/88&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;89&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 16,
                &quot;description&quot;: &quot;Quo animi eum velit suscipit fugiat. Amet quis voluptas sit est.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/89/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/89/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/89&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;90&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 28,
                &quot;description&quot;: &quot;Cupiditate et repellat odio harum quasi. Dolorem dolorum omnis ea natus.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/90/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/90/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/90&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;91&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 25,
                &quot;description&quot;: &quot;Similique sint veniam hic ipsum qui saepe. Excepturi eos aut dolores atque.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/91/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/91/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/91&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;92&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 9,
                &quot;description&quot;: &quot;Qui repellendus eaque dolorem. Soluta id in tempore quod iure.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/92/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/92/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/92&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;93&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 43,
                &quot;description&quot;: &quot;Labore enim dolorem numquam qui assumenda adipisci. Est maiores et sit odio similique nobis amet.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/93/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/93/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/93&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;94&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 87,
                &quot;description&quot;: &quot;Praesentium incidunt corporis non velit reprehenderit. Tempora id accusantium quo vel sunt.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/94/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/94/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/94&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;95&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 41,
                &quot;description&quot;: &quot;Libero et eveniet qui omnis aspernatur. Ea autem consequuntur repudiandae maxime.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/95/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/95/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/95&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;96&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 81,
                &quot;description&quot;: &quot;Deserunt voluptatem sed fugiat possimus est. Molestias optio et consequatur optio cupiditate iusto.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/96/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/96/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/96&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;97&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 91,
                &quot;description&quot;: &quot;Officia in labore qui omnis architecto voluptas deleniti. Et et eum sit numquam suscipit.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/97/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/97/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/97&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;98&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 89,
                &quot;description&quot;: &quot;Cupiditate facilis soluta esse soluta quidem sit. Alias eos dolores aliquid ut quia.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/98/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/98/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/98&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;99&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 4,
                &quot;description&quot;: &quot;Et optio et dignissimos. Id asperiores ad consequuntur voluptatem qui a. Sed rem illo assumenda.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/99/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/99/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/99&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;100&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 22,
                &quot;description&quot;: &quot;Vero molestiae at saepe beatae repudiandae aspernatur. Fugit aut et commodi cum animi sequi.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:30.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/100/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/100/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/100&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;101&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 83,
                &quot;description&quot;: &quot;Qui mollitia veniam vitae recusandae minus eveniet voluptas. Reprehenderit omnis est minus at qui.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/101/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/101/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/101&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;102&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 84,
                &quot;description&quot;: &quot;Rerum aut dolores atque cumque sed quis aut. Necessitatibus qui minima temporibus voluptate.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/102/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/102/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/102&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;103&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 63,
                &quot;description&quot;: &quot;Nemo fugit ducimus at recusandae voluptatibus. Sint eum adipisci ipsam totam maiores.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/103/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/103/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/103&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;104&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 56,
                &quot;description&quot;: &quot;In nisi sit libero necessitatibus qui dignissimos aperiam. Porro at id aut.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/104/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/104/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/104&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;105&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 65,
                &quot;description&quot;: &quot;In minus voluptas et maxime id. Modi atque occaecati ducimus. Excepturi ut rerum deserunt non.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/105/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/105/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/105&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;106&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 48,
                &quot;description&quot;: &quot;Ut perspiciatis illum blanditiis minus. Cupiditate voluptas commodi sit odit iste quis.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/106/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/106/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/106&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;107&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 17,
                &quot;description&quot;: &quot;Magni ea facilis ut voluptatem. Voluptatem praesentium incidunt harum temporibus eveniet qui.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/107/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/107/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/107&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;108&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 95,
                &quot;description&quot;: &quot;Earum dolorem accusantium alias consequatur repudiandae tempora. Esse non magnam debitis beatae.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/108/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/108/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/108&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;109&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 95,
                &quot;description&quot;: &quot;Eaque quo illum nostrum est sunt. Perspiciatis ex aut commodi.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/109/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/109/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/109&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;110&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 4,
                &quot;description&quot;: &quot;Et officiis expedita consequuntur at. Ratione inventore dolorem vel autem incidunt sit.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/110/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/110/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/110&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;111&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 76,
                &quot;description&quot;: &quot;Quod veniam commodi officia sit et dolor iste. Corrupti tenetur qui aut consequatur.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/111/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/111/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/111&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;112&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 57,
                &quot;description&quot;: &quot;Perferendis laborum soluta recusandae ex est. Aliquid et eos vitae atque quidem.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/112/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/112/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/112&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;113&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 26,
                &quot;description&quot;: &quot;Aut alias et natus culpa et. Aliquam qui et eaque cupiditate est sint.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/113/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/113/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/113&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;114&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 47,
                &quot;description&quot;: &quot;Delectus at eum similique qui deleniti. Officiis quia rem dolor excepturi et. Est id et hic ea.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/114/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/114/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/114&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;115&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 48,
                &quot;description&quot;: &quot;Quia ea natus nulla et consequatur qui. Qui cumque non itaque magni fugit. Voluptatem et et est ut.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/115/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/115/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/115&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;116&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 99,
                &quot;description&quot;: &quot;Ut aliquid ut culpa. Ratione libero odit perspiciatis veritatis. Enim commodi in qui dolore.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/116/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/116/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/116&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;117&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 29,
                &quot;description&quot;: &quot;Et sit neque sunt sunt omnis. Iste id aut veritatis repellat rerum.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/117/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/117/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/117&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;118&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 26,
                &quot;description&quot;: &quot;Sed omnis explicabo occaecati molestiae animi. Aliquid iure aspernatur rerum laboriosam ab.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/118/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/118/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/118&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;119&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 95,
                &quot;description&quot;: &quot;Quia sunt qui consequatur aliquid praesentium et. Tempora ipsum asperiores quos quo.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/119/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/119/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/119&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;120&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 22,
                &quot;description&quot;: &quot;Dolores autem et eum architecto eveniet perspiciatis vel. Et dignissimos nesciunt sed id alias.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:31.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/120/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/120/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/120&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;121&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 74,
                &quot;description&quot;: &quot;Quo quia aut sed laborum. Iusto ipsam ut magnam nisi hic. Reprehenderit nesciunt veniam sint ea.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/121/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/121/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/121&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;122&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 5,
                &quot;description&quot;: &quot;Consectetur aut optio aut quia. Consequatur officia aut facilis. Eveniet quis dolorem pariatur a.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/122/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/122/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/122&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;123&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 56,
                &quot;description&quot;: &quot;Id quibusdam nisi ut aut consequatur. Mollitia aut iusto nihil.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/123/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/123/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/123&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;124&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 31,
                &quot;description&quot;: &quot;Totam quos sunt aut quos culpa qui. Deserunt autem inventore fuga consequatur molestiae est qui.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/124/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/124/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/124&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;125&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 56,
                &quot;description&quot;: &quot;Dicta unde et error necessitatibus. Soluta quas nesciunt praesentium possimus eos dolor.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/125/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/125/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/125&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;126&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 43,
                &quot;description&quot;: &quot;Voluptas aliquid sed culpa voluptatem facilis fuga id. Voluptatem nemo odio est et.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/126/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/126/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/126&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;127&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 85,
                &quot;description&quot;: &quot;Facere consequatur nemo est ut. Veniam repudiandae officia eius officiis.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/127/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/127/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/127&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;128&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 41,
                &quot;description&quot;: &quot;Eius unde quo deserunt et aliquid. Natus cum quis voluptatem sit sunt. Velit ea commodi ab nisi.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/128/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/128/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/128&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;129&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 25,
                &quot;description&quot;: &quot;Amet quia molestias blanditiis. Ipsum distinctio ab esse quis eos laborum quis.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/129/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/129/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/129&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;130&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 100,
                &quot;description&quot;: &quot;Quam sint corporis mollitia sed libero. Deleniti consequatur amet perspiciatis fugiat.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/130/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/130/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/130&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;131&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 34,
                &quot;description&quot;: &quot;Ut qui voluptatem est non. Rem amet sed ut ducimus. Non cupiditate ea dolorem et voluptatem minus.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/131/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/131/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/131&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;132&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 97,
                &quot;description&quot;: &quot;Impedit unde et repellendus. In sit qui voluptate dolorum facere voluptas. Pariatur aut aut qui ab.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/132/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/132/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/132&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;133&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 50,
                &quot;description&quot;: &quot;Molestiae in minus facere non et et id. Tenetur ex dicta incidunt nesciunt.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/133/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/133/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/133&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;134&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 34,
                &quot;description&quot;: &quot;Omnis suscipit sed error. Est voluptatem nulla est quam et sint.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/134/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/134/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/134&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;135&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 54,
                &quot;description&quot;: &quot;Et et commodi eaque alias autem quo quo. Eum ut esse alias error quis tenetur qui.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/135/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/135/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/135&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;136&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 26,
                &quot;description&quot;: &quot;Voluptatem sint quia nobis ab nobis. Eum qui autem ea dicta quia quod et.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/136/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/136/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/136&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;137&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 36,
                &quot;description&quot;: &quot;Est ab reprehenderit facilis maiores ut dolorum impedit. Dolorum ut et consectetur non.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/137/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/137/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/137&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;138&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 5,
                &quot;description&quot;: &quot;Minima necessitatibus voluptatem eos sint. Eius inventore iste quasi autem.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/138/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/138/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/138&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;139&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 96,
                &quot;description&quot;: &quot;Quisquam non nemo sint beatae debitis id. Impedit explicabo et molestias vitae.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/139/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/139/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/139&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;140&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 49,
                &quot;description&quot;: &quot;Dolorem autem quae voluptates nihil totam. Reprehenderit at nam quos. Qui sed est suscipit aut.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/140/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/140/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/140&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;141&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 1,
                &quot;description&quot;: &quot;Modi aut est cumque. Quia consequatur sint labore mollitia sit. Enim rerum et nobis aut.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/141/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/141/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/141&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;142&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 15,
                &quot;description&quot;: &quot;Fugiat est dicta quaerat fugit eaque. Et minus doloremque similique inventore numquam.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/142/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/142/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/142&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;143&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 30,
                &quot;description&quot;: &quot;Porro et vel sapiente quod sequi. Magni ut rem explicabo incidunt iste.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:32.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/143/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/143/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/143&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;144&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 26,
                &quot;description&quot;: &quot;Et eum molestiae totam saepe ab mollitia. Aut recusandae odio quidem fugit.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/144/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/144/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/144&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;145&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 35,
                &quot;description&quot;: &quot;Quas sint ad maxime similique. Et illo sit quod voluptatem temporibus repellendus ea.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/145/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/145/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/145&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;146&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 24,
                &quot;description&quot;: &quot;Aliquid ex sit facere qui similique. Nihil quia aut quo nobis. Ut nisi molestiae id.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/146/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/146/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/146&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;147&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 45,
                &quot;description&quot;: &quot;Iusto cum perspiciatis enim repellat. Consequatur vero atque sequi.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/147/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/147/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/147&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;148&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 7,
                &quot;description&quot;: &quot;Quaerat eveniet sunt harum earum voluptatem repudiandae facere. Soluta vel distinctio quis.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/148/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/148/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/148&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;149&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 69,
                &quot;description&quot;: &quot;Eligendi aliquam deserunt repudiandae omnis. Accusantium dolor nostrum aut quis.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/149/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/149/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/149&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;150&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 87,
                &quot;description&quot;: &quot;Soluta illum qui enim ipsa. Doloribus beatae ab distinctio quae ratione.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/150/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/150/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/150&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;151&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 66,
                &quot;description&quot;: &quot;Qui et et alias totam autem. Necessitatibus quis vel quis. Id quis eum sit ea.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/151/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/151/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/151&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;152&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 28,
                &quot;description&quot;: &quot;Aut iure in nobis. Est perferendis sint nam et. Rerum voluptates enim maiores.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/152/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/152/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/152&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;153&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 91,
                &quot;description&quot;: &quot;Ut a vel pariatur ipsa. Inventore consequuntur est non deserunt sed. Est sapiente tempore nam est.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/153/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/153/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/153&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;154&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 68,
                &quot;description&quot;: &quot;Exercitationem eligendi omnis cum tempore eius. Est atque repudiandae nihil non omnis.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/154/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/154/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/154&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;155&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 7,
                &quot;description&quot;: &quot;Accusamus exercitationem animi quis est. Eaque omnis est vel. Nihil quia quam eum ipsum.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/155/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/155/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/155&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;156&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 74,
                &quot;description&quot;: &quot;Non quis omnis quam molestiae. Eius alias cumque earum eos. Quis fugiat natus sunt vero.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/156/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/156/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/156&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;157&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 41,
                &quot;description&quot;: &quot;Sit optio ipsum non rem unde blanditiis. Neque recusandae qui quia odit odio culpa pariatur minima.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/157/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/157/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/157&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;158&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 19,
                &quot;description&quot;: &quot;Qui suscipit dolor debitis minima. Quae sunt iure illo est sint ea. Qui sunt quia deserunt.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/158/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/158/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/158&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;159&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 44,
                &quot;description&quot;: &quot;Dolor quia tempore earum et. Autem ut tempora sit. Et et nam recusandae dolores porro.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/159/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/159/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/159&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;160&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 69,
                &quot;description&quot;: &quot;Ea earum temporibus dolor ipsa aliquam dolorem ut. Laudantium provident aperiam a minima.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/160/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/160/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/160&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;161&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 23,
                &quot;description&quot;: &quot;Debitis occaecati occaecati et facere aut ea. Soluta sunt laborum nesciunt quia dicta.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/161/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/161/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/161&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;162&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 61,
                &quot;description&quot;: &quot;Earum consequatur quas blanditiis. Repellat et mollitia ut aut fuga.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:33.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/162/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/162/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/162&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;163&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 72,
                &quot;description&quot;: &quot;Ea illo voluptatem ab veritatis. Autem consequatur aut ratione in omnis.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/163/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/163/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/163&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;164&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 66,
                &quot;description&quot;: &quot;Qui accusamus voluptatem qui. Vel molestiae neque voluptate assumenda non rerum vero.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/164/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/164/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/164&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;165&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 43,
                &quot;description&quot;: &quot;Dolorem sit velit veniam magnam fuga repellat. Harum quod quaerat porro excepturi sequi.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/165/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/165/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/165&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;166&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 60,
                &quot;description&quot;: &quot;Explicabo at ut et ut eaque. Temporibus voluptatem et qui eum. Hic porro voluptas ut ut facere.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/166/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/166/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/166&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;167&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 75,
                &quot;description&quot;: &quot;Non minima rerum rem voluptas. At similique aut maxime natus error.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/167/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/167/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/167&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;168&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 14,
                &quot;description&quot;: &quot;Molestias odio ea consequuntur et. Cum corrupti fugiat esse quibusdam.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/168/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/168/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/168&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;169&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 29,
                &quot;description&quot;: &quot;Delectus quia nihil quis nisi nam cupiditate. Unde eveniet non velit enim sint nemo in.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/169/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/169/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/169&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;170&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 58,
                &quot;description&quot;: &quot;Quia mollitia doloremque quaerat. Aut est qui nulla quas. Incidunt nihil sit dolorem dicta.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/170/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/170/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/170&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;171&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 94,
                &quot;description&quot;: &quot;Aut vitae eveniet mollitia consequatur est. Aut non omnis et totam ad aspernatur voluptas.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/171/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/171/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/171&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;172&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 10,
                &quot;description&quot;: &quot;Quam ea suscipit voluptas quia error est. Qui facilis et sunt.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/172/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/172/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/172&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;173&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 61,
                &quot;description&quot;: &quot;Harum voluptas est nobis repudiandae rerum vitae. Fugit repellendus ipsam aperiam quod.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/173/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/173/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/173&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;174&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 81,
                &quot;description&quot;: &quot;Iste molestiae amet dicta dolor quae. Debitis unde voluptas facere alias.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/174/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/174/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/174&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;175&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 28,
                &quot;description&quot;: &quot;Unde adipisci quibusdam qui repellat. Ut inventore dolorem architecto. In quis eos ut labore qui.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/175/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/175/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/175&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;176&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 59,
                &quot;description&quot;: &quot;Quaerat fugiat ut delectus adipisci. A sed explicabo omnis tenetur atque suscipit.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/176/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/176/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/176&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;177&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 72,
                &quot;description&quot;: &quot;Ut ea maiores dolores eum quos. Error eligendi commodi est tempora maxime et enim.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/177/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/177/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/177&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;178&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 74,
                &quot;description&quot;: &quot;Dicta velit ut minima nemo. Quis sunt in cupiditate nobis. Atque beatae aut sapiente et.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/178/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/178/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/178&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;179&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 50,
                &quot;description&quot;: &quot;Molestiae delectus rerum odit deserunt. Ratione est corrupti sit nemo eveniet aut saepe unde.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/179/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/179/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/179&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;180&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 77,
                &quot;description&quot;: &quot;Unde voluptas molestiae minus sit architecto. At expedita velit a maxime aperiam quae est.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/180/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/180/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/180&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;181&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 95,
                &quot;description&quot;: &quot;A autem voluptatibus nesciunt. Nostrum praesentium qui ut enim a.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/181/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/181/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/181&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;182&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 42,
                &quot;description&quot;: &quot;Et est fugiat earum dolorum suscipit et. Quasi magnam molestiae quas natus.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/182/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/182/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/182&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;183&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 93,
                &quot;description&quot;: &quot;Sunt fugiat et voluptatem et. Temporibus nemo quibusdam ut.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:34.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/183/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/183/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/183&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;184&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 67,
                &quot;description&quot;: &quot;Est officiis aut sit in. Laboriosam eveniet atque accusantium quis a consequatur.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/184/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/184/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/184&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;185&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 39,
                &quot;description&quot;: &quot;Beatae dolore alias sit non. Autem sit hic nisi dolorem saepe.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/185/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/185/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/185&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;186&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 20,
                &quot;description&quot;: &quot;Consectetur ipsam quia dolore veniam et corrupti dolorem. Rerum iste ea deserunt et dolorem.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/186/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/186/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/186&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;187&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 64,
                &quot;description&quot;: &quot;Rerum quia quo et rerum. Molestiae enim quae facere. Velit fuga atque aut dolor.&quot;,
                &quot;number_of_beds&quot;: 2,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/187/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/187/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/187&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;188&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 75,
                &quot;description&quot;: &quot;Natus voluptatibus quidem sunt sint doloribus id. Nisi autem qui aut.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/188/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/188/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/188&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;189&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 3,
                &quot;description&quot;: &quot;Esse eius inventore voluptatem ut ullam quasi. Quidem esse rem recusandae ea in iure.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/189/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/189/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/189&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;190&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 53,
                &quot;description&quot;: &quot;Dolorum in autem in. Soluta dolores sint debitis qui sit. Et iste sunt consequatur.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/190/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/190/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/190&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;191&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 7,
                &quot;description&quot;: &quot;Aliquam et aliquid et nobis deserunt enim. Deserunt quidem qui saepe.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/191/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/191/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/191&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;192&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 7,
                &quot;description&quot;: &quot;Nam sit doloribus nisi cumque. Ut quidem voluptatibus cupiditate molestias fuga.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/192/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/192/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/192&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;193&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 47,
                &quot;description&quot;: &quot;Quo odio ex atque commodi atque laborum. Sed aspernatur voluptate vitae qui quod nihil.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/193/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/193/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/193&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;194&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 61,
                &quot;description&quot;: &quot;Ducimus consequuntur doloremque ullam et vel vel aliquam. Porro laborum ipsa qui.&quot;,
                &quot;number_of_beds&quot;: 5,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/194/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/194/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/194&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;195&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 78,
                &quot;description&quot;: &quot;Enim rerum dolore corporis quis labore. Dolores deserunt atque asperiores quo dignissimos.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/195/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/195/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/195&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;196&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 41,
                &quot;description&quot;: &quot;Libero necessitatibus minus voluptas ut ut. Et voluptas illum eius sed eveniet autem ut.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/196/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/196/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/196&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;197&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 84,
                &quot;description&quot;: &quot;Non sequi quis delectus numquam quis quis. Alias occaecati velit et suscipit numquam.&quot;,
                &quot;number_of_beds&quot;: 1,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/197/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/197/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/197&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;198&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 46,
                &quot;description&quot;: &quot;Voluptatibus consequatur temporibus aspernatur nihil. Qui facere iste expedita consequatur.&quot;,
                &quot;number_of_beds&quot;: 3,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/198/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/198/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/198&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;199&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 22,
                &quot;description&quot;: &quot;Sed eos et aut. Praesentium et id voluptas dolor enim est. Ipsam dolores tenetur dolore et.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/199/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/199/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/199&quot;
            }
        },
        {
            &quot;type&quot;: &quot;rooms&quot;,
            &quot;id&quot;: &quot;200&quot;,
            &quot;attributes&quot;: {
                &quot;room_number&quot;: 71,
                &quot;description&quot;: &quot;Dolore eligendi et dolor labore natus. Quia consequuntur harum laborum ut maxime expedita et dicta.&quot;,
                &quot;number_of_beds&quot;: 4,
                &quot;is_booked&quot;: 0,
                &quot;starts_at&quot;: null,
                &quot;ends_at&quot;: null,
                &quot;createdAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;,
                &quot;updatedAt&quot;: &quot;2023-04-04T10:27:35.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;hotel&quot;: {
                    &quot;links&quot;: {
                        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/200/hotel&quot;,
                        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/200/relationships/hotel&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://localhost/api/v1/rooms/200&quot;
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-rooms" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-rooms"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-rooms" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-rooms" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-rooms"></code></pre>
</span>
<form id="form-GETapi-v1-rooms" data-method="GET"
      data-path="api/v1/rooms"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-rooms', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-rooms"
                    onclick="tryItOut('GETapi-v1-rooms');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-rooms"
                    onclick="cancelTryOut('GETapi-v1-rooms');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-rooms" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/rooms</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-rooms"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-rooms"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                        </form>

                    <h2 id="room-management-POSTapi-v1-rooms">Create a new resource.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-rooms">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/rooms" \
    --header "Content-Type: application/vnd.api+json" \
    --header "Accept: application/vnd.api+json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/rooms"
);

const headers = {
    "Content-Type": "application/vnd.api+json",
    "Accept": "application/vnd.api+json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-rooms">
</span>
<span id="execution-results-POSTapi-v1-rooms" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-rooms"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-rooms" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-rooms" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-rooms"></code></pre>
</span>
<form id="form-POSTapi-v1-rooms" data-method="POST"
      data-path="api/v1/rooms"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-rooms', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-rooms"
                    onclick="tryItOut('POSTapi-v1-rooms');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-rooms"
                    onclick="cancelTryOut('POSTapi-v1-rooms');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-rooms" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/rooms</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-rooms"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-rooms"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                        </form>

                    <h2 id="room-management-GETapi-v1-rooms--id-">Fetch zero to one JSON API resource by id.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-rooms--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/rooms/1" \
    --header "Content-Type: application/vnd.api+json" \
    --header "Accept: application/vnd.api+json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/rooms/1"
);

const headers = {
    "Content-Type": "application/vnd.api+json",
    "Accept": "application/vnd.api+json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-rooms--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: application/vnd.api+json
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;jsonapi&quot;: {
        &quot;version&quot;: &quot;1.0&quot;
    },
    &quot;links&quot;: {
        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/1&quot;
    },
    &quot;data&quot;: {
        &quot;type&quot;: &quot;rooms&quot;,
        &quot;id&quot;: &quot;1&quot;,
        &quot;attributes&quot;: {
            &quot;room_number&quot;: 75,
            &quot;description&quot;: &quot;Et sunt accusantium ipsam voluptatibus. Sed est accusantium vel. Quo et provident amet.&quot;,
            &quot;number_of_beds&quot;: 5,
            &quot;is_booked&quot;: 0,
            &quot;starts_at&quot;: null,
            &quot;ends_at&quot;: null,
            &quot;createdAt&quot;: &quot;2023-04-04T10:27:22.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2023-04-04T10:27:22.000000Z&quot;
        },
        &quot;relationships&quot;: {
            &quot;hotel&quot;: {
                &quot;links&quot;: {
                    &quot;related&quot;: &quot;http://localhost/api/v1/rooms/1/hotel&quot;,
                    &quot;self&quot;: &quot;http://localhost/api/v1/rooms/1/relationships/hotel&quot;
                }
            }
        },
        &quot;links&quot;: {
            &quot;self&quot;: &quot;http://localhost/api/v1/rooms/1&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-rooms--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-rooms--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-rooms--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-rooms--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-rooms--id-"></code></pre>
</span>
<form id="form-GETapi-v1-rooms--id-" data-method="GET"
      data-path="api/v1/rooms/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-rooms--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-rooms--id-"
                    onclick="tryItOut('GETapi-v1-rooms--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-rooms--id-"
                    onclick="cancelTryOut('GETapi-v1-rooms--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-rooms--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/rooms/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-rooms--id-"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-rooms--id-"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-v1-rooms--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the room. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="room-management-PATCHapi-v1-rooms--id-">Update an existing resource.</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-rooms--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/v1/rooms/1" \
    --header "Content-Type: application/vnd.api+json" \
    --header "Accept: application/vnd.api+json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/rooms/1"
);

const headers = {
    "Content-Type": "application/vnd.api+json",
    "Accept": "application/vnd.api+json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-rooms--id-">
</span>
<span id="execution-results-PATCHapi-v1-rooms--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-rooms--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-rooms--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-rooms--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-rooms--id-"></code></pre>
</span>
<form id="form-PATCHapi-v1-rooms--id-" data-method="PATCH"
      data-path="api/v1/rooms/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-rooms--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-rooms--id-"
                    onclick="tryItOut('PATCHapi-v1-rooms--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-rooms--id-"
                    onclick="cancelTryOut('PATCHapi-v1-rooms--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-rooms--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/rooms/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PATCHapi-v1-rooms--id-"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PATCHapi-v1-rooms--id-"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PATCHapi-v1-rooms--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the room. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="room-management-DELETEapi-v1-rooms--id-">Destroy a resource.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-rooms--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/rooms/1" \
    --header "Content-Type: application/vnd.api+json" \
    --header "Accept: application/vnd.api+json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/rooms/1"
);

const headers = {
    "Content-Type": "application/vnd.api+json",
    "Accept": "application/vnd.api+json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-rooms--id-">
</span>
<span id="execution-results-DELETEapi-v1-rooms--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-rooms--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-rooms--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-rooms--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-rooms--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-rooms--id-" data-method="DELETE"
      data-path="api/v1/rooms/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-rooms--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-rooms--id-"
                    onclick="tryItOut('DELETEapi-v1-rooms--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-rooms--id-"
                    onclick="cancelTryOut('DELETEapi-v1-rooms--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-rooms--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/rooms/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-v1-rooms--id-"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-v1-rooms--id-"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-v1-rooms--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the room. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="room-management-GETapi-v1-rooms--room--hotel">Fetch the related resource(s) for a JSON API relationship.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-rooms--room--hotel">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/rooms/1/hotel" \
    --header "Content-Type: application/vnd.api+json" \
    --header "Accept: application/vnd.api+json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/rooms/1/hotel"
);

const headers = {
    "Content-Type": "application/vnd.api+json",
    "Accept": "application/vnd.api+json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-rooms--room--hotel">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: application/vnd.api+json
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;jsonapi&quot;: {
        &quot;version&quot;: &quot;1.0&quot;
    },
    &quot;links&quot;: {
        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/1/hotel&quot;,
        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/1/relationships/hotel&quot;
    },
    &quot;data&quot;: {
        &quot;type&quot;: &quot;hotels&quot;,
        &quot;id&quot;: &quot;6&quot;,
        &quot;attributes&quot;: {
            &quot;title&quot;: &quot;Kirlin, Friesen and Nicolas&quot;,
            &quot;description&quot;: &quot;Consequatur placeat est voluptatibus est. Vel magni sit a. Quae quo perferendis vel quisquam.&quot;,
            &quot;country&quot;: &quot;Sweden&quot;,
            &quot;city&quot;: &quot;Boyleton&quot;,
            &quot;address&quot;: &quot;235 Armstrong Mission Apt. 708\nBotsfordmouth, MA 72426&quot;,
            &quot;star_rating&quot;: 5,
            &quot;createdAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;,
            &quot;updatedAt&quot;: &quot;2023-04-04T10:27:20.000000Z&quot;
        },
        &quot;relationships&quot;: {
            &quot;rooms&quot;: {
                &quot;links&quot;: {
                    &quot;related&quot;: &quot;http://localhost/api/v1/hotels/6/rooms&quot;,
                    &quot;self&quot;: &quot;http://localhost/api/v1/hotels/6/relationships/rooms&quot;
                }
            }
        },
        &quot;links&quot;: {
            &quot;self&quot;: &quot;http://localhost/api/v1/hotels/6&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-rooms--room--hotel" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-rooms--room--hotel"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-rooms--room--hotel" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-rooms--room--hotel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-rooms--room--hotel"></code></pre>
</span>
<form id="form-GETapi-v1-rooms--room--hotel" data-method="GET"
      data-path="api/v1/rooms/{room}/hotel"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-rooms--room--hotel', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-rooms--room--hotel"
                    onclick="tryItOut('GETapi-v1-rooms--room--hotel');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-rooms--room--hotel"
                    onclick="cancelTryOut('GETapi-v1-rooms--room--hotel');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-rooms--room--hotel" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/rooms/{room}/hotel</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-rooms--room--hotel"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-rooms--room--hotel"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>room</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="room"                data-endpoint="GETapi-v1-rooms--room--hotel"
               value="1"
               data-component="url">
    <br>
<p>The room. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="room-management-GETapi-v1-rooms--room_id--relationships-hotel">Fetch the resource identifier(s) for a JSON API relationship.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-rooms--room_id--relationships-hotel">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/rooms/1/relationships/hotel" \
    --header "Content-Type: application/vnd.api+json" \
    --header "Accept: application/vnd.api+json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/rooms/1/relationships/hotel"
);

const headers = {
    "Content-Type": "application/vnd.api+json",
    "Accept": "application/vnd.api+json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-rooms--room_id--relationships-hotel">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: application/vnd.api+json
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 52
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;jsonapi&quot;: {
        &quot;version&quot;: &quot;1.0&quot;
    },
    &quot;links&quot;: {
        &quot;related&quot;: &quot;http://localhost/api/v1/rooms/1/hotel&quot;,
        &quot;self&quot;: &quot;http://localhost/api/v1/rooms/1/relationships/hotel&quot;
    },
    &quot;data&quot;: {
        &quot;type&quot;: &quot;hotels&quot;,
        &quot;id&quot;: &quot;6&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-rooms--room_id--relationships-hotel" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-rooms--room_id--relationships-hotel"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-rooms--room_id--relationships-hotel" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-rooms--room_id--relationships-hotel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-rooms--room_id--relationships-hotel"></code></pre>
</span>
<form id="form-GETapi-v1-rooms--room_id--relationships-hotel" data-method="GET"
      data-path="api/v1/rooms/{room_id}/relationships/hotel"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-rooms--room_id--relationships-hotel', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-rooms--room_id--relationships-hotel"
                    onclick="tryItOut('GETapi-v1-rooms--room_id--relationships-hotel');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-rooms--room_id--relationships-hotel"
                    onclick="cancelTryOut('GETapi-v1-rooms--room_id--relationships-hotel');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-rooms--room_id--relationships-hotel" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/rooms/{room_id}/relationships/hotel</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-rooms--room_id--relationships-hotel"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-rooms--room_id--relationships-hotel"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>room_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="room_id"                data-endpoint="GETapi-v1-rooms--room_id--relationships-hotel"
               value="1"
               data-component="url">
    <br>
<p>The ID of the room. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="room-management-PATCHapi-v1-rooms--room--booking">Booking room</h2>

<p>
</p>



<span id="example-requests-PATCHapi-v1-rooms--room--booking">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/v1/rooms/1/booking?include=hotel" \
    --header "Content-Type: application/vnd.api+json" \
    --header "Accept: application/vnd.api+json" \
    --data "{
    \"something\": [
        \"string 1\",
        \"string 2\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/rooms/1/booking"
);

const params = {
    "include": "hotel",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/vnd.api+json",
    "Accept": "application/vnd.api+json",
};

let body = {
    "something": [
        "string 1",
        "string 2"
    ]
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-rooms--room--booking">
            <blockquote>
            <p>Example response (200, When the thing was done smoothly.):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;hey&quot;: &quot;ho ho ho&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PATCHapi-v1-rooms--room--booking" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-rooms--room--booking"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-rooms--room--booking" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-rooms--room--booking" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-rooms--room--booking"></code></pre>
</span>
<form id="form-PATCHapi-v1-rooms--room--booking" data-method="PATCH"
      data-path="api/v1/rooms/{room}/booking"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-rooms--room--booking', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-rooms--room--booking"
                    onclick="tryItOut('PATCHapi-v1-rooms--room--booking');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-rooms--room--booking"
                    onclick="cancelTryOut('PATCHapi-v1-rooms--room--booking');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-rooms--room--booking" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/rooms/{room}/booking</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PATCHapi-v1-rooms--room--booking"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PATCHapi-v1-rooms--room--booking"
               value="application/vnd.api+json"
               data-component="header">
    <br>
<p>Example: <code>application/vnd.api+json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PATCHapi-v1-rooms--room--booking"
               value="2"
               data-component="url">
    <br>
<p>The ID of the room. Example: <code>2</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>include</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="include"                data-endpoint="PATCHapi-v1-rooms--room--booking"
               value="hotel"
               data-component="query">
    <br>
<p>Includes relationships in response. Example: <code>hotel</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>something</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="something[0]"                data-endpoint="PATCHapi-v1-rooms--room--booking"
               data-component="body">
        <input type="text" style="display: none"
               name="something[1]"                data-endpoint="PATCHapi-v1-rooms--room--booking"
               data-component="body">
    <br>
<p>The things we should do.</p>
        </div>
        </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
    <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>hey</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Who knows?</p>
        </div>
                

        
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

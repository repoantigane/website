<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <meta name="robots" content="noindex, follow">
    <script nonce="42dd0d12-b89b-408f-aa6d-375a2db77877">
        (function(w, d) {
            ! function(t, u, v, w) {
                t[v] = t[v] || {};
                t[v].executed = [];
                t.zaraz = {
                    deferred: [],
                    listeners: []
                };
                t.zaraz.q = [];
                t.zaraz._f = function(x) {
                    return async function() {
                        var y = Array.prototype.slice.call(arguments);
                        t.zaraz.q.push({
                            m: x,
                            a: y
                        })
                    }
                };
                for (const z of ["track", "set", "debug"]) t.zaraz[z] = t.zaraz._f(z);
                t.zaraz.init = () => {
                    var A = u.getElementsByTagName(w)[0],
                        B = u.createElement(w),
                        C = u.getElementsByTagName("title")[0];
                    C && (t[v].t = u.getElementsByTagName("title")[0].text);
                    t[v].x = Math.random();
                    t[v].w = t.screen.width;
                    t[v].h = t.screen.height;
                    t[v].j = t.innerHeight;
                    t[v].e = t.innerWidth;
                    t[v].l = t.location.href;
                    t[v].r = u.referrer;
                    t[v].k = t.screen.colorDepth;
                    t[v].n = u.characterSet;
                    t[v].o = (new Date).getTimezoneOffset();
                    if (t.dataLayer)
                        for (const G of Object.entries(Object.entries(dataLayer).reduce(((H, I) => ({
                                ...H[1],
                                ...I[1]
                            })), {}))) zaraz.set(G[0], G[1], {
                            scope: "page"
                        });
                    t[v].q = [];
                    for (; t.zaraz.q.length;) {
                        const J = t.zaraz.q.shift();
                        t[v].q.push(J)
                    }
                    B.defer = !0;
                    for (const K of [localStorage, sessionStorage]) Object.keys(K || {}).filter((M => M.startsWith(
                        "_zaraz_"))).forEach((L => {
                        try {
                            t[v]["z_" + L.slice(7)] = JSON.parse(K.getItem(L))
                        } catch {
                            t[v]["z_" + L.slice(7)] = K.getItem(L)
                        }
                    }));
                    B.referrerPolicy = "origin";
                    B.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(t[v])));
                    A.parentNode.insertBefore(B, A)
                };
                ["complete", "interactive"].includes(u.readyState) ? zaraz.init() : t.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-26">
                        Welcome
                    </span>
                    <span class="login100-form-title p-b-48">
                        <i class="zmdi zmdi-font"></i>
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>
                    <div class="text-center p-t-115">
                        <span class="txt1">
                            Don’t have an account?
                        </span>
                        <a class="txt2" href="#">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="vendor/animsition/js/animsition.min.js"></script>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/select2/select2.min.js"></script>

    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>

    <script src="vendor/countdowntime/countdowntime.js"></script>

    <script src="js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"818169d80a599e47","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.8.0","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>

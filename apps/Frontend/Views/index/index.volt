<header></header>
<nav id="main"></nav>
<main id="controller"></main>
<footer></footer>

<script type="text/javascript" src="js/lib/require/Require.js"></script>
<script type="text/javascript" src="js/Setup.js"></script>

{% if userIsLoggedIn %}
    <script type="text/javascript" src="js/apps/pangea/Setup.js"></script>
{% else %}
    <script type="text/javascript" src="js/apps/account/Setup.js"></script>
{% endif %}

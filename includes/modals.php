<div id="Search" class="Search Modal Modal--fullScreen" aria-hidden="true" data-scrollable="">
    <div class="Search__SearchBar">
        <form action="/search" name="GET" role="search" class="Search__Form">
            <input type="search" class="Search__Input Heading" name="q" autocomplete="off" autocorrect="off"
                autocapitalize="off" placeholder="Search..." autofocus="">
            <input type="hidden" name="type" value="product">
        </form>

        <button class="Search__Close Link Link--primary" data-action="close-modal"><svg class="Icon Icon--close"
                role="presentation" viewBox="0 0 16 14">
                <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
            </svg></button>
    </div>

    <div class="Search__Results">
        <div class="PageLayout PageLayout--breakLap">
            <div class="PageLayout__Section"></div>
            <div class="PageLayout__Section PageLayout__Section--secondary"></div>
        </div>
    </div>
</div>
<script>
if (typeof(Spurit) === 'undefined') {
    var Spurit = {};
}
if (!Spurit.CountdownTimer) {
    Spurit.CountdownTimer = {};
}
if (!Spurit.CountdownTimer.snippet) {
    Spurit.CountdownTimer.snippet = {};
}
Spurit.CountdownTimer.snippet.shopHash = 'bbb17752570c08ab6ce20b4b972cf995';
</script>

<script src="https://cdn-spurit.com/shopify-apps/timer-app/common.js"></script>
<link href="https://cdn-spurit.com/shopify-apps/timer-app/common.css" rel="stylesheet" type="text/css" media="all">




<!-- Begin Shopify-Afterpay JavaScript Snippet (v1.0.1) -->
<script type="text/javascript">
// Editable fields:
var afterpay_min = 0.04; // As per your Afterpay contract.
var afterpay_max = 1000.00; // As per your Afterpay contract.
var afterpay_logo_theme = 'colour'; // Can be 'colour', 'black' or 'white'.

// Overrides:
// var afterpay_product_selector = '#product-price-selector';
// var afterpay_cart_integration_enabled = true;
// var afterpay_cart_static_selector = '#cart-subtotal-selector';

// Non-editable fields:
var afterpay_shop_currency = "AUD";
var afterpay_shop_money_format = "${{ amount }}";
var afterpay_shop_permanent_domain = "the-wholesome-store.myshopify.com";
var afterpay_theme_name = "Prestige";
var afterpay_product = null;
var afterpay_current_variant = null;
var afterpay_cart_total_price = 0;
var afterpay_js_snippet_version = '1.0.1';
</script>
<script type="text/javascript" src="https://static.afterpay.com/shopify-afterpay-javascript.js"></script>
<!-- End Shopify-Afterpay JavaScript Snippet (v1.0.1) -->

<div id="fd-form-popup-5f05624d9eb55b00269be4e6" class="fd-form-popup"
    style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; visibility: hidden; opacity: 0; z-index: -1;">
    <iframe class="fd-form-popup__iframe" scrolling="no" id="fd-iframe-1607253925784"
        style="width: 100%; height: 100%; border: none;"></iframe>
</div>
<?php include_once('../includes/header.php'); ?>

<?php require_once('../products/db/kitchen_cat.php'); ?>


<?php
    $products = json_decode(getAllKitchen(), true);
?>

<div class="PageContainer">
    <?php include_once('../includes/nav.php'); ?>

    <main id="main" role="main">
        <div id="shopify-section-collection-template" class="shopify-section shopify-section--bordered">
            <section data-section-id="collection-template" data-section-type="collection" data-section-settings="{
                    &quot;collectionUrl&quot;: &quot;\/collections\/kitchen.php&quot;,
                    &quot;currentTags&quot;: [],
                    &quot;sortBy&quot;: &quot;manual&quot;,
                    &quot;filterPosition&quot;: &quot;sidebar&quot;
                }">

                <header class="PageHeader">
                    <div class="Container">
                        <div class="SectionHeader SectionHeader--center">
                            <h1 class="SectionHeader__Heading Heading u-h1">Kitchen</h1>
                            <div class="SectionHeader__Description Rte">
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </header>

                <div id="collection-filter-drawer" class="CollectionFilters Drawer Drawer--secondary Drawer--fromRight"
                    aria-hidden="true" style="max-height: 347px;">
                    <header class="Drawer__Header Drawer__Header--bordered Drawer__Header--center Drawer__Container">
                        <span class="Drawer__Title Heading u-h4">Filters</span>

                        <button class="Drawer__Close Icon-Wrapper--clickable" data-action="close-drawer"
                            data-drawer-id="collection-filter-drawer" aria-label="Close navigation"><svg
                                class="Icon Icon--close" role="presentation" viewBox="0 0 16 14">
                                <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd">
                                </path>
                            </svg></button>
                    </header>

                    <div class="Drawer__Content">
                        <div class="Drawer__Main" data-scrollable="">
                            <div class="Collapsible Collapsible--padded Collapsible--autoExpand">
                                <button type="button" class="Collapsible__Button Heading u-h6"
                                    data-action="toggle-collapsible" aria-expanded="false">Filters<span
                                        class="Collapsible__Plus"></span>
                                </button>

                                <div class="Collapsible__Inner">
                                    <div class="Collapsible__Content">
                                        <ul class="Linklist">
                                            <li class="Linklist__Item">
                                                <button type="button" class="Link Link--primary Text--subdued "
                                                    data-tag="boobie-mug" data-action="toggle-tag">Boobie Mug</button>
                                            </li>
                                            <li class="Linklist__Item">
                                                <button type="button" class="Link Link--primary Text--subdued "
                                                    data-tag="ceramics" data-action="toggle-tag">Ceramics</button>
                                            </li>
                                            <li class="Linklist__Item">
                                                <button type="button" class="Link Link--primary Text--subdued "
                                                    data-tag="cookbooks" data-action="toggle-tag">Cookbooks</button>
                                            </li>
                                            <li class="Linklist__Item">
                                                <button type="button" class="Link Link--primary Text--subdued "
                                                    data-tag="cutlery" data-action="toggle-tag">Cutlery</button>
                                            </li>
                                            <li class="Linklist__Item">
                                                <button type="button" class="Link Link--primary Text--subdued "
                                                    data-tag="ebooks" data-action="toggle-tag">eBooks</button>
                                            </li>
                                            <li class="Linklist__Item">
                                                <button type="button" class="Link Link--primary Text--subdued "
                                                    data-tag="eco-friendly" data-action="toggle-tag">Eco
                                                    Friendly</button>
                                            </li>
                                            <li class="Linklist__Item">
                                                <button type="button" class="Link Link--primary Text--subdued "
                                                    data-tag="keto" data-action="toggle-tag">Keto</button>
                                            </li>
                                            <li class="Linklist__Item">
                                                <button type="button" class="Link Link--primary Text--subdued "
                                                    data-tag="kitchen" data-action="toggle-tag">kitchen</button>
                                            </li>
                                            <li class="Linklist__Item">
                                                <button type="button" class="Link Link--primary Text--subdued "
                                                    data-tag="market-tote" data-action="toggle-tag">Market Tote</button>
                                            </li>
                                            <li class="Linklist__Item">
                                                <button type="button" class="Link Link--primary Text--subdued "
                                                    data-tag="mug" data-action="toggle-tag">Mug</button>
                                            </li>
                                            <li class="Linklist__Item">
                                                <button type="button" class="Link Link--primary Text--subdued "
                                                    data-tag="nutrition" data-action="toggle-tag">Nutrition</button>
                                            </li>
                                            <li class="Linklist__Item">
                                                <button type="button" class="Link Link--primary Text--subdued "
                                                    data-tag="plastic-free-living" data-action="toggle-tag">Plastic Free
                                                    Living</button>
                                            </li>
                                            <li class="Linklist__Item">
                                                <button type="button" class="Link Link--primary Text--subdued "
                                                    data-tag="protein" data-action="toggle-tag">protein</button>
                                            </li>
                                            <li class="Linklist__Item">
                                                <button type="button" class="Link Link--primary Text--subdued "
                                                    data-tag="supplements" data-action="toggle-tag">Supplements</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="Drawer__Footer Drawer__Footer--padded" data-drawer-animated-bottom="">
                            <div class="ButtonGroup">
                                <button type="button" class="ButtonGroup__Item Button Button--secondary"
                                    data-action="reset-tags" style="display: none">Reset</button>
                                <button type="button"
                                    class="ButtonGroup__Item ButtonGroup__Item--expand Button Button--primary"
                                    data-action="apply-tags">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="collection-sort-popover" class="Popover" aria-hidden="true">
                    <header class="Popover__Header">
                        <button class="Popover__Close Icon-Wrapper--clickable" data-action="close-popover"><svg
                                class="Icon Icon--close" role="presentation" viewBox="0 0 16 14">
                                <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd">
                                </path>
                            </svg></button>
                        <span class="Popover__Title Heading u-h4">Sort</span>
                    </header>

                    <div class="Popover__Content">
                        <div class="Popover__ValueList" data-scrollable=""><button
                                class="Popover__Value is-selected Heading Link Link--primary u-h6" data-value="manual"
                                data-action="select-value">Featured</button><button
                                class="Popover__Value  Heading Link Link--primary u-h6" data-value="price-ascending"
                                data-action="select-value">Price: Low to High</button><button
                                class="Popover__Value  Heading Link Link--primary u-h6" data-value="price-descending"
                                data-action="select-value">Price: High to Low</button><button
                                class="Popover__Value  Heading Link Link--primary u-h6" data-value="title-ascending"
                                data-action="select-value">Alphabetically: A-Z</button><button
                                class="Popover__Value  Heading Link Link--primary u-h6" data-value="title-descending"
                                data-action="select-value">Alphabetically: Z-A</button><button
                                class="Popover__Value  Heading Link Link--primary u-h6" data-value="created-ascending"
                                data-action="select-value">Oldest to Newest</button><button
                                class="Popover__Value  Heading Link Link--primary u-h6" data-value="created-descending"
                                data-action="select-value">Newest to Oldest</button><button
                                class="Popover__Value  Heading Link Link--primary u-h6" data-value="best-selling"
                                data-action="select-value">Best Selling</button></div>
                    </div>
                </div>

                <div class="CollectionMain">
                    <div class="CollectionInner">
                        <div class="CollectionInner__Sidebar  hidden-pocket" style="top: 55.5938px;">
                            <div class="CollectionFilters">
                                <div class="Collapsible Collapsible--padded Collapsible--autoExpand">
                                    <button type="button" class="Collapsible__Button Heading u-h6"
                                        data-action="toggle-collapsible" aria-expanded="false">Filters<span
                                            class="Collapsible__Plus"></span>
                                    </button>

                                    <div class="Collapsible__Inner">
                                        <div class="Collapsible__Content">
                                            <ul class="Linklist">
                                                <li class="Linklist__Item">
                                                    <a href="/collections/new.php" type="button" class="Link Link--primary Text--subdued">
                                                        New
                                                    </a>
                                                </li>
                                                <li class="Linklist__Item">
                                                    <a href="/collections/best-sellers.php" type="button" class="Link Link--primary Text--subdued">
                                                        Best Sellers
                                                    </a>
                                                </li>
                                                <li class="Linklist__Item">
                                                    <a href="/collections/mini-mama.php" type="button" class="Link Link--primary Text--subdued">
                                                        Mini Mama
                                                    </a>
                                                </li>
                                                <li class="Linklist__Item">
                                                    <a href="/collections/nutrition.php" type="button" class="Link Link--primary Text--subdued">
                                                        Nutrition
                                                    </a>
                                                </li>
                                                <li class="Linklist__Item">
                                                    <a href="/collections/kitchen.php" type="button" class="Link Link--primary Text--subdued">
                                                        Kitchen
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="Button Button--secondary" data-action="reset-tags"
                                    style="display: none">Reset</button>
                            </div>
                        </div>
                        
                        <?php if (count($products) > 0) : ?>
                        <div class="CollectionInner__Products">
                            <div class="ProductListWrapper">
                                <div class="ProductList ProductList--grid ProductList--removeMargin Grid"
                                    data-mobile-count="2" data-desktop-count="4">
                                    <?php foreach ($products as $product) : ?>
                                    <div class="Grid__Cell 1/2--phone 1/3--tablet-and-up 1/4--desk">
                                        <div class="ProductItem ">
                                            <div class="ProductItem__Wrapper"><a
                                                    href="/products/single.php?product=<?php echo $product['id'] ?>"
                                                    class="ProductItem__ImageWrapper ">
                                                    <div class="AspectRatio AspectRatio--square"
                                                        style="max-width: 1242px;  --aspect-ratio: 0.7183342972816658">
                                                        <img class="ProductItem__Image Image--fadeIn lazyautosizes Image--lazyLoaded"
                                                            data-widths="[200,400,600,700,800,900,1000,1200]"
                                                            data-sizes="auto" alt="<?php echo $product['title'] ?>"
                                                            data-image-id="22827230429380"
                                                            data-srcset="<?php echo $product['featured_image'] ?> 1200w"
                                                            sizes="156px"
                                                            srcset="<?php echo $product['featured_image'] ?> 1200w">
                                                        <span class="Image__Loader"></span>

                                                        <noscript>
                                                            <img class="ProductItem__Image ProductItem__Image--alternate"
                                                                src="<?php echo $product['featured_image'] ?>"
                                                                alt="">
                                                            <img class="ProductItem__Image"
                                                                src="<?php echo $product['featured_image'] ?>"
                                                                alt="<?php echo $product['title'] ?>">
                                                        </noscript>
                                                    </div>
                                                </a>

                                                <div class="ProductItem__Info ProductItem__Info--center">
                                                    <h2 class="ProductItem__Title Heading">
                                                        <a href="/products/single.php?product=<?php echo $product['id'] ?>"><?php echo $product['title'] ?></a>
                                                    </h2>
                                                    <div
                                                        class="ProductItem__PriceList ProductItem__PriceList--showOnHover Heading">
                                                        <span class="ProductItem__Price Price Text--subdued"
                                                            data-money-convertible=""><?php echo $product['price'] ?></span></div>

                                                    <style type="text/css">
                                                    .individual-option {
                                                        z-index: 3;
                                                        display: inline-block;
                                                        text-align: center;
                                                        border: 1px solid #fff;
                                                        line-height: 35px;
                                                        margin: 0px 0px 5px 0px;
                                                    }

                                                    .individual-option.small-size {
                                                        height: 25px;
                                                        width: 25px;
                                                        line-height: 25px
                                                    }

                                                    .individual-option.large-size {
                                                        height: 45px;
                                                        width: 45px;
                                                        line-height: 45px
                                                    }

                                                    .individual-option.rect-design {
                                                        width: auto;
                                                        padding-left: 10px;
                                                        padding-right: 10px
                                                    }

                                                    .individual-option.circle-design {
                                                        border-radius: 50%
                                                    }

                                                    .individual-option.rounded-rect-design {
                                                        border-radius: 5px;
                                                        padding: 0 5px;
                                                        width: auto;
                                                    }

                                                    .swatch-wrap {
                                                        padding: 0 0 20px 0
                                                    }

                                                    .swatch-wrap.center {
                                                        text-align: center
                                                    }

                                                    .swatch-wrap.right {
                                                        text-align: right
                                                    }

                                                    .individual-option.medium-size {
                                                        height: 35px;
                                                        width: 35px;
                                                        line-height: 35px
                                                    }

                                                    .individual-option.rect-design.small-size {
                                                        padding-left: 5px;
                                                        padding-right: 5px
                                                    }

                                                    .individual-option.large-size {
                                                        font-size: 18px
                                                    }

                                                    .individual-option.large-size.rect-design,
                                                    .individual-option.large-size.rounded-rect-design {
                                                        min-width: 45px
                                                    }

                                                    .individual-option.medium-size.rect-design,
                                                    .individual-option.medium-size.rounded-rect-design {
                                                        min-width: 35px
                                                    }

                                                    .individual-option.small-size.rect-design,
                                                    .individual-option.small-size.rounded-rect-design {
                                                        min-width: 25px
                                                    }

                                                    .tooltip-swatch {
                                                        position: relative;
                                                        display: inline-block
                                                    }

                                                    .tooltip-swatch .tooltip-swatch-text {
                                                        visibility: hidden;
                                                        width: 110px;
                                                        background-color: #000;
                                                        color: #fff;
                                                        text-align: center;
                                                        border-radius: 6px;
                                                        padding: 2px 0;
                                                        opacity: .8;
                                                        position: absolute;
                                                        z-index: 1;
                                                        bottom: 150%;
                                                        left: 50%;
                                                        margin-left: -32px
                                                    }

                                                    .tooltip-swatch:hover .tooltip-swatch-text {
                                                        visibility: visible
                                                    }

                                                    .tooltip-swatch .tooltip-swatch-text::after {
                                                        content: "";
                                                        position: absolute;
                                                        top: 100%;
                                                        left: 50%;
                                                        margin-left: -30px;
                                                        border-width: 5px;
                                                        border-style: solid;
                                                        border-color: #000 transparent transparent transparent
                                                    }

                                                    .individual-option {
                                                        cursor: default
                                                    }

                                                    .swatchprimarywrap {
                                                        visibility: hidden;
                                                    }

                                                    .individual-option.medium-size.rounded-rect-design,
                                                    .individual-option.medium-size.rect-design {
                                                        width: auto !important;
                                                    }
                                                    </style>
                                                    <script type="text/javascript">
                                                    window.onload = function() {
                                                        setTimeout(function() {
                                                            "visible" != document.querySelector(
                                                                    ".swatchprimarywrap").style
                                                                .visibility && [].forEach.call(document
                                                                    .querySelectorAll(".swatchprimarywrap"),
                                                                    function(e) {
                                                                        e.parentNode.removeChild(e)
                                                                    })
                                                        }, 4e3)
                                                    };
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="CollectionToolbar CollectionToolbar--bottom CollectionToolbar--reverse">
                        <div class="CollectionToolbar__Group"><button
                                class="CollectionToolbar__Item CollectionToolbar__Item--filter Heading Text--subdued u-h6 hidden-lap-and-up"
                                data-action="open-drawer" data-drawer-id="collection-filter-drawer"
                                aria-label="Show filters">
                                Filter
                            </button><button
                                class="CollectionToolbar__Item CollectionToolbar__Item--sort Heading Text--subdued u-h6"
                                aria-label="Show sort by" aria-haspopup="true" aria-expanded="false"
                                aria-controls="collection-sort-popover">
                                Sort <svg class="Icon Icon--select-arrow" role="presentation" viewBox="0 0 19 12">
                                    <polyline fill="none" stroke="currentColor" points="17 2 9.5 10 2 2"
                                        fill-rule="evenodd" stroke-width="2" stroke-linecap="square"></polyline>
                                </svg>
                            </button></div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include_once('../includes/footer.php'); ?>
</div>
</body>

</html>
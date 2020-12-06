<?php include_once('../includes/header.php'); ?>

<?php require_once('../products/db/products.php'); ?>

<div class="PageContainer">
    <?php include_once('../includes/nav.php'); ?>

    <?php if ( isset($_GET['product'])) : ?>
    <?php
        $id = (int) $_GET['product'];
        $single = json_decode(find($id), true);
        // echo $_GET['product'];
    ?>

    <main id="main" role="main">
        <div id="shopify-section-product-template" class="shopify-section shopify-section--bordered">
            <section class="Product Product--large" data-section-id="product-template" data-section-type="product"
                data-section-settings="{
                &quot;enableHistoryState&quot;: true,
                &quot;templateSuffix&quot;: &quot;&quot;,
                &quot;showInventoryQuantity&quot;: false,
                &quot;showThumbnails&quot;: false,
                &quot;inventoryQuantityThreshold&quot;: 3,
                &quot;showPriceInButton&quot;: false,
                &quot;enableImageZoom&quot;: true,
                &quot;showPaymentButton&quot;: false,
                &quot;useAjaxCart&quot;: true
                }">
                <div class="Product__Wrapper" style="min-height: 1542px;">
                    <div class="Product__Gallery Product__Gallery--withDots">
                        <span id="ProductGallery" class="Anchor"></span>
                        <div class="Product__ActionList hidden-lap-and-up">
                            <div class="Product__ActionItem hidden-lap-and-up">
                                <button class="RoundButton RoundButton--small RoundButton--flat"
                                    data-action="open-product-zoom"><svg class="Icon Icon--plus" role="presentation"
                                        viewBox="0 0 16 16">
                                        <g stroke="currentColor" fill="none" fill-rule="evenodd"
                                            stroke-linecap="square">
                                            <path d="M8,1 L8,15"></path>
                                            <path d="M1,8 L15,8"></path>
                                        </g>
                                    </svg></button>
                            </div>
                            <div class="Product__ActionItem">
                                <button class="RoundButton RoundButton--small RoundButton--flat"
                                    data-action="toggle-social-share" data-animate-bottom="" aria-expanded="false">
                                    <span class="RoundButton__PrimaryState"><svg class="Icon Icon--share"
                                            role="presentation" viewBox="0 0 24 24">
                                            <g stroke="currentColor" fill="none" fill-rule="evenodd" stroke-width="1.5">
                                                <path d="M8.6,10.2 L15.4,6.8"></path>
                                                <path d="M8.6,13.7 L15.4,17.1"></path>
                                                <circle stroke-linecap="square" cx="5" cy="12" r="4"></circle>
                                                <circle stroke-linecap="square" cx="19" cy="5" r="4"></circle>
                                                <circle stroke-linecap="square" cx="19" cy="19" r="4"></circle>
                                            </g>
                                        </svg></span>
                                    <span class="RoundButton__SecondaryState"><svg class="Icon Icon--close"
                                            role="presentation" viewBox="0 0 16 14">
                                            <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none"
                                                fill-rule="evenodd"></path>
                                        </svg></span>
                                </button>
                                <div class="Product__ShareList" aria-hidden="true">
                                    <a class="Product__ShareItem"
                                        href="https://www.facebook.com/sharer.php?u=https://thewholesome.store/products/avalon-smock-dress-lemon"
                                        target="_blank" rel="noopener"><svg class="Icon Icon--facebook"
                                            viewBox="0 0 9 17">
                                            <path
                                                d="M5.842 17V9.246h2.653l.398-3.023h-3.05v-1.93c0-.874.246-1.47 1.526-1.47H9V.118C8.718.082 7.75 0 6.623 0 4.27 0 2.66 1.408 2.66 3.994v2.23H0v3.022h2.66V17h3.182z">
                                            </path>
                                        </svg>Facebook</a>
                                    <a class="Product__ShareItem"
                                        href="https://pinterest.com/pin/create/button/?url=https://thewholesome.store/products/avalon-smock-dress-lemon&amp;media=https://cdn.shopify.com/s/files/1/0053/1713/2361/products/image_88773345-70e3-49c5-87d4-eb4ca6dcca66_large.jpg?v=1606198090&amp;description=Avalon%20Smock%20Dress%20The%20Lullaby%20Club%20Our%20popular%20oversized%20flowing%20Smock%20dress%20made%20from%20soft..."
                                        target="_blank" rel="noopener"><svg class="Icon Icon--pinterest"
                                            role="presentation" viewBox="0 0 32 32">
                                            <path
                                                d="M16 0q3.25 0 6.208 1.271t5.104 3.417 3.417 5.104T32 16q0 4.333-2.146 8.021t-5.833 5.833T16 32q-2.375 0-4.542-.625 1.208-1.958 1.625-3.458l1.125-4.375q.417.792 1.542 1.396t2.375.604q2.5 0 4.479-1.438t3.063-3.937 1.083-5.625q0-3.708-2.854-6.437t-7.271-2.729q-2.708 0-4.958.917T8.042 8.689t-2.104 3.208-.729 3.479q0 2.167.812 3.792t2.438 2.292q.292.125.5.021t.292-.396q.292-1.042.333-1.292.167-.458-.208-.875-1.083-1.208-1.083-3.125 0-3.167 2.188-5.437t5.729-2.271q3.125 0 4.875 1.708t1.75 4.458q0 2.292-.625 4.229t-1.792 3.104-2.667 1.167q-1.25 0-2.042-.917t-.5-2.167q.167-.583.438-1.5t.458-1.563.354-1.396.167-1.25q0-1.042-.542-1.708t-1.583-.667q-1.292 0-2.167 1.188t-.875 2.979q0 .667.104 1.292t.229.917l.125.292q-1.708 7.417-2.083 8.708-.333 1.583-.25 3.708-4.292-1.917-6.938-5.875T0 16Q0 9.375 4.687 4.688T15.999.001z">
                                            </path>
                                        </svg>Pinterest</a>
                                    <a class="Product__ShareItem"
                                        href="https://twitter.com/share?text=Avalon Smock Dress - Lemon&amp;url=https://thewholesome.store/products/avalon-smock-dress-lemon"
                                        target="_blank" rel="noopener"><svg class="Icon Icon--twitter"
                                            role="presentation" viewBox="0 0 32 26">
                                            <path
                                                d="M32 3.077c-1.1748.525-2.4433.8748-3.768 1.031 1.356-.8123 2.3932-2.0995 2.887-3.6305-1.2686.7498-2.6746 1.2997-4.168 1.5934C25.751.796 24.045.0025 22.158.0025c-3.6242 0-6.561 2.937-6.561 6.5612 0 .5124.0562 1.0123.1686 1.4935C10.3104 7.7822 5.474 5.1702 2.237 1.196c-.5624.9687-.8873 2.0997-.8873 3.2994 0 2.2746 1.156 4.2867 2.9182 5.4615-1.075-.0314-2.0872-.3313-2.9745-.8187v.0812c0 3.1806 2.262 5.8363 5.2677 6.4362-.55.15-1.131.2312-1.731.2312-.4248 0-.831-.0438-1.2372-.1188.8374 2.6057 3.262 4.5054 6.13 4.5616-2.2495 1.7622-5.074 2.812-8.1546 2.812-.531 0-1.0498-.0313-1.5684-.0938 2.912 1.8684 6.3613 2.9494 10.0668 2.9494 12.0726 0 18.6776-10.0043 18.6776-18.6776 0-.2874-.0063-.5686-.0188-.8498C30.0066 5.5514 31.119 4.3954 32 3.077z">
                                            </path>
                                        </svg>Twitter</a>
                                </div>
                            </div>
                        </div>
                        <div class="Product__SlideshowNav Product__SlideshowNav--dots">
                            <div class="Product__SlideshowNavScroller"><a href="#Image22827320705220"
                                    class="Product__SlideshowNavDot is-selected"></a><a href="#Image22827313496260"
                                    class="Product__SlideshowNavDot "></a><a href="#Image22827313430724"
                                    class="Product__SlideshowNavDot "></a><a href="#Image22827313561796"
                                    class="Product__SlideshowNavDot "></a><a href="#Image22827313397956"
                                    class="Product__SlideshowNavDot "></a><a href="#Image22827313529028"
                                    class="Product__SlideshowNavDot "></a><a href="#Image22827313463492"
                                    class="Product__SlideshowNavDot "></a></div>
                        </div>
                        <div class="Product__Slideshow Product__Slideshow--zoomable Carousel" data-flickity-config="{
                            &quot;prevNextButtons&quot;: false,
                            &quot;pageDots&quot;: true,
                            &quot;adaptiveHeight&quot;: true,
                            &quot;wrapAround&quot;: false,
                            &quot;watchCSS&quot;: true,
                            &quot;dragThreshold&quot;: 8,
                            &quot;initialIndex&quot;: 0
                            }">

                            <div id="Image22827320705220"
                                class="Product__SlideItem Product__SlideItem--image Carousel__Cell is-selected"
                                data-image-position-ignoring-video="0" data-image-position="0"
                                data-image-id="22827320705220">
                                <div class="AspectRatio AspectRatio--withFallback"
                                    style="padding-bottom: 133.333333333%; --aspect-ratio: 0.75;">
                                    <img class="Image--fadeIn lazyautosizes Image--lazyLoaded"
                                        src="<?php echo $single['featured_image'] ?>"
                                        data-widths="[200,400,600,700,800,900,1000,1200,1400,1600]" data-sizes="auto"
                                        data-expand="-100" alt="<?php echo $single['title'] ?>" data-max-width="3024"
                                        data-max-height="4032"
                                        data-original-src="<?php echo $single['featured_image'] ?>"
                                        data-srcset="<?php echo $single['featured_image'] ?> 1600w"
                                        sizes="749px"
                                        srcset="<?php echo $single['featured_image'] ?> 1600w">

                                    <span class="Image__Loader"></span><noscript>
                                        <img src="<?php echo $single['featured_image'] ?>"
                                            alt="<?php echo $single['title'] ?>">
                                    </noscript>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="Product__InfoWrapper">
                        <div class="Product__Info " style="top: -200px;">
                            <div class="Container">
                                <div class="ProductMeta">
                                    <h2 class="ProductMeta__Vendor Heading u-h6">The Lullaby Club</h2>
                                    <h1 class="ProductMeta__Title Heading u-h2"><?php echo $single['title'] ?></h1>
                                    <div class="ProductMeta__PriceList Heading"><span
                                            class="ProductMeta__Price Price Text--subdued u-h4"
                                            data-money-convertible=""><?php echo $single['price'] ?></span></div>
                                    <p class="afterpay-paragraph" data-product-id="6095476850884"><span
                                            class="afterpay-text1">or make 4 interest-free payments of </span><strong
                                            class="afterpay-instalments"><?php echo $single['price'] ?></strong><span
                                            class="afterpay-text2"> fortnightly with </span><img class="afterpay-logo"
                                            src="https://static.afterpay.com/integration/product-page/logo-afterpay-colour.png"
                                            srcset="https://static.afterpay.com/integration/product-page/logo-afterpay-colour.png 1x, https://static.afterpay.com/integration/product-page/logo-afterpay-colour@2x.png 2x, https://static.afterpay.com/integration/product-page/logo-afterpay-colour@3x.png 3x"
                                            width="100" height="21" alt="Afterpay"
                                            style="vertical-align: middle; width: 100px; border: 0px;"><span
                                            class="afterpay-text3">&nbsp;</span><a class="afterpay-link"
                                            href="https://www.afterpay.com/terms" target="_blank"><u
                                                class="afterpay-link-inner"
                                                style="font-size: 12px; text-decoration: underline;">More info</u></a>
                                    </p>
                                    <div class="ProductMeta__Description Rte">
                                        <div class="powr-popup">
                                            <h4 class="powr-popup">
                                                <strong><?php echo $single['title'] ?></strong><br>
                                            </h4>
                                            <h5 class="powr-popup"><em>The Lullaby Club</em></h5>
                                            <?php echo $single['description'] ?>


                                            <div class="TableWrapper">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td><span><strong>Size</strong></span></td>
                                                            <td><span><strong>Fit</strong></span></td>
                                                            <td><span><strong>Bust</strong></span></td>
                                                            <td><span><strong>Length</strong></span></td>
                                                            <td><span><strong>Waist</strong></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong><span>XS</span></strong></td>
                                                            <td><span>6-8</span></td>
                                                            <td><span>114cm</span></td>
                                                            <td><span>90cm</span></td>
                                                            <td><span>132cm</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong><span>S/M</span></strong></td>
                                                            <td><span>10-12</span></td>
                                                            <td><span>120cm</span></td>
                                                            <td><span>93cm</span></td>
                                                            <td><span>138cm</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong><span>M/L</span></strong></td>
                                                            <td><span>14-16</span></td>
                                                            <td><span>126cm</span></td>
                                                            <td><span>96cm</span></td>
                                                            <td><span>144cm</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong><span>L/XL</span></strong></td>
                                                            <td><span>18-20</span></td>
                                                            <td><span>132cm</span></td>
                                                            <td><span>99cm</span></td>
                                                            <td>
                                                                <p><span>150cm</span></p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                            <p>&nbsp;<br></p>
                                            
                                            <ul>
                                                <li><span>Our model is size 8 and wears size XS</span></li>
                                                <li>
                                                    <span>Very Oversized fit.&nbsp;</span>We recommend&nbsp;sizing down
                                                    if you are wanting a less oversized fit.
                                                </li>
                                                <li><span>Fabric is not pre-washed. Cotton/Linen fabrics can shrink by
                                                        3% if washed incorrectly. Steam the item after washing to relax
                                                        the fabric back to size.</span></li>
                                                <li><span style="color: #cc9a33;" color="#cc9a33"><span>Please note: our
                                                            size recommendations&nbsp;are just that - a
                                                            recommendation.</span></span></li>
                                                <li><span>Please allow 1-2 cm measurement tolerance.</span></li>
                                            </ul>
                                            <p>&nbsp;</p>
                                            <ul></ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <form method="post" action="/cart/add" id="product_form_6095476850884"
                                    accept-charset="UTF-8" class="ProductForm" enctype="multipart/form-data"><input
                                        type="hidden" name="form_type" value="product"><input type="hidden" name="utf8"
                                        value="✓">
                                    <div class="ProductForm__Variants">
                                        <div class="ProductForm__Option "><button type="button"
                                                class="ProductForm__Item" aria-expanded="false"
                                                aria-controls="popover-6095476850884-product-template-size">
                                                <span class="ProductForm__OptionName">Size: <span
                                                        class="ProductForm__SelectedValue">XS</span></span><svg
                                                    class="Icon Icon--select-arrow" role="presentation"
                                                    viewBox="0 0 19 12">
                                                    <polyline fill="none" stroke="currentColor" points="17 2 9.5 10 2 2"
                                                        fill-rule="evenodd" stroke-width="2" stroke-linecap="square">
                                                    </polyline>
                                                </svg></button></div>
                                        <div class="no-js ProductForm__Option">
                                            <div class="Select Select--primary"><svg class="Icon Icon--select-arrow"
                                                    role="presentation" viewBox="0 0 19 12">
                                                    <polyline fill="none" stroke="currentColor" points="17 2 9.5 10 2 2"
                                                        fill-rule="evenodd" stroke-width="2" stroke-linecap="square">
                                                    </polyline>
                                                </svg><select id="product-select-6095476850884" name="id"
                                                    title="Variant">
                                                    <option selected="selected" value="37620304314564" data-sku="">XS -
                                                        $102.00</option>
                                                    <option value="37620304347332" data-sku="">S/M - $102.00</option>
                                                    <option disabled="disabled" value="37620304380100" data-sku="">M/L -
                                                        $102.00</option>
                                                    <option disabled="disabled" value="37620304412868" data-sku="">L/XL
                                                        - $102.00</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="ProductForm__QuantitySelector">
                                            <div class="QuantitySelector QuantitySelector--large"><span
                                                    class="QuantitySelector__Button Link Link--secondary"
                                                    data-action="decrease-quantity"><svg class="Icon Icon--minus"
                                                        role="presentation" viewBox="0 0 16 2">
                                                        <path d="M1,1 L15,1" stroke="currentColor" fill="none"
                                                            fill-rule="evenodd" stroke-linecap="square"></path>
                                                    </svg></span>
                                                <input type="text" class="QuantitySelector__CurrentQuantity"
                                                    pattern="[0-9]*" name="quantity" value="1">
                                                <span class="QuantitySelector__Button Link Link--secondary"
                                                    data-action="increase-quantity"><svg class="Icon Icon--plus"
                                                        role="presentation" viewBox="0 0 16 16">
                                                        <g stroke="currentColor" fill="none" fill-rule="evenodd"
                                                            stroke-linecap="square">
                                                            <path d="M8,1 L8,15"></path>
                                                            <path d="M1,8 L15,8"></path>
                                                        </g>
                                                    </svg></span>
                                            </div>
                                        </div>
                                    </div><button type="submit"
                                        class="ProductForm__AddToCart Button Button--primary Button--full"
                                        data-action="add-to-cart"><span>Add to cart</span></button>
                                </form>
                            </div>
                        </div>

                        <div class="Product__ActionList hidden-pocket">
                            <div class="Product__ActionItem hidden-lap-and-up">
                                <button class="RoundButton RoundButton--small RoundButton--flat"
                                    data-action="open-product-zoom"><svg class="Icon Icon--plus" role="presentation"
                                        viewBox="0 0 16 16">
                                        <g stroke="currentColor" fill="none" fill-rule="evenodd"
                                            stroke-linecap="square">
                                            <path d="M8,1 L8,15"></path>
                                            <path d="M1,8 L15,8"></path>
                                        </g>
                                    </svg></button>
                            </div>
                            <div class="Product__ActionItem">
                                <button class="RoundButton RoundButton--small RoundButton--flat"
                                    data-action="toggle-social-share" data-animate-bottom="" aria-expanded="false">
                                    <span class="RoundButton__PrimaryState"><svg class="Icon Icon--share"
                                            role="presentation" viewBox="0 0 24 24">
                                            <g stroke="currentColor" fill="none" fill-rule="evenodd" stroke-width="1.5">
                                                <path d="M8.6,10.2 L15.4,6.8"></path>
                                                <path d="M8.6,13.7 L15.4,17.1"></path>
                                                <circle stroke-linecap="square" cx="5" cy="12" r="4"></circle>
                                                <circle stroke-linecap="square" cx="19" cy="5" r="4"></circle>
                                                <circle stroke-linecap="square" cx="19" cy="19" r="4"></circle>
                                            </g>
                                        </svg></span>
                                    <span class="RoundButton__SecondaryState"><svg class="Icon Icon--close"
                                            role="presentation" viewBox="0 0 16 14">
                                            <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none"
                                                fill-rule="evenodd"></path>
                                        </svg></span>
                                </button>
                                <div class="Product__ShareList" aria-hidden="true">
                                    <a class="Product__ShareItem"
                                        href="https://www.facebook.com/sharer.php?u=https://thewholesome.store/products/avalon-smock-dress-lemon"
                                        target="_blank" rel="noopener"><svg class="Icon Icon--facebook"
                                            viewBox="0 0 9 17">
                                            <path
                                                d="M5.842 17V9.246h2.653l.398-3.023h-3.05v-1.93c0-.874.246-1.47 1.526-1.47H9V.118C8.718.082 7.75 0 6.623 0 4.27 0 2.66 1.408 2.66 3.994v2.23H0v3.022h2.66V17h3.182z">
                                            </path>
                                        </svg>Facebook</a>
                                    <a class="Product__ShareItem"
                                        href="https://pinterest.com/pin/create/button/?url=https://thewholesome.store/products/avalon-smock-dress-lemon&amp;media=https://cdn.shopify.com/s/files/1/0053/1713/2361/products/image_88773345-70e3-49c5-87d4-eb4ca6dcca66_large.jpg?v=1606198090&amp;description=Avalon%20Smock%20Dress%20The%20Lullaby%20Club%20Our%20popular%20oversized%20flowing%20Smock%20dress%20made%20from%20soft..."
                                        target="_blank" rel="noopener"><svg class="Icon Icon--pinterest"
                                            role="presentation" viewBox="0 0 32 32">
                                            <path
                                                d="M16 0q3.25 0 6.208 1.271t5.104 3.417 3.417 5.104T32 16q0 4.333-2.146 8.021t-5.833 5.833T16 32q-2.375 0-4.542-.625 1.208-1.958 1.625-3.458l1.125-4.375q.417.792 1.542 1.396t2.375.604q2.5 0 4.479-1.438t3.063-3.937 1.083-5.625q0-3.708-2.854-6.437t-7.271-2.729q-2.708 0-4.958.917T8.042 8.689t-2.104 3.208-.729 3.479q0 2.167.812 3.792t2.438 2.292q.292.125.5.021t.292-.396q.292-1.042.333-1.292.167-.458-.208-.875-1.083-1.208-1.083-3.125 0-3.167 2.188-5.437t5.729-2.271q3.125 0 4.875 1.708t1.75 4.458q0 2.292-.625 4.229t-1.792 3.104-2.667 1.167q-1.25 0-2.042-.917t-.5-2.167q.167-.583.438-1.5t.458-1.563.354-1.396.167-1.25q0-1.042-.542-1.708t-1.583-.667q-1.292 0-2.167 1.188t-.875 2.979q0 .667.104 1.292t.229.917l.125.292q-1.708 7.417-2.083 8.708-.333 1.583-.25 3.708-4.292-1.917-6.938-5.875T0 16Q0 9.375 4.687 4.688T15.999.001z">
                                            </path>
                                        </svg>Pinterest</a>
                                    <a class="Product__ShareItem"
                                        href="https://twitter.com/share?text=Avalon Smock Dress - Lemon&amp;url=https://thewholesome.store/products/avalon-smock-dress-lemon"
                                        target="_blank" rel="noopener"><svg class="Icon Icon--twitter"
                                            role="presentation" viewBox="0 0 32 26">
                                            <path
                                                d="M32 3.077c-1.1748.525-2.4433.8748-3.768 1.031 1.356-.8123 2.3932-2.0995 2.887-3.6305-1.2686.7498-2.6746 1.2997-4.168 1.5934C25.751.796 24.045.0025 22.158.0025c-3.6242 0-6.561 2.937-6.561 6.5612 0 .5124.0562 1.0123.1686 1.4935C10.3104 7.7822 5.474 5.1702 2.237 1.196c-.5624.9687-.8873 2.0997-.8873 3.2994 0 2.2746 1.156 4.2867 2.9182 5.4615-1.075-.0314-2.0872-.3313-2.9745-.8187v.0812c0 3.1806 2.262 5.8363 5.2677 6.4362-.55.15-1.131.2312-1.731.2312-.4248 0-.831-.0438-1.2372-.1188.8374 2.6057 3.262 4.5054 6.13 4.5616-2.2495 1.7622-5.074 2.812-8.1546 2.812-.531 0-1.0498-.0313-1.5684-.0938 2.912 1.8684 6.3613 2.9494 10.0668 2.9494 12.0726 0 18.6776-10.0043 18.6776-18.6776 0-.2874-.0063-.5686-.0188-.8498C30.0066 5.5514 31.119 4.3954 32 3.077z">
                                            </path>
                                        </svg>Twitter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="popover-6095476850884-product-template-size"
                    class="OptionSelector Popover Popover--withMinWidth" aria-hidden="true">
                    <header class="Popover__Header">
                        <button type="button" class="Popover__Close Icon-Wrapper--clickable"
                            data-action="close-popover"><svg class="Icon Icon--close" role="presentation"
                                viewBox="0 0 16 14">
                                <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd">
                                </path>
                            </svg></button>
                        <span class="Popover__Title Heading u-h4">Size</span>
                    </header>

                    <div class="Popover__Content">
                        <div class="Popover__ValueList" data-scrollable=""><button type="button"
                                class="Popover__Value is-selected Heading Link Link--primary u-h6" data-value="XS"
                                data-option-position="1" data-action="select-value">XS</button><button type="button"
                                class="Popover__Value  Heading Link Link--primary u-h6" data-value="S/M"
                                data-option-position="1" data-action="select-value">S/M</button><button type="button"
                                class="Popover__Value  Heading Link Link--primary u-h6" data-value="M/L"
                                data-option-position="1" data-action="select-value">M/L</button><button type="button"
                                class="Popover__Value  Heading Link Link--primary u-h6" data-value="L/XL"
                                data-option-position="1" data-action="select-value">L/XL</button></div>
                    </div>
                </div>
            </section>

            <style>
            /* Very ugly haha */

            @media screen and (max-width: 640px) {
                #shopify-section-product-template+.shopify-section--bordered {
                    border-top: 0;
                }

                #shopify-section-product-template+.shopify-section--bordered>.Section {
                    padding-top: 0;
                }
            }
            </style>
            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                <!-- Background of PhotoSwipe -->
                <div class="pswp__bg"></div>

                <!-- Slides wrapper with overflow:hidden. -->
                <div class="pswp__scroll-wrap">

                    <!-- Container that holds slides. Do not remove as content is dynamically added -->
                    <div class="pswp__container">
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                    </div>

                    <!-- Main UI bar -->
                    <div class="pswp__ui pswp__ui--hidden">
                        <button class="pswp__button pswp__button--prev RoundButton" data-animate-left=""
                            title="Previous (left arrow)"><svg class="Icon Icon--arrow-left" role="presentation"
                                viewBox="0 0 11 21">
                                <polyline fill="none" stroke="currentColor" points="10.5 0.5 0.5 10.5 10.5 20.5"
                                    stroke-width="1.25"></polyline>
                            </svg></button>
                        <button class="pswp__button pswp__button--close RoundButton RoundButton--large"
                            data-animate-bottom="" title="Close (Esc)"><svg class="Icon Icon--close" role="presentation"
                                viewBox="0 0 16 14">
                                <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd">
                                </path>
                            </svg></button>
                        <button class="pswp__button pswp__button--next RoundButton" data-animate-right=""
                            title="Next (right arrow)"><svg class="Icon Icon--arrow-right" role="presentation"
                                viewBox="0 0 11 21">
                                <polyline fill="none" stroke="currentColor" points="0.5 0.5 10.5 10.5 0.5 20.5"
                                    stroke-width="1.25"></polyline>
                            </svg></button>
                    </div>
                </div>
            </div>
        </div>
    </main>
        
    <?php endif; ?>

    <?php include_once('../includes/footer.php'); ?>
</div>
</body>

</html>
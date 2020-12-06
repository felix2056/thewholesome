<?php include_once('../includes/header.php'); ?>

<div class="PageContainer">
    <?php include_once('../includes/nav.php'); ?>

    <main id="main" role="main">
        <div id="shopify-section-page-contact-template" class="shopify-section">
            <div class="Container">
                <header class="PageHeader">
                    <div class="SectionHeader SectionHeader--center">
                        <h1 class="SectionHeader__Heading Heading u-h1">Contact</h1>
                    </div>
                </header>

                <div class="PageContent PageContent--narrow">
                    <div class="Rte">
                        <h3>Contact</h3>
                        <p>Please fill out the form across and a member of our team will get back to you shortly!&nbsp;
                        </p>
                        <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8"
                            class="Form Form--spacingTight"><input type="hidden" name="form_type" value="contact"><input
                                type="hidden" name="utf8" value="✓">
                            <div class="Form__Group">
                                <div class="Form__Item">
                                    <input type="text" class="Form__Input" name="contact[name]" aria-label="Your name"
                                        placeholder="Your name" required="">
                                    <label class="Form__FloatingLabel">Your name</label>
                                </div>

                                <div class="Form__Item">
                                    <input type="email" class="Form__Input" name="contact[email]"
                                        aria-label="Your email" placeholder="Your email" required="">
                                    <label class="Form__FloatingLabel">Your email</label>
                                </div>
                            </div>
                            <div class="Form__Item"><input type="text" class="Form__Input"
                                    name="contact[Your phone (optional)]" aria-label="Your phone (optional)"
                                    placeholder="Your phone (optional)">
                                <label class="Form__FloatingLabel">Your phone (optional)</label>
                            </div>
                            <div class="Form__Item">
                                <textarea name="contact[body]" cols="30" rows="10" class="Form__Textarea"
                                    aria-label="Your message" placeholder="Your message" required=""></textarea>
                                <label class="Form__FloatingLabel">Your message</label>
                            </div>

                            <button type="submit" class="Form__Submit Button Button--primary Button--full">Send
                                message</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php include_once('../includes/footer.php'); ?>
</div>
</body>

</html>
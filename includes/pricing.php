<!-- PRICING SECTION -->
<section class="pricing" id="pricing">
    <div class="pricing-container">
        <div class="pricing-header">
            <h2>Simple, Transparent Pricing</h2>
            <p>Choose the plan that's right for your business. No hidden fees, ever.</p>

            <!-- POS-28: Toggle for monthly/yearly billing -->
            <div class="pricing-toggle">
                <span class="toggle-label active" id="monthly-label">Monthly</span>
                <label class="switch">
                    <input type="checkbox" id="billing-toggle">
                    <span class="slider round"></span>
                </label>
                <span class="toggle-label" id="yearly-label">Yearly <span class="discount-badge">Save 20%</span></span>
            </div>
        </div>

        <!-- POS-23: Implement 3-column pricing table layout -->
        <div class="pricing-grid">
            <!-- POS-24: Basic plan card -->
            <div class="pricing-card">
                <div class="plan-info">
                    <h3>Basic</h3>
                    <div class="plan-price">
                        <span class="currency">$</span>
                        <span class="price-amount" data-monthly="29" data-yearly="299">29</span>
                        <span class="period">/mo</span>
                    </div>
                    <p>Perfect for small retail shops and boutiques.</p>
                </div>
                <ul class="plan-features">
                    <li>1 Register / Store</li>
                    <li>Up to 1,000 Products</li>
                    <li>Basic Sales Analytics</li>
                    <li>Email Support</li>
                </ul>
                <a href="#contact" class="plan-btn">Choose Basic</a>
            </div>

            <!-- POS-25: Pro plan card (Popular) -->
            <!-- POS-29: Style popular plan with badge -->
            <div class="pricing-card popular">
                <div class="popular-badge">Most Popular</div>
                <div class="plan-info">
                    <h3>Pro</h3>
                    <div class="plan-price">
                        <span class="currency">$</span>
                        <span class="price-amount" data-monthly="79" data-yearly="699">79</span>
                        <span class="period">/mo</span>
                    </div>
                    <p>Ideal for growing businesses with multiple locations.</p>
                </div>
                <ul class="plan-features">
                    <li>Unlimited Registers</li>
                    <li>Unlimited Products</li>
                    <li>Advanced CRM Features</li>
                    <li>Inventory Low-Stock Alerts</li>
                    <li>Priority Chat Support</li>
                </ul>
                <a href="#contact" class="plan-btn featured">Choose Pro</a>
            </div>

            <!-- POS-26: Enterprise plan card -->
            <div class="pricing-card">
                <div class="plan-info">
                    <h3>Enterprise</h3>
                    <div class="plan-price">
                        <span class="price-text">Custom</span>
                    </div>
                    <p>Scalable solutions for large-scale operations.</p>
                </div>
                <ul class="plan-features">
                    <li>Multi-Region Deployment</li>
                    <li>Dedicated Account Manager</li>
                    <li>Custom API Access</li>
                    <li>White-Label Reporting</li>
                    <li>24/7 Phone Support</li>
                </ul>
                <a href="#contact" class="plan-btn">Speak to Sales</a>
            </div>
        </div>
    </div>
</section>